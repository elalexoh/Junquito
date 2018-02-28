<?php
    require('conexion.php');
    /*Inicio Consulta Auditoria*/
    session_start();
    $fecha = date("Y-m-d H:i:s");
    $auditoria=$mysqli->query("INSERT INTO auditoria VALUES ('', '".$_SESSION['user_id']."', 'usuario', '".$fecha."', '3', 'Cierra_Sesion');");
    /*Fin Consulta Auditoria*/
    session_destroy();
    echo "<script>location.href='index.php'</script>";
?>