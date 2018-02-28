<?php 
// print_r($_POST);
require_once("conexion.php");


$users = $_POST['frusuario'];
$email = $_POST['email'];
$p = $_POST['newPassword'];
$passw = sha1(md5($p)); 
$rp = $_POST['cpassword'];
/*$repassw = sha1(crypt(md5($salt . $rp)));*/
$pregSecret = $_POST['presecreta'];
$respSecret = $_POST['ressecreta'];
$rol = $_POST['rol_usu'];
$fecha = date("Y-m-d H:i:s");

if($p != $rp) {
        echo "las contraseñas no son iguales";
    }else{
        $result = $mysqli->query("SELECT * FROM usuario WHERE nombre_usu='".$users."' or correo='".$email."'");
        if (mysqli_num_rows($result) == 0) {
        $query = "INSERT INTO usuario VALUES ('','".$users."','".$email."','".$passw."','".$pregSecret."','".$respSecret."','".$rol."', '".$fecha."',0,0);";
            $mysqli->query($query);
            //confirmar que el query se inserto correctamente
            if ($mysqli == TRUE) {
                $consulta=$mysqli->query("SELECT cod_rol_usuario FROM usuario WHERE correo='".$email."'");
                $fila=$consulta->fetch_assoc();
                if ($fila["cod_rol_usuario"] == "2") {
                    session_start();
                    $_SESSION['provicional_user']=$users;
                    $_SESSION['provicional_id']=$fila["cod_rol_usuario"];
                    //echo '<script>alert("Hola! Dr '.$users.' requerimos algunos otros datos, no te alejes del teclado")</script>';
                    //echo "<script>location.href='?view=vistas&action=newDoctor'</script>";
                    echo '<script>alert("Enhorabuena! '.$users.' el usuario fue creado con exito")</script>';
                    echo "<script>location.href='index.php'</script>";
                }else{
                    echo '<script>alert("Enhorabuena! '.$users.' el usuario fue creado con exito")</script>';
                    echo "<script>location.href='index.php'</script>";
                }
                
            } else {
                echo "Error: " . $mysqli . "<br>" . $mysqli->error;
            }
        }else{
            echo '<script>alert("Ese usuario ya esta registrado")</script>';
            
        }

    }

?>