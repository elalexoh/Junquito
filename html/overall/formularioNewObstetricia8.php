<?php 
include(ACCESO_DENEGADO . 'controllers/accesoDenegado.php');
include(CABECERA_CORE . 'public/cabecera.html');
//include('help_panel.php');

?>

 <body>
       <div class="resp">
    </div>
<h1 class="text-center">Historia de Obst&eacute;trica </h1>
<h3 class="text-center">Historia Reci&eacute;n Nacido II</h3>
    <form id="formulario" method="post" enctype="multipart/form-data" name="formulario" action="core/models/capturar.php">
      <ul id="progress">
        <li class="ativo muchos8">Ingreso</li>
        <li class="muchos8">Datos</li>
        <li class="muchos8">Ex&aacute;men Cl&iacute;nico</li>
        <li class="muchos8">Evoluci&oacute;n</li>
        <li class="muchos8">Salida</li>
      </ul>

      <fieldset>
        <h2>Datos</h2>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">N&uacute;mero de historia</label>  

  <input id="nro_historia_bb" name="nro_historia_bb" type="text" placeholder="N&uacute;mero de historia" class="form-control input-md">
    
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Servicio</label>  

  <input id="servicio_bebeII" name="servicio_bebeII" type="text" placeholder="Ingresar servicio" class="form-control input-md">
    
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Sala</label>  

  <input id="sala_bebeII" name="sala_bebeII" type="text" placeholder="N&uacute;mero de sala" class="form-control input-md">
    
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Cama</label>  

  <input id="cama_bebeII" name="cama_bebeII" type="text" placeholder="N&uacute;mero de cama" class="form-control input-md">
    
  </div>
</div>
        <input type="button" name="next1" class="next1 acao" value="Proximo" />
      </fieldset>

      <fieldset>
        <h2>Datos</h2>
      

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Madre</label>  

  <input id="madre_bb" name="madre_bb" type="text" placeholder="Ingresar nombre" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Niño</label>  

  <input id="nombre_bb" name="nombre_bb" type="text" placeholder="Ingresar nombre" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Genero</label>

    <select id="genero_bebeII" name="genero_bebeII" class="form-control" onchange="d2(this)">
      <option value="0">Seleccionar</option>
      <option value="1">Masculino</option>
      <option value="2">Femenino</option>
    </select>
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Peso</label>  

  <input id="peso_bebe" name="peso_bebe" type="text" placeholder="Ingresar Kilogramos" class="form-control input-md" required="">
   
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Talla</label>  

  <input id="talla_bebe" name="talla_bebe" type="text" placeholder="Ingresar Altura" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Circunferencia cef&aacute;lica m&aacute;xima </label>  

  <input id="cir_cefa_bb" name="cir_cefa_bb" type="text" placeholder="Ingresar medida" class="form-control input-md">
    
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Circunferencia t&oacute;rax m&aacute;xima</label>  

  <input id="cama_bebe" name="cama_bebe" type="text" placeholder="Ingresar medida" class="form-control input-md">
    
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Circunferencia abdominal m&aacute;xima</label>  

  <input id="cir_abd_bb" name="cir_abd_bb" type="text" placeholder="Ingresar medida" class="form-control input-md">
    
  </div>
</div>

<input type="button" name="prev" class="prev acao" value="Anterior" />
        <input type="button" name="next2" class="next acao" value="Proximo" />
      </fieldset>

      <fieldset>

        <h2>Ex&aacute;men Cl&iacute;nico</h2>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Condiciones generales </label>  

  <input id="condicion_bb" name="condicion_bb" type="text" placeholder="Ingresar estado actual" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Piel y mucosa </label>  

  <input id="piel_mucosa" name="piel_mucosa" type="text" placeholder="Ingresar estado actual" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Cabeza y cuello</label>  

  <input id="cabeza_cuello" name="cabeza_cuello" type="text" placeholder="Ingresar estado actual" class="form-control input-md">
    
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Ojos</label>  

  <input id="serologia" name="serologia" type="text" placeholder="Ingresar estado actual" class="form-control input-md">
    
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">O&iacute;do y nariz</label>  

  <input id="oido_nariz" name="oido_nariz" type="text" placeholder="Ingresar estado actual" class="form-control input-md">
    
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Orofaringe</label>  

  <input id="orofaringe" name="orofaringe" type="text" placeholder="Ingresar estado actual" class="form-control input-md">
    
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Tronco y raquis</label>

  <input id="estudio_torax" name="estudio_torax" type="text" placeholder="Ingresar estado actual" class="form-control input-md" required="">
    </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Cardio - Vascular </label>

  <input id="cardio_vascular_bb" name="cardio_vascular_bb" type="text" placeholder="Ingresar estado actual" class="form-control input-md" required="">
    </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Respiratorio</label>  

  <input id="repiratorio_bb" name="repiratorio_bb" type="text" placeholder="Ingresar estado actual" class="form-control input-md">
    
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Abdomen</label>  

  <input id="abdomen_bb" name="abdomen_bb" type="text" placeholder="Ingresar estado actual" class="form-control input-md">
    
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Ano - Genital</label>  

  <input id="ano_genital_bb" name="ano_genital_bb" type="text" placeholder="Ingresar estado actual" class="form-control input-md">
    
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Extremidades</label>  

  <input id="extremidades_bb" name="extremidades_bb" type="text" placeholder="Ingresar estado actual" class="form-control input-md">
    
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Linfo - Glandular</label>  

  <input id="linfo_glandular" name="linfo_glandular" type="text" placeholder="Ingresar estado actual" class="form-control input-md">
    
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Sistema nervioso</label>  

  <input id="sist_nervioso_bb" name="sist_nervioso_bb" type="text" placeholder="Ingresar estado actual" class="form-control input-md">
    
  </div>
 </div>
<hr>
        <input type="button" name="prev" class="prev acao" value="Anterior" />
        <input type="button" name="next2" class="next acao" value="Proximo" />
      </fieldset>

      <fieldset>
        <h2>Evoluci&oacute;n</h2>



<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Fecha </label>  

  <input id="data_avance_bb" name="data_avance_bb" type="text" placeholder="aaaa/mm/dd" class="form-control input-md">
    
  </div>
</div>


<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Evoluci&oacute;n</label>  

  <input id="evolu_bb" name="evolu_bb" type="text" placeholder="Ingresar evoluci&oacute;n" class="form-control input-md">
    
  </div>
 </div>

 <h2>Tratamiento</h2> 

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Medicamento</label>  

  <input id="medica_trat_bb" name="medica_trat_exf" type="text" placeholder="Ingresar nombre" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Dosis</label>  

  <input id="dosis_trat_bb" name="dosis_trat_bb" type="text" placeholder="Ingresar cantidad" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Duraci&oacute;n</label>  

  <input id="dur_trat_bb" name="dur_trat_bb" type="text" placeholder="Ingresar d&iacute;as" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Fecha tratamiento </label>  

  <input id="data_medicamento_bb" name="data_medicamento_bb" type="text" placeholder="aaaa/mm/dd" class="form-control input-md">
    
  </div>
</div>
        <input type="button" name="prev" class="prev acao" value="Anterior" />
        <input type="button" name="next2" class="next acao" value="Proximo" />
      </fieldset>

      <fieldset>
        <h2>Salida</h2>


<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Diagn&oacute;stico</label>  

  <input id="diagnostico_salida_bb" name="diagnostico_salida_bb" type="text" placeholder="Ingresar estado" class="form-control input-md">
    
  </div>
 </div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Complicaciones</label>  

  <input id="compl_salida_bb" name="compl_salida_bb" type="text" placeholder="Ingresar complicaciones" class="form-control input-md">
    
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Autopsia</label>  

  <input id="auptosia" name="auptosia" type="text" placeholder="Ingresar estado" class="form-control input-md">
    
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Referido</label>  

  <input id="referido_bb" name="referido_bb" type="text" placeholder="Ingresar lugar" class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Causa</label>  

  <input id="causa_salida" name="causa_salida" type="text" placeholder="Ingresar causa de la salida" class="form-control input-md">
    
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Fecha</label>  

  <input id="fecha_salida" name="fecha_salida" type="text" placeholder="aaaa/mm/dd" class="form-control input-md">
    
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Estado general</label>  

  <input id="estado_general_salida" name="estado_general_salida" type="text" placeholder="Ingresar estado general" class="form-control input-md">
    
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">M&eacute;dico</label>  

  <input id="medico_nombre" name="medico_nombre" type="text" placeholder="Ingresar nombre" class="form-control input-md">
    
  </div>
</div>

 <input type="button" name="prev" class="prev acao" value="Anterior" />
        <input type="submit" name="next" class="send1 acao" value="Enviar" />
      </fieldset>
      


    </form>
	 <?php include(FOOTER_CORE . 'public/footer.html') ?>