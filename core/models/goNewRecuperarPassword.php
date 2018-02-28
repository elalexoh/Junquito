<?php

require_once('conexion.php');

session_start();
$_SESSION['recpEmail']= $_POST['frecupcorreo'];

if ($resultado = $mysqli->query('SELECT * FROM usuario WHERE correo ="'.$_SESSION['recpEmail'].'"')) {
    if (mysqli_num_rows($resultado) == 0) {
        // si $resultado no tiene rows es porque no existe el usuario
        echo '<script>alert("Email no se encuentra esta registrado")</script>';
        echo "<script>location.href='index.php'</script>";
    }else {
       	//echo "<script>alert('datos correctos')</script>";
        echo "<script>location.href='?view=vistas&action=validacion'</script>";
        return false;
    }
}