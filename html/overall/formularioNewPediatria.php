<?php require_once(ACCESO_DENEGADO . 'controllers/accesoDenegado.php');?>
<?php include(HEADER .'public/headerBootstrap.html'); ?>
<?php include(HTML_CORE . 'overall/topnav.php'); ?>
<?php //require_once (MODELS . "conexion.php");?>
<img src="view/img/banner2.png" class="img-responsive" alt="" style="display:flex; margin:0 auto;">

<!--esto  es un codigo para que funcione la barra de progreso no se que hace preguntarle a wendy!-->
<?php require_once (MODELS . 'conexion.php');

$obj = new controlDB();
?>

     <script src="view/js/functions.js" type="text/javascript"></script>
    <link rel="stylesheet" href="view/style_formularioNewPediatria.css" type="text/css" >

                              <!-- codigo html del modal-->
<link rel="stylesheet" href="view/rightnav.css" type="text/css" />
  <!--  <nav>
        <ul class="clearfix">
            <li><a href="#"><span class="fontawesome-user"><img src="view/img/doctor.svg"></img></span></a>
                <ul>                                       
                    <li><button style="border: none; background-color: transparent" type="button" data-toggle="modal" data-target="#modal1"><a><span class="fontawesome-google-plus"><img class="" src="view/img/notification.svg" alt=""></span></button></a></li>

                    <li><button style="border: none; background-color: transparent" type="button" data-toggle="modal" data-target="#modal2"><a><span class="fontawesome-google-plus"><img class="" src="view/img/notification.svg" alt=""></span></button></a></li>

                    <li><button style="border: none; background-color: transparent" type="button" data-toggle="modal" data-target="#modal3"><a><span class="fontawesome-google-plus"><img class="" src="view/img/notification.svg" alt=""></span></button></a></li>

                    <li><button style="border: none; background-color: transparent" type="button" data-toggle="modal" data-target="#modal4"><a><span class="fontawesome-google-plus"><img class="" src="view/img/notification.svg" alt=""></span></button></a></li>
                </ul>
            </li>                                                           
        </ul>
    </nav>-->

<!--*********************************************************************************************************************************************************************************************************************************!-->


<main>
    <!--<section style="text-align: center; margin: -20px;">-->
    <!--    <img src="view/img/logo.png" class="logohospital"></img>-->
    <!--    <h5 class="text-center " style="display: inline-block;"><strong class="verdeSecundario">Dr. <?php $user["nombre_usu"]; ?></strong></h5>-->
    <!--</section>-->
    <section>
         <!--<h4 class="text-center" class="formlegend"><img src="view/img/report.png"></img>Registro de Pediatria</h4>-->
            <div class="container">
        <nav>
            <form id="formulario" enctype="multipart/form-data" >
            <ul id="progress">
                <li class="ativo"></li></br></br>
                <li></li></br></br>
                <li></li></br></br>
                <li></li></br></br>
                <li></li></br></br>
                <li></li></br></br>
                <li></li>
            </ul>
            </form>
        </nav>    
            <form id="formPediatria" class="form-horizontal" action="?view=models&action=registroNewPediatria" method="POST" enctype="multipart/form-data" name="formPediatria">                
                <fieldset>
                    <section style="text-align: right;">
                        <div>
                            <div class="col-sm-10 col-md-10 col-lg-10"> 
                                <h2 class="text-center" class="formlegend"><img src="view/img/report.png"></img>Registro de Pedíatria</h2>
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
                    <!--<h5>Datos de Admisión del paciente</h5>-->
                        <div class="" style="display: block; padding: top; margin-top: 30px">  
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
                                    <div class="col-sm-3 col-md-4 col-lg-4"> 
                                        <textarea class="form-control" rows="2" id="mtvadmin" name="mtvadmin" placeholder="Motivo de Admisión"></textarea>
                                        <h6>Motivo de Admisión</h6>
                                        <div id="emtvadmin"></div>
                                    </div>
                                    <div class="col-sm-3 col-md-4 col-lg-4">
                                        <textarea class="form-control" rows="2" id="enfactual" name="enfactual" placeholder="Enfermedad Actual"></textarea>
                                        <h6>Enfermedad Actual</h6>
                                        <div id="eEnfermedad"></div>
                                    </div>
                                    <div class="col-sm-3 col-md-4 col-lg-4">
                                        <textarea class="form-control" rows="2" id="diag" name="diag" placeholder="Diagnóstico de Admisión"></textarea>
                                        <h6>Diagnóstico de Admisión</h6>
    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="diagclin">Diagnóstico Clínico Final</label>
                                    <div class="col-sm-8 col-md-10 col-lg-10">
                                      <input type="text" class="form-control" name="diagclin" id="diagclin">
                                      <div class="" id="ntdiagclin"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="otrosdiag">Otros Diagnósticos</label>
                                    <div class="col-sm-8 col-md-10 col-lg-10">
                                      <input type="text" class="form-control" name="otrosdiag" id="otrosdiag" >
                                      <div class="" id="ntotrosdiag"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="interPrincipal"></label>
                                    <div class="col-sm-3 col-md-6 col-lg-6">
                                        <textarea class="form-control" rows="2" id="interPrincipal" name="interPrincipal" placeholder="Intervención Principal"></textarea>
                                        <h6>Intervención Principal</h6>
                                        <div id="eintervencion"></div>
                                    </div>
                                   <!--  <label class="control-label" for="otrosdiag2"></label>   ARItOR PRENGUNTARME POR QUE L COMENTE-->
                                    <div class="col-sm-3 col-md-6 col-lg-6">
                                        <textarea class="form-control" rows="2" id="otrosdiag2" name="otrosdiag2" placeholder="Intervenciones Anteriores"></textarea>
                                        <h6>Intervenciones Anteriores</h6>
                                        <div id="aintervencion"></div>
                                    </div>
                                </div>
                                <br />
                                <div class="form-group">
                                    <!--deje este campo comentado por ahora pero no lo borren-->
                                    <!--<label class="control-label col-sm-4" for="medico">Nombres y apellidos del Médico</label>-->
                                    <div class="col-sm-4 col-md-4 col-lg-3">
                                    <?php $varuser = $user["cod_usuario"]; //para sacar el nombre del doctor
                                     $sql="select * from doctor where $varuser = cod_usuario"; 
                                     $resultado = $mysqli->query($sql);
                                    while ($fila = mysqli_fetch_assoc($resultado)) {
                                        ?>
                                    <input disabled type="hidden" placeholder="<?php echo utf8_decode($fila['nombres_doc']);?>"/> 
                                    <input type="hidden" name="nombre_doc"  value="<?php echo $vnomdoc=utf8_decode($fila['cod_doc']);?>"/>
                                    <?php } ?>
                                     
                                    </div>
                                </div>
                                <br />
                    </div>
                    </div>    
                                <input type="button" name="next2" class="btn next acao " value="Siguiente" />
                                </fieldset>
                <fieldset>
                        <div class="row">
                                  <legend id="leyenda"><h4>Interrogatorio I</h4>
                                <h6 class="text-center" class="formlegend"><strong>(Datos Informativos)</strong></h6>
                                </legend>
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="">Se Aplica para:</label>
                                    <div class="col-lg-2">
                                        <div class="radio">
                                          <label><input type="radio" value="lactante" name="radio" id="lactante"  onchange="habilitaRadio(this.value);">Lactante</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="radio">
                                          <label><input type="radio" value="infante" name="radio" id="infante"  onchange="habilitaRadio(this.value);" checked="checked">Infante</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input id="date" type="text" placeholder="<?php echo date("Y/m/d"); ?>" name="theDate" />
                                        <h6>Fecha de Nacimiento</h6>
                                    </div>
                                </div>
                                <h4 class="text-center" class="formlegend">Período Neonatal:</h4>
                                <div class="form-group">
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input disabled type="checkbox" value="respiracion" id="checkbox1" name="respirar" onclick="habilitarInput();">Respiración</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <input disabled type="text" class="form-control" id="respira" name="inptrespirar" placeholder="2-1 Espontánea o Artificial">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input disabled type="checkbox" value="Cianosis" id="checkbox2" name="cianosis" onclick="habilitarInput();">Cianosis</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <input disabled type="text" class="form-control" id="cianosis" name="inptcianosis" placeholder="2-2 Cianosis">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input disabled type="checkbox" value="Fiebre" id="checkbox3" name="fiebre" onclick="habilitarInput();">Fiebre</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <input disabled type="text" class="form-control" id="fiebre" name="inptfiebre" placeholder="2-3 Fiebre">
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input disabled type="checkbox" value="Vómitos" id="checkbox4" name="vomitos" onclick="habilitarInput();">Vómitos</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <input disabled type="text" class="form-control" id="vomitos" name="inptvomitos" placeholder="2-4 Vómitos">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input disabled type="checkbox" value="Ictericia" id="checkbox5" name="ictericia" onclick="habilitarInput();">Ictericia</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <input disabled type="text" class="form-control" id="ictericia" name="inptictericia" placeholder="2-5 Ictericia">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input disabled type="checkbox" value="Hemorragia" id="checkbox6" name="hemorragia" onclick="habilitarInput();">Hemorragia</label>
                                        </div>
                                    </div>    
                                    <div class="col-lg-3">
                                        <input disabled type="text" class="form-control" id="hemo" name="inpthemorragia" placeholder="2-6 Hemorragia">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input disabled type="checkbox" value="Convulsiones" id="checkbox7" name="convulsion" onclick="habilitarInput();">Convulsiones</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <input disabled type="text" class="form-control" id="convulsion" name="inptconvulsion" placeholder="2-7 Convulsiones">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input disabled type="checkbox" value="Malformaciones" id="checkbox8" name="malformacion" onclick="habilitarInput();">Malformaciones</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <input disabled type="text" class="form-control" id="malformacion" name="inptmalformacion" placeholder="2-8 Malformaciones">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input disabled type="checkbox" value="Oftalmia" id="checkbox9" name="oftalmia" onclick="habilitarInput();">Oftalmia</label>
                                        </div>
                                    </div>    
                                    <div class="col-lg-3">
                                        <input disabled type="text" class="form-control" id="oftalmia" name="inptoftalmia" placeholder="2-9 Oftalmia">
                                    </div>
                                </div>    
                                <div class="form-group">
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input disabled type="checkbox" value="Coriza" id="checkbox10" name="coriza" onclick="habilitarInput();">Coriza</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <input disabled type="text" class="form-control" id="coriza" name="inptcoricia" placeholder="2-10 Coriza">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input disabled type="checkbox" value="Otros Eventos" id="checkbox11" name="otrosDiag" onclick="habilitarInput();">Otros Eventos</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <input disabled type="text" class="form-control" id="inptotrosDiag" name="inptotros" placeholder="2-11 Otros Eventos">
                                    </div>
                                </div>
                               <h4 class="text-center" class="formlegend">Desarrollo:</h4>
                               <div class="form-group">
                                     <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input disabled type="checkbox" value="Sostuvo la cabeza" id="checkbox12" name="sostuvoCabeza" onclick="habilitarInput();">Sostuvo cabeza</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                        <input disabled type="text" class="form-control" id="inptCabeza" name="inptCabeza" />
                                        <h6>(Meses)</h6>
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input disabled type="checkbox" value="Se sento" id="checkbox13" name="sentar" onclick="habilitarInput();"> Se Sentó</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                        <input disabled type="text" class="form-control" id="inptsentar" name="inptsentar" />
                                        <h6>(Meses)</h6>
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input disabled type="checkbox" value="Se paro" id="checkbox14" name="pararse" onclick="habilitarInput();"> Se Paró</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                        <input disabled type="text" class="form-control" id="inptpararse" name="inptpararse" />
                                        <h6>(Meses)</h6>
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input disabled type="checkbox" value="Camino" id="checkbox15" name="camino" onclick="habilitarInput();">Caminó</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                        <input disabled type="text" class="form-control" id="inptCamino" name="inptCamino" />
                                        <h6>(Meses)</h6>
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input disabled type="checkbox" value="Primeras Palabras" id="checkbox16" name="primeraPalabra" onclick="habilitarInput();">Primeras Palabras</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                        <input disabled type="text" class="form-control" id="inptPalabras" name="inptPalabras" />
                                        <h6>(Meses)</h6>
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input disabled type="checkbox" value="Controlo Esfinter" id="checkbox17" name="controlEsfinter" onclick="habilitarInput();">Controlo Esfinter</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                        <input disabled type="text" class="form-control" id="inptEsfinter" name="inptControl" />
                                        <h6>(Meses)</h6>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input disabled type="checkbox" value="Primer Diente" id="checkbox18" name="primerDiente" onclick="habilitarInput();">Primer Diente</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                        <input disabled type="text" class="form-control" id="inptpDiente" name="inptpDiente" />
                                        <h6>(Meses)</h6>
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input disabled type="checkbox" value="Grado de Escuela" id="checkbox19" name="escuela" onclick="habilitarInput();">Grado</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptEscuela" name="inptEscuela" placeholder="De Escuela" />
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input disabled type="checkbox" value="Progreso en Escuela" id="checkbox20" name="progEscuela" onclick="habilitarInput();">Progreso</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptProgreso" name="inptProgreso" placeholder="En Escuela" />
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="Progreso en Peso" id="checkbox21" name="progPeso" onclick="habilitarInput();">Progreso</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptProgPeso" name="inptProgPeso" placeholder="En Peso" />
                                    </div>
                                </div>
                                <h4 class="text-center" class="formlegend">Alimentación:</h4>
                                <div class="form-group">
                                    <div class="col-lg-2">
                                        <div class="radio">
                                            <label><input type="checkbox" value="SI" id="checkbox22" name="natural1" onclick="">Natural</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="radio">
                                            <label><input type="checkbox" value="SI" id="checkbox23" name="artificial" onclick="">Artificial</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="radio">
                                            <label><input type="checkbox" value="SI" id="checkbox24" name="destete" onclick="">Destete</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="radio">
                                            <label><input type="checkbox" value="SI" id="checkbox25" name="cereales" onclick="">Cereales</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="radio">
                                            <label><input type="checkbox" value="SI" id="checkbox26" name="sopas" onclick="">Sopas</label>
                                        </div>
                                    </div>
                                     <div class="col-lg-2">
                                        <div class="radio">
                                            <label><input type="checkbox" value="SI" id="checkbox27" name="huevos" onclick="">Huevos</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-2">
                                        <div class="radio">
                                            <label><input type="checkbox" value="SI" id="checkbox28" name="carnes" onclick="">Carnes</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="radio">
                                            <label><input type="checkbox" value="SI" id="checkbox29" name="vitaminas" onclick="">Vitaminas</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="radio">
                                            <label><input type="checkbox" value="SI" id="checkbox30" name="frutas" onclick="">Frutas</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="radio">
                                            <label><input type="checkbox" value="SI" id="checkbox31" name="vegetales" onclick="">Vegetales</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="radio">
                                            <label><input type="checkbox" value="SI" id="checkbox32" name="mixta" onclick="">Mixta</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-2">
                                        <div class="radio">
                                            <label><input type="checkbox" value="SI" id="checkbox33" name="dieta" onclick="habilitarInput();">Dieta Actual</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <input disabled type="text" class="form-control" id="inptdieta" name="inptdieta" placeholder="Dieta Actual">
                                    </div>
                                </div>
                                </div>
                                 <input type="button" name="prev" class="btn prev acao " value="Anterior" />
                                 <input type="button" name="next3" class="btn next acao " value="Siguiente" />
                            </fieldset>
                <fieldset>
                    <div class="row">               
                                <h4 class="text-center" class="formlegend">Hábitos Psicológicos:</h4>
                                <div class="form-group">
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="Sueño" id="checkSuenio" name="suenio" onclick="habilitarInput();">Sueño</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <input disabled type="text" class="form-control" id="inptsuenio" name="inptsuenio" placeholder="Sueño">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="Siestas" id="checkSiesta" name="siesta" onclick="habilitarInput();">Siestas</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <input disabled type="text" class="form-control" id="inptsiesta" name="inptsiesta" placeholder="Siestas">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="Juegos" id="checkJuegos" name="juego" onclick="habilitarInput();">Juegos</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <input disabled type="text" class="form-control" id="inptjuego" name="inptjuego" placeholder="Juegos">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="Sexuales" id="checkSex" name="sexual" onclick="habilitarInput();">Sexuales</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <input disabled type="text" class="form-control" id="inptsexo" name="inptsexo" placeholder="Sexuales">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="Chupa Dedos" id="checkDedos" name="chupadedos" onclick="habilitarInput();">Chupa Dedos</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <input disabled type="text" class="form-control" id="inptChupaDedos" name="inptChupaDedos" placeholder="Chupa Dedos">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="Come Uñas" id="checking" name="comeUnia" onclick="habilitarInput();">Come Uñas</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <input disabled type="text" class="form-control" id="inptComeUnia" name="inptComeUnia" placeholder="Come Uñas">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="Rasgos Personales" id="checkRasgos" name="rasgos" onclick="habilitarInput();">Rasgos</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <input disabled type="text" class="form-control" id="inptRasgos" name="inptRasgos" placeholder="Rasgos Personales">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="Recreación" id="checkRecrear" name="recreacion" onclick="habilitarInput();">Recreación</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <input disabled type="text" class="form-control" id="inptRecreacion" name="inptRecreacion" placeholder="Recreación">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="Ocupación" id="checkOcupacion" name="ocupacion" onclick="habilitarInput();">Ocupación</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <input disabled type="text" class="form-control" id="inptOcupacion" name="inptOcupacion" placeholder="Ocupación">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="HabOtros" id="checkOtras" name="habOtros" onclick="habilitarInput();">Otros</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <input disabled type="text" class="form-control" id="inptHabOtros" name="inptHabOtros" placeholder="Otros">
                                    </div>
                                </div>
                                <h4 class="text-center" class="formlegend">Inmunizantes y Pruebas:</h4>
                                <div class="form-group">
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="Viruela" id="checkViruela" name="viruela" onclick="habilitarInput();">Viruela</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <input disabled type="text" class="form-control" id="inptViruela" name="inptViruela" placeholder="viruela">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="Tos ferina" id="checkedTos" name="tosferina" onclick="habilitarInput();">Tos ferina</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <input disabled type="text" class="form-control" id="inptTos" name="inptTos" placeholder="Tos ferina">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="Diafteria" id="checkDiafteria" name="diafteria" onclick="habilitarInput();">Diafteria</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <input disabled type="text" class="form-control" id="inptDiafteria" name="inptDiafteria" placeholder="Diafteria">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="Tetanos" id="checkTetanos" name="tetanos" onclick="habilitarInput();">Tetanos</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <input disabled type="text" class="form-control" id="inptTetano" name="inptTetano" placeholder="Tetanos">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="Tificas" id="checkTifica" name="tificas" onclick="habilitarInput();">Tificas</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <input disabled type="text" class="form-control" id="inptTifica" name="inptTifica" placeholder="Tificas">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="BCG" id="checkBCG" name="bcg" onclick="habilitarInput();">B.C.G.</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <input disabled type="text" class="form-control" id="inptBCG" name="inptBCG" placeholder="B. C. G.">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="Poliomelitis" id="checkPolio" name="polio" onclick="habilitarInput();">Poliomelitis</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <input disabled type="text" class="form-control" id="inptPolio" name="inptPolio" placeholder="Poliomelitis">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="Tuberculina" id="checkTuber" name="tuberculina" onclick="habilitarInput();">Tuberculina</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <input disabled type="text" class="form-control" id="inptTuber" name="inptTuber" placeholder="Tuberculina">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="Otras" id="checkboxOtros" name="pruebOtro" onclick="habilitarInput();">Otras</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <input disabled type="text" class="form-control" id="inptOtras" name="inptOtras" placeholder="Otras">
                                    </div>
                                </div>
                                <h4 class="text-center" class="formlegend">Antecedentes Personales:</h4>
                                <div class="form-group">
                                    <div class="col-lg-2">
                                        <div class="radio">
                                            <label><input type="checkbox" value="SI" id="checkbox1" name="sarampion" />Sarampión</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="radio">
                                            <label><input type="checkbox" value="SI" id="checkbox1" name="ferina" />Tos ferina</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="radio">
                                            <label><input type="checkbox" value="SI" id="checkbox1" name="rubeola" />Rubéola</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="radio">
                                            <label><input type="checkbox" value="SI" id="checkbox1" name="parotiditis" />Parotiditis</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="radio">
                                            <label><input type="checkbox" value="SI" id="checkbox1" name="varicela" />Varicela</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="radio">
                                            <label><input type="checkbox" value="SI" id="checkbox1" name="difteria" />Difteria</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-2">
                                        <div class="radio">
                                            <label><input type="checkbox" value="SI" id="checkbox1" name="amigdalitis" />Amigdalitis</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="radio">
                                            <label><input type="checkbox" value="SI" id="checkbox1" name="tifoidea" />Tifoidea</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="radio">
                                            <label><input type="checkbox" value="SI" id="checkbox1" name="otitis" />Otitis</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="radio">
                                            <label><input type="checkbox" value="SI" id="checkbox1" name="bronquitis" />Bronquitis</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="radio">
                                            <label><input type="checkbox" value="SI" id="checkbox1" name="neumonia" />Neumonía</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="radio">
                                            <label><input type="checkbox" value="SI" id="checkbox1" name="alergia" />Alergia</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-2">
                                        <div class="radio">
                                            <label><input type="checkbox" value="SI" id="checkbox1" name="pleuseria" />Pleuseria</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="radio">
                                            <label><input type="checkbox" value="SI" id="checkbox1" name="influenza" />Influenza</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="radio">
                                            <label><input type="checkbox" value="SI" id="checkbox1" name="malaria" />Malaria</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="radio">
                                            <label><input type="checkbox" value="SI" id="checkbox1" name="bilhar" />Bilharziosis</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="radio">
                                            <label><input type="checkbox" value="SI" id="checkbox1" name="artritis" />Artritis</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="radio">
                                            <label><input type="checkbox" value="SI" id="checkbox1" name="rinofaring" />Rinofaringitis</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-2">
                                        <div class="radio">
                                            <label><input type="checkbox" value="SI" id="checkbox1" name="fiebresProlong" />Fiebres Prolongadas</label>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="text-center" class="formlegend">Historia Familiar:</h4>
                                <div class="form-group">
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="SI" id="checkbox1" name="cancer" />Cáncer</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="SI" id="checkbox1" name="diabete" />Diabetes</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="SI" id="checkbox1" name="discracia" />Discracia</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="SI" id="checkbox1" name="enfRenal" />Enf. Renal</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="SI" id="checkbox1" name="enfCard" />Enf. Cardíaca</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="SI" id="checkbox1" name="antAlergia" />Alergia</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="SI" id="checkbox1" name="antArtritis" />Artritis</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="SI" id="checkbox1" name="sifilis" />Sífilis</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="SI" id="checkbox1" name="tuberculosis" />Tuberculosis</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="SI" id="checkbox1" name="enfDigest" />Enf. Digestiva</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="SI" id="checkbox1" name="intoxicacion" />Intoxicación</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="SI" id="checkHfam" name="histFamOtros" onclick="habilitarInput();">Otros</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <input disabled type="text" class="form-control" id="inptHistFam" name="inptHistFam" placeholder="Otros">
                                    </div>
                                </div>
                        </div>            
                                 <input type="button" name="prev" class="btn prev acao " value="Anterior" />
                                 <input type="button" name="next4" class="btn next acao " value="Siguiente" />
                                </fieldset>
                <fieldset>
                    <div class="row">                   
                                <h2 class="text-center" class="formlegend">Interrogatorio II</h2>
                                <h6 class="text-center" class="formlegend"><strong>(Examen Físico | Datos Objetivos)</strong></h6>
                                <br />
                                <h4 class="text-center" class="formlegend">Estado General:</h4>
                                <div class="form-group">
                                    <label class="control-label" for=""></label>
                                    <div class="col-sm-3 col-md-4 col-lg-4">
                                        <textarea class="form-control" rows="2" id="condGeneral" name="condGeneral" placeholder="Condiciones Generales"></textarea>
                                        <h6>Condiciones Generales</h6>
                                        <div id="econdGeneral"></div>
                                    </div>
                                     <div class="col-sm-3 col-md-4 col-lg-4">
                                        <textarea class="form-control" rows="2" id="nutricion" name="nutricion" placeholder="Nutrición y Desarrollo"></textarea>
                                        <h6>Nutrición y Desarrollo</h6>
                                        <div id="enutricion"></div>
                                    </div>
                                     <div class="col-sm-3 col-md-4 col-lg-4">
                                        <textarea class="form-control" rows="2" id="condOtros" name="condOtros" placeholder="Otros"></textarea>
                                        <h6>Otros</h6>
                                        <div id="econdOtros"></div>
                                    </div>
                                </div>
                                <h4 class="text-center" class="formlegend">Piel Panículo Adiposo y Faneras:</h4>
                               <div class="form-group">
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="Color" id="checkColor" name="colorPiel" onclick="habilitarInput();">Color</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptColor" name="inptColor" placeholder="Color">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkHumedad" name="humedad" onclick="habilitarInput();">Humedad</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptHumedad" name="inptHumedad" placeholder="Humedad">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkContext" name="contextura" onclick="habilitarInput();">Contextura</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptContext" name="inptContext" placeholder="Contextura">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkPigmento" name="pigmento" onclick="habilitarInput();">Pigmentación</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptPigmento" name="inptPigmento" placeholder="Pigmentación">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkHidrata" name="hidratacion" onclick="habilitarInput();">Hidratación</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptHidrata" name="inptHidrata" placeholder="Hidratación">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkEquismo" name="equimosis" onclick="habilitarInput();">Equimosis</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptEquismo" name="inptEquismo" placeholder="Equimosis">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkPete" name="petequias" onclick="habilitarInput();">Petequías</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptPete" name="inptPete" placeholder="Petequías">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkCia" name="cianosis" onclick="habilitarInput();">Cianosis</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptCia" name="inptCia" placeholder="Cianosis">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkErup" name="erupcion" onclick="habilitarInput();">Erupción</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptErup" name="inptErup" placeholder="Erupción">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkPanic" name="paniculo" onclick="habilitarInput();">Panículo</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptPanic" name="inptPanic" placeholder="Panículo">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkTurgor" name="turgor" onclick="habilitarInput();">Turgor</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptTurgor" name="inptTurgor" placeholder="Turgor">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkEdema" name="edema" onclick="habilitarInput();">Edema</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptEdema" name="inptEdema" placeholder="Edema">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkUnias" name="TipUnias" onclick="habilitarInput();">Uñas</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptUnias" name="inptUnias" placeholder="Uñas">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkNod" name="nodulo" onclick="habilitarInput();">Nódulos</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptNod" name="inptNod" placeholder="Nódulos">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkPelos" name="pelos" onclick="habilitarInput();">Pelos</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptPelos" name="inptPelos" placeholder="Pelos">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkVascula" name="vascula" onclick="habilitarInput();">Vascula</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptVascula" name="inptVascula" placeholder="Vascularización">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkCicatris" name="cicatris" onclick="habilitarInput();">Cicatrices</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptCicatris" name="inptCicatris" placeholder="">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkUlcera" name="ulceras" onclick="habilitarInput();">Ulceras</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptUlcera" name="inptUlcera" placeholder="Ulceras">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkFistula" name="fistula" onclick="habilitarInput();">Fístulas</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptFistula" name="inptFistula" placeholder="Fístulas">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkOtros" name="CheqPiel" onclick="habilitarInput();">Otros</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inpOtros" name="inpOtros" placeholder="Otros">
                                    </div>
                                </div>

                                <h4 class="text-center" class="formlegend">Cabeza:</h4>
                                <div class="form-group">
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkConf" name="config" onclick="habilitarInput();">Configuración</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptConf" name="inptConf" placeholder="Configuración">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkFront" name="frontales" onclick="habilitarInput();">Frontales</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptFront" name="inptFront" placeholder="Frontales">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkSutura" name="sutura" onclick="habilitarInput();">Suturas</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptSutura" name="inptSutura" placeholder="Suturas">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkCircunf" name="circunf" onclick="habilitarInput();">Circunferencia</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptCircunf" name="inptCircunf" placeholder="Circunferencia">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkCraneo" name="craneo" onclick="habilitarInput();">Craneo</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptCraneo" name="inptCraneo" placeholder="Craneotabes">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkCabello" name="cabello" onclick="habilitarInput();">Cabellos</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptCabello" name="inptCabello" placeholder="Cabellos">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkbOtras" name="CabOtras" onclick="habilitarInput();">Otros</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptOtros" name="inptOtroscabe" placeholder="Otros">
                                    </div>
                                </div>
                                <h4 class="text-center" class="formlegend">Ojos:</h4>
                                <div class="form-group">
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkConjuntiva" name="conjuntiva" onclick="habilitarInput();">Conjuntiva</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptConjuntiva" name="inptConjunti" placeholder="Conjuntiva">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkEsclero" name="eclerotica" onclick="habilitarInput();">Esclerótica</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptEsclero" name="inptEsclero" placeholder="Esclerótica">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkCornea" name="cornea" onclick="habilitarInput();">Córnea</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptCornea" name="inptCornea" placeholder="">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkPupila" name="pupila" onclick="habilitarInput();">Pupila</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptPupila" name="inptPupila" placeholder="Pupila">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkmovie" name="movie" onclick="habilitarInput();">Movimientos</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptMovie" name="inptMovie" placeholder="Movimientos">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkDesvia" name="desviacion" onclick="habilitarInput();">Desviaciones</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptDesvia" name="inptDesvia" placeholder="Desviaciones">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkNistag" name="nistagmus" onclick="habilitarInput();">Nistagmus</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptNistag" name="inptNistag" placeholder="Nistagmus">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkPtosis" name="ptosis" onclick="habilitarInput();">Ptosis</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptPtosis" name="inptPtosis" placeholder="Ptosis">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkExostalmo" name="exoftalmo" onclick="habilitarInput();">Exoftalmos</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptExostalmo" name="inptExostalmo" placeholder="Exoftalmos">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkOftalmo" name="oftalmo" onclick="habilitarInput();">Oftalmoscópico</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptOftalmo" name="inptOftalmo" placeholder="Oftalmoscópico">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkOjo" name="checkOjo" onclick="habilitarInput();">Otros</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptOjo" name="inptOjo" placeholder="Otros">
                                    </div>
                                </div>
                    </div>           
                                 <input type="button" name="prev" class="btn prev acao " value="Anterior" />
                                 <input type="button" name="next5" class="btn next acao " value="Siguiente" />
                                </fieldset>
                <fieldset>
                    <div class="row">   
                                <h4 class="text-center" class="formlegend">Oídos:</h4>
                                <div class="form-group">
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkPabellon" name="pabellon" onclick="habilitarInput();">Pabellon</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptPabellon" name="inptPabellon" placeholder="Pabellon">
                                    </div><div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkCanal" name="canal" onclick="habilitarInput();">Canal Externo</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptCanal" name="inptCanal" placeholder="Canal Externo">
                                    </div><div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkTimpano" name="timpano" onclick="habilitarInput();">Tímpano</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptTimpano" name="inptTimpano" placeholder="Tímpano">
                                    </div><div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkAudicion" name="audicion" onclick="habilitarInput();">Audición</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptAudicion" name="inptAudicion" placeholder="Audición">
                                    </div>
                                </div>
                                <div class="form-group">
                                        <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkSecre" name="secrecion" onclick="habilitarInput();">Secreciones</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptSecre" name="inptSecre" placeholder="Secreciones">
                                    </div><div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkMastoide" name="mastoide" onclick="habilitarInput();">Mastoides</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptMastoide" name="inptMastoide" placeholder="Mastoides">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkDolor" name="dolor" onclick="habilitarInput();">Dolor</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptDolor" name="inptDolor" placeholder="Dolor">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="selectOtro" name="selectOtro" onclick="habilitarInput();">Otros</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="selectInpOtro" name="selectInpOtro" placeholder="Otros">
                                    </div>
                                </div>
                                <h4 class="text-center" class="formlegend">Rinofaringe:</h4>
                                <div class="form-group">
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkFosas" name="fosas" onclick="habilitarInput();">Fosas Nasales</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptFosas" name="inptFosas" placeholder="Fosas Nasales">
                                    </div>
                                     <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkMucosa" name="mucosa" onclick="habilitarInput();">Mucosas</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptMucosa" name="inptMucosa" placeholder="Mucosas">
                                    </div>
                                     <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkSecrecion" name="secrecion" onclick="habilitarInput();">Secreción Nasal</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptSecrecion" name="inptSecrecion" placeholder="Secreción Nasal">
                                    </div>
                                     <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkTabique" name="tabique" onclick="habilitarInput();">Tabique</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptTabique" name="inptTabique" placeholder="Tabique">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkAcceso" name="accesorio" onclick="habilitarInput();">Senos Accesorios</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptAcceso" name="inptAcceso" placeholder="Senos Accesorios">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkDiasfa" name="diasfanos" onclick="habilitarInput();">Diasfanoscopia</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptDiasfa" name="inptDiasfa" placeholder="Diasfanoscopia">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkAmigdala" name="amigdalas" onclick="habilitarInput();">Amígdalas</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptAmigdala" name="inptAmigdala" placeholder="Amígdalas">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkFaringe" name="faringe" onclick="habilitarInput();">Faringe</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptFaringe" name="inptFaringe" placeholder="Faringe">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkAdenoide" name="adenoides" onclick="habilitarInput();">Adenoides</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptAdenoide" name="inptAdenoide" placeholder="Adenoides">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkPosnasal" name="posnasal" onclick="habilitarInput();">Secreción Posnasal</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptPosnasal" name="inptPosnasal" placeholder="Secreción Posnasal">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkDisfagia" name="disfagia" onclick="habilitarInput();">Disfagia</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptDisfagia" name="inptDisfagia" placeholder="Disfagia">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkFaOtro" name="faOtro" onclick="habilitarInput();">Otros</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inFaOtro" name="inFaOtro" placeholder="Otros">
                                    </div>
                                </div>
                                <h4 class="text-center" class="formlegend">Boca:</h4>
                                <div class="form-group">
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkAliento" name="aliento" onclick="habilitarInput();">Aliento</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptAliento" name="inptAliento" placeholder="Aliento">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkLabios" name="labios" onclick="habilitarInput();">Labios</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptLabios" name="inptLabios" placeholder="Labios">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkDiente" name="dientes" onclick="habilitarInput();">Dientes</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptDiente" name="inptDiente" placeholder="Dientes">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkEncia" name="encias" onclick="habilitarInput();">Encías</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptEncia" name="inptEncia" placeholder="Encías">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkBmucosa" name="bMucosa" onclick="habilitarInput();">Mucosa</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptBmucosa" name="inptBmucosa" placeholder="Mucosa">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkLengua" name="lengua" onclick="habilitarInput();">Lengua</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptLengua" name="inptLengua" placeholder="Lengua">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkConducto" name="conducto" onclick="habilitarInput();">Conductos Salivares</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptConducto" name="inptConducto" placeholder="Conductos Salivares">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkParalisis" name="paralisis" onclick="habilitarInput();">Parálisis</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptParalisis" name="inptParalisis" placeholder="Parálisis y Trismo">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkbBotros" name="bOtros" onclick="habilitarInput();">Otros</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptBotros" name="inptBotros" placeholder="Otros">
                                    </div>
                                </div>
                    </div>
                                 <input type="button" name="prev" class="btn prev acao " value="Anterior" />
                                 <input type="button" name="next6" class="btn next acao " value="Siguiente" />
                                </fieldset>
                <fieldset>
                    <div class="row">
                                <h4 class="text-center" class="formlegend">Cuello:</h4>
                                <div class="form-group">
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkMovilidad" name="movilidad" onclick="habilitarInput();">Movilidad</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptMovilidad" name="inptMovilidad" placeholder="Movilidad">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkTumoracion" name="tumoracion" onclick="habilitarInput();">Tumoración</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptTumoracion" name="inptTumoracion" placeholder="Tumoración">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkTiroide" name="tiroide" onclick="habilitarInput();">Tiroíde</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptTiroide" name="inptTiroide" placeholder="Tiroíde">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkVasos" name="vasos" onclick="habilitarInput();">Vasos</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptVasos" name="inptVasos" placeholder="Vasos">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkTraquea" name="traquea" onclick="habilitarInput();">Tráquea</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptTraquea" name="inptTraquea" placeholder="Tráquea">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkCuello" name="cuelloOtros" onclick="habilitarInput();">Otros</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptCuello" name="inptCuello" placeholder="Otros">
                                    </div>
                                </div>              
                                <h4 class="text-center" class="formlegend">Ganglios Linfaticos:</h4>
                               <div class="form-group">
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkCervical" name="cervical" onclick="habilitarInput();">Cervical</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptCervical" name="inptCervical" placeholder="Cervical">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkOccipital" name="occipital" onclick="habilitarInput();">Occipitales</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptOccipital" name="inptOccipital" placeholder="Occipitales">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkSupra" name="Supra" onclick="habilitarInput();">Supraclaviluca</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptSupra" name="inptSupra" placeholder="Supraclavicula">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkAxilar" name="axilar" onclick="habilitarInput();">Axilares</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptAxilar" name="inptAxilar" placeholder="Axilares">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkInguinal" name="inguinal" onclick="habilitarInput();">Inguinales</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptInguinal" name="inptInguinal" placeholder="Inguinales">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkEpi" name="epitro" onclick="habilitarInput();">Epitroclares</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptEpi" name="inptEpi" placeholder="Epitroclares">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkGotros" name="gOtros" onclick="habilitarInput();">Otros</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptGotros" name="inptGotros" placeholder="Otros">
                                    </div>
                                </div>
                                <h4 class="text-center" class="formlegend">Tórax y Pulmones:</h4>
                                <div class="form-group">
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkForma" name="forma" onclick="habilitarInput();">Forma</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptForma" name="inptForma" placeholder="Forma">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkSimetria" name="simetria" onclick="habilitarInput();">Simetría</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptSimetria" name="inptSimetria" placeholder="">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkExpansion" name="expansion" onclick="habilitarInput();">Expansión</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptExpansion" name="inptExpansion" placeholder="Expansión">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkPercusion" name="percusion" onclick="habilitarInput();">Percusión</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptPercusion" name="inptPercusion" placeholder="Percusión">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkRuido" name="ruidoAdvent" onclick="habilitarInput();">Ruidos Adventicios</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptRuido" name="inptRuido" placeholder="Ruidos Adventicios">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkPapitacion" name="papitacion" onclick="habilitarInput();">Palpación</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptPapitacion" name="inptPapitacion" placeholder="Palpación">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkRespcion" name="respcion" onclick="habilitarInput();">Respiración (tipo y r.)</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptRespcion" name="inptRespcion" placeholder="Respiración (tipo y r.)">
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkRespiracion" name="respiracion" onclick="habilitarInput();">Respiración por Minuto</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptRespcion_min" name="inptRespcion_min" placeholder="Respiración por Minuto">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-1">
                                        <div class="radio">
                                            <label><input type="checkbox" value="" id="checkToraxOtro" name="toraxOtro" onclick="habilitarInput();">Otros</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input disabled type="text" class="form-control" id="inptToraxOtro" name="inptToraxOtro" placeholder="Otros">
                                    </div>
                                </div>
                                      <input type="hidden" name="cod_pacci" value="<?php echo $v1codpass=$_GET['404'];?>"/>
                            <div id="valor"></div>    
                    </div>            
                                  <input type="button" name="prev" class="btn prev acao " value="Anterior" /> 
                                  <input type="button" name="next7" class="btn next acao " value="Siguiente" />
                                  <!--<input type='submit' id='btn_login' onclick="validar_form_pediatria();" name="next" class="btn next acao " value="Registrar" /> </input>-->
                                </fieldset>
                <fieldset>
                    <div class="row">
                        <h4 class="text-center" class="formlegend">Tratamiento:</h4>
                        <div class="form-group">
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="inptMedicamento" name="inptMedicamento" placeholder="Medicamento">
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="inptDosis" name="inptDosis" placeholder="Dosis">
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="inptDuracion" name="inptDuracion" placeholder="Duración">
                            </div>
                        </div>
                    </div>    
                            <input type="button" name="prev" class="btn prev acao " value="Anterior" /> 
                            <input type='submit' id='btn_login' onclick="validar_form_pediatria();" name="next" class="btn next acao " value="Registrar" /> </input>
                </fieldset>
            </form>
        </div>
    </section>
</main>

<!--*****************************************************************************************************************************************************************************************************************************************************************!-->
                                                                          <!--esto son los fron del modal de pedriatria-->
<div class="container"> 
    <section>
        <div id="modal1" class="modal fade" role="dialog">
            <div class="modal-dialog  modal-lg">
                <div class="modal-content">
                    <div class="modal-header">        
                    <h4 class="text-center" class="formlegend"><img src="preview/report.png"></img>Indicaciones Médicas</h4>
                        <form class="form-horizontal pedriIndicacionesMedicas" role="search" name='form_confir_pedriIndicaMedi' id='form_confir_pedriIndicaMedi' method='POST' action="?view=models&action=registro_pedriIndicaMedi">
                            <div class="form-group">
                                                        <div class="col-sm-6 col-md-6 col-lg-6">
                                                          <input type="text" class="form-control" id="selectInput" placeholder="Apellidos:">
                                                        </div> 
                                                        <div class="col-sm-6 col-md-6 col-lg-6">
                                                          <input type="text" class="form-control" id="selectInput" placeholder="Nombres:">
                                                        </div> 
                                                    </div>
                            <div class="form-group">
                                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                                          <input type="text" class="form-control" id="selectInput" placeholder="H.C.M. N°:">
                                                        </div>
                                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                                          <input type="text" class="form-control" id="selectInput" placeholder="Servicio:">
                                                        </div> 
                                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                                          <input type="text" class="form-control" id="selectInput" placeholder="Cama N°:">
                                                        </div> 
                                                        <label class="control-label col-sm-1 col-md-1 col-lg-1" for="fechaSalida">Fecha</label>
                                                        <div class="col-sm-2 col-md-2 col-lg-2">
                                                          <input class="form-control" id="fechaSalida" type="text" value="<?php echo date('Y/m/d'); ?>" />
                                                        </div>
                                                    <div class="col-sm-1 col-md-1 col-lg-1">
                                                    <select for="hora" name="hora" class="browser-default" title="Hora">
                                                        <option disabled select>Hora:</option>
                                                         <?php
                                                          $antPed="SELECT * FROM horas ORDER BY cod_hora ASC";
                                                            $query= $mysqli->query($antPed);
                                                          while ($row=mysqli_fetch_assoc($query)) {
                                                            echo "<option value='".$row['cod_hora']."'>".$row['descripcion']."</option>";
                                                          }
                                                    ?>
                                                    </select>
                                                 </div>
                                                <div class="col-sm-1 col-md-1 col-lg-1">
                                                    <select for="periodohora" name="periodohora" class="browser-default" title="Periodo Hora">
                                                        <option disabled select>Periodo:</option>
                                                                                             <?php
                                                          $antPed="SELECT * FROM periodo_hora ORDER BY cod_per_hora ASC";
                                                            $query= $mysqli->query($antPed);
                                                          while ($row=mysqli_fetch_assoc($query)) {
                                                            echo "<option value='".$row['cod_per_hora']."'>".$row['descripcion']."</option>";
                                                          }
                                                    ?>
                                                    </select>
                                                </div>
                                                </div>
                            <div class="form-group">
                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                       <input type="text" class="form-control" id="selectInput" placeholder="Descripción de las Indicaciones">
                                                </div> 
                                            </div>
                            <div class="form-group">
                                            <div class="col-sm-2 col-md-2 col-lg-2">    
                                            <button type='button' class='btn btn-success' onclick='return confirmar_cita(<?php echo $codigo_cita; ?>);'><?php echo 'Registrar'; ?></button>
                                            </div>
                                            </form>
                                            <div id='' class="col-sm-2 col-md-2 col-lg-2">  
                                               <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                            </div>
                                            </div>    
                    </div>                            
                </div>
            </div>
        </div>
    </section>

    <section>
<div id="modal2" class="modal fade" role="dialog">
<div class="modal-dialog  modal-lg">
<div class="modal-content">
<div class="modal-header">        
<h4 class="text-center" class="formlegend"><img src="preview/report.png"></img>Control de signos Vitales</h4>
<form class="form-horizontal pedriCONSigVital" role="search" name='form_confir_pedriCONSigVital' id='form_confir_pedriCONSigVital' method='POST' action="?view=models&action=registro_pedriCONSigVital">
                                <div class="form-group">
                                    <label class="control-label col-sm-1 col-md-1 col-lg-1" for="fechaSalida">Fecha</label>
                                    <div class="col-sm-2 col-md-2 col-lg-2">
                                      <input class="form-control" id="fechaSalida" type="text" value="<?php echo date('Y/m/d'); ?>" />
                                    </div>
                                   <div class="col-sm-1 col-md-1 col-lg-1">
                                <select for="hora" name="hora" class="browser-default" title="Hora">
                                    <option disabled select>Hora:</option>
                                                                     <?php
                                      $antPed="SELECT * FROM horas ORDER BY cod_hora ASC";
                                        $query= $mysqli->query($antPed);
                                      while ($row=mysqli_fetch_assoc($query)) {
                                        echo "<option value='".$row['cod_hora']."'>".$row['descripcion']."</option>";
                                      }
                                ?>
                                </select>
                             </div>
                            <div class="col-sm-2 col-md-2 col-lg-2">
                                <select for="periodohora" name="periodohora" class="browser-default" title="Periodo Hora">
                                    <option disabled select>Periodo:</option>
                                                                         <?php
                                      $antPed="SELECT * FROM periodo_hora ORDER BY cod_per_hora ASC";
                                        $query= $mysqli->query($antPed);
                                      while ($row=mysqli_fetch_assoc($query)) {
                                        echo "<option value='".$row['cod_per_hora']."'>".$row['descripcion']."</option>";
                                      }
                                ?>
                                </select>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <select for="nombreenfermera" name="nombreenfermera" class="browser-default" title="Nombre Enfermera">
                                    <option value="">Seleccionar Nombre de la Enfermera:</option>
                               <?php
                                      $antPed="SELECT cod_rol_usuario, nombre_usu FROM usuario WHERE cod_rol_usuario=3 ORDER BY cod_rol_usuario ASC";
                                        $query= $mysqli->query($antPed);
                                      while ($row=mysqli_fetch_assoc($query)) {
                                        echo "<option value='".$row['cod_rol_usuario']."'>".$row['nombre_usu']."</option>";
                                      }
                                ?>
                                </select>
                            </div>
                            </div> 
                            <div class="form-group">
                                <div class="col-sm-3 col-md-3 col-lg-3">
                                       <input type="text" class="form-control" id="selectInput" placeholder="Temperatura:">
                                </div>
                                <div class="col-sm-3 col-md-3 col-lg-3">
                                       <input type="text" class="form-control" id="selectInput" placeholder="Pulso:">
                                </div>
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                   <input type="text" class="form-control" id="selectInput" placeholder="Respiracíon:">
                            </div> 
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                   <input type="text" class="form-control" id="selectInput" placeholder="T.A.:">
                            </div> 
                            </div>
                        <div class="form-group">
                        <div class="col-sm-2 col-md-2 col-lg-2">    
                        <button type='button' class='btn btn-success' onclick='return confirmar_cita(<?php echo $codigo_cita; ?>);'><?php echo 'Registrar'; ?></button>
                        </div>
                        </form>
                        <div id='' class="col-sm-2 col-md-2 col-lg-2">  
                           <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                        </div>
                        </div>    
</div>                            
</div>
</div>
</div>
</section>

<section>
<div id="modal3" class="modal fade" role="dialog">
    <div class="modal-dialog  modal-lg">
<div class="modal-content">        
<div class="modal-header">              
<h4 class="text-center" class="formlegend"><img src="preview/report.png"></img>Hoja de Enfermeras</h4>
<form class="form-horizontal pedriHoEnfer" role="search" name='form_confir_pedriHoEnfer' id='form_confir_pedriHoEnfer' method='POST' action="?view=models&action=registro_pedriHoEnfer">
                              <div class="form-group">
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                      <input type="text" class="form-control" id="selectInput" placeholder="Nombres y Apellidos:">
                                    </div>
                                <label class="control-label col-sm-1 col-md-1 col-lg-1" for="fechaSalida">Fecha</label>
                                <div class="col-sm-2 col-md-2 col-lg-2">
                                <input class="form-control" id="fechaSalida" type="text" value="<?php echo date('Y/m/d'); ?>" />
                            </div>     
                                <div class="col-sm-1 col-md-1 col-lg-1">
                                <select for="hora" name="hora" class="browser-default" title="Hora">
                                    <option disabled select>Hora:</option>
                                                                       <?php
                                      $antPed="SELECT * FROM horas ORDER BY cod_hora ASC";
                                        $query= $mysqli->query($antPed);
                                      while ($row=mysqli_fetch_assoc($query)) {
                                        echo "<option value='".$row['cod_hora']."'>".$row['descripcion']."</option>";
                                      }
                                ?>
                                </select>
                             </div>
                            <div class="col-sm-1 col-md-1 col-lg-1">
                                <select for="periodohora" name="periodohora" class="browser-default" title="Periodo Hora">
                                    <option disabled select>Periodo:</option>
                                                                 <?php
                                      $antPed="SELECT * FROM periodo_hora ORDER BY cod_per_hora ASC";
                                        $query= $mysqli->query($antPed);
                                      while ($row=mysqli_fetch_assoc($query)) {
                                        echo "<option value='".$row['cod_per_hora']."'>".$row['descripcion']."</option>";
                                      }
                                ?>
                                </select>
                            </div>
                               </div>
                               <div class="form-group">
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                      <input type="text" class="form-control" id="selectInput" placeholder="Sala N°:">
                                    </div> 
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                      <input type="text" class="form-control" id="selectInput" placeholder="Cama N°:">
                                    </div>
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                      <input type="text" class="form-control" id="selectInput" placeholder="Hist. N°:">
                                    </div> 
                                </div>
                            <div class="form-group">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <textarea name="textarea" placeholder="Reportaje Diario"></textarea>
                            </div>
                        </div>
                          <div class="form-group">
                        <div class="col-sm-2 col-md-2 col-lg-2">    
                        <button type='button' class='btn btn-success' onclick='return confirmar_cita(<?php echo $codigo_cita; ?>);'><?php echo 'Registrar'; ?></button>
                        </div>
                        </form>
                        <div id='' class="col-sm-2 col-md-2 col-lg-2">  
                           <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                        </div>
                        </div>
    </div>                    
    </div>                    
    </div>
    </div>
</section>

<section>
<div id="modal4" class="modal fade" role="dialog">
<div class="modal-dialog  modal-lg">
<div class="modal-content">    
<div class="modal-header">      
<h4 class="text-center" class="formlegend"><img src="preview/report.png"></img>Evolución de Enfermería</h4>
<form class="form-horizontal pedriEvoEnfer" role="search" name='form_confir_pedriEvoEnfer' id='form_confir_pedriEvoEnfer' method='POST' action="?view=models&action=registro_pedriEvoEnfer">
                        
                            <div class="form-group">
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                      <input type="text" class="form-control" id="selectInput" placeholder="Nombres y Apellidos:">
                                    </div>
                                <label class="control-label col-sm-1 col-md-1 col-lg-1" for="fechaSalida">Fecha</label>
                                <div class="col-sm-2 col-md-2 col-lg-2">
                                <input class="form-control" id="fechaSalida" type="text" value="<?php echo date('Y/m/d'); ?>" />
                            </div>     
                                <div class="col-sm-1 col-md-1 col-lg-1">
                                <select for="hora" name="hora" class="browser-default" title="Hora">
                                    <option disabled select>Hora:</option>
                                                                       <?php
                                      $antPed="SELECT * FROM horas ORDER BY cod_hora ASC";
                                        $query= $mysqli->query($antPed);
                                      while ($row=mysqli_fetch_assoc($query)) {
                                        echo "<option value='".$row['cod_hora']."'>".$row['descripcion']."</option>";
                                      }
                                ?>
                                </select>
                             </div>
                            <div class="col-sm-1 col-md-1 col-lg-1">
                                <select for="periodohora" name="periodohora" class="browser-default" title="Periodo Hora">
                                    <option disabled select>Periodo:</option>
                                                                 <?php
                                      $antPed="SELECT * FROM periodo_hora ORDER BY cod_per_hora ASC";
                                        $query= $mysqli->query($antPed);
                                      while ($row=mysqli_fetch_assoc($query)) {
                                        echo "<option value='".$row['cod_per_hora']."'>".$row['descripcion']."</option>";
                                      }
                                ?>
                                </select>
                            </div>
                               </div>
                             <div class="form-group">
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                      <input type="text" class="form-control" id="selectInput" placeholder="Servicio:">
                                    </div> 
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                      <input type="text" class="form-control" id="selectInput" placeholder="Cama:">
                                    </div>
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                      <input type="text" class="form-control" id="selectInput" placeholder="H.C.N.:">
                                    </div> 
                                </div>
                                 <div class="form-group">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                   <input type="text" class="form-control" id="selectInput" placeholder="Descripción evolución de enfermería:">
                            </div>
                        </div>
                        <div class="form-group">
                        <div class="col-sm-2 col-md-2 col-lg-2">    
                        <button type='button' class='btn btn-success' onclick='return confirmar_cita(<?php echo $codigo_cita; ?>);'><?php echo 'Registrar'; ?></button>
                        </div>
                        </form>
                        <div id='' class="col-sm-2 col-md-2 col-lg-2">  
                           <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                        </div>
                        </div>
</div>                        
 </div>                        
</div>
 </div>
</section>
</div> 
<?php include(FOOTER_CORE . 'public/footer.html'); ?>
