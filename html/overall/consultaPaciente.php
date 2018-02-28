<?php require_once(ACCESO_DENEGADO . 'controllers/accesoDenegado.php');?>
<?php include(HEADER_LOGIN .'public/header_login.html'); ?>
<?php include(HTML_CORE . 'overall/topnav.php'); ?>
<img src="view/img/banner2.png" class="img-responsive" alt="" style="display:flex; margin:0 auto;">
<div class="container">
		<section style="text-align: center; margin: -20px;">
		    <img src="view/img/logo.png" class="logohospital"></img>
			<h3 class="text-center " style="display: inline-block;">¡Hola, 
			    <strong class="verdeSecundario">
    			    <?php if ($_SESSION['rol']=="1") {
    			     //   si el que se conecta es un administrador aparecera el sufijo adm
    			        echo "Adm. ";
    			    }else if ($_SESSION['rol']=="2") {
    			       //   si el que se conecta es un Doctor aparecera el sufijo Dr.
    			        echo "Dr. ";
    			    }else if ($_SESSION['rol']=="3") {
    			        //   si el que se conecta es una enfermera  aparecera el sufijo Enf
    			        echo "Enf";
    			    }elseif ($_SESSION['rol']=="4") {
    			        //   si el que se conecta es parte del Personal de Archivo Central aparecera el sufijo pac
    			        echo "pac";
    			    }?>
                    <?php echo $user["nombre_usu"]; ?>
                </strong>!
            </h3>
		</section>
            
    <fieldset class="cuadroform form-horizontal AVAST_PAM_loginform">
        <div class="card-tabs">
              <ul class="tabs tabs-fixed-width">
                <li class="tab"><a class="active" href="#bpacientes">Buscar un Paciente</a></li>
                <li id="tabReportes" class="tab"><a href="#reportes">Reportes</a></li>
              </ul>
            </div>
            <div class="card grey lighten-4">
                <div class="card-content">
                    <div id="bpacientes">
                        <section class="pruebaFormReportes">
                            <div class="row">
                                <div class="col s4 m4 l4">
                                    <!--busca por nombre, apellido, cedula-->
                                    <input type="text" name="busqueda" id="busqueda" placeholder="Ingrese algún dato del paciente" />
                                </div>
                                <div class='col s4 m4 l4'>
                                    <select disabled id="ordenarPor" class="browser-default col s12 m12 l12" name="ordenarPor" >
                                        <option value="active" disabled selected>Buscar por: </option>
                                        <option value="ASC" >Primer Ingreso</option>
                                        <option value="DESC" >Ultimo Ingreso</option>
                                    </select>
                                </div>
                                <div class="col s4 m4 l4">
                                    <select disabled id="cantReg" class="browser-default col s12 m12 l12" name="cantReg">
                                        <option value="active" disabled selected>¿Cuantos registros desea ver?</option>
                                        <option value="LIMIT 0 , 10">10</option>
                                        <option value="LIMIT 0 , 20">20</option>
                                        <option value="LIMIT 0 , 30">30</option>
                                    </select>
                                </div>
                            </div>
                        </section>
                        <section id="tabla_resultado">
                            
                        </section>
                    </div>
                    <div id="reportes">
                        <section id="tabla_reportes">
                            <table>
                                <thead>
                                    <tr>
                                        <td>Asunto</td>
                                        <td>Cantidad</td>
                                    </tr>
                                </thead>
                                <?php //include(MODELS . 'controlDB.php');
                                    //print_r($_POST);
                                    $obj = new controlDB();
                                    $cnt_usu=$obj->consultar("SELECT COUNT(cod_usuario) as num_usuarios FROM usuario")or die("");
                                    $cnt_pac=$obj->consultar("SELECT COUNT(cod_paciente) as num_pacientes FROM paciente")or die("");
                                    $cnt_doc=$obj->consultar("SELECT COUNT(cod_doc) as num_doctores FROM doctor")or die("");
                                    $c_doc=$obj->consultar("SELECT * FROM doctor")or die("");
                                ?>
                                <tbody>
                                    <tr>
                                        <td>Número de usuarios registrados en el sistema</td>
                                        <td>
                                            <?php 
                                                foreach ($cnt_usu as $num_usuarios) {
                                                    echo $num_usuarios['num_usuarios'];
                                                }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Número de pacientes registrados en el sistema</td>
                                        <td>
                                            <?php 
                                                foreach ($cnt_pac as $num_pacientes) {
                                                    echo $num_pacientes['num_pacientes'];
                                                }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Número de doctores registrados en el sistema</td>
                                        <td>
                                            <?php 
                                                foreach ($cnt_doc as $num_doctores) {
                                                    echo $num_doctores['num_doctores'];
                                                }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <div class="col s4 m4 l4">Número de pacientes registrados por el Dr: </div>
                                        <div class="">
                                            <form id="formRptOne" action="#" class="" method="POST" name="fnewpac">
                                                <select id="docRpt" class="browser-default col s4 m4 l4" name="doc">
                                                    <option value="active" disabled selected>Doctores del Sistema</option>
                                                    <?php foreach ($c_doc as $nomDoc) { ?>
                                                            <option value="<?php echo $nomDoc['cod_doc'];?>"><?php echo utf8_encode( $nomDoc['nombres_doc'])." ". utf8_encode($nomDoc['apellidos_doc']); ?></option>
                                                    <?php } ?>
                                                </select>
                                            </form>
                                        </div>
                                        <div class="col s4 m4 l4"></div>
                                        </td>
                                        <td>
                                            <div id="resultRpt"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="col s4 m4 l4">Pacientes registrados en: </div>
                                           <div class="">
                                                <form id="formRptTwo" action="#" class="" method="POST" name="fnewpac2">
                                                    <select id="pacRpt" class="browser-default col s4 m4 l4" name="annio">
                                                        <option value="active" disabled selected>Año</option>
                                                        <option value="2015">2015</option>
                                                        <option value="2016">2016</option>
                                                        <option value="2017">2017</option>
                                                        
                                                    </select>
                                                    <!--<select id="pacRptMes" class="browser-default col s4 m4 l4" name="mes">-->
                                                    <!--    <option value="active" disabled selected>Mes</option>-->
                                                    <!--    <option value="1">Enero</option>-->
                                                    <!--    <option value="2">Febrero</option>-->
                                                    <!--    <option value="3">Marzo</option>-->
                                                    <!--    <option value="4">Abril</option>-->
                                                    <!--    <option value="5">Mayo</option>-->
                                                    <!--    <option value="6">Junio</option>-->
                                                    <!--    <option value="7">Julio</option>-->
                                                    <!--    <option value="8">Agosto</option>-->
                                                    <!--    <option value="9">Septiembre</option>-->
                                                    <!--    <option value="10">Octubre</option>-->
                                                    <!--    <option value="11">Noviembre</option>-->
                                                    <!--    <option value="12">Diciembre</option>-->
                                                    <!--</select>-->
                                                </form>
                                            </div> 
                                        </td>
                                        <td>
                                            <div id="resultRptPac"></div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </section> 
                    </div>
                </div>
            </div>
        </fieldset>
</div>
</fieldset>
<?php include (FOOTER_LOGIN . 'public/footer_login.html'); ?>