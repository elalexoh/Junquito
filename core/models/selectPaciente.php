<?php require_once ("conexion.php"); ?>

<?php
	$cod_doctor_bp =$_POST['cod_doctor_bp']; //esto es el codigo ed ususario del doctor

		$sql="SELECT cod_paciente, primer_nombre, primer_apellido, usuario_reg FROM paciente WHERE usuario_reg='$cod_doctor_bp' ";
		$res=$mysqli->query($sql);

		$html= "<option value='0'>Seleccione al Paciente</option>";

		while ($row = mysqli_fetch_assoc($res)) {
			$html.="<option value='".$row['cod_paciente']."'>".$row['primer_nombre']."    ".$row['primer_apellido']."</option>";
		}
		echo $html;
	?>