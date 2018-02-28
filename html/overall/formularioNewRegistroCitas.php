<?php require_once(ACCESO_DENEGADO . 'controllers/accesoDenegado.php');?>
<?php include(HEADER_LOGIN .'public/header_login.html'); ?>
<?php include(HTML_CORE . 'overall/topnav.php'); ?>
<?php require_once (MODELS . "conexion.php");?>
<img src="view/img/banner2.png" class="img-responsive" alt="" style="display:flex; margin:0 auto;">
<?php include(HTML_CORE . 'overall/rightnav.php'); ?>
        <br />
<div class="container">
            <!-- Form Registro -->
    <div class="row">
        <div class="col s12 m8">
            <center>
                <form  id="formNewCita" action="?view=models&action=registroCitas" class="col s12" method="POST" name="citaVal">
                    <fieldset class="cuadroform form-horizontal AVAST_PAM_loginform">
                      <h4 class="text-center" class="formlegend"><img src="preview/report.png"></img>Registrar Nueva Cita</h4>
                        <div class="row">
                                       <?php 
                                    		$sql="SELECT * from especialidad ORDER BY cod_especialidad ASC";
                                    		$res=$mysqli->query($sql);
                                        ?>
                            <div class="input-field col s4 m4 l4" >
                                <select id="cbx_especialidad" name="cbx_especiali" class="browser-default col s12 m12 l12" title="Especialidad">
                                    <option value="empty" selected>Elegir Especialidad</option>
                                        <?php while ($fila=mysqli_fetch_assoc($res)){ ?>
                                	<option value="<?php echo $fila['cod_especialidad']; ?>"><?php echo $fila['descripcion']; ?></option>
                                				<?php }?>
                                </select>
                                    <div class="" id="ntEspecialidad"></div>    
                            </div>
                            
                            <div class="input-field col s4 m4 l4" >
                                <select id="eli_doctor" name="eli_doctor" class="browser-default col s12 m12 l12" title="Doctor">
                                    <option value="empty" selected>Seleccione al Doctor</option>
                                </select>
                                    <div class="" id="ntDoctor"></div>
                            </div>
                            
                            <div class="input-field col s4 m4 l4" >
                                <select id="eli_paci" name="eli_paci" class="browser-default col s12 m12 l12" title="Paciente">
                                                <option value="empty" selected>Seleccione al Paciente</option>
                                           </select>
                                           <div class="" id="ntEli_Paci"></div>
                            </div>
                            
                        </div>
                        <div class="row">
                            
                            <div class="input-field col s4 m4 l4" >
                                <select id="cbx_turno" name="cbx_turno" class="browser-default col s12 m12 l12" title="Turno">
                                    <option value="empty" selected>Seleccione el Turno</option>
                                </select>
                                    <div class="" id="ntTurno"></div>
                            </div>
                            
                            <div class="input-field col s4 m4 l4" >
                                <?php 
                                $sql_dia="SELECT * from dias ORDER BY cod_dia ASC";
                                $res_dia=$mysqli->query($sql_dia);
                                ?>
                                <td><select id="eli_dia_cita" name="eli_dia_cita" class="browser-default col s12 m12 l12" title="Elegir el Día">
                                <option value="empty" selected>Elegir el Día</option>
                                <?php while ($fila_dia=mysqli_fetch_assoc($res_dia)){ ?>
                                <option value="<?php echo $fila_dia['cod_dia']?>"><?php echo $fila_dia['descripcion']?></option>
                                                                               <?php } ?>
                                </select></td>
                                     <div class="" id="ntEli_dia_cita"></div>
                            </div>

                            <div class="input-default col s4 m4 l4" title="Fecha de la Cita" onpaste="return false" />
                				<input id="date" type="text" value="<?php echo date("Y-m-d"); ?>" readonly name="fechancita" onclick="displayCalendar(document.forms[0].fechancita,'yyyy-mm-dd',this);" />
                				<label for="fechancita" title="Fecha de la Cita">Fecha de la Cita</label>
                				<div class="cambio" ></div>
                				<div class="" id="ntFechaCita"></div>
            				</div>
                        </div>
                        
                        <div class='row'>
                            <div class="input-field col s12 m12 l12">
                                <input type="hidden" name="ajax">
                	            <button type='submit' id='btnNewCita' class='btn btn-medium waves-effect indigo' onclick="">Registrar</button>
                            </div>
                        </div>
                        <div id="valor"></div>
                    </fieldset>
                </form>
            </center>  
        </div> 
            <!-- Form Horario -->
        <div class="col s12 m4">            
                <center>
                    <form  id="ver_ho_doctor" action="?view=models&action=verHorarioDoctor" class="col s12" method="POST">
                        </br></br>
                    <fieldset class="cuadroform form-horizontal AVAST_PAM_loginform">
                        <div class="row">
                            <h4 class="text-center" class="formlegend"><img src="preview/report.png"></img>Ver horario del Doctor</h4>
                            <h7 class="text-center" class="formlegend"></img>NOTA: si no está el doctor comunicar al administrador.</h7>
                        </div>
                        <div class="row">
                            <a data-toggle="modal" data-target="#horario_del_doctor" class='btn btn-medium waves-effect indigo'>Hacer click</a> <!--el que saca el boton del modal-->
                        </div> 
                    </fieldset>
                    </form>
                </center>    
        </div>
    </div>
</div>
    
<?php include(HTML_CORE .'overall/horario_doctores.php');?>
<?php include(FOOTER_CORE . 'public/footer.html'); ?>