<?php //esto es lo que staba en el perfil.php
	//<a href="?view=vistas&action=newDoctor" class="btn btn-success" title="Agregar Nuevo Doctor">Agregar Nuevo Doctor</a>
 	//			<a href="?view=vistas&action=aPartadoDeEvento" class="btn btn-success" title="Evento">Eventos</a>
	//		</div>
	
	
	//controlador para las noticias LOQUE VA ES LAS VISTAS
   // if (isset($_GET["action"]) && $_GET["action"] == "aPartadoDeEvento") {
     //   require_once(HTML_CORE . 'overall/Evento.php');
    //}else {
        
    //}
?>

<?php 
include(HEADER_LOGIN . 'public/header_login.html'); 
require_once(MODELS . 'conexion.php');
//esto es para que se vea el menu de navegacion y el baner principal EL INCLUDE Y EL SRC
		 include(HTML_CORE . 'overall/topnav.php');
?>
		<img src="view/img/banner2.png" class="img-responsive" alt="">

	<main>
		<center>
			<br />

			<form action="?view=models&action=registroNewEvento" class="col s12" method="POST" name="fesno">
				<h4 class="text-center" class="formlegend"><img src="preview/report.png"></img>Apartado de Nuevos Eventos</h4>
				<div class="container">
					<fieldset class="cuadroform form-horizontal AVAST_PAM_loginform">
					<div class="" style="display: block; padding: top; margin-top: 30px">
						<div class="row">
						    <div class="input-field col s12 m12 l3">
								<input id="rptitulo" type="text" name="fdtitulo" class='validate' title="Titulo">
								<label id="lrtitulo" for="fdtitulo" title="Titulo">Agregar Titulo</label>
							</div>
							</div>
							<div class='row'>
							<div class='input-field col s12'>
								<input id="rpnombre" type="text" name="fdtexto" class='validate' title="Texto">
								<label id="lrpnombre" for="fdtexto" title="Texto">Agregar Texto</label>
							</div>
			                </div>
					   </div>
					   <div class='row'>
					       <div class="input-field col s12 m12 l3">
							<select for="fdelir" name="fdelir" class="browser-default col s12 m12 l12" title="Eliminar Noticia">
			                                <option value="">Eliminar Noticia:</option>
											<option value="1">titulo1</option>
			                                <option value="2">titulo2</option>
			                                <option value="3">titulo3</option>
			                                <option value="4">titulo4</option>
										    <option value="5">...</option>
			                                </select>
			           </div>                        
			           </div>
                        <div class='row'>
                        <div class="col s12 m6 l2">
	                        <button type='button' id='btn_login' class='btn btn-medium waves-effect indigo' onclick="funcValEvento();"> Ejecutar</button>
	                    </div>
	                    <div class="col s12 m6 l2">
	                    <a href="?view=vistas&action=menuPrincipal" type='reset' class='btn btn-medium waves-effect grey darken-3'>Cancelar</a>
	                    </div>
                        </div>
						</div>
						<div id="valor"></div>
					</div>
						<br />
	            </center>
	            </fieldset>
				</div>	
			</form>
			<br />
	</main>

<?php include(FOOTER_LOGIN . 'public/footer_login.html'); ?>





                       <SCRIPT>
	                   var $toastContent = $('<span>noticia</span>');
                       Materialize.toast($toastContent, 5000);
	                   </SCRIPT>
	               