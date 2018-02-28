<?php require_once ("conexion.php"); ?>

<?php
	$cod_nacion =$_POST['cod_nacion'];

		$sql="SELECT cod_estado, nombre_estado FROM estado WHERE cod_nacionalidad='$cod_nacion' ORDER BY cod_estado ASC";
		$res=$mysqli->query($sql);

		$html= "<option value='0'>Seleccione Estado</option>";

		while ($row = mysqli_fetch_assoc($res)) {
			$html.="<option value='".$row['cod_estado']."'>".$row['nombre_estado']."</option>";
		}
		echo $html;
	?>