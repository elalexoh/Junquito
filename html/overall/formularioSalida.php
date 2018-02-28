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
                    <li class="ativo" title="Puerperio"></li></br></br>
                    <li title="Salida"></li>
                    </ul>
                </form>
            </nav>
            <form id="formPediatria" class="form-horizontal" action="?view=models&action=registroDatosSalida" method="POST" enctype="multipart/form-data" name="formSalidaF">
                <!--Puerperio-->
                <fieldset>
                    <section style="text-align: right;">
                        <div>
                            <div class="col-sm-10 col-md-10 col-lg-10"> 
                                <h2 class="text-center" class="formlegend"><img src="view/img/report.png"></img>Salida</h2>
                            </div>
                            <div class="col-sm-2 col-md-2 col-lg-2"> 
                                <img src="view/img/logo.png" class="logohospital"></img>
                            </div>
                        </div>
                    </section>
                    <div class="row">
                        <legend id="leyenda"><h4>Puerperio</h4></legend>
                    </div>
                    <div class="row">
                        <h2>Sintomas</h2>
                        <legend id="leyenda"><h4>De existir alguna anormalidad marque la casilla correspondiente.</h4></legend>
                        </br>
                        <div class="form-group">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <textarea class="form-control" rows="2" name="dietaPuerperio" placeholder="Ingresar dieta"/></textarea>
                                <label class="control-label">Dieta</label>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-2"></div>
                            <div class="col-lg-1">
                                <div class="radio">
                                    <label><input type="checkbox" value="" id="checkpostParto" name="checkpostParto" onclick="habilitarInput();">post-Parto</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <input id="dias_post_parto" name="postParto" type="text" placeholder="D&iacute;as post-parto" class="form-control input-md" required="">  
                            </div>
                            <div class="col-lg-1">
                                <div class="radio">
                                    <label><input type="checkbox" value="" id="checkevacuaciones" name="checkevacuaciones" onclick="habilitarInput();">Frecuencia Evacuaciones</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <input id="evacua_puerperio" name="evacuaciones" type="text" placeholder="Frecuencia de evacuaciones" class="form-control input-md"> 
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                        </br></br>
                        <h2>Senos</h2>
                        </br>
                        <div class="form-group">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <textarea class="form-control" rows="2" name="senosPuerperio" placeholder="Ingresar estado actual"/></textarea>
                                <!--<input id="condi_senos_puerperio" name="senosPuerperio" type="text" placeholder="Ingresar estado actual" class="form-control input-md" required="">-->
                                <label class="control-label">Condici&oacute;n</label>  
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-2"></div>
                            <div class="col-lg-1">
                                <div class="radio">
                                    <label><input type="checkbox" value="" id="checksecrecion" name="checksecrecion" onclick="habilitarInput();">Secreci&oacute;n</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <input id="secrecion_senos_puer" name="secrecion" type="text" placeholder="Ingresar estado actual de los senos" class="form-control input-md" required="">

                            </div>
                            <div class="col-lg-1">
                                <div class="radio">
                                    <label><input type="checkbox" value="" id="checkpezones" name="checkpezones" onclick="habilitarInput();">Pezones</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <input id="pezones_puerperio" name="pezones" type="text" placeholder="Ingresar estado actual" class="form-control input-md" required="">
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                        </br></br>
                        <h2>Utero</h2>
                        </br>
                        <div class="form-group">
                            <div class="col-md-2"></div>
                            <div class="col-lg-1">
                                <div class="radio">
                                    <label><input type="checkbox" value="" id="checkutero" name="checkutero" onclick="habilitarInput();">Altura</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <input id="altura_utero_puer" name="utero" type="text" placeholder="Ingresar altura" class="form-control input-md" required="">
                            </div>
                            <div class="col-lg-1">
                                <div class="radio">
                                    <label><input type="checkbox" value="" id="checkcondicionSenos" name="checkcondicionSenos" onclick="habilitarInput();">Condici&oacute;n Senos</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <input id="condi_utero_puerperio" name="condicionSenos" type="text" placeholder="Ingresar estado actual del utero" class="form-control input-md" required="">
                                <label class="control-label">Condici&oacute;n</label>  
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-2"></div>
                            <div class="col-lg-1">
                                <div class="radio">
                                    <label><input type="checkbox" value="" id="checkloquios" name="checkloquios" onclick="habilitarInput();">Loquios</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <input id="loquios_puerperio" name="loquios" type="text" placeholder="Ingresar estado actual" class="form-control input-md">
                                <label class="control-label">Loquios</label>  
                            </div>
                            <div class="col-lg-1">
                                <div class="radio">
                                    <label><input type="checkbox" value="" id="checkperineo" name="checkperineo" onclick="habilitarInput();">Perineo</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <input id="perineo_puerperio" name="perineo" type="text" placeholder="Ingresar estado actual" class="form-control input-md">
                                <label class="control-label">Perineo</label>  
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <textarea rows="2" id="obser_puerperio" name="observacion" placeholder="Ingresar observaciones" class="form-control input-md" required=""/></textarea>
                                <label class="control-label">Observaciones</label>  
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        </br></br>
                    </div>
                        <input type="button" name="next1" class="btn next acao" value="Siguiente"/>
                </fieldset>
                <!--Salida-->
                <fieldset>
                    <h2>Salida</h2>
                    </br>
                    <div class="form-group">
                        <div class="col-lg-4"></div>
                        <label class="col-sm-4" for="">Causa de la Salida:</label>
                        <div class="col-lg-4"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-2">
                            <div class="radio">
                                <label><input type="radio" value="checkDefuncion" name="checkSalida" id="checkDefuncion"  onchange="habilitaRadio(this.value);">Defunción</label>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="radio">
                                <label><input type="radio" value="checkOtra" name="checkSalida" id="checkOtra"  onchange="habilitaRadio(this.value);" >Otra</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <input id="fecha_salida" name="fechaDeSalida" type="text" placeholder="<?php date("Y-m-d") ?>" class="form-control input-md">
                            <label class="control-label">Fecha</label>
                        </div>
                        <div class="col-lg-2"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <div class="col-lg-1">
                            <div class="radio">
                                <label><input type="checkbox" value="" id="checkdiagSalida" name="checkdiagSalida" onclick="habilitarInput();">Diagn&oacute;stico</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <input id="diagnostico_salida_bb" name="diagSalida" type="text" placeholder="Ingresar estado" class="form-control input-md"> 
                        </div>
                        <div class="col-lg-1">
                            <div class="radio">
                                <label><input type="checkbox" value="" id="checkcomplicacion" name="checkcomplicacion" onclick="habilitarInput();">Comp.</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <input id="compl_salida_bb" name="complicacion" type="text" placeholder="Ingresar complicaciones" class="form-control input-md"> 
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <div class="col-lg-1">
                            <div class="radio">
                                <label><input type="checkbox" value="" id="checkauptosia" name="checkauptosia" onclick="habilitarInput();">Autopsia</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <input id="auptosia" name="auptosia" type="text" placeholder="Ingresar estado" class="form-control input-md">
                            <label class="control-label">Autopsia</label>
                        </div>
                        <div class="col-lg-1">
                            <div class="radio">
                                <label><input type="checkbox" value="" id="checkReferido" name="checkReferido" onclick="habilitarInput();">Referido</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <input id="referido_bb" name="referido" type="text" placeholder="Ingresar lugar" class="form-control input-md">
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <div class="col-lg-1">
                            <div class="radio">
                                <label><input type="checkbox" value="" id="checkCausa" name="checkCausa" onclick="habilitarInput();">Causa</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <input id="causa_salida" name="causaSalida" type="text" placeholder="Ingresar causa de la salida" class="form-control input-md">
                            <label class="control-label">Causa</label>
                        </div>
                        <div class="col-lg-1">
                            <div class="radio">
                                <label><input type="checkbox" value="" id="checkestadoGeneral" name="checkestadoGeneral" onclick="habilitarInput();">Estado general</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <input id="estado_general_salida" name="estadoGeneral" type="text" placeholder="Ingresar estado general" class="form-control input-md">
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    </br></br>
                    <input type="button" name="prev" class="btn prev acao " value="Anterior" />
                    <input type='submit' id='btn_login' onclick="" name="next" class="btn next acao " value="Registrar" /></input>
                </fieldset>
            </form>
        </div>
    </section>
</main>

<!--*******************************************************************************************************************************************************************************!-->
<?php include(FOOTER_CORE . 'public/footer.html'); ?>