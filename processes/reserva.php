<?php
require_once '../services/config.php';
require_once '../services/connection.php';
session_start();
$estado=$_POST['estado'];
$lugar=$_POST['lugar'];
$id=$_POST['id'];

if($estado=='Disponible'){
    mysqli_query($conn,"UPDATE `bd_restaurante`.`tbl_mesa` SET `estado_mesa` = 'Ocupado' WHERE (`id_mesa` = $id)");
    mysqli_query($conn,"INSERT INTO `bd_restaurante`.`tbl_fecha` (`id_mesa`,`fecha_reserva`,`fecha_lugar_reserva`,`hora_reserva`) VALUES ($id,CURDATE(),'$lugar',CURTIME())");
    header("Location: ../view/inicio.php");
}else{
    mysqli_query($conn,"UPDATE `bd_restaurante`.`tbl_mesa` SET `estado_mesa` = 'Disponible' WHERE (`id_mesa` = $id)");
    mysqli_query($conn,"UPDATE `bd_restaurante`.`tbl_fecha` SET `hora_salida` = CURTIME() WHERE `id_mesa` = $id and `hora_salida` is NULL");
    header("Location: ../view/inicio.php");
}