<?php
include '../services/connection.php';
session_start();
if (!isset($_SESSION['admin'])) {
    echo"<script>window.location.replace('login.php')</script>";
}
$log=$pdo->prepare("SELECT *
from tbl_lugar
inner join tbl_origen
on tbl_lugar.id_origen=tbl_origen.id_origen");
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
            <b><a style="text-decoration:none" class="btn-logout" href="zona.admin.php">Volver</a></b>
            </ul>
        </div>
    </div>
    <div class="flex">
        <div class="menu">
    <h1 <?php echo "style='color: black;'";?> >Administrar Zonas
        </div> 
    </div>
    <div class="flex" id="flex">
        <div class="contenido" id="contenido">
        <div class="div_botones" id="div_botones">
        <table class="table">
                <tr>
                    <th>Zona</th>
                    <th>Lugar</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php
                foreach ($login as $registro){
                    if($registro['lugar_actividad']=="1"){
                ?>
            <tr>
                <td><?php echo"{$registro['nom_lugar']}";?></td>
                <td><?php echo"{$registro['nom_origen']}";?></td>
                <td><form method="POST" action="modificar.zona.php">
                <input type="hidden" value="<?php echo"{$registro['id_lugar']}";?>" name="id">
                <input type="hidden" value="<?php echo"{$registro['nom_lugar']}";?>" name="lugar">
                <input type="hidden" value="<?php echo"{$registro['nom_origen']}";?>" name="origen">
                <input type="submit" <?php echo "style='background: white;'";?> value="Editar" name="Gestionar"></form>
                </td>
                <td><form method="POST" action="modificar.usu.php">
                <input type="hidden" value="<?php echo"{$registro['id_usu']}";?>" name="id">
                <input type="hidden" value="<?php echo"{$registro['nom_usu']}";?>" name="nom">
                <input type="hidden" value="<?php echo"{$registro['mail_usu']}";?>" name="mail">
                <input type="hidden" value="<?php echo"{$registro['id_perfil']}";?>" name="perfil">
                <input type="submit" <?php echo "style='background: green;'";?> value="Ver mesas" name="Gestionar"></form>
                </td>
                <td><form method="POST" action="../processes/eliminar.mesa.proc.php">
                <input type="hidden" value="<?php echo"{$registro['id_lugar']}";?>" name="id">
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
    <b><a style="text-decoration:none" class="btn-logout" href="add.user.php">Añadir Zona</a></b>
    </div>
    </div>
    <footer>
    <div class="logo_footer">
    </footer>
</body>

</html>