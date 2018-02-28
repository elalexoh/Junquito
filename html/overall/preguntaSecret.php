<?php include(HEADER_LOGIN .'public/header_login.html'); ?>
<?php require_once(MODELS. 'conexion.php'); ?>

  <div class="section"></div>
  <main>
    <center>
      <div class="section"></div>

      <h5 class="saludologin">Actualiza tu Contraseña</h5>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
            <form name="form" class="col s12" method="POST" action="?view=models&action=actualizaPassword" autocomplete="off">
            <img src="preview/usu.png" class="loginimg"></img>
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>
            <div class='row'>
              <div class='input-field col s12'>
                <select id="pregSecreta" class="input-field col s12 l12" name="presecreta" title="Escoja una Pregunta">
  			           <option disabled id="selectPregunta" value="empty" selected>Selecciona Pregunta secreta</option>
                   <?php
                    $query_preg="SELECT cod_pre_secreta, pregunta FROM pregunta_secreta ORDER BY pregunta ASC";
                        $result= $mysqli->query($query_preg);
                                        
                        while ($c_pregSecret=mysqli_fetch_assoc($result)) {
                          echo "<option value='".$c_pregSecret['cod_pre_secreta']."'>".$c_pregSecret['pregunta']."</option>";
                          }
                  ?>
  			       </select>
              </div>
            </div>
            <div class='row'>
                <div class='input-field col s12'>
                   <input class='validate' type='password' name='fresp' id='fresp' />
                   <label id="lfrep" for='fresp'>Respuesta</label>
                </div>
            </div>
            <br />
            <center>
            <div class='row'>
                <div class='col s12'>
                  <button type='button' id='btn_login' class='btn btn-medium waves-effect indigo' onclick='recPregPass();'>Siguiente</button>
                </div>
            </div>
            </center>
          </form>
        </div>
      </div>
      <div id="valor"></div>
      <!--<a class='linkslogin' href="index.php"><b>¿Ya posee una Cuenta?</b></a>!-->
      <br><br>
    </center>

    <div class="section"></div>
    <div class="section"></div>
  </main>
<?php include(FOOTER_LOGIN . 'public/footer_login.html'); ?>