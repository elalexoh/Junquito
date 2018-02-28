<?php include(CABECERA_CORE . 'public/cabecera.html');?>
<body>
	
	<section>
		<div class="container">
		<!--<img src="../preview/usu.jpg" class="img-responsive" alt="" width="150px">-->
			<legend class="text-center">queloque </legend>
			

			<h1 class="text-center">Registro de nuevo Doctor</h1>
			<hr>
			<form class="form-horizontal" action="?view=vistas&action=crearRegistroPaciente" method="POST">
			 <fieldset>	
				    <div class="form-group">
				      <label for="inputEmail" class="col-lg-2 control-label">S.S.O</label>
				      <div class="col-lg-2">
				      	<input type="text" class="form-control" id="inputEmail" placeholder="Ingresar numero de S.S.O">
				      </div>
				      <label for="" class="col-lg-2 control-label">Nombres</label>
						<div class="col-lg-2">
							<input type="text" class="form-control" name="nom_newpac" id="nom_newpac" onkeypress="return soloLetras(event)" placeholder="Ingresar Nombres">
						</div>
					      <label for="" class="col-lg-2 control-label">Apellidos</label>
					      <div class="col-lg-2">
					        <input type="text" class="form-control" id="apell_newpac" placeholder="Ingresar Apellidos">
					      </div>
					</div>
					<div class="form-group">
						<label for="inputPassword" class="col-lg-2 control-label">C&eacute;dula de Identidad</label>
						<div class="col-lg-2">
							<input maxlength="100" type="text" name="ced_newpac" id="ced_newpac" onblur="ChangeCase(this);" required="required" class="form-control" placeholder="V-555555 E-55555 P-555555" />
						</div>
						<label  class="col-lg-2 control-label">Sexo</label>
							<div class="col-lg-2">
								<select class="form-control" name="genero_newpac" id="genero_newpac" >
									<option>Ingresar Genero</option>
									<option>Hombre</option>
									<option>Mujer</option>
								</select>
							</div>
						<label for="" class="col-lg-2 control-label">Fecha de nacimiento</label>
						<div class="col-lg-2">
							<input type="text" class="form-control" name="fechnac_newpac" id="fechnac_newpac" placeholder="DD/MM/AAAA">
						</div>
					</div>
					    <!-- Activar si es Extranjero -->
					    <div class="form-group ">
					      <label for="select" class="col-lg-2 control-label text-center">Pa&iacute;s</label>
					      <div class="col-lg-10">
					        <select class="form-control" id="select" >
					          <option value="">Seleccionar Pa&iacute;s </option>
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
					      <label for="inputEmail" class="col-lg-2 control-label">Nacionalidad</label>
					      <div class="col-lg-10">
					        <select class="form-control" id="select" >
					          <option>Seleccionar Nacionalidad</option>
					        </select>
					      </div>
					    </div>					  
					    <div class="">					    							
						    <h3 class="text-center">Dirección Actual</h3>    
						    <div class="form-group">
						      <div class="col-lg-3">
						        <select class="form-control" id="select" >
						          <option>Seleccionar Estado</option>
						          <option>2</option>
						          <option>3</option>
						          <option>4</option>
						          <option>5</option>
						        </select>
						      </div>					      
						      <div class="col-lg-3">
						        <select class="form-control" id="select" >
						          <option>Seleccionar Ciudad</option>
						          <option>2</option>
						          <option>3</option>
						          <option>4</option>
						          <option>5</option>
						        </select>
						      </div>
						      <div class="col-lg-3">
						        <select class="form-control" id="select" >
						          <option>Seleccionar Municipio</option>
						          <option>2</option>
						          <option>3</option>
						          <option>4</option>
						          <option>5</option>
						        </select>
						      </div>
							  <div class="col-lg-3">
						        <select class="form-control" id="select" >
						          <option>Seleccionar Parroquia</option>
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
					      <div class="col-lg-4">
					        <input type="text" class="form-control" id="inputEmail" placeholder="(0000) 000 00 00">
					      </div>
					      <div class="col-lg-4">
					        <select class="form-control text-right" id="select" >
					        	<option>Tipo de telefono</option>
					          	<option>Casa</option>
					          	<option>Celular</option>
					          	<option>Trabajo</option>
					        </select>
					      </div>
					      <div class="col-lg-2 text-right">
					        <button type="button" class="btn btn-success">Agregar+</button>
					      </div>
					    </div>

					   
					    <div class="form-group">
					      <div class="col-lg-10 col-lg-offset-2">
					      </div>
					    </div>
					    <div class="form-group">
					      <label for="select" class="col-lg-2 control-label">Estado Civil</label>
					      <div class="col-lg-10">
					        <select class="form-control" id="select" >
					        	<option>Seleccionar Estado Civil</option>
					          <option>Soltero</option>
					          <option>Casado</option>
					          <option>Viudo</option>
					          <option>Divorciado</option>
					          <option>Cónyuge</option>
					        </select>
					      </div>
					    </div>					    
					    <div class="form-group">
      						<div class="col-lg-10 col-lg-offset-2">
      							<button type="reset" class="btn btn-danger">Cancelar</button>
	        					<button type="submit" class="btn btn-primary">Enviar</button>

      						</div>
    					</div>    					
					  </fieldset>
					</form>
	</div>
        
			
		</section>
	</div>
				
	<?php include(FOOTER_CORE .'public/footer.html'); ?>