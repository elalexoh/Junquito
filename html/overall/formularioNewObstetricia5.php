<?php
include(ACCESO_DENEGADO . 'controllers/accesoDenegado.php');
include(CABECERA_CORE . 'public/cabecera.html');
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
        <li class="ativo muchos5">Ingreso</li>
        <li class="muchos5">Madre</li>
        <li class="muchos5">Reci&eacute;n Nacido</li>
        <li class="muchos5">Anexos</li>
      </ul>

      <fieldset>
        <h2>Ingreso</h2>
   

 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Servicio</label>  

  <input id="servicio" name="servicio" type="text" placeholder="Ingresar nombre del servicio" class="form-control input-md">
    
  </div>
</div>


 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Sala</label>  

  <input id="sala_pac" name="sala_pac" type="text" placeholder="N&uacute;mero de sala" class="form-control input-md">
    
  </div>
</div>


 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Cama</label>  
 
  <input id="cama_pac" name="cama_pac" type="text" placeholder="N&uacute;mero de cama" class="form-control input-md">
    
  </div>
</div>
        <input type="button" name="next1" class="next1 acao" value="Proximo" />
      </fieldset>

      <fieldset>
        <h2>Madre</h2>
      

 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Entrada a la sala de Partos</label>  
 
  <input id="entrada_sala_part" name="entrada_sala_part" type="text" placeholder="aaaa/mm/dd  00:00 aa" class="form-control input-md">
    
  </div>
</div>


 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Ruptura de la membrana</label>  
 
  <input id="rup_mem_parto" name="rup_mem_parto" type="text" placeholder="aaaa/mm/dd 00:00 aa" class="form-control input-md">
    
  </div>
</div>


 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Expulsi&oacute;n del feto</label>  
 
  <input id="expul_feto_part" name="expul_feto_part" type="text" placeholder="aaaa/mm/dd  00:00 aa" class="form-control input-md">
    
  </div>
</div>
 
 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Entrada a la sala de Partos</label>  
 
  <input id="entrada_sala_part" name="entrada_sala_part" type="text" placeholder="aaaa/mm/dd  00:00 aa" class="form-control input-md">
    
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



 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Desgarros </label>
  <br>
    <label for="desgarros-0">
      <input type="checkbox" name="desgarros" id="desgarros-0" value="1">
      1ro
    </label>
 
 
    <label for="desgarros-1">
      <input type="checkbox" name="desgarros" id="desgarros-1" value="2">
     2do
    </label>
 
    <label for="desgarros-2">
      <input type="checkbox" name="desgarros" id="desgarros-2" value="3">
      3ro
    </label>
 
  </div>
</div>


 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Expulsi&oacute;n de la placenta</label>  
 
  <input id="explucion_placenta" name="explucion_placenta" type="text" placeholder="dd/mm/aaaa  00:00 aa" class="form-control input-md">
    
  </div>
</div>



 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Cantidad de sangre perdida</label>
 
  <input id="cantidad_sangre_perdid" name="cantidad_sangre_perdid" type="text" placeholder="          cc" class="form-control input-md" required="">
    </div>
</div>


<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Parto </label>
<br>
    <label for="parto-0">
      <input type="checkbox" name="parto" id="parto-1" value="1">
      Normal
    </label>

    <label for="parto-1">
      <input type="checkbox" name="parto" id="parto-2" value="2">
     Forceps
    </label>

    <label for="parto-2">
      <input type="checkbox" name="parto" id="parto-3" value="3">
      Curaje
    </label>

    <label for="parto-2">
      <input type="checkbox" name="parto" id="parto-4" value="4">
      Curetaje
    </label>

    <label for="parto-2">
      <input type="checkbox" name="parto" id="parto-5" value="5">
      Cesar&eacute;a
    </label>
 
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
 
  <input id="nombre_anestecia1" name="nombre_anestecia1" type="text" placeholder="Ingresar nombre" class="form-control input-md">
  <br>
    <input id="dosis_anes1" name="dosis_anes1" type="text" placeholder="Ingresar dosis" class="form-control input-md">
    
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Sutura</label>  
 
  <input id="sutura_enf" name="sutura_enf" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Mecha</label>  

  <input id="mecha_enf" name="mecha_enf" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Sonda</label>  

  <input id="sonda_enf" name="sonda_enf" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Tens&iacute;on (Antes):</label>  

  <input id="tension_sis_enf" name="tension_sis_enf" type="text" placeholder="Sist&oacute;lica" class="form-control input-md" required="">
 <br>
  <input id="tension_dis_enf" name="tension_dis_enf" type="text" placeholder="Diast&oacute;lica" class="form-control input-md" required="">
     
  </div> 
</div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Tens&iacute;on (Despues):</label>  

 
  <input id="tension_sis_enf2" name="tension_sis_enf2" type="text" placeholder="Sist&oacute;lica" class="form-control input-md" required="">
 <br>
  <input id="tension_dis_enf2" name="tension_dis_enf2" type="text" placeholder="Diast&oacute;lica" class="form-control input-md" required="">
     
  </div> 
  </div>
<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Tratamiento:</label>  
    
  <input id="med_tacta_enf" name="med_tacta_enf" type="text" placeholder="Ingresar medicamento" class="form-control input-md">
 <br>
  <input id="dosi_tacta_enf" name="dosi_tacta_enf" type="text" placeholder="Ingresar dosis" class="form-control input-md" required="">   
<br>
  <input id="dur_tacta_enf" name="dur_tacta_enf" type="text" placeholder="Ingresar duraci&oacute;n" class="form-control input-md" required="">    
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
 
  <input id="nonm_bb" name="nonm_bb" type="text" placeholder="Nombres y apellidos" class="form-control input-md">
    
  </div>
  </div>
 

 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Talla</label>  
 
  <input id="talla_bb_enf" name="talla_bb_enf" type="text" placeholder="Ingresar altura" class="form-control input-md" required="">
    
  </div>
</div>


 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Peso</label>  
   <input id="peso_bb_enf" name="peso_bb_enf" type="text" placeholder="Ingresar kilogramos" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Aspiraci&oacute;n de gleras</label>  <input id="resp_gleras_bb_enf" name="resp_gleras_bb_enf" type="text" placeholder="Ingresar estado" class="form-control input-md" required="">
    
  </div>
</div>



 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Resucitaci&oacute;n</label>  
 
  <input id="resusi_bb_enf" name="resusi_bb_enf" type="text" placeholder="Detallar proceso" class="form-control input-md" required="">
    
  </div>
</div>


 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Tratamiento:</label>  
   
 
  <input id="med_tacta_enf2" name="med_tacta_enf2" type="text" placeholder="Ingresar medicamento" class="form-control input-md">
 <br>
  <input id="dosi_tacta_enf2" name="dosi_tacta_enf2" type="text" placeholder="Ingresar dosis" class="form-control input-md" required="">   
 
 <br>
  <input id="dur_tacta_enf2" name="dur_tacta_enf2" type="text" placeholder="Ingresar duraci&oacute;n " class="form-control input-md" required="">    
  </div>
</div>

       <input type="button" name="prev" class="prev acao" value="Anterior" />
        <input type="button" name="next2" class="next acao" value="Proximo" />
      </fieldset>

      <fieldset>
        <h2>Anexos</h2>




 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Placenta</label> 

 <br> 
     <input id="placenta_forma2" name="placenta_forma2" type="text" placeholder="Forma" class="form-control input-md" required="">
     <br> 
     <input id="placenta_peso2" name="placenta_peso2" type="text" placeholder="Peso" class="form-control input-md" required="">
     <br>      
     <input id="placenta_insercion2" name="placenta_insercion2" type="text" placeholder="Inserci&oacute;n" class="form-control input-md" required="">
     <br> 
     <input id="placenta_part2" name="placenta_part2" type="text" placeholder="Particularidades" class="form-control input-md" required="">
    </div>

</div>

 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Cord&oacute;n</label>  
 
  <input id="cond_long_enf" name="cond_long_enf" type="text" placeholder="Longitud" class="form-control input-md" required="">
 <br>
  <input id="cond_volumen_enf" name="cond_volumen_enf" type="text" placeholder="Volumen" class="form-control input-md" required="">
 <br>
  <input id="cond_part_enf" name="cond_part_enf" type="text" placeholder="Particulatidades" class="form-control input-md" required="">
    
  </div>
</div>

 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Membranas</label>  
 
  <input id="med_membranas_enf" name="med_membranas_enf" type="text" placeholder="Medidas" class="form-control input-md" required="">
  <br>
  <input id="part_membranas_enf" name="part_membranas_enf" type="text" placeholder="Particularidades" class="form-control input-md" required="">
    </div>
</div>

 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Asistente</label>  
 
  <input id="asistente_enf" name="asistente_enf" type="text" placeholder="Ingresar nombre y apellido" class="form-control input-md">
    
  </div>
</div>

 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Ayudante</label>  
 
  <input id="ayudante_enf" name="ayudante_enf" type="text" placeholder="Nombre y apellido" class="form-control input-md">
    
  </div>
</div>

 <div class="form-group col-md-6">
    <div class="col-md-12">
      <label class="control-label">Anestesista</label>  
 
  <input id="anestesista_enf" name="anestesista_enf" type="text" placeholder="Nombre y apellido" class="form-control input-md">
    
  </div>
</div>

 <input type="button" name="prev" class="prev acao" value="Anterior" />
        <input type="submit" name="next" class="send1 acao" value="Enviar" />
      </fieldset>


      


    </form>
  <?php include(FOOTER_CORE . 'public/footer.html') ?>