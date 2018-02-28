<?php 
include(ACCESO_DENEGADO . 'controllers/accesoDenegado.php');
include(CABECERA_CORE . 'public/cabecera.html');
//include('help_panel.php');

?>

<body>
       <div class="resp">
    </div>
<h1 class="text-center">Historia de Obst&eacute;trica </h1>
<h3 class="text-center">Puerperio </h3>
    <form id="formulario" method="post" enctype="multipart/form-data" name="formulario" action="core/models/capturar.php">
      <ul id="progress">
        <li class="ativo muchos9">Sintomas</li>
        <li class="muchos9">Tratamiento</li>
      
        
      </ul>

      <fieldset>
        <h2>Sintomas</h2>


<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">D&iacute;as post-parto</label>  

  <input id="dias_post_parto" name="dias_post_parto" type="text" placeholder="Ingresar d&iacute;as" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Fecha</label>  

  <input id="data_puerperio" name="data_puerperio" type="text" placeholder="aaaa/mm/dd" class="form-control input-md">
    
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Dieta</label>  

  <input id="dieta_puerperio" name="dieta_puerperio" type="text" placeholder="Ingresar dieta" class="form-control input-md">
    
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Evacuaciones</label>  

  <input id="evacua_puerperio" name="evacua_puerperio" type="text" placeholder="Ingresar frecuencia" class="form-control input-md">
    
  </div>
</div>
<h2>Senos</h2>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Condici&oacute;n</label>  

  <input id="condi_senos_puerperio" name="condi_senos_puerperio" type="text" placeholder="Ingresar estado actual" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Secreci&oacute;n</label>  

  <input id="secrecion_senos_puer" name="secrecion_senos_puer" type="text" placeholder="Ingresar estado actual de los senos" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Pezones</label>  

  <input id="pezones_puerperio" name="pezones_puerperio" type="text" placeholder="Ingresar estado actual" class="form-control input-md" required="">
   
  </div>
</div>

<h2>Utero</h2>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Altura</label>  

  <input id="altura_utero_puer" name="altura_utero_puer" type="text" placeholder="Ingresar altura" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Condici&oacute;n</label>  

  <input id="condi_utero_puerperio" name="condi_senos_puerperio" type="text" placeholder="Ingresar estado actual del utero" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Loquios</label>  

  <input id="loquios_puerperio" name="loquios_puerperio" type="text" placeholder="Ingresar estado actual" class="form-control input-md">
    
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Perineo</label>  

  <input id="perineo_puerperio" name="perineo_puerperio" type="text" placeholder="Ingresar estado actual" class="form-control input-md">
    
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Observaciones </label>  

  <input id="obser_puerperio" name="obser_puerperio" type="text" placeholder="Ingresar observaciones" class="form-control input-md" required="">
    
  </div>
</div>
 <input type="button" name="next1" class="next1 acao" value="Proximo" />
      </fieldset>

      <fieldset>
        <h2>Tratamiento</h2>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Medicamento</label>  

  <input id="medica_trat_puerperio" name="medica_trat_puerperio" type="text" placeholder="Ingresar nombre" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Dosis</label>  

  <input id="dosis_trat_puerperio" name="dosis_trat_puerperio" type="text" placeholder="Ingresar cantidad" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Duraci&oacute;n</label>  

  <input id="dur_trat_puerperio" name="dur_trat_puerperio" type="text" placeholder="Ingresar d&iacute;as" class="form-control input-md" required="">
    
  </div>
</div>
<hr>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">M&eacute;dico</label>  

  <input id="medico_nombre_puerperio" name="medico_nombre_puerperio" type="text" placeholder="Ingresar nombre y apellido" class="form-control input-md">
    
  </div>
</div>

 <input type="button" name="prev" class="prev acao" value="Anterior" />
        <input type="submit" name="next" class="send1 acao" value="Enviar" />
      </fieldset>

      
      


    </form>
	 <?php include(FOOTER_CORE . 'public/footer.html') ?>