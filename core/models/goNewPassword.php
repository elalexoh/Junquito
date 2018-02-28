<?php
    require_once('conexion.php');

    $p = $_POST['fconfpass'];
    $passw = sha1(md5($p)); 
    $cPass=$_POST['fcrepass'];
    $repassw = sha1(md5($cPass));

    session_start();
    $_SESSION['recpEmail'];

    if ($passw==$repassw) {
       $resultado = $mysqli->query('UPDATE usuario SET password="'.$passw.'" WHERE correo ="'.$_SESSION['recpEmail'].'"');
            echo '<script>alert("Su clave ha sido modificada correctamente")</script>';
            echo "<script>location.href='index.php'</script>";
        }else{
            echo '<script>alert("No se pudo cambiar de clave")</script>';
            echo "<script>location.href='?view=vistas&action=recupPassword'</script>";
    }
        return $resultado;
    
?>