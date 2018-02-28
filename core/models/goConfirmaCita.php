<?php
//print_r($_GET);
$id_cita=$_GET['id_cita'];
include(MODELS . 'conexion.php');

$sql = "Update cita Set status_cita='C' where cod_cita=$id_cita";
if (mysqli_query($mysqli, $sql)) {
echo "<script>alert('Se ha confirmado la cita con exito!!!'); location.href='?view=vistas&action=nuevaCita';</script>";
/*Inicio Consulta Auditoria*/
    session_start();
    $fecha = date("Y-m-d H:i:s");
    //tengo que ver quien es la cita que esta confirmando 
    $auditoria=$mysqli->query("INSERT INTO auditoria VALUES ('', '".$_SESSION['user_id']."', 'cita', '".$fecha."', '2', 'Confirma_Cita');");
    /*Fin Consulta Auditoria*/
}
mysqli_close($mysqli);
?>