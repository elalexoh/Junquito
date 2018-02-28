<?php 
include(ACCESO_DENEGADO . 'controllers/accesoDenegado.php');
include(CABECERA_CORE . 'public/cabecera.html');
//include('help_panel.php');
?>
<body>
       <div class="resp">
    </div>
<h1 class="text-center">Historia de Obst&eacute;trica </h1>
<h3 class="text-center">Historia Reci&eacute;n Nacido </h3>
    <form id="formulario" method="post" enctype="multipart/form-data" name="formulario" action="core/models/capturar.php">
      <ul id="progress">
        <li class="ativo muchos7">Ingreso</li>
        <li class="muchos7">Datos Maternos</li>
        <li class="muchos7">Antecedentes</li>
        <li class="muchos7">Embarazo Actual</li>
        <li class="muchos7">Parto</li>
        <li class="muchos7">Datos del Reci&eacute;n Nacido</li>

      </ul>

      <fieldset>
        <h2>Ingreso</h2>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Nombre</label> 
       <input id="name_bebe" name="name_bebe" type="text" placeholder="Nombre y Apellidos" class="form-control input-md">
    
  </div>
</div>      


<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Genero</label> 
    <select id="genero_bebe" name="genero_bebe" class="form-control" onchange="d2(this)">
      <option value="0">Seleccionar</option>
      <option value="1">Masculino</option>
      <option value="2">Femenino</option>
    </select>
  </div>
</div>


<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Fecha y hora de nacimiento</label> 
  <input id="data_nac_bebe" name="data_nac_bebe" type="text" placeholder="dd/mm/yyyy  00:00 aa" class="form-control input-md" required="">
    
  </div>
</div>
<h3>Ubicaci&oacute;n del ret&eacute;n </h3>


<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Sala</label> 
  <input id="sala_bebe" name="sala_bebe" type="text" placeholder="N&uacute;mero de sala" class="form-control input-md">
    
  </div>
</div>


<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Cama</label> 
  <input id="cama_bebe" name="cama_bebe" type="text" placeholder="N&uacute;mero de cama" class="form-control input-md">
    
  </div>
</div>
 
 </br>


     <input type="button" name="next1" class="next1 acao" value="Proximo"  />

      </fieldset>

      <fieldset>
        <h2>Datos Maternos</h2>

  <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Fecha de nacimiento</label> 
  <input id="data_nac_mama" name="data_nac_mama" type="text" placeholder="aaaa/mm/dd" class="form-control input-md">
    
  </div>
</div>

<br/>
          <input type="button" name="prev" class="prev acao" value="Anterior" align="center" />
        <input type="button" name="next2" class="next acao" value="Proximo" align="center" />
      </fieldset>

      <fieldset>
      
        <h2>Antecedentes Obstetricos</h2>
      
   <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Fecha del primer embarazo</label>      
  <input id="fecha_emb_dtm_obs" name="fecha_emb_dtm_obs" type="text" placeholder="DD/MM/AAAA" class="form-control input-md" required="">
    
  </div>
</div>

  <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Partos</label> 

      <select id="cant_bb_part" name="cant_bb_part" class="form-control">
      <option value="0">Seleccionar</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
    </select>
  </div>
</div>

 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Abortos</label> 
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option value="1">Seleccionar</option>
      <option value="2">1</option>
      <option value="3">2</option>
      <option value="4">3</option>
      <option value="5">4</option>
      <option value="6">5</option>
      <option value="7">6</option>
      <option value="8">7</option>
      <option value="9">8</option>
      <option value="10">9</option>
      <option value="11">10</option>
      <option value="12">11</option>
      <option value="13">12</option>
      <option value="14">13</option>
      <option value="15">14</option>
      <option value="16">15</option>
      <option value="17">16</option>
      <option value="18">17</option>
      <option value="19">18</option>
      <option value="20">19</option>
      <option value="">20</option>
    </select>
  </div>
</div>

 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Niños nacidos muertos</label> 
    <select id="nin_mue" name="nin_mue" class="form-control">
      <option value="0">Seleccionar</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="4">3</option>
      <option value="5">4</option>
      <option value="6">5</option>
      <option value="7">6</option>
      <option value="8">7</option>
      <option value="9">8</option>
      <option value="10">9</option>
      <option value="11">10</option>
      <option value="12">11</option>
      <option value="13">12</option>
      <option value="14">13</option>
      <option value="15">14</option>
      <option value="16">15</option>
      <option value="17">16</option>
      <option value="18">17</option>
      <option value="19">18</option>
      <option value="20">19</option>
      <option value="">20</option>
    </select>
  </div>
</div>

 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Niños nacidos vivos</label> 
    <select id="nin_viv" name="nin_viv" class="form-control">
      <option value="0">Seleccionar</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
    </select>
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Intervenciones</label> 

  <input id="interven_part" name="interven_part" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Patol&oacute;gicos</label> 

  <input id="patologicos_ant" name="patologicos_ant" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>
         <input type="button" name="prev" class="prev acao" value="Anterior" />
        <input type="button" name="next2" class="next acao" value="Proximo" />
      </fieldset>

      <fieldset>
        <h2>Embarazo Actual</h2>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Prenatal controlado en</label> 

  <input id="prenatal_hospital" name="prenatal_hospital" type="text" placeholder="Ingresar nombre del hospital" class="form-control input-md">
    
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Serolog&iacute;a</label>

  <input id="serologia" name="serologia" type="text" placeholder="Ingresar datos" class="form-control input-md">
    
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Fecha de Serolog&iacute;a</label>
 
  <input id="fecha_serologia" name="fecha_serologia" type="text" placeholder="aaaa/mm/dd" class="form-control input-md">
    
  </div>
</div>

<h3>Grupo Sanguineo:</h3>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Madre</label>

  <input id="factor_rh_madre" name="factor_rh_madre" type="text" placeholder="Factor RH" class="form-control input-md" required="">
<br>
  <input id="reacion_kahn_madre" name="reacion_kahn_madre" type="text" placeholder="Reacci&oacute;n de KAHN" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Padre</label>
  <input id="factor_rh_padre" name="factor_rh_padre" type="text" placeholder="Factor RH" class="form-control input-md" required="">
<br>
  <input id="reacion_kahn_padre" name="reacion_kahn_padre" type="text" placeholder="Reacci&oacute;n de KAHN" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Titulaci&oacute;n de glutininas</label>
  <input id="glutininas_madre" name="glutininas_madre" type="text" placeholder="Ingresar datos" class="form-control input-md">
    
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Estudio radiol&oacute;gico del t&oacute;rax</label>
  <input id="estudio_torax" name="estudio_torax" type="text" placeholder="Ingresar datos" class="form-control input-md" required="">
    </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Duraci&oacute;n de la gestaci&oacute;n</label>
  <input id="duracion_gestacion" name="duracion_gestacion" type="text" placeholder="Ingresar d&iacute;as" class="form-control input-md" required="">
    </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Complicaciones en este embarazo</label>
  <input id="complicacion_emb" name="complicacion_emb" type="text" placeholder="Ingresar complicaciones" class="form-control input-md">
    
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Patolog&iacute;a actual</label>
  <input id="patologia_actual" name="patologia_actual" type="text" placeholder="Ingresar estado actual" class="form-control input-md">
    
  </div>
</div>
    <input type="button" name="prev" class="prev acao" value="Anterior" />
        <input type="button" name="next2" class="next acao" value="Proximo" />
      </fieldset>

      <fieldset>
        <h2>Parto</h2>


<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Duraci&oacute;n del trabajo</label>
  <input id="duración" name="duración" type="text" placeholder="00:00 00" class="form-control input-md">
    
  </div>
</div>


<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Ruptura de la membranas</label>
  <input id="rup_mem_parto" name="rup_mem_parto" type="text" placeholder="aaaa/mm/dd 00:00 aa" class="form-control input-md">
    
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Tiempo antes del parto</label>
  <input id="tiempo_antes" name="tiempo_antes" type="text" placeholder="00:00 00 " class="form-control input-md">
    
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Presentaci&oacute;n  </label>
    <select id="prese_tact" name="prese_tact" class="form-control">
      <option value="0">Seleccionar</option>
      <option value="1">Cefálica</option>
      <option value="2">Podálica</option>
      <option value="3">Transversal</option>
    </select>
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Posici&oacute;n</label>
    <select id="posi_tact" name="posi_tact" class="form-control">
      <option value="0">Seleccionar</option>
      <option value="1">Derecha</option>
      <option value="2">Izquierda</option>
    </select>
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Tipo de parto</label>
  <input id="tipo_parto" name="tipo_parto" type="text" placeholder="Ingresar tipo de parto" class="form-control input-md">
    
  </div>
 </div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Intervenci&oacute;n</label>
  <input id="intervencion" name="intervencion" type="text" placeholder="Ingresar datos" class="form-control input-md">
    
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Indicaci&oacute;n</label>
  <input id="indicacion_parto" name="indicacion_parto" type="text" placeholder="Ingresar datos" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Analgesia</label>
  <input id="nombre_analgesia" name="nombre_analgesia" type="text" placeholder="Ingresar nombre" class="form-control input-md">
<br>
    <input id="dosis_analgesia" name="dosis_analgesia" type="text" placeholder="Ingresar dosis" class="form-control input-md">
    
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Anestecia</label>
  <input id="nombre_anestecia" name="nombre_anestecia" type="text" placeholder="Ingresar nombre" class="form-control input-md">
<br>
    <input id="dosis_anes" name="dosis_anes" type="text" placeholder="Ingresar dosis" class="form-control input-md">
    
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Otros medicamentos</label>

  <input id="med_parto" name="med_parto" type="text" placeholder="Ingresar medicamento" class="form-control input-md">
<br>
  <input id="dosi_medicamento" name="dosi_medicamento" type="text" placeholder="Ingresar dosis" class="form-control input-md" required="">   
<br>
  <input id="dur_medicamento" name="dur_medicamento" type="text" placeholder="Ingresar duración " class="form-control input-md" required="">    
<br>
    <input id="data_medicamento" name="datamedicamento" type="text" placeholder="dd/mm/yyyy  00:00 aa" class="form-control input-md" required="">
    </div>
</div>


<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Complicaciones del parto</label>
  <input id="complic_bebe_parto" name="complic_bebe_parto" type="text" placeholder="Ingresar datos" class="form-control input-md" required="">
    
  </div>
</div>
    <input type="button" name="prev" class="prev acao" value="Anterior" />
        <input type="button" name="next2" class="next acao" value="Proximo" />
      </fieldset>

      <fieldset>
        <h2>Datos del Reci&eacute;n Nacido</h2>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Respiraci&oacute;n Espont&aacute;nea</label>
  <input id="resp_esponta_bebe" name="resp_esponta_bebe" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Est&iacute;mulo</label>
  <input id="estimulo_bebe" name="estimulo_bebe" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Minutos despu&eacute;s del parto</label>
  <input id="minutos_estimulo" name="minutos_estimulo" type="text" placeholder="00:00:00" class="form-control input-md" required="">
</div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Tipo de est&iacute;mulo</label>
    <select id="tipo_estimulo" name="tipo_estimulo" class="form-control">
      <option value="0">Seleccionar</option>
      <option value="1"></option>
      <option value="2"></option>
    </select>
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Aspiraci&oacute;n</label>
  <input id="aspiracion" name="aspiracion" type="text" placeholder="Ingresar datos" class="form-control input-md">
    
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Apnea</label>
  <input id="apnea" name="apnea" type="text" placeholder="Ingresar datos" class="form-control input-md">
    
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Anoxia</label>
  <input id="anoxia" name="anoxia" type="text" placeholder="Ingresar datos" class="form-control input-md">
    
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Causa de la anoxia</label>
  <input id="causa_anoxia" name="causa_anoxia" type="text" placeholder="Ingresar datos" class="form-control input-md">
    
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Prevención de la oftalm&iacute;a</label>
  <input id="preven_oftalmia" name="preven_oftalmia" type="text" placeholder="Ingresar datos" class="form-control input-md">
    
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">M&eacute;todos</label>
  <input id="metodos_oftalmia" name="metodos_oftalmia" type="text" placeholder="Ingresar datos" class="form-control input-md">
    
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Cord&oacute;n</label>
  <input id="cordon" name="cordon" type="text" placeholder="Ingresar datos" class="form-control input-md">
    
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Se tomó sangre para:</label>
  <input id="sangre_tomada" name="sangre_tomada" type="text" placeholder="Ingresar motivo" class="form-control input-md">
    
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Drogas suministradas</label>
  <input id="med_sumistrado_bebe" name="med_sumistrado_bebe" type="text" placeholder="Ingresar medicamento" class="form-control input-md">
<br>
  <input id="dosi_parto_sumistrado_bebe" name="dosi_parto_sumistrado_bebe" type="text" placeholder="Ingresar dosis" class="form-control input-md" required="">   
<br>
  <input id="dur_sumistrado_bebe" name="dur_sumistrado_bebe" type="text" placeholder="Ingresar duración " class="form-control input-md" required="">    
<br>
    <input id="data_sumistrado_bebe" name="data_sumistrado_bebe" type="text" placeholder="dd/mm/yyyy  00:00 aa" class="form-control input-md" required="">
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
      <label class="control-label">Peso</label>
  <input id="peso_bebe" name="peso_bebe" type="text" placeholder="Ingresar Kilogramos" class="form-control input-md" required="">
   
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Asistido por</label>
  <input id="asistido_parto" name="asistido_parto" type="text" placeholder="Ingresar nombre y apellido" class="form-control input-md">
    
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Observaciones</label>
  <input id="observaciones_parto" name="observaciones_parto" type="text" placeholder="Ingresar observaciones" class="form-control input-md" required="">
   
  </div>
</div>


 <input type="button" name="prev" class="prev acao" value="Anterior" />
        <input type="submit" name="next" class="send1 acao" value="Enviar" />
      </fieldset>

      


    </form>

	 <?php include(FOOTER_CORE . 'public/footer.html') ?>