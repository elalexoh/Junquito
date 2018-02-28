<?php include(ACCESO_DENEGADO . 'controllers/accesoDenegado.php'); ?>
<?php include(CABECERA_CORE . 'public/cabecera.html');
//include('help_panel.php');

//require "core/models/controlDB.php";
$obj = new controlDB();
?>

<body>
       <div class="resp">
    </div>
<h1 class="text-center">Historia de Obst&eacute;trica </h1>
    <form id="formulario" method="post" enctype="multipart/form-data" name="formulario" action="core/models/capturar.php">
      <ul id="progress">
        <li class="ativo muchos">Ingreso</li>
        <li class="muchos">Motivo de admisi&oacute;n</li>
        <li class="muchos">Embarazo actual</li>
        
      </ul>

      <fieldset>
        <h2>Ingreso</h2>
   
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">N&uacute;mero de Historia</label> 
  <input id="num_his_obs" name="num_his_obs" type="text" placeholder="Ejm: 123456" class="form-control input-md" onkeypress="return soloNumeros(event)" required="">
    <div class="" id="ntNroHistoria"></div>
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Fecha de entrada</label> 
  <input id="date"  class="tcal browser-default" name="fec_ingr_obs" type="text" placeholder="aaaa/mm/dd"  class="form-control input-md datepicker">
    <div class="" id="ntFechaEntrada"></div>
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Hora de entrada</label> 
  <input id="hora_obs_ent" name="hora_obs_ent" type="text" placeholder="00:00 aa" class="form-control input-md">
    <div class="" id="ntHoraEntrada"></div>
  </div>

</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Sala</label> 
  <input id="sla_obs" name="sla_obs" type="text" placeholder="N&uacute;mero de sala" class="form-control input-md">
    <div class="" id="ntSala"></div>
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Cama</label> 
  <input id="cama_obs" name="cama_obs" type="text" placeholder="N&uacute;mero de cama" class="form-control input-md" onkeypress="return soloNumeros(event)" >
    <div class="" id="ntCama"></div>
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Servicio</label> 
  <input id="serv_obs" name="serv_obs" type="text" placeholder="Ingresar nombre" class="form-control input-md" onkeypress="return soloLetras(event)" >
    <div class="" id="ntServicio"></div>
  </div>
</div>
 <input type="button" name="next1" class="next1 acao" value="Proximo" />
      </fieldset>

      <fieldset>
        <h2>Motivo de admisi&oacute;n</h2>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Motivo de admisi&oacute;n </label> 
    <input id="mot_conslt_obss" name="mot_conslt_obs" type="text" placeholder="Ingresar sintoma(s)" class="form-control input-md">    
    <div class="" id="ntMotivoAdmision"></div>                 
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Inicio del sintoma</label> 
  <input id="fec_ini_sint" name="fec_ini_sint" type="text" placeholder="aaaa/mm/dd" class="form-control input-md datepicker">
    <div class="" id="ntSintoma"></div>
  </div>
</div>
  <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Tacto</label>   
    <input id="tact_conslt_obss" name="tact_conslt_obs" type="text" placeholder="Ingresar observaciones" class="form-control input-md"> 
    <div class="" id="ntTacto"></div> 
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Esp&eacute;culo</label> 
    <input id="especu_conslt_obs" name="especu_conslt_obs" type="text" placeholder="Ingresar anomal&iacute;as" class="form-control input-md"> 
    <div class="" id="ntEspeculo"></div> 
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Diagn&oacute;stico de admisi&oacute;n</label>                     
    <input id="diag_cons_conslt_obss" name="diag_cons_conslt_obs" type="text" placeholder="Ingresar diagn&oacute;stico" class="form-control input-md">  
    <div class="" id="ntDiagnostico"></div>
  </div>
</div>
        <input type="button" name="prev" class="prev acao" value="Anterior" />
        <input type="button" id="btnproximoField2" name="next2" class="next acao" value="Proximo" />
      </fieldset>

      <fieldset>
        <h2>Embarazo actual</h2>
        <h3>&Uacute;ltima regla</h3>

        <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Inicio </label> 
    <input id="fec_in_ult_regla" name="fec_in_ult_regla" type="text" placeholder="aaaa/mm/dd" class="form-control input-md" required="">
      <div class="" id="ntMenarquiaInicio"></div>
    </div>
  </div>
                          
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Fin</label> 
    <input id="fec_fn_ult_regla" name="fec_fn_ult_regla" type="text" placeholder="aaaa/mm/dd" class="form-control input-md" required="">
      <div class="" id="ntMenarquiaFin"></div>
    </div>
  </div>

  <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Intensidad</label>
 
    <select id="intensidad_periodo" name="intensidad_periodo" class="form-control">
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
    <div class="" id="ntIntensidad"></div>
  </div>
</div>


   <h3>Chequeo</h3>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">D&iacute;a</label> 
    <input id="dia_emb" name="dia_emb" type="text" placeholder="aaaa/mm/dd" class="form-control input-md" required="">
      <div class="" id="ntDia"></div>
    </div>
  </div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Altura uterina</label> 
    <input id="alt_emb_act" name="alt_emb_act" type="text" placeholder="__ cm" class="form-control input-md" required="">
      <div class="" id="ntAlturaUterina"></div>
    </div>
  </div>


 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Circunferencia abdominal </label>
    <input id="cir_abd" name="cir_abd" type="text" placeholder="___ cm" class="form-control input-md" required="">
      <div class="" id="ntCircunferenciaAdbominal"></div>
    </div>
  </div>

<br>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Encajamiento</label> 
      <select id="encaja_bb" name="encaja_bb" class="form-control">
        <option value="0">Seleccionar</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>


      </select>
      <div class="" id="ntEncajamiento"></div>
    </div>
  </div>
<br><div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Presentaci&oacute;n</label> 
      <select id="presenta_cons_obst" name="presenta_cons_obst" class="form-control">
        <option value="0">Seleccionar</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>


      </select>
      <div class="" id="ntPresentacion"></div>
    </div>
  </div>
<br><div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Posici&oacute;n</label> 
      <select id="pos_bebc" name="pos_bebc" class="form-control">
        <option value="0">Seleccionar</option>
        <option value="1">Derecha</option>
        <option value="2">Izquierda</option>
      </select>
      <div class="" id="ntPosicion"></div>
    </div>
  </div>

<br><div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Ausculaci&oacute;n foco </label> 
    <input id="aus_foco" name="aus_foco" type="text" placeholder="___ mmHg" class="form-control input-md" required="">
      <div class="" id="ntAusculacion></div>
    </div>
  </div>

  <input type="hidden" name="ajax">
 <input type="button" name="prev" class="prev acao" value="Anterior" />
        <input type="submit" name="next" class="send1 acao" value="Enviar" />
  </fieldset>
    </form>

  <?php include(FOOTER_CORE . 'public/footer.html') ?>