<?php require_once ("conexion.php"); ?>
<?php
    $cod_especi =$_POST['cod_especi_turno'];

		$sql="SELECT * FROM especialidad WHERE cod_especialidad='$cod_especi' ";
		$res=$mysqli->query($sql);
		while ($row = mysqli_fetch_assoc($res)) {
			$cod_turno=$row['cod_turno_med'];
		                                         }
	
		$sql2="SELECT * FROM turno WHERE cod_turno_med='$cod_turno' ";
        $res2=$mysqli->query($sql2);

		$html= "<option value='0'>Seleccione el Turno</option>";

		while ($row2 = mysqli_fetch_assoc($res2)) {
			$html.="<option value='".$row2['cod_turno_med']."'>".$row2['turno']."</option>";
		                                           }                                
                                				                                                    
		echo $html;
	?>