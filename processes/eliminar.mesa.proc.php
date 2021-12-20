<?php
require_once '../services/connection.php';
$id=$_POST['id'];
$del = $pdo->prepare("UPDATE `tbl_lugar` SET `lugar_actividad` = '0' WHERE (`id_lugar` = ?)");
    $del->bindParam(1, $id);
$del->execute();
echo"<script>window.location.replace('../view/mesas.admin.php')</script>";
?>