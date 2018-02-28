<?php include(ACCESO_DENEGADO . 'controllers/accesoDenegado.php'); ?>
<?php include(HEADER_LOGIN . 'public/header_login.html'); ?>
<?php include(HTML_CORE . 'overall/topnav.php'); ?>
<img src="view/img/banner2.png" class="responsive-img" alt="" style="display:flex; margin:0 auto;">
<?php
//include(CABECERA_CORE . 'public/cabecera.html');
//include(HEADER_LOGIN . 'public/header_login.html'); 
include(MODELS . 'conexion.php');

?>
<main>
    <center>
        <div class="container">
            <h3 class="text-center " style="display: inline-block;">
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
                </strong>
            </h3>
                <h4 class="text-center" class="formlegend"><img src="view/img/report.png"></img>Citas programadas</h4>
                
                <section>
        <fieldset class="cuadroform form-horizontal AVAST_PAM_loginform">
            <div class="" style="display: block; padding: top; margin-top: 30px">
                    <div class="col s12 m12 l12">
                        <div class="row">
                            <form class="form-horizontal litaCitas" role="search" name='form_listado_cita' id='form_listado_cita' method='POST' action="?view=models&action=consultaListadoCitas">
                        <table class="order-table table">
                            <thead>
                                <tr>
                                    <th>Usuario</th>
                                    <th>Paciente</th>
                                    <th>Cédula Paciente</th>
                                    <th>Fecha D. Cita</th>
                                    <th>Turno</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($_SESSION['rol']=="2") {
                                    $c_doctor ="select cod_doc from doctor where cod_usuario ='".$_SESSION['user_id']."'";
                                    $doctor = $mysqli->query($c_doctor);
                                    $fila=$doctor->fetch_assoc();
                                    
                                        $sql = "SELECT * FROM cita INNER JOIN doctor, paciente WHERE cita.cod_doc = doctor.cod_doc && cita.cod_paciente = paciente.cod_paciente && cita.cod_doc ='".$fila["cod_doc"]."'";
                                                            }else{
                                $sql = "SELECT * FROM cita INNER JOIN doctor, paciente, turno WHERE cita.status_cita = 'C' && cita.cod_doc = doctor.cod_doc && cita.cod_paciente = paciente.cod_paciente && cita.cod_turno_med = turno.cod_turno_med";
                                                                  }
                                $resultado = $mysqli->query($sql);
                                if (mysqli_num_rows($resultado) == 0) {
                                    echo "<div class='row'><div class='col s12 m12 l12'>Aun no se ha confirmado ninguno de sus pacientes, Dr. ".$user["nombre_usu"].".</div></div>";
                                                                       }else{
                                    while ($fila = mysqli_fetch_assoc($resultado)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $fila['nombres_doc']; ?></td>
                                        <td><?php echo $fila['primer_nombre']." ".$fila['primer_apellido']; ?>
                                        <td><?php echo $fila['cedula_paciente']; ?></td>
                                        <td><?php echo $fila['fecha']; ?></td>
                                       
                                                                 <?php $cod_turno_med = $fila['cod_turno_med']; 
                                                                 //llamando a la tabla relacionanda ara ver el turno
                                                                 $sql_des_turno = "SELECT * from turno where cod_turno_med=$cod_turno_med";
                                                                 $res_des_turno = $mysqli->query($sql_des_turno);
                                                                 while ($fila_des_turno = mysqli_fetch_assoc($res_des_turno)) { 
                                            	                 $des_turno = $fila_des_turno['turno'];  
                                                                 ?>
                                                                 <td><font color="black"><?php echo $des_turno;            } ?></font></td>

                                        <?php $codigo_cita = $fila['cod_cita']; ?>
                                        <td><button type='button' class='btn btn-danger' onclick='return eliminar_cita(<?php echo $codigo_cita; ?>);'>Borrar</button></td>
                                    </tr>
                                                                              <?php }
                                                                              }?>
                            </tbody>
                        </table>
    
                </div>
                  
                <div id="valor"></div>
                    </form>
        </div>            
            </div>        
        </fieldset>
                    <div class="desarrolladores">Desarrollado por: Wendy R. Cristofer U. Aitor U. Gabriel M. & Frederick G. Estudiantes del Colegio Universitario Francisco de Miranda</div>
            </section>
    </center>
</main>
</div>

