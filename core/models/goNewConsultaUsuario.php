<?php
//print_r($_GET);
$cod_usuario=$_GET['cod_usuario'];
include(MODELS . 'conexion.php');

$sql = "Update usuario Set confirmacion='1' where cod_usuario=$cod_usuario";

if (mysqli_query($mysqli, $sql)) {
echo "<script>alert('Se ha confirmado el usuario exitosamente'); location.href='?view=vistas&action=consultasAuditoria';</script>";
}
mysqli_close($mysqli);
{
    echo "error, no se pudo Confirmar el usuario";
}
?>