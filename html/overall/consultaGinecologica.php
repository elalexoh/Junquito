<?php 
include(CABECERA_CORE . 'public/cabecera.html');
include(HEADER_LOGIN . 'public/header_login.html'); 
require_once('core/models/conexion.php');
      //$consulta="SELECT cod_nacionalidad, nacionalidad_nac FROM pais_nacionalidad ORDER BY nacionalidad_nac ASC";
      //$result=$mysqli->query($consulta);
//esto es para que se vea el menu de navegacion y el baner principal EL INCLUDE Y EL SRC
		 include(HTML_CORE . 'overall/topnav.php');
?>

<body>
<main>
    <center>
			<hr>
			<div class="container">
			<legend class="text-right">Dr. Blue2</legend>
				<h1 class="text-center" class="formlegend"><img src="../../preview/report.png"></img>Consulta De Medicina General</h1>
			 <fieldset class="cuadroform form-horizontal AVAST_PAM_loginform" >	
			 <div class="" style="display: block; padding: top; margin-top: 30px">
							<hr>
<form autocomplete="off" class="col s12" method="POST" action="?view=models&action=consultaMedicinaGeneral"  id="fesconsul" name="fesconsul">							
<div class="row">
<div class="input-field col s12 m12 l3"><!--autofocus!-->
		<input id="rpcedula" type="text" name="rpcedula" class='validate' title="Ingresar CI Paciente" onpaste="return false" />
		<label id="lrcedula" for="rpcedula" title="Cédula de Identidad">Ingresar CI Paciente</label>
</div>
<div class="input-field col s12 m12 l3">
             <button type='button' id='btn_login' class='btn btn-medium waves-effect indigo' onclick="funcValConsulMediGeneral();"> Buscar</button>
</div>
  <div class="input-field col s12 m12 l3">
  <select for="fechaespecifica" name="fechaespecifica" class="browser-default col s12 m12 l12" title="fechaespecifica">
			                                <option value="">Seleccione fecha especifica:</option>
											<option value="1">xx/xx/xxxx</option>
			                                <option value="2">xx/xx/xxxx</option>
			                                <option value="3">xx/xx/xxxx</option>
			                                <option value="4">xx/xx/xxxx</option>
										    <option value="5">...</option>
			                                </select>
  </div>
</div>

<div class="form-group">
    <!--PRUEBA-->
 <ul class="nav nav-pills">
  <li class="active"><a data-toggle="pill" href="#fecha1">Datos Del Paciente</a></li>
  <li><a data-toggle="pill" href="#fecha2">Motivos de Admision</a></li>
  <li><a data-toggle="pill" href="#fecha3">Historia Familiar</a></li>
</ul>

<div class="tab-content">
    
  <div id="fecha1" class="tab-pane fade in active">
    <div class="row">
     <div class="input-field col s12 m12 l3">
     <label>Cedula:</label><input type="text" class="form-control" placeholder="34.654.326">
	 </div>    
     <div class="input-field col s12 m12 l3">
     <label>Nombres:</label><input type="text" class="form-control" placeholder="Maria Fny">
	 </div>
	 <div class="input-field col s12 m12 l3">
     <label>Apellidos:</label><input type="text" class="form-control" placeholder="Salas Quintana">
	 </div>
	 <div class="input-field col s12 m12 l3">
     <label>Edad:</label><input type="text" class="form-control" placeholder="67">
	 </div>
	 </div>
	 <div class="row">
     <div class="input-field col s12 m12 l3">
     <label>Lugar de Nacimiento:</label><input type="text" class="form-control" placeholder="Caracas">
	 </div>    
     <div class="input-field col s12 m12 l3">
     <label>Nacionalidad:</label><input type="text" class="form-control" placeholder="V">
	 </div>
	 <div class="input-field col s12 m12 l3">
     <label>S.S.O. u otros:</label><input type="text" class="form-control" placeholder="xxx">
	 </div>
	 <div class="input-field col s12 m12 l3">
     <label>Telefono:</label><input type="text" class="form-control" placeholder="0212-6855374">
	 </div>
	 </div>
	 <div class="row">
     <div class="input-field col s12 m22 l6">
     <label>Direccion Actual:</label><input type="text" class="form-control" placeholder="AV.palos grandes, casa: epica, numero:99">
	 </div>  
	 <div class="input-field col s12 m12 l3">
     <label>Avisar en Caso de Emergencia A:</label><input type="text" class="form-control" placeholder="Jose Linares">
	 </div>
	 <div class="input-field col s12 m12 l3">
     <label>Parentesco:</label><input type="text" class="form-control" placeholder="Hermano">
	 </div>
	 </div>
  </div>
  
  <div id="fecha2" class="tab-pane fade">
     <div class="row">
     <div class="input-field col s12 m12 l12">
     <label>Motivos de admision:</label><input type="text" class="form-control" placeholder="xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx">
	 </div>    
	 </div>
     <div class="row">
     <div class="input-field col s12 m12 l12">
     <label>Enfermedad Actual:</label><input type="text" class="form-control" placeholder="xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx">
	 </div>    
	 </div>
     <div class="row">
     <div class="input-field col s12 m12 l12">
     <label>Digasnostico de Admision:</label><input type="text" class="form-control" placeholder="xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx">
	 </div>    
	 </div>
	  <div class="row">
     <div class="input-field col s12 m22 l3">
     <label>Salida Por:</label><input type="text" class="form-control" placeholder="Recuperacion">
	 </div>  
	 <div class="input-field col s12 m12 l9">
     <label>Disnotico Clinico Final:</label><input type="text" class="form-control" placeholder="xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx">
	 </div>
	 </div>
	 <div class="row">
     <div class="input-field col s12 m22 l12">
     <label>Inervecion o Tratamiento:</label><input type="text" class="form-control" placeholder="xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx">
	 </div>  
	 </div>
     </div>
  
  <div id="fecha3" class="tab-pane fade">
     <h>Estado de Salud y/o Causa de Muerte (Padre, madrem hermanos, hijos, conyugue)</h>
    <div class="row">
     <div class="input-field col s12 m22 l12">
     <label></label><input type="text" class="form-control" placeholder="xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx">
	 </div>
	 </div> 
    <h>Antesedentes Patologicos Familiares</h>
    <div class="row">
     <div class="input-field col s12 m22 l12">
     <label>Alcolismo:</label><input type="text" class="form-control" placeholder="xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx">
	 </div>
	 </div>
	 <h>Habientes y Problemas Familiares</h>
    <div class="row">
     <div class="input-field col s12 m22 l12">
     <label></label><input type="text" class="form-control" placeholder="xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx">
	 </div>
	 </div>
	  <h>Habitos psico-biologicos</h>
    <div class="row">
     <div class="input-field col s12 m22 l12">
     <label>Sueño:</label><input type="text" class="form-control" placeholder="xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx">
	 </div>
	 </div>
	  <h>Pruebas Biologicas e imunizaciones</h>
    <div class="row">
     <div class="input-field col s12 m22 l12">
     <label>Histoplasmia:</label><input type="text" class="form-control" placeholder="xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx">
	 </div>
	 </div>
	  <h>Antesedentes Ginecologicos y Obtetricos</h>
     <div class="row">
     <div class="input-field col s12 m22 l12">
     <label>Menarquia:</label><input type="text" class="form-control" placeholder="xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx">
	 </div>
	 </div>
	  <h>Antesedentes Patologicos</h>
    <div class="row">
     <div class="input-field col s12 m22 l12">
     <label>Eruptivas:</label><input type="text" class="form-control" placeholder="xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx">
	 </div>
	 </div>
	 </div>
     
  </div>
</div>
</div>
	                
	                <div class="row">
	                  <div class="input-field col s12 m12 l3">
	                  <a href="?view=vistas&action=menuPrincipal" type='reset' class='btn btn-medium waves-effect grey darken-3'>Cancelar</a>
	                </div>
	                </div>

</div>
            </div>
            <div id="valor"></div>
            </center>
            </form>
			</fieldset>
	</div>
</main>

	<?php include(FOOTER_CORE . 'public/footer.html') ?>
	<?php include(FOOTER_LOGIN . 'public/footer_login.html'); ?>