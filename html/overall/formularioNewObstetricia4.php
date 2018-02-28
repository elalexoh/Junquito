<?php 
include(ACCESO_DENEGADO . 'controllers/accesoDenegado.php');
include(CABECERA_CORE . 'public/cabecera.html');
//include('help_panel.php');
include('core/models/conexion.php');

//require "core/models/controlDB.php";

?>
 <body>
       <div class="resp">
    </div>
      <h1 class="text-center">Historia de Obst&eacute;trica </h1>
      <h3 class="text-center"> Trabajo y Parto</h3>
    <form id="formulario" method="post" enctype="multipart/form-data" name="formulario" action="core/models/capturar.php">
      <ul id="progress">
        <li class="ativo muchos4">Ingreso</li>
        <li class="muchos4">Per&iacute;odo de dilataci&oacute;n</li>
        <li class="muchos4">Tactos</li>
        <li class="muchos4">Tratamiento</li>
        <li class="muchos4">Periodo de Expulsi&oacute;n</li>
        <li class="muchos4">Reci&eacute;n Nacido</li>
        <li class="muchos4">Per&iacute;odo de Alumbramiento</li>
        <li class="muchos4">Ex&aacute;men de los anexos</li>
        <li class="muchos4">Intervenci&oacute;n</li>
      </ul>

      <fieldset>
        <h2>Ingreso</h2>

 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Número de Historia</label>  
 
  <input id="num_his_trabajoyparto" name="num_his_trabajoyparto" type="text" placeholder="Ejm: 123456" class="form-control input-md" onkeypress="return soloNumeros(event)" required="">
    
  </div>
</div>

 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Servicio</label>  
 
  <input id="servicio" name="servicio" type="text" placeholder="Ingresar nombre del servicio" class="form-control input-md">
    
  </div>
</div>

 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Sala</label>  
 
  <input id="sala_pac" name="sala_pac" type="text" placeholder="Ingresar sala" class="form-control input-md">
    
  </div>
</div>

 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Cama</label>  
 
  <input id="cama_pac" name="cama_pac" type="text" placeholder="Ingresar cama" class="form-control input-md">
    
  </div>
</div>

    <input type="button" name="next1" class="next acao" value="Proximo" />
      </fieldset>

      <fieldset>
<h2>Per&iacute;odo de dilataci&oacute;n</h2>
<h3> Periodo de dilataci&oacute;n</h3>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Fecha y hora de los primeros dolores</label>  
  
  <input id="fechayhora_dolo" name="fechayhora_dolo" type="text" placeholder="aaaa/mm/dd 00:00:00" class="form-control input-md" required="">
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Fecha y hora de la dilataci&oacute;n completa</label>  
  
  <input id="fechayhora_dilata_comple" name="fechayhora_dolo" type="text" placeholder="aaaa/mm/dd 00:00:00" class="form-control input-md" required="">
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Variedad de posici&oacute;n </label>
 
  <div class="checkbox">
    <label for="var_posic_trj-0">
      <input type="checkbox" name="var_posic_trj" id="var_posic_trj-0" value="1">
      Cefálica
    </label>
</div>
  <div class="checkbox">
    <label for="var_posic_trj-1">
      <input type="checkbox" name="var_posic_trj" id="var_posic_trj-1" value="2">
      Podálica
    </label>
  </div>
  <div class="checkbox">
    <label for="var_posic_trj-2">
      <input type="checkbox" name="var_posic_trj" id="var_posic_trj-2" value="3">
      Transversal
    </label>
  </div>
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Ruptura de membranas</label>  
 
  <input id="textinput" name="textinput" type="text" placeholder=" Ingresar estado" class="form-control input-md">
    
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Fecha y hora ruptura</label>  
 
  <input id="fechyhr_rup_mem" name="fechyhr_rup_mem" type="text" placeholder="aaaa/mm/dd 00:00:00" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Tipo de ruptura de membranas</label>
 
    <select id="tip_rup_mem" name="tip_rup_mem" class="form-control" onchange="d2(this)">
      <option value="0">Seleccionar</option>
      <option value="1">Espontánea</option>
      <option value="2">Artificial</option>
    </select>
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Especificar</label>
 
    <select id="esp_selc_mem" name="esp_selc_mem" class="form-control" disabled="true">
      <option value="0">Seleccionar</option>
      <option value="1">Prematura</option>
      <option value="2">Precoz</option>
    </select>
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Especificar</label>
 
    <select id="art_tipo_mem" name="art_tipo_mem" class="form-control" disabled="true">
      <option value="0">Seleccionar</option>
      <option value="1">Tempestiva</option>
      <option value="2">Tardía</option>
    </select>
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Caracteres del liquido amniótico </label>  
 
  <input id="car_anm_liq" name="car_anm_liq" type="text" placeholder="Ingresar estado" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Duraci&oacute;n del periodo</label>  
 
  <input id="textinput" name="textinput" type="text" placeholder="Ingresar d&iacute;as" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Horas</label>  
 
  <input id="hordur_per" name="hordur_per" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Minutos</label>  
 
  <input id="mint_per" name="mint_per" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<input type="button" name="prev" class="prev acao" value="Anterior" />
        <input type="button" name="next2" class="next acao" value="Proximo" />
      </fieldset>

      <fieldset>
<h2>Tactos</h2>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">D&iacute;a y hora</label>  
 
  <input id="textinput" name="textinput" type="text" placeholder="dd/mm/yyyy  00:00 aa" class="form-control input-md" required="">
    
  </div>
</div>
<h3>Cuello: </h3> 
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Consistencia</label>  
 
  <input id="consis_tact" name="consis_tact" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Longitud</label>  
 
  <input id="long_tact" name="long_tact" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Dilataci&oacute;n </label>  
 
  <input id="dila_tact" name="dila_tact" type="text" placeholder="Ingresar estado" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Segmento Inferior</label>  
  
  <input id="seg_inf_tatc" name="seg_inf_tatc" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Presentaci&oacute;n  </label>
 
    <select id="prese_tact" name="prese_tact" class="form-control">
      <option value="0">Seleccionar</option>
      <option value="1">Cef&acute;lica</option>
      <option value="2">Pod&acute;lica</option>
      <option value="3">Transversal</option>
    </select>
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Posici&oacute;n </label>
 
    <select id="posi_tact" name="posi_tact" class="form-control">
      <option value="0">Seleccionar</option>
      <option value="1">Derecha</option>
      <option value="2">Izquierda</option>
    </select>
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Foco</label>  
 
  <input id="foco_tact" name="foco_tact" type="text" placeholder="000 mmHg" class="form-control input-md">
    
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Funci&oacute;n  Contr&acute;ctil </label>  
   
  <input id="func_contra_tact" name="func_contra_tact" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Membranas</label>  
 
  <input id="memn_tact" name="memn_tact" type="text" placeholder="Ingresar estado" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Temperatura</label>  
 
  <input id="temp_tact" name="temp_tact" type="text" placeholder="Ingresar grados" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Observador </label>  
 
  <input id="obser_tact" name="obser_tact" type="text" placeholder="Ingresar datos" class="form-control input-md" required="">
    
  </div>
</div>

 <input type="button" name="prev" class="prev acao" value="Anterior" />
        <input type="button" name="next2" class="next acao" value="Proximo" />
      </fieldset>

      <fieldset>
        <h2>Tratamiento</h2>
 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">
    
  <input id="med_tact" name="med_tact" type="text" placeholder="Ingresar medicamento" class="form-control input-md">
  </div>
</div>
 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">
    
  <input id="dosi_tact" name="dosi_tact" type="text" placeholder="Ingresar dosis" class="form-control input-md" required="">   
  </div>
  </div>
  <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">
      
  <input id="dur_tact" name="dur_tact" type="text" placeholder="Ingresar duraci&oacute;n " class="form-control input-md" required="">    
  </div>
</div>
 <input type="button" name="prev" class="prev acao" value="Anterior" />
        <input type="button" name="next2" class="next acao" value="Proximo" />
      </fieldset>

      <fieldset>
        <h2>Per&iacute;odo de Expulsi&oacute;n</h2>

 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Nacimiento</label>  
 
  <input id="nac_per_exp" name="nac_per_exp" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Fecha</label>  
 
  <input id="fecha_nac_per_exp" name="fecha_nac_per_exp" type="text" placeholder="DD/MM/YYYY" class="form-control input-md" required="">
    
  </div>
</div>

 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Hora</label>  
 
  <input id="hor_nac_per_exp" name="hor_nac_per_exp" type="text" placeholder="00:00 aa" class="form-control input-md" required="">
    
  </div>
</div>

 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Variedad de posición </label>
   <div class="checkbox">
    <label class="radio-inline" for="var_posi_per_exp-1">
      <input type="radio" name="var_posi_per_exp" id="var_posi_per_exp-1" value="1">
      Cefálica
    </label> 
    </div>
      <div class="checkbox">
    <label class="radio-inline" for="var_posi_per_exp-2">
      <input type="radio" name="var_posi_per_exp" id="var_posi_per_exp-2" value="2">
      Podálica
    </label> 
    </div>
      <div class="checkbox">
    <label class="radio-inline" for="var_posi_per_exp-3">
      <input type="radio" name="var_posi_per_exp" id="var_posi_per_exp-3" value="3">
      Transversal
    </label>
    </div>
  </div>
</div>

 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Duraci&oacute;n del periodo </label>  
 
  <input id="dur_per_per_exp" name="dur_per_per_exp" type="text" placeholder="Ingresar horas" class="form-control input-md" required="">
    
  </div>
</div>

  <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Duraci&oacute;n total del trabajo de parto</label>  
 
  <input id="dur_trabajo_per_exp" name="dur_trabajo_per_exp" type="text" placeholder="Ingresar horas" class="form-control input-md" required="">
    
  </div>
</div>

 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Lesiones genitales</label>
 
    <select id="lesion_per_exp" name="lesion_per_exp" class="form-control">
      <option value="0">Seleccionar</option>
      <option value="1">Perin&eacute;</option>
      <option value="2">Vagina</option>
      <option value="3">Cuello</option>
    </select>
  </div>
</div>

 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Periné</label>
 
    <select id="perine_per_exp" name="perine_per_exp" class="form-control">
      <option value="0">Seleccionar</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
    </select>
  </div>
</div>

 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Episiotom&iacute;a:</label>  
 
  <input id="tipepi_per_exp" name="tipepi_per_exp" type="text" placeholder="Tipo" class="form-control input-md" required="">
  <br>  
  <input id="tectepi_per_exp" name="tectepi_per_exp" type="text" placeholder="T&eacute;cnica" class="form-control input-md">
 <br> 
  <input id="materi_per_exp" name="materi_per_exp" type="text" placeholder="Material de sutura" class="form-control input-md">
    
  </div>
</div>
        <input type="button" name="prev" class="prev acao" value="Anterior" />
        <input type="button" name="next2" class="next acao" value="Proximo" />
      </fieldset>

      <fieldset>
        <h2>Reci&eacute;n Nacido</h2>
                          
      

 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Nombre</label>  
 
  <input id="nonm" name="nonm" type="text" placeholder="Ingresar nombre y apellidos" class="form-control input-md">
    
  </div>
</div>

 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Genero</label>
 
    <select id="gen_baby" name="gen_baby" class="form-control">
      <option value="0">Seleccionar</option>
      <option value="1">Masculino</option>
      <option value="2">Femenino</option>
    </select>
  </div>
</div>

 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Peso</label>  
 
  <input id="peso_rec_baby" name="peso_rec_baby" type="text" placeholder="___ Grs" class="form-control input-md" required="">
    
  </div>
</div>

 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Longitud</label>  
 
  <input id="log_baby" name="log_baby" type="text" placeholder="___ cms" class="form-control input-md" required="">
    
  </div>
</div>

 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Estado</label>  

  <input id="estado_baby" name="estado_baby" type="text" placeholder="Ingresar estado" class="form-control input-md">
    
  </div>
</div>
 <input type="button" name="prev" class="prev acao" value="Anterior" />
        <input type="button" name="next2" class="next acao" value="Proximo" />
      </fieldset>

      <fieldset>
        <h2>Per&iacute;odo de Alumbramiento</h2>

 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Minutos de expulsi&oacute;n </label>  

  <input id="min_expul" name="min_expul" type="text" placeholder="00:00:00" class="form-control input-md" required="">
    
  </div>
</div>
 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Expulsi&oacute;n</label>

    <select id="exp_pre_alum" name="exp_pre_alum" class="form-control"  onchange="d3(this)">
      <option value="0">Seleccionar</option>
      <option value="1">Espont&acute;nea</option>
      <option value="2">Provocada</option>
    </select>
  </div>
</div>

 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Tipo</label>

    <select id="alumbra_expul_provocada" name="alumbra_expul_provocada" class="form-control">
      <option value="0">Seleccionar</option>
      <option value="1">Por medicamentos</option>
      <option value="2">Por maniobras externas</option>
      <option value="3">Extracción manual</option>
    </select>
  </div>
</div>

 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Indicaci&oacute;n</label>  

  <input id="ind_per_alum" name="ind_per_alum" type="text" placeholder="Ingresar indicaciones" class="form-control input-md" required="">
    
  </div>
</div>

 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Cantidad de sangre perdida</label>   

  <input id="cantidad_sangre" name="cantidad_sangre" type="text" placeholder="          cc" class="form-control input-md" required="">
    

  </div>
</div>
 <input type="button" name="prev" class="prev acao" value="Anterior" />
<input type="button" name="next2" class="next acao" value="Proximo" />
      </fieldset>

      <fieldset>
<h2>Ex&aacute;men de los anexos</h2>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Placenta</label>  

  <input id="placenta_forma" name="placenta_forma" type="text" placeholder="Forma" class="form-control input-md" required="">
  <br>  
    
  <input id="placenta_peso" name="placenta_peso" type="text" placeholder="Peso" class="form-control input-md" required="">
  <br>  
     <input id="placenta_insercion" name="placenta_insercion" type="text" placeholder="Inserci&oacute;n" class="form-control input-md" required="">
 
    <br>  
     <input id="placenta_part" name="placenta_part" type="text" placeholder="Particularidades" class="form-control input-md" required="">
    </div>

</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Membranas</label>  

  <input id="med_membranas" name="med_membranas" type="text" placeholder="Medidas" class="form-control input-md" required="">
<br>  
    
  <input id="part_membranas" name="part_membranas" type="text" placeholder="Particularidades" class="form-control input-md" required="">
    </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Cord&oacute;n</label>  

  <input id="cond_long" name="cond_long" type="text" placeholder="Longitud" class="form-control input-md" required="">
    
<br>  
  
  <input id="cond_volumen" name="cond_volumen" type="text" placeholder="Volumen" class="form-control input-md" required="">
<br>  
  
  <input id="cond_part" name="cond_part" type="text" placeholder="Particulatidades" class="form-control input-md" required="">
    
  </div>
</div>
 <input type="button" name="prev" class="prev acao" value="Anterior" />
 <input type="button" name="next2" class="next acao" value="Proximo" />
      </fieldset>

      <fieldset>
        <h2>Intervenci&oacute;n</h2>

 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Intervenci&oacute;n</label>  

  <input id="intervencion" name="intervencion" type="text" placeholder="Ingresar detalles del proceso" class="form-control input-md">
    
  </div>
</div>


 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Medicaci&oacute;n</label>  

  <input id="nombre_medica" name="nombre_medica" type="text" placeholder="Ingresar nombre del medicamento" class="form-control input-md">
    
<br>  

  <input id="dosis_medica" name="dosis_medica" type="text" placeholder="Ingresar dosis suministrada" class="form-control input-md">
    
  </div>
</div>

 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Indicaciones</label>  

  <input id="indicaciones" name="indicaciones" type="text" placeholder="Ingresar indicaciones" class="form-control input-md">
    
  </div>
</div>

 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Anestecia</label>  

  <input id="nombre_anestecia" name="nombre_anestecia" type="text" placeholder="Ingresar nombre de la anestecia" class="form-control input-md">
    
<br>  

    <input id="dosis_anes" name="dosis_anes" type="text" placeholder="Ingresar dosis suministrada" class="form-control input-md">
    
  </div>
</div>

 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Diagn&oacute;stico post-operatorio </label>  

  <input id="diag_posyope" name="diag_posyope" type="text" placeholder="Ingresar diagn&oacute;stico " class="form-control input-md">
    
  </div>
</div>

 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Asistente</label>  

  <input id="asistente" name="asistente" type="text" placeholder="Ingresar nombre y apellidos" class="form-control input-md">
    
  </div>
</div>

 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Ayudante</label>  

  <input id="ayudante" name="ayudante" type="text" placeholder="Ingresar nombre y apellidos" class="form-control input-md">
    
  </div>
</div>

                  

 <input type="button" name="prev" class="prev acao" value="Anterior" />
        <input type="submit" name="next" class="send1 acao" value="Enviar" />
      </fieldset>

    </form>
  <script>
  function d2(selectTag){
 if(selectTag.value == '1'){
document.getElementById('esp_selc_mem').disabled = false;
 }else{
 document.getElementById('esp_selc_mem').disabled = true;
 }

 if(selectTag.value == '2'){
 document.getElementById('art_tipo_mem').disabled = false;
 }else{
 document.getElementById('art_tipo_mem').disabled = true; 
}
}

function d3(selectTag){

 if(selectTag.value == '2'){
 document.getElementById('alumbra_expul_provocada').disabled = false;
 }else{
 document.getElementById('alumbra_expul_provocada').disabled = true; 
}
}

</script>
  <?php include(FOOTER_CORE . 'public/footer.html'); 
 ?>
