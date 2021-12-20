<?php
 $loc=$_POST['localizacion'];
$fecha=$_POST['fecha'];
$entrada=$_POST['entrada'];
$nom=$_POST['nom'];
echo"<script>window.location.replace('../view/historial.php?loc=".$loc."&fecha=".$fecha."&entrada=".$entrada."&nom=".$nom."')</script>";
?>