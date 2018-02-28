<?php include(HEADER_LOGIN .'public/header_login.html'); ?>
<?php include_once ("core/models/conexion.php"); ?>
<head>
<link rel="stylesheet" href="view/rightnav.css" type="text/css" />
</head>
<body>
<!-- Dialog xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx MODAL PARA EL REGISTRO DE HORARIO-->
<div class="row">
    <div class="col s12 m12 l17">
        <div class="modal fade bs-example-modal-lg" id="horario_del_doctor" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog" role="document">
                
                <div class="row">
                    <div class="col-sm-10 col-md-10 col-lg-10"> 
                        <h3 class="text-center" class="formlegend"><img src="view/img/report.png"></img>Horarios</h3>
                    </div>
                    
                    <div class="col-sm-2 col-md-2 col-lg-2"> 
                        <img src="view/img/logo.png" class="logohospital"></img>
                    </div>
                                    
                    <form class="form-horizontal litaCitas" role="search" name='horario_doctor' id='horario_doctor' method='POST' action="?view=models&action=NewHorarioDoctor">
                        
                            <legend id="leyenda">En esta seccíon podrá agregar un nuevo horario para un doctor</legend>
                        
                        <div class="input-field col s4 m4 l4" >
                            <?php 
                            $sql_doc="SELECT * from doctor  INNER JOIN usuario WHERE doctor.cod_usuario = usuario.cod_usuario && usuario.status_u = 1 ORDER BY cod_doc ASC";
                            $res_doc=$mysqli->query($sql_doc);
                            ?>
                            <select id="eli_h_doctor" name="eli_h_doctor" class="browser-default col s12 m12 l12" title="Elegir al Doctor">
                            <option value="empty" selected>Elegir al Doctor</option>
                            <?php while ($fila_doc=mysqli_fetch_assoc($res_doc)){ ?>
                            <option value="<?php echo $fila_doc['cod_doc']?>"><?php echo $fila_doc['nombres_doc']; ?>    <?php echo $fila_doc['seg_nombre']; ?></option>
                            <?php } ?>
                            </select>
                        </div>

                        <div class="input-field col s3 m3 l3" >
                            <?php 
                            $sql_dia="SELECT * from dias ORDER BY cod_dia ASC";
                            $res_dia=$mysqli->query($sql_dia);
                            ?>
                            <td><select id="eli_dia" name="eli_dia" class="browser-default col s12 m12 l12" title="Elegir el Día">
                            <option value="empty" selected>Elegir el Día</option>
                            <?php while ($fila_dia=mysqli_fetch_assoc($res_dia)){ ?>
                            <option value="<?php echo $fila_dia['cod_dia']?>"><?php echo $fila_dia['descripcion']?></option>
                                                                           <?php } ?>
                            </select></td>
                        </div>
                    
                        <div class="input-field col s1 m1 l1" ><!--numero de pacientes-->        
                            <td><input id="nPac" type="number" style="width:30px;" name="nPac" class='validate' min="0" max="100"/><label for="nPac"></label></td>
                        </div>

                        <div class="input-field col s1 m1 l1" >
                            <button type='submit' id='btnNewHorarioDoctor' class='btn btn-danger' onclick="regHorarioDoctor();">Registrar</button><!--funcioValNewHorarioDoctor();!-->                             
                        </div>
                    </form>
                </div>
                
                <div class="row">
                        <legend id="leyenda">En esta seccíon podrá ver los horarios de cada doctor</legend>
                    
                    <form class="form-horizontal" role="search" name='elimina_horario' id='elimina_horario' method='POST' action="?view=models&action=eliminaHorario">    
                        <table class="order-table table">
                            <thead>
                                <tr>
                                    <th><font color="black">Nombres:</font></th>
                                    <th><font color="black"></font></th>
                                    <th><font color="black">Atiende los Días:</font></th>
                                    <th><font color="black">Con la Cantidad de Pacientes:</font></th>
                                        <?php //mostrando los horarios de los doctors
                                        $sql_ver_horarios = "SELECT * FROM horario_cita ORDER BY cod_doc ASC";
                                        $resultado = $mysqli->query($sql_ver_horarios);
                                        //mysqli_num_rows($resultado);
                                        while ($fila = mysqli_fetch_assoc($resultado)) {
                                        $cod_doctor=$fila['cod_doc'];
                                        $cod_dia=$fila['cod_dia'];
                                        
                                            //consultado las otras tablas relacionadas
                                            $sql_para_doc="SELECT cod_doc, nombres_doc, seg_nombre from doctor where $cod_doctor=cod_doc";
                                            $res_para_doc=$mysqli->query($sql_para_doc);
                                            //mysqli_num_rows($res_para_doc);
                                            while ($fila_para_doc = mysqli_fetch_assoc($res_para_doc)) {
                                            $nombre_para_doc=$fila_para_doc['nombres_doc'];
                                            $seg_nombre_para_doc=$fila_para_doc['seg_nombre'];
                      
                                                $sql_para_dia="SELECT cod_dia, descripcion from dias where $cod_dia=cod_dia ORDER BY descripcion DESC";
                                                $res_para_dia=$mysqli->query($sql_para_dia);
                                                //mysqli_num_rows($res_para_dia);
                                                while ($fila_para_dia = mysqli_fetch_assoc($res_para_dia)) {
                                                $descripcion_dia=$fila_para_dia['descripcion'];
                                        ?>                              
                                </tr>
                                <tr>
                                    <th><?php echo $nombre_para_doc; ?> <?php echo $seg_nombre_para_doc; ?></th>
                                    <th></th>
                                    <th><?php echo $descripcion_dia; ?></th>
                                    <th><?php echo $fila['cantidad_paciente']; ?></th>
                                </tr>
                                        <?php                                                               }
                                                                                                        }              
                                                                                        } 
                                        ?>
                            </thead>
                        </table>
                    </form>
                </div>
                    
                <div class="row">
                    <form class="form-horizontal" role="search" name='horario_doctor_elimina' id='horario_doctor_elimina' method='POST' action="?view=models&action=eliminaHorario">
                        
                            <legend id="leyenda">En esta seccíon podrá eliminar un horario para un doctor</legend>
                        
                        <div class="input-field col s4 m4 l4" >
                            <?php 
                            $sql_doc="SELECT cod_doc, nombres_doc, seg_nombre from doctor ORDER BY cod_doc ASC";
                            $res_doc=$mysqli->query($sql_doc);
                            ?>
                            <select id="eli_h_doctor_eliminacion" name="eli_h_doctor_eliminacion" class="browser-default col s12 m12 l12" title="Elegir al Doctor">
                            <option value="empty" selected>Elegir al Doctor</option>
                            <?php while ($fila_doc=mysqli_fetch_assoc($res_doc)){ ?>
                            <option value="<?php echo $fila_doc['cod_doc']?>"><?php echo $fila_doc['nombres_doc']; ?>    <?php echo $fila_doc['seg_nombre']; ?></option>
                                                                           <?php } ?>
                            </select>
                        </div>

                        <div class="input-field col s3 m3 l3" >
                            <?php 
                            $sql_dia="SELECT * from dias ORDER BY cod_dia ASC";
                            $res_dia=$mysqli->query($sql_dia);
                            ?>
                            <td><select id="eli_dia_eliminacon" name="eli_dia_eliminacon" class="browser-default col s12 m12 l12" title="Elegir el Día">
                            <option value="empty" selected>Elegir el Día</option>
                            <?php while ($fila_dia=mysqli_fetch_assoc($res_dia)){ ?>
                            <option value="<?php echo $fila_dia['cod_dia']?>"><?php echo $fila_dia['descripcion']?></option>
                                                                           <?php } ?>
                            </select></td>
                        </div>

                        <div class="input-field col s1 m1 l1" >
                            <button type='submit' id='btnEliminaHorarioDoctor' class='btn btn-danger' onclick="">Eliminar</button><!--funcioValNewHorarioDoctor();!-->                             
                        </div>
                    </form>
                </div>
                    
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default btn-xs" data-dismiss="modal">Cerrar</button>
                        </div>
            </div>
        </div>
    </div>
</div>
        <!--end static dialogxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->
</body>
<?php require(FOOTER_LOGIN . 'public/footer_login.html');?>