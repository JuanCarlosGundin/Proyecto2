<?php
// 1. Conexión con la base de datos	
include '../services/connection.php';

$email=$_REQUEST['email'];
$psswd=$_REQUEST['password'];

$email=mysqli_real_escape_string($conn,$email);

$user = mysqli_query($conn,"SELECT * FROM tbl_camareros WHERE usu_cam='$email' and contra_cam=MD5('{$psswd}')");

if (mysqli_num_rows($user) == 1) {
    // Comprobamos si coincide el email y el password
    session_start();
    $_SESSION['email']=$email;
    header("location: ../view/inicio.php");
} else {
    // En caso de que falle volvemos al login
    header("location: ../view/login.php?error=errorinicio");
}

mysqli_free_result($user);