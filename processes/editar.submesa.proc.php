<?php
include '../services/connection.php';
$numero=$_POST['numero'];
$sillas=$_POST['sillas'];
$id=$_POST['id'];
$lugar=$_POST['lugar'];

    $modificar = $pdo->prepare("UPDATE tbl_mesa
    SET numero_mesa = ?,sillas_mesa = ?
    where id_mesa= ?");
    $modificar->bindParam(1, $numero);
    $modificar->bindParam(2, $sillas);
    $modificar->bindParam(3, $id); 
    $modificar->execute();
    echo"<script>window.location.replace('../view/mesas.admin.php')</script>";