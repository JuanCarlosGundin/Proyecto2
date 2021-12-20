<?php
include '../services/connection.php';
session_start();
if (!isset($_SESSION['admin'])) {
    echo"<script>window.location.replace('login.php')</script>";
}
$lugar=$_REQUEST['lugar'];
$id=$_REQUEST['id'];
$log=$pdo->prepare("SELECT *
from tbl_mesa
where lugar_mesa like ?");
$log->bindParam(1, $lugar);
$log->execute();
$login=$log->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Inicio</title>
    <link rel="shortcut icon" href="../img/Aiga_restaurant_inv.svg.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="../js/code.js"></script>
</head>
<body id="portada">
    <div class="row2" id="section-1">
        <div class="usuario column-1">
        <ul class="padding-lat">
        <b><a class="btn-logout">Administración</a></b>
        </ul>
        </div>
        <div class="column-2 titulo2">
            <h1 class="colorh1">EXPERIA EXPERIENCE</h1>
        </div>
        <div class="logout column-1">
            <ul class="padding-lat">
            <b><a style="text-decoration:none" class="btn-logout" href="mesas.admin.php">Volver</a></b>
            </ul>
        </div>
    </div>
    <div class="flex">
        <div class="menu">
<h1 <?php echo "style='color: black;'";?> >Administrar Mesas de <?php echo $lugar;?>
        </div> 
    </div>
    <div class="flex" id="flex">
        <div class="contenido" id="contenido">
        <div class="div_botones" id="div_botones">
        <table class="table">
                <tr>
                    <th>Mesa</th>
                    <th>Sillas</th>
                    <th>Estado</th>
                    <th></th>
                </tr>
                <?php
                foreach ($login as $registro){
                   if($registro['mesa_actividad']=="1"){
                ?>
            <tr>
                <td><?php echo"{$registro['numero_mesa']}";?></td>
                <td><?php echo"{$registro['sillas_mesa']}";?></td>
                <td><?php echo"{$registro['estado_mesa']}";?></td>
                <td><form method="POST" action="editar.submesa.php">
                <input type="hidden" value="<?php echo"{$registro['numero_mesa']}";?>" name="numero">
                <input type="hidden" value="<?php echo"{$registro['sillas_mesa']}";?>" name="sillas">
                <input type="hidden" value="<?php echo"{$registro['lugar_mesa']}";?>" name="lugar">
                <input type="hidden" value="<?php echo"{$registro['id_mesa']}";?>" name="id">
                <input type="submit" <?php echo "style='background: white;'";?> value="Editar" name="Gestionar"></form>
                </td>
                <td><form method="POST" action="../processes/eliminar.submesas.proc.php">
                <input type="hidden" value="<?php echo "{$registro['id_mesa']}";?>" name="id">
                <input type="hidden" value="<?php echo $lugar;?>" name="lugar">
                <input type="hidden" value="<?php echo $id;?>" name="idlugar">
                <input type="submit" <?php echo "style='background: red;'";?> value="Eliminar" name="Eliminar"></form>
                </td>
            </tr>
            <?php
            }
            }
            ?>
            </table>
                    <div class="div_terr">
                        </div>
                    <!--<button class='btn_terrazas' id='btn_terraza1' onclick='return btn_terraza1(); $id=1'><img class='img_terraza'>Terraza Norte</button>-->
                </div>

                <div id='modal_terrazas' class='modal'>
                    <div class='modal-content'>
                    <span class='close_terrazas'>&times;</span>
                    <div id='content_terrazas'>
                    </div>
                </div>
                </div>
        </div>
    </div>
    <div class="flex" id="flex">
    <div class="contenido" id="contenido">
    <form method="POST" action="crear.submesa.php">
    <input type="hidden" value="<?php echo $lugar;?>" name="lugar">
    <input type="hidden" value="<?php echo $id;?>" name="id">
    <input type="submit" style="text-decoration:none" class="btn-logout" value="Crear mesa" name="crear"></form>
    </form>
    </div>
    </div>
    <footer>
    <div class="logo_footer">
    </footer>
</body>

</html>