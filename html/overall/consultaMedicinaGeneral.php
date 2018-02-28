<?php require_once(ACCESO_DENEGADO . 'controllers/accesoDenegado.php');?>
<?php include(HEADER .'public/headerBootstrap.html'); ?>
<?php require_once (MODELS . 'conexion.php'); ?>
<?php
require MODELS . 'controlDB.php';
$obj = new controlDB();
?>
<img src="view/img/banner2.png" class="img-responsive" alt="" style="display:flex; margin:0 auto;">

<script src="view/js/functions.js" type="text/javascript"></script>
<link rel="stylesheet" href="view/style_formularioNewMedicinaGeneral.css" type="text/css" >
<link rel="stylesheet" href="view/rightnav.css" type="text/css" />
<?php  $_SESSION['id_pac']; ?>
<?php 

$datos=$obj->consultar("SELECT * FROM medicina_general WHERE cod_paciente='".$_SESSION['id_pac']."'")or die("");
    foreach ($datos as $fila) {
            //echo $fila['cod_admision'];
        }
?>


<!--**************************************************************************************************************************************!-->
<main>
    <section>
        <!--<h4 class="text-center" class="formlegend"><img src="view/img/report.png"></img>Registro de Medicina General</h4>-->
        <div class="container">
            <form id="formMedGenral" class="form-horizontal" action="?view=models&action=registroMedGeneral" method="POST" enctype="multipart/form-data" name="formMedGenral">

                <!--admision-->
                <fieldset>
                    <section style="text-align: right;">
                        <div>
                            <div class="col-sm-10 col-md-10 col-lg-10"> 
                                <h2 class="text-center" class="formlegend"><img src="view/img/report.png"></img>Consulta de Medicina General</h2>
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
                                    <label class="control-label col-sm-4" for="">Genero perteneciente a la Historia:</label>
                                    <?php
                                        $obj = new controlDB();
                                        $datos=$obj->consultar("SELECT cod_genero FROM paciente WHERE cedula_paciente='".$_SESSION['cedulaPaciente']."'")or die("");
                                        foreach ($datos as $genero) {
                                            $c_genero=$genero['cod_genero'];
                                        }
                                        if($c_genero=='1'){
                                            $html='<div class="col-lg-2">
                                                        <div class="radio">
                                                          <label><input disabled type="radio" value="Dama" name="radio" id="show" checked="checked">Dama</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="radio">
                                                          <label><input disabled type="radio" value="Caballero" name="radio" id="hide">Caballero</label>
                                                        </div>
                                                    </div>';
                                        }else{
                                            $html='<div class="col-lg-2">
                                                        <div class="radio">
                                                          <label><input disabled type="radio" value="Dama" name="radio" id="show" onclick="">Dama</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
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
                                    <?php $_SESSION['cedulaPaciente']; ?>
                                        <input type="hidden" value="<?php echo $_SESSION['cedulaPaciente']; ?>" name="cedulaPac" id="cedulaPac" placeholder="?php echo $_SESSION['cedulaPaciente']; ?>">
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                    </div>
                                </div>
                                <div class="form-group">
                                            <label class="control-label" for="mtvadmin"></label>
                                            <div class="col-sm-4 col-md-4 col-lg-4">
                                            <?php 
                                            $conAdmin=$obj->consultar("SELECT * FROM admision WHERE cod_admision='".$fila['cod_admision']."'")or die("");
                                            foreach ($conAdmin as $c_admin) {
                                            
                                            }
                                             ?> 
                                                <textarea disabled class="form-control" rows="2" id="mtvadmin" name="mtvadmin" placeholder="<?php echo $c_admin["mtvadmin"]; ?>"></textarea>
                                                <h6>Motivo de Admisión</h6>
                                                <div id="emtvadmin"></div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-3">
                                                <textarea disabled class="form-control" rows="2" id="enfactual" name="enfactual" placeholder="<?php echo $c_admin["enfactual"]; ?>"></textarea>
                                                <h6>Enfermedad Actual</h6>
                                                <div id="eEnfermedad"></div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4">
                                                <textarea disabled class="form-control" rows="2" id="diag" name="diag" placeholder="<?php echo $c_admin["diag"]; ?>"></textarea>
                                                <h6>Diagnóstico de Admisión</h6>
                                            </div>
                                    </div>
                                </div>
                                <div class="" style="display: block; padding: top;">
                                <div class="form-group">
                                        <label class="control-label col-sm-2" for="diagclin">Diagnóstico Clínico Final</label>
                                        <div class="col-sm-4 col-md-4 col-lg-4">
                                          <input disabled type="text" class="form-control" name="diagclin" id="diagclin" placeholder="<?php echo $c_admin["diagclin"]; ?>">
                                        </div>
                                        <div class="col-sm-4 col-md-4 col-lg-4">
                                          <input disabled type="text" class="form-control" name="otrosdiag" id="otrosdiag" placeholder="<?php echo $c_admin["otrosdiag"]; ?>">
                                        </div>
                                        <label style="text-align: lef;" class="control-label col-sm-2 text-left" for="otrosdiag">Otros Diagnósticos</label>
                                </div>
                                <div class="form-group">
                                        <label class="control-label" for="interPrincipal"></label>
                                        <div class="col-sm-3 col-md-6 col-lg-6">
                                            <textarea disabled class="form-control" rows="2" id="interPrincipal" name="interPrincipal" placeholder="<?php echo $c_admin["interprincipal"]; ?>"></textarea>
                                            <h6>Intervención Principal</h6>
                                            <div id="eintervencion"></div>
                                        </div>
                                        <div class="col-sm-3 col-md-6 col-lg-6">
                                            <textarea disabled class="form-control" rows="2" id="otrosdiag2" name="diagFinal" placeholder="<?php echo $c_admin["otrosdiag2"]; ?>"></textarea>
                                            <h6>Intervenciones Anteriores</h6>
                                            <div id="eintervencion"></div>
                                        </div>
                                </div>
                            </div>
                        </div>
                <!-- Historia Médica -->
                <?php 
                    $antFam=$obj->consultar("SELECT * FROM antecedentes_patologicos_familiares WHERE cod_ant_pat_fam='".$fila['cod_ant_pat_fam']."'")or die("");
                    foreach ($antFam as $fam) {
                        //echo $fam["cod_ant_pat_fam"];
                    }
                 ?>
                            <div class="row">
                                <h2 class="text-center" class="formlegend">Interrogatorio</h2>
                                    <h4 class="text-center" class="formlegend">Historia I:</h4>
                                    <h6 class="text-center" class="formlegend"><strong>Estado de Salud y/o Causa de Muerte, u Ambiente y Problemas Familiares</strong></h6>
                                    <div class="form-group">
                                            <div class="col-sm-3 col-md-4 col-lg-6">
                                                <textarea disabled class="form-control" rows="2" id="textAnalisis" name="estado" placeholder="<?php echo $fam["estado_salud_fam"]; ?>"></textarea>
                                                <h6>Analisis Estado de Salud y/o Causa de Muerte</h6>
                                            </div>
                                            <div class="col-sm-3 col-md-4 col-lg-6">
                                                <textarea disabled class="form-control" rows="2" id="textAmbiente" name="ambiente" placeholder="<?php echo $fam["ambiente_fam"]; ?>"></textarea>
                                                <h6>Descripción Ambiente y Problemas Familiares</h6>
                                            </div>
                                        </div>
                                    <h6 class="text-center" class="formlegend"><strong>Antecedentes Patologicos Familiares:</strong></h6>
                                    <div class="form-group">
                                        <?php 

                                            if ($fam["alcoholismo"]=="SI") {
                                                echo '<div class="col-lg-1">
                                                        <div class="radio">
                                                        <label><input disabled type="checkbox" value="alcoholismo" id="checkbox1" name="alcoholismo" checked><h6>alcoholismo</h6></label>
                                                        </div>
                                                    </div>';
                                            }else{
                                                echo '<div class="col-lg-1">
                                                        <div class="radio">
                                                        <label><input disabled type="checkbox" value="alcoholismo" id="checkbox1" name="alcoholismo"><h6>alcoholismo</h6></label>
                                                        </div>
                                                    </div>';
                                            }
                                        ?>
                                        <?php 

                                        if ($fam["toxicomanias"]=="SI") {
                                            echo '<div class="col-lg-1">
                                                    <div class="radio">
                                                        <label><input disabled type="checkbox" value="Toxicomanías" id="checkbox1" name="toxicomanias" checked><h6>Toxicomanías</h6></label>
                                                    </div>
                                                </div>';
                                        }else{
                                            echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="toxicomanias" id="checkbox1" name="toxicomanias" onclick=""><h6></h6></label>
                                            </div>
                                        </div>';
                                        }
                                         ?>
                                        <?php 

                                        if ($fam["cancer"]=="SI") {
                                            echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="cancer" id="checkbox1" name="cancer" checked><h6>Cáncer</h6></label>
                                            </div>
                                        </div>';
                                        } else {
                                            echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="cancer" id="checkbox1" name="cancer"><h6>Cáncer</h6></label>
                                            </div>
                                        </div>';
                                        }
                                        
                                         ?>
                                
                                        <?php 

                                        if ($fam["enfer_alergicas"]=="SI") {
                                            echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="enfer_alergicas" id="checkbox1" name="enfAlergica" checked><h6>Enfer. Alérgicas</h6></label>
                                            </div>
                                        </div>';
                                        } else {
                                            echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="enfer_alergicas" id="checkbox1" name="enfAlergica"><h6>Enfer. Alérgicas</h6></label>
                                            </div>
                                        </div>';
                                        }
                                        
                                         ?>
                                         
                                        <?php 

                                        if ($fam["metabolismo"]=="SI") {
                                            echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="metabolismo" id="checkbox1" name="metabolicas" checked><h6>Metabólicas y endocrinas</h6></label>
                                            </div>
                                        </div>';
                                        } else {
                                            echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="metabolismo" id="checkbox1" name="metabolicas"><h6>Metabólicas y endocrinas</h6></label>
                                            </div>
                                        </div>';
                                        }
                                        
                                         ?>
                                        
                                        <?php 

                                        if ($fam["discrasias"]=="SI") {
                                            echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="discrasias" id="checkbox1" name="discracia" checked><h6>Discrasias sanguíneas</h6></label>
                                            </div>
                                        </div>';
                                        } else {
                                            echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="discrasias" id="checkbox1" name="discracia"><h6>Discrasias sanguíneas</h6></label>
                                            </div>
                                        </div>';
                                        }
                                        
                                         ?>
                                        
                                        <?php 

                                        if ($fam["sifilis"]=="SI") {
                                            echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="sifilis" id="checkbox1" name="sifilis2" checked><h6>Sífilis</h6></label>
                                            </div>
                                        </div>';
                                        } else {
                                            echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="sifilis" id="checkbox1" name="sifilis2"><h6>Sífilis</h6></label>
                                            </div>
                                        </div>';
                                        }
                                        
                                         ?>
                                        
                                        <?php 

                                        if ($fam["tbc"]=="SI") {
                                            echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="tbc" id="checkbox1" name="tbc" checked><h6>T.B.C.</h6></label>
                                                    </div>
                                                </div>';
                                        } else {
                                            echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="tbc" id="checkbox1" name="tbc"><h6>T.B.C.</h6></label>
                                            </div>
                                        </div>';
                                        }
                                        
                                         ?>
                                        
                                        <?php 

                                        if ($fam["hansen"]=="SI") {
                                            echo ' <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="hansen" id="checkbox1" name="hansen2" checked><h6>Hansen</h6></label>
                                            </div>
                                        </div>';
                                        } else {
                                            echo ' <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="hansen" id="checkbox1" name="hansen2"><h6>Hansen</h6></label>
                                            </div>
                                        </div>';
                                        }
                                        
                                         ?>
                                        
                                        <?php 

                                        if ($fam["toxicomanias"]=="SI") {
                                            echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="neuropsicopatia" id="checkbox1" name="neuropsicopatia" checked><h6>Neuropsicopatía</h6></label>
                                            </div>
                                        </div>';
                                        } else {
                                            echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="neuropsicopatia" id="checkbox1" name="neuropsicopatia"><h6>Neuropsicopatía</h6></label>
                                            </div>
                                        </div>';
                                        }
                                        
                                         ?>
                                        
                                    </div>
                                    <?php 

                                        if ($fam["otras"]=="SI") {
                                            echo '<div class="form-group">
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="otras" id="checkAntFamOtros" name="famOtros" checked><h6>Otras</h6></label>
                                            </div>
                                        </div>';
                                        } else {
                                            echo '<div class="form-group">
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="otras" id="checkAntFamOtros" name="famOtros"><h6>Otras</h6></label>
                                            </div>
                                        </div>';
                                        }
                                        
                                         ?>
                                        <?php 

                                        if ($fam["otras"]=="SI") {
                                            ?>

                                            <div class="col-lg-3">
                                            <input disabled type="text" class="form-control" id="inpAntFamily" name="anteFamOtros" placeholder="<?php echo $fam["inptOtras"]; ?>">
                                        </div>
                                        <?php

                                        } else {
                                          ?>  
                                        <div class="col-lg-3">
                                            <input disabled type="hidden" class="form-control" id="inpAntFamily" name="anteFamOtros">
                                        </div>
                                        <?php
                                        }
                                         ?>
                                    </div>
                                    <h4 class="text-center" class="formlegend">Historia II:</h4>
                                    <h6 class="text-center" class="formlegend"><strong>Habitos Psico-Biologicos:</strong></h6>
                                    <?php 

                                    $habPsico=$obj->consultar("SELECT * FROM habitos_psicologicos_adulto WHERE cod_hab_psico='".$fila['cod_hab_psico']."'");
                                        foreach ($habPsico as $habAdulto) {
                                            # code...
                                        }
                                        //echo $habAdulto['cod_hab_psico'];

                                     ?>
                                     <?php 

                                     if ($habAdulto['ocup']=="SI") {
                                         echo '<div class="form-group">
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="ocup" id="checkOcup" name="ocupacion" checked><h6>Ocupación</h6></label>
                                            </div>
                                        </div>';
                                     } else {
                                         echo '<div class="form-group">
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="ocup" id="checkOcup" name="ocupacion"><h6>Ocupación</h6></label>
                                            </div>
                                        </div>';
                                     }
                                      ?>
                                    
                                        <?php 

                                     if ($habAdulto['ocup']=="SI") {
                                     ?>
                                     <div class="col-lg-3">
                                            <input disabled type="text" class="form-control" id="inptOcup" name="inptOcup" placeholder="<?php echo $habAdulto['inptOcup']; ?>">
                                        </div>
                                     <?php
                                     } else {
                                     ?>
                                        <div class="col-lg-3">
                                            <input disabled type="hidden" class="form-control" id="inptOcup" name="inptOcup">
                                        </div>
                                     
                                    <?php
                                     }
                                      ?>    
                                    <?php 

                                     if ($habAdulto['nutric']=="SI") {
                                        echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="nutric" id="checkbNutricion" name="nutricion" checked><h6>Nutrición (calidad y cantidad)</h6></label>
                                            </div>
                                        </div>'; 
                                     } else {
                                         echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="nutric" id="checkbNutricion" name="nutricion"><h6>Nutrición (calidad y cantidad)</h6></label>
                                            </div>
                                        </div>';
                                     }
                                      ?>
                                    <?php
                                        if ($habAdulto['nutric']=="SI") {
                                     ?>
                                        <div class="col-lg-3">
                                            <input disabled type="text" class="form-control" id="inptNutricion" name="inptNutricion" placeholder="<?php echo $habAdulto['inpNutric']; ?>">
                                        </div>
                                     <?php
                                     } else {
                                     ?>
                                     <div class="col-lg-3">
                                            <input disabled type="hidden" class="form-control" id="inptNutricion" name="inptNutricion">
                                        </div>
                                    <?php
                                     }
                                      ?>
                                    <?php 

                                     if ($habAdulto['sex']=="SI") {
                                         echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="sex" id="checkSex" name="sexuales" checked><h6>Sexuales</h6></label>
                                            </div>
                                        </div>';
                                     } else {
                                         echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="sex" id="checkSex" name="sexuales"><h6>Sexuales</h6></label>
                                            </div>
                                        </div>';
                                     }
                                      ?>
                                        <?php
                                        if ($habAdulto['sex']=="SI") {  
                                     ?>
                                         <div class="col-lg-3">
                                            <input disabled type="text" class="form-control" id="inptSex" name="inptSex" placeholder="<?php echo $habAdulto['inpSex']; ?>">
                                        </div>
                                    </div>
                                     <?php
                                     } else {
                                     ?>
                                         <div class="col-lg-3">
                                            <input disabled type="hidden" class="form-control" id="inptSex" name="inptSex">
                                        </div>
                                    </div>
                                    <?php
                                     }
                                      ?>
                                    <?php 

                                     if ($habAdulto['suenios']=="SI") {
                                         echo '<div class="form-group">
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="suenios" id="checkSuenio" name="Suenio" checked><h6>Sueños</h6></label>
                                            </div>
                                        </div>';
                                     } else {
                                         echo '<div class="form-group">
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="suenios" id="checkSuenio" name="Suenio"><h6>Sueños</h6></label>
                                            </div>
                                        </div>';
                                     }
                                      ?>
                                        <?php
                                        if ($habAdulto['suenios']=="SI") { 
                                     ?>
                                     <div class="col-lg-3">
                                            <input disabled type="text" class="form-control" id="inptSuenio" name="inptSuenio" placeholder="<?php echo $habAdulto['inpSuenios']; ?>">
                                        </div>
                                     <?php
                                     } else {
                                     ?>
                                       <div class="col-lg-3">
                                            <input disabled type="hidden" class="form-control" id="inptSuenio" name="inptSuenio">
                                        </div> 
                                    <?php
                                     }
                                      ?>
                                        
                                        <?php 

                                     if ($habAdulto['rec']=="SI") {
                                         echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="rec" id="checkRecrea" name="recrea" checked><h6>Recreaciones</h6></label>
                                            </div>
                                        </div>';
                                     } else {
                                         echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="rec" id="checkRecrea" name="recrea"><h6>Recreaciones</h6></label>
                                            </div>
                                        </div>';
                                     }
                                      ?>
                                        <?php
                                        if ($habAdulto['rec']=="SI") {
                                     ?>
                                        <div class="col-lg-3">
                                            <input disabled type="text" class="form-control" id="inptRecrea" name="inptRecrea" placeholder="<?php echo $habAdulto['inpRecrea']; ?>">
                                        </div>
                                     <?php
                                     } else {
                                     ?>
                                        <div class="col-lg-3">
                                            <input disabled type="hidden" class="form-control" id="inptRecrea" name="inptRecrea">
                                        </div>
                                    <?php
                                     }
                                      ?>
                                        <?php 

                                     if ($habAdulto['aseos']=="SI") {
                                         echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="aseos" id="checkAseo" name="aseo" checked><h6>Aseo</h6></label>
                                            </div>
                                        </div>';
                                     } else {
                                         echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="aseos" id="checkAseo" name="aseo"><h6>Aseo</h6></label>
                                            </div>
                                        </div>';
                                     }
                                      ?>
                                    <?php
                                        if ($habAdulto['aseos']=="SI") { 
                                     ?>
                                        <div class="col-lg-3">
                                            <input disabled type="text" class="form-control" id="inptAseo" name="inptAseo" placeholder="<?php echo $habAdulto['inpAseo']; ?>">
                                        </div>
                                    </div>
                                     <?php
                                     } else {
                                     ?>
                                        <div class="col-lg-3">
                                            <input disabled type="hidden" class="form-control" id="inptAseo" name="inptAseo">
                                        </div>
                                    </div>
                                     
                                    <?php
                                     }
                                      ?>
                                        
                            </div>
                <!-- Antecedentes -->
                    <div class="row">
                                <h6 class="text-center" class="formlegend"><strong>Pruebas Biológicas e Inmunizantes</strong></h6>
                                <?php 

                                $bioInm=$obj->consultar("SELECT * FROM inmunizaciones WHERE cod_inmu='".$fila['cod_inmu']."'");
                                foreach ($bioInm as $c_bioInm) {
                                  //echo $c_bioInm['cod_inmu'];
                                }
                                ?>
                                <div class="form-group">
                                    <?php 

                                    if ($c_bioInm['schick']=="SI") {
                                        echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="schick" id="checkbox1" name="schick" checked><h6>Schick</h6></label>
                                            </div>
                                        </div>';
                                    } else {
                                        echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="schick" id="checkbox1" name="schick" c><h6>Schick</h6></label>
                                            </div>
                                        </div>';
                                    }
                                    

                                    ?>
                                    <?php 
                                    if ($c_bioInm['tuberculina']=="SI") {
                                        echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="tuberculina" id="checkbox1" name="tuberculina" checked><h6>Tuberculina</h6></label>
                                            </div>
                                        </div>';
                                    } else {
                                        echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="tuberculina" id="checkbox1" name="tuberculina"><h6>Tuberculina</h6></label>
                                            </div>
                                        </div>';
                                    }
                                    
                                    ?>
                                    <?php 
                                    if ($c_bioInm['frel']=="SI") {
                                        echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="frel" id="checkbox1" name="frel" checked><h6>Frel</h6></label>
                                            </div>
                                        </div>';
                                    } else {
                                        echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="frel" id="checkbox1" name="frel"><h6>Frel</h6></label>
                                            </div>
                                        </div>';
                                    }
                                    ?>
                                        
                                    <?php 
                                    if ($c_bioInm['bilhar']=="SI") {
                                        echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="bilhar" id="checkbox1" name="bilhar" checked><h6>Bilharzia</h6></label>
                                            </div>
                                        </div>';
                                    } else {
                                        echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="bilhar" id="checkbox1" name="bilhar" ><h6>Bilharzia</h6></label>
                                            </div>
                                        </div>';
                                    }
                                    ?>
                                        
                                    <?php 
                                    if ($c_bioInm['coccide']=="SI") {
                                        echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="coccide" id="checkbox1" name="coccide" checked><h6>Coccidicidina</h6></label>
                                            </div>
                                        </div>';
                                    } else {
                                        echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="coccide" id="checkbox1" name="coccide"><h6>Coccidicidina</h6></label>
                                            </div>
                                        </div>';
                                    }
                                    ?>
                                        
                                    <?php 
                                    if ($c_bioInm['histoplasmina']=="SI") {
                                        echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="histoplasmina" id="checkbox1" name="histoplasmina" checked><h6>Histoplasmina</h6></label>
                                            </div>
                                        </div>';
                                    } else {
                                        echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="histoplasmina" id="checkbox1" name="histoplasmina"><h6>Histoplasmina</h6></label>
                                            </div>
                                        </div>';
                                    }
                                    ?>
                                    <?php 
                                    if ($c_bioInm['pruebaAlerg']=="SI") {
                                        echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="pruebaAlerg" id="checkbox1" name="pruebaAlerg" checked><h6>Pruebas alérgicas</h6></label>
                                            </div>
                                        </div>';
                                    } else {
                                        echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="pruebaAlerg" id="checkbox1" name="pruebaAlerg"><h6>Pruebas alérgicas</h6></label>
                                            </div>
                                        </div>';
                                    }
                                    
                                    ?>
                                        
                                    <?php 
                                    if ($c_bioInm['viruela']=="SI") {
                                        echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="viruela" id="checkbox1" name="viruela" checked><h6>Viruela</h6></label>
                                            </div>
                                        </div>';
                                    } else {
                                        echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="viruela" id="checkbox1" name="viruela"><h6>Viruela</h6></label>
                                            </div>
                                        </div>';
                                    }
                                    
                                    ?>
                                        <?php 
                                    if ($c_bioInm['difteria']=="SI") {
                                        echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="difteria" id="checkbox1" name="difteria" checked><h6>Difteria</h6></label>
                                            </div>
                                        </div>';
                                    } else {
                                        echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="difteria" id="checkbox1" name="difteria"><h6>Difteria</h6></label>
                                            </div>
                                        </div>';
                                    }
                                    
                                    ?>
                                        
                                        <?php 
                                    if ($c_bioInm['tosferina']=="SI") {
                                        echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="tosferina" id="checkbox1" name="tosferina" checked><h6>Tosferina</h6></label>
                                            </div>
                                        </div>';
                                    } else {
                                        echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="tosferina" id="checkbox1" name="tosferina"><h6>Tosferina</h6></label>
                                            </div>
                                        </div>';
                                    }
                                    
                                    ?>
                                        
                                        <?php 
                                    if ($c_bioInm['tetanos']=="SI") {
                                        echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="tetanos" id="checkbox1" name="tetanos" checked><h6>Tétanos</h6></label>
                                            </div>
                                        </div>';
                                    } else {
                                        echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="tetanos" id="checkbox1" name="tetanos"><h6>Tétanos</h6></label>
                                            </div>
                                        </div>';
                                    }
                                    
                                    ?>
                                    <?php 
                                    if ($c_bioInm['tifica']=="SI") {
                                        echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="tifica" id="checkbox1" name="tifica" ><h6>Tífica</h6></label>
                                            </div>
                                        </div>';
                                    } else {
                                        echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="tifica" id="checkbox1" name="tifica" ><h6>Tífica</h6></label>
                                            </div>
                                        </div>';
                                    }
                                    
                                    ?>
                                </div>
                                <div class="form-group">
                                    <?php 
                                    if ($c_bioInm['bcg']=="SI") {
                                        echo '<div class="col-lg-1">
                                        <div class="radio">
                                                <label><input disabled type="checkbox" value="bcg" id="checkbox1" name="bcg" checked><h6>B.C.G</h6></label>
                                            </div>
                                        </div>';
                                    } else {
                                        echo '
                                        <div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="bcg" id="checkbox1" name="bcg"><h6>B.C.G</h6></label>
                                            </div>
                                        </div>';
                                    }
                                    
                                    ?>
                                        <?php 
                                    if ($c_bioInm['salk']=="SI") {
                                        echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="salk" id="checkbox1" name="salk" checked><h6>Salk</h6></label>
                                            </div>
                                        </div>';
                                    } else {
                                        echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="salk" id="checkbox1" name="salk"><h6>Salk</h6></label>
                                            </div>
                                        </div>';
                                    }
                                    
                                    ?>
                                        
                                        <?php 
                                    if ($c_bioInm['amarilla']=="SI") {
                                        echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="amarilla" id="checkbox1" name="amarilla" checked><h6>Amarilla</h6></label>
                                            </div>
                                        </div>';
                                    } else {
                                        echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="amarilla" id="checkbox1" name="amarilla"><h6>Amarilla</h6></label>
                                            </div>
                                        </div>';
                                    }
                                    
                                    ?>
                                        
                                        <?php 
                                    if ($c_bioInm['serologia']=="SI") {
                                        echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="serologia" id="checkSerolog" name="serologia" checked><h6>Reacciones Serológicas</h6></label>
                                            </div>
                                        </div>';
                                    } else {
                                        echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="serologia" id="checkSerolog" name="serologia"><h6>Reacciones Serológicas</h6></label>
                                            </div>
                                        </div>';
                                    }
                                    
                                    ?>
                                    <?php
                                    if ($c_bioInm['serologia']=="SI") { 
                                     ?>
                                     <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptSerologia" name="inptSerologia" placeholder="<?php echo $c_bioInm['inpSerologia']; ?>">
                                    </div>
                                     <?php
                                     } else {
                                     ?>
                                     <div>
                                        <input disabled type="hidden" class="form-control" id="inptSerologia" name="inptSerologia">
                                    </div>
                                    <?php
                                     }
                                      ?>
                                    <?php 
                                    if ($c_bioInm['inmuOtros']=="SI") {
                                        echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="inmuOtros" id="checkInmuOtras" name="inmuOtros" checked><h6>Otras</h6></label>
                                            </div>
                                        </div>';
                                    } else {
                                        echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="inmuOtros" id="checkInmuOtras" name="inmuOtros"><h6>Otras</h6></label>
                                            </div>
                                        </div>';
                                    }
                                    ?>   
                                    <?php
                                    if ($c_bioInm['inmuOtros']=="SI") { 
                                     ?>
                                     <div class="col-lg-2">
                                            <input disabled type="text" class="form-control" id="inpInmuOtros" name="inptInmuOtros" placeholder="<?php echo $c_bioInm['inpInmuOtros']; ?>">
                                        </div>
                                     <?php
                                     } else {
                                     ?>
                                    <div>
                                        <input disabled type="hidden" class="form-control" id="inpInmuOtros" name="inptInmuOtros">
                                    </div>
                                    <?php
                                     }
                                      ?>
                                        

                                    </div>
                                <h6 class="text-center" class="formlegend"><strong>Antecedentes Patológicos:</strong></h6>
                                <?php
                                $antPat=$obj->consultar("SELECT * FROM antecedetes_patologicos WHERE cod_ant_pat='".$fila['cod_ant_pat']."'");
                                foreach ($antPat as $c_antPat) {
                                   //$c_antPat['cod_ant_pat'];
                                }
                                ?>
                                <div class="form-group">
                                <?php 
                                    if ($c_antPat['eruptivas']=="SI") {
                                         echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="eruptivas" id="checkbox1" name="eruptivas" checked><h6>Eruptivas</h6></label>
                                            </div>
                                        </div>';       
                                    }else{
                                         echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="eruptivas" id="checkbox1" name="eruptivas"><h6>Eruptivas</h6></label>
                                            </div>
                                        </div>';       
                                    }
                                ?>
                                <?php
                                if ($c_antPat['difteria']=="SI") {
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="difteria" id="checkbox1" name="difteria2" checked><h6>Difteria</h6></label>
                                            </div>
                                        </div>';
                                }else{
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="difteria" id="checkbox1" name="difteria2"><h6>Difteria</h6></label>
                                            </div>
                                        </div>';
                                }
                                ?>
                                <?php 
                                if ($c_antPat['parotiditis']=="SI") {
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="parotiditis" id="checkbox1" name="parotiditis" checked><h6>Parotiditis</h6></label>
                                            </div>
                                        </div>';
                                }else{
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="parotiditis" id="checkbox1" name="parotiditis"><h6>Parotiditis</h6></label>
                                            </div>
                                        </div>';
                                }
                                ?>    
                                <?php 
                                if ($c_antPat['gripe']=="SI") {
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="gripe" id="checkbox1" name="gripe" checked><h6>Gripe</h6></label>
                                            </div>
                                        </div>';
                                }else{
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="gripe" id="checkbox1" name="gripe"><h6>Gripe</h6></label>
                                            </div>
                                        </div>';
                                }
                                ?>       
                                <?php 
                                if ($c_antPat['influenza']=="SI") {
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="influenza" id="checkbox1" name="influenza" checked><h6>Influenza</h6></label>
                                            </div>
                                        </div>';
                                }else{
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="influenza" id="checkbox1" name="influenza"><h6>Influenza</h6></label>
                                            </div>
                                        </div>';
                                }
                                ?>        
                                        
                                <?php 
                                if ($c_antPat['tifo']=="SI") {
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="tifo" id="checkbox1" name="tifo" checked><h6>Tifo-Paratilo</h6></label>
                                            </div>
                                        </div>';
                                }else{
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="tifo" id="checkbox1" name="tifo"><h6>Tifo-Paratilo</h6></label>
                                            </div>
                                        </div>';
                                }
                                ?>        
                                        
                                <?php 
                                if ($c_antPat['tbc']=="SI") {
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="tbc" id="checkbox1" name="tbc2" checked><h6>T.B.C.</h6></label>
                                            </div>
                                        </div>';
                                }else{
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="tbc" id="checkbox1" name="tbc2"><h6>T.B.C.</h6></label>
                                            </div>
                                        </div>';
                                }
                                ?>
                                <?php 
                                if ($c_antPat['hansen2']=="SI") {
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="hansen2" id="checkbox1" name="hansen2" checked><h6>Hansen</h6></label>
                                            </div>
                                        </div>';
                                }else{
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="hansen2" id="checkbox1" name="hansen2" checked><h6>Hansen</h6></label>
                                            </div>
                                        </div>';
                                }
                                ?>   
                                <?php 
                                if ($c_antPat['chagas']=="SI") {
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="chagas" id="checkbox1" name="chagas" checked><h6>Chagas</h6></label>
                                            </div>
                                        </div>';
                                }else{
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="chagas" id="checkbox1" name="chagas"><h6>Chagas</h6></label>
                                            </div>
                                        </div>';
                                }
                                ?>  
                                <?php 
                                if ($c_antPat['bubas']=="SI") {
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="bubas" id="checkbox1" name="bubas" checked><h6>Bubas</h6></label>
                                            </div>
                                        </div>';
                                }else{
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="bubas" id="checkbox1" name="bubas"><h6>Bubas</h6></label>
                                            </div>
                                        </div>';
                                }
                                ?>
                                <?php 
                                if ($c_antPat['chancros']=="SI") {
                                  echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="chancros" id="checkbox1" name="chancros" checked><h6>Chancros</h6></label>
                                            </div>
                                        </div>'; 
                                }else{
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="chancros" id="checkbox1" name="chancros"><h6>Chancros</h6></label>
                                            </div>
                                        </div>';
                                }
                                ?>
                                <?php 
                                if ($c_antPat['sifilis']=="SI") {
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="sifilis" id="checkbox1" name="sifilis" checked><h6>Sífilis Tardia</h6></label>
                                            </div>
                                        </div>';
                                }else{
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="sifilis" id="checkbox1" name="sifilis" checked><h6>Sífilis Tardia</h6></label>
                                            </div>
                                        </div>';
                                }
                                ?>
                                </div>
                                <div class="form-group">
                                <?php 
                                if ($c_antPat['blenorragia']=="SI") {
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="blenorragia" id="checkbox1" name="blenorragia" checked><h6>Blenorragia</h6></label>
                                            </div>
                                        </div>';
                                }else{
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="blenorragia" id="checkbox1" name="blenorragia" checked><h6>Blenorragia</h6></label>
                                            </div>
                                        </div>';
                                }
                                ?>
                                <?php 
                                if ($c_antPat['linfo']=="SI") {
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="linfo" id="checkbox1" name="linfo" checked><h6>Linfogranuforma</h6></label>
                                            </div>
                                        </div>';
                                }else{
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="linfo" id="checkbox1" name="linfo"><h6>Linfogranuforma</h6></label>
                                            </div>
                                        </div>';
                                }
                                ?>
                                <?php 
                                if ($c_antPat['necatoriasis']=="SI") {
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="necatoriasis" id="checkbox1" name="necatoriasis" checked><h6>Necatoriasis</h6></label>
                                            </div>
                                        </div>';
                                }else{
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="necatoriasis" id="checkbox1" name="necatoriasis"><h6>Necatoriasis</h6></label>
                                            </div>
                                        </div>';
                                }
                                ?>
                                <?php 
                                if ($c_antPat['bilhar2']=="SI") {
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="bilhar2" id="checkbox1" name="bilhar2" checked><h6>Bilharzia</h6></label>
                                            </div>
                                        </div>';
                                }else{
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="bilhar2" id="checkbox1" name="bilhar2"><h6>Bilharzia</h6></label>
                                            </div>
                                        </div>';
                                }
                                ?>
                                <?php 
                                if ($c_antPat['amibiasis']=="SI") {
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="amibiasis" id="checkbox1" name="amibiasis" checked><h6>Amibiasis</h6></label>
                                            </div>
                                        </div>';
                                }else{
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="amibiasis" id="checkbox1" name="amibiasis"><h6>Amibiasis</h6></label>
                                            </div>
                                        </div>';
                                }
                                ?>
                                <?php 
                                if ($c_antPat['micosis']=="SI") {
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="micosis" id="checkbox1" name="micosis" checked><h6>Micosis</h6></label>
                                            </div>
                                        </div>';
                                }else{
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="micosis" id="checkbox1" name="micosis" checked><h6>Micosis</h6></label>
                                            </div>
                                        </div>';
                                }
                                ?>
                                <?php 
                                if ($c_antPat['paludismo']=="SI") {
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="paludismo" id="checkbox1" name="paludismo" checked><h6>Paludismo</h6></label>
                                            </div>
                                        </div>';
                                }else{
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="paludismo" id="checkbox1" name="paludismo"><h6>Paludismo</h6></label>
                                            </div>
                                        </div>';
                                }
                                ?>
                                <?php 
                                if ($c_antPat['conjuntivitis']=="SI") {
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="conjuntivitis" id="checkbox1" name="conjuntivitis" checked><h6>Conjuntivitis</h6></label>
                                            </div>
                                        </div>';
                                }else{
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="conjuntivitis" id="checkbox1" name="conjuntivitis"><h6>Conjuntivitis</h6></label>
                                            </div>
                                        </div>';
                                }
                                ?>
                                <?php 
                                 if ($c_antPat['sinusitis']=="SI") {
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="sinusitis" id="checkbox1" name="sinusitis" checked><h6>Sinusitis</h6></label>
                                            </div>
                                        </div>';
                                }else{
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="sinusitis" id="checkbox1" name="sinusitis"><h6>Sinusitis</h6></label>
                                            </div>
                                        </div>';
                                }
                                ?>
                                <?php 
                                if ($c_antPat['amigdalitis']=="SI") {
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="amigdalitis" id="checkbox1" name="amigdalitis" checked><h6>Amigdalitis</h6></label>
                                            </div>
                                        </div>';
                                }else{
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="amigdalitis" id="checkbox1" name="amigdalitis"><h6>Amigdalitis</h6></label>
                                            </div>
                                        </div>';
                                }
                                ?>
                                <?php 
                                if ($c_antPat['otitis']) {
                                    echo'<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="otitis" id="checkbox1" name="otitis" checked><h6>Otitis</h6></label>
                                            </div>
                                        </div>';
                                }else{
                                    echo'<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="otitis" id="checkbox1" name="otitis"><h6>Otitis</h6></label>
                                            </div>
                                        </div>';
                                }
                                ?>
                                <?php 
                                if ($c_antPat['adenopatias']=="SI") {
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="ad" id="checkbox1" name="adenopatias" checked><h6>Adenopatías</h6></label
                                            </div>
                                        </div>';
                                }else{
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="ad" id="checkbox1" name="adenopatias"><h6>Adenopatías</h6></label
                                            </div>
                                        </div>';
                                }
                                ?>
                                </div>
                                <div class="form-group">
                                <?php 
                                if ($c_antPat['asma']=="SI") {
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="asma" id="checkbox1" name="asma" checked><h6>Asma</h6></label>
                                            </div>
                                        </div>';
                                }else{
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="asma" id="checkbox1" name="asma"><h6>Asma</h6></label>
                                            </div>
                                        </div>';
                                }
                                ?>
                                <?php 
                                if ($c_antPat['bronco']) {
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="bronco" id="checkbox1" name="bronco" checked><h6>Bronco neumopatias</h6></label>
                                            </div>
                                        </div>';
                                }else{
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="bronco" id="checkbox1" name="bronco"><h6>Bronco neumopatias</h6></label>
                                            </div>
                                        </div>';
                                }
                                ?>
                                <?php 
                                if ($c_antPat['gastrioatias']=="SI") {
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="gastrioatias" id="checkbox1" name="gastrioatias" checked><h6>Gastropatías</h6></label>
                                            </div>
                                        </div>';
                                }else{
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="gastrioatias" id="checkbox1" name="gastrioatias"><h6>Gastropatías</h6></label>
                                            </div>
                                        </div>';
                                }
                                ?>
                                        
                                <?php 
                                if ($c_antPat['cardio']=="SI") {
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="cardio" id="checkbox1" name="cardio" checked><h6>Cardiopatías</h6></label>
                                            </div>
                                        </div>';
                                }else{
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="cardio" id="checkbox1" name="cardio"><h6>Cardiopatías</h6></label>
                                            </div>
                                        </div>';
                                }
                                ?>
                                <?php 
                                if ($c_antPat['sindrome']) {
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="sindrome" id="checkbox1" name="sindrome" checked><h6>Síndrome alérgico</h6></label>
                                            </div>
                                        </div>';
                                }else{
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="sindrome" id="checkbox1" name="sindrome"><h6>Síndrome alérgico</h6></label>
                                            </div>
                                        </div>';
                                }
                                ?>
                                <?php 
                                if ($c_antPat['parasitos']=="SI") {
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="parasitos" id="OtrosParac" name="parasitos" checked><h6>Otros parásitos</h6></label>
                                            </div>
                                        </div>';
                                }else{
                                    echo '<div class="col-lg-1">
                                            <div class="radio">
                                                <label><input disabled type="checkbox" value="parasitos" id="OtrosParac" name="parasitos"><h6>Otros parásitos</h6></label>
                                            </div>
                                        </div>';
                                }
                                ?>
                                        
                                <?php 
                                if ($c_antPat['parasitos']=="SI") {
                                ?>
                                <div class="col-lg-2">
                                    <input disabled type="text" class="form-control" id="inptParasitos" name="inptParasitos" placeholder="<?php echo $c_antPat['inptParasitos'];  ?>">
                                </div>
                                <?php
                                }else{
                                ?>
                                <div class="col-lg-2">
                                    <input disabled type="hidden" class="form-control" id="inptParasitos" name="inptParasitos">
                                </div>
                                <?php    
                                }
                                ?>
                                        
                            </div>
                        </div>
                            <a href="?view=vistas&action=menuPrincipal" class="btn btn-success" role="button">Volver</a>
               </fieldset>
            </form>
        </div>
    </section>
</main>