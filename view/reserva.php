<?php
include '../services/connection.php';
date_default_timezone_set('UTC');
session_start();
if (!isset($_SESSION['email'])) {
    echo"<script>window.location.replace('login.php')</script>";
}
$idlugar=$_REQUEST['idlugar'];
$idmesa=$_REQUEST['idmesa'];
$nomlugar=$_REQUEST['nomlugar'];
$fecha=date("Y-m-d");
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
        <b><a class="btn-logout">Reservar</a></b>
        </ul>
        </div>
        <div class="column-2 titulo2">
            <h1 class="colorh1">EXPERIA EXPERIENCE</h1>
        </div>
        <div class="logout column-1">
            <ul class="padding-lat">
            <b><a style="text-decoration:none" class="btn-logout" href=<?php echo "mesas.php?id=".$idlugar ; ?>>Volver</a></b>
            </ul>
        </div>
    </div>
    <div class="flex">
        <div class="menu">
    <h1 <?php echo "style='color: black;'";?> >Reserva la mesa</div> 
    </div>
    <div class="flex" id="flex">
        <div class="contenido" id="contenido">
        <div class="div_botones" id="div_botones">
        <div class="reserva">
            <div class=alert id='mensaje'></div>
            <table class="table">
            <tr>
            <td><p>Nombre de la reserva</p></td>
            <td><p>Telefono</p></td>
            <td><p>Fecha</p></td>
            <td><p>Hora</p></td>
            </tr>
            <tr>
        <form METHOD='POST' action='../processes/reserva.proc.php' onsubmit="return validarReserva()">
            <td><input type='text' name='nombre' id='nombre'></td>
            <td><input type='number' name='telefono' id='telefono'></td>
            <td><input type="date" id="start" name="fecha" value=<?php echo $fecha;?> min=<?php echo $fecha;?>></td>
            <td><select name="hora">
                    <option value="13:00">13:00</option>
                    <option value="14:00">14:00</option>
                    <option value="15:00">15:00</option>
                    <option value="16:00">16:00</option>
                    <option value="20:00">20:00</option>
                    <option value="21:00">21:00</option>
                    <option value="22:00">22:00</option>
                    <option value="23:00">23:00</option>
                </select></td>
                <input type='hidden' name='idmesa' value=<?php echo $idmesa ?>>
                <input type='hidden' name='idlugar' value=<?php echo $idlugar ?>>
                <input type='hidden' name='nomlugar' value=<?php echo $nomlugar ?>>
            <td><input type='submit' value='Completar reserva' class="btn btn-dark"></td>
            </tr>
            </table>
        </form>
    </div>
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
    <div class="contenido" id="js">
    </div>
    </div>
    <footer>
    <div class="logo_footer">
    </footer>
</body>

</html>