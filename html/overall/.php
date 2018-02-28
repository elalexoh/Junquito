<?php include(CABECERA_CORE . 'public/cabecera.html');

?>

<body>
	
	<section>
		<div class="container cuadroform">
		<!--<img src="../preview/usu.jpg" class="img-responsive" alt="" width="150px">-->
			<legend class="text-center">Dra María González </legend>
			<h1 class="text-center">Registro de nueva historia de obstetricia </h1><img src=""></img>
			<hr>
			<form class="form-horizontal AVAST_PAM_loginform" action="?view=vistas&action=crearRegistroPaciente" method="POST">
			 <fieldset>	
				  <!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="num_his_obs">Número de Historia</label>  
  <div class="col-md-5">
  <input id="num_his_obs" name="num_his_obs" type="text" placeholder="Ejm: 123456" class="form-control input-md" required="">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="fec_ingreso">Fecha de Ingreso</label>  
  <div class="col-md-4">
  <input id="fec_ingr_obs" name="fec_ingr_obs" type="text" placeholder="DD/MM/AAAA" class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="fru_obs">F.R.U</label>  
  <div class="col-md-4">
  <input id="fru_obs" name="fru_obs" type="text" placeholder="Ingresar F.R.U" class="form-control input-md">
    
  </div>
</div>
			
			<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="mot_conslt_obs">Motivo de la Consulta</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="mot_conslt_obs" name="mot_conslt_obs">Ingresar Motivo de la Consulta</textarea>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="res_enfact_obs">Resumen</label>
  <div class="col-md-4">                     
    
  </div>
</div>



<div class="form-group">
  <label class="col-md-4 control-label" for="res_enfact_obs">Enfermedad Actual</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="res_enfact_obs" name="res_enfact_obs">Ingresar Enfermedad Actual</textarea>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="dat_pos_obs">Datos Positivos de Examen Físico</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="dat_pos_obs" name="dat_pos_obs">Ingresar Datos Positivos de Examen Físico</textarea>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="imp_dig_obs">Impresión Diagnostica</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="imp_dig_obs" name="imp_dig_obs">Ingresar Impresión Diagnostica</textarea>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="tratmt_obs">Tratamiento</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="tratmt_obs" name="tratmt_obs">Ingresar Tratamiento</textarea>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="evo_con_obs">Evolución y Control</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="evo_con_obs" name="evo_con_obs">Ingresar Evolución y Control</textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nombre_med_obs">Nombres del Médico</label>  
  <div class="col-md-4">
  <input id="nombre_med_obs" name="nombre_med_obs" type="text" placeholder="Ingresar Nombres" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ape_med_obs">Apellidos del Médico</label>  
  <div class="col-md-4">
  <input id="ape_med_obs" name="ape_med_obs" type="text" placeholder="Ingresar Apellidos" class="form-control input-md" required="">
    
  </div>
</div>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="sig1_obs"></label>
  <div class="col-md-4">
    <button id="sig1_obs" name="sig1_obs" class="btn btn-primary">Siguiente</button>
  </div>
</div>
			
					  </fieldset>
					</form>
	</div>
        
			
		</section>
	</div>
	<?php include(FOOTER_CORE . 'public/footer.html') ?>