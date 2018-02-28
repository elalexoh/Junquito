<?php// include(HEADER_LOGIN .'public/header_login.html'); ?>
<?php include_once ("core/models/conexion.php"); ?>
<head>
    
<link rel="stylesheet" href="view/bootstrap/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="view/rightnav2.css" type="text/css" />
<script src="view/bootstrap/js/bootstrap.min.js"></script>

</head>
<body>
    <nav>
        <ul class="clearfix">
            <li>
                <a href="#"><span class="fontawesome-user"><img src="view/img/doctor.svg"></img></span></a>
                <ul class="newCita">
                    <?php
                        if ($_SESSION['rol']=="2") {
                            $c_doctor ="select cod_doc from doctor where cod_usuario ='".$_SESSION['user_id']."'";
                            $doctor = $mysqli->query($c_doctor);
                            $fila=$doctor->fetch_assoc();
                            $sql = "SELECT * FROM cita INNER JOIN doctor, paciente WHERE cita.cod_doc = doctor.cod_doc && cita.cod_paciente = paciente.cod_paciente && cita.cod_doc ='".$fila["cod_doc"]."'";
                        }else{
                            $hoy = date('Y-m-d'); //para confirmar la cita para el mismo dia que sale
                            $sql = "SELECT * FROM cita INNER JOIN doctor, paciente, turno WHERE cita.cod_doc = doctor.cod_doc && cita.cod_paciente = paciente.cod_paciente && cita.cod_turno_med = turno.cod_turno_med && cita.status_cita = 'N' && '".$hoy."'=fecha  limit 4 ";
                        }
                            $resultado = $mysqli->query($sql);
                        if (mysqli_num_rows($resultado) == 0) {
                            //echo "no hay por hoy";
                        }else{
                            while ($fila = mysqli_fetch_assoc($resultado)) {?>
                                <?php $codigo_cita = $fila['cod_cita']; //llamando al codigo cita para que se vea bien la notificacion?>                           
                                <li>
                                    <a data-toggle="modal" data-target="<?php echo "#".$codigo_cita; ?>">
                                        <span class="fontawesome-twitter"><img class="" src="view/img/notification.svg" alt="">
                                        </span>
                                    </a>
                                </li><!--el que saca el boton del modal-->
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="modal fade bs-example-modal-lg" id="<?php echo $codigo_cita; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                            <div class="modal-dialog" role="document">
                                                <div class="row">
                                                    <div class="col-sm-10 col-md-10 col-lg-10"> 
                                                        <font color="black"><h2 class="text-center" class="formlegend"><img src="view/img/report.png"></img>Confirmación de Citas</h2></font>
                                                    </div>
                                                    <div class="col-sm-2 col-md-2 col-lg-2"> 
                                                        <img src="view/img/logo.png" class="logohospital"></img>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <center><legend id="leyenda">En esta seccíon podrá confirmar las citas del día</legend></center>
                                                </div>
                                                <!--<h4 class="text-center" class="formlegend"><img src="../../preview/report.png"></img>Confirmar la Cita de un Paciente</h4>-->
                                                <form class="form-horizontal litaCitas" role="" name='form_confir_cita' id='form_confir_cita' method='POST' action="?view=models&action=consultaListadoCitas">
                                                <table class="order-table table">
                                                    <thead>
                                                        <tr>
                                                            <th><font color="black">Doctor</font></th>
                                                            <th><font color="black">Paciente</font></th>
                                                            <th><font color="black">C.I.</font></th>
                                                            <th><font color="black">Fecha</font></th>
                                                            <th><font color="black">Turno</font></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><font color="black"><?php echo utf8_decode($fila['nombres_doc']); ?></font></td>
                                                            <td><font color="black">
                                                            <?php echo utf8_encode($fila['primer_nombre'])." ".utf8_encode($fila['primer_apellido']); 
                                                            ?></font></td>
                                                            <td><font color="black"><?php echo utf8_decode($fila['cedula_paciente']); ?></font></td>
                                                            <td><font color="black"><?php echo $fila['fecha']; ?></font></td>
                                                            
                                                                 <?php $cod_turno_med = $fila['cod_turno_med']; 
                                                                 //llamando a la tabla relacionanda ara ver el turno
                                                                 $sql_des_turno = "SELECT * from turno where cod_turno_med=$cod_turno_med";
                                                                 $res_des_turno = $mysqli->query($sql_des_turno);
                                                                 while ($fila_des_turno = mysqli_fetch_assoc($res_des_turno)) { 
                                            	                 $des_turno = utf8_encode($fila_des_turno['turno']);  
                                                                                                                               
                                                                 ?>
                                                            <td><font color="black"><?php echo $des_turno; } ?></font></td>
                                                            <?php utf8_decode($fila['status_cita']);
                                                                $status_c = $fila['status_cita'];
                                                                $sta_conf = "";
                                                                if($status_c == 'N') {
                                                                $sta_conf = "Sin confirmar";
                                                                }else {
                                                                $sta_conf = "Confirmada";
                                                                }
                                                            ?>
                                                                <input type="hidden" name="ajax">
                                                            <td><button type='button' class='btn btn-danger' onclick='return confirmar_cita(<?php echo $codigo_cita; ?>);'><?php echo $sta_conf; ?></button></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <form>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default btn-xs" data-dismiss="modal">Cerrar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                            }
                        }?>
                </ul>
            </li>
        </ul>
    </nav>                                                                      <!--el fin del rinav -->
</body>
<?php require(FOOTER_LOGIN . 'public/footer_login.html');?>