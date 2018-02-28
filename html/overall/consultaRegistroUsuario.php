<?php include(ACCESO_DENEGADO . 'controllers/accesoDenegado.php'); ?>
<?php include(CABECERA_CORE . 'public/cabecera.html'); ?>
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

<div class="container">
		<!-- Opciones -->
		<section style="text-align: center; margin: -20px;">
		    <img src="view/img/logo.png" class="logohospital"></img>
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
                </strong>!
            </h3>
		</section>
		<section>
			<div class="jumbotron jumbotron-fluid estadisticas">
			  <h1 class="display-3">Bienvenido al SCGHM!</h1>
			  <center><h5 class="display-3">Se encuentra en la sección de Usuarios sin confirmar</h5></center>
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
			                     <td><?php echo $Users_confirm['cod_usuario']; ?></td>
        			             <td><?php echo $Users_confirm['cod_rol_usuario']; ?></td>
        			             <td><?php echo $Users_confirm['nombre_usu']; ?></td>
        			             <td><?php echo $Users_confirm['fecha_creacion']; ?></td>
        			             
        			             <td>
            			             <?php
            			             if ($Users_confirm['confirmacion'] != '1') {
            			                 echo '<a id="consulta" href="javascript:void(0);" onclick="return confirmarUsuario('.$Users_confirm['cod_usuario'].');">Sin Confirmar<img src="?view=vistas&action=editar"></img></a>';
            			             
          			                 
            			             }else {                                               
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
		</section>
		<div class="row">
		    <div class="col s12 m12 l12">
    		<section>
    			<div class="btn-group btn-group-justified">
    			    <!--solo el administrador puede agregar usuarios/doctores-->
    			    <?php if ($_SESSION['rol']=="2" || $_SESSION['rol']=="3" || $_SESSION['rol']=="4") {
    			        echo "<a href='#' class='btn btn-success'>Opcion Deshabilitada</a>";
     				    echo "<a href='#' class='btn btn-success' title='Opcion Deshabilitada</a>";
     				    echo "<a href='#' class='btn btn-success' title='Cambiar Clave</a>";
    			    }else{
    			        echo "<a href='?view=vistas&action=nuevoUsuario' class='btn btn-success'>Agregar Nuevo Usuario</a>";
    			        //echo "<a href='?view=vistas&action=consultaUsuario' class='btn btn-success'>Confirmar Usuario</a>";
     				    echo "<a href='?view=vistas&action=newDoctor' class='btn btn-success' title='Agregar Nuevo Doctor'>Agregar Nuevo Doctor</a>";
     				    echo "<a href='#' class='btn btn-success' title='Cambiar Clave</a>";
    			    }
    			    ?>
    			</div>
    		</section>		        
		    </div>
		</div>
		<div class="row">
		    <div class="col s12 m12 l12">
    		<div class="desarrolladores">Desarrollado por: Wendy R. Cristofer U. Aitor U. Gabriel M. & Frederick G. Estudiantes del Colegio Universitario Francisco de Miranda</div>
		    </div>
		</div>


	</div>
	<?php include(FOOTER_CORE . 'public/footer.html') ?>
