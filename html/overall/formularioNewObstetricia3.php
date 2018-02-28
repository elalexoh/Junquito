<?php 
include(ACCESO_DENEGADO . 'controllers/accesoDenegado.php');
include(CABECERA_CORE . 'public/cabecera.html');
//include('help_panel.php');
include('core/models/conexion.php');
$consulta="SELECT cod_nacionalidad, nacionalidad_nac FROM pais_nacionalidad ORDER BY nacionalidad_nac ASC";
$result=$mysqli->query($consulta);
?>

 <body>
       <div class="resp">
    </div>

  
      <h1 class="text-center">Historia de Obst&eacute;trica </h1>
      <hr>
    
    <form id="formulario" method="post" enctype="multipart/form-data" name="formulario" action="core/models/capturar.php">
      <ul id="progress">
        <li class="ativo muchos3">Antecedentes Hereditarios y Personales</li>
        <li class="muchos3">Datos Quir&uacute;rgicos</li>
        <li class="muchos3">Antecedentes Obstetricos</li>
        <li class="muchos3">Control Prenatal</li>
      </ul>

      <fieldset>
<h2>Antecedentes Hereditarios y Personales</h2>

 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Antecedentes Familiares</label>  

  <select class="form-control text-right" id="select" >
                    <option>Seleccionar enfermedad</option>
                      <option> Oncol&oacute;gicos</option>
              </select>
    
  </div>
</div>

 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Antecedentes Personales</label>  

 <select class="form-control text-right" id="select" >
                    <option>Seleccionar enfermedad</option>
                      <option> Oncol&oacute;gicos</option>
              </select>
  </div>
</div>

 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Menarqu&iacute;a</label>  

  <input id="mnq_dtm_obs" name="mnq_dtm_obs" type="text" placeholder="Ingresar menarqu&iacute;a" class="form-control input-md" required="">
    
  </div>
</div>

 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Tipo</label>  
 
  <input id="tipo_dtm_obs" name="tipo_dtm_obs" type="text" placeholder="Ingresar tipo" class="form-control input-md" required="">
    
  </div>
</div>

 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Dismenorrea</label>  
 
  <input id="dis_dtm_obs" name="dis_dtm_obs" type="text" placeholder="Ingresar dato" class="form-control input-md" required="">
    
  </div>
</div>

 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Primera Relaci&oacute;n Sexual</label>  
 
  <input id="edadfs_dtm_obs" name="edadfs_dtm_obs" type="text" placeholder="Ingresar edad" class="form-control input-md" required="">
    
  </div>
</div>
        <input type="button" name="next1" class="next1 acao" value="Proximo" />
      </fieldset>

      <fieldset>
        <h2>Datos Quir&uacute;rgicos</h2>


 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Naturaleza </label>  

  <input id="natuz_q" name="natuz_q" type="text" placeholder="Ingresar motivo" class="form-control input-md" required="">
    
  </div>
</div>

 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Fecha</label>  

  <input id="fcha_q" name="fcha_q" type="text" placeholder="aaaa/mm/dd" class="form-control input-md" required="">
    
  </div>
</div>

 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Lugar de la operaci&oacute;n </label>  

  <input id="lug_qq" name="lug_qq" type="text" placeholder="Nombre del hospital" class="form-control input-md" required="">
    
  </div>
</div>
        <input type="button" name="prev" class="prev acao" value="Anterior" />
        <input type="button" name="next2" class="next acao" value="Proximo" />
      </fieldset>

      <fieldset>
        <h2>Antecedentes Obstetricos</h2>

 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Fecha del primer embarazo</label>  
 
  <input id="fecha_emb_dtm_obs" name="fecha_emb_dtm_obs" type="text" placeholder="aaaa/mm/dd" class="form-control input-md" required="">
    
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
      <label class="control-label">Niños muertos</label>
 
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
      <label class="control-label">Niños vivos </label>
 
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
      <label class="control-label">Intervenciones </label>  
 
  <input id="interven_part" name="interven_part" type="text" placeholder="Ingresar cantidad" class="form-control input-md" required="">
    
  </div>
</div>
        <input type="button" name="prev" class="prev acao" value="Anterior" />
        <input type="button" name="next2" class="next acao" value="Proximo" />
      </fieldset>

      <fieldset>
        <h2>Control Prenatal</h2>
                          
 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Lugar del prenatal</label>  
 
  <input id="lug_pren" name="lug_pren" type="text" placeholder="Nombre del hospital" class="form-control input-md">
    
  </div>
</div>

 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">N&uacute;mero de consultas</label>

    <select id="selectbasic" name="selectbasic" class="form-control">
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
      <label class="control-label">N&uacute;mero de historia en la maternidad</label>  

  <input id="nro_his_mater" name="nro_his_mater" type="text" placeholder="Ingresar n&uacute;mero" class="form-control input-md" required="">
    
  </div>
</div>

 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">N&uacute;mero de consultas en la maternidad</label>
 
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

 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Dato importante</label>  
 
  <input id="dato_imp_ctr_prena" name="dato_imp_ctr_prena" type="text" placeholder="Ingresar informaci&oacute;n relevante" class="form-control input-md" required="">
    
  </div>
</div>

 <input type="button" name="prev" class="prev acao" value="Anterior" />
        <input type="submit" name="next" class="send1 acao" value="Enviar" />
        </fieldset>

      


    </form>
	</div>
        
			
		</section>
	</div>
	<?php include(FOOTER_CORE . 'public/footer.html') ?>