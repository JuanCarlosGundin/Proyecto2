<?php

require_once '../services/config.php';
require_once '../services/connection.php';

$id=$_POST['id'];

$result = mysqli_query($conn,"DELETE FROM tbl_fecha
WHERE id_fecha = $id");

$del = $pdo->prepare("DELETE FROM tbl_fecha
WHERE id_fecha = ?");
    $del->bindParam(1, $id);
    $del->execute();
echo"<script>window.location.replace('../view/inicio.php')</script>";

?>