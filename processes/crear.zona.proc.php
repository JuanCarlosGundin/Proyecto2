<?php
include '../services/connection.php';
// utilizamos el $_FILES para la imagen
$foto_ubi=$_FILES['foto'];
$foto=$foto_ubi['name'];
// establecemos el directorio de la imagen 
$target_dir = "../img/";
//con move_uploaded_file movemos el archivo a la ubicación deseada
$target_file = $target_dir . basename($_FILES["foto"]["name"]);
if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
    echo "El archivo ". basename( $_FILES["foto"]["name"]). " La imagen se subió correctamente";
} else {
    echo "Error al cargar el archivo";
    echo"<script>window.location.replace('../view/mesas.admin.php')</script>";
}
$zona=$_POST['lugar'];
$origen=$_POST['origen'];
    $modificar = $pdo->prepare("INSERT INTO `tbl_lugar` 
    (`nom_lugar`, `id_origen`, `img_lugar`, `lugar_actividad`) 
    VALUES (?, ?, ?, '1')");
    $modificar->bindParam(1, $zona);
    $modificar->bindParam(2, $origen);
    $modificar->bindParam(3, $foto); 
    $modificar->execute();
    echo"<script>window.location.replace('../view/mesas.admin.php')</script>";