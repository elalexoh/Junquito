<?php
header("Content-Type: text/html;charset=utf-8");
require_once("conexion.php");
//print_r($_POST);
$ced=$_POST['nameUsu'];

$c_auditoria="SELECT * FROM auditoria WHERE usuario = '".$ced."'";
$query_auditoria=$mysqli->query($c_auditoria);
$file = fopen("test.txt","w");       					                  
while ($array_usuario=mysqli_fetch_assoc($query_auditoria)) {
$prueba="el usuario: ".$array_usuario['usuario']." realizo un: ".$array_usuario['cod_tipo_query']." el día: ".$array_usuario['fecha']." con motivo de: ".$array_usuario['descripcion']."||\r\n ";
fwrite($file,$prueba);
}
fclose($file);
echo "<script>location.href='?view=vistas&action=descargarReporte'</script>";
?>