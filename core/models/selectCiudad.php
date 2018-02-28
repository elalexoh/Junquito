<?php require_once ("conexion.php"); ?>
<?php
		
	$cod_mun =$_POST['cod_mun'];
		$sql="SELECT cod_ciudad, nombre_ciudad from ciudad_estado where cod_municipio='$cod_mun' ORDER BY cod_ciudad ASC";
		$resp=$mysqli->query($sql);

		$html = "<option value='0'>Seleccione Ciudad</option>";

		while ($row = mysqli_fetch_assoc($resp)) {
			$html.="<option value='".$row['cod_ciudad']."'>".$row['nombre_ciudad']."</option>";
		}
		echo $html;
	?>