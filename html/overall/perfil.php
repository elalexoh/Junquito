<?php include(ACCESO_DENEGADO . 'controllers/accesoDenegado.php'); ?>
<?php include(CABECERA_CORE . 'public/cabecera.html'); ?>
<?php require_once (MODELS . 'conexion.php'); ?>
<?php if ($_SESSION['rol']=="1") {
    include(HTML_CORE .'overall/horario_doctores.php');
    }else{
    include(HEADER_LOGIN .'public/header_login.html');
    }
?>
	<!--<div class="Logo">-->
	<!--	  <div class="row">-->
 <!--   <div class="col s12 m6" style="display:hidden;">-->
 <!--     <div class="card">-->
 <!--       <div class="card-image">-->
 <!--         <img src="images/sample-1.jpg">-->
 <!--         <span class="card-title">Card Title</span>-->
 <!--         <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>-->
 <!--       </div>-->
 <!--       <div class="card-content">-->
 <!--         <p></p>-->
 <!--       </div>-->
 <!--     </div>-->
 <!--   </div>-->
 <!-- </div>-->
	<!--</div>-->
	<!--  --><!-- Menu Principal  -->
	<div class="container">
		<!-- Opciones -->
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
                    <?php echo utf8_encode($user["nombre_usu"]); ?>
                </strong>!
            </h3>
		</section>
		<section>
			<div class="jumbotron jumbotron-fluid estadisticas">
			  <h1 class="display-3 ">Bienvenido al SCGHM!</h1>
			  <p class="lead">Este sistema tiene como objetivo, ayudarlo a registrar y controlar todo lo relacionado con la historias médicas que maneja el Hospital Municipal "El Junquito"</p>
			  <hr class="my-4">
			  <p>Para ello el sistema posee una serie de funciones que le ayudaran a administrar de forma efectiva todas las actividades referentes a las historias médicas</p>
                <div class="row">
                    <div class="col s12 m12 l12">
                        <form name="fperfil" class="navbar-form navbar-right" role="search" method="POST" action='?view=vistas&action=consultaPaciente'>
                    		<div class="form-group">
                    		    <!--<input name="myinput_drs"  />-->
                                <input oninput="maxLengthCheck(this)" type = "number" maxlength = "8" min = "8" max = "9999999999" class="form-control" id="cedulaPac" name="cedula" placeholder="Ingrese Cédula del Paciente" onpaste="return false" />
                                <div id="ntcedulaPac"></div>
                            </div>
                    		<button type="submit" class="btn btn-default" onclick="">Busqueda</button>
                            <!--<button class='btn btn-medium waves-effect indigo' type='button'>Buscar</button>!-->
                		</form>
                    </div>
                </div>
    			<div class="row center">
    			    <div class="col s12 m12 l12">
    			        
    			        
    			        
    			        
    			        <input type="hidden" name="ajax">
    			        
    			        
    			        
    			          <!--citas confirmadas si eres doctor-->
    	<form class="form-horizontal" role="search" name='form_cambia_status_cita' id='form_cambia_status_cita' method='POST' action="?view=models&action=cambia_status_cita">		          
                        <?php if ($_SESSION['rol']=="2") { 
                            echo '<div class="row center">
                                    <div class="col s12 m12 l12">
                                        <img src="view/img/calendar.svg" class="logohospital"></img><legend>Citas Confirmadas para hoy</legend>
                                    </div>
                                </div>';
                                $texto = '';
                                $entero = 0;
                                $c_doctor ="select * from doctor where cod_usuario ='".$_SESSION['user_id']."'";
                                $doctor = $mysqli->query($c_doctor);
             
                                // echo $c_doctor; esto es el codigo del usuario del doctor para saber cual es su codigo de usuario
                                
                                $fila=$doctor->fetch_assoc();                    //????
                                //$sql='Select * from cita where status_cita="C" && cod_doc="'.$fila["cod_doc"].'"';
                                  $sql = 'SELECT * FROM cita INNER JOIN paciente , turno WHERE status_cita = "C" && cita.cod_paciente = paciente.cod_paciente && cita.cod_turno_med = turno.cod_turno_med &&  cod_doc ="'.$fila["cod_doc"].'" limit 1';
                                $resultado = $mysqli->query($sql);
                                
                                // echo $sql; esto es el codigo del doctor para saber cual es su codigo 
                                
                                if (mysqli_num_rows($resultado) == 0) {
                                    echo "<div class='row'><div class='col s12 m12 l12'>Aun no se ha confirmado ninguno de sus pacientes, Dr. ".utf8_encode($user["nombre_usu"]).".</div></div>";
                                }else{
            			            echo "<table class='table table-hover'>
                                                <thead>
                                                    <tr>
                                                        <th>Paciente</th>
                                                        <th>Fecha</th>
                                                        <th>Turno</th>
                                                    </tr>
                                                </thead>
                                                <tbody>";
                                    echo "</div></div>";
                                    echo "<div class='row'>
                                    <div class='col s12 m12 l12'>";                                    
                                    while ($fila = mysqli_fetch_assoc($resultado)) {
                                        echo"<tr><td>";
                                        echo ($fila['primer_nombre']);
                                        echo " ";
                                        echo ($fila['primer_apellido']);
                                        echo "</td><td>";
                                        echo $fila['fecha'];
                                        echo "</td><td>";
                                        echo ($fila['turno']);
                                        $_SESSION['cedulaPaciente'] = ($fila['cedula_paciente']);
                                        $cod_pacien = ($fila['cod_paciente']); //para llamar el codigo del paciente al registro
                                        $cod_cita = ($fila['cod_cita']); //para llamar el codigo del status de la cita
                                        $c_doctorforn ="select * from doctor where cod_usuario ='".$_SESSION['user_id']."'"; //para saber cual foumulario darle al doctor
                                        $doctorforn = $mysqli->query($c_doctorforn);
                                        if($row = mysqli_fetch_array($doctorforn)){ 
                                            $var = $row["cod_especialidad"]; //Guardo los datos de la BD en las variables de php (el codigo especialidad del doctor)
                                        }                      
                                        if($var == "1"){
                            		        echo "</td><td><a onclick='return cambia_status_cita($cod_cita);' class='btn btn-medium waves-effect indigo'>---->Ver más<----</a></td></tr>";
                        		        }elseif ($var == "2"){
                        		            echo "</td><td><a onclick='return cambia_status_cita($cod_cita);' class='btn btn-medium waves-effect indigo'>---->Ver más<----</a></td></tr>";
                        		        }elseif ($var == "3"){
                        		            echo "</td><td><a onclick='return cambia_status_cita($cod_cita);' class='btn btn-medium waves-effect indigo'>---->Ver más<----</a></td></tr>";
                        		        }elseif ($var == "4"){
                        		            echo "</td><td><a onclick='return cambia_status_cita($cod_cita);' class='btn btn-medium waves-effect indigo'>---->Ver más<----</a></td></tr>";
                        		        }
                                    }
                                    echo "</tbody></table>";  
                                } 
                                }else{                                
                            }
                        ?>   			        
    	</form>
    		
    			        <!--citas confirmadas si eres doctor ESTE MUESTRA A LOS PACIENTES QUE NO LES TOCA SU TURNO TODAVIA-->
                        <?php if ($_SESSION['rol']=="2") { 
                                $texto = '';
                                $entero = 0;
                                $c_doctor ="select * from doctor where cod_usuario ='".$_SESSION['user_id']."'";
                                $doctor = $mysqli->query($c_doctor);
             
                                // echo $c_doctor; esto es el codigo del usuario del doctor para saber cual es su codigo de usuario
                                
                                $fila=$doctor->fetch_assoc();                    //????
                                //$sql='Select * from cita where status_cita="C" && cod_doc="'.$fila["cod_doc"].'"';
                                  $sql = 'SELECT * FROM cita INNER JOIN paciente , turno WHERE status_cita = "C" && cita.cod_paciente = paciente.cod_paciente && cita.cod_turno_med = turno.cod_turno_med &&  cod_doc ="'.$fila["cod_doc"].'" limit 1,400';
                                $resultado = $mysqli->query($sql);
                                
                                // echo $sql; esto es el codigo del doctor para saber cual es su codigo 
                                
                                if (mysqli_num_rows($resultado) == 0) {
                                    //no mustra nada pr que el mensaje lo uestra el que esta arriba (Aun no se ha confirmado ninguno de sus pacientes)
                                }else{
            			            echo "<table class='table table-hover'>
                                                <tbody>";
                                    while ($fila = mysqli_fetch_assoc($resultado)) {
                                        echo"<tr><td>";
                                        echo ($fila['primer_nombre']);
                                        echo " ";
                                        echo ($fila['primer_apellido']);
                                        echo "</td><td>";
                                        echo $fila['fecha'];
                                        echo "</td><td>";
                                        echo ($fila['turno']);
                                        $_SESSION['cedulaPaciente'] = ($fila['cedula_paciente']);
                                        $cod_pacien = ($fila['cod_paciente']); //para llamar el codigo del paciente al registro
                                        $cod_cita = ($fila['cod_cita']); //para llamar el codigo del status de la cita
                                        $c_doctorforn ="select * from doctor where cod_usuario ='".$_SESSION['user_id']."'"; //para saber cual foumulario darle al doctor
                                        $doctorforn = $mysqli->query($c_doctorforn);
                                        if($row = mysqli_fetch_array($doctorforn)){ 
                                            $var = $row["cod_especialidad"]; //Guardo los datos de la BD en las variables de php (el codigo especialidad del doctor)
                                        }                      
                                        if($var == "1"){ 
                            		        echo "</td><td><a disabled='disabled' href='?view=vistas&action=consultaPaciente' class='btn btn-medium waves-effect indigo'>No es su turno</a></td></tr>";
                        		        }elseif ($var == "2"){
                        		            echo "</td><td><a disabled='disabled' href='?view=vistas&action=consultaPaciente' class='btn btn-medium waves-effect indigo'>No es su turno</a></td></tr>";
                        		        }elseif ($var == "3"){
                        		            echo "</td><td><a disabled='disabled' href='?view=vistas&action=consultaPaciente' class='btn btn-medium waves-effect indigo'>No es su turno</a></td></tr>";
                        		        }elseif ($var == "4"){
                        		            echo "</td><td><a disabled='disabled' href='?view=vistas&action=consultaPaciente' class='btn btn-medium waves-effect indigo'>No es su turno</a></td></tr>";
                        		        }
                                    }
                                    echo "</tbody></table>";
                                }
                                }else{                             
                            }
                        ?>   
                        
    			    </div>
    			</div>
			</div>
		</section>
		<div class="row">
		    <div class="col s12 m12 l12">
    		<section>
    			<div class="btn-group btn-group-justified">
    			    <!--solo el administrador puede agregar usuarios/doctores-->
    			    <?php if ($_SESSION['rol']=="2" || $_SESSION['rol']=="3" || $_SESSION['rol']=="4") {
    			        echo "<a href='#' class='btn btn-success'>Opcion Deshabilitada</a>";
    			        //echo '<input type="hidden" value="prueba" name="fred"><a href="?view=models&action=generarPDF" target="_blank" class="btn btn-primary" role="button">Imprimir PDF</a>';
     				    echo "<a href='?view=vistas&action=recupPassword' class='btn btn-success'>Cambiar Clave</a>";
    			    }else{
    			        //echo "<a href='?view=vistas&action=nuevoUsuario' class='btn btn-success'>Agregar Nuevo Usuario</a>";
    			        echo "<a href='?view=vistas&action=consultaUsuario' class='btn btn-success'>Confirmar Usuario</a>";
     				    //echo "<a href='?view=vistas&action=newDoctor' class='btn btn-success' title='Agregar Nuevo Doctor'>Agregar Nuevo Doctor</a>";
     				    //echo "<a href='?view=vistas&action=recupPassword' class='btn btn-success'>Cambiar Clave</a>";
    			    ?> 
     				   <a data-toggle="modal" data-target="#horario_del_doctor" class='btn btn-success' >Horario del Doctor</a> <!--el que saca el boton del modal-->
                    <?php } ?> 
    
   
    			</div>
    		</section>		        
		    </div>
		</div>
		<div class="row">
		    <div class="col s12 m12 l12">
    		    <div class="desarrolladores">Desarrollado por: Wendy R. Cristofer U. Aitor U. Gabriel M. & Frederick G. Estudiantes del Colegio Universitario Francisco de Miranda</br>
    		    <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">
    		        <img alt="Licencia Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by/4.0/88x31.png" />
                </a><br />Esta obra está bajo una <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Licencia Creative Commons Atribución 4.0 Internacional</a>.
                </div>
		        
		    </div>
		</div>


	</div>
	<?php include(FOOTER_CORE . 'public/footer.html') ?>