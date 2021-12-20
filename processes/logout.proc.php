<?php
session_start();
session_destroy();
echo"<script>window.location.replace('../view/login.php')</script>";
header('Location: ../view/login.php')
?>