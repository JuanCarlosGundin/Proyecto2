<?php
require_once '../services/connection.php';
$id=$_POST['id'];
$del = $pdo->prepare("DELETE FROM tbl_reservas
WHERE id_reserva = ?");
    $del->bindParam(1, $id);
$del->execute();
echo"<script>window.location.replace('../view/reservas.actuales.php')</script>";
?>