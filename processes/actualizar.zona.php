<?php
include '../services/connection.php';
$ruta_fichero_origen = $_FILES['foto']['tmp_name'];
$ruta_nuevo_destino = '../img/'.$_FILES['foto']['name'];
if( move_uploaded_file ( $ruta_fichero_origen, $ruta_nuevo_destino ) ) {
    echo 'Fichero guardado con éxito';
}
$zona=$_POST['lugar'];
$foto_evento=$_POST['foto'];
$origen=$_POST['origen'];
$id=$_POST['id'];
    $modificar = $pdo->prepare("UPDATE tbl_lugar
    SET nom_lugar = ?,mail_usu = ?,id_perfil = ?,img_lugar = ?
    where id_lugar= ?");
    $modificar->bindParam(1, $zona);
    $modificar->bindParam(2, $mail);
    $modificar->bindParam(3, $perfil);
    $modificar->bindParam(4, $_FILES['foto_evento']['name']); 
    $modificar->bindParam(5, $id); 
    $modificar->execute();
    //echo"<script>window.location.replace('../view/mesas.admin.php')</script>";
