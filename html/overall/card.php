<?php include(ACCESO_DENEGADO . 'controllers/accesoDenegado.php');?>
<?php include(MODELS .'conexion.php');
if (isset($_SESSION['cedulaPaciente'])) {
  if ($resultado = $mysqli->query("select * from paciente where cedula_paciente='".$_SESSION['cedulaPaciente']."'")) {
    if (mysqli_num_rows($resultado) == 0) {
        echo '<script>alert("Error Cédula no registrada")</script>';
        echo "<script>location.href='?view=vistas&action=menuPrincipal'</script>";
    }
}
}

?>
<?php include(HEADER_LOGIN .'public/header_login.html'); ?>
<?php include(HTML_CORE . 'overall/topnav.php'); ?>
<img src="view/img/banner2.png" class="responsive-img" alt="" style="display:flex; margin:0 auto;">
<?php 
if(isset($_POST["cedula"])){
    $_SESSION['cedulaPaciente']=$_POST['cedula'];
	$query="select * from paciente where cedula_paciente='".$_POST["cedula"]."'";
}elseif(isset($_SESSION['cedulaPaciente'])){
	$query="select * from paciente where cedula_paciente='".$_SESSION['cedulaPaciente']."'";
}
if (isset($_POST["cedula"])) {
    $_SESSION['cedulaPaciente']=$_POST["cedula"];
}
?>
<?php //include(MODELS . 'controlDB.php');
    //print_r($_POST);
    $obj = new controlDB();
    $datos=$obj->consultar($query)or die("");
?>

<div class="container">
  <!--<div class="fixed-action-btn horizontal">
    <a class="btn-floating btn-large red">
      <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
      <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
      <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
      <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
      <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
    </ul>
  </div> -->
      <div class="row">
        <div class="col s12 m6">
          <div class="card teal darken-1">
            <div class="card-content white-text">
             <?php foreach($datos as $fila) { ?>
              <span class="card-title"><?php echo utf8_encode($fila["primer_nombre"])." ".utf8_encode($fila["primer_apellido"]);?>
              </span>
              <p>
                  <?php //if($fila["cod_genero"]=='1'){echo "Alergica";}else echo "Alergico";?> Alergias: 
                  <strong class="blue-text text-darken-4">
                      <?php $c_alergia=$obj->consultar("select * from alergias where cod_alergia='".$fila["cod_alergia"]."'");
                        foreach($c_alergia as $alergia){?>
                        <?php echo $alergia["descripcion"];?>
                      <?php }?>
                  </strong>
                  <!--<a href="#" class="btn btn-medium waves-effect red">+</a>-->
    
              </p>
              <p>Fecha de ingreso al hospital: <strong class="blue-text text-darken-4"><?php echo $fila["fecha_reg"];?></strong></p>
              <!--<p>Tipo de sangre: <strong class="blue-text text-darken-4"><?php echo $fila["fecha_reg"];?></strong></p>-->
            </div>
            <?php }?>
            <div class="card-action">
             <div class="col s4"><img class="" src="view/img/paciente.svg" alt=""></div>
             <div class="col s4"><img class="" src="view/img/notebook.svg" alt=""></div>
             <div class="col s4"><img class="" src="view/img/calendar.svg" alt=""></div>
             <!--<div class="col s3"><img class="icon" src="view/img/logout.svg" alt=""></div>-->
            </div>
            <div class="card-tabs">
              <ul class="tabs tabs-fixed-width">
                <li class="tab"><a class="active" href="#detalles">Detalles</a></li>
                <li class="tab"><a href="#historia">Historia médica</a></li>
                <li class="tab"><a href="#citas">Citas médicas</a></li>
              </ul>
            </div>
          </div>
        <a href="?view=vistas&action=menuPrincipal"><button class='btn btn-medium waves-effect red' type='submit' >Volver</button></a>
         <!--<a href="?view=models&action=imprimirHistoria" target='_blank'><button class='btn btn-medium waves-effect red' type='submit' >imprimir</button></a>-->
        <!--<?php //$imprimirCed=$_POST['cedula']; ?>-->
        <!--<form id="enviar" action="" method="POST" name="enviar">-->
        <!--    <input type="hidden" name="cedula" value="<?php $imprimirCed; ?>" />-->
        <!--    <button onclick="return varCedula($imprimirCed);" class='btn btn-medium waves-effect red' type='submit' formtarget="_blank">Imprimir</button>-->
        <!--</form>-->
        
        </div>
        <div class="col s12 m6">
            <div class="card">
            <div class="card-content grey lighten-4">
              <div id="detalles">
                 <h5><span><img style="width: 40px;" src="view/img/paciente.svg" alt=""></span>Ficha Preliminar: <strong class="teal-text text-darken-1"><?php echo utf8_encode($fila["primer_nombre"])." ".utf8_encode($fila["primer_apellido"]);?></strong></h5>
                  <form class="teal-text text-darken-4">
                    <div class="row">
                        <div class="col s6 m6 l6">
                           <?php $c_pais=$obj->consultar("select * from nacionalidad where cod_nacionalidad='".$fila["cod_nacionalidad"]."'");
                            foreach($c_pais as $pais){ ?>
                                <input class="center" type="text" value=" <?php echo $pais["nombre_pais"];?>" disabled>
                            <?php } ?>
                            <p class="center">Nacionalidad</p>
                        </div>
                        <div class="col s6 m6 l6">
                           <?php $c_profesion=$obj->consultar("select * from profesion where cod_profesion='".$fila["cod_profesion"]."'");
                            foreach($c_profesion as $profesion){?>
                            <input class="center" type="text" value=" <?php echo utf8_encode($profesion["descripcion"]);?>" disabled>
                            <?php }?>
                            <p class="center">Profesión</p>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col s4 m4 l4">
                            <input class="center" type="text" value=" <?php echo $fila["cedula_paciente"];?>" disabled >
                            <p class="center">Cédula de identidad</p>
                        </div>
                        <div class="col s4 m4 l4">
                           <?php $c_civil=$obj->consultar("select * from estado_civil where cod_estado_civil='".$fila["cod_estado_civil"]."'");
                            foreach($c_civil as $civil){ ?>
                            <input class="center" type="text" value=" <?php echo $civil["descripcion"];?>" disabled>
                            <?php } ?>
                            <p class="center">Estado Civil</p>
                        </div>
                        <div class="col s4 m4 l4">
                           <?php $c_sexo=$obj->consultar("select * from genero where cod_genero='".$fila["cod_genero"]."'");
                            foreach($c_sexo as $sexo){  ?>
                            <input class="center" type="text" value=" <?php echo $sexo["tipo_genero"];?>" disabled>
                            <?php } ?>
                            <p class="center">Sexo</p>
                        </div>
                     </div>
                    <div class="row">
                        <div class="col s4 m4 l4">
                            <input class="center" type="text" value=" <?php echo $fila["nro_seguro"];?>" disabled>
                            <p class="center">Nro de seguro</p>
                        </div>
                        <div class="col s4 m4 l4">
                           <?php $c_sangre=$obj->consultar("select * from tipo_sangre where cod_tipo_sangre='".$fila["cod_tipo_sangre"]."'");
                            foreach($c_sangre as $sangre){ ?>
                            <input class="center" type="text" value=" <?php echo $sangre["descripcion"];?>" disabled>
                            <?php } ?>
                            <p class="center">Tipo de sangre</p>
                        </div>
                        <div class="col s4 m4 l4">
                            <input class="center" type="text" value=" <?php echo $fila["telefono_movil"];?>" disabled>
                            <p class="center">Nro Telefonico</p>
                        </div>
                     </div>
                  </form>
              </div>
              
              <div id="historia">
                  <h5><span><img style="width: 40px;" src="view/img/notebook.svg" alt=""></span>Historia médica de: <strong class="teal-text text-darken-1"><?php echo utf8_encode($fila["primer_nombre"])." ".utf8_encode($fila["primer_apellido"]);?></strong></h5>
                  <!-- Contenido de Historia médica-->
                    <ul class="collapsible" data-collapsible="accordion">
                    <li>
                      <div class="collapsible-header"><i class="material-icons"><img src="view/img/notebook.svg"></img></i>Historia Médica</div>
                        <div class="collapsible-body">
                            <div class="container">
                                <?php
                                //quiero saber si el usuario que esta buscando es un doctor
                                    if ($user['cod_rol_usuario']=='2') {
                                        //si es un doctor cual es su especialidad
                                        $c_doctor=$obj->consultar("SELECT cod_especialidad FROM doctor where cod_usuario = '".$user['cod_usuario']."'");
                                        foreach ($c_doctor as $especialidad) {
                                            if (/*ginecologia*/$especialidad['cod_especialidad']=='1') {
                                                echo '<h3 class="center-align">Ginecología</h3>';
                                            }else if (/*pediatria*/$especialidad['cod_especialidad']=='2') {
                                                echo '<h3 class="center-align">Pediatría</h3>';
                                                $c_pediatria=$obj->consultar("SELECT * FROM pediatria WHERE cod_paciente='".$fila["cod_paciente"]."'");
                                                if (empty($c_pediatria)) {
                                                    echo "<a href='?view=vistas&action=pediatria' class='btn btn-success center-align'>Nueva Consulta</a>";
                                                }else{
                                                    foreach ($c_pediatria as $pediatria) { ?>
                                                        <a href='?view=vistas&action=conPediatria' class="waves-effect waves-light btn"><?php echo $pediatria["fecha_reg"];?></a>
                                                        <?php $_SESSION["id_pac"]=$fila["cod_paciente"];
                                                            $_SESSION["fecha_reg"]=$pediatria['fecha_reg'];
                                                    } 
                                                    echo "<a href='?view=vistas&action=pediatria' target='_blank' class='btn btn-success center-align'>Nueva Consulta</a>";
                                                } 
                                            }else if (/*Medicina General*/$especialidad['cod_especialidad']=='3') {
                                                echo '<h3 class="center-align">Medicina General</h3>';
                                                $c_mgeneral=$obj->consultar("SELECT * FROM medicina_general WHERE cod_paciente='".$fila["cod_paciente"]."'");
                                                if (empty($c_mgeneral)) {
                                                    echo "<div class='center-align'><a href='?view=vistas&action=medicinaGeneral' class='btn btn-success center-align'>Nueva Consulta</a>";
                                                }else{
                                                    foreach ($c_mgeneral as $mgeneral) { ?>
                                                    <div class="col s2"></div>
                                                    <div class="col s4">
                                                        <a href='?view=vistas&action=conMedicinaGeneral' class="waves-effect waves-light btn center-align">
                                                            <?php echo $mgeneral["fecha_reg"];?>
                                                        </a>
                                                    </div>
                                                    <div class="col s2"></div>
                                                        <?php $_SESSION["id_pac"]=$fila["cod_paciente"];
                                                            $_SESSION["fecha_reg"]=$mgeneral['fecha_reg'];
                                                    } 
                                                    echo "<a href='?view=vistas&action=medicinaGeneral' class='btn btn-success center-align'>Nueva Consulta</a>";
                                                } 
                                            }else if (/*Obstetricia*/$especialidad['cod_especialidad']=='4') {
                                                echo '<h3 class="center-align">Obstetrucía</h3>';
                                            }
                                        }
                                            
                                            
                                    }else{
                                        //si no es un doctor que me muestre todos los registros pero que no pueda registrar
                                        $c_pediatria=$obj->consultar("SELECT * FROM pediatria WHERE cod_paciente='".$fila["cod_paciente"]."'");
                                        $c_mgeneral=$obj->consultar("SELECT * FROM medicina_general WHERE cod_paciente='".$fila["cod_paciente"]."'");
                                        echo '<h3 class="center-align">Pediatría</h3>';
                                        if (empty($c_pediatria)) {
                                               echo "<a href='#' class='btn btn-success center-align'>Ninguna Historia Registrada</a>";
                                            }else{
                                                foreach ($c_pediatria as $pediatria) { ?>
                                                    <a href='?view=vistas&action=conPediatria' class="waves-effect waves-light btn"><?php echo $pediatria["fecha_reg"];?></a>
                                                    <?php $_SESSION["id_pac"]=$fila["cod_paciente"];
                                                        $_SESSION["fecha_reg"]=$pediatria['fecha_reg'];
                                                } 
                                                //echo "<a href='?view=vistas&action=pediatria' class='btn btn-success center-align'>Nueva Consulta</a>";
                                            }
                                        echo '<h3 class="center-align">Medicina General</h3>';
                                        if (empty($c_mgeneral)) {
                                                echo "<a href='#' class='btn btn-success center-align'>Ninguna Historia Registrada</a>";
                                            }else{
                                                foreach ($c_mgeneral as $mgeneral) { ?>
                                                <div class="col s2"></div>
                                                <div class="col s4">
                                                    <a href='?view=vistas&action=conMedicinaGeneral' class="waves-effect waves-light btn center-align">
                                                        <?php echo $mgeneral["fecha_reg"];?>
                                                    </a>
                                                </div>
                                                <div class="col s2"></div>
                                                    <?php $_SESSION["id_pac"]=$fila["cod_paciente"];
                                                        $_SESSION["fecha_reg"]=$mgeneral['fecha_reg'];
                                                } 
                                                //echo "<a href='?view=vistas&action=medicinaGeneral' class='btn btn-success center-align'>Nueva Consulta</a>";
                                            }
                                    }
                                ?>
                                <span>
                                </span>
                            </div>
                        </div>
                    </li>
                    <!--<li>-->
                    <!--  <div class="collapsible-header"><i class="material-icons">place</i>Second</div>-->
                    <!--  <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>-->
                    <!--</li>-->
                  </ul>
              </div>
              <div id="citas">
                  <h5><span><img style="width: 40px;" src="view/img/calendar.svg" alt=""></span>Citas de: <strong class="teal-text text-darken-1"><?php echo utf8_encode($fila["primer_nombre"])." ".utf8_encode($fila["primer_apellido"]);?></strong></h5>
                  <!-- Contenido de Citas-->
                    <div class="row">
                        <div class="col s12 m12 l12">
                            <?php $c_citas=$obj->consultar("SELECT * FROM cita WHERE cod_paciente = '".$fila["cod_paciente"]."' && status_cita='N'");
                            if($c_citas==true){
                            foreach($c_citas as $cita){ 
                                 $c_doctor=$obj->consultar("SELECT * FROM doctor WHERE cod_doc = '".$cita["cod_doc"]."'");
                            foreach($c_doctor as $doctor){ ?>
                            <input class="center" type="text" value="Cita para el:   <?php echo $cita["fecha"];?>        Con el doctor:   <?php echo utf8_encode($doctor["nombres_doc"]);?>   <?php echo utf8_encode($doctor["apellidos_doc"]);?>" disabled>
                                                    <?php }
                                                      }
                                               }else{ ?> 
                            <input class="center" type="text" value="El Paciente no presenta Citas." disabled>
                                               <?php } ?>                         
                        </div>
                  </div>
              </div>
            </div>
            </div>
        </div>
      </div>
</div>
<?php include(FOOTER_LOGIN . 'public/footer_login.html'); ?>