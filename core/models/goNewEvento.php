<?php
require_once('conexion.php');

$titulo = $_REQUEST['fdtitulo'];
$texto = $_REQUEST['fdtexto'];

$query = "INSERT INTO noticia VALUE (null,'$titulo','$texto')";
    if(mysqli_query($mysqli,$query)){
      echo '<script>alert("registro de nuevo Evento exitoso")</script>';
      echo "<script>location.href='?view=vistas&action=menuPrincipal'</script>";
    }else{
      echo '<script>alert("Ocurrio un error en el registro del Evento")</script>';
    }
?>