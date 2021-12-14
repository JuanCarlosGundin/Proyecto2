<?php
 $loc=$_POST['localizacion'];
$fecha=$_POST['fecha'];
$entrada=$_POST['entrada'];
$salida=$_POST['salida'];
echo"<script>window.location.replace('../view/historial.php?loc=".$loc."&fecha=".$fecha."&entrada=".$entrada."&salida=".$salida."')</script>";
?>