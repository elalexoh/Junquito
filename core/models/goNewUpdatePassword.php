<?php
    require_once('conexion.php');
    session_start();
    $_SESSION['recpEmail'];
    
    $pregunta=$_POST['presecreta'];
    $respuesta=$_POST['fresp'];
    $query_validPreg="SELECT * FROM usuario WHERE correo='".$_SESSION['recpEmail']."'";
      $resp=$mysqli->query($query_validPreg);
      foreach ($resp as $userCorreo) {
        $userCorreo['cod_pre_secreta'];
    }

    if (($pregunta=$_POST['presecreta']==$userCorreo['cod_pre_secreta']) and ($respuesta=$_POST['fresp']==$userCorreo['res_secreta'])) {
        echo utf8_decode("<script>alert('Complete la Actualización, Asegurece de Resguardar la Información');</script>");
        echo "<script>window.location='?view=vistas&action=updatePassword'</script>";
    }else{
        echo utf8_decode("<script>alert('Información Incompleta');</script>");
        echo "<script>window.location='?view=vistas&action=validacion'</script>";
    return false;
    }
?>