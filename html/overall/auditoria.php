<?php include(ACCESO_DENEGADO . 'controllers/accesoDenegado.php');?>
<?php include(HEADER_LOGIN .'public/header_login.html'); ?>
<?php include(HTML_CORE . 'overall/topnav.php'); ?>
<?php require_once (MODELS . 'conexion.php'); ?>
<script>
    function confirmarUsuario(cod_usuario) {
        if (!confirm("\u00bfEsta Seguro en Confirmar a este Usuario?")) {
            return false;
        }
        $('#consulta').attr("action", '?view=models&action=confirmarUsuario&cod_usuario=' + cod_usuario);
        $('#consulta').submit();
    }
</script>
<img src="view/img/banner2.png" class="responsive-img" alt="" style="display:flex; margin:0 auto;">
<div class="container">
      <div class="row">
        <div class="col s12 m6">
          <div class="card teal darken-1">
            <div class="card-content white-text">
                <h3 class="center-align"><p>Bienvenido</p></h3>
            </div>
            <div class="card-action">
             <div class="col s6 right-align"><img class="" style="width: 100px;" src="view/img/consulta.svg" alt=""></div>
             <div class="col s6 left-align"><img class="" style="width: 100px;" src="view/img/personalizada.svg" alt=""></div>
             <!--<div class="col s3"><img class="icon" src="view/img/logout.svg" alt=""></div>-->
            </div>
            <div class="card-tabs">
              <ul class="tabs tabs-fixed-width">
                <li class="tab"><a class="active" href="#detalles">Usuarios Del sistema</a></li>
                <li class="tab"><a href="#personalizada">Consulta personalizada</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col s12 m6">
            <div class="card">
                <div class="card-content grey lighten-4">
                    <div id="detalles">
                        <div class="container">
                            <div class="row">
                                <h5><p style="color:#00897B;" class="right-align">¡En esta sección apreciara los datos de registro de los usuarios del sistema!</p></h5>
                            </div>
                            <div class="row">
                              <ul class="tabs">
                                <li class="tab col s4"><a  href="#confirmar">Por Confirmar</a></li>
                                <li class="tab col s4 "><a href="#pacientes">Pacientes</a></li>
                                <li class="tab col s4"><a href="#citas">Citas</a></li>
                              </ul>
                            </div>
                        </div>
                    </div>
                    <div id="personalizada">
                        <div class="container">
                            <form action="?view=models&action=generarInforme"  target="_blank" method="POST" id="reporteAuditoria">
                                <div class="row">
                                    <div class="col s6 m6 l6">
                                        <select name="nameUsu" id="nombreUsu" class="browser-default" title="Ingrese el nombre de usuario">
                                           <option value="empty" selected>Seleccione un usuario</option>
                    			                  <?php
                    				                  	  $c_usuario="SELECT * FROM usuario";
                    					                  	$query_usuario= $mysqli->query($c_usuario);
                    					                  
                    					                  while ($array_usuario=mysqli_fetch_assoc($query_usuario)) {
                    					                  	echo "<option value='".$array_usuario['cod_usuario']."'>".utf8_encode($array_usuario['nombre_usu'])."</option>";
                    					                  }
                    			                  	?>
                                       </select>
                                    </div>
                                    <div class="col s6 m6 l6">
                                        <button id="btnGenerarInforme" type="submit" class="btn btn-medium waves-effect indigo" >Generar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="row">
            <div class="col s12 m12 l12">
              <div class="card grey lighten-4">
                <div class="card-content">
                    <div id="confirmar">
                        <div class="container">
                            <form role="search" name='consulta' id='consulta' method='post' action="?view=models&action=confirmarUsuario">		      
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <td>Id</td>
                                            <td>Rol</td>
                                            <td>Usuario</td>
                                            <td>Fecha y hora de Registro</td>
                                            <td>Status Actual</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            if ($_SESSION['rol']=="1") {
                                            $user = "SELECT * FROM usuario WHERE confirmacion !='1'";
                                            $confirm = $mysqli->query($user);
                                            while($Users_confirm = mysqli_fetch_assoc($confirm)){
                                        ?>
                                                <tr>
                                                    <td><?php echo utf8_decode($Users_confirm['cod_usuario']); ?></td>
                                                    <td><?php 
                                                        $c_rol=$obj->consultar("select * from rol_de_usuario where cod_rol_usuario='".$Users_confirm['cod_rol_usuario']."'");
                                                        foreach ($c_rol as $rol){
                                                            echo utf8_decode($rol['descripcion']);
                                                        }
                                                    ?></td>
                                                    <td><?php echo utf8_encode($Users_confirm['nombre_usu']); ?></td>
                                                    <td><?php echo utf8_decode($Users_confirm['fecha_creacion']); ?></td>
                                                    <td>
                                                        <?php
                                                            if ($Users_confirm['confirmacion'] != '1') {
                                                                echo '<a id="consulta" href="javascript:void(0);" onclick="return confirmarUsuario('.$Users_confirm['cod_usuario'].');">Sin Confirmar <img src="?view=vistas&action=editar"></img></a>';
                                                            }else{                                               
                                                                //este codigo jamas va a llegar aqui porque la consulta que estas haciendo solo pide datos igual a 0 y 1
                                                                $respuesta ="Usuario Confirmado";
                                                            }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <?php
                                                    }
                                                    }
                                                ?>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                    <div id="pacientes">
                        <div class="container">
                                <?php //include(MODELS . 'controlDB.php');
                                    //print_r($_POST);
                                    $obj = new controlDB();
                                    $c_paciente=$obj->consultar("SELECT cod_paciente, primer_nombre, primer_apellido, fecha_reg, usuario_reg FROM paciente")or die("");
                                    echo "<div class='row'>
                                    <div class='col s12 m12 l12'>";
                                    echo "<table class='table table-hover'>
                                    <thead>
                                        <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Usuario que hizo el registro</th>
                                        <th>Fecha de creación</th>
                                        </tr>
                                    </thead>
                                    <tbody>";
                                    echo "</div></div>";
                                    echo "<div class='row'>
                                    <div class='col s12 m12 l12'>";             
                        			foreach($c_paciente as $paciente) {
                                    echo"<tr><td>";
                                    echo utf8_encode($paciente['cod_paciente']);
                                    echo "</td><td>"; 
                                    echo utf8_encode($paciente['primer_nombre']);
                                    echo " ";
                                    echo utf8_encode($paciente['primer_apellido']);
                                    echo "</td><td>";
                                    $obj = new controlDB();
                                    $c_name_paciente=$obj->consultar("SELECT nombre_usu FROM usuario WHERE cod_usuario='".$paciente['usuario_reg']."' ")or die("");
                                    foreach($c_name_paciente as $name_paciente) {
                                    echo utf8_encode($name_paciente['nombre_usu']);
                                    }
                                    echo "</td><td>"; 
                                    echo $paciente['fecha_reg'];
                                    echo "</td>";
                                    }   
                                    echo "</tbody></table>";
                                    echo "</div>
                                    </div>"; 
                                ?>
                        </div>
                    </div>
                    <div id="citas">
                        <div class="container">
                            <?php //include(MODELS . 'controlDB.php');
                                //print_r($_POST);
                                $obj = new controlDB();
                                $c_cita=$obj->consultar("SELECT cod_cita, usuario_reg, fecha_reg, status_cita FROM cita")or die("");
                                echo "<div class='row'>
                                <div class='col s12 m12 l12'>";
                                echo "<table class='table table-hover'>
                                <thead>
                                    <tr>
                                    <th>Id</th>
                                    <th>Usuario que hizo el registro</th>
                                    <th>Fecha de creación</th>
                                    <th>Estatus</th>
                                    </tr>
                                </thead>
                                <tbody>";
                                echo "</div></div>";
                                echo "<div class='row'>
                                <div class='col s12 m12 l12'>";             
                    			foreach($c_cita as $cita) {
                                echo"<tr><td>";
                                echo utf8_decode($cita['cod_cita']);
                                echo "</td><td>"; 
                                $obj = new controlDB();
                                $c_name_cita=$obj->consultar("SELECT nombre_usu FROM usuario WHERE cod_usuario='".$cita['usuario_reg']."' ")or die("");
                                foreach($c_name_cita as $name_cita) {
                                echo utf8_decode($name_cita['nombre_usu']);
                                }
                                echo "</td><td>";
                                echo utf8_decode($cita['fecha_reg']);
                                echo "</td><td>"; 
                                echo utf8_decode($cita['status_cita']);
                                echo "</td>";
                                }   
                                echo "</tbody></table>";
                                echo "</div>
                                </div>"; 
                            ?>
                        </div>
                    </div>
                </div>
              </div>
            </div>
      </div>
</div>
<?php include(FOOTER_LOGIN . 'public/footer_login.html'); ?>