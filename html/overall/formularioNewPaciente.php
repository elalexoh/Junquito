<?php require_once(ACCESO_DENEGADO . 'controllers/accesoDenegado.php');?>
<?php include(HEADER_LOGIN .'public/header_login.html'); ?>
<?php include(HTML_CORE . 'overall/topnav.php'); ?>
<?php require_once (MODELS . 'conexion.php'); ?>


<img src="view/img/banner2.png" class="img-responsive" alt="" style="display:flex; margin:0 auto;">
	<main>
		<center>
			<br />
		    <form id="formNewPaciente" action="?view=models&action=registroNewPaciente" class="col s12" method="POST" name="fnewpac">
			    <div class="container">
					<fieldset class="cuadroform form-horizontal AVAST_PAM_loginform">
					    <section class="container">
					        <div class="row" style="text-align: right;">
					            <div class="col m10">
					                <h5 class="text-center " style="display: inline-block;">¡Hola!
                                        <?php
                                            if ($_SESSION["rol"] =="2") {?>
                                                <strong class="verdeSecundario">Dr. <?php echo $user["nombre_usu"]; ?></strong>
                                            <?php
                                            }else{
                                                echo '<strong class="verdeSecundario">'.$user["nombre_usu"].'</strong>';
                                            }
                                        ?>
                                        
                                    </h5>
					            </div>
                                <div class="col m2"><img src="view/img/logo.png" class="logohospital"></img></div>
					        </div>
                        </section>
                        
					    <legend id="leyenda"><h4>Precarga Paciente</h4></legend>
    					<div class="container">
                                <div class="prueba">
                                    <h5>Datos Personales del paciente</h5>
                                </div>
                                <div id="mFormulario">
                                    <div class="row" id="grey" >
                                        <div class="input-field col s12 m12 l4"><!--autofocus!-->
            								<input id="pacCedula" type="text" name="rpcedula" class='validate' placeholder=""/>
            								<label for="pacCedula" title="Cédula de Identidad">C.I.</label>
            								<div class="" id="ntCedula"></div>
            							</div>
            							<div class="input-field col s12 m12 l3">
            							<select id="tipoSangre" name="rptiposang" class="browser-default col s12 m12 l14" title="Tipo de Sangre">
            			                  <option value="empty" selected>Tipo de Sangre</option>
            			                  
            			                  <?php
            				                  	  $tsangre="SELECT cod_tipo_sangre, descripcion FROM tipo_sangre ORDER BY descripcion ASC";
            					                  	$query_tsanguinio= $mysqli->query($tsangre);
            					                  
            					                  while ($select_tsang=mysqli_fetch_assoc($query_tsanguinio)) {
            					                  	echo "<option value='".$select_tsang['cod_tipo_sangre']."'>".$select_tsang['descripcion']."</option>";
            					                  }
            			                  	?>
            			               	</select>
            			               	<div class="" id="ntTipoSangre"></div>
            							</div>
            							<div class="input-field col s12 m12 l5">
            							<select id="alergia" name="rpalerg" class="browser-default col s12 m12 l14" title="Alergias">
            			                  <option value="empty" selected>Alergias</option>
            			                  <?php
            				                  	  $alergia="SELECT cod_alergia, descripcion FROM alergias ORDER BY descripcion ASC";
            					                  	$query_alergia= $mysqli->query($alergia);
            					                  
            					                  while ($array_alergia=mysqli_fetch_assoc($query_alergia)) {
            					                  	echo "<option value='".$array_alergia['cod_alergia']."'>".$array_alergia['descripcion']."</option>";
            					                  }
            			                  	?>
            			               	</select>
            			               	<div class="" id="ntAlerg"></div>
            							</div>
                                    </div>
                                    <div class="row" id="">
            							<div class="input-field col s6 m6 l6">
            								<input id="nomPaciente" type="text" name="rpnombre" class='validate' onkeypress="return soloLetras(event)" title="Nombre(s) del Paciente" onpaste="return false" />
            								<label for="rpnombre" title="Nombre(s) del Paciente">Nombre(s)</label>
            								<div class="" id="ntNomPaciente"></div>
            							</div>
            						<!--	<div class="input-field col s12 m12 l3">
            								<input type="text" name="seg_nomb" class='validate' title="Segundo Nombre del Paciente" onpaste="return false" />
            								<label for="seg_nomb" title="Segundo Nombre del Paciente">Segundo Nombre</label>
            							</div>-->
            							<div class="input-field col s6 m6 l6">
            								<input id="apePaciente" type="text" name="rpapellido" class='validate' title="Apellido(s) del Paciente" onkeypress="return soloLetras(event)"/>
            								<label for="rpapellido" title="Apellido(s) del Paciente">Apellido(s)</label>
            								<div class="" id="ntApePaciente"></div>
            							</div>
                                    </div>
                                    <div class="row" id="grey">
                                        <div class="input-default col s12 m12 l3" title="Fecha de Nacimiento" onpaste="return false" />
                							<input id="date" type="text" value="<?php echo date("Y/m/d"); ?>" readonly name="theDate" onclick="displayCalendar(document.forms[0].theDate,'yyyy/mm/dd',this);" />
                							<label for="theDate" title="Fecha de Nacimiento">Fecha de Nacimiento</label>
                							<div class="edad" ></div>
                							<div class="" id="ntFechaNac"></div>
            							</div>
            							<div class="input-field col s12 m12 l3">
                							<select id="genero" name="rpsexo" class="browser-default col s12 m12 l12" title="Genero">
                			                  <option value="empty" selected>Genero</option>
                			                  <?php 
                				                  $genero= "SELECT cod_genero, tipo_genero FROM genero ORDER BY tipo_genero ASC";
                									$query= $mysqli->query($genero);
                
                				                  	while ($tipgenero= mysqli_fetch_assoc($query)) {
                				                  		echo "<option value='".$tipgenero['cod_genero']."'>".$tipgenero['tipo_genero']."</option>";
                				                  	}
                			                   ?>
                			               </select>
                			                  <div class="" id="ntGenero"></div>
                						</div>
            							<div class="input-field col s12 m12 l3">
                                            <select id="estCivil" name="rpcivil" class="browser-default col s12 m12 l12" title="Estado Civil">
                                                <option value="empty" selected>Estado Civil</option>
                                                <option id="deshabilitado"value="N/A" style="display:none;" >Opción Deshabilitada</option>
                                                <?php 
                                                    $estadoCivil= "SELECT cod_estado_civil, descripcion FROM estado_civil ORDER BY descripcion ASC";
                                                    $query= $mysqli->query($estadoCivil);
                                                            
                                                    while ($seleccion= mysqli_fetch_assoc($query)) {
                                                        echo "<option value='".$seleccion['cod_estado_civil']."'>".$seleccion['descripcion']."</option>";
                                                    }
                                                ?>
                                            </select>
                                            <div class="" id="ntEstCivil"></div>
                                        </div>
                						<div class="input-field col s12 m12 l3">
                							<select id="profesion" name="rpprofesion" class="browser-default col s12 m12 l12" title="Profesión">
                			                  <option id="titulo" value="empty" selected>Profesión/Oficio</option>
                			                  <option id="deshabilitado"value="N/A" style="display:none;" >Opción Deshabilitada</option>
                			                  <?php 
                				                  $prof= "SELECT cod_profesion, descripcion FROM profesion ORDER BY descripcion ASC";
                									$query= $mysqli->query($prof);
                									
                				                  	while ($tiprof= mysqli_fetch_assoc($query)) {
                				                  		echo "<option value='".$tiprof['cod_profesion']."'>".$tiprof['descripcion']."</option>";
                				                  	}
                			                   ?>
                			               </select>
                			               <div class="" id="ntOficio"></div>
                						</div>
                                    </div>
                                    <div class="row" id="">
                                        <?php 
                                    		$sql="SELECT cod_nacionalidad, nombre_pais from nacionalidad ORDER BY cod_nacionalidad ASC";
                                    		$res=$mysqli->query($sql);
                                        ?>
            							<div class="input-field col s12 m12 l4">
            							    <select id="cbx_nacionalidad" name="cbx_nacion" class="browser-default col s12 m12 l12" title="Nacionalidad">
                                				<option value="empty" selected>Seleccione País</option>
                                				<?php while ($fila=mysqli_fetch_assoc($res)){ ?>
                                					<option value="<?php echo $fila['cod_nacionalidad']?>"><?php echo $fila['nombre_pais']?></option>
                                				<?php }?>
                                							
                                			</select>
                                			<div class="" id="ntPais"></div>
            							</div>
            							<div class="input-field col s12 m12 l4">
            							    <select id="cbx_estado" name="cbx_estado" class="browser-default col s12 m12 l12" title="Estado">
                                                <option value="empty" selected>Seleccione Estado</option>
            
            			                   </select>
            			                   <div class="" id="ntEstado"></div>
            							</div>
            							<div class="input-field col s12 m12 l4">
                							<select id="cbx_municipio" name="cbx_municipio" class="browser-default col s12 m12 l12" title="Municipio">
                			                  <option value="empty" selected>Seleccione Municipio</option>
                			                  	
                			               </select>
            			                   <div class="" id="ntMunicipio"></div>
            							</div>
                                    </div>
                                    <div class="row" id="">
                                    	<div class="input-field col s12 m12 l6">
											<select id="cbx_parroquia" name="cbx_parroquia" class="browser-default col s12 m12 l12" title="Parroquia">
												<option value="empty" selected>Seleccione Parroquia</option>
											</select>
											<div class="" id="ntParroquia"></div>
										</div>
										<div class="input-field col s12 m12 l6">
											<select id="cbx_ciudad" name="cbx_ciudad" class="browser-default col s12 m12 l12" title="Ciudad">
											  <option value="empty" selected>Seleccione Ciudad</option>
											</select>
											<div class="" id="ntCiudad"></div>
										</div>
                                    </div>
                                    <div class="row" id="grey">
        								<div class="input-field col s12 m12 l4">
        									<input id="tlfMovil" type="text" name="tlfMovil" class='validate' title="Telefono Movil" onkeypress="" onpaste="return false" />
        									<label for="tlfMovil" title="Telefono Movil">Telefono Movil</label>
        									<div class="" id="ntTelefonoMovil"></div>
        								</div>
        								<div class="input-field col s12 m12 l4">
        									<input id="tlfOficina" type="text" name="tlfOficina" class='validate' title="Telefono de Oficina" onkeypress="" onpaste="return false" />
        									<label for="tlfOficina" title="Telefono de Oficina">Telefono de Oficina</label>
        									<div class="" id="ntTelefonoOficina"></div>
        								</div>
        								<div class="input-field col s12 m12 l4">
        									<input id="tlfLocal" type="text" name="tlfLocal" class='validate' title="Telefono Local" onkeypress="" onpaste="return false" />
        									<label for="tlfLocal" title="Telefono Local">Telefono Local</label>
        									<div class="" id="ntTelefonoLocal"></div>
        								</div>
    				                </div>
    				                <div class="row" id=""></div>
    				                <main>
            						  <center><legend><h5>Datos del familiar (En caso de emergencia)</h5></legend></center>
            						</main>
            						<div class="row" id="grey">
            						    <div class="input-field col s12 m12 l2">
    									    <select id="parentescoFam" name="rppafam" class="browser-default col s12 m12 l12" title="Parentesco Familiar">
    					                      <option value="empty" selected>Parentesco Familiar</option>
    					                        <?php 
    					                  	        $parentesco="SELECT cod_parentesco, descripcion FROM parentesco ORDER BY descripcion ASC";
    						                  	    $query_part= $mysqli->query($parentesco);
        						                  while ($select_pa=mysqli_fetch_assoc($query_part)) {
        						                  	echo "<option value='".$select_pa['cod_parentesco']."'>".$select_pa['descripcion']."</option>";
        						                  }
                                                ?>
    					                   </select>
    					                   <div class="" id="ntParentesco"></div>
    								    </div>
        								<div class="input-field col s12 m12 l3">
        									<input id="nomFamiliar" type="text" name="rpnombfam" class='validate' title="Nombre del Familiar" onkeypress="return soloLetras(event)" onpaste="return false" />
        									<label for="rpnombfam" title="Nombre del Familiar">Nombre del Familiar</label>
        									<div class="" id="ntNomFam"></div>
        								</div>
        								<div class="input-field col s12 m12 l3">
        									<input id="apeFamiliar" type="text" name="rpapfam" class='validate' title="Apellido del Familiar" onkeypress="return soloLetras(event)" onpaste="return false" />
        									<label for="rpapfam" title="Apellido del Familiar">Apellido del Familiar</label>
        									<div class="" id="ntApeFam"></div>
        								</div>
            							<div class="input-field col s12 m12 l4">
            								<input id="nroTlfFamiliar" type="text" name="rfnumber" class='validate' title="Número Telefónico(Familiar)" onpaste="return false" />
            								<label for="rfnumber" title="Número Telefónico">Número Telefónico Emergencia</label>
            								<div class="" id="ntNroFam"></div>
            							</div>
            						</div>
            						<div class="row" id="">
                                        <h5>¿Posee usted Seguro?</h5>
            						    <div class="col s6 m6 l6">
            						        <input type="radio" id="mostrar" name="seguro" >
            						        <label for="mostrar">Si</label>
            						    </div>
            						    <div class="col s6 m6 l6">
                                            <input type="radio" id="ocultar" name="seguro" checked="checked">
            						        <label for="ocultar">No</label>
            						    </div>
            						</div>
            						<div class="row" id="panelSeguro" style="display:none;">
                                        <div class="input-field col s6 m6 l6">
                							<select id="tipoSeguro" name="rpseguro" class="browser-default col s12 m12 l14" title="Tipo de Seguro">
                                                <option value="empty" selected>Tipo de Seguro</option>
                    			                  <?php
                    				                  	  $tseguro="SELECT cod_tipo_seguro, descripcion FROM sso ORDER BY descripcion ASC";
                    					                  	$query_tseguro= $mysqli->query($tseguro);
                    					                  
                    					                  while ($select_tseguro=mysqli_fetch_assoc($query_tseguro)) {
                    					                  	echo "<option value='".$select_tseguro['cod_tipo_seguro']."'>".$select_tseguro['descripcion']."</option>";
                    					                  }
                    			                  	?>
                                            </select>
                                            <div class="" id="ntTipoSeguro"></div>
                                        </div>
            							<div class="input-field col s6 m6 l6">
            								<input id="nroSeguro" type="text" name="rpnro" class='validate' title="Nro de Seguro (Máx 10 Caracteres)" onpaste="return false" onkeypress="return soloNumeros(event)" />
            								<label for="rpnro" title="Número de Seguro">Nro de Seguro</label>
            								<div class="" id="ntNroSeguro"></div>
            							</div>
    						        </div>
                                    <br/>
                                </div>
                                <center>
                	              <div class='row'>
                	                <div class="col s12 m6 l6">
                	                <input type="hidden" name="ajax">
                	                  <button type='submit' id='btnNewPaciente' class='btn btn-medium waves-effect indigo'onclick="confRegistro();">Registrar</button>
                	                </div>
                	                  <div class="col s12 m6 l6">
                	                  <a type='reset' class='btn btn-medium waves-effect grey darken-3' onclick="confSalida();">Cancelar</a>
                	                </div>
                	              </div>
                	            </center>
                        </div>
                    </fieldset>
                </div>
            </form>
			<br />
			<!--<a class='linkslogin' href="?view=vistas&action=menuPrincipal"><b>Ir al Menú Principal</b></a>!-->
		</center>
	</main>
	<div id="prueba1" class="modal">
        <div class="modal-content">
          <h4>Modal Header</h4>
          <p>A bunch of text</p>
        </div>
        <div class="modal-footer">
          <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
        </div>
    </div>
	

<?php include(FOOTER_LOGIN . 'public/footer_login.html'); ?>
<!--<a href="?view=vistas&action=contRegistroNewPaciente" type='text' class='btn btn-medium waves-effect waves-teal'>Siguiente</a>!-->