<?php
include '../services/connection.php';
session_start();
if (!isset($_SESSION['admin'])) {
    echo"<script>window.location.replace('login.php')</script>";
}
$id=$_REQUEST['id'];
$lugar=$_REQUEST['lugar'];
$origen=$_REQUEST['origen'];
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
        <b><a class="btn-logout">Actualizar</a></b>
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
    <h1 <?php echo "style='color: black;'";?> >Editar zona</div> 
    </div>
    <div class="flex" id="flex">
        <div class="contenido" id="contenido">
        <div class="div_botones" id="div_botones">
        <div class="reserva">
            <div class=alert id='mensaje'></div>
            <table class="table">
            <tr>
            <td><p>Zona</p></td>
            <td><p>Lugar</p></td>
            <td><p>Permisos</p></td>
            </tr>
            <tr>
        <form METHOD='POST' action='../processes/actualizar.usuario.proc.php' onsubmit="return inscripcion()">
            <td><input type='text' value=<?php echo $nom; ?> name='nombre' id='nombre'></td>
            <td><input type='text' value=<?php echo $mail; ?> name='mail' id='nombre'></td>
                <td><select name="origen">
                    <option value="1" selected >Terrazas</option>
                    <option value="2">Comedores</option>
                    <option value="3">Salas privadas</option>
                </select></td>
                <input type='hidden' name='id' value=<?php echo $id ?>>
            <td><input type='submit' value='Actualizar' class="btn btn-dark"></td>
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
    <footer>
    <div class="logo_footer">
    </footer>
</body>

</html>