<?php
//borrar este archivo
require_once('conexion.php');

        $nro_ced = $_POST['rpcedula'];
        
        if($resultado = $mysqli->query('SELECT * FROM paciente WHERE cedula_paciente="'.$nro_ced.'" ')){
            if (mysqli_num_rows($resultado) == 0) {
                // si $resultado no tiene rows es porque no existe ese paciente con ese numero de cedula
                echo '<script>alert("Paciente no existe")</script>';
            }else{
                
                echo '<script>alert("Paciente si existe")</script>';
                
                //$consulta=$mysqli->query('SELECT * FROM usuario WHERE correo="'.$mail.'"');
                //$fila=$consulta->fetch_assoc();
            
                //$_SESSION['user_id']=$fila["cod_usuario"];
                //$consulta=$mysqli->query('UPDATE usuario SET status_u= 1 WHERE correo ="'.$mail.'"');

                //echo "<script>location.href='?view=vistas&action=menuPrincipal'</script>";
                }  
            }
?>
