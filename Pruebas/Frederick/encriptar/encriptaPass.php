<?php
    require_once "../conexion_poo/Modelo.php";
        $email=$_POST['email'];
        $password=$_POST['password'];
        $passc=crypt($password);
        $consulta= ('SELECT password FROM usuario WHERE correo ="'.$mail.'"');
        $mysqli->query($consulta);
        $fila=mysqli_fetch_assoc($mysqli);
        if ($fila && crypt($password, $fila['password'])== $fila['password']) {
            echo "encriptado bien hecho";
        }
            echo "encriptado mal hecho";
?>