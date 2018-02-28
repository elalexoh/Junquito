<?php include(ACCESO_DENEGADO . 'controllers/accesoDenegado.php'); ?>
<?php include(CABECERA_CORE . 'public/cabecera.html');
//include('help_panel.php');

//require "core/models/controlDB.php";
$obj = new controlDB();
?>

<body>
       <div class="resp">
    </div>
  <section>
    <div class="container cuadroform">
    <!--<img src="../preview/usu.jpg" class="img-responsive" alt="" width="150px">-->
      <legend class="text-center">Pac Carla González </legend>
      <h1 class="text-center">Registro de nueva historia cl&iacute;nica de obstetricia </h1><img src=""></img>
      <hr>
      <form class="form-horizontal AVAST_PAM_loginform" action="core/models/capturar.php" method="POST">
       
       <fieldset> 

<div class="form-group">
  <label class="col-md-4 control-label" for="num_his_obs">Número de Historia</label>  
  <div class="col-md-5">
  <input id="num_his_obs" name="num_his_obs" type="text" placeholder="Ejm: 123456" class="form-control input-md" onkeypress="return soloNumeros(event)" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="fec_ingreso">Fecha de entrada</label>  
  <div class="col-md-4">
  <input id="fec_ingr_obs" name="fec_ingr_obs" type="text" placeholder="aaaa/mm/dd" class="form-control input-md datepicker">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="hora_obs_ent">Hora de entrada</label>  
  <div class="col-md-4">
  <input id="hora_obs_ent" name="hora_obs_ent" type="text" placeholder="00:00 aa" class="form-control input-md">
    
  </div>

</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="sla_obs">Sala</label>  
  <div class="col-md-4">
  <input id="sla_obs" name="sla_obs" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="cama_obs">Cama</label>  
  <div class="col-md-4">
  <input id="cama_obs" name="cama_obs" type="text" placeholder="Nro Cama" class="form-control input-md" onkeypress="return soloNumeros(event)" >
    
  </div>
</div>


  <hr>
  <div class="form-group">
  <label class="col-md-4 control-label" for="mot_conslt_obs">Motivo de admisi&oacute;n </label>
  <div class="col-md-4">
    <input id="mot_conslt_obss" name="mot_conslt_obs" type="text" placeholder="Ingresar sintoma(s)" class="form-control input-md">                     
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="fec_ini_sint">Inicio del sintoma</label>  
  <div class="col-md-4">
  <input id="fec_ini_sint" name="fec_ini_sint" type="text" placeholder="aaaa/mm/dd" class="form-control input-md datepicker">
    
  </div>
</div>
    
<div class="form-group">
  <label class="col-md-4 control-label" for="tact_conslt_obs">Tacto</label>
  <div class="col-md-4">                     
    <input id="tact_conslt_obss" name="tact_conslt_obs" type="text" placeholder="" class="form-control input-md">  
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="especu_conslt_obs">Esp&eacute;culo</label>
  <div class="col-md-4">                     
    <input id="especu_conslt_obs" name="especu_conslt_obs" type="text" placeholder="" class="form-control input-md">  
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="diag_cons_conslt_obs">Diagn&oacute;stico de admisi&oacute;n</label>
  <div class="col-md-4">                     
    <input id="diag_cons_conslt_obss" name="diag_cons_conslt_obs" type="text" placeholder="" class="form-control input-md">  
  </div>
</div>

<hr>

  <div class="form-group">
    <label class="col-md-4 control-label" for="res_enfact_obs">Embarazo actual</label>
    <div class="col-md-4">                     
      
    </div>
  </div>
  <div class="form-group">
    <label class="col-md-4 control-label" for="fec_ult_regla">Última regla</label>  
    <div class="col-md-4">
    <input id="fec_ult_regla" name="fec_ult_regla" type="text" placeholder="aaaa/mm/dd" class="form-control input-md" required="">
      
    </div>
  </div>
  <div class="form-group">
    <label class="col-md-6 control-label" for="textinput">Exploración útero- abdominal al ingreso</label>  
    
  </div>
  <div class="form-group">
    <label class="col-md-4 control-label" for="dia_emb">Día</label>  
    <div class="col-md-4">
    <input id="dia_emb" name="dia_emb" type="text" placeholder="aaaa/mm/dd" class="form-control input-md" required="">
      
    </div>
  </div>
  <div class="form-group">
    <label class="col-md-4 control-label" for="alt_emb_act">Altura uterina </label>  
    <div class="col-md-4">
    <input id="alt_emb_act" name="alt_emb_act" type="text" placeholder="__ cm" class="form-control input-md" required="">
      
    </div>
  </div>
  <div class="form-group">
    <label class="col-md-4 control-label" for="cir_abd">Circunferencia abdominal </label>  
    <div class="col-md-4">
    <input id="cir_abd" name="cir_abd" type="text" placeholder="___ cm" class="form-control input-md" required="">
      
    </div>
  </div>
  <div class="form-group">
    <label class="col-md-4 control-label" for="presenta_cons_obst">Presentación</label>
    <div class="col-md-4">
      <select id="presenta_cons_obst" name="presenta_cons_obst" class="form-control">
      <option value="">Seleccioná</option>
        
          

        
      </select>
    </div>
  </div>
  <div class="form-group">
    <label class="col-md-4 control-label" for="encaja_bb">Encajamiento</label>
    <div class="col-md-4">
      <select id="encaja_bb" name="encaja_bb" class="form-control">
        <option value="0">Seleccionar</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>


      </select>
    </div>
  </div>
  <div class="form-group">
    <label class="col-md-4 control-label" for="pos_bebc">Posición</label>
    <div class="col-md-4">
      <select id="pos_bebc" name="pos_bebc" class="form-control">
        <option value="0">Seleccionar</option>
        <option value="1">Derecha</option>
        <option value="2">Izquierda</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label class="col-md-4 control-label" for="aus_foco">Ausculación foco </label>  
    <div class="col-md-4">
    <input id="aus_foco" name="aus_foco" type="text" placeholder="___ mmHg" class="form-control input-md" required="">
      
    </div>
  </div>
  <div class="form-group">
    <label class="col-md-4 control-label" for="edd_emb">Edad</label>  
    <div class="col-md-4">
    <input id="edd_emb" name="edd_emb" type="text" placeholder="__" class="form-control input-md" required="">
      
    </div>
  </div>

<hr>


<div class="form-group">
  <label class="col-md-4 control-label" for="antecedente_fami">Antecedentes Familiares:</label>  
  <div class="col-md-4">
  <select class="form-control text-right" name="antecedente_fami" id="antecedente_fami" >
                    <option>Seleccionar Enfermedad</option>
                      <option> Oncol&oacute;gicos</option>
              </select>
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="antecedente_pers">Antecedentes Personales:</label>  
  <div class="col-md-4">
 <select class="form-control text-right" name="antecedente_pers" id="antecedente_pers" >
                    <option>Seleccionar Enfermedad</option>
                      <option> Oncol&oacute;gicos</option>
              </select>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="mnq_dtm_obs">Menarquía</label>  
  <div class="col-md-4">
  <input id="mnq_dtm_obs" name="mnq_dtm_obs" type="text" placeholder="Ingresar Menarquía" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="tipo_dtm_obs">Tipo</label>  
  <div class="col-md-4">
  <input id="tipo_dtm_obs" name="tipo_dtm_obs" type="text" placeholder="Ingresar Tipo" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="dis_dtm_obs">Dismenorrea</label>  
  <div class="col-md-4">
  <input id="dis_dtm_obs" name="dis_dtm_obs" type="text" placeholder="Ingresar Dato" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="edadfs_dtm_obs">Edad de la Primera Relación Sexual</label>  
  <div class="col-md-4">
  <input id="edadfs_dtm_obs" name="edadfs_dtm_obs" type="text" placeholder="Ingresar Edad" class="form-control input-md" required="">
    
  </div>
</div>
<hr>
<div class="form-group">
  <label class="col-md-4 control-label" for="edadfs_dtm_obs">Datos quirúrgicos</label>  
  
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="natuz_q">Naturaleza </label>  
  <div class="col-md-4">
  <input id="natuz_q" name="natuz_q" type="text" placeholder="Ingresar motivo" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="fcha_q">Fecha</label>  
  <div class="col-md-4">
  <input id="fcha_q" name="fcha_q" type="text" placeholder="aaaa/mm/dd" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="lug_qq">Lugar de la operación </label>  
  <div class="col-md-4">
  <input id="lug_qq" name="lug_qq" type="text" placeholder="Nombre del Hospital" class="form-control input-md" required="">
    
  </div>
</div>

<hr>

<div class="form-group">
  <label class="col-md-4 control-label" for="lug_qq">Antecedentes obstetricos</label>  
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="fecha_emb_dtm_obs">Fecha del primer embarazo</label>  
  <div class="col-md-4">
  <input id="fecha_emb_dtm_obs" name="fecha_emb_dtm_obs" type="text" placeholder="DD/MM/AAAA" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="cant_bb_part">Partos</label>
  <div class="col-md-4">
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
<div class="form-group">
  <label class="col-md-4 control-label" for="cant_abort">Abortos</label>
  <div class="col-md-4">
    <select id="cant_abort" name="cant_abort" class="form-control">
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
<div class="form-group">
  <label class="col-md-4 control-label" for="nin_mue">Niños muertos</label>
  <div class="col-md-4">
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
<div class="form-group">
  <label class="col-md-4 control-label" for="nin_viv">Niños vivos </label>
  <div class="col-md-4">
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
<div class="form-group">
  <label class="col-md-4 control-label" for="interven_part">Intervenciones </label>  
  <div class="col-md-4">
  <input id="interven_part" name="interven_part" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>
<hr>

<div class="form-group">
  <label class="col-md-4 control-label" for="nin_viv">Control prenatal </label>
  </div>
<div class="form-group">
  <label class="col-md-4 control-label" for="lug_pren">Lugar del prenatal</label>  
  <div class="col-md-4">
  <input id="lug_pren" name="lug_pren" type="text" placeholder="Nombre del Hospital" class="form-control input-md">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="nro_cons_pre">Nro Consultas</label>
  <div class="col-md-4">
    <select id="nro_cons_pre" name="nro_cons_pre" class="form-control">
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
<div class="form-group">
  <label class="col-md-4 control-label" for="nro_his_mater">Nro de historia en la maternidad</label>  
  <div class="col-md-4">
  <input id="nro_his_mater" name="nro_his_mater" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="nro_consul_mater">Nro de consultas en la maternidad</label>
  <div class="col-md-4">
    <select id="nro_consul_mater" name="nro_consul_mater" class="form-control">
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


<hr>
<div class="form-group">
  <label class="col-md-4 control-label" for="talla_obs">Examen F&iacute;sico:</label>  
  <div class="col-md-4">
  
  </div>
</div>

         
          
        <div class="form-group">
  <label class="col-md-4 control-label" for="talla_obs">talla</label>  
  <div class="col-md-4">
  <input id="talla_obs" name="talla_obs" type="text" placeholder="Ingresar Altura" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="peso_obs">Peso</label>  
  <div class="col-md-4">
  <input id="peso_obs" name="peso_obs" type="text" placeholder="Ingresar Kilogramos" class="form-control input-md" required="">
   
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="tension_sis_obs">Tens&iacute;on:</label>  

    <div class="col-md-4">
  <input id="tension_sis_obs" name="tension_sis_obs" type="text" placeholder="Sist&oacute;lica" class="form-control input-md" required="">
    
  </div>
   <div class="col-md-4">
  <input id="tension_dis_obs" name="tension_dis_obs" type="text" placeholder="Diast&oacute;lica" class="form-control input-md" required="">
     
  </div>
  
</div>




<div class="form-group">
  <label class="col-md-4 control-label" for="pulso_obs">Pulso</label>  
  <div class="col-md-4">
  <input id="pulso_obs" name="pulso_obs" type="text" placeholder="Ingresar P.P.M." class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="temp_obs">Temperatura</label>  
  <div class="col-md-4">
  <input id="temp_obs" name="temp_obs" type="text" placeholder="Ingresar Grados" class="form-control input-md" required=""><label>C&deg;</label>
    
  </div>
</div>

<hr>


<div class="form-group">
  <label class="col-md-4 control-label" for="aspect_gerl">Aspecto general</label>
  <div class="col-md-4">
    <select id="aspect_gerl" name="aspect_gerl" class="form-control">
      <option value="0">Seleccionar</option>
      <option value="1">Aseado</option>
      <option value="2">Descuidado</option>
    </select>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="piel_exam">Piel</label>  
  <div class="col-md-4">
  <input id="piel_exam" name="piel_exam" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<
<div class="form-group">
  <label class="col-md-4 control-label" for="func_ner">Funciones nerviosas</label>  
  <div class="col-md-4">
  <input id="func_ner" name="func_ner" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="aprt_digest">Aparato digestivo </label>  
  <div class="col-md-4">
  <input id="aprt_digest" name="aprt_digest" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="aprt_circulato">Aparato circulatorio</label>  
  <div class="col-md-4">
  <input id="aprt_circulato" name="aprt_circulato" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="aprt_resp">Aparato respiratorio</label>  
  <div class="col-md-4">
  <input id="aprt_resp" name="aprt_resp" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="rad_pulmo">Radioscopia pulmonar</label>  
  <div class="col-md-4">
  <input id="rad_pulmo" name="rad_pulmo" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="apart_urina_exam">Aparato urinario</label>  
  <div class="col-md-4">
  <input id="apart_urina_exam" name="apart_urina_exam" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="varices_exam">Varices</label>  
  <div class="col-md-4">
  <input id="varices_exam" name="varices_exam" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="edemas_exam">Edemas</label>  
  <div class="col-md-4">
  <input id="edemas_exam" name="edemas_exam" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="sen_exam">Senos</label>  
  <div class="col-md-4">
  <input id="sen_exam" name="sen_exam" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="abdomen_exam">Abdomen</label>  
  <div class="col-md-4">
  <input id="abdomen_exam" name="abdomen_exam" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<hr>

<div class="form-group">
  <label class="col-md-4 control-label" for="abdomen_exam">Grupo Sanguineo:</label>  
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="pacien_grup_san">Paciente</label>  
  <div class="col-md-4">
  <input id="factor_rh_paci" name="factor_rh_paci" type="text" placeholder="Factor RH" class="form-control input-md" required="">
    
  </div>
   <div class="col-md-4">
  <input id="reacion_kahn_pac" name="reacion_kahn_pac" type="text" placeholder="Reacci&oacute;n de KAHN" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="abdomen_exam">C&oacute;nyugue</label>  
  <div class="col-md-4">
  <input id="factor_rh_con" name="factor_rh_con" type="text" placeholder="Factor RH" class="form-control input-md" required="">
    
  </div>
   <div class="col-md-4">
  <input id="reacion_kahn_con" name="reacion_kahn_con" type="text" placeholder="Reacci&oacute;n de KAHN" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="trat_exam_fisi">Tratamiento:</label>  
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="medica_trat_exf">Medicamento</label>  
  <div class="col-md-4">
  <input id="medica_trat_exf" name="medica_trat_exf" type="text" placeholder="Ingresar nombre" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="dosis_trat_exf">Dosis</label>  
  <div class="col-md-4">
  <input id="dosis_trat_exf" name="dosis_trat_exf" type="text" placeholder="Ingresar cantidad" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="dur_trat_exf">Duración</label>  
  <div class="col-md-4">
  <input id="dur_trat_exf" name="dur_trat_exf" type="text" placeholder="Ingresar d&iacute;as" class="form-control input-md" required="">
    
  </div>
</div>
<hr>

<div class="form-group">
  <label class="col-md-4 control-label" for="pelvime">Pelvimetria:</label>  
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="estr_inferi">Estrecho inferior</label>  
  <div class="col-md-4">
  <input id="estr_inferi" name="estr_inferi" type="text" placeholder="Bisquiatico" class="form-control input-md" required="">
    </div>

</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="sagitalpos_pelv">Sagital pos.</label>  
  <div class="col-md-4">
  <input id="sagitalpos_pelv" name="sagitalpos_pelv" type="text" placeholder="Ingresar dato" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="sagitalante_pelv">Sagital ant.</label>  
  <div class="col-md-4">
  <input id="sagitalante_pelv" name="sagitalante_pelv" type="text" placeholder="Ingresar dato" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="area_pelv">Area</label>  
  <div class="col-md-4">
  <input id="area_pelv" name="area_pelv" type="text" placeholder="Ingresar observaci&oacute;n" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="promontorio_pelv">Promontorio</label>  
  <div class="col-md-4">
  <input id="promontorio_pelv" name="promontorio_pelv" type="text" placeholder="Ingresar observaci&oacute;n" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="espinas_cla_pelv">Espinas claticas</label>  
  <div class="col-md-4">
  <input id="espinas_cla_pelv" name="espinas_cla_pelv" type="text" placeholder="Ingresar observaci&oacute;n" class="form-control input-md" required="">
    
  </div>
</div>

<hr>

<h1 class="text-center">Trabajo y parto </h1>
      <hr>
      <form class="form-horizontal AVAST_PAM_loginform" action="capturar.php" method="POST">
       
       <fieldset> 
<div class="form-group">
  <label class="col-md-4 control-label" for="servicio">Servicio</label>  
  <div class="col-md-4">
  <input id="servicio" name="servicio" type="text" placeholder="Ingresar nombre del servicio" class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="sala_pac">Sala</label>  
  <div class="col-md-4">
  <input id="sala_pac" name="sala_pac" type="text" placeholder="Ingresar sala" class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="cama_pac">Cama</label>  
  <div class="col-md-4">
  <input id="cama_pac" name="cama_pac" type="text" placeholder="Ingresar cama" class="form-control input-md">
    
  </div>
</div>

      <hr> 
   <div class="form-group">
  <label class="col-md-4 control-label" for="talla_obs">Periodo de dilataci&oacute;n:</label>  
  <div class="col-md-4">
  
  </div>
</div>

 <div class="form-group">
  <label class="col-md-4 control-label" for="talla_obs">Primeros dolores:</label>  
  <div class="col-md-4">
  <label class="col-md-2 control-label" for="talla_obs">Fecha</label>  
  <input id="talla_obs" name="talla_obs" type="text" placeholder="aaaa/mm/dd" class="form-control input-md" required="">
  </div>
    <div class="col-md-4">
  <label class="col-md-2 control-label" for="talla_obs">Hora</label>  
  <input id="talla_obs" name="talla_obs" type="text" placeholder="00:00" class="form-control input-md" required="">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="talla_obs">Dilataci&oacute;n completa:</label>  
  <div class="col-md-4">
  <label class="col-md-2 control-label" for="talla_obs">Fecha</label>  
  <input id="talla_obs" name="talla_obs" type="text" placeholder="aaaa/mm/dd" class="form-control input-md" required="">
  </div>
    <div class="col-md-4">
  <label class="col-md-2 control-label" for="talla_obs">Hora</label>  
  <input id="talla_obs" name="talla_obs" type="text" placeholder="00:00" class="form-control input-md" required="">
  </div>
</div>
         

<div class="form-group">
  <label class="col-md-4 control-label" for="var_posic_trj">Variedad de posición </label>
  <div class="col-md-4">
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

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Ruptura de membranas</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="fech_rup_mem">Fecha ruptura</label>  
  <div class="col-md-4">
  <input id="fech_rup_mem" name="fech_rup_mem" type="text" placeholder="aaaa/mm/dd" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="hor_rup_mem">Hora de la ruptura</label>  
  <div class="col-md-4">
  <input id="hor_rup_mem" name="hor_rup_mem" type="text" placeholder="00:00 aa" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="tip_rup_mem">Tipo de ruptura de membranas</label>
  <div class="col-md-4">
    <select id="tip_rup_mem" name="tip_rup_mem" class="form-control" onchange="d2(this)">
      <option value="0">Seleccionar</option>
      <option value="1">Espontánea</option>
      <option value="2">Artificial</option>
    </select>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="esp_selc_mem">Especificar </label>
  <div class="col-md-4">
    <select id="esp_selc_mem" name="esp_selc_mem" class="form-control" disabled="true">
      <option value="0">Seleccionar</option>
      <option value="1">Prematura</option>
      <option value="2">Precoz</option>
    </select>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="art_tipo_mem">Especificar</label>
  <div class="col-md-4">
    <select id="art_tipo_mem" name="art_tipo_mem" class="form-control" disabled="true">
      <option value="0">Seleccionar</option>
      <option value="1">Tempestiva</option>
      <option value="2">Tardía</option>
    </select>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="car_anm_liq">Caracteres del liquido amniótico </label>  
  <div class="col-md-4">
  <input id="car_anm_liq" name="car_anm_liq" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Duración del periodo</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="hordur_per">Horas</label>  
  <div class="col-md-4">
  <input id="hordur_per" name="hordur_per" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="mint_per">Minutos</label>  
  <div class="col-md-4">
  <input id="mint_per" name="mint_per" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>
<hr>


<div class="form-group">
  <label class="col-md-4 control-label" for="">Tactos:</label>  
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Dia y hora</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="aaaa/mm/dd  00:00 aa" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="">Cuello:</label>  

</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="consis_tact">Consistencia</label>  
  <div class="col-md-4">
  <input id="consis_tact" name="consis_tact" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="long_tact">Longitud</label>  
  <div class="col-md-4">
  <input id="long_tact" name="long_tact" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="dila_tact">Dilatación </label>  
  <div class="col-md-4">
  <input id="dila_tact" name="dila_tact" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="seg_inf_tatc">Segmento Inferior</label>  
  <div class="col-md-4">
  <input id="seg_inf_tatc" name="seg_inf_tatc" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="prese_tact">Presentación  </label>
  <div class="col-md-4">
    <select id="prese_tact" name="prese_tact" class="form-control">
      <option value="0">Seleccionar</option>
      <option value="1">Cefálica</option>
      <option value="2">Podálica</option>
      <option value="3">Transversal</option>
    </select>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="posi_tact">Posición </label>
  <div class="col-md-4">
    <select id="posi_tact" name="posi_tact" class="form-control">
      <option value="0">Seleccionar</option>
      <option value="1">Derecha</option>
      <option value="2">Izquierda</option>
    </select>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="foco_tact">Foco</label>  
  <div class="col-md-4">
  <input id="foco_tact" name="foco_tact" type="text" placeholder="000 mmHg" class="form-control input-md">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="func_contra_tact">Función  Contráctil </label>  
  <div class="col-md-4">
  <input id="func_contra_tact" name="func_contra_tact" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="memn_tact">Membranas</label>  
  <div class="col-md-4">
  <input id="memn_tact" name="memn_tact" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="temp_tact">Temperatura</label>  
  <div class="col-md-4">
  <input id="temp_tact" name="temp_tact" type="text" placeholder="Ingresar grados" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="obser_tact">Observador </label>  
  <div class="col-md-4">
  <input id="obser_tact" name="obser_tact" type="text" placeholder="Ingresar datos" class="form-control input-md" required="">
    
  </div>
</div>
<hr>


<div class="form-group">
  <label class="col-md-4 control-label" for="">Tratamiento:</label>  

 <div class="col-md-4">
  <input id="med_tact" name="med_tact" type="text" placeholder="Ingresar medicamento" class="form-control input-md">
  </div>
<div class="col-md-4">
  <input id="dosi_tact" name="dosi_tact" type="text" placeholder="Ingresar dosis" class="form-control input-md" required="">   
  </div>
   <div class="col-md-4"></div>
   <div class="col-md-4">
  <input id="dur_tact" name="dur_tact" type="text" placeholder="Ingresar duración " class="form-control input-md" required="">    
  </div>
</div>


<hr>


<div class="form-group">
  <label class="col-md-4 control-label" for="">Periodo de expulsión:</label>  
  <div class="col-md-4">
  <input id="" name="" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="nac_per_exp">Nacimiento</label>  
  <div class="col-md-4">
  <input id="nac_per_exp" name="nac_per_exp" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="fecha_nac_per_exp">Fecha</label>  
  <div class="col-md-4">
  <input id="fecha_nac_per_exp" name="fecha_nac_per_exp" type="text" placeholder="aaaa/mm/dd" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="hor_nac_per_exp">Hora</label>  
  <div class="col-md-4">
  <input id="hor_nac_per_exp" name="hor_nac_per_exp" type="text" placeholder="00:00 aa" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="var_posi_per_exp">Variedad de posición </label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="var_posi_per_exp-1">
      <input type="radio" name="var_posi_per_exp" id="var_posi_per_exp-1" value="1">
      Cefálica
    </label> 
    <label class="radio-inline" for="var_posi_per_exp-2">
      <input type="radio" name="var_posi_per_exp" id="var_posi_per_exp-2" value="2">
      Podálica
    </label> 
    <label class="radio-inline" for="var_posi_per_exp-3">
      <input type="radio" name="var_posi_per_exp" id="var_posi_per_exp-3" value="3">
      Transversal
    </label>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="dur_per_per_exp">Duración del periodo </label>  
  <div class="col-md-4">
  <input id="dur_per_per_exp" name="dur_per_per_exp" type="text" placeholder="Ingresar horas" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="dur_trabajo_per_exp">Duración total del trabajo de parto</label>  
  <div class="col-md-4">
  <input id="dur_trabajo_per_exp" name="dur_trabajo_per_exp" type="text" placeholder="Ingresar horas" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="lesion_per_exp">Lesiones genitales</label>
  <div class="col-md-4">
    <select id="lesion_per_exp" name="lesion_per_exp" class="form-control">
      <option value="0">Seleccionar</option>
      <option value="1">Periné</option>
      <option value="2">Vagina</option>
      <option value="3">Cuello</option>
    </select>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="perine_per_exp">Periné</label>
  <div class="col-md-4">
    <select id="perine_per_exp" name="perine_per_exp" class="form-control">
      <option value="0">Seleccionar</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
    </select>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="">Episiotomía:</label>  
  <div class="col-md-4">
  <input id="tipepi_per_exp" name="tipepi_per_exp" type="text" placeholder="Tipo" class="form-control input-md" required="">
    </div>
    <div class="col-md-4">
  <input id="tectepi_per_exp" name="tectepi_per_exp" type="text" placeholder="T&eacute;cnica" class="form-control input-md">
    </div>
     <div class="col-md-4"></div>
 <div class="col-md-4">
  <input id="materi_per_exp" name="materi_per_exp" type="text" placeholder="Material de sutura" class="form-control input-md">
    
  </div>
</div>



<hr>

<div class="form-group">
  <label class="col-md-4 control-label" for="">Recién nacido:</label>  

</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="nonm">Nombres</label>  
  <div class="col-md-4">
  <input id="nonm" name="nonm" type="text" placeholder="Ingresar Nombre" class="form-control input-md">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="apelli_bb">Apellidos</label>  
  <div class="col-md-4">
  <input id="apelli_bb" name="apelli_bb" type="text" placeholder="Ingresar apellidos" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="gen_baby">Genero</label>
  <div class="col-md-4">
    <select id="gen_baby" name="gen_baby" class="form-control">
      <option value="0">Seleccionar</option>
      <option value="1">Masculino</option>
      <option value="2">Femenino</option>
    </select>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="peso_rec_baby">Peso</label>  
  <div class="col-md-4">
  <input id="peso_rec_baby" name="peso_rec_baby" type="text" placeholder="___ Grs" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="log_baby">Longitud</label>  
  <div class="col-md-4">
  <input id="log_baby" name="log_baby" type="text" placeholder="___ cms" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="estado_baby">Estado</label>  
  <div class="col-md-4">
  <input id="estado_baby" name="estado_baby" type="text" placeholder="Ingresar estado" class="form-control input-md">
    
  </div>
</div>

<hr>


<div class="form-group">
  <label class="col-md-4 control-label" for="">Periodo de alumbramiento:</label>  
  <div class="col-md-4">
  <input id="" name="" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="min_expul">Minutos de expulsión </label>  
  <div class="col-md-4">
  <input id="min_expul" name="min_expul" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="exp_pre_alum">Expulsión</label>
  <div class="col-md-4">
    <select id="exp_pre_alum" name="exp_pre_alum" class="form-control">
      <option value="0">Seleccionar</option>
      <option value="1">Espontánea</option>
      <option value="2">Provocada</option>
    </select>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Tipo</label>
  <div class="col-md-4">
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option value="0">Seleccionar</option>
      <option value="1">Por medicamentos</option>
      <option value="2">Por maniobras externas</option>
      <option value="3">Extracción manual</option>
    </select>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="ind_per_alum">Indicación</label>  
  <div class="col-md-4">
  <input id="ind_per_alum" name="ind_per_alum" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="cantidad_sangre">Cantidad de sangre perdida</label>  
  <div class="col-md-4">
  <input id="cantidad_sangre" name="cantidad_sangre" type="text" placeholder="          cc" class="form-control input-md" required="">
    
  </div>
</div>
<hr>

 
<div class="form-group">
  <label class="col-md-4 control-label" for="">Examen de los anexos:</label>  
</div>  
    

<div class="form-group">
  <label class="col-md-4 control-label" for="placenta">Placenta</label>  
  <div class="col-md-4">
  <input id="placenta_forma" name="placenta_forma" type="text" placeholder="Forma" class="form-control input-md" required="">
    </div>
      <div class="col-md-4">
  <input id="placenta_peso" name="placenta_peso" type="text" placeholder="Peso" class="form-control input-md" required="">
    </div>
    <div class="col-md-4">
    </div>
      <div class="col-md-4">
     <input id="placenta_insercion" name="placenta_insercion" type="text" placeholder="Inserci&oacute;n" class="form-control input-md" required="">
    </div>
      <div class="col-md-4">
     <input id="placenta_part" name="placenta_part" type="text" placeholder="Particularidades" class="form-control input-md" required="">
    </div>

</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="">Membranas</label>  
  <div class="col-md-4">
  <input id="med_membranas" name="med_membranas" type="text" placeholder="Medidas" class="form-control input-md" required="">
    </div>
      <div class="col-md-4">
  <input id="part_membranas" name="part_membranas" type="text" placeholder="Particularidades" class="form-control input-md" required="">
    </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="">Cord&oacute;n</label>  
  <div class="col-md-4">
  <input id="cond_long" name="cond_long" type="text" placeholder="Longitud" class="form-control input-md" required="">
    
  </div>
    <div class="col-md-4">
  <input id="cond_volumen" name="cond_volumen" type="text" placeholder="Volumen" class="form-control input-md" required="">
    
  </div>
      <div class="col-md-4">
      </div>
    <div class="col-md-4">
  <input id="cond_part" name="cond_part" type="text" placeholder="Particulatidades" class="form-control input-md" required="">
    
  </div>
</div>

<hr>

<div class="form-group">
  <label class="col-md-4 control-label" for="intervencion">Intervencion</label>  
  <div class="col-md-4">
  <input id="intervencion" name="intervencion" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="medicacion">Medicaci&oacute;n</label>  
  <div class="col-md-4">
  <input id="nombre_medica" name="nombre_medica" type="text" placeholder="Nombre" class="form-control input-md">
    
  </div>
  <div class="col-md-4">
  <input id="dosis_medica" name="dosis_medica" type="text" placeholder="Dosis" class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="indicaciones">Indicaciones</label>  
  <div class="col-md-4">
  <input id="indicaciones" name="indicaciones" type="text" placeholder="Ingresar indicaciones" class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="">Anestecia</label>  
  <div class="col-md-4">
  <input id="nombre_anestecia" name="nombre_anestecia" type="text" placeholder="Ingresar nombre" class="form-control input-md">
    
  </div>
  <div class="col-md-4">
    <input id="dosis_anes" name="dosis_anes" type="text" placeholder="Ingresar dosis" class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="diag_posyope">Diagn&oacute;stico post-operatorio </label>  
  <div class="col-md-4">
  <input id="diag_posyope" name="diag_posyope" type="text" placeholder="Ingresar diagn&oacute;stico " class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="asistente">Asistente</label>  
  <div class="col-md-4">
  <input id="asistente" name="asistente" type="text" placeholder="Ingresar nombre y apellido" class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="ayudante">Ayudante</label>  
  <div class="col-md-4">
  <input id="ayudante" name="ayudante" type="text" placeholder="Ingresar nombre y apellido" class="form-control input-md">
    
  </div>
</div>

<hr>
 
  <h1 class="text-center">Registro de nueva historia de obstetricia </h1><img src=""></img>
      <hr>

<div class="form-group">
  <label class="col-md-4 control-label" for="servicio">Servicio</label>  
  <div class="col-md-4">
  <input id="servicio" name="servicio" type="text" placeholder="Ingresar nombre del servicio" class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="sala_pac">Sala</label>  
  <div class="col-md-4">
  <input id="sala_pac" name="sala_pac" type="text" placeholder="Ingresar sala" class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="cama_pac">Cama</label>  
  <div class="col-md-4">
  <input id="cama_pac" name="cama_pac" type="text" placeholder="Ingresar cama" class="form-control input-md">
    
  </div>
</div>


  
<hr>

<div class="form-group">
  <label class="col-md-4 control-label" for="sala_pac">Madre</label>  
 
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="entrada_sala_part">Entrada a la sala de Partos</label>  
  <div class="col-md-4">
  <input id="entrada_sala_part" name="entrada_sala_part" type="text" placeholder="aaaa/mm/dd  00:00 aa" class="form-control input-md">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="rup_mem_parto">Ruptura de la membrana</label>  
  <div class="col-md-4">
  <input id="rup_mem_parto" name="rup_mem_parto" type="text" placeholder="aaaa/mm/dd 00:00 aa" class="form-control input-md">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="expul_feto_part">Expulsi&oacute;n del feto</label>  
  <div class="col-md-4">
  <input id="expul_feto_part" name="expul_feto_part" type="text" placeholder="aaaa/mm/dd  00:00 aa" class="form-control input-md">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="entrada_sala_part">Entrada a la sala de Partos</label>  
  <div class="col-md-4">
  <input id="entrada_sala_part" name="entrada_sala_part" type="text" placeholder="aaaa/mm/dd  00:00 aa" class="form-control input-md">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="">Episiotomía:</label>  
  <div class="col-md-4">
  <input id="tipepi_per_exp" name="tipepi_per_exp" type="text" placeholder="Tipo" class="form-control input-md" required="">
    </div>
    <div class="col-md-4">
  <input id="tectepi_per_exp" name="tectepi_per_exp" type="text" placeholder="T&eacute;cnica" class="form-control input-md">
    </div>
     <div class="col-md-4"></div>
 <div class="col-md-4">
  <input id="materi_per_exp" name="materi_per_exp" type="text" placeholder="Material de sutura" class="form-control input-md">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="desgarros">Desgarros </label>
  <div class="col-md-4">
  <div class="checkbox">
    <label for="desgarros-0">
      <input type="checkbox" name="desgarros" id="desgarros-0" value="1">
      1ro
    </label>
  </div>
  <div class="checkbox">
    <label for="desgarros-1">
      <input type="checkbox" name="desgarros" id="desgarros-1" value="2">
     2do
    </label>
  </div>
  <div class="checkbox">
    <label for="desgarros-2">
      <input type="checkbox" name="desgarros" id="desgarros-2" value="3">
      3ro
    </label>
  </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="explucion_placenta">Expulsi&oacute;n de la placenta</label>  
  <div class="col-md-4">
  <input id="explucion_placenta" name="explucion_placenta" type="text" placeholder="dd/mm/aaaa  00:00 aa" class="form-control input-md">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="cantidad_sangre_perdid">Cantidad de sangre perdida</label>
  <div class="col-md-4">
  <input id="cantidad_sangre_perdid" name="cantidad_sangre_perdid" type="text" placeholder="          cc" class="form-control input-md" required="">
    </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="parto">Parto </label>
  <div class="col-md-4">
  <div class="checkbox">
    <label for="parto-0">
      <input type="checkbox" name="parto" id="parto-1" value="1">
      Normal
    </label>
  </div>
  <div class="checkbox">
    <label for="parto-1">
      <input type="checkbox" name="parto" id="parto-2" value="2">
     Forceps
    </label>
  </div>
  <div class="checkbox">
    <label for="parto-2">
      <input type="checkbox" name="parto" id="parto-3" value="3">
      Curaje
    </label>
  </div>
 
   <div class="checkbox">
    <label for="parto-2">
      <input type="checkbox" name="parto" id="parto-4" value="4">
      Curetaje
    </label>
  </div>
 
   <div class="checkbox">
    <label for="parto-2">
      <input type="checkbox" name="parto" id="parto-5" value="5">
      Cesar&eacute;a
    </label>
 
  </div>
</div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="">Analgesia</label>  
  <div class="col-md-4">
  <input id="nombre_analgesia" name="nombre_analgesia" type="text" placeholder="Ingresar nombre" class="form-control input-md">
    
  </div>
  <div class="col-md-4">
    <input id="dosis_analgesia" name="dosis_analgesia" type="text" placeholder="Ingresar dosis" class="form-control input-md">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="">Anestecia</label>  
  <div class="col-md-4">
  <input id="nombre_anestecia1" name="nombre_anestecia1" type="text" placeholder="Ingresar nombre" class="form-control input-md">
    
  </div>
  <div class="col-md-4">
    <input id="dosis_anes1" name="dosis_anes1" type="text" placeholder="Ingresar dosis" class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="sutura_enf">Sutura</label>  
  <div class="col-md-4">
  <input id="sutura_enf" name="sutura_enf" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="mecha_enf">Mecha</label>  
  <div class="col-md-4">
  <input id="mecha_enf" name="mecha_enf" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="sonda_enf">Sonda</label>  
  <div class="col-md-4">
  <input id="sonda_enf" name="sonda_enf" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="tension_sis_enf">Tens&iacute;on (Antes):</label>  

    <div class="col-md-4">
  <input id="tension_sis_enf" name="tension_sis_enf" type="text" placeholder="Sist&oacute;lica" class="form-control input-md" required="">
    
  </div>
   <div class="col-md-4">
  <input id="tension_dis_enf" name="tension_dis_enf" type="text" placeholder="Diast&oacute;lica" class="form-control input-md" required="">
     
  </div> 
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="tension_sis_enf2">Tens&iacute;on (Despues):</label>  

    <div class="col-md-4">
  <input id="tension_sis_enf2" name="tension_sis_enf2" type="text" placeholder="Sist&oacute;lica" class="form-control input-md" required="">
    
  </div>
   <div class="col-md-4">
  <input id="tension_dis_enf2" name="tension_dis_enf2" type="text" placeholder="Diast&oacute;lica" class="form-control input-md" required="">
     
  </div> 
<div class="form-group">
  <label class="col-md-4 control-label" for="">Tratamiento:</label>  
   
 <div class="col-md-4">
  <input id="med_tacta_enf" name="med_tacta_enf" type="text" placeholder="Ingresar medicamento" class="form-control input-md">
  </div>
<div class="col-md-4">
  <input id="dosi_tacta_enf" name="dosi_tacta_enf" type="text" placeholder="Ingresar dosis" class="form-control input-md" required="">   
  </div>
   <div class="col-md-4"></div>
   <div class="col-md-4">
  <input id="dur_tacta_enf" name="dur_tacta_enf" type="text" placeholder="Ingresar duración " class="form-control input-md" required="">    
  </div>
</div>
<hr>

<div class="form-group">
  <label class="col-md-4 control-label" for="sala_pac">Hijo</label>  
 
</
<div class="form-group">
  <label class="col-md-4 control-label" for="nonm_bb">Nombres</label>  
  <div class="col-md-4">
  <input id="nonm_bb" name="nonm_bb" type="text" placeholder="Ingresar Nombre" class="form-control input-md">
    
  </div>
</
<div class="form-group">
  <label class="col-md-4 control-label" for="apellido_bb_enf">Apellidos</label>  
  <div class="col-md-4">
  <input id="apellido_bb_enf" name="apellido_bb_enf" type="text" placeholder="Ingresar apellidos" class="form-control input-md" required="">
    
  </div>
</
<div class="form-group">
  <label class="col-md-4 control-label" for="talla_bb_enf">Talla</label>  
  <div class="col-md-4">
  <input id="talla_bb_enf" name="talla_bb_enf" type="text" placeholder="Ingresar Talla" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="peso_bb_enf">Peso</label>  
  <div class="col-md-4">
  <input id="peso_bb_enf" name="peso_bb_enf" type="text" placeholder="Ingresar Peso" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="resp_gleras_bb_enf">Aspiraci&oacute;n de gleras</label>  
  <div class="col-md-4">
  <input id="resp_gleras_bb_enf" name="resp_gleras_bb_enf" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="resusi_bb_enf">Resucitaci&oacute;n</label>  
  <div class="col-md-4">
  <input id="resusi_bb_enf" name="resusi_bb_enf" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="">Tratamiento:</label>  
   
 <div class="col-md-4">
  <input id="med_tacta_enf2" name="med_tacta_enf2" type="text" placeholder="Ingresar medicamento" class="form-control input-md">
  </div>
<div class="col-md-4">
  <input id="dosi_tacta_enf2" name="dosi_tacta_enf2" type="text" placeholder="Ingresar dosis" class="form-control input-md" required="">   
  </div>
   <div class="col-md-4"></div>
   <div class="col-md-4">
  <input id="dur_tacta_enf2" name="dur_tacta_enf2" type="text" placeholder="Ingresar duración " class="form-control input-md" required="">    
  </div>
</div>
<hr>
<div class="form-group">
  <label class="col-md-4 control-label" for="sala_pac">Anexos</label>  
 
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="placenta">Placenta</label>  
  <div class="col-md-4">
  <input id="placenta_forma2" name="placenta_forma2" type="text" placeholder="Forma" class="form-control input-md" required="">
    </div>
      <div class="col-md-4">
  <input id="placenta_peso2" name="placenta_peso2" type="text" placeholder="Peso" class="form-control input-md" required="">
    </div>
    <div class="col-md-4">
    </div>
      <div class="col-md-4">
     <input id="placenta_insercion2" name="placenta_insercion2" type="text" placeholder="Inserci&oacute;n" class="form-control input-md" required="">
    </div>
      <div class="col-md-4">
     <input id="placenta_part2" name="placenta_part2" type="text" placeholder="Particularidades" class="form-control input-md" required="">
    </div>

</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="">Membranas</label>  
  <div class="col-md-4">
  <input id="med_membranas_enf" name="med_membranas_enf" type="text" placeholder="Medidas" class="form-control input-md" required="">
    </div>
      <div class="col-md-4">
  <input id="part_membranas_enf" name="part_membranas_enf" type="text" placeholder="Particularidades" class="form-control input-md" required="">
    </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="">Cord&oacute;n</label>  
  <div class="col-md-4">
  <input id="cond_long_enf" name="cond_long_enf" type="text" placeholder="Longitud" class="form-control input-md" required="">
    
  </div>
    <div class="col-md-4">
  <input id="cond_volumen_enf" name="cond_volumen_enf" type="text" placeholder="Volumen" class="form-control input-md" required="">
    
  </div>
      <div class="col-md-4">
      </div>
    <div class="col-md-4">
  <input id="cond_part_enf" name="cond_part_enf" type="text" placeholder="Particulatidades" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="asistente_enf">Asistente</label>  
  <div class="col-md-4">
  <input id="asistente_enf" name="asistente_enf" type="text" placeholder="Ingresar nombre y apellido" class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="ayudante_enf">Ayudante</label>  
  <div class="col-md-4">
  <input id="ayudante_enf" name="ayudante_enf" type="text" placeholder="Ingresar nombre y apellido" class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="anestesista_enf">Anestesista</label>  
  <div class="col-md-4">
  <input id="anestesista_enf" name="anestesista_enf" type="text" placeholder="Ingresar nombre y apellido" class="form-control input-md">
    
  </div>
</div> -->

<div class="form-group">
   
  <div class="col-md-4">
  <input type="submit" value="Insertar" >
    
  </div>
</div>



<!-- Button 
<div class="form-group">
  <label class="col-md-4 control-label" for="sig1_obs"></label>
  <div class="col-md-4">
    <button id="sig1_obs" name="sig1_obs" class="btn btn-primary" >Siguiente</button>
  </div>
</div>-->
      
            </fieldset>
          </form>
  </div>
                  
            </fieldset>
          </form>
  </div>
        
      
    </section>
  </div>

  <?php include(FOOTER_CORE . 'public/footer.html') ?>