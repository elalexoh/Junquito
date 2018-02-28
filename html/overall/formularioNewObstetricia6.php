<?php
include(ACCESO_DENEGADO . 'controllers/accesoDenegado.php');
include(CABECERA_CORE . 'public/cabecera.html');
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Formulario tres passos</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
  
  </head>

  <body>
    <div class="resp">
    </div>

           <h1 class="text-center">Historia de Obst&eacute;trica </h1>
    <form id="formulario" method="post" enctype="multipart/form-data" name="formulario" action="core/models/capturar.php">
      <ul id="progress">
        <li class="ativo muchos6">Examen F&iacute;sico</li>
        <li class="muchos6">Aspecto </li>
        <li class="muchos6">Grupo Sanguineo</li>
        <li class="muchos6">Tratamiento</li>
        <li class="muchos6">Pelvimetria</li>
       
      </ul>

      <fieldset>
        <h2>Examen F&iacute;sico</h2>

<div class="form-group col-md-6">
    <div class="col-md-12">
  <label class="control-label">Talla</label>  
  <input id="talla_obs" name="talla_obs" type="text" placeholder="Ingresar altura" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Peso</label>
  <input id="peso_obs" name="peso_obs" type="text" placeholder="Ingresar kilogramos" class="form-control input-md" required="">
   
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Tens&iacute;on:</label>  

  
  <input id="tension_sis_obs" name="tension_sis_obs" type="text" placeholder="Sist&oacute;lica" class="form-control input-md" required="">
    
<br>
  <input id="tension_dis_obs" name="tension_dis_obs" type="text" placeholder="Diast&oacute;lica" class="form-control input-md" required="">
     
  </div>
  
</div>


<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Pulso</label>  

  <input id="pulso_obs" name="pulso_obs" type="text" placeholder="Ingresar P.P.M." class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Temperatura</label>  

  <input id="temp_obs" name="temp_obs" type="text" placeholder="Ingresar grados" class="form-control input-md" required="">

  <!--<label>C&deg;</label>-->
    
  </div>
</div>
        <input type="button" name="next1" class="next1 acao" value="Proximo" />
      </fieldset>

      <fieldset>
        
<h2>Aspecto </h2>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Aspecto general</label>

    <select id="selectbasic" name="selectbasic" class="form-control">
      <option value="0">Seleccionar</option>
      <option value="1">Aseado</option>
      <option value="2">Descuidado</option>
    </select>
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Piel</label>  

  <input id="piel_exam" name="piel_exam" type="text" placeholder=" Ingresar estado" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Funciones nerviosas</label>  

  <input id="func_ner" name="func_ner" type="text" placeholder="Ingresar estado" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Aparato digestivo </label>  

  <input id="aprt_digest" name="aprt_digest" type="text" placeholder="Ingresar estado" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Aparato circulatorio</label>  

  <input id="aprt_circulato" name="aprt_circulato" type="text" placeholder="Ingresar estado" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Aparato respiratorio</label>  

  <input id="aprt_resp" name="aprt_resp" type="text" placeholder="Ingresar estado" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Radioscopia pulmonar</label>  

  <input id="textinput" name="textinput" type="text" placeholder="Ingresar estado" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Aparato urinario</label>  

  <input id="apart_urina_exam" name="apart_urina_exam" type="text" placeholder="Ingresar estado" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Varices</label>  

  <input id="varices_exam" name="varices_exam" type="text" placeholder="Ingresar estado" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Edemas</label>  

  <input id="edemas_exam" name="edemas_exam" type="text" placeholder="Ingresar estado" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Senos</label>  

  <input id="sen_exam" name="sen_exam" type="text" placeholder="Ingresar estado" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Abdomen</label>  

  <input id="abdomen_exam" name="abdomen_exam" type="text" placeholder="Ingresar estado" class="form-control input-md" required="">
    
  </div>
</div>

     <input type="button" name="prev" class="prev acao" value="Anterior" />
        <input type="button" name="next2" class="next acao" value="Proximo" />
      </fieldset>

      <fieldset>
        <h2>Grupo Sanguineo</h2>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Paciente</label>  

  <input id="factor_rh_paci" name="factor_rh_paci" type="text" placeholder="Factor RH" class="form-control input-md" required="">
    
<br>
  <input id="reacion_kahn_pac" name="reacion_kahn_pac" type="text" placeholder="Reacci&oacute;n de KAHN" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">C&oacute;nyugue</label>  

  <input id="factor_rh_con" name="factor_rh_con" type="text" placeholder="Factor RH" class="form-control input-md" required="">
    
  <br>
  <input id="reacion_kahn_con" name="reacion_kahn_con" type="text" placeholder="Reacci&oacute;n de KAHN" class="form-control input-md" required="">
    
  </div>
</div>
     <input type="button" name="prev" class="prev acao" value="Anterior" />
        <input type="button" name="next2" class="next acao" value="Proximo" />
      </fieldset>

      <fieldset>
        <h2>Tratamiento</h2>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Medicamento</label>  

  <input id="medica_trat_exf" name="medica_trat_exf" type="text" placeholder="Ingresar nombre" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Dosis</label>  

  <input id="dosis_trat_exf" name="dosis_trat_exf" type="text" placeholder="Ingresar cantidad" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Duración</label>  
 
  <input id="dur_trat_exf" name="dur_trat_exf" type="text" placeholder="Ingresar d&iacute;as" class="form-control input-md" required="">
    
  </div>
</div>
     <input type="button" name="prev" class="prev acao" value="Anterior" />
        <input type="button" name="next2" class="next acao" value="Proximo" />
      </fieldset>

      <fieldset>
<h2>Pelvimetria</h2>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Estrecho inferior</label>  
 
  <input id="dosis_trat_exf" name="dosis_trat_exf" type="text" placeholder="Bisquiatico" class="form-control input-md" required="">
    </div>

</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Sagital pos.</label>  
 
  <input id="sagitalpos_pelv" name="sagitalpos_pelv" type="text" placeholder="Ingresar estado" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Sagital ant.</label>  
 
  <input id="sagitalante_pelv" name="sagitalante_pelv" type="text" placeholder="Ingresar estado" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Area</label>  
 
  <input id="area_pelv" name="area_pelv" type="text" placeholder="Ingresar estado" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Promontorio</label>  
 
  <input id="promontorio_pelv" name="promontorio_pelv" type="text" placeholder="Ingresar estado" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Espinas claticas</label>  
 
  <input id="espinas_cla_pelv" name="espinas_cla_pelv" type="text" placeholder="Ingresar estado" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Radiologia</label>  
 
  <input id="radio_pelvime" name="radio_pelvime" type="text" placeholder="Ingresar estado" class="form-control input-md" required="">
    
  </div>
</div>

 <input type="button" name="prev" class="prev acao" value="Anterior" />
        <input type="submit" name="next" class="send1 acao" value="Enviar" />

      </fieldset>

      


    </form>

    <script type="text/javascript" src="js/jquery-3.2.0.min.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>
  </body>
</html>