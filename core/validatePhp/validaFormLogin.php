<?php

    $msjUsernameLogin=null;
    $msjPassLogin=null;
    $msjBoton=null;
    
    if (isset($_POST['ajax'])) {
        $username= htmlspecialchars($_POST['correo']);
        $pass= htmlspecialchars($_POST['password']);
        
        if (empty($username)) {
            $msjUsernameLogin="<script>document.getElementById('ntCorreoLogin').innerHTML='Este campo es requerido'</script>";
        }else{
            $msjUsernameLogin="<script>document.getElementById('ntCorreoLogin').innerHTML='Bien'</script>";
            $checkUsu=true;
        }
        
        if (empty($pass)) {
            $msjPassLogin="<script>document.getElementById('ntPasswordLogin').innerHTML='Este campo es requerido'</script>";
        }else{
            $msjPassLogin="<script>document.getElementById('ntPasswordLogin').innerHTML='Bien'</script>";
            $checkPass=true;
        }
        
    }
    if ($checkUsu!=true || $checkPass!=true){
        $msjBoton="<script>document.getElementById('btnLoginAcc').disabled=true;</script>";
    }else{
        $msjBoton="<script>document.getElementById('btnLoginAcc').disabled=false;</script>";
    }
    echo $msjBoton;
    echo $msjPassLogin;
    echo $msjUsernameLogin;

?>