<?php require_once(ACCESO_DENEGADO . 'controllers/accesoDenegado.php');?>
<?php include(HEADER .'public/headerBootstrap.html'); ?>
<?php include(HTML_CORE . 'overall/topnav.php'); ?>
<?php require_once (MODELS . 'conexion.php'); ?>
<img src="view/img/banner2.png" class="img-responsive" alt="" style="display:flex; margin:0 auto;">
<?php
//require MODELS . 'controlDB.php';
$obj = new controlDB();
?>


<script src="view/js/functions.js" type="text/javascript"></script>
<link rel="stylesheet" href="view/style_formularioNewMedicinaGeneral.css" type="text/css" >
<link rel="stylesheet" href="view/rightnav.css" type="text/css" />
<!--**************************************************************************************************************************************!-->
<main>
    <section>
        <div class="container">
            <nav>
                <form id="formulario"  enctype="multipart/form-data" >
                    <ul id="progress">
                    <li class="ativo" title="Datos de admisión"></li></br></br>
                    <li title="Madre"></li></br></br>
                    <li title="Examen Fisico"></li></br></br>
                    <li title="Examen Anexos"></li></br></br>
                    <li title="Aspecto"></li></br></br>
                    <li title="Pelvimetria"></li></br></br>
                    <li title="Dilatacion"></li></br></br>
                    <li title="Tactos"></li></br></br>
                    <li title="Parto"></li></br></br>
                    <li title="Alumbramiento"></li></br></br>
                    <li title="Periodo Expulsión"></li></br></br>
                    <li title="Intervención"></li></br></br>
                    <li title="Recien Nacido"></li></br></br>
                    <li title="Anexos"></li>
                    </ul>
                </form>
            </nav>
            <form id="formPediatria" class="form-horizontal" action="?view=models&action=registroTrabajoParto" method="POST" enctype="multipart/form-data" name="formObstetriciaF">
                <!--datos de admision-->
                <fieldset>
                    <section style="text-align: right;">
                        <div>
                            <div class="col-sm-10 col-md-10 col-lg-10"> 
                                <h2 class="text-center" class="formlegend"><img src="view/img/report.png"></img>Trabajo y Parto</h2>
                            </div>
                            <div class="col-sm-2 col-md-2 col-lg-2"> 
                                <img src="view/img/logo.png" class="logohospital"></img>
                            </div>
                        </div>
                    </section>
                    <div class="row">
                        <legend id="leyenda"><h4>Datos de admisión</h4></legend>
                    </div>
                    <div class=row>
                                <div class="" style="display: block; padding: top;">
                                    <div class="form-group">
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                    </div>
                                    <label class="control-label" for="cedulaPac"></label>
                                    <div class="col-sm-4 col-md-4 col-lg-4"> 
                                    <?php echo $_SESSION['cedulaPaciente']; ?>
                                        <input type="hidden" value="<?php echo $_SESSION['cedulaPaciente']; ?>" name="cedulaPac" id="cedulaPac" placeholder="?php echo $_SESSION['cedulaPaciente']; ?>">
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                    </div>
                                </div>
                                <div class="form-group">
                                            <label class="control-label" for="mtvadmin"></label>
                                            <div class="col-sm-4 col-md-4 col-lg-4"> 
                                                <textarea class="form-control" rows="2" id="mtvadmin" name="mtvadmin" placeholder="Motivo de Admisión"></textarea>
                                                <h6>Motivo de Admisión</h6>
                                                <div id="emtvadmin"></div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-3">
                                                <textarea class="form-control" rows="2" id="enfactual" name="enfactual" placeholder="Enfermedad Actual"></textarea>
                                                <h6>Enfermedad Actual</h6>
                                                <div id="eEnfermedad"></div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4">
                                                <textarea class="form-control" rows="2" id="diag" name="diag" placeholder="Diagnóstico de Admisión"></textarea>
                                                <h6>Diagnóstico de Admisión</h6>
                                            </div>
                                    </div>
                                </div>
                                <div class="" style="display: block; padding: top;">
                                <div class="form-group">
                                        <label class="control-label col-sm-2" for="diagclin">Diagnóstico Clínico Final</label>
                                        <div class="col-sm-4 col-md-4 col-lg-4">
                                          <input type="text" class="form-control" name="diagclin" id="diagclin">
                                        </div>
                                        <div class="col-sm-4 col-md-4 col-lg-4">
                                          <input  type="text" class="form-control" name="otrosdiag" id="otrosdiag">
                                        </div>
                                        <label style="text-align: lef;" class="control-label col-sm-2 text-left" for="otrosdiag">Otros Diagnósticos</label>
                                </div>
                                <div class="form-group">
                                        <label class="control-label" for="interPrincipal"></label>
                                        <div class="col-sm-3 col-md-6 col-lg-6">
                                            <textarea class="form-control" rows="2" id="interPrincipal" name="interPrincipal" placeholder="Intervención Principal"></textarea>
                                            <h6>Intervención Principal</h6>
                                            <div id="eintervencion"></div>
                                        </div>
                                        <div class="col-sm-3 col-md-6 col-lg-6">
                                            <textarea class="form-control" rows="2" id="otrosdiag2" name="diagFinal" placeholder="Intervenciones Anteriores"></textarea>
                                            <h6>Intervenciones Anteriores</h6>
                                            <div id="eintervencion"></div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    <input type="button" name="next2" class="btn next acao " value="Siguiente"/>
                </fieldset>
                <!--datos de madre-->
                <fieldset>
                    <h2 class="text-center" class="formlegend">Datos de la Madre: </h2>
                    <h6 class="text-center" class="formlegend"><strong>($nombre | Datos Objetivos)</strong></h6>
                    <br />
                    </br>
                    <div class="form-group">
                      <div class="col-md-2"></div>
                      <div class="col-md-4">
                        <input id="entrada_sala_part" name="fechaEntrada" type="text" placeholder="aaaa/mm/dd  00:00 aa" class="form-control input-md">
                        <label for="entrada_sala_part">Entrada a la sala de Partos</label>
                      </div>
                      <div class="col-md-4">
                        <input id="rup_mem_parto" name="rupturaMembrana" type="text" placeholder="aaaa/mm/dd 00:00 aa" class="form-control input-md">
                        <label for="rup_mem_parto">Ruptura de la membrana</label> 
                      </div>
                      <div class="col-md-2"></div>
                    </div>
                    <div class="form-group"> 
                        <div class="col-md-4"></div>
                      <div class="col-md-4">
                        <input id="expul_feto_part" name="expulsionFeto" type="text" placeholder="aaaa/mm/dd  00:00 aa" class="form-control input-md">
                        <label for="expul_feto_part">Expulsi&oacute;n del feto</label>
                      </div>
                         <div class="col-md-4"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4"></div>
                        <div class="col-md-4"><label for="">Episiotomía:</label></div>
                        <div class="col-md-4"></div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-4">
                                <input id="tipepi_per_exp" name="tipoEpisio" type="text" placeholder="Tipo" class="form-control input-md" />
                            </div>
                            <div class="col-md-4">
                                <input id="tectepi_per_exp" name="tecnicaEpisio" type="text" placeholder="T&eacute;cnica" class="form-control input-md">
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <input id="materi_per_exp" name="materialEpisio" type="text" placeholder="Material de sutura" class="form-control input-md">
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4"><label for="desgarros">Desgarros </label></div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-2">
                                <div class="checkbox">
                                    <label for="desgarros-0"><input type="checkbox" name="desgarros" id="desgarros-0" value="SI">1ro</label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="checkbox">
                                    <label for="desgarros-1"><input type="checkbox" name="desgarros" id="desgarros-1" value="SI">2do</label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="checkbox">
                                    <label for="desgarros-2"><input type="checkbox" name="desgarros" id="desgarros-2" value="SI">3ro</label>
                                </div>
                            </div>
                            <div class="col-md-3"></div>
                            </br></br>
                        </div>
                    </div>
                    <div class="form-group"> 
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                            <input id="explucion_placenta" name="explucionPlacenta" type="text" placeholder="dd/mm/aaaa  00:00 aa" class="form-control input-md">
                            <label for="explucion_placenta">Expulsi&oacute;n de la placenta</label>
                        </div>
                        <div class="col-md-4">
                            <input id="cantidad_sangre_perdid" name="cantidadSangre" type="text" placeholder="cc" class="form-control input-md" />
                            <label for="cantidad_sangre_perdid">Cantidad de sangre perdida</label>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <input type="button" name="prev" class="btn prev acao" value="Anterior" />
                    <input type="button" name="next3" class="btn next acao" value="Siguiente"/>
                </fieldset>
                <!--datos de Examen fisico-->
                <fieldset>
                    <h2 class="text-center" class="formlegend">Examen F&iacute;sico: </h2>
                    <h6 class="text-center" class="formlegend"><strong>(Datos del examen)</strong></h6>
                    <br />
                    <div class="form-group">
                            <div class="col-md-2"></div>
                            <div class="col-md-4">
                                <input id="talla_obs" name="tallaObstetrica" type="text" placeholder="Ingresar altura" class="form-control input-md" />
                                <label>Talla</label>
                            </div>
                            <div class="col-md-4">
                                <input id="pulso_obs" name="pulsoObstetrico" type="text" placeholder="Ingresar P.P.M." class="form-control input-md" />
                                <label>Pulso</label>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    <div class="form-group">
                            <div class="col-md-2"></div>
                            <div class="col-md-4">
                                <input id="peso_obs" name="pesoObstetrico" type="text" placeholder="Ingresar kilogramos" class="form-control input-md" />
                                <label>Peso</label>
                            </div>
                            <div class="col-md-4">
                                <input id="temp_obs" name="tempObstetrico" type="text" placeholder="Temperatura (Ingresar grados)" class="form-control input-md" />
                                <label>Temp.</label>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    <div class="form-group">
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <label>Tensi&oacute;n:</label>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-4">
                                    <input id="tension_sis_obs" name="tensionSistole" type="text" placeholder="Sist&oacute;lica" class="form-control input-md" />
                                </div>
                                <div class="col-md-4">
                                    <input id="tension_dis_obs" name="tensionDiastole" type="text" placeholder="Diast&oacute;lica" class="form-control input-md" />
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                        </div>
                    <input type="button" name="prev" class="btn prev acao" value="Anterior" />
                    <input type="button" name="next4" class="btn next acao" value="Siguiente"/>
                </fieldset>
                <!--datos de Examenes anexos-->
                <fieldset>
                    <h2 class="text-center" class="formlegend">Ex&aacute;men de los anexos:</h2>
                    <h6 class="text-center" class="formlegend"><strong>(Datos del examen)</strong></h6>
                    <br />
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4"><label>Placenta</label></div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-4">
                                <input id="placenta_forma" name="placenta_forma" type="text" placeholder="Forma" class="form-control input-md" />
                            </div>
                            <div class="col-md-4">
                                <input id="placenta_peso" name="placenta_peso" type="text" placeholder="Peso" class="form-control input-md" />
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-4">
                                <input id="placenta_insercion" name="placenta_insercion" type="text" placeholder="Inserci&oacute;n" class="form-control input-md" />
                            </div>
                            <div class="col-md-4">
                                <input id="placenta_part" name="placenta_part" type="text" placeholder="Particularidades" class="form-control input-md" />
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4"> <label class="control-label">Membranas</label></div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-4">
                                <input id="med_membranas" name="med_membranas" type="text" placeholder="Medidas" class="form-control input-md" />    
                            </div>
                            <div class="col-md-4">
                                <input id="part_membranas" name="part_membranas" type="text" placeholder="Particularidades" class="form-control input-md" />    
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4"><label class="control-label">Cord&oacute;n</label></div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-4">
                                <input id="cond_long" name="cond_long" type="text" placeholder="Longitud" class="form-control input-md" />    
                            </div>
                            <div class="col-md-4">
                                <input id="cond_volumen" name="cond_volumen" type="text" placeholder="Volumen" class="form-control input-md" />    
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                              <input id="cond_part" name="cond_part" type="text" placeholder="Particulatidades" class="form-control input-md" />      
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                    </div>
                    <input type="button" name="prev" class="btn prev acao " value="Anterior" />
                    <input type="button" name="next5" class="btn next acao " value="Siguiente"/>
                </fieldset>
                <!--datos de Aspecto-->
                <fieldset>
                    <h2 class="text-center" class="formlegend">Aspecto:</h2>
                    <h6 class="text-center" class="formlegend"><strong>(Datos del aspecto de la madre)</strong></h6>
                    <br />
                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                            <select id="selectbasic" name="selectbasic" class="form-control">
                              <option disabled value="">Seleccionar</option>
                              <?php
            				    $conAspecto="SELECT cod_aspecto_genral, nomb_aspecto FROM aspecto_general";
            					   $cons_aspecto= $mysqli->query($conAspecto);
            					                  
            					   while ($aspectog=mysqli_fetch_assoc($cons_aspecto)) {
            					    echo "<option value='".$aspectog['cod_aspecto_genral']."'>".$aspectog['nomb_aspecto']."</option>";
            				    }
            			     ?>
                            </select>
                            <label class="control-label">Aspecto general</label>
                        </div>
                        <div class="col-md-4">
                             <input id="piel_exam" name="examenPiel" type="text" placeholder=" Ingresar estado" class="form-control input-md" />
                             <label class="control-label">Piel</label>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                            <input id="func_ner" name="funcionesNerv" type="text" placeholder="Ingresar estado" class="form-control input-md" />  
                            <label class="control-label">Funciones nerviosas</label> 
                        </div>
                        <div class="col-md-4">
                            <input id="aprt_digest" name="apararoDigest" type="text" placeholder="Ingresar estado" class="form-control input-md" />
                            <label class="control-label">Aparato digestivo </label> 
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                          <input id="aprt_circulato" name="aparatoCirculato" type="text" placeholder="Ingresar estado" class="form-control input-md" />
                          <label class="control-label">Aparato circulatorio</label>
                        </div>
                        <div class="col-md-4">
                          <input id="aprt_resp" name="aparatoResp" type="text" placeholder="Ingresar estado" class="form-control input-md" />
                          <label class="control-label">Aparato respiratorio</label>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                          <input id="textinput" name="radioscopio" type="text" placeholder="Ingresar estado" class="form-control input-md" />
                          <label class="control-label">Radioscopia pulmonar</label>
                        </div>
                        <div class="col-md-4">
                          <input id="apart_urina_exam" name="apartUrinario" type="text" placeholder="Ingresar estado" class="form-control input-md" />
                          <label class="control-label">Aparato urinario</label>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                          <input id="varices_exam" name="examVarices" type="text" placeholder="Ingresar estado" class="form-control input-md" />
                          <label class="control-label">Varices</label>
                        </div>
                        <div class="col-md-4">
                          <input id="edemas_exam" name="examEdemas" type="text" placeholder="Ingresar estado" class="form-control input-md" />
                          <label class="control-label">Edemas</label>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                          <input id="sen_exam" name="examSenos" type="text" placeholder="Ingresar estado" class="form-control input-md" />
                          <label class="control-label">Senos</label>
                        </div>
                        <div class="col-md-4">
                          <input id="abdomen_exam" name="examAbdomen" type="text" placeholder="Ingresar estado" class="form-control input-md" />
                          <label class="control-label">Abdomen</label>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <input type="button" name="prev" class="btn prev acao " value="Anterior" />
                    <input type="button" name="next6" class="btn next acao " value="Siguiente"/>
                </fieldset>
                <!--datos de Pelvimetria-->
                <fieldset>
                    <h2 class="text-center" class="formlegend">Pelvimetria</h2>
                    <h6 class="text-center" class="formlegend"><strong>(Ingrese los datos)</strong></h6>
                    <br />
                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                          <input id="dosis_trat_exf" name="estrechoInf" type="text" placeholder="Estrecho inferior" class="form-control input-md" />
                          <label class="control-label">Estrecho inferior</label>
                        </div>
                        <div class="col-md-4">
                          <input id="sagitalpos_pelv" name="sagitalPos" type="text" placeholder="Ingresar estado" class="form-control input-md" />
                          <label class="control-label">Sagital pos.</label>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                          <input id="sagitalante_pelv" name="sagitalAnte" type="text" placeholder="Ingresar estado" class="form-control input-md" />
                          <label class="control-label">Sagital ant.</label>  
                        </div>
                        <div class="col-md-4">
                          <input id="area_pelv" name="areaPelvis" type="text" placeholder="Ingresar estado" class="form-control input-md" />
                          <label class="control-label">Area</label>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                            <input id="promontorio_pelv" name="promontorio" type="text" placeholder="Ingresar estado" class="form-control input-md" />
                            <label class="control-label">Promontorio</label>  
                        </div>
                        <div class="col-md-4">
                            <input id="espinas_cla_pelv" name="espinaClatica" type="text" placeholder="Ingresar estado" class="form-control input-md" />
                            <label class="control-label">Espinas claticas</label>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                          <input id="radio_pelvime" name="radioPelvime" type="text" placeholder="Ingresar estado" class="form-control input-md" />
                          <label class="control-label">Radiologia</label>  
                        </div>
                        <div class="col-md-4"></div>
                        <div class="col-md-2"></div>
                    </div>
                    <input type="button" name="prev" class="btn prev acao " value="Anterior" />
                    <input type="button" name="next7" class="btn next acao " value="Siguiente"/>
                </fieldset>
                <!--datos de Dilatacion-->
                <fieldset>
                    <h2 class="text-center" class="formlegend">Per&iacute;odo de dilataci&oacute;n:</h2>
                    <h6 class="text-center" class="formlegend"><strong>(Ingrese los datos que considere pertinentes)</strong></h6>
                    <br />
                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                           <input id="fechayhora_dolo" name="primerDolor" type="text" placeholder="aaaa/mm/dd 00:00:00" class="form-control input-md" /> 
                           <label class="control-label">Fecha y hora de los primeros dolores</label>  
                        </div>
                        <div class="col-md-4">
                            <input id="fechayhora_dilata_comple" name="dilataciones" type="text" placeholder="aaaa/mm/dd 00:00:00" class="form-control input-md" />
                            <label class="control-label">Fecha y hora de la dilataci&oacute;n completa</label>  
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                           <input id="textinput" name="rupMembrana" type="text" placeholder=" Ingresar estado" class="form-control input-md">
                           <label class="control-label">Ruptura de membranas</label>
                        </div>
                        <div class="col-md-4">
                            <input id="fechyhr_rup_mem" name="fechayhoraRup" type="text" placeholder="aaaa/mm/dd 00:00:00" class="form-control input-md" />
                            <label class="control-label">Fecha y hora ruptura</label>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="form-group">
                          <label class="control-label">Variedad de posici&oacute;n </label>
                      <div class="checkbox">
                        <label for="var_posic_trj-0">
                          <input type="checkbox" name="variedadPasicion" id="var_posic_trj-0" value="SI">
                          Cefálica
                        </label>
                    </div>
                      <div class="checkbox">
                        <label for="var_posic_trj-1">
                          <input type="checkbox" name="variedadPasicion" id="var_posic_trj-1" value="SI">
                          Podálica
                        </label>
                      </div>
                      <div class="checkbox">
                        <label for="var_posic_trj-2">
                          <input type="checkbox" name="variedadPasicion" id="var_posic_trj-2" value="SI">
                          Transversal
                        </label>
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                        <select id="cbx_rupturaMemb" name="cbx_rupturaMemb" class="form-control">
                          <option disabled value="">Seleccionar</option>
                          <?php
            				    $conMemb="SELECT cod_rupturamemb, tipo_ruptura FROM rupturademembrana ORDER BY tipo_ruptura ASC";
            					$query_cmembrana= $mysqli->query($conMemb);
            					                  
            					while ($select_tipomemb=mysqli_fetch_assoc($query_cmembrana)) {
            			        echo "<option value='".$select_tipomemb['cod_rupturamemb']."'>".$select_tipomemb['tipo_ruptura']."</option>";
            			     }
            			 ?>
                        </select>
                        <label class="control-label">Tipo de ruptura de membranas</label>
                        </div>
                        <div class="col-md-4">
                            <select id="cbx_especificar" name="cbx_especificar" class="form-control">
                              <option disabled value="">Especificar</option>
                              
                            </select>
                            <label class="control-label">Especificar</label>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                           <input id="car_anm_liq" name="liquidoAmniotico" type="text" placeholder="Ingresar estado" class="form-control input-md" /> 
                           <label class="control-label">Caracteres del liquido amniótico </label>
                        </div>
                        <div class="col-md-4">
                            <input id="textinput" name="duracionPeriodo" type="text" placeholder="Ingresar d&iacute;as" class="form-control input-md" />
                          <label class="control-label">Duraci&oacute;n del periodo</label>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                           <input id="hordur_per" name="horasPeriodo" type="text" placeholder="" class="form-control input-md" />
                            <label class="control-label">Horas</label>  
                        </div>
                        <div class="col-md-4">
                          <input id="mint_per" name="minutosPeriodo" type="text" placeholder="" class="form-control input-md" />
                          <label class="control-label">Minutos</label> 
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <input type="button" name="prev" class="btn prev acao " value="Anterior" />
                    <input type="button" name="next7" class="btn next acao " value="Siguiente"/>
                </fieldset>
                <!--datos de Tactos-->
                <fieldset>
                    <h2>Tactos</h2>
                    <div class="form-group">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                          <input id="textinput" name="diaHoraTacto" type="text" placeholder="dd/mm/yyyy  00:00 aa" class="form-control input-md" />
                          <label class="control-label">D&iacute;a y hora</label>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                    <h2>Cuello:</h2>
                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                            <input id="consis_tact" name="consistencia" type="text" placeholder="" class="form-control input-md" />
                            <label class="control-label">Consistencia</label> 
                        </div>
                        <div class="col-md-4">
                            <input id="long_tact" name="longitud" type="text" placeholder="" class="form-control input-md" />
                            <label class="control-label">Longitud</label>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                          <input id="dila_tact" name="dilatacionTacto" type="text" placeholder="Ingresar estado" class="form-control input-md" />
                          <label class="control-label">Dilataci&oacute;n </label>  
                        </div>
                        <div class="col-md-4">
                           <input id="seg_inf_tatc" name="segmentoInf" type="text" placeholder="" class="form-control input-md" />
                           <label class="control-label">Segmento Inferior</label>  
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                        <select id="prese_tact" name="presentacionTact" class="form-control">
                          <option disabled value="">Seleccionar</option>
                          <?php
            				    $conPresent="SELECT cod_presentacion, nombre FROM presentacion ORDER BY nombre ASC";
            					$query_cpresent= $mysqli->query($conPresent);
            					                  
            					while ($select_pres=mysqli_fetch_assoc($query_cpresent)) {
            			        echo "<option value='".$select_pres['cod_presentacion']."'>".$select_pres['nombre']."</option>";
            			     }
            			 ?>
                        </select>
                        <label class="control-label">Presentaci&oacute;n</label>
                        </div>
                        <div class="col-md-4">
                        <select id="posi_tact" name="posTacto" class="form-control">
                          <option disabled value="">Seleccionar</option>
                          <?php
            				    $conPosic="SELECT cod_posicion, descripcion FROM posicion ORDER BY descripcion ASC";
            					$query_cpos= $mysqli->query($conPosic);
            					                  
            					while ($select_posic=mysqli_fetch_assoc($query_cpos)) {
            			        echo "<option value='".$select_posic['cod_posicion']."'>".$select_posic['descripcion']."</option>";
            			     }
            			 ?>
                        </select> 
                          <label class="control-label">Posici&oacute;n </label>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                            <input id="foco_tact" name="focoTacto" type="text" placeholder="000 mmHg" class="form-control input-md">
                            <label class="control-label">Foco</label>  
                        </div>
                        <div class="col-md-4">
                          <input id="func_contra_tact" name="funContractil" type="text" placeholder="" class="form-control input-md">
                          <label class="control-label">Funci&oacute;n  Contr&aacute;ctil </label>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                            <input id="memn_tact" name="inpMembranas" type="text" placeholder="Ingresar estado" class="form-control input-md" />
                            <label class="control-label">Membranas</label> 
                        </div>
                        <div class="col-md-4">
                            <input id="temp_tact" name="temperatura" type="text" placeholder="Ingresar grados" class="form-control input-md" />
                            <label class="control-label">Temperatura</label>  
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <input id="obser_tact" name="observador" type="text" placeholder="Ingresar datos" class="form-control input-md" />
                            <label class="control-label">Observador</label>  
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                    <input type="button" name="prev" class="btn prev acao " value="Anterior" />
                    <input type="button" name="next7" class="btn next acao " value="Siguiente"/>
                </fieldset>
                <!--datos de Partos-->
                <fieldset>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4"><label class="control-label">Analgesia</label></div>
                            <div class="col-md-4"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-4">
                                <input id="nombre_analgesia" name="nombAnalgesia" type="text" placeholder="Ingresar nombre" class="form-control input-md">
                            </div>
                            <div class="col-md-4">
                                <input id="dosis_analgesia" name="dosisAnalgesia" type="text" placeholder="Ingresar dosis" class="form-control input-md">
                            </div>
                            <div class="col-md-2"></div>
                            
                    
                    </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4"><label class="control-label">Sutura, Mecha y Sonda</label></div>
                            <div class="col-md-4"></div>
                         </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                            <input id="sutura_enf" name="suturaEnf" type="text" placeholder="" class="form-control input-md">
                            <label class="control-label">Sutura</label>  
                        </div>
                        <div class="col-md-4">
                             <input id="mecha_enf" name="mechaEnf" type="text" placeholder="" class="form-control input-md">
                             <label class="control-label">Mecha</label>   
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <input id="sonda_enf" name="sondaEnf" type="text" placeholder="" class="form-control input-md">
                             <label class="control-label">Sonda</label>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4"><label class="control-label">Tensi&oacute;n (Antes):</label></div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-4">
                                <input id="tension_sis_enf" name="tensionSist" type="text" placeholder="Sist&oacute;lica" class="form-control input-md" />
                            </div>
                            <div class="col-md-4">
                                <input id="tension_dis_enf" name="tensionDiast" type="text" placeholder="Diast&oacute;lica" class="form-control input-md" />
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4"><label class="control-label">Tensi&oacute;n (Despues):</label></div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-4">
                                <input id="tension_sis_enf2" name="tenSistole" type="text" placeholder="Sist&oacute;lica" class="form-control input-md" />
                            </div>
                            <div class="col-md-4">
                                <input id="tension_dis_enf2" name="tenDiastole" type="text" placeholder="Diast&oacute;lica" class="form-control input-md" />
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4"><label class="control-label">Tratamiento:</label></div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-4">
                                <input id="med_tacta_enf" name="medTratamiento" type="text" placeholder="Ingresar medicamento" class="form-control input-md">
                            </div>
                            <div class="col-md-4">
                                <input id="dosi_tacta_enf" name="dosisTratamiento" type="text" placeholder="Ingresar dosis" class="form-control input-md" />
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                          <input id="dur_tacta_enf" name="duracionTratamiento" type="text" placeholder="Ingresar duraci&oacute;n" class="form-control input-md" />          
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                    <input type="button" name="prev" class="btn prev acao " value="Anterior" />
                    <input type="button" name="next7" class="btn next acao " value="Siguiente"/>
                </fieldset>
                <!--datos de Alumbramiento-->
                <fieldset>
                    <div class="form-group">
                         <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4"><label class="control-label">Anestecia:</label></div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                            <input id="nombre_anestecia1" name="nombreAnestecia" type="text" placeholder="Ingresar nombre" class="form-control input-md">
                        </div>
                        <div class="col-md-4">
                          <input id="dosis_anes1" name="dosisAnestecia" type="text" placeholder="Ingresar dosis" class="form-control input-md">  
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                            <input id="" name="inpPeriodoAlumb" type="text" placeholder="" class="form-control input-md">
                            <label class="control-label" for="">Periodo de alumbramiento</label>
                        </div>
                        <div class="col-md-4">
                            <input id="min_expul" name="minExpul" type="text" placeholder="" class="form-control input-md" />
                             <label class="control-label" for="min_expul">Minutos de expulsión </label> 
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                        <select id="exp_pre_alum" name="exPreAlum" class="form-control">
                          <option disabled value="">Seleccionar</option>
                          <?php
            				    $conExp="SELECT cod_exp, descripcion FROM expulsion ORDER BY descripcion ASC";
            					   $cons_Exp= $mysqli->query($conExp);
            					                  
            					   while ($exp=mysqli_fetch_assoc($cons_Exp)) {
            					    echo "<option value='".$exp['cod_exp']."'>".$exp['descripcion']."</option>";
            				    }
            			     ?>
                        </select>
                        <label class="control-label" for="exp_pre_alum">Expulsión</label>
                        </div>
                        <div class="col-md-4">
                        <select id="selectbasic" name="selectexpulsion" class="form-control">
                          <option value="empty">Seleccionar</option>
                          <?php
            				    $conTipoExp="SELECT cod_tipo_expul, descripcion FROM tipo_expulsion ORDER BY descripcion ASC";
            					   $cons_tipoEx= $mysqli->query($conTipoExp);
            					                  
            					   while ($expuls=mysqli_fetch_assoc($cons_tipoEx)) {
            					    echo "<option value='".$expuls['cod_tipo_expul']."'>".$expuls['descripcion']."</option>";
            				    }
            			     ?>
                        </select>
                        <label class="control-label" for="selectbasic">Tipo</label>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                            <input id="ind_per_alum" name="indPeriodoAlum" type="text" placeholder="" class="form-control input-md" />
                            <label class="control-label" for="ind_per_alum">Indicación</label>  
                        </div>
                        <div class="col-md-4">
                            <input id="cantidad_sangre" name="canSangrePerdida" type="text" placeholder="cc" class="form-control input-md" />
                            <label class="control-label" for="cantidad_sangre">Cantidad de sangre perdida</label>  
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <input type="button" name="prev" class="btn prev acao " value="Anterior" />
                    <input type="button" name="next7" class="btn next acao " value="Siguiente"/>
                </fieldset>
                <!--datos de Expulsion-->
                <fieldset>
                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                            <input id="fecha_nac_per_exp" name="fechaNacido" type="text" placeholder="DD/MM/YYYY" class="form-control input-md" />
                            <label class="control-label">Fecha</label>  
                        </div>
                        <div class="col-md-4">
                            <input id="nac_per_exp" name="lugarNacido" type="text" placeholder="" class="form-control input-md" />
                            <label class="control-label">Lugar de Nacimiento</label>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                            <input id="hor_nac_per_exp" name="horaNacido" type="text" placeholder="00:00 aa" class="form-control input-md" />
                            <label class="control-label">Hora</label>
                        </div>
                        <div class="col-md-4">
                            
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                          <label class="control-label">Variedad de posición </label>
                       <div class="checkbox">
                        <label class="radio-inline" for="var_posi_per_exp-1">
                          <input type="radio" name="varPeriodoExp" id="var_posi_per_exp-1" value="cefalica">
                          Cefálica
                        </label> 
                        </div>
                          <div class="checkbox">
                        <label class="radio-inline" for="var_posi_per_exp-2">
                          <input type="radio" name="varPeriodoExp" id="var_posi_per_exp-2" value="podalica">
                          Podálica
                        </label> 
                        </div>
                          <div class="checkbox">
                        <label class="radio-inline" for="var_posi_per_exp-3">
                          <input type="radio" name="varPeriodoExp" id="var_posi_per_exp-3" value="transversal">
                          Transversal
                        </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                           <input id="dur_per_per_exp" name="duracionDelPeriodo" type="text" placeholder="Ingresar horas" class="form-control input-md" />
                           <label class="control-label">Duraci&oacute;n del periodo </label>
                        </div>
                        <div class="col-md-4">
                            <input id="dur_trabajo_per_exp" name="durTrabajoParto" type="text" placeholder="Ingresar horas" class="form-control input-md" />
                            <label class="control-label">Duraci&oacute;n total del trabajo de parto</label>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                        <select id="lesion_per_exp" name="lesionGenital" class="form-control">
                          <option disabled value="">Seleccionar</option>
                          <?php
            				    $conLesgen="SELECT cod_lesion_genital, descripcion FROM lesion_genital ORDER BY descripcion ASC";
            					   $cons_Les= $mysqli->query($conLesgen);
            					                  
            					   while ($query_lesion=mysqli_fetch_assoc($cons_Les)) {
            					    echo "<option value='".$query_lesion['cod_lesion_genital']."'>".$query_lesion['descripcion']."</option>";
            				    }
            			     ?>
                        </select>
                        <label class="control-label">Lesiones genitales</label>
                        </div>
                        <div class="col-md-4">
                        <select id="perine_per_exp" name="inptperine" class="form-control">
                          <option disabled value="">Seleccionar</option>
                          <?php
            				    $consultaPerine="SELECT cod_perine, descripcion FROM perine ORDER BY descripcion ASC";
            					   $cons_perine= $mysqli->query($consultaPerine);
            					                  
            					   while ($perin=mysqli_fetch_assoc($cons_perine)) {
            					    echo "<option value='".$perin['cod_perine']."'>".$perin['descripcion']."</option>";
            				    }
            			     ?>
                        </select>
                        <label class="control-label">Periné</label>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md4"></div>
                            <div class="col-md4"><label class="control-label">Episiotom&iacute;a:</label></div>
                            <div class="col-md4"></div>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                            <input id="tipepi_per_exp" name="inptEpisiomet" type="text" placeholder="Tipo" class="form-control input-md" >
                        </div>
                        <div class="col-md-4">
                           <input id="tectepi_per_exp" name="inptTecnica" type="text" placeholder="T&eacute;cnica" class="form-control input-md"> 
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="form-group">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <input id="materi_per_exp" name="materialSutura" type="text" placeholder="Material de sutura" class="form-control input-md">
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                    <input type="button" name="prev" class="btn prev acao " value="Anterior" />
                    <input type="button" name="next7" class="btn next acao " value="Siguiente"/>
                </fieldset>
                <!--datos de intervencion-->
                <fieldset>
                    <div class="form-group">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                             <input id="intervencion" name="inptIntervencion" type="text" placeholder="" class="form-control input-md">
                             <label class="control-label" for="intervencion">Intervencion</label>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4"><label class="control-label" for="medicacion">Medicaci&oacute;n</label></div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                            <input id="nombre_medica" name="nombre_medica" type="text" placeholder="Nombre" class="form-control input-md">
                        </div>
                        <div class="col-md-4">
                            <input id="dosis_medica" name="dosis_medica" type="text" placeholder="Dosis" class="form-control input-md">
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <input id="indicaciones" name="inptIndicaciones" type="text" placeholder="Ingresar indicaciones" class="form-control input-md">
                            <label class="control-label" for="indicaciones">Indicaciones</label>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                    <!--<div class="form-group">-->
                    <!--    <div class="form-group">-->
                    <!--        <div class="row">-->
                    <!--            <div class="col-md-4"></div>-->
                    <!--            <div class="col-md-4"><label class="control-label" for="">Anestecia</label></div>-->
                    <!--            <div class="col-md-4"></div>-->
                    <!--        </div>-->
                    <!--        <div class="col-md-2"></div>-->
                    <!--        <div class="col-md-4">-->
                    <!--            <input id="nombre_anestecia" name="nombre_anestecia" type="text" placeholder="Ingresar nombre" class="form-control input-md">-->
                    <!--        </div>-->
                    <!--        <div class="col-md-4">-->
                    <!--            <input id="dosis_anes" name="dosisAnes" type="text" placeholder="Ingresar dosis" class="form-control input-md">-->
                    <!--        </div>-->
                    <!--        <div class="col-md-2"></div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                            <input id="diag_posyope" name="diagPost" type="text" placeholder="Ingresar diagn&oacute;stico " class="form-control input-md">
                            <label class="control-label" for="diag_posyope">Diagn&oacute;stico post-operatorio </label>
                        </div>
                        <div class="col-md-4">
                            <input id="asistente" name="asistente" type="text" placeholder="Ingresar nombre y apellido" class="form-control input-md">
                            <label class="control-label" for="asistente">Asistente</label>  
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <input id="ayudante" name="ayudante" type="text" placeholder="Ingresar nombre y apellido" class="form-control input-md">
                            <label class="control-label" for="ayudante">Ayudante</label>  
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                    <input type="button" name="prev" class="btn prev acao " value="Anterior" />
                    <input type="button" name="next7" class="btn next acao " value="Siguiente"/>
                </fieldset>
                <!--datos de recien nacido-->
                <fieldset>
                    <div class="form-group">
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4"><label class="control-label" for="">Recién nacido:</label></div>
                                <div class="col-md-4"></div>
                            </div>
                        </div>
                    <div class="form-group">
                            <div class="col-md-2"></div>
                            <div class="col-md-4">
                                <input id="nonm" name="nombRecNac" type="text" placeholder="Ingresar Nombre" class="form-control input-md">
                                <label class="col-md-4 control-label" for="nonm">Nombres</label>  
                            </div>
                            <div class="col-md-4">
                                <input id="apelli_bb" name="apellidobb" type="text" placeholder="Ingresar apellidos" class="form-control input-md" />
                                <label class="col-md-4 control-label" for="apelli_bb">Apellidos</label>  
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    <div class="form-group">
                            <div class="col-md-2"></div>
                            <div class="col-md-4">
                            <select id="gen_baby" name="generoBaby" class="form-control">
                              <option disabled value="">Seleccionar</option>
                              <?php
                				    $congen="SELECT cod_genero, tipo_genero FROM genero ORDER BY tipo_genero ASC";
                					$query_cgen= $mysqli->query($congen);
                					                  
                					while ($select_gen=mysqli_fetch_assoc($query_cgen)) {
                			        echo "<option value='".$select_gen['cod_genero']."'>".$select_gen['tipo_genero']."</option>";
                			     }
            			     ?>
                            </select>
                            <label class="col-md-4 control-label" for="gen_baby">Genero</label>
                            </div>
                            <div class="col-md-4">
                                <input id="pesoRecienBaby" name="pesoBaby" type="text" placeholder="___ Grs" class="form-control input-md" />
                                <label class="col-md-4 control-label" for="peso_rec_baby">Peso</label>  
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    <div class="form-group">
                            <div class="col-md-2"></div>
                            <div class="col-md-4">
                                 <input id="logitudBaby" name="log_baby" type="text" placeholder="___ cms" class="form-control input-md" />
                                 <label class="col-md-4 control-label" for="logBaby">Longitud</label>
                            </div>
                            <div class="col-md-4">
                                <input id="estadoBaby" name="estado_baby" type="text" placeholder="Ingresar estado" class="form-control input-md">
                                <label class="col-md-4 control-label" for="estado_baby">Estado</label>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    <input type="button" name="prev" class="btn prev acao " value="Anterior" />
                    <input type="button" name="next7" class="btn next acao " value="Siguiente"/>
                </fieldset>
                <!--datos de Anexos-->
                <fieldset>
                    <div class="form-group">
                        <div class="col-md-4"></div>
                        <div class="col-md-4"><label class="control-label" for="sala_pac">Anexos</label></div>
                        <div class="col-md-4"></div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4"><label class="control-label" for="placenta">Placenta</label></div>
                            <div class="col-md-4"></div>
                        </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-4">
                                <input id="placenta_forma2" name="placentaForm" type="text" placeholder="Forma" class="form-control input-md" />
                            </div>
                            <div class="col-md-4">
                                <input id="placenta_peso2" name="placentaPeso" type="text" placeholder="Peso" class="form-control input-md" />
                            </div>
                            <div class="col-md-2"></div>
                    </div>
                    <div class="form-group">
                            <div class="col-md-2"></div>
                            <div class="col-md-4">
                                <input id="placenta_insercion2" name="placentaInsercion" type="text" placeholder="Inserci&oacute;n" class="form-control input-md" />
                            </div>
                            <div class="col-md-4">
                                <input id="placenta_part2" name="plaParticular" type="text" placeholder="Particularidades" class="form-control input-md" />
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    <div class="form-group">
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4"><label class="control-label" for="">Membranas</label></div>
                                <div class="col-md-4"></div>
                            </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-4">
                                <input id="med_membranas_enf" name="medidaMembrana" type="text" placeholder="Medidas" class="form-control input-md" />
                            </div>
                            <div class="col-md-4">
                                <input id="part_membranas_enf" name="particularidadMemb" type="text" placeholder="Particularidades" class="form-control input-md" />
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    <div class="form-group">
                            <div class="row">
                              <div class="col-md-4"></div>
                              <div class="col-md-4"><label class="control-label" for="">Cord&oacute;n</label></div>
                              <div class="col-md-4"></div>
                            </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-4">
                                <input id="cond_long_enf" name="cordonLong" type="text" placeholder="Longitud" class="form-control input-md" />
                            </div>
                            <div class="col-md-4">
                                <input id="cond_volumen_enf" name="cordonVolumen" type="text" placeholder="Volumen" class="form-control input-md" />
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    <div class="form-group">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <input id="cond_part_enf" name="cordonPart" type="text" placeholder="Particulatidades" class="form-control input-md" />
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                            <input id="asistente_enf" name="inpAsistente" type="text" placeholder="Ingresar nombre y apellido" class="form-control input-md">
                            <label class="control-label" for="asistente_enf">Asistente</label>  
                        </div>
                        <div class="col-md-4">
                            <input id="ayudante_enf" name="ayudante" type="text" placeholder="Ingresar nombre y apellido" class="form-control input-md">
                            <label class="control-label" for="ayudante_enf">Ayudante</label>  
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <input id="anestesista_enf" name="anestesista" type="text" placeholder="Ingresar nombre y apellido" class="form-control input-md">
                            <label class="control-label" for="anestesista_enf">Anestesista</label>  
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                    <input type="button" name="prev" class="btn prev acao " value="Anterior" />
                    <button type='submit' class='btn btn-primary'><?php echo 'Registrar'; ?></button>
                    <!--<button type='submit' id='btn_login' onclick="" name="next" class="btn next acao" value="Registrar" />registrar</button>-->
                </fieldset>
            </form>
        </div>
    </section>
</main>

<!--*******************************************************************************************************************************************************************************!-->
<?php include(FOOTER_CORE . 'public/footer.html'); ?>