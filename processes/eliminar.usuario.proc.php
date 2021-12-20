<?php
require_once '../services/connection.php';
$id=$_POST['id'];
$del = $pdo->prepare("DELETE FROM tbl_usuarios
WHERE id_usu = ?");
    $del->bindParam(1, $id);
$del->execute();
echo"<script>window.location.replace('../view/usuarios.admin.php')</script>";
?>