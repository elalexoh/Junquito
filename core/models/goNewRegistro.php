<?php
    
    include('conexion.php');
    $usuario=$_POST['usuario'];
    $correo=$_POST['email'];
    $pass=$_POST['password'];
        /*if ((strlen($pass) < 6) && (strlen($pass) > 16)) {
            echo '<script>alert("La contraseña debe contener entre 6 y 12 digitos")</script>'; 
        }else if ((!preg_match('`[a-z]`',$pass)) && (!preg_match('`[A-Z]`',$pass))) {
            echo '<script>alert("La contraseña debe contener almenos una letra minuscula y otra mayuscula")</script>';
            }else if (!preg_match('`[0-9]`',$pass)) {
            echo '<script>alert("La contraseña debe contener numeros")</script>'; 
        }*/
    $confirm_password=$_POST['cpassword'];
    $pre_secreta=$_POST['pre_secreta'];
    $res_secreta=$_POST['res_secreta'];
    $rol=$_POST['rol_usu'];
    $fecha = date("Y-m-d H:i:s");
    if($pass != $confirm_password)
    {
        echo "las contraseñas no son iguales";
        
    }else{
        
        $result = $mysqli->query("SELECT * FROM usuario WHERE nombre_usu='".$usuario."' or correo='".$correo."'");
        if (mysqli_num_rows($result) == 0) 
        {
            //$encriptada=password_hash($password); //<--TODAVIA NO ESTA FUNCIONANDO COMO DEBERIA
            //pg_escape_string(crypt($contraseña, '$2a$07$' . $caracteres_aleatorios . '$')));
            $passc = sha1(md5($_POST["password"]));
            $query = "INSERT INTO usuario VALUES ('', '".$usuario."', '".$passc."', '".$correo."', '".$pre_secreta."', '".$res_secreta."', '".$rol."', '".$fecha."');";
            $mysqli->query($query);
            //confirmar que el query se inserto correctamente
            if ($mysqli == TRUE) {
                $consulta=$mysqli->query("SELECT cod_rol_usuario FROM usuario WHERE correo='".$correo."'");
                $fila=$consulta->fetch_assoc();
                if ($fila["cod_rol_usuario"]=="2") {
                    echo '<script>alert("¡Hola! Dr '.$usuario.' requerimos algunos otros datos, no te alejes del teclado")</script>';
                    echo "<script>location.href='?view=vistas&action=newDoctor'</script>";
                }else{
                    echo '<script>alert("¡Enhorabuena! '.$usuario.' el usuario fue creado con exito")</script>';
                    echo "<script>location.href='index.php'</script>";
                }
                
            } else {
                echo "Error: " . $mysqli . "<br>" . $mysqli->error;
            }
        }else{
            echo '<script>alert("Ese usuario ya esta registrado")</script>';
            echo "<script>location.href='?view=vistas&action=nuevoUsuario'</script>";
            
        }

        /*if ($fila["cod_rol_usuario"]=="3") {
                    echo '<script>alert("¡Hola! '.$usuario.' requerimos algunos otros datos, no te alejes del teclado")</script>';
                    echo "<script>location.href='?view=vistas&action=newPersonal'</script>";
                }else{
                    echo '<script>alert("¡Enhorabuena! '.$usuario.' el usuario fue creado con exito")</script>';
                    echo "<script>location.href='index.php'</script>";
                } 
                if ($fila["cod_rol_usuario"]=="4") {
                    echo '<script>alert("¡Hola! '.$usuario.' requerimos algunos otros datos, no te alejes del teclado")</script>';
                    echo "<script>location.href='?view=vistas&action=newAsistente'</script>";
                }else {
                    echo '<script>alert("¡Enhorabuena! '.$usuario.' el usuario fue creado con exito")</script>';
                    echo "<script>location.href='index.php'</script>";
                }*/
 
    }

    
?>