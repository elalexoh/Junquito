<?php include(CABECERA_CORE . 'public/cabecera.html');
include('help_panel.php');
include(MODELS . 'conexion.php');
$consulta="SELECT cod_nacionalidad, nacionalidad_nac FROM pais_nacionalidad ORDER BY nacionalidad_nac ASC";
$result=$mysqli->query($consulta);
?>

<body>
  <header>
    <div class="" id="uno">
			<img class="question" src="view/img/questions.png" alt="">
			<p class="question-text">Historia Clínica</p>
		</div>
		<div class="" id="">
			<p class="texto">Añade la información requerida en esta sección.</p>
			<br>
			<p class="texto"></p>
			<br>
		</div>
  </header>
	
	<section>
		<div class="container">
		<!--<img src="../preview/usu.jpg" class="img-responsive" alt="" width="150px">-->
			<legend class="text-right">Dr. Blue2</legend>

			<!---->
			<hr>
			<form class="cuadroform form-horizontal AVAST_PAM_loginform" action="?view=vistas&action=crearRegistroPaciente" method="POST">
							<h1 class="text-center" class="formlegend"><img src="../../preview/report.png"></img>Historia Cl&iacute;nica</h1>
							<hr>
			 <fieldset>	
			

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="mot_adm_hiscli">Motivo(s) de Admisión</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="mot_adm_hiscli" name="mot_adm_hiscli">Ingresar Motivo(s) de Admisi&oacute;n</textarea>
  </div>
</div>
    <hr>
  <h3 class="text-center">Enfermedad Actual</h3>    
  <br>


<!-- Text input-->
<div class="form-group">
  <label class="col-lg-2 control-label" for="textinput">Dolencia(s)</label>  
  <div class="col-lg-2">
  <input id="textinput" name="textinput" type="text" placeholder="Ingresar Dolencia(s)" class="form-control input-md" required="">
  </div>
   <label class="col-lg-2 control-label" for="dur_hiscli">Duración</label>  
  <div class="col-lg-2">
  <input id="dur_hiscli" name="dur_hiscli" type="text" placeholder="Ingresar Duración" class="form-control input-md" required="">
    
  </div>
   <label class="col-lg-2 control-label" for="fech_ini_hiscli">Fecha de Inicio de Dolencia </label>  
  <div class="col-lg-2">
  <input id="fech_ini_hiscli" name="fech_ini_hiscli" type="text" placeholder="AA/MM/AAAA" class="form-control input-md" required="">
  </div>
    
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="tra_dol_hiscli">Tratamiento(s)</label>  
  <div class="col-md-4 ">
  <input id="tra_dol_hiscli" name="tra_dol_hiscli" type="text" placeholder="Ingresar Tratamiento(s)" class="form-control input-md" required="">
    </div>
      </div>
    <label class="col-md-4 control-label" for="dig_adm_hiscli">Diagnóstico de Admisión</label>
    <div class="form-group">
  <div class="col-md-4 ">  
   <input id="tra_dol_hiscli" name="tra_dol_hiscli" type="text" placeholder="Ingresar Diagnóstico de Admisión" class="form-control input-md" required="">
  </div>
  </div>
  
    <hr>
  <h3 class="text-center">Salida</h3>    
 



<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Por:</label>
  <div class="col-md-4">
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option value="1">Seleccionar Motivo</option>
      <option value="2">Curación</option>
      <option value="3">Mejoría</option>
      <option value="4">Muerte</option>
      <option value="5">Otras Causas</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Descripción del Motivo</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="Ingresar Descripción" class="form-control input-md">
   
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="dig_cli_fin_hiscli">Diagnóstico Clínico Final</label>  
  <div class="col-md-4">
  <input id="dig_cli_fin_hiscli" name="dig_cli_fin_hiscli" type="text" placeholder="Ingresar Diagnóstico" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Intervención o Tratamiento</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="Ingresar Intervención o Tratamiento" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="fech_sal_hiscli">Fecha Salida</label>  
  <div class="col-md-4">
  <input id="fech_sal_hiscli" name="fech_sal_hiscli" type="text" placeholder="DD/MM/AAAA" class="form-control input-md">
    
  </div>
</div>

 <div class="form-group">
      						<div class="col-lg-10 col-lg-offset-2">
      							<center><button type="reset" class="btn btn-danger">Cancelar</button>
	        					<button type="submit" class="btn btn-primary">Enviar</button></center>

      						</div>
    					</div>
    					
					  </fieldset>
					</form>
	</div>
        
			
		</section>
	</div>
	<?php include(FOOTER_CORE . 'public/footer.html') ?>