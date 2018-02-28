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
        <div     class="container">
            <nav>
                <form id="formulario"  enctype="multipart/form-data" >
                    <ul id="progress">
                    <li class="ativo" title="Datos de admisión"></li></br></br>
                    <li title="Antecedentes"></li></br></br>
                    <li title="Prenatal"></li></br></br>
                    <li title="Examen Clinico"></li>
                    </ul>
                </form>
            </nav>
            <form id="formPediatria" class="form-horizontal" action="?view=models&action=registroObstetricia" method="POST" enctype="multipart/form-data" name="formObstetriciaF">
                <!--admision-->
                <fieldset>
                    <section style="text-align: right;">
                        <div>
                            <div class="col-sm-10 col-md-10 col-lg-10"> 
                                <h2 class="text-center" class="formlegend"><img src="view/img/report.png"></img>Registro de Obstetricia</h2>
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
                                                <textarea disabled class="form-control" rows="2" id="enfactual" name="enfactual" placeholder="Enfermedad Actual"></textarea>
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
                <!-- Antecedentes -->
                <fieldset>
                    <div class="row">
                            <div class="col-lg-6">
                                <h4 class="text-center" class="formlegend">Antecedentes Personales:</h4>
                            </div>
                            <div class="col-lg-6">
                                <h4 class="text-center" class="formlegend">Historia Familiar:</h4>
                            </div>
                    </div>
                    
                    <div class="row">
                        <!-- Antecedentes Personales -->
                            <div class="col-lg-6">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="sarampion" />Sarampión</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="ferina" />Tos ferina</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="rubeola" />Rubéola</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="parotiditis" />Parotiditis</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="varicela" />Varicela</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="difteria" />Difteria</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="amigdalitis" />Amigdalitis</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="tifoidea" />Tifoidea</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="otitis" />Otitis</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="bronquitis" />Bronquitis</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="neumonia" />Neumonía</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="alergia" />Alergia</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="pleuseria" />Pleuseria</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="influenza" />Influenza</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="malaria" />Malaria</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="bilhar" />Bilharziosis</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="artritis" />Artritis</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="rinofaring" />Rinofaringitis</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="fiebresProlong" />Fiebres Prolongadas</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- Antecedentes Historia Familiar -->
                            <div class="col-lg-6">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <input type="checkbox" value="SI" id="checkbox1" name="cancer" />
                                                <label>Cáncer</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <input type="checkbox" value="SI" id="checkbox1" name="diabete" />
                                                <label>Diabetes</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <input type="checkbox" value="SI" id="checkbox1" name="discracia" />
                                                <label>Discracia</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <input type="checkbox" value="SI" id="checkbox1" name="enfRenal" />
                                                <label>Enf. Renal</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <input type="checkbox" value="SI" id="checkbox1" name="enfCard" />
                                                <label>Enf. Cardíaca</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <input type="checkbox" value="SI" id="checkbox1" name="antAlergia" />
                                                <label>Alergia</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <input type="checkbox" value="SI" id="checkbox1" name="antArtritis" />
                                                <label>Artritis</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <input type="checkbox" value="SI" id="checkbox1" name="sifilis" />
                                                <label>Sífilis</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <input type="checkbox" value="SI" id="checkbox1" name="tuberculosis" />
                                                <label>Tuberculosis</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <input type="checkbox" value="SI" id="checkbox1" name="enfDigest" />
                                                <label>Enf. Digestiva</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <input type="checkbox" value="SI" id="checkbox1" name="intoxicacion" />
                                                <label>Intoxicación</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <input type="checkbox" value="SI" id="checkHfam" name="histFamOtros" onclick="habilitarInput();">
                                                <label>Otros</label>
                                            </div>
                                        </div>
                                    </div>
                                    </br>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <input disabled type="text" class="form-control" id="inptHistFam" name="inptHistFam" placeholder="Otros">
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </br></br>
                    <!-- Antecedentes Quirurgicos -->
                    <div class="row">
                        <h4 class="text-center" class="formlegend">Antecedentes Quirúrgicos:</h4>
                        </br>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <textarea class="form-control" rows="2" id="natuz_q" name="natuz_q" placeholder="Naturaleza de la invervención"></textarea>
                                    <label class="control-label" for="natuz_q">Naturaleza</label>
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                            </br>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-4">
                                    <input class="form-control" id="date" type="text" value="<?php echo date("Y/m/d"); ?>" readonly name="theDate" onclick="displayCalendar(document.forms[0].theDate,'yyyy/mm/dd',this);" />
                    				<label for="date" title="Fecha">Fecha de la intervención</label>
                                </div>
                                <div class="col-md-4"> 
                                    <input id="lug_qq" name="lug_qq" type="text" placeholder="Nombre del Hospital" class="form-control input-md" required="">
                                    <label for="lug_qq">Lugar de la operación </label> 
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                            
                        </div>
                    </div>
                    </br></br>
                    <!-- Grupo Sanguineo -->
                    <div class="row">
                        <h4 class="text-center" class="formlegend">Grupo Sanguineo:</h4>
                        </br>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <label for="pacien_grup_san">Paciente</label>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-4">
                                    <input id="factor_rh_paci" name="factor_rh_paci" type="text" placeholder="Factor RH" class="form-control input-md" required="">
                                </div>
                                <div class="col-md-4">
                                    <input id="reacion_kahn_pac" name="reacion_kahn_pac" type="text" placeholder="Reacci&oacute;n de KAHN" class="form-control input-md" required="">
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <label for="factor_rh_con">C&oacute;nyugue</label>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-4">
                                    <input id="factor_rh_con" name="factor_rh_con" type="text" placeholder="Factor RH" class="form-control input-md" required="">
                                </div>
                                <div class="col-md-4">
                                    <input id="reacion_kahn_con" name="reacion_kahn_con" type="text" placeholder="Reacci&oacute;n de KAHN" class="form-control input-md" required="">
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                        </div>
                    </div>
                    </br></br>
                    <!-- Antecedentes Obstetricos -->
                    <div class="row">
                        <h4 class="text-center" class="formlegend">Antecedentes Obstetricos:</h4>
                        </br>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <label for="">¿Este es el primer embarazo?</label>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-5"> </div>
                                <div class="col-lg-1">
                                    <div class="radio">
                                        <label><input type="checkbox" value="SI" id="primerizaSi" name="primeriza" onclick="habilitarInput();">Si</label>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="radio">
                                        <label><input type="checkbox" value="NO" id="primerizaNO" name="primeriza" onclick="habilitarInput();">No</label>
                                    </div>
                                </div>
                                <div class="col-lg-5"> </div>
                            </div>
                            </br>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-4">
                                    <input id="fecha_emb_dtm_obs" name="fecha_emb_dtm_obs" type="text" placeholder="DD/MM/AAAA" class="form-control input-md" required=""> 
                                    <label for="fecha_emb_dtm_obs">Fecha del primer embarazo</label> 
                                </div>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" id="numEmb" name="numEmb" placeholder="Número de Embarazos">
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-lg-1">
                                    <div class="radio">
                                        <label><input type="checkbox" value="partos" id="partos" name="partos" onclick="habilitarInput();">Partos</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="numPartos" name="numPartos" placeholder="Número de Partos">
                                </div>
                                <div class="col-lg-1">
                                    <div class="radio">
                                        <label><input type="checkbox" value="abortos" id="abortos" name="abortos" onclick="habilitarInput();">Abortos</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="numAbortos" name="numAbortos" placeholder="Número de Abortos">
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-lg-1">
                                    <div class="radio">
                                        <label><input type="checkbox" value="ninMuertos" id="ninMuertos" name="ninMuertos" onclick="habilitarInput();">Niños muertos</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="nuMuertos" name="nuMuertos" placeholder="Niños muertos">
                                </div>
                                <div class="col-lg-1">
                                    <div class="radio">
                                        <label><input type="checkbox" value="ninVivos" id="ninVivos" name="ninVivos" onclick="habilitarInput();">Niños vivos</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="numVivos" name="numVivos" placeholder="Niños vivos">
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4"></div>
                            <div class="col-lg-1">
                                    <div class="radio">
                                        <label><input type="checkbox" value="" id="otrasInter" name="otrasInter" onclick="habilitarInput();">Otras Intervenciónes</label>
                                    </div>
                                </div>
                            <div class="col-md-3">
                                <input id="interven_part" name="interven_part" type="text" placeholder="Otras Intervenciónes" class="form-control input-md" required="">
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                    </div>
                    </br></br>
                    <input type="button" name="prev" class="btn prev acao " value="Anterior" />
                    <input type="button" name="next3" class="btn next acao " value="Siguiente" />
                </fieldset>
                <!-- Prenatal -->
                <fieldset>
                    <!-- Prenatal -->
                    <div class="row">
                        <h4 class="text-center" class="formlegend">Control prenatal: </h4>
                        </br>
                        <div class="form-group">
                            <div class="col-md-2"></div>
                            <div class="col-md-4">
                              <input id="lug_pren" name="lug_pren" type="text" placeholder="Nombre del Hospital" class="form-control input-md"> 
                              <label for="lug_pren">Lugar del prenatal</label>
                          </div>
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
                              <label for="nro_cons_pre">Nro Consultas</label>
                          </div>
                            <div class="col-md-2"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-2"></div>
                            <div class="col-md-4">
                              <input id="nro_his_mater" name="nro_his_mater" type="text" placeholder="" class="form-control input-md" required="">
                              <label for="nro_his_mater">Nro de historia en la maternidad</label>
                            </div>
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
                                <label for="nro_consul_mater">Nro de consultas en la maternidad</label>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>
                    </br></br>
                    <!-- Embarazo actual -->
                    <div class="row">
                        <h4 class="text-center" class="formlegend">Embarazo Actual:</h4>
                        </br>
                        <div class="form-group">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <input id="fec_ult_regla" name="fec_ult_regla" type="text" placeholder="aaaa/mm/dd" class="form-control input-md" required="">
                                <label for="fec_ult_regla">Última regla</label>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <h4 class="text-center" class="formlegend">Exploración útero- abdominal al ingreso</h4>
                        <div class="form-group"> 
                            <div class="col-md-2"></div>
                            <div class="col-md-4">
                                <input id="dia_emb" name="dia_emb" type="text" placeholder="aaaa/mm/dd" class="form-control input-md" required="">
                                <label for="dia_emb">Día</label> 
                            </div>
                            <div class="col-md-4">
                                <input id="alt_emb_act" name="alt_emb_act" type="text" placeholder="__ cm" class="form-control input-md" required="">
                                <label for="alt_emb_act">Altura uterina </label> 
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-2"></div>  
                            <div class="col-md-4">
                                <input id="cir_abd" name="cir_abd" type="text" placeholder="___ cm" class="form-control input-md" required="">
                                <label for="cir_abd">Circunferencia abdominal</label>
                            </div>
                            <div class="col-md-4">
                              <select id="presenta_cons_obst" name="presenta_cons_obst" class="form-control">
                              <option value="">Seleccioná</option>
                              </select>
                              <label for="presenta_cons_obst">Presentación</label>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-2"></div>
                            <div class="col-md-4">
                              <select id="encaja_bb" name="encaja_bb" class="form-control">
                                <option value="0">Seleccionar</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                              </select>
                              <label for="encaja_bb">Encajamiento</label>
                            </div>
                            <div class="col-md-4">
                              <select id="pos_bebc" name="pos_bebc" class="form-control">
                                <option value="0">Seleccionar</option>
                                <option value="1">Derecha</option>
                                <option value="2">Izquierda</option>
                              </select>
                              <label for="pos_bebc">Posición</label>
                            </div>
                            <div class="col-md-2"></div>
                      </div>
                        <div class="form-group">
                            <div class="col-md-2"></div>
                            <div class="col-md-4">
                                <input id="aus_foco" name="aus_foco" type="text" placeholder="___ mmHg" class="form-control input-md" required="">
                                <label  for="aus_foco">Ausculación foco </label>
                            </div>
                            <div class="col-md-4">
                                <input id="edd_emb" name="edd_emb" type="text" placeholder="__" class="form-control input-md" required="">
                                <label for="edd_emb">Edad</label>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>
                    <input type="button" name="prev" class="btn prev acao " value="Anterior" />
                    <input type="button" name="next4" class="btn next acao " value="Siguiente" />
                </fieldset>
                <!-- examen_clinico -->
                <fieldset>
                    <h4 class="text-center" class="formlegend">Examen Clínico:</h4>
                    </br>
                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <div class="col-lg-1">
                            <div class="radio">
                                <label><input type="checkbox" value="" id="condGene" name="condGene" onclick="habilitarInput();">Condiciones generales</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <input id="condicion_bb" name="condicion_bb" type="text" placeholder="Ingresar estado actual" class="form-control input-md" required="">
                        </div>
                        <div class="col-lg-1">
                            <div class="radio">
                                <label><input type="checkbox" value="" id="pielMucosa" name="pielMucosa" onclick="habilitarInput();">Piel y mucosa</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                          <input id="piel_mucosa" name="piel_mucosa" type="text" placeholder="Ingresar estado actual" class="form-control input-md" required="">
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <div class="col-lg-1">
                            <div class="radio">
                                <label><input type="checkbox" value="" id="cabezaCuello" name="cabezaCuello" onclick="habilitarInput();">Cabeza y cuello</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                          <input id="cabeza_cuello" name="cabeza_cuello" type="text" placeholder="Ingresar estado actual" class="form-control input-md">
                        </div>
                        <div class="col-lg-1">
                            <div class="radio">
                                <label><input type="checkbox" value="" id="ojos" name="ojos" onclick="habilitarInput();">Ojos</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                          <input id="serologia" name="serologia" type="text" placeholder="Ingresar estado actual" class="form-control input-md">
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <div class="col-lg-1">
                            <div class="radio">
                                <label><input type="checkbox" value="" id="oidosNariz" name="oidosNariz" onclick="habilitarInput();">O&iacute;do y nariz</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                          <input id="oido_nariz" name="oido_nariz" type="text" placeholder="Ingresar estado actual" class="form-control input-md">
                      </div>
                      <div class="col-lg-1">
                            <div class="radio">
                                <label><input type="checkbox" value="" id="checkOrofaringe" name="checkOrofaringe" onclick="habilitarInput();">Orofaringe</label>
                            </div>
                        </div>
                      <div class="col-md-3">
                          <input id="orofaringe" name="orofaringe" type="text" placeholder="Ingresar estado actual" class="form-control input-md">
                      </div>
                      <div class="col-md-2"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <div class="col-lg-1">
                            <div class="radio">
                                <label><input type="checkbox" value="" id="estudioTorax" name="estudioTorax" onclick="habilitarInput();">Tronco y raquis</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <input id="estudio_torax" name="estudio_torax" type="text" placeholder="Ingresar estado actual" class="form-control input-md" required="">
                        </div>
                        <div class="col-lg-1">
                            <div class="radio">
                                <label><input type="checkbox" value="" id="cardioVascular" name="cardioVascular" onclick="habilitarInput();">Cardio - Vascular</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <input id="cardio_vascular_bb" name="cardio_vascular_bb" type="text" placeholder="Ingresar estado actual" class="form-control input-md" required="">
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <div class="col-lg-1">
                            <div class="radio">
                                <label><input type="checkbox" value="" id="checkRespiratorio" name="checkRespiratorio" onclick="habilitarInput();">Respiratorio</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <input id="repiratorio_bb" name="repiratorio_bb" type="text" placeholder="Ingresar estado actual" class="form-control input-md">
                        </div>
                        <div class="col-lg-1">
                            <div class="radio">
                                <label><input type="checkbox" value="" id="checkAbdomen" name="checkAbdomen" onclick="habilitarInput();">Abdomen</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <input id="abdomen_bb" name="abdomen_bb" type="text" placeholder="Ingresar estado actual" class="form-control input-md">
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <div class="col-lg-1">
                            <div class="radio">
                                <label><input type="checkbox" value="" id="checkAnoGenital" name="checkAnoGenital" onclick="habilitarInput();">Ano - Genital</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <input id="ano_genital_bb" name="ano_genital_bb" type="text" placeholder="Ingresar estado actual" class="form-control input-md">
                        </div>
                        <div class="col-lg-1">
                            <div class="radio">
                                <label><input type="checkbox" value="" id="checkExtremidades" name="checkExtremidades" onclick="habilitarInput();">Extremidades</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <input id="extremidades_bb" name="extremidades_bb" type="text" placeholder="Ingresar estado actual" class="form-control input-md">
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <div class="col-lg-1">
                            <div class="radio">
                                <label><input type="checkbox" value="" id="checkLinfoGlandular" name="checkLinfoGlandular" onclick="habilitarInput();">Linfo - Glandular</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <input id="linfo_glandular" name="linfo_glandular" type="text" placeholder="Ingresar estado actual" class="form-control input-md">
                        </div>
                        <div class="col-lg-1">
                            <div class="radio">
                                <label><input type="checkbox" value="" id="checkSistemaNervioso" name="checkSistemaNervioso" onclick="habilitarInput();">Sistema nervioso</label>
                            </div>
                        </div>
                      <div class="col-md-3">
                            <input id="sist_nervioso_bb" name="sist_nervioso_bb" type="text" placeholder="Ingresar estado actual" class="form-control input-md">
                      </div>
                      <div class="col-md-2"></div>
                    </div>
                            <input type="button" name="prev" class="btn prev acao " value="Anterior" /> 
                            <input type='submit' id='' onclick="validar_form_pediatria();" name="next" class="btn next acao " value="Registrar" /> </input>
                </fieldset>
            </form>
        </div>
    </section>
</main>

<!--*******************************************************************************************************************************************************************************!-->
<?php include(FOOTER_CORE . 'public/footer.html'); ?>