  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script type="text/javascript">
        var nextinput = 0;
        function AgregarCampos(){
        nextinput++;
        campo = '<li id="rut'+nextinput+'">Campo:<input type="text" size="20" id="campo' + nextinput + '"&nbsp; name="campo' + nextinput + '"&nbsp; /></li>';
        $("#campos").append(campo);
        }
    </script>
    </head>

    <body>
        <div class="container">
<form method="post">

    <input type="text" name="fecha" />

    <input type="submit" value="Calcular"/>

</form>

 

<?php

function edad($fecha){

    $fecha = str_replace("/","-",$fecha);

    $fecha = date('Y/m/d',strtotime($fecha));

    $hoy = date('Y/m/d');

    $edad = $hoy - $fecha;

    return $edad;

}

 

if (isset($_POST[fecha]))
 if (edad($_POST[fecha]) > '18') {
    echo "es mayor de edad";
 }else{
    echo "Tiene ".edad($_POST[fecha])." Años";
 }
    

?>
        </div>
        

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>
    </body>
  </html>