<?php require_once(ACCESO_DENEGADO . 'controllers/accesoDenegado.php');?>
<?php include(HEADER_LOGIN .'public/header_login.html'); ?>
<?php include(HTML_CORE . 'overall/topnav.php'); ?>
<?php require_once (MODELS . "conexion.php");?>

<img src="view/img/banner2.png" class="img-responsive" alt="" style="display:flex; margin:0 auto;">
	<main>
		<center>
			<br />
			<form action="?view=estadisticas&action=Promedios" class="col s12" method="POST" name="estadisticas">
				<a href="?view=consultas&action=promediosDoctores" class="waves-effect waves-light btn-large">Doctores</a>
				<a href="?view=consultas&action=promediosEnfermeras" class="waves-effect waves-light btn-large">Enfermeras</a>
				<a href="?view=consultas&action=promediosPacientes" class="waves-effect waves-light btn-large">Pacientes</a>
				<a href="?view=consultas&action=promediosUsuarios" class="waves-effect waves-light btn-large">Usuarios</a>
			

				</form>
			<br />
	</main>
<style type="text/css">
	#estadisticas a{
    background: white;
    border: none;
    border-radius: 5px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    box-shadow: 0 0 15px 1px rgba(0,0,0, 0.4);
    padding: 10px 30px;
    box-sizing: border-box;
    width: 99%;
    right: 30px;
    margin: 15 0%;
    position:absolute;/*comentar para que los formularios se muestren desplegados*/
}

</style>
<?php//include(FOOTER_LOGIN . 'public/footer_login.html'); l quite esto es algo viejo?>
<?php include(FOOTER_CORE . 'public/footer.html'); ?>