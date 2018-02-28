<?php require_once(ACCESO_DENEGADO . 'controllers/accesoDenegado.php');?>
<?php include(HEADER .'public/headerBootstrap.html'); ?>
<?php include(HTML_CORE . 'overall/topnav.php'); ?>
<?php require_once (MODELS . 'conexion.php'); ?>
<?php
//require MODELS . 'controlDB.php';
$obj = new controlDB();
?>
<img src="view/img/banner2.png" class="img-responsive" alt="" style="display:flex; margin:0 auto;">

<script src="view/js/functions.js" type="text/javascript"></script>
<link rel="stylesheet" href="view/style_formularioNewMedicinaGeneral.css" type="text/css" >
<link rel="stylesheet" href="view/rightnav.css" type="text/css" />
<!--**************************************************************************************************************************************!-->

    <div class="social animated fadeInRight" id="element">
		<ul>
			<li><a data-toggle="modal" data-target="#obstetrica" data-whatever="Antecedentes Hereditarios." href="javascript:void(0);" class="icon-twitter add_more" id="add_more_to"><i class="fa fa-female fa-lg" aria-hidden="true"></i></a></li>
			<li><a data-toggle="modal" data-target="#antecedente" data-whatever="Antecedentes Ginecologicos y Obstetricos." id="makeagifttosomeone" href="javascript:void(0);" class="icon-googleplus"><i class="fa fa-female fa-lg" aria-hidden="true"></i></a></li>
			<li><a data-toggle="modal" data-target="#seccionObstetrica" data-whatever="Antecedentes Hereditarios." href="javascript:void(0);" class="icon-facebook add_more" id="add_more_to"><i class="fa fa-female fa-lg" aria-hidden="true"></i></a></li>
			<li><a data-toggle="modal" data-target="#personales" data-whatever="Antecedentes Personales" id="makeagifttosomeone" href="javascript:void(0);" class="icon-pinterest"><i  class="fa fa-female fa-lg" aria-hidden="true"></i></a></li>
            
		</ul>
	</div>
<main>
    <section>
        <!--<h4 class="text-center" class="formlegend"><img src="view/img/report.png"></img>Registro de Medicina General</h4>-->
        <div class="container">
            <nav>
                <form id="formulario"  enctype="multipart/form-data" >
                    <ul id="progress">
                    <li class="ativo" title="Datos de admisión"></li></br></br>
                    <li title="Historia Médica"></li></br></br>
                    <li title="Antecedentes Médicos"></li>
                    </ul>
                </form>
            </nav>
            <form id="formMedGenral" class="form-horizontal" action="?view=models&action=registroMedGeneral" method="POST" enctype="multipart/form-data" name="formMedGenral">
                <!--admision-->
                <fieldset>
                    <section style="text-align: right;">
                        <div>
                            <div class="col-sm-10 col-md-10 col-lg-10"> 
                                <h2 class="text-center" class="formlegend"><img src="view/img/report.png"></img>Registro de Medicina General</h2>
                            </div>
                            <div class="col-sm-2 col-md-2 col-lg-2"> 
                                <img src="view/img/logo.png" class="logohospital"></img>
                            </div>
                        </div>
                    </section>
                        <div class="row">
                            <legend id="leyenda"><h4>Datos de admision</h4></legend>
                        </div>
                        <div class=row>
                                <div class="" style="display: block; padding: top;">
                                <div class="form-group">
                                    <label class="control-label col-sm-4 col-md-6" for="">La atención es para:</label>
                                    <?php
                                        $obj = new controlDB();
                                        $datos=$obj->consultar("SELECT cod_genero FROM paciente WHERE cedula_paciente='".$_SESSION['cedulaPaciente']."'")or die("");
                                        foreach ($datos as $genero) {
                                            $c_genero=$genero['cod_genero'];
                                        }
                                        if($c_genero=='1'){
                                            $html='<div class="col-lg-1">
                                                        <div class="radio">
                                                          <label><input disabled type="radio" value="Dama" name="radio" id="show" checked="checked">Dama</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-1">
                                                        <div class="radio">
                                                          <label><input disabled type="radio" value="Caballero" name="radio" id="hide">Caballero</label>
                                                        </div>
                                                    </div>';
                                        }else{
                                            $html='<div class="col-lg-1">
                                                        <div class="radio">
                                                          <label><input disabled type="radio" value="Dama" name="radio" id="show" onclick="">Dama</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-1">
                                                        <div class="radio">
                                                          <label><input disabled type="radio" value="Caballero" name="radio" checked="checked" id="hide">Caballero</label>
                                                        </div>
                                                    </div>';
                                        }
                                        echo $html;
                                    ?>
                                    
                                </div>
                                    <div class="form-group">
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                    </div>
                                    <label class="control-label" for="cedulaPac"></label>
                                    <div class="col-sm-4 col-md-4 col-lg-4"> 
                                    <?php //echo $_SESSION['cedulaPaciente']; ?>
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
                    <input type="button" name="next2" class="btn next acao " value="Siguiente" />
                </fieldset>
                <!-- Historia Médica -->
                <fieldset>
                            <div class="row">
                                <h2 class="text-center" class="formlegend">Interrogatorio</h2>
                                    <h4 class="text-center" class="formlegend">Historia I:</h4>
                                    <h6 class="text-center" class="formlegend"><strong>Estado de Salud y/o Causa de Muerte, u Ambiente y Problemas Familiares</strong></h6>
                                    <div class="form-group">
                                            <div class="col-sm-3 col-md-4 col-lg-6">
                                                <textarea class="form-control" rows="2" id="textAnalisis" name="estado" placeholder="Analisis Estado de Salud y/o Causa de Muerte (Padre, Madre, Hermanos, Hijos, Conyuge)"></textarea>
                                                <h6>Analisis Estado de Salud y/o Causa de Muerte</h6>
                                            </div>
                                            <div class="col-sm-3 col-md-4 col-lg-6">
                                                <textarea class="form-control" rows="2" id="textAmbiente" name="ambiente" placeholder="Descripción Ambiente y Problemas Familiares"></textarea>
                                                <h6>Descripción Ambiente y Problemas Familiares</h6>
                                            </div>
                                        </div>
                                    <h6 class="text-center" class="formlegend"><strong>Antecedentes Patologicos Familiares:</strong></h6>
                                    <div class="form-group">
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="alcoholismo" onclick=""><h6>alcoholismo</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="toxicomanias" onclick=""><h6>Toxicomanías</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="cancer" onclick=""><h6>Cáncer</h6></label>
                                            </div>
                                        </div>
                                         <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="enfAlergica" onclick=""><h6>Enfer. Alérgicas</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="metabolicas" onclick=""><h6>Metabólicas y endocrinas</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="discracia" onclick=""><h6>Discrasias sanguíneas</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="sifilis2" onclick=""><h6>Sífilis</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="tbc" onclick=""><h6>T.B.C.</h6></label>
                                            </div>
                                        </div>
                                         <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="hansen2" onclick=""><h6>Hansen</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="neuropsicopatia" onclick=""><h6>Neuropsicopatía</h6></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkAntFamOtros" name="famOtros" onchange="habInpMedicGneral();"><h6>Otras</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <input disabled type="text" class="form-control" id="inpAntFamily" name="anteFamOtros" placeholder="Otras">
                                        </div>
                                    </div>
                                    <h4 class="text-center" class="formlegend">Historia II:</h4>
                                    <h6 class="text-center" class="formlegend"><strong>Habitos Psico-Biologicos:</strong></h6>
                                    <div class="form-group">
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkOcup" name="ocupacion" onchange="habInpMedicGneral();"><h6>Ocupación</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <input disabled type="text" class="form-control" id="inptOcup" name="inptOcup" placeholder="Ocupación">
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbNutricion" name="nutricion" onchange="habInpMedicGneral();"><h6>Nutrición (calidad y cantidad)</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <input disabled type="text" class="form-control" id="inptNutricion" name="inptNutricion" placeholder="Nutrición (calidad y cantidad)">
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkSex" name="sexuales" onchange="habInpMedicGneral();"><h6>Sexuales</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <input disabled type="text" class="form-control" id="inptSex" name="inptSex" placeholder="Sexuales">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkSuenio" name="Suenio" onchange="habInpMedicGneral();"><h6>Sueños</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <input disabled type="text" class="form-control" id="inptSuenio" name="inptSuenio" placeholder="Sueños">
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkRecrea" name="recrea" onchange="habInpMedicGneral();"><h6>Recreaciones</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <input disabled type="text" class="form-control" id="inptRecrea" name="inptRecrea" placeholder="Recreaciones">
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkAseo" name="aseo" onchange="habInpMedicGneral();"><h6>Aseo</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <input disabled type="text" class="form-control" id="inptAseo" name="inptAseo" placeholder="Aseo">
                                        </div>
                                    </div>
                            </div>
                            <input type="button" name="prev" class="btn prev acao " value="Anterior" />
                            <input type="button" name="next3" class="btn next acao " value="Siguiente" />
                </fieldset>
                <!-- Antecedentes -->
                <fieldset>
                    <div class="row">
                                <h6 class="text-center" class="formlegend"><strong>Pruebas Biológicas e Inmunizantes</strong></h6>
                                <div class="form-group">
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="schick" onclick=""><h6>Schick</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="tuberculina" onclick=""><h6>Tuberculina</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="frel" onclick=""><h6>Frel</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="bilhar" onclick=""><h6>Bilharzia</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="coccide" onclick=""><h6>Coccidicidina</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="histoplasmina" onclick=""><h6>Histoplasmina</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="pruebaAlerg" onclick=""><h6>Pruebas alérgicas</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="viruela" onclick=""><h6>Viruela</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="difteria" onclick=""><h6>Difteria</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="tosferina" onclick=""><h6>Tosferina</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="tetanos" onclick=""><h6>Tétanos</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="tifica" onclick=""><h6>Tífica</h6></label>
                                            </div>
                                        </div>
                                    </div>
                                <div class="form-group">
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="bcg" onclick=""><h6>B.C.G</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="salk" onclick=""><h6>Salk</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="amarilla" onclick=""><h6>Amarilla</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkSerolog" name="serologia" onchange="habInpMedicGneral();"><h6>Reacciones Serológicas</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptSerologia" name="inptSerologia" placeholder="Mencione">
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkInmuOtras" name="inmuOtros" onchange="habInpMedicGneral();"><h6>Otras</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inpInmuOtros" name="inptInmuOtros" placeholder="Otras">
                                        </div>
                                    </div>
                                <h6 class="text-center" class="formlegend"><strong>Antecedentes Patológicos:</strong></h6>
                                <div class="form-group">
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="eruptivas" onclick=""><h6>Eruptivas</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="difteria2" onclick=""><h6>Difteria</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="parotiditis" onclick=""><h6>Parotiditis</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="gripe" onclick=""><h6>Gripe</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="influenza" onclick=""><h6>Influenza</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="tifo" onclick=""><h6>Tifo-Paratilo</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="tbc2" onclick=""><h6>T.B.C.</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="hansen2" onclick=""><h6>Hansen</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="chagas" onclick=""><h6>Chagas</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="bubas" onclick=""><h6>Bubas</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="chancros" onclick=""><h6>Chancros</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="sifilis" onclick=""><h6>Sífilis Tardia</h6></label>
                                            </div>
                                        </div>
                                    </div>
                                <div class="form-group">
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="blenorragia" onclick=""><h6>Blenorragia</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="linfo" onclick=""><h6>Linfogranuforma</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="necatoriasis" onclick=""><h6>Necatoriasis</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="bilhar2" onclick=""><h6>Bilharzia</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="amibiasis" onclick=""><h6>Amibiasis</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="micosis" onclick=""><h6>Micosis</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="paludismo" onclick=""><h6>Paludismo</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="conjuntivitis" onclick=""><h6>Conjuntivitis</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="sinusitis" onclick=""><h6>Sinusitis</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="amigdalitis" onclick=""><h6>Amigdalitis</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="adenopatias" onclick=""><h6>Adenopatías</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="otitis" onclick=""><h6>Otitis</h6></label>
                                            </div>
                                        </div>
                                    </div>
                                <div class="form-group">
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="asma" onclick=""><h6>Asma</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="bronco" onclick=""><h6>Bronco neumopatias</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="gastrioatias" onclick=""><h6>Gastropatías</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="cardio" onclick=""><h6>Cardiopatías</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="checkbox1" name="sindrome" onclick=""><h6>Síndrome alérgico</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input type="checkbox" value="SI" id="OtrosParac" name="parasitos" onchange="habInpMedicGneral();"><h6>Otros parásitos</h6></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptParasitos" name="inptParasitos" placeholder="Otros parásitos">
                                        </div>
                                    </div>
                            </div>
                              <input type="button" name="prev" class="btn prev acao " value="Anterior" />
                                <!--<input type="submit" name="next" class="btn next acao" value="Enviar" />-->
                                <button type="submit">Enviar</button>
                </fieldset>
            </form>
        </div>
    </section>
</main>

<!--*******************************************************************************************************************************************************************************!-->
<div class="container">
    <div class="row">
        <section>
            <div class="modal fade" id="obstetrica" role="dialog">
                <div class="modal-dialog" id="modMed">
                    <div class="modal-content">
                        <div class="modal-header">
                            <i class="fi-heart"></i>
                            <button id="pethatlimypro" type="button" class="close" data-dismiss="modal">×</button>
                            <h4 class="text-center" class="formlegend"><img src="preview/report.png"></img>Historia Obstétrica</h4>
                            <form class="form-horizontal" role="search" name="form" id='formRegGinec' method='POST' action="?view=models&action=MedGenralObstetrica">
                                        <legend id="leyenda">Antecedentes Hereditarios</legend> 
                                        <div class="form-group">
                                            <div class="col-lg-1">
                                                <div class="radio">
                                                    <label><input type="checkbox" value="SI" id="checkbox1" name="fimicos" onclick="activar();">Fimicos</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <input disabled type="text" class="form-control" id="fimico" name="inpFimico" placeholder="">
                                            </div>
                                            <div class="col-lg-1">
                                                <div class="radio">
                                                    <label><input type="checkbox" value="SI" id="checkbox" name="lueticos" onclick="activar();">Lueticos</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <input disabled type="text" class="form-control" id="inpluetico" name="inpLeu" placeholder="">
                                            </div>
                                            <div class="col-lg-1">
                                                <div class="radio">
                                                    <label><input type="checkbox" value="SI" id="checkbox" name="alcoholico" onclick="activar();">Alcoholicos</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <input disabled type="text" class="form-control" id="alcohol" name="inpAl" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-lg-1">
                                                <div class="radio">
                                                    <label><input type="checkbox" value="SI" id="checkbox" name="neuro" onclick="activar();">Neuropaticos</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-3">
                                                <input disabled type="text" class="form-control" id="neurop" name="inpNeu" placeholder="">
                                            </div>
                                            <div class="col-lg-1">
                                                <div class="radio">
                                                    <label><input type="checkbox" value="SI" id="checkbox" name="emb" onclick="activar();">Embarazos Multiples</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-3">
                                                <input disabled type="text" class="form-control" id="embarazo" name="inpEmb" placeholder="">
                                            </div>
                                            <div class="col-lg-1">
                                                <div class="radio">
                                                    <label><input type="checkbox" value="SI" id="checkbox" name="otros" onclick="activar();">Otros Procesos</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-2">
                                                <input disabled type="text" class="form-control" id="otro" name="inpOtros" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-lg-1">
                                                <div class="radio">
                                                    <label><input type="checkbox" value="SI" id="checkbox" name="quirurgico" onclick="activar();">Quirurgicos</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <input disabled type="" class="form-control" name="fecha" id="inptfecha" placeholder="<?php echo date('Y-m-d'); ?>">
                                                <h6 id="gin">(Escriba la fecha)</h6>
                                            </div>
                                            <div class="col-lg-4">
                                                    <input disabled type="text" class="form-control" name="operacion" id="inptOperacion" placeholder="">
                                                    <h6 id="gin">(Mencione lugar de la operación)</h6>
                                                </div>
                                            <div class="col-lg-4">
                                                <input disabled type="text" class="form-control" name="nat" id="naturalidad" placeholder="">
                                                <h6 id="gin">(Describa la Naturalidad)</h6>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-lg-2">
                                                <div class="radio">
                                                    <label><input type="checkbox" value="SI" id="checkbox" name="ginec" onclick="activar();">Ginecologicos</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-5">
                                                <input disabled type="text" class="form-control" id="caracter" name="inpCaract" placeholder="">
                                                <h6 id="gin">(Escriba las Caracteristicas)</h6>
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-2">
                                                <input disabled type="text" class="form-control" id="anio" name="inpAnio" placeholder="">
                                                <h6 id="gin">(Años de la Menarquia)</h6>
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-2">
                                                <input disabled type="text" class="form-control" id="tipo" name="inpTipo" placeholder="">
                                                <h6 id="gin">(Escriba el tipo)</h6>
                                            </div>                         
                                        </div>
                                        <div class="form-group">
                                            <div class="col-lg-2">
                                                <div class="radio">
                                                    <label><input type="checkbox" value="SI" id="checkbox" name="sexual" onclick="activar();">Primeras Relac. Sexuales</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                <input disabled type="text" class="form-control" name="inpRelacion" id="relacion" placeholder="">
                                                <h6 id="gin">(Escriba otras relaciones sexuales posibles)</h6>
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-2">
                                                <input disabled type="text" class="form-control" name="inpEdad" id="inputedad" placeholder="Edad">
                                                <h6 id="gin">(Escriba Edad de comenzo)</h6>
                                            </div>
                                        </div>
                                        <center><button type='submit' class='btn btn-success' onclick='confRegObstetrico();'><?php echo 'Registrar'; ?></button></center>
                                    </form>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
          </div>
        </section>
    </div>
</div>
<div class="conatiner">
    <div class="row">
        <section>
            <div class="modal fade" id="antecedente" role="dialog">
                <div class="modal-dialog" id="modMed">
                    <div class="modal-content">
                        <div class="modal-header">
                            <i class="fi-heart"></i>
                            <button id="pethatlimypro" type="button" class="close" data-dismiss="modal">×</button>
                            <h4 class="text-center" class="formlegend"><img src="preview/report.png"></img>Historia Ginecológicas y Obstétricas</h4>
                            <form name="formGinecologico" action="" method="">
                              <h6 class="text-center" class="formlegend"><strong>Antecedentes Ginecologicos y Obstetricos:</strong></h6>
                                <div class="form-group">
                                    <div class="row">
                                      <div class="col-md-2"></div>
                                      <div class="col-md-1">
                                          <label><input type="checkbox" value="SI" id="menaquia" name="menarquia" onclick="activar3();">Menarquiá</label>
                                      </div>
                                      <div class="col-md-3">
                                          <input disabled type="text" class="form-control" id="mena" name="menar" placeholder="Menarquiá">
                                      </div>
                                      <div class="col-md-1">
                                          <label><input type="checkbox" value="SI" id="libid" name="libid" onclick="activar3();">Libido</label>
                                      </div>
                                      <div class="col-md-3">
                                          <input disabled type="text" class="form-control" id="libi" name="libi" placeholder="Libido">
                                      </div>
                                      <div class="col-md-2"></div>
                                    </div>
                                </div>     
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-1">
                                            <label><input type="checkbox" value="SI" id="regla" name="regla" onclick="activar3();">Reglas</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input disabled type="text" class="form-control" id="reglas" name="reglas" placeholder="Reglas">
                                        </div>
                                        <div class="col-md-1">
                                            <label><input type="checkbox" value="SI" id="part" name="part" onclick="activar3();">Partos</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input disabled type="text" class="form-control" id="partos" name="partos" placeholder="Partos">
                                        </div>
                                        <div class="col-md-2"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-1">
                                            <label><input type="checkbox" value="SI" id="abort" name="abort" onclick="activar3();">Abortos</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input disabled type="text" class="form-control" id="aborto" name="aborto" placeholder="Abortos">
                                        </div>
                                        <div class="col-md-1">
                                            <label><input type="checkbox" value="SI" id="menopausia" name="menopausia" onclick="activar3();">Menopausia</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input disabled type="text" class="form-control" id="menop" name="menop" placeholder="Menopausia">
                                        </div>
                                        <div class="col-md-2"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-1">
                                            <label><input type="checkbox" value="SI" id="otra" name="otra" onclick="activar3();">Otras</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input disabled type="text" class="form-control" id="otras" name="otras" placeholder="Otras">
                                        </div>
                                        <div class="col-md-2"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <center><button type='button' class='btn btn-success' onclick='return confirmar_cita(<?php echo $codigo_cita; ?>);'><?php echo 'Registrar'; ?></button></center>
                                </div>
                            </form>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<div class="container">
    <div class="row">
        <section>
            <div class="modal fade" id="seccionObstetrica" role="dialog">
                <div class="modal-dialog" id="modMed">
                    <div class="modal-content">
                        <div class="modal-header">
                            <i class="fi-heart"></i>
                            <button id="pethatlimypro" type="button" class="close" data-dismiss="modal">×</button>
                            <h4 class="text-center" class="formlegend"><img src="preview/report.png"></img>Historia Obstetrica</h4>
                            <form class="" role="search" name="faObst" id='' method='POST' action="">
                        <legend id="leyenda">Antecedentes Obstetricos</legend>
                        <div class="form-group">
                            <div class="col-md-2"></div>
                            <div class="col-md-1">
                                <label><input type="checkbox" value="paridad" id="checkbox" name="paridad" onclick="activar();">Paridad</label>
                            </div>
                            <div class="col-md-6">
                                <input disabled type="" class="form-control" name="gesta" id="gesta" placeholder="">
                                <h6 id="gin">(Gesta)</h6>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4"><label for="" class="control-label">Resumen:</label></div>
                                <div class="col-md-4"></div>
                            </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-4">
                                <input disabled type="" class="form-control" name="parto" id="parto" placeholder="">
                                <h6 id="gin">(Cuantos Partos)</h6>
                            </div>
                            <div class="col-md-4">
                                <input disabled type="" class="form-control" name="aborto" id="aborto" placeholder="">
                                <h6 id="gin">(Cuantos abortos)</h6>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4"></div>
                                <div class="col-md-4"></div>
                            </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-4">
                                <input disabled type="" class="form-control" name="interv" id="intervencion" placeholder="">
                                <h6 id="gin">(Cuantos intervenciones)</h6>
                            </div>
                            <div class="col-md-4">
                                <input disabled type="" class="form-control" name="ninos" id="nino" placeholder="">
                                <h6 id="gin">(Cuantos niños vivos y muertos)</h6>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>
                        <center><button type='button' class='btn btn-success' onclick='return confirmar_cita(<?php echo $codigo_cita; ?>);'><?php echo 'Registrar'; ?></button></center>
                    </form>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<div class="row">
    <div class="container">
        <section>
            <div class="modal fade" id="personales" role="dialog">
                <div class="modal-dialog" id="modMed">
                    <div class="modal-content">
                        <div class="modal-header">
                            <i class="fi-heart"></i>
                            <button id="pethatlimypro" type="button" class="close" data-dismiss="modal">×</button>
                            <form class="" role="search" name="fhObst" id='' method='POST' action="?view=models&action=antecedentesObstetricos">
                        <div class="container">
                            <div class="col-md-3">
                                <input type="hidden" class="form-control" id="" name="" placeholder="">
                            </div>
                            <div class="col-md-4">
                                <legend id="leyenda">Antecedentes Personales</legend>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-2">
                                <div class="radio">
                                    <label><input type="checkbox" id="parasitosis" name="parasitosis" value="SI">PARASITOSIS</label>
                                </div> 
                            </div>
                            <div class="col-lg-2">
                                <div class="radio">
                                    <label><input type="checkbox" id="paludismo" name="paludismo" value="SI">PALUDISMO</label>
                                </div> 
                            </div>
                            <div class="col-lg-2">
                                <div class="radio">
                                    <label><input type="checkbox" id="reuma" name="reuma" value="SI">REUMATISMO</label>
                                </div> 
                            </div>
                            <div class="col-lg-2">
                                <div class="radio">
                                    <label><input type="checkbox" id="fractura" name="fractura" value="SI">FRACTURAS</label>
                                </div> 
                            </div>
                            <div class="col-lg-2">
                                <div class="radio">
                                    <label><input type="checkbox" id="bubas" name="bubas" value="SI">BUBAS</label>
                                </div> 
                            </div>
                            <div class="col-lg-2">
                                <div class="radio">
                                    <label><input type="checkbox" id="venerea" name="venerea" value="SI">VENEREAS</label>
                                </div> 
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-2">
                                <div class="radio">
                                    <label><input type="checkbox" id="diabete" name="diabete" value="SI">DIABETES</label>
                                </div> 
                            </div>
                            <div class="col-lg-2">
                                <div class="radio">
                                    <label><input type="checkbox" name="cardiopata" value="SI">CARDIOPATAS</label>
                                </div> 
                            </div>
                            <div class="col-lg-2">
                                <div class="radio">
                                    <label><input type="checkbox" name="tbcp" value="SI">TBCP</label>
                                </div> 
                            </div>
                            <div class="col-lg-2">
                                <div class="radio">
                                    <label><input type="checkbox" name="alergia" value="SI">ALERGIAS</label>
                                </div> 
                            </div>
                            <div class="col-lg-2">
                                <div class="radio">
                                    <label><input type="checkbox" name="tiroide" value="SI">TIROIDES</label>
                                </div> 
                            </div>
                            <div class="col-lg-2">
                                <div class="radio">
                                    <label><input type="checkbox" name="toxemia" value="SI">TOXEMIAS</label>
                                </div> 
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-2">
                                <div class="radio">
                                    <label><input type="checkbox" name="leucorrea" value="SI">LEUCORREAS</label>
                                </div> 
                            </div>
                            <div class="col-lg-2">
                                <div class="radio">
                                    <label><input type="checkbox" name="cistitis" value="SI">CISTITIS</label>
                                </div> 
                            </div>
                            <div class="col-lg-2">
                                <div class="radio">
                                    <label><input type="checkbox" name="nefropatia" value="SI">NEFROPATIAS</label>
                                </div> 
                            </div>
                            <div class="col-lg-2">
                                <div class="radio">
                                    <label><input type="checkbox" name="flebitis" value="SI">FLEBITIS</label>
                                </div> 
                            </div>
                            <div class="col-lg-2">
                                <div class="radio">
                                    <label><input type="checkbox" name="varices" value="SI">VARICES</label>
                                </div> 
                            </div>
                            <div class="col-lg-2">
                                <div class="radio">
                                    <label><input type="checkbox" name="hemorroide" value="SI">HEMORROIDES</label>
                                </div> 
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-2">
                                <div class="radio">
                                    <label><input type="checkbox" name="checkedOtros" value="SI" onclick="activacion();">OTRAS</label>
                                </div> 
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-9">
                                <input disabled type="text" class="form-control" id="inputPersonales" name="tipAntec" placeholder="">
                                <h6 id="gin">(Escriba otro tipo de antecedentes)</h6>
                            </div>
                        </div>
                        <br /><br />
                        <div class="row">
                            <div class="container">
                                <div class="col-md-3">
                                <input type="hidden" class="form-control" id="" name="" placeholder="">
                            </div>
                                <div class="col-md-4">
                                     <legend id="leyenda">Control Prenatal</legend>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-2">
                                    <div class="radio">
                                        <label><input type="checkbox" name="checkPrenatal" value="SI" onclick="activacion();">DONDE HIZO EL PRENATAL</label>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-5">
                                    <input disabled type="text" class="form-control" name="institucion" id="institucion">
                                    <h6 id="gin">(Nombre de la institución)</h6>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-4">
                                    <input disabled type="text" class="form-control" name="conHecha" id="conHecha">
                                    <h6 id="gin">(Nº Consultas Hechas)</h6>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-2">
                                    <div class="radio">
                                        <label><input type="checkbox" name="checkMaternidad" value="SI" onclick="activacion();">EN LA MATERNIDAD</label>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-4">
                                    <input disabled type="" class="form-control" name="maternidad" id="maternidad" placeholder="">
                                    <h6 id="gin">(Nombre de la Maternidad)</h6>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-3">
                                    <input disabled type="" class="form-control" name="numHistoria" id="numHistoria" placeholder="">
                                    <h6 id="gin">(Número de Historia)</h6>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-3">
                                    <input disabled type="" class="form-control" name="consultaHechas" id="consultaHechas" placeholder="">
                                    <h6 id="gin">(Nº Consultas Hechas)</h6>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="resumen">Resumen de Importancia</label>
                                <div class="col-sm-12 col-md-6 col-lg-10">
                                <input disabled type="text" class="form-control" id="resumen" name="resumen">
                                <h6 id="gin">(Escriba el resumen)</h6>
                                </div>
                            </div>
                        </div>
                        <center><button type='submit' class='btn btn-success' onclick='return confirmar_cita(<?php echo $codigo_cita; ?>);'><?php echo 'Registrar'; ?></button></center>
                    </form>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<?php include(FOOTER_CORE . 'public/footer.html'); ?>