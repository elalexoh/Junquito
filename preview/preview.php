<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="sidebar.css">
</head>
<body>
	<header>
		<div class="contenedor" id="cuenta">
			<img class="icon" src="user.png" alt="">
			<p class="texto">Username</p>
			<a href="" class="hovera"><img class="icon" src="logout.png" alt=""></a>
			<p class="texto">Logout</p>
		</div>
		<!--<div class="contenedor" id="uno">
			<img class="icon" src="user.png" alt="">
			<p class="texto">Usuario</p>
		</div>
		<div class="contenedor" id="dos">
			<img class="icon" src="user.png" alt="">
			<p class="texto">Usuario</p>			
		</div>-->
		<div class="contenedor" id="tres">
			<img class="icon" src="user.png" alt="">
			<p class="texto">opcion 1</p>			
		</div>
		<div class="contenedor" id="cuatro">
			<img class="icon" src="user.png" alt="">
			<p class="texto">opcion 2</p>			
		</div>
		<div class="contenedor" id="cinco">
			<img class="icon" src="user.png" alt="">
			<p class="texto">opcion 3</p>			
		</div>
		<div class="contenedor" id="seis">
			<img class="icon" src="user.png" alt="">
			<p class="texto">opcion 4</p>			
		</div>
	</header>
	<section>
		<div class="encabezado">
			<h1>Bienvenido al SRCHM</h1>
		</div>
		<div>
			<p></p>
		</div>
	</section>
	
<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Hospital Municipal "El Junquito"</a>
				</div>
		
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Especialidades</a></li>
						<li><a href="#">Servicios</a></li>
					</ul>
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Buscar paciente">
						</div>
						<!--<button type="submit" class="btn btn-default">Busqueda</button>-->
						<a href="?view=vistas&action=consultaPaciente" class="btn btn-default">Busqueda</a>

					</form>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#"></a></li>
						<li class="dropdown">
							<a href="?view=login&action=IniciOdeSesion" class="dropdown-toggle" data-toggle="dropdown">Usuario</a>
							
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>

</body>
</html>