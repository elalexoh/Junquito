<?php
    if (isset($_GET["action"]) && $_GET["action"] == "vNuevoPaciente") {
            require_once(VALIDACIONES . 'validaFormNewUser.php');
        }else {
                    /*aqui se puede redireccionar al index principal*/
    }
    if (isset($_GET["action"]) && $_GET["action"] == "vLogin") {
            require_once(VALIDACIONES . 'validaFormLogin.php');
        }else {
                    /*aqui se puede redireccionar al index principal*/
        }
    if (isset($_GET["action"]) && $_GET["action"] == "vNuevoUsuario") {
            require_once(VALIDACIONES . 'validaFormNewUser.php');
        }else {
                    /*aqui se puede redireccionar al index principal*/
    }
        
    if (isset($_GET["action"]) && $_GET["action"] == "vNewRegistroPediatria") {
        require_once(VALIDACIONES . 'validaFormPediatria.php');
    }

    if (isset($_GET["action"]) && $_GET["action"] == "vNewRegistroCita") {
        require_once(VALIDACIONES . 'validaFormNewCita.php');
    }
?>