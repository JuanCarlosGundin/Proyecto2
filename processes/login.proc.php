<?php
include '../services/connection.php';
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email_usuario=$_POST['email'];
    $pass_usuario=$_POST['password'];
    $stmt = $pdo->prepare("SELECT * FROM tbl_usuarios WHERE mail_usu=? and contra_usu=MD5(?)");
    $stmt->bindParam(1, $_REQUEST['email']);
    $stmt->bindParam(2, $_REQUEST['password']);
    $stmt->execute();
    $comprobar=$stmt->fetchAll(PDO::FETCH_ASSOC);
    try {
        if (!$comprobar=="") {
            session_start();
            $_SESSION['email']=$email_usuario;
            if($comprobar[0]['id_perfil']=='1'){
                $_SESSION['admin']="1";
                echo"<script>window.location.replace('../view/zona.admin.php')</script>";
            }else{
            echo"<script>window.location.replace('../view/inicio.php')</script>";
            }
        }else {
            session_start();
            echo"<script>window.location.replace('../view/login.php?error=errorinicio')</script>";
            
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}else{
    echo"<script>window.location.replace('../view/login.php?error=errorinicio')</script>";
}