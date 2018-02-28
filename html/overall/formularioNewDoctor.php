<?php
    session_start();
    $user_id=$_SESSION['user_id'];
    $user_prov=$_SESSION['user_name'];
    // echo $user_id;
    // echo $user_prov;
?>
<?php //require_once(ACCESO_DENEGADO . 'controllers/accesoDenegado.php');?>
<?php include(HEADER_LOGIN .'public/header_login.html'); ?>
<?php //include(HTML_CORE . 'overall/topnav.php'); ?>
<?php require_once ( MODELS . 'conexion.php'); ?>
<img src="view/img/banner2.png" class="img-responsive" alt="" style="display:flex; margin:0 auto;">
	<main>
		<center>
			<br />
		<!--<legend class="text-right">Users</legend>-->
			<form action="?view=models&action=registroNewDoctor" class="col s12" method="POST" name="fnewdoct">
				<h4 class="text-center" class="formlegend"><img src="preview/report.png"></img>Registros para el Dr. "<strong class="verdeSecundario"><?php echo $user_prov; ?></strong>"(Nombre Provicional)</h4>
					<div class="container">
					<fieldset class="cuadroform form-horizontal AVAST_PAM_loginform">
					<h5>Datos Personales</h5>
					<div class="" style="display: block; padding: top; margin-top: 30px">
						<div class="row">
						    <div class="input-field col s12 m12 l1">
                              <input value="V" class="with-gap" name="fdradio" type="radio" id="radiov" />
                              <label for="radiov" title=" Tipo de Identidad 'Venezolano'">V</label>
                            </div>
                            <div class="input-field col s12 m12 l1">
                              <input value="E" class="with-gap" name="fdradio" type="radio" id="radioe" />
                              <label for="radioe" title="Tipo de Identidad 'Extranjero'">E</label>
                            </div>
						    <div class="input-field col s12 m12 l4">
								<input id="dfc" type="text" name="fdcedula" class='validate' title="Cédula de Identidad" onpaste="return false" />
								<label id="lfc" for="fdcedula" title="Cédula de Identidad">Cédula de Identidad</label>
							</div>
                            <div class="input-field col s12 m12 l6">
							<select name="fdprofesion" class="browser-default col s12 m12 l12" title="Especialidad" />
			                  <option value="" disabled selected>Especialidad</option>
			                  <?php 
				                  $esp= "SELECT cod_especialidad, descripcion FROM especialidad ORDER BY descripcion
				                  ASC";
									$query= $mysqli->query($esp);

				                  	while ($especial= mysqli_fetch_assoc($query)) {
				                  		echo "<option value='".$especial['cod_especialidad']."'>".$especial['descripcion']."</option>";
				                  	}
			                   ?>
			               </select>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12 m12 l3">
								<input type="text" name="fdnomb" class='validate' title="Primer Nombre del Médico" onpaste="return false" />
								<label for="fdnomb" title="Primer Nombre del Médico" onpaste="return false">Primer Nombre</label>
							</div>
							<div class="input-field col s12 m12 l3">
								<input type="text" name="fdsegnomb" class='validate' title="Segundo Nombre del Médico" onpaste="return false" />
								<label for="fdsegnomb" title="Segundo Nombre del Médico" onpaste="return false">Segundo Nombre</label>
							</div>
							<div class="input-field col s12 m12 l3">
								<input type="text" name="fdap" class='validate' title="Primer Apellido del Médico" onpaste="return false" />
								<label for="fdap" title="Primer Apellido del Médico" onpaste="return false">Primer Apellido</label>
							</div>
							<div class="input-field col s12 m12 l3">
								<input type="text" name="fdsegap" class='validate' title="Segundo Apellido del Médico" onpaste="return false" />
								<label for="fdsegap" title="Segundo Apellido del Médico" onpaste="return false">Segundo Apellido</label>
							</div>
						</div>
						<div class="row">
						    <div class="input-field col s12 m12 l3" style="display:none">
								<input value="<?php echo $user_id; ?>" type="text" name="fdusername" class='validate' title="Usuario asociado a este Doctor" onpaste="return false" />
								<label for="fdusername" title="Primer Nombre del Médico"></label>
							</div>
						    <div class="input-field col s12 m12 l4">
							<select name="fdg" class="browser-default col s12 m12 l12" title="Genero">
								<option value="" disabled selected>Genero</option>
			                  <?php 
				                  $genero= "SELECT cod_genero, tipo_genero FROM genero ORDER BY tipo_genero ASC";
				                  
									$query= $mysqli->query($genero);

				                  	while ($tipgenero= mysqli_fetch_assoc($query)) {
				                  		echo "<option value='".$tipgenero['cod_genero']."'>".$tipgenero['tipo_genero']."</option>";
				                  	}
			                   ?>
			               </select>
							</div>
							<?php
							/*$date_calendario = fddate.value();
							$fecha = date("Y-m-d H:i:s");
							if ($date_calendario => $fecha) {
							    echo "Fecha invalida";
							}else{
							    echo "fecha valida";
							}*/
							?>
						    <div class="input-default col s12 m12 l3" title="Fecha de Nacimiento" onpaste="return false" />
                							<input id="date" type="text" value="<?php echo date("Y/m/d"); ?>" readonly name="theDate" onclick="displayCalendar(document.forms[0].theDate,'yyyy/mm/dd',this);" />
                							<label for="theDate" title="Fecha de Nacimiento">Fecha de Nacimiento</label>
                							<div class="edad" ></div>
                							<div class="" id="ntFechaNac"></div>
            							</div>
							<div class="input-field col s12 m12 l4">
							<select name="fdnacionalidad" class="browser-default col s12 m12 l12" title="Nacionalidad">
							    <option value=""disabled selected>Seleccione País</option>
			                  <?php
				                  $nacion= "SELECT cod_nacionalidad, nombre_pais FROM nacionalidad ORDER BY cod_nacionalidad ASC";
									$query= $mysqli->query($nacion);
                                
				                  	while ($selnacion= mysqli_fetch_assoc($query)) {
				                  		echo "<option value='".$selnacion['cod_nacionalidad']."'>".$selnacion['nombre_pais']."</option>";
				                  	}
			                   ?>
			               </select>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12 m12 l4">
								<select name="fdttelef" class="browser-default col s12 m12 l12" title="Tipo de Telefonía">
				                  <option value="" disabled selected>Tipo de Telefonía</option>
				                <?php 
					                  $telef="SELECT cod_tipo_telefono, descripcion FROM tipo_telefono ORDER BY descripcion ASC";
					                  	$query_tipotelf= $mysqli->query($telef);
					                  
					                  while ($select_ttelef=mysqli_fetch_assoc($query_tipotelf)) {
					                  	echo "<option value='".$select_ttelef['cod_tipo_telefono']."'>".$select_ttelef['descripcion']."</option>";
					                  }
			                  	?>
				               </select>
							</div>
							<!--<div class="input-field col s12 m12 l3">
							<select name="fdcodarea" class="browser-default col s12 m12 l12" title="Código de Área">
			                  <option value="" disabled selected>Código de Área</option>
			                  <?php 
					                  $codtlef="SELECT cod_area, nro_area FROM codigo_area ORDER BY nro_area ASC";
					                  	$query_codtelf= $mysqli->query($codtlef);
					                  
					                  while ($select_catelef=mysqli_fetch_assoc($query_codtelf)) {
					                  	echo "<option value='".$select_catelef['cod_area']."'>".$select_catelef['nro_area']."</option>";
					                  }
			                  	?>
			               </select>
							</div>-->
							<div class="input-field col s12 m12 l2">
								<input type="text" id="movil" name="fdnumber" class='validate' title="Número Telefónico" onpaste="return false" />
								<label for="fdnumber" title="Número Telefónico">Número Telefónico</label>
							</div>
							<div class="input-field col s12 m12 l3">
							<select name="fdturno" class="browser-default col s12 m12 l12" title="Turno">
			                  <option value="" disabled selected>Turno</option>
			                  <?php 
					                  $turno_med="SELECT cod_turno_med, turno FROM turno ORDER BY turno ASC";
					                  	$query_tm= $mysqli->query($turno_med);
					                  
					                  while ($select_turno=mysqli_fetch_assoc($query_tm)) {
					                  	echo "<option value='".$select_turno['cod_turno_med']."'>".$select_turno['turno']."</option>";
					                  }
			                  	?>
			               </select>
							</div>
							<!--<div class="input-field col s12 m12 l3">-->
							<!--<select name="fdhora" class="browser-default col s12 m12 l12" title="Horario de Servicio">-->
			    <!--              <option value="" disabled selected>Horario de Servicio</option>-->
			                  <?php 
					               //   $hora_med="SELECT cod_hora_medico, descripcion FROM horario_Medico ORDER BY descripcion ASC";
					               //   	$query_hm= $mysqli->query($hora_med);
					                  
					               //   while ($select_time_med=mysqli_fetch_assoc($query_hm)) {
					               //   	echo "<option value='".$select_time_med['cod_hora_medico']."'>".$select_time_med['descripcion']."</option>";
					               //   }
			                  	?>
			               <!--</select>-->
							<!--</div>-->
						</div>
					</div>
						<div id="valor"></div>
						<br />
					<center>
	              <div class='row'>
	                <div class="col s12 m6 l6 ">
	                  <button type='submit' id='btn_login' class='btn btn-medium waves-effect' onclick="confRegistroDoctor();">Registrar</button>
	                </div>
	                  <div class="col s12 m6 l6">
	                    <a href="?view=models&action=cerrarSession" class="btn btn-medium waves-effect grey darken-3" onclick="confSalida();">Cancelar</a>
	                  <!--<a type='reset' class='btn btn-medium waves-effect grey darken-3' onclick="confirmarSalida();">Cancelar</a>-->
	                </div>
	              </div>
	            </center>
	            </fieldset>
				</div>	
			</form>
			<br />
			<!--<a class='linkslogin' href="?view=vistas&action=menuPrincipal"><b>Ir al Menú Principal</b></a>!-->
		</center>
	</main>

<?php include(FOOTER_LOGIN . 'public/footer_login.html'); ?>