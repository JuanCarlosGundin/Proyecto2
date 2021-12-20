<?php
include '../services/connection.php';

$nom=$_POST['nombre'];
$mail=$_POST['mail'];
$perfil=$_POST['perfil'];
$id=$_POST['id'];
    $modificar = $pdo->prepare("UPDATE tbl_usuarios
    SET nom_usu = ?,mail_usu = ?,id_perfil = ?
    where id_usu= ?");
    $modificar->bindParam(1, $nom);
    $modificar->bindParam(2, $mail);
    $modificar->bindParam(3, $perfil);
    $modificar->bindParam(4, $id); 
    $modificar->execute();
    echo"<script>window.location.replace('../view/usuarios.admin.php')</script>";
