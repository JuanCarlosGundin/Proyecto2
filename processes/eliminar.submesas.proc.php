<?php
require_once '../services/connection.php';
$id=$_POST['id'];
$lugar=$_POST['idlugar'];
$idlugar=$_POST['lugar'];
$del = $pdo->prepare("UPDATE `tbl_mesa` SET `mesa_actividad` = '0' WHERE (`id_mesa` = ?)");
    $del->bindParam(1, $id);
$del->execute();
echo"<script>window.location.replace('../view/mesas.admin.php?id=".$idlugar."&lugar=".$lugar."')</script>";
?>