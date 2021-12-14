<?php
$log=$pdo->prepare("SELECT tbl_fecha.fecha_lugar_reserva as lugar
,tbl_mesa.numero_mesa as numero
,tbl_fecha.fecha_reserva as dia
,tbl_fecha.hora_reserva as entrada
,tbl_fecha.hora_salida as salida
,tbl_fecha.id_fecha as id
from tbl_fecha
inner join tbl_mesa
on tbl_fecha.id_mesa=tbl_mesa.id_mesa");
$log->execute();
$log=$sentencia->fetchAll(PDO::FETCH_ASSOC);
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