<?php require_once("conexion.php"); ?>
<?php

    $cod_estado =$_POST['cod_estado'];
    $sql="SELECT cod_municipio, nombre_municipio from municipio where cod_estado='$cod_estado' ORDER BY nombre_municipio ASC";
		$resp=$mysqli->query($sql);

		$html = "<option value='0'>Seleccione Municipio</option>";

		while ($row = mysqli_fetch_assoc($resp)) {
			$html.="<option value='".$row['cod_municipio']."'>".$row['nombre_municipio']."</option>";
		}
		echo $html;
    

?>