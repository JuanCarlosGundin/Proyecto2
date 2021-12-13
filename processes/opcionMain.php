<?php
$id=$_GET["id"];
session_start();
$_SESSION['option']=$id;
header("Location:../view/inicio.php");
//equise
