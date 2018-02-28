<?php //require_once(ACCESO_DENEGADO . 'controllers/accesoDenegado.php');?>
<?php include(HEADER_LOGIN .'public/header_login.html'); ?>
<?php //include(HTML_CORE . 'overall/topnav.php'); ?>
<?php
require MODELS . 'controlDB.php';
$obj = new controlDB();
?>



<?php require_once (MODELS .'conexion.php'); ?>
    <script src="view/js/functions.js" type="text/javascript"></script>
	<script src="view/js/validacion.js"type="text/javascript" ></script>
    <script src="view/js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="view/js/jquery.maskedinput.js" type="text/javascript"></script>
    <script src="view/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="view/bootstrap/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="view/bootstrap/css/bootstra.css" type="text/css" />
	<link rel="stylesheet" href="view/estilo.css" type="text/css" />
	<link rel="stylesheet" href="view/pestana.css" type="text/css" />
    <link rel="stylesheet" href="view/style.css" type="text/css" />
<body>



			 <div class="resp">
    </div>
    <!--para que sepas primero el action pasa por el controlador de esta manera (action="?view=models&action=capturar") y luego en la
    carpeta controllers se envia a la carpeta models la peticion de este formulario 
    
    
    esto no va (core/models/capturar.php)!-->
    <form id="formulario" action="core/models/capturar.php" method="POST" enctype="multipart/form-data" name="formulario">
      <ul id="progress">
        <li class="ativo">Ingreso</li>
        <li>Motivo de admisi&oacute;n</li>
        <li>Embarazo actual</li>
        
      </ul>

      <fieldset>
        <h2>Ingreso</h2>
   
       
<div class="form-group">
  <label class="col-md-4 control-label" for="num_his_obs">Número de Historia</label>  
  <div class="col-md-5">
  <input id="num_his_obs" name="num_his_obs" type="text" placeholder="Ejm: 123456" class="form-control input-md" onkeypress="return soloNumeros(event)" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="fec_ingreso">Fecha de entrada</label>  
  <div class="col-md-6">
  <input id="fec_ingr_obs" name="fec_ingr_obs" type="text" placeholder="aaaa/mm/dd"  class="form-control input-md datepicker">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="hora_obs_ent">Hora de entrada</label>  
  <div class="col-md-6">
  <input id="hora_obs_ent" name="hora_obs_ent" type="text" placeholder="00:00 aa" class="form-control input-md">
    
  </div>

</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="fru_obs">Sala</label>  
  <div class="col-md-6">
  <input id="sla_obs" name="sla_obs" type="text" placeholder="Nro. Sala" class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="cama_obs">Cama</label>  
  <div class="col-md-6">
  <input id="cama_obs" name="cama_obs" type="text" placeholder="Nro. Cama" class="form-control input-md" onkeypress="return soloNumeros(event)" >
    
  </div>
</div>
        <input type="button" name="next1" class="next acao" value="Proximo" />
      </fieldset>

      <fieldset>
        <h2>Motivo de admisi&oacute;n</h2>
      
        <div class="form-group">
  <label class="col-md-4 control-label" for="mot_conslt_obs">Motivo de admisi&oacute;n </label>
  <div class="col-md-6">
    <input id="mot_conslt_obss" name="mot_conslt_obs" type="text" placeholder="Ingresar sintoma(s)" class="form-control input-md">                     
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="fec_ini_sint">Inicio del sintoma</label>  
  <div class="col-md-6">
  <input id="fec_ini_sint" name="fec_ini_sint" type="text" placeholder="aaaa/mm/dd" class="form-control input-md datepicker">
    
  </div>
</div>
    
<div class="form-group">
  <label class="col-md-4 control-label" for="tact_conslt_obs">Tacto</label>
  <div class="col-md-6">                     
    <input id="tact_conslt_obss" name="tact_conslt_obs" type="text" placeholder="Ingresar observaciones" class="form-control input-md">  
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="especu_conslt_obs">Esp&eacute;culo</label>
  <div class="col-md-6">                     
    <input id="especu_conslt_obs" name="especu_conslt_obs" type="text" placeholder="Ingresar anomal&iacute;as" class="form-control input-md">  
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="diag_cons_conslt_obs">Diagn&oacute;stico de admisi&oacute;n</label>
  <div class="col-md-6">                     
    <input id="diag_cons_conslt_obss" name="diag_cons_conslt_obs" type="text" placeholder="Ingresar diagn&oacute;stico" class="form-control input-md">  
  </div>
</div>
        <input type="button" name="prev" class="prev acao" value="Anterior" />
        <input type="button" name="next2" class="next acao" value="Proximo" />
      </fieldset>

      <fieldset>
        <h2>Embarazo actual</h2>
                          
      
    </div>
  </div>
  <div class="form-group">
    <label class="col-md-4 control-label" for="fec_ult_regla">Última regla</label>  
    <div class="col-md-6">
    <input id="fec_ult_regla" name="fec_ult_regla" type="text" placeholder="aaaa/mm/dd" class="form-control input-md" required="">
      
    </div>
  </div>




  <div class="form-group">
    <label class="col-md-4 control-label" for="dia_emb">Día</label>  
    <div class="col-md-6">
    <input id="dia_emb" name="dia_emb" type="text" placeholder="aaaa/mm/dd" class="form-control input-md" required="">
      
    </div>
  </div>


  <div class="form-group">
    <label class="col-md-4 control-label" for="alt_emb_act">Altura uterina </label>  
    <div class="col-md-6">
    <input id="alt_emb_act" name="alt_emb_act" type="text" placeholder="__ cm" class="form-control input-md" required="">
      
    </div>
  </div>


  <div class="form-group">
    <label class="col-md-4 control-label" for="cir_abd">Circunferencia abdominal </label>  
    <div class="col-md-6">
    <input id="cir_abd" name="cir_abd" type="text" placeholder="___ cm" class="form-control input-md" required="">
      
    </div>
  </div>



  <div class="form-group">
    <label class="col-md-4 control-label" for="encaja_bb">Encajamiento</label>
    <div class="col-md-6">
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
    <label class="col-md-4 control-label" for="presenta_cons_obst">Presentaci&oacute;n</label>
     <div class="col-md-6">
      <select id="presenta_cons_obst" name="presenta_cons_obst" class="form-control">
        <option value="0">Seleccionar</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>


      </select>
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="pos_bebc">Posici&oacute;n</label>
    <div class="col-md-6">
      <select id="pos_bebc" name="pos_bebc" class="form-control">
        <option value="0">Seleccionar</option>
        <option value="1">Derecha</option>
        <option value="2">Izquierda</option>
      </select>
    </div>
  </div>


  <div class="form-group">
    <label class="col-md-4 control-label" for="aus_foco">Ausculación foco </label>  
    <div class="col-md-6">
    <input id="aus_foco" name="aus_foco" type="text" placeholder="___ mmHg" class="form-control input-md" required="">
      
    </div>
  </div>


       <input type="button" name="prev" class="prev acao" value="Anterior" />
         <input type="submit" name="next" class="acao" value="Enviar" />
      </fieldset>




    </form>

	<?php include(FOOTER_CORE . 'public/footer.html') ?>