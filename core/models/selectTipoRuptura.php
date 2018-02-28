<?php require_once ("conexion.php"); ?>
<?php
		
	    $ruptura =$_POST['cod_rupturamemb'];
		$sql="SELECT cod_especificacion, descripcion from especificacionTipoRuptura where cod_rupturamemb='$ruptura' ORDER BY cod_especificacion ASC";
		$resp=$mysqli->query($sql);

		$html = "<option value='0'>Especificar</option>";

		while ($row = mysqli_fetch_assoc($resp)) {
			$html.="<option value='".$row['cod_especificacion']."'>".$row['descripcion']."</option>";
		}
		echo $html;
	?>