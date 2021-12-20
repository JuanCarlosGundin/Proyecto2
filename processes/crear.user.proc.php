<?php
include '../services/connection.php';
$nom=$_POST['nombre'];
$mail=$_POST['mail'];
$perfil=$_POST['perfil'];
$contra=$_POST['contra'];
$filter=$pdo->prepare("SELECT *
from tbl_usuarios
where mail_usu = ?");
$filter->bindParam(1, $mail);
$filter->execute();
$login=$filter->fetchAll(PDO::FETCH_ASSOC);
if(isset($login[0]['mail_usu'])){
    echo "<script> alert('El correo electronico ya esta en uso intentelo con otro')</script>";
    echo"<script>window.location.replace('../view/add.user.php')</script>";
}else{
$log = $pdo->prepare("INSERT INTO `tbl_usuarios` (`nom_usu`, `contra_usu`, `mail_usu`, `id_perfil`) VALUES (?, MD5( ? ), ?, ?)");
            // Bind
            $log->bindParam(1, $nom);
            $log->bindParam(2, $contra);
            $log->bindParam(3, $mail);
            $log->bindParam(4, $perfil);
            $log->execute();
             echo"<script>window.location.replace('../view/usuarios.admin.php')</script>";
            }
?>
