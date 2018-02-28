<?php require_once ("conexion.php"); ?>

<?php
	$cod_especi =$_POST['cod_especi'];

		$sql="SELECT cod_especialidad, nombres_doc, seg_nombre, cod_usuario FROM doctor WHERE cod_Especialidad='$cod_especi' ORDER BY cod_doc ASC";
		$res=$mysqli->query($sql);

		$html= "<option value='0'>Seleccione al Doctor</option>";

		while ($row = mysqli_fetch_assoc($res)) {
			$html.="<option value='".$row['cod_usuario']."'>".$row['nombres_doc']."    ".$row['seg_nombre']."</option>";
		}
		echo $html;
	?>