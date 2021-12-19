<?php
include '../services/connection.php';
session_start();
if (!isset($_SESSION['email'])) {
    echo"<script>window.location.replace('login.php')</script>";
}
$log=$pdo->prepare("SELECT tbl_reservas.lugar_reserva as lugar
,tbl_mesa.numero_mesa as numero
,tbl_reservas.fecha_reserva as dia
,tbl_reservas.telefono_reserva as telf
,tbl_reservas.hora_reserva as entrada
,tbl_reservas.nom_reserva as nombre
,tbl_reservas.id_reserva as id
from tbl_reservas
inner join tbl_mesa
on tbl_reservas.id_mesa=tbl_mesa.id_mesa
Order by tbl_reservas.fecha_reserva ASC");
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
        <b><a class="btn-logout">Reservas activas</a></b>
        </ul>
        </div>
        <div class="column-2 titulo2">
            <h1>EXPERIA EXPERIENCE</h1>
        </div>
        <div class="logout column-1">
            <ul class="padding-lat">
            <b><a style="text-decoration:none" class="btn-logout" href="inicio.php">Volver</a></b>
            </ul>
        </div>
    </div>
    <div class="flex">
        <div class="menu">
    <h1 <?php echo "style='color: black;'";?> >Reserva Activas</div> 
    </div>
    <div class="flex" id="flex">
        <div class="contenido" id="contenido">
        <div class="div_botones" id="div_botones">
        <table class="table">
                <tr>
                    <th>Localización</th>
                    <th>Mesa</th>
                    <th>Fecha</th>
                    <th>Hora de Reserva</th>
                    <th>Nom reserva</th>
                    <th>Telefono</th>
                </tr>
                <?php
                foreach ($login as $registro){
                ?>
            <tr>
    <td><?php echo"{$registro['lugar']}";?></td>
    <td><?php echo"{$registro['numero']}";?></td>
    <td><?php echo"{$registro['dia']}";?></td>
    <td><?php echo"{$registro['entrada']}";?></td>
    <td><?php echo"{$registro['nombre']}";?></td>
    <td><?php echo"{$registro['telf']}";?></td>
    <td><form method="POST" action="../processes/eliminar.reserva.proc.php">
        <input type="hidden" value=<?php echo $registro['id']?> name="id">
        <input type="submit" <?php echo "style='background: #F54646;'";?> value="Cerrar reserva" name="eliminar"></form>
    </td>
    </tr>
    <?php
    }
    ?>
     </table>
                    <input type="hidden" value="<?php echo $id;?>" id="arreglo">
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
    <footer>
    <div class="logo_footer">
    </footer>
</body>

</html>