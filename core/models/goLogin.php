<?php
include('conexion.php');
    
        $mail = $_POST['correo'];
        $pass = $_POST['password'];
        $passc = sha1(md5($_POST["password"]));
        
        if($resultado = $mysqli->query('SELECT * FROM usuario WHERE correo="'.$mail.'" and password="'.$passc.'"')){
            if (mysqli_num_rows($resultado) == 0) {
                // si $resultado no tiene rows es porque no existe el usuario
                echo '<script>alert("esa cuenta de correo no esta registrada")</script>';
                echo "<script>location.href='index.php'</script>";
            }else{
                $consulta=$mysqli->query('SELECT * FROM usuario WHERE correo="'.$mail.'"');
                $fila=$consulta->fetch_assoc();
                session_start();
                $fecha = date("Y-m-d H:i:s");
                $_SESSION['user_id']=$fila["cod_usuario"];
                $_SESSION['user_name']=$fila["nombre_usu"];
                $_SESSION['rol']=$fila["cod_rol_usuario"];
                //INSERT INTO auditoria VALUES ('', "'.$_SESSION['user_id'].'", "usuario", "'.$fecha.'", "3")
                if ($fila["confirmacion"]!== "1") {
                    //Si el usuario no ha sido confirmado por el administrador envia al index
                    echo '<script>alert("Hola! Dr '.$fila["nombre_usu"].' esta cuenta se encuentra deshabilitada, pongase en contacto con el administrador del sistema para que sea confirmada")</script>';
                    session_destroy();
                    echo "<script>location.href='index.php'</script>";
               }elseif ($fila["status_u"] == "0" && $_SESSION['rol'] == "2" ) {
                        echo '<script>alert("Hola! '.$fila["nombre_usu"].' requerimos algunos otros datos, no te alejes del teclado")</script>';
                        echo "<script>location.href='?view=vistas&action=newDoctor'</script>";
               }else{
                        echo '<script>alert("Bienvenido: '.$fila["nombre_usu"].'")</script>';
                        echo "<script>location.href='?view=vistas&action=menuPrincipal'</script>";                  
                   }  
            }
        }
?>