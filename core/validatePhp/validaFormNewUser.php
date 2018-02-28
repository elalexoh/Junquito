<?php
    //print_r($_POST);
    $msjUsu=null;
    $msjMail=null;
    $msjPass=null;
    $msjCpass=null;
    $msjPre=null;
    $msjRsp=null;
    $msjRol=null;
    $checkUser=false;
    $checkPass=false;
    $checkEmail=false;
    $checkCpass=false;
    $checkPreg=false;
    $checkRsp=false;
    $checkRol=false;
    if (isset($_POST["ajax"])) {
        $username = htmlspecialchars($_POST["frusuario"]);
        $email = htmlspecialchars($_POST["email"]);
        $pass = htmlspecialchars($_POST["newPassword"]);
        $cpass = htmlspecialchars($_POST["cpassword"]);
        $preSecreta = htmlspecialchars($_POST["presecreta"]);
        $rspsecreta = htmlspecialchars($_POST["ressecreta"]);
        $rolUsu = htmlspecialchars($_POST["rol_usu"]);

        if (empty($username)) {
            $msjUsu="<script>document.getElementById('ntUsuario').innerHTML='Este campo es requerido';</script>";
        }elseif (!preg_match('/^[a-záéóóúàèìòùäëïöüñ\s]+$/i', $username)) {
            $msjUsu="<script>document.getElementById('ntUsuario').innerHTML='Este campo sólo admite letras';</script>";
        }elseif (strlen($username) < 3) {
            $msjUsu="<script>document.getElementById('ntUsuario').innerHTML='Su nombre de usuario debe contener elmenos 2 caracteres';</script>";
        }elseif (strlen($username) > 20) {
            $msjUsu="<script>document.getElementById('ntUsuario').innerHTML='Su nombre de usuario no puede sobrepasar los 20 caracteres';</script>";
        }else{
            $msjUsu="<script>document.getElementById('ntUsuario').innerHTML='Bien';</script>";
            $checkUser=true;
        }

        if (empty($email)) {
            $msjMail="<script>document.getElementById('ntCorreo').innerHTML='Este campo es requerido';</script>";
        }elseif (!preg_match('/^[a-zA-Z0-9\._-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,4}$/', $email)) {
            $msjMail="<script>document.getElementById('ntCorreo').innerHTML='Error, formato de email incorrecto';</script>";
        }else{
            $msjMail="<script>document.getElementById('ntCorreo').innerHTML='Bien';</script>";
            $checkEmail=true;
        }

        if (empty($pass)) {
            $msjPass="<script>document.getElementById('ntPass').innerHTML='Este campo es requerido';</script>";
        }elseif (!preg_match('/^([a-z]+[0-9]+)|([0-9]+[a-z]+)/i', $pass)) {
            $msjPass="<script>document.getElementById('ntPass').innerHTML='Su contraseña debe contener Letras y numeros';</script>";
        }elseif (strlen($pass) < 8) {
            $msjPass="<script>document.getElementById('ntPass').innerHTML='Su contraseña debe contener un minimo de 8 caracteres';</script>";
        }elseif (strlen($pass) > 16) {
            $msjPass="<script>document.getElementById('ntPass').innerHTML='Su contraseña debe contener un maximo de 16 caracteres';</script>";
        }else{
            $msjPass="<script>document.getElementById('ntPass').innerHTML='Bien';</script>";
            $checkPass=true;
        }
        if ($pass != $cpass) {
            $msjCpass="<script>document.getElementById('ntcPassword').innerHTML='Las Contraseñas no son iguales';</script>";
        }else{
            $msjCpass="<script>document.getElementById('ntcPassword').innerHTML='Bien';</script>";
            $checkCpass=true;
        }
        if ($preSecreta=='empty') {
            $msjPre="<script>document.getElementById('ntPreSecreta').innerHTML='Debe seleccionar una pregunta';</script>";
        }else{
            $msjPre="<script>document.getElementById('ntPreSecreta').innerHTML='Bien';</script>";
            $checkPreg=true;
        }

        if (empty($rspsecreta)) {
            $msjRsp="<script>document.getElementById('ntRsp').innerHTML='Este campo es requerido';</script>";
        }else{
            $msjRsp="<script>document.getElementById('ntRsp').innerHTML='Bien';</script>";
            $checkRsp=true;
        }
        if ($rolUsu=='empty') {
            $msjRol="<script>document.getElementById('ntRol').innerHTML='Debe seleccionar un rol de usuario';</script>";
        }else{
            $msjRol="<script>document.getElementById('ntRol').innerHTML='Bien';</script>";
            $checkRol=true;
        }
    }

    if ($checkUser!=true || $checkEmail!=true || $checkPass!=true || $checkCpass!=true || $checkPreg!=true || $checkRsp!=true || $checkRol!=true) {
        $msjBoton="<script>document.getElementById('newUsuBtn').disabled=true;</script>";
    }else{
        $msjBoton="<script>document.getElementById('newUsuBtn').disabled=false;</script>";
    }
    echo $msjBoton;
    echo $msjUsu;
    echo $msjMail;
    echo $msjPass;
    echo $msjCpass;
    echo $msjPre;
    echo $msjRol;
    echo $msjRsp;
?>