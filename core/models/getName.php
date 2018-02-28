<?php
    require_once('conexion.php');
    $id=$_SESSION["user_id"];
    echo $id;
    $consulta=$mysqli->query('SELECT * FROM usuario WHERE cod_usuario="'.$id.'"')or die($mysqli->error);
    $fila=$consulta->fetch_assoc;
    echo $fila;
    echo '<script>alert("Bienvenido: '.$fila["correo"].'")</script>';
?>