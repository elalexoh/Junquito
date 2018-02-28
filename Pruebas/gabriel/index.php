
 
 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

  
  <!-- Modal Trigger -->
  <a class="waves-effect waves-light btn" href="#modal1">Modal</a>

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <form class="form-horizontal citasNuevaBlock" role="form" method="post" action="?view=models&action=registroCitas">
                        <div class="row">
                        <div class="input-field col s12">
                            <input id="asunto" name="asunto" type="text" class="validate">
                            <label for="asunto">Asunto</label>
                        </div>
                        </div>
                        <div class="row">
                        <div class="input-field col s6">
                             <input id="ci_paci" type="text" name="ci_paci" class='validate' title="Ingresar CI Paciente" onpaste="return false" />
                         <label id="lrcedula" for="ci_paci" title="Cédula de Identidad">Ingresar CI Paciente</label>
                        </div>
                         <div class="input-field col s6" >
                            <select name="eli_doctor" class="browser-default" class="validate">
                                <option value="" disabled selected>Elige al Doctor</option>
                            <?php 
                          $doctores= "SELECT cod_doc, nombres_doc, seg_nombre FROM doctor ORDER BY nombres_doc ASC";
                  $query= $mysqli->query($doctores);

                            while ($seleccion_doc= mysqli_fetch_assoc($query)) {
                              echo "<option value='".$seleccion_doc['cod_doc']."'>".$seleccion_doc['nombres_doc'],$seleccion_doc['seg_nombre']."</option>";
                            }
                            ?>
                            </select>
                        </div>
                        </div>
                        <div class="row">
                        <div class="input-field col s3">
                            <label for="dateIniv" title="Desde">Fecha</label>
                            <input type="text" name="dateIniv" class="tcal browser-default">
                        </div>
                        <div class="input-field col s3" >
                            <label for="hora" title="hora">Hora</label>
                            <input type="text" name="hora" value="00:00" max="12:59:00" min="01:00:00" step="1">
                        </div>    
                       <div class="input-field col s3" >
                            <select name="periodo" class="browser-default" class="validate">
                                <option value="" disabled selected>Período de Hora</option>
                            <?php 
                          $periodo= "SELECT cod_per_hora, descripcion FROM periodo_hora ORDER BY descripcion ASC";
                  $query= $mysqli->query($periodo);

                            while ($seleccion_per= mysqli_fetch_assoc($query)) {
                              echo "<option value='".$seleccion_per['cod_per_hora']."'>".$seleccion_per['descripcion']."</option>";
                            }
                            ?>
                            </select>
                        </div>    
                        <div class="input-field col s12" style="text-align: center;">
                            <button type="submit" class="waves-effect waves-light btn-large">Agregar Cita</button>
                        </div>
                        </div>
                    </form>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
    </div>
  </div>


      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>

      
    </body>
    <script type="text/javascript">
      $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });
      </script>
      
	   
  </html>

<?php /*                      PROANDO EL BOOSTRAP
<!doctype html>
<html lang="en">
    <HEAD>
        <meta charser="UTF8">
        <TITLE>Título de la página</TITLE>
    
    <!-- pestañas CSS -->
    <link href="css/pestana-theme.css" rel="stylesheet">
    
    <!-- pestañas js -->
     <script src="js/pestana.js"></script> 
     
</head>
<body>
    
<div class="tab">
  <button class="tablinks" onclick="openCity(event, '01/01/2017')">01/01/2017</button>
  <button class="tablinks" onclick="openCity(event, '05/04/2017')">05/04/2017</button>
  <button class="tablinks" onclick="openCity(event, '12/05/2017')">12/05/2017</button>
  <button class="tablinks" onclick="openCity(event, '15/07/2017')">15/07/2017</button>
  <button class="tablinks" onclick="openCity(event, '30/09/2017')">30/09/2017</button>
  <button class="tablinks" onclick="openCity(event, '01/012/2017')">01/012/2017</button>
</div>

<div id="01/01/2017" class="tabcontent">
  <h3>London </h3>
  <p>London is the capital city of England.</p>
</div>

<div id="05/04/2017" class="tabcontent">
  <h3>Paris</h3>
  <p>Paris is the capital of France.</p> 
</div>

<div id="12/05/2017" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>

<div id="15/07/2017" class="tabcontent">
  <h3>London </h3>
  <p>London is the capital city of England.</p>
</div>

<div id="30/09/2017" class="tabcontent">
  <h3>Paris</h3>
  <p>Paris is the capital of France.</p> 
</div>

<div id="01/012/2017" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>

</body>
</html>*/
?>