<?php
require_once '../services/config.php';
require_once '../services/connection.php';
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
        <?php
            include '../services/connection.php';
            session_start();
            $id=0;
            if(!isset($_SESSION['option'])){
            $_SESSION['option']=1;}
            /* Controla que la sesión esté iniciada */
            if (!isset($_SESSION['email'])) {
            header('Location: login.php');
            }
            $cadena = substr ( $_SESSION['email'], 0, -10);
        ?>
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
                    <li class="li_barra"><a class="barra" <?php if($_SESSION['option']==1){echo "style='background: #c09164;'";}?> href="../processes/opcionMain.php?id=1">Terrazas</a></li>
                    <li class="li_barra"><a class="barra" <?php if($_SESSION['option']==2){echo "style='background: #c09164;'";}?> href="../processes/opcionMain.php?id=2">Comedores</a></li>
                    <li class="li_barra"><a class="barra" <?php if($_SESSION['option']==3){echo "style='background: #c09164;'";}?> href="../processes/opcionMain.php?id=3">Salas Privadas</a></li>
                </ul>
            </nav>
        </div> 
    </div>
    <div class="flex" id="flex">
        <div class="contenido" id="contenido">
        <div class="div_botones" id="div_botones">
                    <?php
                    if(isset($_REQUEST['id'])){
                        $id=$_REQUEST['id'];
                        }
                    if($_SESSION['option']==1){
                    ?>

                    <input type="hidden" value="<?php echo $id;?>" id="arreglo">
                    <div class="div_terr">
                        <div class="div_terr_">
                        <a id='btn_terraza1' href="./inicio.php?id=1" ><img class='img_terraza'></a><br>Terraza Norte
                        </div>
                        <div class="div_terr_">
                        <a id='btn_terraza2' href="./inicio.php?id=4" ><img class='img_terraza'></a><br>Terraza Sur
                        </div>
                        <div class="div_terr_">
                        <a id='btn_terraza3' href="./inicio.php?id=5" ><img class='img_terraza'></a><br>Terraza Oeste
                        </div>
                        </div>
                    <!--<button class='btn_terrazas' id='btn_terraza1' onclick='return btn_terraza1(); $id=1'><img class='img_terraza'>Terraza Norte</button>-->

                    <?php
                    }
                    else if($_SESSION['option']==2){
                    ?>
                    <input type="hidden" value="<?php echo $id;?>" id="arreglo">
                        <div class="div_terr">
                        <div class="div_terr_">
                        <a id='btn_terraza1' href="./inicio.php?id=3" ><img class='img_comedor'></a><br>Comedor principal
                        </div>
                        <div class="div_terr_">
                        <a id='btn_terraza2' href="./inicio.php?id=7" ><img class='img_comedor'></a><br>Comedor Gourmet
                        </div>
                        <div class="div_terr_">
                        <a id='btn_terraza3' href="./inicio.php?id=8" ><img class='img_comedor'></a><br>Comedor Deluxe
                        </div>  
                        </div>  
                    <?php
                    }
                     elseif($_SESSION['option']==3){
                    ?>
                    <input type="hidden" value="<?php echo $id;?>" id="arreglo">
                    <div class="div_terr">
                        <div class="div_terr_">
                        <a id='btn_terraza1' href="./inicio.php?id=2" ><img class='img_sala'></a><br>Sala privada 1
                        </div>
                        <div class="div_terr_">
                        <a id='btn_terraza2' href="./inicio.php?id=6" ><img class='img_sala'></a><br>Sala privada 2
                        </div>
                        <div class="div_terr_">
                        <a id='btn_terraza3' href="./inicio.php?id=9" ><img class='img_sala'></a><br>Sala privada 3
                        </div>
                        <div class="div_terr_">
                        <a id='btn_terraza4' href="./inicio.php?id=10" ><img class='img_sala'></a><br>Sala privada 4
                        </div>
                    </div>
                    <?php
                    }
                ?>
                </div>

                <div id='modal_terrazas' class='modal'>
                    <div class='modal-content'>
                    <span class='close_terrazas'>&times;</span>
                    <div id='content_terrazas'>
                        <?php
                            $result = mysqli_query($conn,"SELECT tbl_mesa.estado_mesa as estado,tbl_mesa.id_mesa as id,tbl_mesa.lugar_mesa as lugar,tbl_mesa.numero_mesa as numero,tbl_mesa.comensales_mesa as comensales  
                            from tbl_mesa 
                            inner join tbl_lugar
                            on tbl_mesa.id_lugar=tbl_lugar.id_lugar
                            where tbl_lugar.id_lugar=$id");
                        ?>
                        <?php
                    foreach ($result as $registro){
                        ?>
                        <tr>
                        <td><?php echo"Mesa numero {$registro['numero']}";?></td><br/>
                        <td><?php echo"{$registro['comensales']} comensales";?></td><br/>
                        <td><?php echo"{$registro['estado']}";?></td> 
                        <form method="POST" action="../processes/reserva.php">
                            <input type="hidden" value="<?php echo $registro['estado']?>" name="estado">
                            <input type="hidden" value="<?php echo $registro['id']?>" name="id">
                            <input type="hidden" value="<?php echo $registro['lugar']?>" name="lugar">
                            <?php
                            if($registro['estado']=='Disponible'){
                            ?>
                            <input type="submit" <?php echo "style='background: #8FF772;'";?> value="Reservar" name="Reservar">
                            <?php
                            }elseif($registro['estado']=='Ocupado'){ ?>
                            <input type="submit" <?php echo "style='background: #F54646;'";?> value="Liberar" name="Ocupado">
                            <?php
                            }
                            ?>
                        </form><br/>
                        </tr>
                        <br/>
                        <?php 
                    }
                        ?>
                    </div>
                </div>
                </div>
        </div>
    </div>
    <footer>
    <img class="logo_footer" id="myBtn" onclick="return btn_incidencias();">
            <!-- Boton -->
        <div id="myModal" class="modal">
            <!-- Contenido del Boton -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <div id="content_incidencias"></div>
            </div>
        </div>
        <img class="logo_footer2" id="myBtn2" onclick="return btn_log();">
            <!-- Boton -->
        <div id="myModal2" class="modal">
            <!-- Contenido del Boton -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <div id="content_log">
                    <?php
                $log = mysqli_query($conn,"SELECT tbl_fecha.fecha_lugar_reserva as lugar
                ,tbl_mesa.numero_mesa as numero
                ,tbl_fecha.fecha_reserva as dia
                ,tbl_fecha.hora_reserva as entrada
                ,tbl_fecha.hora_salida as salida
                ,tbl_fecha.id_fecha as id
                from tbl_fecha
                inner join tbl_mesa
                on tbl_fecha.id_mesa=tbl_mesa.id_mesa");


    foreach ($log as $registro){
    ?>
    <tr>
    <td><?php echo"La mesa numero {$registro['numero']} de {$registro['lugar']} en fecha {$registro['dia']} con entrada a las {$registro['entrada']} ";
     if(!($registro['salida']==NULL)){
     echo " y con salida a las {$registro['salida']}";}
     ?>
     <form method="POST" action="../processes/eliminar_log.php">
            <input type="hidden" value="<?php echo $registro['id']?>" name="id">
            <input type="submit" <?php echo "style='background: #F54646;'";?> value="ELIMINAR" name="eliminar">
        </form>
    </td>
    <td></td><br/>
    </tr>
    <br/>
<?php 
}
?>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>