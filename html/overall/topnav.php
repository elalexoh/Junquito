<?php include(MODELS . 'controlDB.php');
    $obj = new controlDB();
    $c_user=$obj->consultar("select * from usuario where cod_usuario='".$user_id."'");
?>
	<header>
	    <link rel="stylesheet" href="">
		<div class="contenedor" id="cuenta">
		    <a class="urlmenu" href="?view=vistas&action=menuPrincipal" title="Ir al menu Principal">
			<img class="icon" src="view/img/user2.svg" alt="">
			<?php foreach($c_user as $user) { ?>
			<p class="texto"><?php echo utf8_encode($user["nombre_usu"]); ?></p>
			<?php } ?>
			<a href="?view=models&action=cerrarSession" class="hovera"><img class="icon" src="view/img/logout.svg" alt=""></a>
			<p class="texto">Cerrar Sesión</p>
		</div>
		<!--<div class="contenedor" id="uno">
			<img class="icon" src="user.png" alt="">
			<p class="texto">Usuario</p>
		</div>
		<div class="contenedor" id="dos">no exis
			<img class="icon" src="user.png" alt="">
			<p class="texto">Usuario</p>			
		</div>-->
		<div class="contenedor" id="tres">
			<a class="urlmenu" href="?view=consultas&action=nuevaConsulta" title="Consultas Médicas (Especialidades)"><img class="icon" src="view/img/notebook.svg" alt="">
			<p class="texto noDecoration">Consultas</p>
			</a>
			
		</div>
		<div class="contenedor" id="cuatro">
		    <?php if(($_SESSION['rol'] =="4") || ($_SESSION['rol'] =="2" || ($_SESSION['rol'] =="3"))){
		        echo'<a class="urlmenu" href="?view=vistas&action=newPaciente" title="Nuevo Paciente"><img class="icon" src="view/img/newuser.svg" alt="">';
		        echo'<p class="texto noDecoration">Nuevo Paciente</p>';
	    	}else if (($_SESSION['rol'] =="1") ) {
		        echo'<a class="urlmenu" href="?view=vistas&action=consultasAuditoria" title="Auditoría"><img class="icon" src="view/img/newuser.svg" alt="">';
		        echo'<p class="texto noDecoration">Auditoría</p>';
	    	}else{
	    	    echo'<img class="icon" src="view/img/newuser.svg" alt="">';
	    	    echo'<p class="texto noDecoration">Deshabilitado</p>';
	    	}
	    	?>
			<!--<a class="urlmenu" href="?view=vistas&action=newPaciente" title="Nuevo Paciente"><img class="icon" src="view/img/newuser.svg" alt="">!-->
	    	<!--<a class="urlmenu" href="?view=vistas&action=nuevoUsuario" title="Registro de Usuario">!-->
			</a>
		</div>
		<div class="contenedor" id="cinco">
			<a class="urlmenu" href="?view=vistas&action=estadisticasHospital" title="Estadísticas o Promedios"><img class="icon" src="view/img/grafico.svg" alt="">
			<p class="texto noDecoration">Estadísticas</p>
			</a>
		</div>
		<div class="contenedor" id="seis">
		    <?php if( ($_SESSION['rol'] !="3") && ($_SESSION['rol'] !="4") ){
    		        echo '<a class="urlmenu" href="?view=consultas&action=listadoCitas" title="Citas Médicas"><img class="icon" src="view/img/calendar.svg" alt=""></a>
    			    <p class="texto noDecoration">Listado de Citas</p>';
		        }else{
		            echo '<a class="urlmenu" href="?view=vistas&action=nuevaCita" title="Citas Médicas"><img class="icon" src="view/img/calendar.svg" alt=""></a>
			    <p class="texto noDecoration">Registrar cita</p>';
		        }
		    ?>
		</div>
		</div>  
	</header>