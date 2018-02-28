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
<form autocomplete="off" class="col s12" method="POST" action="?view=models&action=consultaEmergenciaHospitalaria"  id="festmorb" name="festmorb">							
<div class="row">
							<div class="input-default col s12 m12 l3" title="Desde">
							<label for="dateIniv" title="Desde">Desde</label>
								<input type="text" name="dateIniv" class="tcal browser-default">
							</div>
							<div class="input-default col s12 m12 l3" title="Hasta">
							<label for="datefiv" title="Hasta">hasta</label>
								<input type="text" name="datefiv" class="tcal browser-default">
							</div>
<div class="input-field col s12 m12 l3">
             <button type='button' id='btn_login' class='btn btn-medium waves-effect indigo' onclick="funcValConsulEmerHosp();"> Consultar</button>
  </div>							
</div>

<div class="form-group">
    <!--PRUEBA-->
 <ul class="nav nav-pills">
  <li class="active"><a data-toggle="pill" href="#fecha1">Accidentes Hechos Violentos</a></li>
  <li><a data-toggle="pill" href="#fecha2">Enfermedad / Evento</a></li>
</ul>

<div class="tab-content">
    
  <div id="fecha1" class="tab-pane fade in active">
    <div class="row">
 <table>
<tr>
  <td><strong>No.</strong></td>
  <td><strong>MORBILIDAD</strong></td>
  <td><strong>SEXO</strong></td>
  <td><strong>MENOS 1 AÑO</strong></td>
  <td><strong>1-4 AÑOS</strong></td>
  <td><strong>5-9 AÑOS</strong></td>
  <td><strong>10-14 AÑOS</strong></td>
  <td><strong>15-24 AÑOS</strong></td>
  <td><strong>25-44 AÑOS</strong></td>
  <td><strong>45-64 AÑOS</strong></td>
  <td><strong>65 O MAS</strong></td>
  <td><strong>TOTAL</strong></td>
</tr>
 
<tr>
  <td>1</td>
  <td>FRACTURAS</td>
  <td>MASCULINO</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>
<tr>
  <td>1</td>
  <td>FRACTURAS</td>
  <td>fEMENINO</td>
    <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>

<tr>
  <td>2</td>
  <td>LUX. ESG. DESGARRO</td>
  <td>MASCULINO</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>
<tr>
  <td>2</td>
  <td>LUX. ESG. DESGARRO</td>
  <td>fEMENINO</td>
    <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>

<tr>
  <td>3</td>
  <td>TRAUMATISMO CRANEO-ENEFALICO</td>
  <td>MASCULINO</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>
<tr>
  <td>3</td>
  <td>TRAUMATISMO CRANEO-ENEFALICO</td>
  <td>fEMENINO</td>
    <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>

<tr>
  <td>4</td>
  <td>QUEMADURAS</td>
  <td>MASCULINO</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>
<tr>
  <td>4</td>
  <td>QUEMADURAS</td>
  <td>fEMENINO</td>
    <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>

<tr>
  <td>5</td>
  <td>TRAUMATISMO CRANEAL</td>
  <td>MASCULINO</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>
<tr>
  <td>5</td>
  <td>TRAUMATISMO CRANEAL</td>
  <td>fEMENINO</td>
    <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>

<tr>
  <td>6</td>
  <td>HERIDA ARMA DE FUEGO</td>
  <td>MASCULINO</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>
<tr>
  <td>6</td>
  <td>HERIDA ARMA DE FUEGO</td>
  <td>fEMENINO</td>
    <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>

<tr>
  <td>7</td>
  <td>TRAUMATISMO DE TORAX</td>
  <td>MASCULINO</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>
<tr>
  <td>7</td>
  <td>TRAUMATISMO DE TORAX</td>
  <td>fEMENINO</td>
    <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>

<tr>
  <td>8</td>
  <td>POLITRAUMATISMO</td>
  <td>MASCULINO</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>
<tr>
  <td>8</td>
  <td>POLITRAUMATISMO</td>
  <td>fEMENINO</td>
    <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>

<tr>
  <td>9</td>
  <td>OTROS TRAUMATISMO</td>
  <td>MASCULINO</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>
<tr>
  <td>9</td>
  <td>OTROS TRAUMATISMO</td>
  <td>fEMENINO</td>
    <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>

<tr>
  <td>10</td>
  <td>HERIDA ARMA BLANCA</td>
  <td>MASCULINO</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>
<tr>
  <td>10</td>
  <td>HERIDA ARMA BLANCA</td>
  <td>fEMENINO</td>
    <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>

<tr>
  <td>11</td>
  <td>ACCIDENTE DE TRANSITO</td>
  <td>MASCULINO</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>
<tr>
  <td>11</td>
  <td>ACCIDENTE DE TRANSITO</td>
  <td>fEMENINO</td>
    <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>

<tr>
  <td>12</td>
  <td>OTRAS DESCONOCIDA</td>
  <td>MASCULINO</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>
<tr>
  <td>12</td>
  <td>OTRAS DESCONOCIDA</td>
  <td>fEMENINO</td>
    <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>

<tr>
  <td>13</td>
  <td>EFECT. CUERPO. EXTRAÑO</td>
  <td>MASCULINO</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>
<tr>
  <td>13</td>
  <td>EFECT. CUERPO. EXTRAÑO</td>
  <td>fEMENINO</td>
    <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>

<tr>
  <td>14</td>
  <td>HERIDAS</td>
  <td>MASCULINO</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>
<tr>
  <td>14</td>
  <td>HERIDAS</td>
  <td>fEMENINO</td>
    <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>

<tr>
  <td>15</td>
  <td>AHORCADO</td>
  <td>MASCULINO</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>
<tr>
  <td>15</td>
  <td>AHORCADO</td>
  <td>fEMENINO</td>
    <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>

<tr>
  <td>16</td>
  <td>ELECTROCUCION</td>
  <td>MASCULINO</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>
<tr>
  <td>16</td>
  <td>ELECTROCUCION</td>
  <td>fEMENINO</td>
    <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>

<tr>
  <td>17</td>
  <td>ENVEN. X DROGAS MED. O PRODUCTO BIOLOGICO</td>
  <td>MASCULINO</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>
<tr>
  <td>17</td>
  <td>ENVEN. X DROGAS MED. O PRODUCTO BIOLOGICO</td>
  <td>fEMENINO</td>
    <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>

<tr>
  <td>18</td>
  <td>INTOXICACION PLAGUICIDA</td>
  <td>MASCULINO</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>
<tr>
  <td>18</td>
  <td>INTOXICACION PLAGUICIDA</td>
  <td>fEMENINO</td>
    <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>

<tr>
  <td>19</td>
  <td>VIOLENCIA DE GENERO</td>
  <td>MASCULINO</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>
<tr>
  <td>19</td>
  <td>VIOLENCIA DE GENERO</td>
  <td>fEMENINO</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>

<tr>
  <td></td>
  <td>TOTALES</td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>

</table>
	 </div>
  </div>
  
  <div id="fecha2" class="tab-pane fade">
     <div class="row">
   <table>
<tr>
  <td><strong>No.</strong></td>
  <td><strong>Enfermedad / Evento</strong></td>
  <td><strong>SEXO</strong></td>
  <td><strong>< 1 año</strong></td>
  <td><strong>1 a 4 años</strong></td>
  <td><strong>5 a 6 años</strong></td>
  <td><strong>7 a 9 años</strong></td>
  <td><strong>10 a 11años</strong></td>
  <td><strong>12 a 14 años</strong></td>
  <td><strong>15 a 19 años</strong></td>
  <td><strong>20 a 24 años</strong></td>
  <td><strong>25 a 44 años</strong></td>
  <td><strong>45 a 59 años</strong></td>
  <td><strong>60 a 64 años</strong></td>
  <td><strong>65 años y más</strong></td>
  <td><strong>ignorada</strong></td>
  <td><strong>Total</strong></td>
</tr>

<tr>
  <td>1</td>
  <td>Cólera (A00)</td>
  <td>MASCULINO</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>
<tr>
  <td>1</td>
  <td>Cólera (A00)</td>
  <td>FEMENO</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>

<tr>
  <td>2</td>
  <td>Diarreas (A08-A09)</td>
  <td>MASCULINO</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>
<tr>
  <td>2</td>
  <td>Diarreas (A08-A09)</td>
  <td>FEMENO</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>

<tr>
  <td>3</td>
  <td>Amibiasis (A06)</td>
  <td>MASCULINO</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>
<tr>
  <td>3</td>
  <td>Amibiasis (A06)</td>
  <td>FEMENO</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>
</table>

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