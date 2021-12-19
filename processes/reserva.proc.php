<?php
require_once '../services/connection.php';
$telefono=$_POST['telefono'];
$nombre=$_POST['nombre'];
$idmesa=$_POST['idmesa'];
$idlugar=$_POST['idlugar'];
$hora=$_POST['hora'];
$fecha=$_POST['fecha'];
$lugar=$_POST['nomlugar'];

$sentencia=$pdo->prepare("SELECT COUNT(*) from tbl_reservas where fecha_reserva= :u and  hora_reserva= :i");
$sentencia->execute(array(":u" => $fecha,":i" => $hora));
    if($sentencia->fetchColumn() < 1){
            //metemos en la tabla de reservas
            $pdo->beginTransaction(); 
            $reserva = $pdo->prepare("INSERT INTO `bd_restaurante`.`tbl_reservas` (`nom_reserva`, `fecha_reserva`, `hora_reserva`, `id_mesa`, `lugar_reserva`, `telefono_reserva`) VALUES (?, ?, ?, ?, ?, ?)");
             // Bind
             $reserva->bindParam(1, $nombre);
             $reserva->bindParam(2, $fecha);
             $reserva->bindParam(3, $hora);
             $reserva->bindParam(4, $idmesa);
             $reserva->bindParam(5, $lugar);
             $reserva->bindParam(6, $telefono);
            //metemos en la tabla de logs
            $log = $pdo->prepare("INSERT INTO `bd_restaurante`.`tbl_fecha` (`fecha_reserva`, `hora_reserva`, `id_mesa`, `fecha_lugar_reserva`, `fecha_nombre`) VALUES (?, ?, ?, ?, ?)");
            // Bind
            $log->bindParam(1, $fecha);
            $log->bindParam(2, $hora);
            $log->bindParam(3, $idmesa);
            $log->bindParam(4, $lugar);
            $log->bindParam(5, $nombre);

             try{
                $log->execute();
                $reserva->execute();
                $pdo->commit();
                }catch(PDOException $e){
                    echo $e->getMessage();
                    $pdo->rollBack();
                    echo "<script> alert('Error al insertar en la base de datos')</script>";
                    echo"<script>window.location.replace('../view/pag.principal.php')</script>";
                }
            echo "<script> alert('La reserva se ha completado con exito')</script>";
            echo"<script>window.location.replace('../view/mesas.php?id=".$idlugar."')</script>";
    }else{
        echo "<script> alert('La hora que ha indicado ya esta ocupada')</script>";
        echo"<script>window.location.replace('../view/reserva.php?idlugar=".$idlugar."&idmesa=".$idmesa."&nomlugar=".$lugar."')</script>";
    }
        