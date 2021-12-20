<?php
include '../services/connection.php';
$numero=$_POST['numero'];
$sillas=$_POST['sillas'];
$id=$_POST['id'];
$lugar=$_POST['lugar'];
echo $lugar;

    $modificar = $pdo->prepare("INSERT INTO `tbl_mesa` (`lugar_mesa`, `numero_mesa`,
     `sillas_mesa`, `id_lugar`, `estado_mesa`, `mesa_actividad`) 
    VALUES (?, ?, ?, ?, 'Disponible', '1')");
    $modificar->bindParam(1, $lugar);
    $modificar->bindParam(2, $numero);
    $modificar->bindParam(3, $sillas);
    $modificar->bindParam(4, $id); 
    $modificar->execute();
    echo"<script>window.location.replace('../view/mesas.admin.php')</script>";