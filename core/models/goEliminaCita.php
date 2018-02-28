<?php
//print_r($_GET);
$id_cita=$_GET['id_cita'];
include(MODELS . 'conexion.php');

$sql = "delete from cita where cod_cita=$id_cita";
$mysqli->query($sql);
/*Inicio Consulta Auditoria*/
    session_start();
    $fecha = date("Y-m-d H:i:s");
    $auditoria=$mysqli->query("INSERT INTO auditoria VALUES ('', '".$_SESSION['user_id']."', 'cita', '".$fecha."', '4', 'Terminar_cita');");
    /*Fin Consulta Auditoria*/
echo "<script>alert('Se ha Eliminado la cita con exito!!!'); location.href='?view=consultas&action=listadoCitas'; </script>";

?>