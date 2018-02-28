<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ficha Preliminar Deeply A.</title>
    <link rel="stylesheet" href="../view/estilo.css" type="text/css"/>
    <link rel="stylesheet" href="../view/bootstrap/css/bootstrap.css" type="text/css" />
</head>
<body>
    	<header>
		<div class="" id="uno">
			<img class="question" src="../../preview/questions.png" alt="">
			<p class="question-text">Especialidades del hospital</p>
		</div>
		<div class="" id="">
			<p class="texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, voluptate, sint assumenda esse corporis labore eligendi! A, eos error incidunt debitis eum at. Non, accusamus ipsum id dolorum quo sapiente!</p>			
		</div>

		<!--<div class="contenedor" id="cuatro">
			<img class="icon" src="../preview/user.png" alt="">
			<p class="texto">Registro</p>			
		</div>
		<div class="contenedor" id="cinco">
			<img class="icon" src="../preview/user.png" alt="">
			<p class="texto">Estadisticas</p>			
		</div>
		<div class="contenedor" id="seis">
			<img class="icon" src="../preview/user.png" alt="">
			<p class="texto">Reportes</p>			
		</div>-->
	</header>
    	<section>
		<div class="container">
		<!--<img src="../preview/usu.jpg" class="img-responsive" alt="" width="150px">-->
			<legend class="text-right"><div class="btn btn-success">Modificar</div> Dr. Blue2</legend>

			<!---->
			<hr>
			<form class="cuadroform form-horizontal AVAST_PAM_loginform" action="?view=vistas&action=crearRegistroPaciente" method="POST">
							<h1 class="text-center" class="formlegend"><img src="../../preview/report.png"></img>Ficha Preliminar (Deeply A.)</h1>
							<hr>
			 <fieldset>	
				    <div class="form-group">
				      <label for="inputEmail" class="col-lg-2 control-label">S.S.O.</label>
				      <div class="col-lg-2">
				      	<input disabled type="text" class="form-control" id="inputEmail" placeholder="Nro Seguro Social">
				      </div>
				      <label for="" class="col-lg-2 control-label">Nombres</label>
						<div class="col-lg-2">
							<input disabled type="text" class="form-control" name="nom_newpac" id="nom_newpac" onkeypress="return soloLetras(event)" placeholder="">
						</div>
					      <label for="" class="col-lg-2 control-label">Apellidos</label>
					      <div class="col-lg-2">
					        <input disabled type="text" class="form-control" id="apell_newpac" placeholder="">
					      </div>
					</div>
					<div class="form-group">
						<label for="inputPassword" class="col-lg-2 control-label">C&eacute;dula de Identidad</label>
						<div class="col-lg-2">
							<input disabled maxlength="100" type="text" name="ced_newpac" id="ced_newpac" onblur="ChangeCase(this);" required="required" class="form-control" placeholder="V-555555 E-55555 P-555555" />
						</div>
						<label  class="col-lg-2 control-label">Sexo</label>
							<div class="col-lg-2">
								<select disabled class="form-control" name="genero_newpac" id="genero_newpac" >
									<option>Hombre</option>
									<option>Mujer</option>
								</select>
							</div>
						<label for="" class="col-lg-2 control-label">Fecha de nacimiento</label>
						<div class="col-lg-2">
							<input disabled type="text" class="form-control" name="fechnac_newpac" id="fechnac_newpac" placeholder="DD/MM/AA">
						</div>
					</div>
					    <!-- Activar si es Extranjero -->
					    <div class="form-group ">
					      <label for="select" class="col-lg-2 control-label text-center">Nacionalidad (de ser extranjero)</label>
					      <div class="col-lg-10">
					        <select disabled class="form-control" id="select" >
					          <option value="">Seleccionar</option>
					          <?php
					          
					          while($fila=mysqli_fetch_row($result)){
					          	echo "<option value='".$fila['0']."'>".$fila['1']."</option>";
					          }
					          
					          
					          
					          
					          ?>
					        </select>
					      </div>
					    </div>
					    <!-- Activar si es Venezolano -->					    
					    <div class="form-group ">
					      <label for="inputEmail" class="col-lg-2 control-label">Procedencia por estado</label>
					      <div class="col-lg-10">
					        <select disabled class="form-control" id="select" >
					          <option>Estado</option>
					        </select>
					      </div>
					    </div>					  
					    <div class="">					    							
						    <h3 class="text-center">Dirección Actual</h3>    
						    <div class="form-group">
						      <div class="col-lg-3">
						        <select disabled class="form-control" id="select" >
						          <option>Estado</option>
						          <option>2</option>
						          <option>3</option>
						          <option>4</option>
						          <option>5</option>
						        </select>
						      </div>					      
						      <div class="col-lg-3">
						        <select disabled class="form-control" id="select" >
						          <option>Estado</option>
						          <option>2</option>
						          <option>3</option>
						          <option>4</option>
						          <option>5</option>
						        </select>
						      </div>
						      <div class="col-lg-3">
						        <select disabled class="form-control" id="select" >
						          <option>Ciudad</option>
						          <option>2</option>
						          <option>3</option>
						          <option>4</option>
						          <option>5</option>
						        </select>
						      </div>
							  <div class="col-lg-3">
						        <select disabled class="form-control" id="select" >
						          <option>Municipio</option>
						          <option>2</option>
						          <option>3</option>
						          <option>4</option>
						          <option>5</option>
						        </select>
						      </div>					      
						    </div>
					    </div>
					    <hr>
					    <div class="form-group">
					      <label for="inputEmail" class="col-lg-2 control-label">Números telefónicos</label>
					      <div class="col-lg-5">
					        <input disabled type="text" class="form-control" id="inputEmail" placeholder="">
					      </div>
					      <div class="col-lg-5">
					        <select disabled class="form-control text-right" id="select" >
					        	<option>Tipo de telefono</option>
					          	<option>Casa</option>
					          	<option>Celular</option>
					          	<option>Trabajo</option>
					        </select>
					      </div>
					    </div>

					   
					    <div class="form-group">
					      <div class="col-lg-10 col-lg-offset-2">
					      </div>
					    </div>
					    <div class="form-group">
					      <label for="select" class="col-lg-2 control-label">Estado Civil</label>
					      <div class="col-lg-10">
					        <select disabled class="form-control" id="select" >
					          <option>Soltero</option>
					          <option>Casado</option>
					          <option>Viudo</option>
					          <option>Divorciado</option>
					          <option>Cónyuge</option>
					        </select>
					      </div>
					    </div>
					    <hr>
					    <div class="form-group">
      						<div class="col-lg-10 col-lg-offset-2">
      							<button type="reset" class="btn btn-danger">Volver</button>
	        					<button type="submit" class="btn btn-primary">Agregar Especialidad +</button>

      						</div>
    					</div>    					
					  </fieldset>
					</form>
	</div>
        
			
		</section>
	</div>
</body>
</html>