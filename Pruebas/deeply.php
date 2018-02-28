<?php require_once(ACCESO_DENEGADO . 'controllers/accesoDenegado.php');?>
<?php include(HEADER .'public/headerBootstrap.html'); ?>
<?php //include(HTML_CORE . 'overall/topnav.php'); ?>
<?php require_once (MODELS . "conexion.php");?>
<img src="view/img/banner2.png" class="img-responsive" alt="" style="display:flex; margin:0 auto;">
<?php 
 include(MODELS . 'controlDB.php');
    //print_r($_POST);
    $obj = new controlDB();
    session_start;
    $datos=$obj->consultar("SELECT * FROM pediatria where cod_paciente='".$_SESSION['id_pac']."' and fecha_reg='".$_SESSION['fecha_reg']."'")or die("");
    foreach ($datos as $fila) { 
?>

     <script src="view/js/functions.js" type="text/javascript"></script>
    <link rel="stylesheet" href="view/style_formularioNewPediatria.css" type="text/css" >


<!--*********************************************************************************************************************************************************************************************************************************!-->


<main>
    <section style="text-align: center; margin: -20px;">
        <img src="view/img/logo.png" class="logohospital"></img>
       <!--<h5 class="text-center " style="display: inline-block;"><strong class="verdeSecundario">Dr. <?php //$user["nombre_usu"]; ?></strong></h5>-->
    </section>
    <section>
        <h4 class="text-center" class="formlegend"><img src="view/img/report.png"></img>Consulta de Pediatria: <?php echo $fila['fecha_reg']; ?></h4>
        <!--<div class="container">-->
            <div class="container">
                <form id="formPediatria" class="form-horizontal" action="?view=models&action=registroNewPediatria" method="POST" enctype="multipart/form-data" name="formPediatria">                
                    <fieldset>
                        <div class=row>
                            <h5 class="text-center">Datos de Admisión del paciente</h5>
                            <div id="mensaje"></div>
                        	<div class="" style="display: block; padding: top; margin-top: 30px">   
                                	<div class="form-group">
                                	    <label class="control-label" for="mtvadmin"></label>
                                        <div class="col-sm-3 col-md-4 col-lg-4"> 
                                            <textarea disabled class="form-control" rows="2" id="mtvadmin" name="mtvadmin" placeholder="Motivo de Admisión"><?php echo $fila['mtvadmin']; ?></textarea></textarea>
                                            <h6>Motivo de Admisión</h6>
                                        </div>
                                        <div class="col-sm-3 col-md-4 col-lg-4">
                                            <textarea disabled class="form-control" rows="2" id="enfactual" name="enfactual" placeholder="Enfermedad Actual"><?php echo $fila['enfactual']; ?></textarea>
                                            <h6>Enfermedad Actual</h6>
                                        </div>
                                        <div class="col-sm-3 col-md-4 col-lg-4">
                                            <textarea disabled class="form-control" rows="2" id="diag" name="diag" placeholder="Diagnóstico de Admisión"><?php echo $fila['diag']; ?></textarea>
                                            <h6>Diagnóstico de Admisión</h6>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="diagclin">Diagnóstico Clínico Final</label>
                                        <div class="col-sm-8 col-md-10 col-lg-10">
                                          <input disabled type="text" class="form-control" name="diagclin" id="diagclin" value="<?php $fila['diagclin']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="otrosdiag">Otros Diagnósticos</label>
                                        <div class="col-sm-8 col-md-10 col-lg-10">
                                          <input disabled type="text" class="form-control" name="otrosdiag" id="otrosdiag" value="<?php $fila['otrosdiag']; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="interPrincipal"></label>
                                        <div class="col-sm-3 col-md-6 col-lg-6">
                                            <textarea disabled class="form-control" rows="2" id="interPrincipal" name="interprincipal" placeholder="<?php echo $fila['interprincipal']; ?>"></textarea>
                                            <h6>Intervención Principal</h6>
                                        </div>
                                       <!--  <label class="control-label" for="otrosdiag2"></label>   ARItOR PRENGUNTARME POR QUE L COMENTE-->
                                        <div class="col-sm-3 col-md-6 col-lg-6">
                                            <textarea disabled class="form-control" rows="2" id="otrosdiag2" name="otrosdiag2" placeholder="<?php echo $fila['otrosdiag2']; ?>"></textarea>
                                            <h6>Intervenciones Anteriores</h6>
                                        </div>
                                    </div>
                                    <br />
                            </div>
                        </div>
                        <div class="row">
                                      <legend id="leyenda"><h4>Interrogatorio I</h4>
                                    <h6 class="text-center" class="formlegend"><strong>(Datos Informativos)</strong></h6>
                                    </legend>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4" for="">Se Aplica para:</label>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                              <label><?php echo $fila['radio']; ?></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="fdia" name="fechaDia" placeholder="<?php echo $fila['date']; ?>" />
                                            <h6>Fecha de nacimiento</h6>
                                        </div>
                                    </div>
                                    <h4 class="text-center" class="formlegend">Período Neonatal:</h4>
                                    <div class="form-group">
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="respira" name="inptrespirar" placeholder="<?php echo $fila['inptrespirar']; ?>">
                                            <h6>Respiración Espontánea</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="cianosis" name="inptcianosis" placeholder="<?php echo $fila['inptcianosis']; ?>">
                                            <h6>Cianosis</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="fiebre" name="inptfiebre" placeholder="<?php echo $fila['inptfiebre']; ?>">
                                            <h6>Fiebre</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="vomitos" name="inptvomitos" placeholder="<?php echo $fila['inptvomitos']; ?>">
                                            <h6>Vómitos</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="ictericia" name="inptictericia" placeholder="<?php echo $fila['inptictericia']; ?>">
                                            <h6>Ictericia</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="hemo" name="inpthemorragia" placeholder="<?php echo $fila['inpthemorragia']; ?>">
                                            <h6>Hemorragia</h6>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="convulsion" name="inptconvulsion" placeholder="<?php echo $fila['inptconvulsion']; ?>">
                                            <h6>Convulsiones</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="malformacion" name="inptmalformacion" placeholder="<?php echo $fila['inptmalformacion']; ?>">
                                            <h6>Malformaciones</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="oftalmia" name="inptoftalmia" placeholder="<?php echo $fila['inptoftalmia']; ?>">
                                            <h6>Oftalmia</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="coriza" name="inptcoricia" placeholder="<?php echo $fila['inptcoricia']; ?>">
                                            <h6>Coriza</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptotrosDiag" name="inptotros" placeholder="<?php echo $fila['inptotros']; ?>">
                                            <h6>Otros Eventos</h6>
                                        </div>
                                    </div>
                                   <h4 class="text-center" class="formlegend">Desarrollo:</h4>
                                   <div class="form-group">
                                        <div class="col-lg-1">
                                            <input disabled type="text" class="form-control" id="inptCabeza" name="inptCabeza" placeholder="<?php echo $fila['inptCabeza']; ?>" />
                                            <h6>Sostuvo Cabeza (Meses)</h6>
                                        </div>
                                        <div class="col-lg-1">
                                            <input disabled type="text" class="form-control" id="inptsentar" name="inptsentar" placeholder="<?php echo $fila['inptsentar']; ?>" />
                                            <h6>Se Sentó (Meses)</h6>
                                        </div>
                                        <div class="col-lg-1">
                                            <input disabled type="text" class="form-control" id="inptpararse" name="inptpararse" placeholder="<?php echo $fila['inptpararse']; ?>" />
                                            <h6>Se Paró (Meses)</h6>
                                        </div>
                                        <div class="col-lg-1">
                                            <input disabled type="text" class="form-control" id="inptCamino" name="inptCamino" placeholder="<?php echo $fila['inptCamino']; ?>" />
                                            <h6>Caminó (Meses)</h6>
                                        </div>
                                        <div class="col-lg-1">
                                            <input disabled type="text" class="form-control" id="inptPalabras" name="inptPalabras" placeholder="<?php echo $fila['inptPalabras']; ?>" />
                                            <h6>Primera Palabras(Meses)</h6>
                                        </div>
                                        <div class="col-lg-1">
                                            <input disabled type="text" class="form-control" id="inptEsfinter" name="inptControl" placeholder="<?php echo $fila['inptEsfinter']; ?>" />
                                            <h6>Sostuvo Esfinter (Meses)</h6>
                                        </div>
                                         <div class="col-lg-1">
                                            <input disabled type="text" class="form-control" id="inptpDiente" name="inptpDiente" placeholder="<?php echo $fila['inptDiente']; ?>" />
                                            <h6>Primer Diente (Meses)</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptEscuela" name="inptEscuela" placeholder="<?php echo $fila['inptEscuela']; ?>" />
                                            <h6>Grado de Escuela</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptProgreso" name="inptProgreso" placeholder="<?php echo $fila['inptProgreso']; ?>" />
                                            <h6>Progreso en Escuela</h6>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptProgPeso" name="inptProgPeso" placeholder="<?php echo $fila['inptProgpeso']; ?>" />
                                            <h6>Progreso en Peso</h6>
                                        </div>
                                    </div>
                                    <h4 class="text-center" class="formlegend">Alimentación:</h4>
                                    <div class="form-group">
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <?php if ($fila['natural1']=='SI') {
                                                    echo '<label><input disabled type="checkbox" value="Natural" id="checkbox22" name="natural1" onclick="" checked>Natural</label>';
                                                }else{
                                                    echo '<label><input disabled type="checkbox" value="Natural" id="checkbox22" name="natural1" onclick="" >Natural</label>';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <?php if ($fila['artificial']=='SI') {
                                                    echo '<label><input disabled type="checkbox" value="Artificial" id="checkbox23" name="artificial" onclick="" checked>Artificial</label>';
                                                }else{
                                                    echo '<label><input disabled type="checkbox" value="Artificial" id="checkbox23" name="artificial" onclick="">Artificial</label>';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <?php if ($fila['destete']=='SI') {
                                                    echo '<label><input disabled type="checkbox" value="Destete" id="checkbox24" name="destete" onclick="" checked>Destete</label>';
                                                }else{
                                                    echo '<label><input disabled type="checkbox" value="Destete" id="checkbox24" name="destete" onclick="">Destete</label>';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                         <div class="col-lg-1">
                                            <div class="radio">
                                                <?php if ($fila['cereales']=='SI') {
                                                    echo '<label><input disabled type="checkbox" value="Cereales" id="checkbox25" name="cereales" onclick="" checked>Cereales</label>';
                                                }else{
                                                    echo '<label><input disabled type="checkbox" value="Cereales" id="checkbox25" name="cereales" onclick="">Cereales</label>';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                         <div class="col-lg-1">
                                            <div class="radio">
                                                <?php if ($fila['sopas']=='SI') {
                                                    echo '<label><input disabled type="checkbox" value="Sopas" id="checkbox26" name="sopas" onclick="" checked>Sopas</label>';
                                                }else{
                                                    echo '<label><input disabled type="checkbox" value="Sopas" id="checkbox26" name="sopas" onclick="">Sopas</label>';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                         <div class="col-lg-1">
                                            <div class="radio">
                                                <?php if ($fila['huevos']=='SI') {
                                                    echo '<label><input disabled type="checkbox" value="Huevos" id="checkbox27" name="huevos" onclick="" checked>Huevos</label>';
                                                }else{
                                                    echo '<label><input disabled type="checkbox" value="Huevos" id="checkbox27" name="huevos" onclick="">Huevos</label>';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                       <div class="col-lg-1">
                                            <div class="radio">
                                                <?php if ($fila['carnes']=='SI') {
                                                    echo '<label><input disabled type="checkbox" value="Carnes" id="checkbox28" name="carnes" onclick="" checked>Carnes</label>';
                                                }else{
                                                    echo '<label><input disabled type="checkbox" value="Carnes" id="checkbox28" name="carnes" onclick="">Carnes</label>';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <?php if ($fila['vitaminas']=='SI') {
                                                    echo '<label><input disabled type="checkbox" value="Vitaminas" id="checkbox29" name="vitaminas" onclick="" checked>Vitaminas</label>';
                                                }else{
                                                    echo '<label><input disabled type="checkbox" value="Vitaminas" id="checkbox29" name="vitaminas" onclick="">Vitaminas</label>';
                                                }
                                                ?>
                                                
                                            </div>
                                        </div>
                                       <div class="col-lg-1">
                                            <div class="radio">
                                                <?php if ($fila['frutas']=='SI') {
                                                    echo '<label><input disabled type="checkbox" value="Frutas" id="checkbox30" name="frutas" onclick="" checked>Frutas</label>';
                                                }else{
                                                    echo '<label><input disabled type="checkbox" value="Frutas" id="checkbox30" name="frutas" onclick="">Frutas</label>';
                                                }
                                                ?>
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <?php if ($fila['vegetales']=='SI') {
                                                    echo '<label><input disabled type="checkbox" value="Vegetales" id="checkbox31" name="vegetales" onclick="" checked>Vegetales</label>';
                                                }else{
                                                    echo '<label><input disabled type="checkbox" value="Vegetales" id="checkbox31" name="vegetales" onclick="">Vegetales</label>';
                                                }
                                                ?>
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <?php if ($fila['mixta']=='Mixta') {
                                                    echo '<label><input disabled type="checkbox" value="Mixta" id="checkbox32" name="mixta" onclick="" checked>Mixta</label>';
                                                }else{
                                                    echo '<label><input disabled type="checkbox" value="Mixta" id="checkbox32" name="mixta" onclick="">Mixta</label>';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <?php if ($fila['dieta']=='SI') {
                                                    echo '<label><input disabled type="checkbox" value="DietaActual" id="checkbox33" name="dieta" onclick="" checked>Dieta Actual</label>';
                                                }else{
                                                    echo '<label><input disabled type="checkbox" value="DietaActual" id="checkbox33" name="dieta" onclick="">Dieta Actual</label>';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                             <input disabled type="text" class="form-control" id="inptdieta" name="inptdieta" placeholder="<?php echo $fila['inptdieta'];?>">
                                        </div>
                                    </div>
                                </div>
                        <div class="row">
                                    <h4 class="text-center" class="formlegend">Hábitos Psicológicos:</h4>
                                    <div class="form-group">
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptsuenio" name="inptsuenio" placeholder="<?php echo $fila['inptsuenio']; ?>">
                                            <h6>Sueño</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptsiesta" name="inptsiesta" placeholder="<?php echo $fila['inptsiesta']; ?>">
                                            <h6>Siesta</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptjuego" name="inptjuego" placeholder="<?php echo $fila['inptjuego']; ?>">
                                            <h6>Juego</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptsexo" name="inptsexo" placeholder="<?php echo $fila['inptsexo']; ?>">
                                            <h6>Juegos Sexuales</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptChupaDedos" name="inptChupaDedos" placeholder="<?php echo $fila['inptChupaDedos']; ?>">
                                            <h6>Chupa Dedos</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptComeUnia" name="inptComeUnia" placeholder="<?php echo $fila['inptComeUnia']; ?>">
                                            <h6>Come Uñas</h6>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptRasgos" name="inptRasgos" placeholder="<?php echo $fila['inptRasgos']; ?>">
                                            <h6>Rasgos</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptRecreacion" name="inptRecreacion" placeholder="<?php echo $fila['inptRecreacion']; ?>">
                                            <h6>Recreación</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptOcupacion" name="inptOcupacion" placeholder="<?php echo $fila['inptOcupacion']; ?>">
                                            <h6>Ocupación</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptHabOtros" name="inptHabOtros" placeholder="<?php echo $fila['inptHabOtros']; ?>">
                                            <h6>Otros</h6>
                                        </div>
                                    </div>
                                    <h4 class="text-center" class="formlegend">Inmunizantes y Pruebas:</h4>
                                    <div class="form-group">
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptViruela" name="inptViruela" placeholder="<?php echo $fila['inptViruela']; ?>">
                                            <h6>Viruela</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptTos" name="inptTos" placeholder="<?php echo $fila['inptTos']; ?>">
                                            <h6>Tos Ferina</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptDiafteria" name="inptDiafteria" placeholder="<?php echo $fila['inptDiafteria']; ?>">
                                            <h6>Diafteria</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptTetano" name="inptTetano" placeholder="<?php echo $fila['inptTetano']; ?>">
                                            <h6>Tetanos</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptTifica" name="inptTifica" placeholder="<?php echo $fila['inptTifica']; ?>">
                                            <h6>Tifica</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptBCG" name="inptBCG" placeholder="<?php echo $fila['inptBCG']; ?>">
                                            <h6>B.C.G</h6>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptPolio" name="inptPolio" placeholder="<?php echo $fila['inptPolio']; ?>">
                                            <h6>Polio</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptTuber" name="inptTuber" placeholder="<?php echo $fila['inptTuber']; ?>">
                                            <h6>Tuberculosis</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptOtras" name="inptOtras" placeholder="<?php echo $fila['inptOtras']; ?>">
                                            <h6>Otras</h6>
                                        </div>
                                    </div>
                                    <h4 class="text-center" class="formlegend">Antecedentes Personales:</h4>
                                    <div class="form-group">
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <?php if ($fila['sarampion']=='SI') {
                                                    echo '<label><input disabled type="checkbox" value="Sarampión" id="checkbox1" name="sarampion" checked />Sarampión</label>';
                                                }else{
                                                    echo '<label><input disabled type="checkbox" value="Sarampión" id="checkbox1" name="sarampion" />Sarampión</label>';
                                                }
                                                ?>
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <?php if ($fila['ferina']=='SI') {
                                                    echo '<label><input disabled type="checkbox" value="Tos Ferina" id="checkbox1" name="ferina" checked />Tos ferina</label>';
                                                }else{
                                                    echo '<label><input disabled type="checkbox" value="Tos Ferina" id="checkbox1" name="ferina" />Tos ferina</label>';
                                                }
                                                ?>
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <?php if ($fila['rubeola']=='SI') {
                                                    echo '<label><input disabled type="checkbox" value="Rubeola" id="checkbox1" name="rubeola" />Rubéola</label>';
                                                }else{
                                                    echo '<label><input disabled type="checkbox" value="Rubeola" id="checkbox1" name="rubeola" />Rubéola</label>';
                                                }
                                                ?>
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <?php if ($fila['parotiditis']=='SI') {
                                                    echo '<label><input disabled type="checkbox" value="Parotiditis" id="checkbox1" name="parotiditis" checked />Parotiditis</label>';
                                                }else{
                                                    echo '<label><input disabled type="checkbox" value="Parotiditis" id="checkbox1" name="parotiditis" />Parotiditis</label>';
                                                }
                                                ?>
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <?php if ($fila['varicela']=='SI') {
                                                    echo '<label><input disabled type="checkbox" value="Varicela" id="checkbox1" name="varicela" checked />Varicela</label>';
                                                }else{
                                                    echo '<label><input disabled type="checkbox" value="Varicela" id="checkbox1" name="varicela" />Varicela</label>';
                                                }
                                                ?>
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <?php if ($fila['difteria']=='SI') {
                                                    echo '<label><input disabled type="checkbox" value="Difteria" id="checkbox1" name="difteria" checked/>Difteria</label>';
                                                }else{
                                                    echo '<label><input disabled type="checkbox" value="Difteria" id="checkbox1" name="difteria" />Difteria</label>';
                                                }
                                                ?>
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <?php if ($fila['amigdalitis']=='SI') {
                                                    echo '<label><input disabled type="checkbox" value="Amigdalitis" id="checkbox1" name="amigdalitis" checked />Amigdalitis</label>';
                                                }else{
                                                    echo '<label><input disabled type="checkbox" value="Amigdalitis" id="checkbox1" name="amigdalitis" />Amigdalitis</label>';
                                                }
                                                ?>
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <?php if ($fila['tifoidea']=='SI') {
                                                    echo '<label><input disabled type="checkbox" value="Tifoidea" id="checkbox1" name="tifoidea" checked />Tifoidea</label>';
                                                }else{
                                                    echo '<label><input disabled type="checkbox" value="Tifoidea" id="checkbox1" name="tifoidea" />Tifoidea</label>';
                                                }
                                                ?>
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <?php if ($fila['otitis']=='SI') {
                                                    echo '<label><input disabled type="checkbox" value="Otitis" id="checkbox1" name="otitis" checked />Otitis</label>';
                                                }else{
                                                    echo '<label><input disabled type="checkbox" value="Otitis" id="checkbox1" name="otitis" />Otitis</label>';
                                                }
                                                ?>
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <?php if ($fila['bronquitis']=='SI') {
                                                    echo '<label><input disabled type="checkbox" value="Bronquitis" id="checkbox1" name="bronquitis" checked />Bronquitis</label>';
                                                }else{
                                                    echo '<label><input disabled type="checkbox" value="Bronquitis" id="checkbox1" name="bronquitis" />Bronquitis</label>';
                                                }
                                                ?>
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <?php if ($fila['neumonia']=='SI') {
                                                    echo '<label><input disabled type="checkbox" value="Neumonia" id="checkbox1" name="neumonia" checked />Neumonía</label>';
                                                }else{
                                                    echo '<label><input disabled type="checkbox" value="Neumonia" id="checkbox1" name="neumonia" />Neumonía</label>';
                                                }
                                                ?>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <?php if ($fila['alergia']=='SI') {
                                                    echo '<label><input disabled type="checkbox" value="Alergia" id="checkbox1" name="alergia" checked />Alergia</label>';
                                                }else{
                                                    echo '<label><input disabled type="checkbox" value="Alergia" id="checkbox1" name="alergia" />Alergia</label>';
                                                }
                                                ?>
                                                
                                            </div>
                                        </div>
                                       <div class="col-lg-1">
                                            <div class="radio">
                                                <?php if ($fila['pleuseria']=='SI') {
                                                    echo '<label><input disabled type="checkbox" value="Pleuseria" id="checkbox1" name="pleuseria" checked />Pleuseria</label>';
                                                }else{
                                                    echo '<label><input disabled type="checkbox" value="Pleuseria" id="checkbox1" name="pleuseria" />Pleuseria</label>';
                                                }
                                                ?>
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <?php if ($fila['influenza']=='SI') {
                                                    echo '<label><input disabled type="checkbox" value="Influenza" id="checkbox1" name="influenza" checked />Influenza</label>';
                                                }else{
                                                    echo '<label><input disabled type="checkbox" value="Influenza" id="checkbox1" name="influenza" />Influenza</label>';
                                                }
                                                ?>
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <?php if ($fila['malaria']=='SI') {
                                                    echo '<label><input disabled type="checkbox" value="Malaria" id="checkbox1" name="malaria" checked />Malaria</label>';
                                                }else{
                                                    echo '<label><input disabled type="checkbox" value="Malaria" id="checkbox1" name="malaria" />Malaria</label>';
                                                }
                                                ?>
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <?php if ($fila['bilhar']=='SI') {
                                                    echo '<label><input disabled type="checkbox" value="Bilharziosis" id="checkbox1" name="bilhar" />Bilharziosis</label>';
                                                }else{
                                                    echo '<label><input disabled type="checkbox" value="Bilharziosis" id="checkbox1" name="bilhar" />Bilharziosis</label>';
                                                }
                                                ?>
                                                
                                            </div>
                                        </div>
                                       <div class="col-lg-1">
                                            <div class="radio">
                                                <?php if ($fila['artritis']=='SI') {
                                                    echo '<label><input disabled type="checkbox" value="Artritis" id="checkbox1" name="artritis" checked />Artritis</label>';
                                                }else{
                                                    echo '<label><input disabled type="checkbox" value="Artritis" id="checkbox1" name="artritis" />Artritis</label>';
                                                }
                                                ?>
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <?php if ($fila['rinofaringitis']=='SI') {
                                                    echo '<label><input disabled type="checkbox" value="Rinofaringitis" id="checkbox1" name="rinofaring" checked />Rinofaringitis</label>';
                                                }else{
                                                    echo '<label><input disabled type="checkbox" value="Rinofaringitis" id="checkbox1" name="rinofaring" />Rinofaringitis</label>';
                                                }
                                                ?>
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <?php if ($fila['fiebreProlong']=='SI') {
                                                    echo '<label><input disabled type="checkbox" value="Fiebres Prolongadas" id="checkbox1" name="fiebresProlong" />Fiebres Prolongadas</label>';
                                                }else{
                                                    echo '<label><input disabled type="checkbox" value="Fiebres Prolongadas" id="checkbox1" name="fiebresProlong" />Fiebres Prolongadas</label>';
                                                }
                                                ?>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="text-center" class="formlegend">Historia Familiar:</h4>
                                    <div class="form-group">
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <?php if ($fila['cancer']=='SI') {
                                                    echo '<label><input disabled type="checkbox" value="Cáncer" id="checkbox1" name="cancer" checked />Cáncer</label>';
                                                }else{
                                                    echo '<label><input disabled type="checkbox" value="Cáncer" id="checkbox1" name="cancer" />Cáncer</label>';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <?php if ($fila['diabetes']=='SI') {
                                                    echo '<label><input disabled type="checkbox" value="Diabetes" id="checkbox1" name="diabete" checked />Diabetes</label>';
                                                }else{
                                                    echo '<label><input disabled type="checkbox" value="Diabetes" id="checkbox1" name="diabete" />Diabetes</label>';
                                                }
                                                ?>
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <?php if ($fila['discracia']=='SI') {
                                                    echo '<label><input disabled type="checkbox" value="Discracia" id="checkbox1" name="discracia" checked />Discracia</label>';
                                                }else{
                                                    echo '<label><input disabled type="checkbox" value="Discracia" id="checkbox1" name="discracia" />Discracia</label>';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <?php if ($fila['enfRenal']=='SI') {
                                                    echo '<label><input disabled type="checkbox" value="Enfermedad Renal" id="checkbox1" name="enfRenal" checked />Enf. Renal</label>';
                                                }else{
                                                    echo '<label><input disabled type="checkbox" value="Enfermedad Renal" id="checkbox1" name="enfRenal" />Enf. Renal</label>';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                       <div class="col-lg-1">
                                            <div class="radio">
                                                <?php if ($fila['enfCard']=='SI') {
                                                    echo '<label><input disabled type="checkbox" value="EnfermedadCardíaca" id="checkbox1" name="enfCard" checked />Enf. Cardíaca</label>';
                                                }else{
                                                    echo '<label><input disabled type="checkbox" value="EnfermedadCardíaca" id="checkbox1" name="enfCard" />Enf. Cardíaca</label>';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                 <?php if ($fila['antAlergia']=='SI') {
                                                    echo '<label><input disabled type="checkbox" value="Alergia" id="checkbox1" name="antAlergia" checked />Alergia</label>';
                                                }else{
                                                    echo '<label><input disabled type="checkbox" value="Alergia" id="checkbox1" name="antAlergia" />Alergia</label>';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <?php if ($fila['antArtritis']=='SI') {
                                                    echo '<label><input disabled type="checkbox" value="Artritis" id="checkbox1" name="antArtritis" checked />Artritis</label>';
                                                }else{
                                                    echo '<label><input disabled type="checkbox" value="Artritis" id="checkbox1" name="antArtritis" />Artritis</label>';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                         <div class="col-lg-1">
                                            <div class="radio">
                                                <?php if ($fila['sifilis']=='SI') {
                                                    echo '<label><input disabled type="checkbox" value="Sifilis" id="checkbox1" name="sifilis" checked />Sífilis</label>';
                                                }else{
                                                    echo '<label><input disabled type="checkbox" value="Sifilis" id="checkbox1" name="sifilis" />Sífilis</label>';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <?php if ($fila['tuberculosis']=='SI') {
                                                    echo '<label><input disabled type="checkbox" value="Tuberculosis" id="checkbox1" name="tuberculosis" checked />Tuberculosis</label>';
                                                }else{
                                                    echo '<label><input disabled type="checkbox" value="Tuberculosis" id="checkbox1" name="tuberculosis" />Tuberculosis</label>';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <?php if ($fila['enfDigest']=='SI') {
                                                    echo '<label><input disabled type="checkbox" value="EnfermedadDigestiva" id="checkbox1" name="enfDigest" checked />Enf. Digestiva</label>';
                                                }else{
                                                    echo '<label><input disabled type="checkbox" value="EnfermedadDigestiva" id="checkbox1" name="enfDigest" />Enf. Digestiva</label>';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <?php if ($fila['intoxicacion']=='SI') {
                                                    echo '<label><input disabled type="checkbox" value="Intoxicaciones" id="checkbox1" name="intoxicacion" checked />Intoxicación</label>';
                                                }else{
                                                    echo '<label><input disabled type="checkbox" value="Intoxicaciones" id="checkbox1" name="intoxicacion" />Intoxicación</label>';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-1">
                                            <div class="radio">
                                             <?php if ($fila['histFamOtros']=='SI') {
                                                    echo '<label><input disabled type="checkbox" value="HistFamOtras" id="checkHfam" name="histFamOtros" onclick="" checked />Otros</label>';
                                                }else{
                                                    echo '<label><input disabled type="checkbox" value="HistFamOtras" id="checkHfam" name="histFamOtros" onclick="">Otros</label>';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptHistFam" name="inptHistFam" placeholder="<?php echo $fila['inptHistFam']; ?>">
                                            <h6></h6>
                                        </div>
                                    </div>
                            </div>
                        <div class="row">                   
                                    <h2 class="text-center" class="formlegend">Interrogatorio II</h2>
                                    <h6 class="text-center" class="formlegend"><strong>(Examen Físico | Datos Objetivos)</strong></h6>
                                    <br />
                                    <h4 class="text-center" class="formlegend">Estado General:</h4>
                                    <div class="form-group">
                                	    <label class="control-label" for=""></label>
                                        <div class="col-sm-3 col-md-4 col-lg-4">
                                            <textarea disabled class="form-control" rows="2" id="condGeneral" name="condGeneral" placeholder="<?php echo $fila['condGeneral']; ?>"></textarea>
                                            <h6>Condiciones Generales</h6>
                                        </div>
                                         <div class="col-sm-3 col-md-4 col-lg-4">
                                            <textarea disabled class="form-control" rows="2" id="nutricion" name="nutricion" placeholder="<?php echo $fila['nutricion']; ?>"></textarea>
                                            <h6>Nutrición y Desarrollo</h6>
                                        </div>
                                         <div class="col-sm-3 col-md-4 col-lg-4">
                                            <textarea disabled class="form-control" rows="2" id="condOtros" name="condOtros" placeholder="<?php echo $fila['condOtros']; ?>"></textarea>
                                            <h6>Otros</h6>
                                        </div>
                                    </div>
                                    <h4 class="text-center" class="formlegend">Piel Panículo Adiposo y Faneras:</h4>
                                   <div class="form-group">
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptColor" name="inptColor" placeholder="<?php echo $fila['inptColor']; ?>">
                                            <h6>Color</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptHumedad" name="inptHumedad" placeholder="<?php echo $fila['inptHumedad']; ?>">
                                            <h6>Humedad</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptContext" name="inptContext" placeholder="<?php echo $fila['inptContext']; ?>">
                                            <h6>Contexto</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptPigmento" name="inptPigmento" placeholder="<?php echo $fila['inptPigmento']; ?>">
                                            <h6>Pigmento</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptHidrata" name="inptHidrata" placeholder="<?php echo $fila['inptHidrata']; ?>">
                                            <h6>Hidratación</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptEquismo" name="inptEquismo" placeholder="<?php echo $fila['inptEquismo']; ?>">
                                            <h6>Equismo</h6>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptPete" name="inptPete" placeholder="<?php echo $fila['inptPete']; ?>">
                                            <h6>Petequias</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptCia" name="inptCia" placeholder="<?php echo $fila['inptCia']; ?>">
                                            <h6>Cianosis</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptErup" name="inptErup" placeholder="<?php echo $fila['inptErup']; ?>">
                                            <h6>Erupción</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptPanic" name="inptPanic" placeholder="<?php echo $fila['inptPanic']; ?>">
                                            <h6>Pigmento</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptTurgor" name="inptTurgor" placeholder="<?php echo $fila['inptTurgor']; ?>">
                                            <h6>Turgor</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptEdema" name="inptEdema" placeholder="<?php echo $fila['inptEdema']; ?>">
                                            <h6>Edema</h6>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptUnias" name="inptUnias" placeholder="<?php echo $fila['inptUnias']; ?>">
                                            <h6>Uñas</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptNod" name="inptNod" placeholder="<?php echo $fila['inptNod']; ?>">
                                            <h6>Nódulos</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptPelos" name="inptPelos" placeholder="<?php echo $fila['inptPelos']; ?>">
                                            <h6>Pelos</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptVascula" name="inptVascula" placeholder="<?php echo $fila['inptVascula']; ?>">
                                            <h6>Vascularización</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptCicatris" name="inptCicatris" placeholder="<?php echo $fila['inptCicatris']; ?>">
                                            <h6>Cicatris</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptUlcera" name="inptUlcera" placeholder="<?php echo $fila['inptUlcera']; ?>">
                                            <h6>Ulceras</h6>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptFistula" name="inptFistula" placeholder="<?php echo $fila['inptFistula']; ?>">
                                            <h6>Fistula</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inpOtros" name="inpOtros" placeholder="<?php echo $fila['inpOtros']; ?>">
                                            <h6>Otros</h6>
                                        </div>
                                    </div>
                                    <h4 class="text-center" class="formlegend">Cabeza:</h4>
                                    <div class="form-group">
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptConf" name="inptConf" placeholder="<?php echo $fila['inptConf']; ?>">
                                            <h6>Configuración</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptFront" name="inptFront" placeholder="<?php echo $fila['inptFront']; ?>">
                                            <h6>Frontales</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptSutura" name="inptSutura" placeholder="<?php echo $fila['inptSutura']; ?>">
                                            <h6>Suturas</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptCircunf" name="inptCircunf" placeholder="<?php echo $fila['inptCircunf']; ?>">
                                            <h6>Circunferencia</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptCraneo" name="inptCraneo" placeholder="<?php echo $fila['inptCraneo']; ?>">
                                            <h6>Cráneo</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptCabello" name="inptCabello" placeholder="<?php echo $fila['inptCabello']; ?>">
                                            <h6>Cabello</h6>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptOtros" name="inptOtroscabe" placeholder="<?php echo $fila['inptOtroscabe']; ?>">
                                            <h6>Otros</h6>
                                        </div>
                                    </div>
                                    <h4 class="text-center" class="formlegend">Ojos:</h4>
                                    <div class="form-group">
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptConjuntiva" name="inptConjunti" placeholder="<?php echo $fila['inptConjunti']; ?>">
                                            <h6>Conjuntiva</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptEsclero" name="inptEsclero" placeholder="<?php echo $fila['inptEsclero']; ?>">
                                            <h6>Esclerotica</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptCornea" name="inptCornea" placeholder="<?php echo $fila['inptCornea']; ?>">
                                            <h6>Cornea</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptPupila" name="inptPupila" placeholder="<?php echo $fila['inptPupila']; ?>">
                                            <h6>Pupilas</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptMovie" name="inptMovie" placeholder="<?php echo $fila['inptMovie']; ?>">
                                            <h6>Movimiento</h6>
                                        </div>
                                        <div class="col-lg-2">
                                           <input disabled type="text" class="form-control" id="inptDesvia" name="inptDesvia" placeholder="<?php echo $fila['inptDesvia']; ?>">
                                           <h6>Desviación</h6>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptNistag" name="inptNistag" placeholder="<?php echo $fila['inptNistag']; ?>">
                                            <h6>Nistagmus</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptPtosis" name="inptPtosis" placeholder="<?php echo $fila['inptPtosis']; ?>">
                                            <h6>Ptosis</h6>
                                        </div>
                                        <div class="col-lg-2">
                                           <input disabled type="text" class="form-control" id="inptExostalmo" name="inptExostalmo" placeholder="<?php echo $fila['inptExostalmo']; ?>">
                                           <h6>Exostalmo</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptOftalmo" name="inptOftalmo" placeholder="<?php echo $fila['inptOftalmo']; ?>">
                                            <h6>Oftalmo</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptOjo" name="inptOjo" placeholder="<?php echo $fila['inptOjo']; ?>">
                                            <h6>Otros</h6>
                                        </div>
                                    </div>
                        </div>
                        <div class="row">
                                    <h4 class="text-center" class="formlegend">Oídos:</h4>
                                    <div class="form-group">
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptPabellon" name="inptPabellon" placeholder="<?php echo $fila['inptPabellon']; ?>">
                                            <h6>Pabellon</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptCanal" name="inptCanal" placeholder="<?php echo $fila['inptCanal']; ?>">
                                            <h6>Canal</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptTimpano" name="inptTimpano" placeholder="<?php echo $fila['inptTimpano']; ?>">
                                            <h6>Timpano</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptAudicion" name="inptAudicion" placeholder="<?php echo $fila['inptAudicion']; ?>">
                                            <h6>Audición</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptSecre" name="inptSecre" placeholder="<?php echo $fila['inptSecre']; ?>">
                                            <h6>Secreción</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptMastoide" name="inptMastoide" placeholder="<?php echo $fila['inptMastoide']; ?>">
                                            <h6>Mastoide</h6>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-2">
                                             <input disabled type="text" class="form-control" id="inptDolor" name="inptDolor" placeholder="<?php echo $fila['inptDolor']; ?>">
                                             <h6>Dolor</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="selectInpOtro" name="selectInpOtro" placeholder="<?php echo $fila['selectInpOtro']; ?>">
                                            <h6>Otros</h6>
                                        </div>
                                    </div>
                                    <h4 class="text-center" class="formlegend">Rinofaringe:</h4>
                                    <div class="form-group">
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptFosas" name="inptFosas" placeholder="<?php echo $fila['inptFosas']; ?>">
                                            <h6>Fosas Nasales</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptMucosa" name="inptMucosa" placeholder="<?php echo $fila['inptMucosa']; ?>">
                                            <h6>Mucosa</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptSecrecion" name="inptSecrecion" placeholder="<?php echo $fila['inptSecrecion']; ?>">
                                            <h6>Secreción Nasal</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptTabique" name="inptTabique" placeholder="<?php echo $fila['inptTabique']; ?>">
                                            <h6>Tabique</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptAcceso" name="inptAcceso" placeholder="<?php echo $fila['inptAcceso']; ?>">
                                            <h6>Acceso</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptDiasfa" name="inptDiasfa" placeholder="<?php echo $fila['inptDiasfa']; ?>">
                                            <h6>Diasfateria</h6>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptAmigdala" name="inptAmigdala" placeholder="<?php echo $fila['inptAmigdala']; ?>">
                                            <h6>Amigdalas</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptFaringe" name="inptFaringe" placeholder="<?php echo $fila['inptFaringe']; ?>">
                                            <h6>Faringe</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptAdenoide" name="inptAdenoide" placeholder="<?php echo $fila['inptAdenoide']; ?>">
                                            <h6>Adenoide</h6>
                                        </div>
                                        <div class="col-lg-2">
                                             <input disabled type="text" class="form-control" id="inptPosnasal" name="inptPosnasal" placeholder="<?php echo $fila['inptPosnasal']; ?>">
                                             <h6>Posnasal</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptDisfagia" name="inptDisfagia" placeholder="<?php echo $fila['inptDisfagia']; ?>">
                                            <h6>Disfagia</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inFaOtro" name="inFaOtro" placeholder="<?php echo $fila['inFaOtro']; ?>">
                                            <h6>Otros</h6>
                                        </div>
                                    </div>
                                    <h4 class="text-center" class="formlegend">Boca:</h4>
                                    <div class="form-group">
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptAliento" name="inptAliento" placeholder="<?php echo $fila['inptAliento']; ?>">
                                            <h6>Aliento</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptLabios" name="inptLabios" placeholder="<?php echo $fila['inptLabios']; ?>">
                                            <h6>Labios</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptDiente" name="inptDiente" placeholder="<?php echo $fila['inptDiente']; ?>">
                                            <h6>Dientes</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptEncia" name="inptEncia" placeholder="<?php echo $fila['inptEncia']; ?>">
                                            <h6>Encias</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptBmucosa" name="inptBmucosa" placeholder="<?php echo $fila['inptBmucosa']; ?>">
                                            <h6>Mucosa</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptLengua" name="inptLengua" placeholder="<?php echo $fila['inptLengua']; ?>">
                                            <h6>Lengua</h6>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptConducto" name="inptConducto" placeholder="<?php echo $fila['inptConducto']; ?>">
                                            <h6>Conducto</h6>
                                        </div>
                                        <div class="col-lg-2">
                                             <input disabled type="text" class="form-control" id="inptParalisis" name="inptParalisis" placeholder="<?php echo $fila['inptParalisis']; ?>">
                                             <h6>Paralisis</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptBotros" name="inptBotros" placeholder="<?php echo $fila['inptBotros']; ?>">
                                            <h6>Otros</h6>
                                        </div>
                                    </div>
                        </div>
                        <div class="row">
                                    <h4 class="text-center" class="formlegend">Cuello:</h4>
                                    <div class="form-group">
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptMovilidad" name="inptMovilidad" placeholder="<?php echo $fila['inptMovilidad']; ?>">
                                            <h6>Movilidad</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptTumoracion" name="inptTumoracion" placeholder="<?php echo $fila['inptTumoracion']; ?>">
                                            <h6>Tumoración</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptTiroide" name="inptTiroide" placeholder="<?php echo $fila['inptTiroide']; ?>">
                                            <h6>Tiroíde</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptVasos" name="inptVasos" placeholder="<?php echo $fila['inptVasos']; ?>">
                                            <h6>Vasos</h6>
                                        </div>
                                        <div class="col-lg-2">
                                             <input disabled type="text" class="form-control" id="inptTraquea" name="inptTraquea" placeholder="<?php echo $fila['inptTraquea']; ?>">
                                             <h6>Tráquea</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptCuello" name="inptCuello" placeholder="<?php echo $fila['inptCuello']; ?>">
                                            <h6>Otros</h6>
                                        </div>
                                    </div>              
                                    <h4 class="text-center" class="formlegend">Ganglios Linfaticos:</h4>
                                   <div class="form-group">
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptCervical" name="inptCervical" placeholder="<?php echo $fila['inptCervical']; ?>">
                                            <h6>Cervicales</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptOccipital" name="inptOccipital" placeholder="<?php echo $fila['inptOccipital']; ?>">
                                            <h6>Occipitales</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptSupra" name="inptSupra" placeholder="<?php echo $fila['inptSupra']; ?>">
                                            <h6>Supraclavicula</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptAxilar" name="inptAxilar" placeholder="<?php echo $fila['inptAxilar']; ?>">
                                            <h6>Axilares</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptInguinal" name="inptInguinal" placeholder="<?php echo $fila['inptInguinal']; ?>">
                                            <h6>Inguinales</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptEpi" name="inptEpi" placeholder="<?php echo $fila['inptEpi']; ?>">
                                            <h6>Epitroclares</h6>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-2">
                                             <input disabled type="text" class="form-control" id="inptGotros" name="inptGotros" placeholder="<?php echo $fila['inptGotros']; ?>">
                                             <h6>Otros</h6>
                                        </div>
                                    </div>
                                    <h4 class="text-center" class="formlegend">Tórax y Pulmones:</h4>
                                    <div class="form-group">
                                        <div class="col-lg-2">
                                             <input disabled type="text" class="form-control" id="inptForma" name="inptForma" placeholder="<?php echo $fila['inptForma']; ?>">
                                             <h6>Forma</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptSimetria" name="inptSimetria" placeholder="<?php echo $fila['inptSimetria']; ?>">
                                            <h6>Simetria</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptExpansion" name="inptExpansion" placeholder="<?php echo $fila['inptExpansion']; ?>">
                                            <h6>Expansión</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptPercusion" name="inptPercusion" placeholder="<?php echo $fila['inptPercusion']; ?>">
                                            <h6>Percusión</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptRuido" name="inptRuido" placeholder="<?php echo $fila['inptRuido']; ?>">
                                            <h6>Ruido</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptPapitacion" name="inptPapitacion" placeholder="<?php echo $fila['inptPapitacion']; ?>">
                                            <h6>Palpitación</h6>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptRespcion" name="inptRespcion" placeholder="<?php echo $fila['inptRespcion']; ?>">
                                            <h6>Respiración (tipo y r.)</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptRespcion_min" name="inptRespcion_min" placeholder="<?php echo $fila['inptRespcion_min']; ?>">
                                            <h6>Respiración Por Minutos</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptToraxOtro" name="inptToraxOtro" placeholder="<?php echo $fila['inptToraxOtro']; ?>">
                                            <h6>Otros</h6>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <!--<a href="?view=models&action=generarPDF" target="_blank" class="btn btn-primary" role="button">Imprimir PDF</a>-->
                        </div>
                    </fieldset>
                </form>
            </div>
        <!--</div>-->
    </section>
</main>

<?php include(FOOTER_CORE . 'public/footer.html'); ?>