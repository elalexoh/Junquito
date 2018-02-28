<!-- ?view=vistas&action=modelsController -->
<!--?view=vistas&action=modelsController    vistasController  -->
<?php 
//<script>alert("Por favor  '.$_SESSION["user_name"].', debes cerrar la session antes de salir.")</script>
session_start();
if (isset($_SESSION["user_id"])) {
    echo '<script>alert("Por favor  '.$_SESSION["user_name"].', debes cerrar la session antes de salir.")</script>';
    echo "<script>location.href='?view=vistas&action=menuPrincipal'</script>"; 
}
?>
    	<div id="loginMsg"></div>
        <form name="login_form" id="loginForm" class="col s12 m12 l12" method="POST" action="?view=models&action=login" autocomplete="off">
            <img src="view/img/mujer.svg" class="loginimg"></img><img src="view/img/hombre.svg" class="loginimg"></img>
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>
            <div class='row'>
              <div class='input-field col s11 m11 l11'>
                <!--<input id='email' class='validate' type='email' name='email' onpaste="return false" />-->
                <input id='correoLogin' class='validate' type='text' name='correo' onpaste="return false" />
                <label id="flemail" for='email'>Escriba su Email</label>
                <div id="ntCorreoLogin"></div>
              </div>
              <div class="input-field col s1 m1 l1">
              	<div style=" color:green; " id="iconEmail"></div>
              </div>
            </div>
            <div class='row'>
              <div class='input-field col s11 m11 l11'>
                <input class='validate' type='password' name='password' id='passLogin' onpaste="return false" />
                <label for='password'>Escriba su Contraseña</label>
				  <div id="ntPasswordLogin"></div>
              </div>
              <div class="input-field col s1 m1 l1">
              	<div style=" color:green; " id="iconPass"></div>
              </div>              
            </div>
            <center>
              <div class='row'>
                <div class="col s12 m12 l12">
                  <input type="hidden" name="ajax">
                  <button type='submit' id='btnLoginAcc' class='btn btn-medium waves-effect indigo' onclick="">Acceder</button>
                </div>
                <!--<div class="col col s12 m6 l6">-->
                <!--  <a href="?view=vistas&action=pediatria" class='btn btn-medium waves-effect grey darken-3'>Regresar</a>-->
                <!--</div>-->
              </div>
             <!--eliminar y colocar el button login l12
              <div class="col col s12 m6 l6">
                  <a href="?view=vistas&action=nuevoForm" type='reset' class='btn btn-medium waves-effect grey darken-3'>Regresar</a>
                </div>
              </div>!-->
            </center>
        </form>
        