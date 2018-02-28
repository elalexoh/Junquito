<?php require_once(ACCESO_DENEGADO . 'controllers/accesoDenegado.php');?>
<?php include(HEADER .'public/headerBootstrap.html'); ?>
<?php //include(HTML_CORE . 'overall/topnav.php'); ?>
<?php require_once (MODELS . "conexion.php");?>
<img src="view/img/banner2.png" class="img-responsive" alt="" style="display:flex; margin:0 auto;">
<?php 
 include(MODELS . 'controlDB.php');
    //print_r($_POST);
    $obj = new controlDB();
    //session_start;
    $datos=$obj->consultar("SELECT * FROM pediatria WHERE cod_paciente='".$_SESSION['id_pac']."'")or die("");
    foreach ($datos as $fila) { 
?>

     <script src="view/js/functions.js" type="text/javascript"></script>
    <link rel="stylesheet" href="view/style_formularioNewPediatria.css" type="text/css" >

                              <!-- codigo html del modal-->
<link rel="stylesheet" href="view/rightnav.css" type="text/css" />

<!--*********************************************************************************************************************************************************************************************************************************!-->
<?php echo $_SESSION['id_pac']; ?>

<main>
    <div class="container">
        <div class="">
            <form id="formPediatria" class="form-horizontal" action="?view=models&action=registroNewPediatria" method="POST" enctype="multipart/form-data" name="formPediatria">                
                <fieldset>
                    <section style="text-align: right;">
                        <div>
                            <div class="col-sm-10 col-md-10 col-lg-10"> 
                            <h2 class="text-center" class="formlegend"><img src="view/img/report.png"></img>Informes de Pediatría</h2>
                            </div>
                            <div class="col-sm-2 col-md-2 col-lg-2"> 
                            <img src="view/img/logo.png" class="logohospital"></img>
                            </div>
                        </div>
                    </section>
                    <div class="row">
                        <legend id="leyenda"><h4>Datos de admision de: 
                        <?php 
                        $c_nomPaciente=$obj->consultar("SELECT primer_nombre, primer_apellido FROM paciente where cod_paciente='".$fila["cod_paciente"]."'")or die("");
                        foreach ($c_nomPaciente as $nomPaciente){
                            echo $nomPaciente['primer_nombre']." ".$nomPaciente['primer_apellido'];
                        }
                        ?>
                            <h6 class="" class="formlegend"><strong>(fecha: <?php echo $fila['fecha_reg']?>)</strong></h6>
                        </legend>
                    </div>
                    <div class="" style="display: block; padding: top;">
                        <div class="form-group">
                                        <?php 
                                            $mtvAdm=$obj->consultar("SELECT * FROM admision WHERE cod_admision ='".$fila['cod_admision']."'")or die("");
                                            foreach ($mtvAdm as $c_mtvAdm) {
                                            }
                                        ?>
                                    <label class="control-label" for="mtvadmin"></label>
                                    <div class="col-sm-4 col-md-4 col-lg-4"> 
                                        <textarea disabled class="form-control" rows="2" id="mtvadmin" name="mtvadmin" placeholder='<?php $c_mtvAdm['mtvadmin'];
                                        ?>'></textarea>
                                        <h6>Motivo de Admisión</h6>
                                    </div>

                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <textarea disabled class="form-control" rows="2" id="enfactual" name="enfactual" placeholder="<?php echo $c_mtvAdm['enfactual']; ?>"></textarea>
                                        <h6>Enfermedad Actual</h6>
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <textarea disabled class="form-control" rows="2" id="diag" name="diag" placeholder="<?php echo $c_mtvAdm['diag']; ?>"></textarea>
                                        <h6>Diagnóstico de Admisión</h6>
                                    </div>
                                </div>
                        <div class="form-group">
                                    <label class="control-label col-sm-2" for="diagclin">Diagnóstico Clínico Final</label>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                      <input disabled type="text" class="form-control" name="diagclin" id="diagclin" value="<?php echo $c_mtvAdm['diagclin']; ?>">
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                      <input disabled type="text" class="form-control" name="otrosdiag" id="otrosdiag" placeholder="<?php echo$c_mtvAdm['otrosdiag']; ?>" />
                                    </div>
                                    <label style="text-align: lef;" class="control-label col-sm-2 text-left" for="otrosdiag">Otros Diagnósticos</label>
                            </div>
                        <div class="form-group">
                                    <label class="control-label" for="interPrincipal"></label>
                                    <div class="col-sm-3 col-md-6 col-lg-6">
                                        <textarea disabled class="form-control" rows="2" id="interPrincipal" name="interprincipal" placeholder="<?php echo $c_mtvAdm['interprincipal']; ?>"></textarea>
                                        <h6>Intervención Principal</h6>
                                    </div>
                                    <div class="col-sm-3 col-md-6 col-lg-6">
                                        <textarea disabled class="form-control" rows="2" id="otrosdiag2" name="otrosdiag2" placeholder="<?php echo $c_mtvAdm['otrosdiag2']; ?>"></textarea>
                                        <h6>Intervenciones Anteriores</h6>
                                    </div>
                                </div>
                        <br />
                    </div>
                    <?php 
                        $desarrollo=$obj->consultar("SELECT * FROM desarrollo WHERE cod_desarrollo ='".$fila['cod_desarrollo']."'")or die("");
                            foreach ($desarrollo as $c_desarrollo) {
                            }
                    ?>
                    <div class="row">
                        <legend id="leyenda"><h4>Interrogatorio I</h4>
                            <h6 class="text-center" class="formlegend"><strong>(Datos Informativos)</strong></h6>
                        </legend>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="">Se Aplica para:</label>
                            <div class="col-lg-1">
                                <div class="radio">
                                        <label><?php echo $fila['infanteLactante']; ?></label>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <input disabled type="text" class="form-control" id="fdia" name="fechaDia" placeholder="<?php echo $fila['fecha_nac']; ?>" />
                                <h6>Fecha de nacimiento</h6>
                            </div>
                        </div>
                        <br/>
                        <h4 class="text-center" class="formlegend">Período Neonatal:</h4>
                        <br/>
                        <br/>
                        <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2">
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="respira" name="inptrespirar" placeholder="<?php echo $c_desarrollo['respirar']; ?>">
                                        <h6>Respiración Espontánea</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="cianosis" name="inptcianosis" placeholder="<?php echo $c_desarrollo['cianosis']; ?>">
                                        <h6>Cianosis</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="fiebre" name="inptfiebre" placeholder="<?php echo $c_desarrollo['fiebre']; ?>">
                                        <h6>Fiebre</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="vomitos" name="inptvomitos" placeholder="<?php echo $c_desarrollo['vomitos']; ?>">
                                        <h6>Vómitos</h6>
                                    </div>
                                    <div class="col-lg-2">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2">
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="ictericia" name="inptictericia" placeholder="<?php echo $c_desarrollo['ictericia']; ?>">
                                        <h6>Ictericia</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="hemo" name="inpthemorragia" placeholder="<?php echo $c_desarrollo['hemorragia']; ?>">
                                        <h6>Hemorragia</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="convulsion" name="inptconvulsion" placeholder="<?php echo $c_desarrollo['convulsion']; ?>">
                                        <h6>Convulsiones</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="malformacion" name="inptmalformacion" placeholder="<?php echo $c_desarrollo['malformacion']; ?>">
                                        <h6>Malformaciones</h6>
                                    </div>
                                    <div class="col-lg-2">
                                    </div>
                                </div>
                                
                                    
                                    
                        </div>
                        <div class="form-group">
                                    <div class="col-lg-2">
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="oftalmia" name="inptoftalmia" placeholder="<?php echo $c_desarrollo['oftalmia']; ?>">
                                        <h6>Oftalmia</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="coriza" name="inptcoricia" placeholder="<?php echo $c_desarrollo['coricia']; ?>">
                                        <h6>Coriza</h6>
                                    </div>
                                    <div class="col-lg-4">
                                        <input disabled type="text" class="form-control" id="inptotrosDiag" name="inptotros" placeholder="<?php echo$c_desarrollo['otros']; ?>">
                                        <h6>Otros Eventos</h6>
                                    </div>
                                    <div class="col-lg-2">
                                    </div>
                                </div>
                        <h4 class="text-center" class="formlegend">Desarrollo:</h4>
                        <br/>
                        <br/>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-1">
                                </div>
                                <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptCabeza" name="inptCabeza" placeholder="<?php echo $c_desarrollo['cabeza']; ?>" />
                                        <h6>Sostuvo Cabeza (Meses)</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptsentar" name="inptsentar" placeholder="<?php echo $c_desarrollo['sentar']; ?>" />
                                        <h6>Se Sentó (Meses)</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptpararse" name="inptpararse" placeholder="<?php echo $c_desarrollo['pararse']; ?>" />
                                        <h6>Se Paró (Meses)</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptCamino" name="inptCamino" placeholder="<?php echo $c_desarrollo['camino']; ?>" />
                                        <h6>Caminó (Meses)</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptPalabras" name="inptPalabras" placeholder="<?php echo $c_desarrollo['palabras']; ?>" />
                                        <h6>Primera Palabras(Meses)</h6>
                                    </div>
                                <div class="col-lg-1">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptEsfinter" name="inptControl" placeholder="<?php echo $c_desarrollo['esfinter']; ?>" />
                                        <h6>Sostuvo Esfinter (Meses)</h6>
                                    </div>
                                     <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptpDiente" name="inptpDiente" placeholder="<?php echo $c_desarrollo['pdiente']; ?>" />
                                        <h6>Primer Diente (Meses)</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptEscuela" name="inptEscuela" placeholder="<?php echo $c_desarrollo['escuela']; ?>" />
                                        <h6>Grado de Escuela</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptProgreso" name="inptProgreso" placeholder="<?php echo $c_desarrollo['progreso']; ?>" />
                                        <h6>Progreso en Escuela</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptProgPeso" name="inptProgPeso" placeholder="<?php echo $c_desarrollo['progpeso']; ?>" />
                                        <h6>Progreso en Peso</h6>
                                    </div>
                                <div class="col-lg-1"></div>
                            </div>            
                        </div>
                        <?php 
                        $alimentacion=$obj->consultar("SELECT * FROM alimentacion WHERE cod_alimentacion ='".$fila['cod_alimentacion']."'")or die("");
                            foreach ($alimentacion as $c_alimentacion) {
                            }
                        ?>
                        <h4 class="text-center" class="formlegend">Alimentación:</h4>
                        <br/>
                        <div class="form-group">
                            <div class="col-lg-4"></div>
                            <div class="col-lg-4">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-1">
                                        <div class="radio">
                                            <?php if ($c_alimentacion['natural1']=='SI') {
                                                echo '<label><input disabled type="checkbox" value="Natural" id="checkbox22" name="natural1" onclick="" checked>Natural</label>';
                                            }else{
                                                echo '<label><input disabled type="checkbox" value="Natural" id="checkbox22" name="natural1" onclick="" >Natural</label>';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <?php if ($c_alimentacion['artificial']=='SI') {
                                                echo '<label><input disabled type="checkbox" value="Artificial" id="checkbox23" name="artificial" onclick="" checked>Artificial</label>';
                                            }else{
                                                echo '<label><input disabled type="checkbox" value="Artificial" id="checkbox23" name="artificial" onclick="">Artificial</label>';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <?php if ($c_alimentacion['destete']=='SI') {
                                                echo '<label><input disabled type="checkbox" value="Destete" id="checkbox24" name="destete" onclick="" checked>Destete</label>';
                                            }else{
                                                echo '<label><input disabled type="checkbox" value="Destete" id="checkbox24" name="destete" onclick="">Destete</label>';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-1">
                                        <div class="radio">
                                            <?php if ($c_alimentacion['cereales']=='SI') {
                                                echo '<label><input disabled type="checkbox" value="Cereales" id="checkbox25" name="cereales" onclick="" checked>Cereales</label>';
                                            }else{
                                                echo '<label><input disabled type="checkbox" value="Cereales" id="checkbox25" name="cereales" onclick="">Cereales</label>';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <?php if ($c_alimentacion['sopas']=='SI') {
                                                echo '<label><input disabled type="checkbox" value="Sopas" id="checkbox26" name="sopas" onclick="" checked>Sopas</label>';
                                            }else{
                                                echo '<label><input disabled type="checkbox" value="Sopas" id="checkbox26" name="sopas" onclick="">Sopas</label>';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <?php if ($c_alimentacion['huevos']=='SI') {
                                                echo '<label><input disabled type="checkbox" value="Huevos" id="checkbox27" name="huevos" onclick="" checked>Huevos</label>';
                                            }else{
                                                echo '<label><input disabled type="checkbox" value="Huevos" id="checkbox27" name="huevos" onclick="">Huevos</label>';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-1">
                                        <div class="radio">
                                            <?php if ($c_alimentacion['carnes']=='SI') {
                                                echo '<label><input disabled type="checkbox" value="Carnes" id="checkbox28" name="carnes" onclick="" checked>Carnes</label>';
                                            }else{
                                                echo '<label><input disabled type="checkbox" value="Carnes" id="checkbox28" name="carnes" onclick="">Carnes</label>';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <?php if ($c_alimentacion['vitaminas']=='SI') {
                                                echo '<label><input disabled type="checkbox" value="Vitaminas" id="checkbox29" name="vitaminas" onclick="" checked>Vitaminas</label>';
                                            }else{
                                                echo '<label><input disabled type="checkbox" value="Vitaminas" id="checkbox29" name="vitaminas" onclick="">Vitaminas</label>';
                                            }
                                            ?>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <?php if ($c_alimentacion['frutas']=='SI') {
                                                echo '<label><input disabled type="checkbox" value="Frutas" id="checkbox30" name="frutas" onclick="" checked>Frutas</label>';
                                            }else{
                                                echo '<label><input disabled type="checkbox" value="Frutas" id="checkbox30" name="frutas" onclick="">Frutas</label>';
                                            }
                                            ?>
                                            
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-1">
                                        <div class="radio">
                                            <?php if ($c_alimentacion['vegetales']=='SI') {
                                                echo '<label><input disabled type="checkbox" value="Vegetales" id="checkbox31" name="vegetales" onclick="" checked>Vegetales</label>';
                                            }else{
                                                echo '<label><input disabled type="checkbox" value="Vegetales" id="checkbox31" name="vegetales" onclick="">Vegetales</label>';
                                            }
                                            ?>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <?php if ($c_alimentacion['mixta']=='Mixta') {
                                                echo '<label><input disabled type="checkbox" value="Mixta" id="checkbox32" name="mixta" onclick="" checked>Mixta</label>';
                                            }else{
                                                echo '<label><input disabled type="checkbox" value="Mixta" id="checkbox32" name="mixta" onclick="">Mixta</label>';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <?php if ($c_alimentacion['dieta']=='SI') {
                                                echo '<label><input disabled type="checkbox" value="DietaActual" id="checkbox33" name="dieta" onclick="" checked>Dieta Actual</label>';
                                            }else{
                                                echo '<label><input disabled type="checkbox" value="DietaActual" id="checkbox33" name="dieta" onclick="">Dieta Actual</label>';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    </div>
                                    <?php 
                                        if (!$c_alimentacion['inptdieta']=='N/A') { 
                                    ?>
                                            <div class="row">
                                            <div class="col-lg-3">
                                                 <input disabled type="text" class="form-control" id="inptdieta" name="inptdieta" placeholder="<?php echo $c_alimentacion['inptdieta']; ?>">
                                            </div>
                                            </div>
                                    <?php 
                                        } 
                                    ?>
                                </div>
                            </div>
                            <div class="col-lg-4"></div>    
                        </div>
                        <div class="form-group">   
                        </div>
                    </div>
                    <?php 
                        $habitos=$obj->consultar("SELECT * FROM habitos_psicologicos WHERE cod_habit_psico ='".$fila['cod_habit_psico']."'")or die("");
                            foreach ($habitos as $c_habitos) {
                            }
                        ?>
                    <div class="row">
                                <h4 class="text-center" class="formlegend">Hábitos Psicológicos:</h4>
                                <br/>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-1"></div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptsuenio" name="inptsuenio" placeholder="<?php echo $c_habitos['suenio']; ?>">
                                            <h6>Sueño</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptsiesta" name="inptsiesta" placeholder="<?php echo $c_habitos['siesta']; ?>">
                                            <h6>Siesta</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptjuego" name="inptjuego" placeholder="<?php echo $c_habitos['juego']; ?>">
                                            <h6>Juego</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptsexo" name="inptsexo" placeholder="<?php echo $c_habitos['sexo']; ?>">
                                            <h6>Juegos Sexuales</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptChupaDedos" name="inptChupaDedos" placeholder="<?php echo $c_habitos['chupadedos']; ?>">
                                            <h6>Chupa Dedos</h6>
                                        </div>
                                        <div class="col-lg-1"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-1"></div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptComeUnia" name="inptComeUnia" placeholder="<?php echo $c_habitos['comeunia']; ?>">
                                            <h6>Come Uñas</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptRasgos" name="inptRasgos" placeholder="<?php echo $c_habitos['rasgos']; ?>">
                                            <h6>Rasgos</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptRecreacion" name="inptRecreacion" placeholder="<?php echo $c_habitos['recreacion']; ?>">
                                            <h6>Recreación</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptOcupacion" name="inptOcupacion" placeholder="<?php echo $c_habitos['ocupacion']; ?>">
                                            <h6>Ocupación</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptHabOtros" name="inptHabOtros" placeholder="<?php echo $c_habitos['habotros']; ?>">
                                            <h6>Otros</h6>
                                        </div>
                                        <div class="col-lg-1"></div>
                                    </div>
                                </div>
                                <br/><br/>
                                <?php 
                                $inmu=$obj->consultar("SELECT * FROM inmunizantes_pruebas WHERE cod_inmu_pruebas ='".$fila['cod_inmu_pruebas']."'")or die("");
                                    foreach ($inmu as $c_inmu) {
                                    }
                                ?>
                                <h4 class="text-center" class="formlegend">Inmunizantes y Pruebas:</h4>
                                <br/>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-1"></div>
                                        <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptViruela" name="inptViruela" placeholder="<?php echo $c_inmu['viruela']; ?>">
                                        <h6>Viruela</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptTos" name="inptTos" placeholder="<?php echo $c_inmu['tos']; ?>">
                                        <h6>Tos Ferina</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptDiafteria" name="inptDiafteria" placeholder="<?php echo $c_inmu['siafteria']; ?>">
                                        <h6>Diafteria</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptTetano" name="inptTetano" placeholder="<?php echo $c_inmu['tetano']; ?>">
                                        <h6>Tetanos</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptTifica" name="inptTifica" placeholder="<?php echo $c_inmu['tifica']; ?>">
                                        <h6>Tifica</h6>
                                    </div>
                                        <div class="col-lg-1"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptBCG" name="inptBCG" placeholder="<?php echo$c_inmu['bcg']; ?>">
                                        <h6>B.C.G</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptPolio" name="inptPolio" placeholder="<?php echo $c_inmu['polio']; ?>">
                                        <h6>Polio</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptTuber" name="inptTuber" placeholder="<?php echo $c_inmu['tuber']; ?>">
                                        <h6>Tuberculosis</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptOtras" name="inptOtras" placeholder="<?php echo $c_inmu['otras']; ?>">
                                        <h6>Otras</h6>
                                    </div>
                                        <div class="col-lg-2"></div>
                                    </div>
                                </div>
                                <br/><br/>
                                <?php 
                                $antecedentes=$obj->consultar("SELECT * FROM antecedentes_personales WHERE cod_ant_per ='".$fila['cod_ant_per']."'")or die("");
                                    foreach ($antecedentes as $c_antecedentes) {
                                    }
                                ?>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h4 class="text-center" class="formlegend">Antecedentes Personales:</h4>
                                    </div>
                                    <div class="col-lg-6">
                                        <h4 class="text-center" class="formlegend">Historia Familiar:</h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-1">
                                        <div class="radio">
                                            <?php if ($c_antecedentes['sarampion']=='SI') {
                                                echo '<label><input disabled type="checkbox" value="Sarampión" id="checkbox1" name="sarampion" checked />Sarampión</label>';
                                            }else{
                                                echo '<label><input disabled type="checkbox" value="Sarampión" id="checkbox1" name="sarampion" />Sarampión</label>';
                                            }
                                            ?>
                                            
                                        </div>
                                    </div>
                                                <div class="col-lg-1">
                                                    <div class="radio">
                                                        <?php if ($c_antecedentes['ferina']=='SI') {
                                                            echo '<label><input disabled type="checkbox" value="Tos Ferina" id="checkbox1" name="ferina" checked />Tos ferina</label>';
                                                        }else{
                                                            echo '<label><input disabled type="checkbox" value="Tos Ferina" id="checkbox1" name="ferina" />Tos ferina</label>';
                                                        }
                                                        ?>
                                                        
                                                    </div>
                                    </div>
                                                <div class="col-lg-1">
                                                    <div class="radio">
                                                        <?php if ($c_antecedentes['rubeola']=='SI') {
                                                            echo '<label><input disabled type="checkbox" value="Rubeola" id="checkbox1" name="rubeola" />Rubéola</label>';
                                                        }else{
                                                            echo '<label><input disabled type="checkbox" value="Rubeola" id="checkbox1" name="rubeola" />Rubéola</label>';
                                                        }
                                                        ?>
                                                        
                                                    </div>
                                    </div>
                                                <div class="col-lg-1">
                                                    <div class="radio">
                                                        <?php if ($c_antecedentes['parotiditis']=='SI') {
                                                            echo '<label><input disabled type="checkbox" value="Parotiditis" id="checkbox1" name="parotiditis" checked />Parotiditis</label>';
                                                        }else{
                                                            echo '<label><input disabled type="checkbox" value="Parotiditis" id="checkbox1" name="parotiditis" />Parotiditis</label>';
                                                        }
                                                        ?>
                                                        
                                                    </div>
                                    </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-1">
                                        <div class="radio">
                                            <?php if ($c_antecedentes['varicela']=='SI') {
                                                echo '<label><input disabled type="checkbox" value="Varicela" id="checkbox1" name="varicela" checked />Varicela</label>';
                                            }else{
                                                echo '<label><input disabled type="checkbox" value="Varicela" id="checkbox1" name="varicela" />Varicela</label>';
                                            }
                                            ?>
                                            
                                        </div>
                                    </div>
                                                <div class="col-lg-1">
                                                    <div class="radio">
                                                        <?php if ($c_antecedentes['difteria']=='SI') {
                                                            echo '<label><input disabled type="checkbox" value="Difteria" id="checkbox1" name="difteria" checked/>Difteria</label>';
                                                        }else{
                                                            echo '<label><input disabled type="checkbox" value="Difteria" id="checkbox1" name="difteria" />Difteria</label>';
                                                        }
                                                        ?>
                                                        
                                                    </div>
                                    </div>
                                                <div class="col-lg-1">
                                                    <div class="radio">
                                                        <?php if ($c_antecedentes['amigdalitis']=='SI') {
                                                            echo '<label><input disabled type="checkbox" value="Amigdalitis" id="checkbox1" name="amigdalitis" checked />Amigdalitis</label>';
                                                        }else{
                                                            echo '<label><input disabled type="checkbox" value="Amigdalitis" id="checkbox1" name="amigdalitis" />Amigdalitis</label>';
                                                        }
                                                        ?>
                                                        
                                                    </div>
                                    </div>
                                                <div class="col-lg-1">
                                                    <div class="radio">
                                                        <?php if ($c_antecedentes['tifoidea']=='SI') {
                                                            echo '<label><input disabled type="checkbox" value="Tifoidea" id="checkbox1" name="tifoidea" checked />Tifoidea</label>';
                                                        }else{
                                                            echo '<label><input disabled type="checkbox" value="Tifoidea" id="checkbox1" name="tifoidea" />Tifoidea</label>';
                                                        }
                                                        ?>
                                                        
                                                    </div>
                                    </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-1">
                                                    <div class="radio">
                                                        <?php if ($c_antecedentes['otitis']=='SI') {
                                                            echo '<label><input disabled type="checkbox" value="Otitis" id="checkbox1" name="otitis" checked />Otitis</label>';
                                                        }else{
                                                            echo '<label><input disabled type="checkbox" value="Otitis" id="checkbox1" name="otitis" />Otitis</label>';
                                                        }
                                                        ?>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-lg-1">
                                                    <div class="radio">
                                                        <?php if ($c_antecedentes['bronquitis']=='SI') {
                                                            echo '<label><input disabled type="checkbox" value="Bronquitis" id="checkbox1" name="bronquitis" checked />Bronquitis</label>';
                                                        }else{
                                                            echo '<label><input disabled type="checkbox" value="Bronquitis" id="checkbox1" name="bronquitis" />Bronquitis</label>';
                                                        }
                                                        ?>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-lg-1">
                                                    <div class="radio">
                                                        <?php if ($c_antecedentes['neumonia']=='SI') {
                                                            echo '<label><input disabled type="checkbox" value="Neumonia" id="checkbox1" name="neumonia" checked />Neumonía</label>';
                                                        }else{
                                                            echo '<label><input disabled type="checkbox" value="Neumonia" id="checkbox1" name="neumonia" />Neumonía</label>';
                                                        }
                                                        ?>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-lg-1">
                                                    <div class="radio">
                                                        <?php if ($c_antecedentes['alergia']=='SI') {
                                                            echo '<label><input disabled type="checkbox" value="Alergia" id="checkbox1" name="alergia" checked />Alergia</label>';
                                                        }else{
                                                            echo '<label><input disabled type="checkbox" value="Alergia" id="checkbox1" name="alergia" />Alergia</label>';
                                                        }
                                                        ?>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-1">
                                        <div class="radio">
                                            <?php if ($c_antecedentes['pleuseria']=='SI') {
                                                echo '<label><input disabled type="checkbox" value="Pleuseria" id="checkbox1" name="pleuseria" checked />Pleuseria</label>';
                                            }else{
                                                echo '<label><input disabled type="checkbox" value="Pleuseria" id="checkbox1" name="pleuseria" />Pleuseria</label>';
                                            }
                                            ?>
                                            
                                        </div>
                                    </div>
                                                <div class="col-lg-1">
                                                    <div class="radio">
                                                        <?php if ($c_antecedentes['influenza']=='SI') {
                                                            echo '<label><input disabled type="checkbox" value="Influenza" id="checkbox1" name="influenza" checked />Influenza</label>';
                                                        }else{
                                                            echo '<label><input disabled type="checkbox" value="Influenza" id="checkbox1" name="influenza" />Influenza</label>';
                                                        }
                                                        ?>
                                                        
                                                    </div>
                                    </div>
                                                <div class="col-lg-1">
                                                    <div class="radio">
                                                        <?php if ($c_antecedentes['malaria']=='SI') {
                                                            echo '<label><input disabled type="checkbox" value="Malaria" id="checkbox1" name="malaria" checked />Malaria</label>';
                                                        }else{
                                                            echo '<label><input disabled type="checkbox" value="Malaria" id="checkbox1" name="malaria" />Malaria</label>';
                                                        }
                                                        ?>
                                                        
                                                    </div>
                                    </div>
                                                <div class="col-lg-1">
                                                    <div class="radio">
                                                        <?php if ($c_antecedentes['bilhar']=='SI') {
                                                            echo '<label><input disabled type="checkbox" value="Bilharziosis" id="checkbox1" name="bilhar" />Bilharziosis</label>';
                                                        }else{
                                                            echo '<label><input disabled type="checkbox" value="Bilharziosis" id="checkbox1" name="bilhar" />Bilharziosis</label>';
                                                        }
                                                        ?>
                                                        
                                                    </div>
                                    </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-1">
                                                    <div class="radio">
                                                        <?php if ($c_antecedentes['artritis']=='SI') {
                                                            echo '<label><input disabled type="checkbox" value="Artritis" id="checkbox1" name="artritis" checked />Artritis</label>';
                                                        }else{
                                                            echo '<label><input disabled type="checkbox" value="Artritis" id="checkbox1" name="artritis" />Artritis</label>';
                                                        }
                                                        ?>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-lg-1">
                                                    <div class="radio">
                                                        <?php if ($c_antecedentes['rinofaring']=='SI') {
                                                            echo '<label><input disabled type="checkbox" value="Rinofaringitis" id="checkbox1" name="rinofaring" checked />Rinofaringitis</label>';
                                                        }else{
                                                            echo '<label><input disabled type="checkbox" value="Rinofaringitis" id="checkbox1" name="rinofaring" />Rinofaringitis</label>';
                                                        }
                                                        ?>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-lg-1">
                                                    <div class="radio">
                                                        <?php if ($c_antecedentes['fiebresProlong']=='SI') {
                                                            echo '<label><input disabled type="checkbox" value="Fiebres Prolongadas" id="checkbox1" name="fiebresProlong" />Fiebres Prolongadas</label>';
                                                        }else{
                                                            echo '<label><input disabled type="checkbox" value="Fiebres Prolongadas" id="checkbox1" name="fiebresProlong" />Fiebres Prolongadas</label>';
                                                        }
                                                        ?>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php 
                                    $hist_fam=$obj->consultar("SELECT * FROM historia_familiar WHERE cod_historia_fam ='".$fila['cod_historia_fam']."'")or die("");
                                        foreach ($hist_fam as $c_hist_fam) {
                                        }
                                    ?>
                                    <div class="col-lg-6">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-1">
                                                    <div class="radio">
                                                        <?php if ($c_hist_fam['cancer']=='SI') {
                                                            echo '<label><input disabled type="checkbox" value="Cáncer" id="checkbox1" name="cancer" checked />Cáncer</label>';
                                                        }else{
                                                            echo '<label><input disabled type="checkbox" value="Cáncer" id="checkbox1" name="cancer" />Cáncer</label>';
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1">
                                                    <div class="radio">
                                                        <?php if ($c_hist_fam['diabete']=='SI') {
                                                            echo '<label><input disabled type="checkbox" value="Diabetes" id="checkbox1" name="diabete" checked />Diabetes</label>';
                                                        }else{
                                                            echo '<label><input disabled type="checkbox" value="Diabetes" id="checkbox1" name="diabete" />Diabetes</label>';
                                                        }
                                                        ?>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-lg-1">
                                                    <div class="radio">
                                                        <?php if ($c_hist_fam['discracia']=='SI') {
                                                            echo '<label><input disabled type="checkbox" value="Discracia" id="checkbox1" name="discracia" checked />Discracia</label>';
                                                        }else{
                                                            echo '<label><input disabled type="checkbox" value="Discracia" id="checkbox1" name="discracia" />Discracia</label>';
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1">
                                                    <div class="radio">
                                                        <?php if ($c_hist_fam['enfrenal']=='SI') {
                                                            echo '<label><input disabled type="checkbox" value="Enfermedad Renal" id="checkbox1" name="enfRenal" checked />Enf. Renal</label>';
                                                        }else{
                                                            echo '<label><input disabled type="checkbox" value="Enfermedad Renal" id="checkbox1" name="enfRenal" />Enf. Renal</label>';
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-1">
                                        <div class="radio">
                                            <?php if ($c_hist_fam['enfcard']=='SI') {
                                                echo '<label><input disabled type="checkbox" value="EnfermedadCardíaca" id="checkbox1" name="enfCard" checked />Enf. Cardíaca</label>';
                                            }else{
                                                echo '<label><input disabled type="checkbox" value="EnfermedadCardíaca" id="checkbox1" name="enfCard" />Enf. Cardíaca</label>';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                             <?php if ($c_hist_fam['antalergia']=='SI') {
                                                echo '<label><input disabled type="checkbox" value="Alergia" id="checkbox1" name="antAlergia" checked />Alergia</label>';
                                            }else{
                                                echo '<label><input disabled type="checkbox" value="Alergia" id="checkbox1" name="antAlergia" />Alergia</label>';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <?php if ($c_hist_fam['antartritis']=='SI') {
                                                echo '<label><input disabled type="checkbox" value="Artritis" id="checkbox1" name="antArtritis" checked />Artritis</label>';
                                            }else{
                                                echo '<label><input disabled type="checkbox" value="Artritis" id="checkbox1" name="antArtritis" />Artritis</label>';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                     <div class="col-lg-1">
                                        <div class="radio">
                                            <?php if ($c_hist_fam['sifilis']=='SI') {
                                                echo '<label><input disabled type="checkbox" value="Sifilis" id="checkbox1" name="sifilis" checked />Sífilis</label>';
                                            }else{
                                                echo '<label><input disabled type="checkbox" value="Sifilis" id="checkbox1" name="sifilis" />Sífilis</label>';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-1">
                                        <div class="radio">
                                            <?php if ($c_hist_fam['tuberculosis']=='SI') {
                                                echo '<label><input disabled type="checkbox" value="Tuberculosis" id="checkbox1" name="tuberculosis" checked />Tuberculosis</label>';
                                            }else{
                                                echo '<label><input disabled type="checkbox" value="Tuberculosis" id="checkbox1" name="tuberculosis" />Tuberculosis</label>';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <?php if ($c_hist_fam['enfdigest']=='SI') {
                                                echo '<label><input disabled type="checkbox" value="EnfermedadDigestiva" id="checkbox1" name="enfDigest" checked />Enf. Digestiva</label>';
                                            }else{
                                                echo '<label><input disabled type="checkbox" value="EnfermedadDigestiva" id="checkbox1" name="enfDigest" />Enf. Digestiva</label>';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <?php if ($c_hist_fam['intoxicacion']=='SI') {
                                                echo '<label><input disabled type="checkbox" value="Intoxicaciones" id="checkbox1" name="intoxicacion" checked />Intoxicación</label>';
                                            }else{
                                                echo '<label><input disabled type="checkbox" value="Intoxicaciones" id="checkbox1" name="intoxicacion" />Intoxicación</label>';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                         <?php if ($c_hist_fam['histfamotros']=='SI') {
                                                echo '<label><input disabled type="checkbox" value="HistFamOtras" id="checkHfam" name="histFamOtros" onclick="" checked />Otros</label>';
                                            }else{
                                                echo '<label><input disabled type="checkbox" value="HistFamOtras" id="checkHfam" name="histFamOtros" onclick="">Otros</label>';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    
                                            </div>
                                            <?php 
                                                if (!$c_hist_fam['inpthistfam']=='N/A') {
                                            ?>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <input disabled type="text" class="form-control" id="inptHistFam" name="inptHistFam" placeholder="<?php echo $c_hist_fam['HistFam']; ?>">
                                                        <h6></h6>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <br/><br/>
                                <div class="form-group">
                                    
                                </div>
                        </div>
                    <div class="row">
                    <?php 
                        $estadGenral=$obj->consultar("SELECT * FROM examen_fisico WHERE cod_examen_fisico ='".$fila['cod_examen_fisico']."'")or die("");
                        foreach ($estadGenral as $c_estadGenral) {
                        }
                    ?> 
                        <h2 class="text-center" class="formlegend">Interrogatorio II</h2>
                        <h6 class="text-center" class="formlegend"><strong>(Examen Físico | Datos Objetivos)</strong></h6>
                        <br />
                        <h4 class="text-center" class="formlegend">Estado General:</h4>
                        <br />
                        <div class="form-group">
                                    <label class="control-label" for=""></label>
                                    <div class="col-sm-3 col-md-4 col-lg-4">
                                        <textarea disabled class="form-control" rows="2" id="condGeneral" name="condGeneral" placeholder="<?php echo $c_estadGenral['condGenerales']; ?>"></textarea>
                                        <h6>Condiciones Generales</h6>
                                    </div>
                                     <div class="col-sm-3 col-md-4 col-lg-4">
                                        <textarea disabled class="form-control" rows="2" id="nutricion" name="nutricion" placeholder="<?php echo $c_estadGenral['nutricion']; ?>"></textarea>
                                        <h6>Nutrición y Desarrollo</h6>
                                    </div>
                                     <div class="col-sm-3 col-md-4 col-lg-4">
                                        <textarea disabled class="form-control" rows="2" id="condOtros" name="condOtros" placeholder="<?php echo $c_estadGenral['codOtros']; ?>"></textarea>
                                        <h6>Otros</h6>
                                    </div>
                                </div>
                        <h4 class="text-center" class="formlegend">Piel Panículo Adiposo y Faneras:</h4>
                        <br /><br />
                        <div class="row">
                        <?php 
                            $examen_fisico=$obj->consultar("SELECT * FROM examen_fisico WHERE cod_examen_fisico ='".$fila['cod_examen_fisico']."'")or die("");
                            foreach ($examen_fisico as $c_exm_fisico) {
                            }
                        ?>
                            <div class="col-lg-1"></div>
                            <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptColor" name="inptColor" placeholder="<?php echo $c_exm_fisico['color']; ?>">
                                        <h6>Color</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptHumedad" name="inptHumedad" placeholder="<?php echo $c_exm_fisico['humedad']; ?>">
                                        <h6>Humedad</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptContext" name="inptContext" placeholder="<?php echo $c_exm_fisico['context']; ?>">
                                        <h6>Contexto</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptPigmento" name="inptPigmento" placeholder="<?php echo $c_exm_fisico['pigmento']; ?>">
                                        <h6>Pigmento</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptHidrata" name="inptHidrata" placeholder="<?php echo $c_exm_fisico['hidrata']; ?>">
                                        <h6>Hidratación</h6>
                                    </div>
                            <div class="col-lg-1"></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptEquismo" name="inptEquismo" placeholder="<?php echo $c_exm_fisico['equismo']; ?>">
                                        <h6>Equismo</h6>
                                    </div>
                            <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptPete" name="inptPete" placeholder="<?php echo $c_exm_fisico['pete']; ?>">
                                        <h6>Petequias</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptCia" name="inptCia" placeholder="<?php echo $c_exm_fisico['cianosis']; ?>">
                                        <h6>Cianosis</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptErup" name="inptErup" placeholder="<?php echo $c_exm_fisico['erup']; ?>">
                                        <h6>Erupción</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptPanic" name="inptPanic" placeholder="<?php echo $c_exm_fisico['panic']; ?>">
                                        <h6>Pigmento</h6>
                                    </div>
                            <div class="col-lg-1"></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptTurgor" name="inptTurgor" placeholder="<?php echo $c_exm_fisico['turgor']; ?>">
                                        <h6>Turgor</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptEdema" name="inptEdema" placeholder="<?php echo $c_exm_fisico['edema']; ?>">
                                        <h6>Edema</h6>
                                    </div>
                            <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptUnias" name="inptUnias" placeholder="<?php echo $c_exm_fisico['unias']; ?>">
                                        <h6>Uñas</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptNod" name="inptNod" placeholder="<?php echo $c_exm_fisico['nod']; ?>">
                                        <h6>Nódulos</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptPelos" name="inptPelos" placeholder="<?php echo $c_exm_fisico['pelos']; ?>">
                                        <h6>Pelos</h6>
                                    </div>
                            <div class="col-lg-1"></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptVascula" name="inptVascula" placeholder="<?php echo $c_exm_fisico['vascula']; ?>">
                                        <h6>Vascularización</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptCicatris" name="inptCicatris" placeholder="<?php echo $c_exm_fisico['cicatris']; ?>">
                                        <h6>Cicatris</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptUlcera" name="inptUlcera" placeholder="<?php echo $c_exm_fisico['ulcera']; ?>">
                                        <h6>Ulceras</h6>
                                    </div>
                                <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptFistula" name="inptFistula" placeholder="<?php echo $c_exm_fisico['fistula']; ?>">
                                        <h6>Fistula</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inpOtros" name="inpOtros" placeholder="<?php echo $c_exm_fisico['otros']; ?>">
                                        <h6>Otros</h6>
                                    </div>
                            <div class="col-lg-1"></div>
                        </div>
                        <br /><br />
                        <h4 class="text-center" class="formlegend">Cabeza:</h4>
                        <br />
                        <div class="row">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptConf" name="inptConf" placeholder="<?php echo $c_exm_fisico['conf']; ?>">
                                        <h6>Configuración</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptFront" name="inptFront" placeholder="<?php echo $c_exm_fisico['front']; ?>">
                                        <h6>Frontales</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptSutura" name="inptSutura" placeholder="<?php echo $c_exm_fisico['sutura']; ?>">
                                        <h6>Suturas</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptCircunf" name="inptCircunf" placeholder="<?php echo $c_exm_fisico['circunf']; ?>">
                                        <h6>Circunferencia</h6>
                                    </div>
                            <div class="col-lg-2"></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptCraneo" name="inptCraneo" placeholder="<?php echo $c_exm_fisico['craneo']; ?>">
                                        <h6>Cráneo</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptCabello" name="inptCabello" placeholder="<?php echo $c_exm_fisico['cabello']; ?>">
                                        <h6>Cabello</h6>
                                    </div>
                            <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptOtros" name="inptOtroscabe" placeholder="<?php echo $c_exm_fisico['otroscabe']; ?>">
                                        <h6>Otros</h6>
                                    </div>
                            <div class="col-lg-3"></div>
                        </div>
                        <br /><br />
                        <h4 class="text-center" class="formlegend">Ojos:</h4>
                        <br />
                        <div class="row">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptConjuntiva" name="inptConjunti" placeholder="<?php echo $c_exm_fisico['conjunti']; ?>">
                                        <h6>Conjuntiva</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptEsclero" name="inptEsclero" placeholder="<?php echo $c_exm_fisico['esclero']; ?>">
                                        <h6>Esclerotica</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptCornea" name="inptCornea" placeholder="<?php echo $c_exm_fisico['cornea']; ?>">
                                        <h6>Cornea</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptPupila" name="inptPupila" placeholder="<?php echo $c_exm_fisico['pupila']; ?>">
                                        <h6>Pupilas</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptMovie" name="inptMovie" placeholder="<?php echo $c_exm_fisico['movie']; ?>">
                                        <h6>Movimiento</h6>
                                    </div>
                            <div class="col-lg-1"></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-2">
                                       <input disabled type="text" class="form-control" id="inptDesvia" name="inptDesvia" placeholder="<?php echo $c_exm_fisico['desvia']; ?>">
                                       <h6>Desviación</h6>
                                    </div>
                            <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptNistag" name="inptNistag" placeholder="<?php echo $c_exm_fisico['nistag']; ?>">
                                        <h6>Nistagmus</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptPtosis" name="inptPtosis" placeholder="<?php echo $c_exm_fisico['ptosis']; ?>">
                                        <h6>Ptosis</h6>
                                    </div>
                                    <div class="col-lg-2">
                                       <input disabled type="text" class="form-control" id="inptExostalmo" name="inptExostalmo" placeholder="<?php echo $c_exm_fisico['exostalmo']; ?>">
                                       <h6>Exostalmo</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptOftalmo" name="inptOftalmo" placeholder="<?php echo $c_exm_fisico['oftalmo']; ?>">
                                        <h6>Oftalmo</h6>
                                    </div>
                            <div class="col-lg-1"></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-5"></div>
                            <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptOjo" name="inptOjo" placeholder="<?php echo $c_exm_fisico['ojo']; ?>">
                                        <h6>Otros</h6>
                                    </div>
                            <div class="col-lg-5"></div>
                        </div>
                    </div>
                    <br/><br/>
                    <div class="row">
                        <h4 class="text-center" class="formlegend">Oídos:</h4>
                        <br/>
                        <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptPabellon" name="inptPabellon" placeholder="<?php echo $c_exm_fisico['pabellon']; ?>">
                                        <h6>Pabellon</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptCanal" name="inptCanal" placeholder="<?php echo $c_exm_fisico['canal']; ?>">
                                        <h6>Canal</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptTimpano" name="inptTimpano" placeholder="<?php echo $c_exm_fisico['timpano']; ?>">
                                        <h6>Timpano</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptAudicion" name="inptAudicion" placeholder="<?php echo $c_exm_fisico['audicion']; ?>">
                                        <h6>Audición</h6>
                                    </div>
                                        <div class="col-lg-2"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptSecre" name="inptSecre" placeholder="<?php echo $c_exm_fisico['secre']); ?>">
                                            <h6>Secreción</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inptMastoide" name="inptMastoide" placeholder="<?php echo $c_exm_fisico['mastoide']; ?>">
                                            <h6>Mastoide</h6>
                                        </div>
                                        <div class="col-lg-2">
                                             <input disabled type="text" class="form-control" id="inptDolor" name="inptDolor" placeholder="<?php echo $c_exm_fisico['dolor']; ?>">
                                             <h6>Dolor</h6>
                                        </div>
                                        <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="selectInpOtro" name="selectInpOtro" placeholder="<?php echo $c_exm_fisico['selectinpotro']; ?>">
                                            <h6>Otros</h6>
                                        </div>
                                        
                                        <div class="col-lg-2"></div>
                                    </div>
                                </div>
                        <br/><br/>
                        <h4 class="text-center" class="formlegend">Rinofaringe:</h4>
                        <br/>
                        <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptFosas" name="inptFosas" placeholder="<?php echo $c_exm_fisico['fosas']; ?>">
                                        <h6>Fosas Nasales</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptMucosa" name="inptMucosa" placeholder="<?php echo $c_exm_fisico['mucosa']; ?>">
                                        <h6>Mucosa</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptSecrecion" name="inptSecrecion" placeholder="<?php echo $c_exm_fisico['secrecion']; ?>">
                                        <h6>Secreción Nasal</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptTabique" name="inptTabique" placeholder="<?php echo $c_exm_fisico['tabique']; ?>">
                                        <h6>Tabique</h6>
                                    </div>
                                        <div class="col-lg-2"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptAcceso" name="inptAcceso" placeholder="<?php echo $c_exm_fisico['acceso']; ?>">
                                        <h6>Acceso</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptDiasfa" name="inptDiasfa" placeholder="<?php echo $c_exm_fisico['diasfa']; ?>">
                                        <h6>Diasfateria</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptAmigdala" name="inptAmigdala" placeholder="<?php echo $c_exm_fisico['amigdala']; ?>">
                                        <h6>Amigdalas</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptFaringe" name="inptFaringe" placeholder="<?php echo $c_exm_fisico['faringe']; ?>">
                                        <h6>Faringe</h6>
                                    </div>
                                        <div class="col-lg-2"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                            <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptAdenoide" name="inptAdenoide" placeholder="<?php echo $c_exm_fisico['adenoide']; ?>">
                                        <h6>Adenoide</h6>
                                    </div>
                                    <div class="col-lg-2">
                                         <input disabled type="text" class="form-control" id="inptPosnasal" name="inptPosnasal" placeholder="<?php echo $c_exm_fisico['posnasal']; ?>">
                                         <h6>Posnasal</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptDisfagia" name="inptDisfagia" placeholder="<?php echo $c_exm_fisico['disfagia']; ?>">
                                        <h6>Disfagia</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inFaOtro" name="inFaOtro" placeholder="<?php echo $c_exm_fisico['infaotro']; ?>">
                                        <h6>Otros</h6>
                                    </div>
                                        <div class="col-lg-2"></div>
                                    </div>
                                </div>
                        <br/><br/>
                        <h4 class="text-center" class="formlegend">Boca:</h4>
                        <br/>
                        <div class="form-group">
                            <div class="row">
                                        <div class="col-lg-1"></div>
                                        <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptAliento" name="inptAliento" placeholder="<?php echo $c_exm_fisico['aliento']; ?>">
                                        <h6>Aliento</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptLabios" name="inptLabios" placeholder="<?php echo $c_exm_fisico['labios']; ?>">
                                        <h6>Labios</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptDiente" name="inptDiente" placeholder="<?php echo $c_exm_fisico['diente']; ?>">
                                        <h6>Dientes</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptEncia" name="inptEncia" placeholder="<?php echo $c_exm_fisico['encia']; ?>">
                                        <h6>Encias</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptBmucosa" name="inptBmucosa" placeholder="<?php echo $c_exm_fisico['bmucosa']; ?>">
                                        <h6>Mucosa</h6>
                                    </div>
                                        <div class="col-lg-1"></div>
                                    </div>
                            <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptLengua" name="inptLengua" placeholder="<?php echo $c_exm_fisico['lengua']; ?>">
                                        <h6>Lengua</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptConducto" name="inptConducto" placeholder="<?php echo $c_exm_fisico['conducto']; ?>">
                                        <h6>Conducto</h6>
                                    </div>
                                    <div class="col-lg-2">
                                         <input disabled type="text" class="form-control" id="inptParalisis" name="inptParalisis" placeholder="<?php echo $c_exm_fisico['paralisis']; ?>">
                                         <h6>Paralisis</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptBotros" name="inptBotros" placeholder="<?php echo $c_exm_fisico['botros']; ?>">
                                        <h6>Otros</h6>
                                    </div>
                                        <div class="col-lg-2"></div>
                                    </div>
                        </div>
                    </div>
                    <div class="row">
                        <h4 class="text-center" class="formlegend">Cuello:</h4>
                        <br/>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-3"></div>
                                <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptMovilidad" name="inptMovilidad" placeholder="<?php echo $c_exm_fisico['movilidad']; ?>">
                                        <h6>Movilidad</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptTumoracion" name="inptTumoracion" placeholder="<?php echo $c_exm_fisico['tumoracion']; ?>">
                                        <h6>Tumoración</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptTiroide" name="inptTiroide" placeholder="<?php echo $c_exm_fisico['tiroide']; ?>">
                                        <h6>Tiroíde</h6>
                                    </div>
                                <div class="col-lg-3"></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3"></div>
                                <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptVasos" name="inptVasos" placeholder="<?php echo $c_exm_fisico['vasos']; ?>">
                                        <h6>Vasos</h6>
                                    </div>
                                    <div class="col-lg-2">
                                         <input disabled type="text" class="form-control" id="inptTraquea" name="inptTraquea" placeholder="<?php echo $c_exm_fisico['traquea']; ?>">
                                         <h6>Tráquea</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptCuello" name="inptCuello" placeholder="<?php echo $c_exm_fisico['cuello']; ?>">
                                        <h6>Otros</h6>
                                    </div>
                                <div class="col-lg-3"></div>
                            </div>
                        </div>
                        <br/><br/>
                        <h4 class="text-center" class="formlegend">Ganglios Linfaticos:</h4>
                        <br/>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptCervical" name="inptCervical" placeholder="<?php echo $c_exm_fisico['cervical']; ?>">
                                        <h6>Cervicales</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptOccipital" name="inptOccipital" placeholder="<?php echo $c_exm_fisico['occipital']; ?>">
                                        <h6>Occipitales</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptSupra" name="inptSupra" placeholder="<?php echo $c_exm_fisico['supra']; ?>">
                                        <h6>Supraclavicula</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptAxilar" name="inptAxilar" placeholder="<?php echo $c_exm_fisico['axilar']; ?>">
                                        <h6>Axilares</h6>
                                    </div>
                                <div class="col-lg-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3"></div>
                                <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptInguinal" name="inptInguinal" placeholder="<?php echo $c_exm_fisico['inguinal']; ?>">
                                        <h6>Inguinales</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptEpi" name="inptEpi" placeholder="<?php echo $c_exm_fisico['epi']; ?>">
                                        <h6>Epitroclares</h6>
                                    </div>
                                    <div class="col-lg-2">
                                         <input disabled type="text" class="form-control" id="inptGotros" name="inptGotros" placeholder="<?php echo $c_exm_fisico['gotros']; ?>">
                                         <h6>Otros</h6>
                                    </div>
                                
                                <div class="col-lg-3"></div>
                            </div>
                        </div>
                        <br/><br/>
                        <h4 class="text-center" class="formlegend">Tórax y Pulmones:</h4>
                        <br/>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-2">
                                         <input disabled type="text" class="form-control" id="inptForma" name="inptForma" placeholder="<?php echo $c_exm_fisico['forma']; ?>">
                                         <h6>Forma</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptSimetria" name="inptSimetria" placeholder="<?php echo $c_exm_fisico['simetria']; ?>">
                                        <h6>Simetria</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptExpansion" name="inptExpansion" placeholder="<?php echo $c_exm_fisico['expansion']; ?>">
                                        <h6>Expansión</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptPercusion" name="inptPercusion" placeholder="<?php echo $c_exm_fisico['percusion']; ?>">
                                        <h6>Percusión</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptRuido" name="inptRuido" placeholder="<?php echo $c_exm_fisico['ruido']; ?>">
                                        <h6>Ruido</h6>
                                    </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2"></div>
                                 <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptPapitacion" name="inptPapitacion" placeholder="<?php echo $c_exm_fisico['papitacion']; ?>">
                                        <h6>Palpitación</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptRespcion" name="inptRespcion" placeholder="<?php echo $c_exm_fisico['respcion']; ?>">
                                        <h6>Respiración (tipo y r.)</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptRespcion_min" name="inptRespcion_min" placeholder="<?php echo $c_exm_fisico['respcion_min']; ?>">
                                        <h6>Respiración Por Minutos</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptToraxOtro" name="inptToraxOtro" placeholder="<?php echo $c_exm_fisico['toraxotro']; ?>">
                                        <h6>Otros</h6>
                                    </div>
                                    <?php } ?>
                                <div class="col-lg-2"></div>
                            </div>
                        </div>
                        <a href="?view=models&action=generarPDF" target="_blank" class="btn btn-primary" role="button">Imprimir PDF</a>
                        <a href="?view=vistas&action=consultaPaciente" class="btn btn-success" role="button">Volver</a>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</main>

<?php include(FOOTER_CORE . 'public/footer.html'); ?>