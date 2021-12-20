<?php
include '../services/connection.php';
session_start();
if (!isset($_SESSION['admin'])) {
    echo"<script>window.location.replace('login.php')</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <title>ADMINISTRADOR</title>
    <link rel="shortcut icon" href="../img/Aiga_restaurant_inv.svg.png" type="image/x-icon">
    <script src="../js/code.js"></script>
</head>

<body id="portada">
    <br>
    <div class="titulo">
        <h1>ZONA ADMINISTRADOR</h1>
    </div>
    <br>
    <div class="row">
    <b><a style="text-decoration:none" class="btn-logout" href="usuarios.admin.php">Administrar usuarios</a></b><br/>
    <b><a style="text-decoration:none" class="btn-logout" href="mesas.admin.php">Administrar mesas</a></b><br/>
    <b><a style="text-decoration:none" class="btn-logout" href="inicio.php">Pagina principal</a></b><br/>
    <b><a style="text-decoration:none" class="btn-logout" href="../processes/logout.proc.php">Logout</a></b><br/>
    </div>
</body>

</html>