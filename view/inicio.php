<?php
include '../services/connection.php';
session_start();
if(!isset($_GET['option'])){
$option=1;}else{
    $option=$_GET['option'];
}
/* Controla que la sesión esté iniciada */
if (!isset($_SESSION['email'])) {
    echo"<script>window.location.replace('login.php')</script>";
}
$cadena = substr ( $_SESSION['email'], 0, -10);
if(isset($_REQUEST['id'])){
    $id=$_REQUEST['id'];
    }
    $stmt = $pdo->prepare("SELECT * FROM tbl_lugar 
    inner join tbl_origen 
    on tbl_lugar.id_origen=tbl_origen.id_origen 
    where tbl_origen.id_origen=?");
    $stmt->bindParam(1,$option);
    $stmt->execute();
    $mesas=$stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Inicio</title>
    <link rel="shortcut icon" href="../img/Aiga_restaurant_inv.svg.png" type="image/x-icon">
    <script src="../js/code.js"></script>
</head>

<body id="portada">
    <div class="row2" id="section-1">
        <div class="usuario column-1">
        <ul class="padding-lat">
        <b><a class="btn-logout">Bienvenido, <?php echo $cadena;?></a></b>
        </ul>
        </div>
        <div class="column-2 titulo2">
            <h1>EXPERIA EXPERIENCE</h1>
        </div>
        <div class="logout column-1">
            <ul class="padding-lat">
            <b><a style="text-decoration:none" class="btn-logout" href="../processes/logout.proc.php">Logout</a></b>
            </ul>
        </div>
    </div>
    <div class="flex">
        <div class="menu">
            <nav>
                <ul>
                    <li class="li_barra"><a class="barra" <?php if($option==1){echo "style='background: #c09164;'";}?> href="inicio.php?option=1">Terrazas</a></li>
                    <li class="li_barra"><a class="barra" <?php if($option==2){echo "style='background: #c09164;'";}?> href="inicio.php?option=2">Comedores</a></li>
                    <li class="li_barra"><a class="barra" <?php if($option==3){echo "style='background: #c09164;'";}?> href="inicio.php?option=3">Salas Privadas</a></li>
                </ul>
            </nav>
        </div> 
    </div>
    <div class="flex" id="flex">
        <div class="contenido" id="contenido">
        <div class="div_botones" id="div_botones">
                    <input type="hidden" value="<?php echo $id;?>" id="arreglo">
                    <div class="div_terr">
                        <?php
                        foreach($mesas as $mesa){
                        ?>
                        <div class="div_terr_">
                        <a id='btn_terraza1' href=<?php echo "./mesas.php?id={$mesa['id_lugar']}&nom={$mesa['nom_lugar']}";?>><img class="img_inicio" src=<?php echo "../img/{$mesa['img_lugar']}";?>></a><br><?php echo"{$mesa['nom_lugar']}";?>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                    <!--<button class='btn_terrazas' id='btn_terraza1' onclick='return btn_terraza1(); $id=1'><img class='img_terraza'>Terraza Norte</button>-->
        </div>
        </div>
    </div>
    <div class="flex" id="flex">
    <div class="contenido" id="contenido">
    <b><a style="text-decoration:none" class="btn-logout" href="reservas.actuales.php">Reservas actuales</a></b>
    </div>
    </div>
    <footer>
        <a href="historial.php"><img class="logo_footer2" id="myBtn2" ></a>
    </footer>
</body>

</html>