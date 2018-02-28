<?php ob_start(); 
require_once('conexion.php');
$query="SELECT * FROM pediatria WHERE cod_pediatria='104'";
$resultado=$mysqli->query($query);
$fila=$resultado->fetch_assoc();
if (mysqli_num_rows($resultado)== 0) {
   $asd="esta vacio marico";
}else{
    $asd=$fila['infanteLactante'];
}
?>
<h1>hola <?php echo $asd ?></h1>
<?php
require_once(LIBS . 'dompdf/dompdf_config.inc.php');
$dompdf = new DOMPDF();
$dompdf->load_html(ob_get_clean());
$dompdf->render();
$pdf = $dompdf->output();
$filename = "Pediatria".date("Y-m-d").'.pdf';
file_put_contents($filename, $pdf);
$dompdf->stream($filename);
?>
 