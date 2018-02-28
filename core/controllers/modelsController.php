<?php

    if (isset($_GET["action"]) && $_GET["action"] == "login") {
            //require_once(HTML_CORE . 'overall/login.php');
            require_once(MODELS . 'goLogin.php');
        }else {
            /*aqui se puede redireccionar al index principal*/
    }
    
    if (isset($_GET["action"]) && $_GET["action"] == "registroNewPaciente") {
            require_once(MODELS . 'goNewRegistroPaciente.php');
        }else {
            /*aqui se puede redireccionar al index principal*/
    }
    
    /*Los controladores de los select dinamicos*/
    if (isset($_GET['action']) && $_GET['action'] == "selectEstado") {
        include(MODELS . 'selectEstado.php');
    }else{
        
    }

    if (isset($_GET['action']) && $_GET['action'] == "selectCiudad") {
        include(MODELS . 'selectCiudad.php');
    }else{
        
    }
    
    if(isset($_GET['action']) && $_GET['action'] == "selectMunicipio"){
        include(MODELS . 'selectMunicipio.php');
    }else{
        
    }
    
    if(isset($_GET['action']) && $_GET['action'] == "selectParroquia"){
        include(MODELS . 'selectParroquia.php');
    }/*Final de los controladores de los select dinamicos*/
    
    /*Controlador para la interacción con la bd del form Doctor*/
    if (isset($_GET["action"]) && $_GET["action"] == "registroNewDoctor") {
            require_once(MODELS . 'goNewRegistroDoctor.php');
        }else {
            /*aqui se puede redireccionar al index principal*/
    }
    
    if (isset($_GET["action"]) && $_GET["action"] == "registrarUsuario") {
            require_once(MODELS . 'goNewRegistroUsuario.php');
        }else {
            /*aqui se puede redireccionar al index principal*/
    }
    /*Controlador que captura el correo del usuario y lo envia a la pregunta secreta*/
    if (isset($_GET["action"]) && $_GET["action"] == "recuperarPassword") {
            require_once(MODELS . 'goNewRecuperarPassword.php');
        }else {
        
    }
    /*Valida que la respuesta sea la correcta y envia al form que pide la actualizacion de la nueva contraseña*/
    if (isset($_GET["action"]) && $_GET["action"] == "actualizaPassword") {
            require_once(MODELS . 'goNewUpdatePassword.php');
        }else {
        
    }
    
    if (isset($_GET["action"]) && $_GET["action"] == "cambioPass") {
            require_once(MODELS . 'goNewPassword.php');
        }else {
        
    }
    
    if (isset($_GET["action"]) && $_GET["action"] == "buscarHistoria") {
            require_once(MODELS . 'goNewBusquedaHistoria.php');
    }else{
        
    }
    
    if (isset($_GET["action"]) && $_GET["action"] == "registroNewEvento") {
            require_once(MODELS . 'goNewEvento.php');
        }else {
            /*aqui se puede redireccionar al index principal*/
    }

    if (isset($_GET["action"]) && $_GET["action"] == "cerrarSession") {
            require_once(MODELS . 'cierraSession.php');
        }else {
            /*aqui se puede redireccionar al index principal*/
    }
    
        if (isset($_GET["action"]) && $_GET["action"] == "calculaEstadistica") {
            require_once(MODELS . 'goCalculaEstadistica.php');
        }else {
            /*aqui se puede redireccionar al index principal*/
    }
    
     /*Controlador para la interacción con la bd del form pediatria*/
    if (isset($_GET["action"]) && $_GET["action"] == "registroNewPediatria") {
            require_once(MODELS . 'goNewRegistroPediatria.php');
        }else {
            /*aqui se puede redireccionar al index principal*/
    }
    
       
    if (isset($_GET["action"]) && $_GET["action"] == "registroCitas") {
    require_once(MODELS . 'goNewRegistroCitas.php');
    }else {
            /*aqui se puede redireccionar al index principal*/
    }
    
        /*Controlador para la confirmacion de una cita*/
    if (isset($_GET["action"]) && $_GET["action"] == "confirmacionCita") {
    require_once(MODELS . 'goConfirmaCita.php');
    }else {
            /*aqui se puede redireccionar al index principal*/
    }
    
            /*Controlador para la eliminacion de una cita*/
    if (isset($_GET["action"]) && $_GET["action"] == "eliminacionCita") {
    require_once(MODELS . 'goEliminaCita.php');
    }else {
            /*aqui se puede redireccionar al index principal*/
    }
    
               /*Controlador para cambiar elstatus de na cita cuando le das aver*/
    if (isset($_GET["action"]) && $_GET["action"] == "cambia_status_cita") {
    require_once(MODELS . 'goCambiaStatusCita.php');
    }else {
            /*aqui se puede redireccionar al index principal*/
    }
    
        /*Los controladores de los select dinamicos de citas*/
    if (isset($_GET['action']) && $_GET['action'] == "selectEspecialidad") {
        include(MODELS . 'selectEspecialidad.php');
    }else{
        
    }
    
    if (isset($_GET['action']) && $_GET['action'] == "selectPaciente") {
        include(MODELS . 'selectPaciente.php');
    }else{
        
    }

    if (isset($_GET['action']) && $_GET['action'] == "selectTurno") {
        include(MODELS . 'selectTurno.php');
    }else{
        
    }
    
    if (isset($_GET['action']) && $_GET['action'] == "selectMembrana") {
        include(MODELS . 'selectTipoRuptura.php');
    }else{
        
    }
                /*Controlador para el nuevo registro de horario de un doctor*/
    if (isset($_GET["action"]) && $_GET["action"] == "NewHorarioDoctor") {
    require_once(MODELS . 'goNewHorarioDoctor.php');
    }else {
            /*aqui se puede redireccionar al index principal*/
    }
                    /*Controlador para ver el registro de horario de un doctor*/
    if (isset($_GET["action"]) && $_GET["action"] == "verHorarioDoctor") {
    require_once(MODELS . 'goConsultaHorarioDoctor.php');
    }else {
            /*aqui se puede redireccionar al index principal*/
    }
    
           /*Controlador para la eliminacion del horario de un doctor*/
    if (isset($_GET["action"]) && $_GET["action"] == "eliminaHorario") {
    require_once(MODELS . 'goEliminaHorario.php');
    }else {
            /*aqui se puede redireccionar al index principal*/
    }
    
    /*Controlador para modicifar la cantidad de paciente que atiende un doctor en horario de un doctor*/
    if (isset($_GET["action"]) && $_GET["action"] == "cambiarCantidad") {
    require_once(MODELS . 'goCambiarCantidadPaciente.php');
    }else {
            /*aqui se puede redireccionar al index principal*/
    }
    
    /*este es el archivo que cree temprano, para confirmar*/
    if (isset($_GET["action"]) && $_GET["action"] == "confirmarUsuario") {
        require_once(MODELS . 'goNewConsultaUsuario.php');
    }
    
    if (isset($_GET["action"]) && $_GET["action"] == "imprimirHistoria") {
        require_once(MODELS . 'goImprimirHistoria.php');
    }
    if (isset ($_GET["action"]) && $_GET["action"] == "generarInforme") {
        require_once(MODELS . 'goImprimirAuditoria.php');
    }
    
    if (isset ($_GET["action"]) && $_GET["action"] == "conFrederick") {
        require_once(MODELS . 'fred.php');
    }
    
    
    if (isset($_GET["action"]) && $_GET["action"] == "generarPDF") {
        require_once(MODELS . 'goNewImprimirPDF.php');
    }
    
    if (isset($_GET["action"]) && $_GET["action"] == "calcularPacientes") {
        require_once(MODELS . 'procesarEstadisticasPaciente.php');
    }
      if (isset($_GET["action"]) && $_GET["action"] == "calcularDoctores") {
        require_once(MODELS . 'procesarEstadisticaDoctores.php');
    }
      if (isset($_GET["action"]) && $_GET["action"] == "calcularEnfermeras") {
        require_once(MODELS . 'procesarEstadisticaEnfermeras.php');
    }
      if (isset($_GET["action"]) && $_GET["action"] == "calcularUsuarios") {
        require_once(MODELS . 'procesarEstadisticaUsuarios.php');
    }
    
    if (isset($_GET["action"]) && $_GET["action"] == "registroMedGeneral") {
    require_once(MODELS . 'goNewRegistroMedicinag.php');
    }else {
            /*aqui se puede redireccionar al index principal*/
    }
    
    if (isset($_GET["action"]) && $_GET["action"] == "MedGenralObstetrica") {
        require_once(MODELS . 'goNewRegSeccionObstetrica.php');
    }
    
    if (isset($_GET["action"]) && $_GET["action"] == "reporteDocA") {
    require_once(MODELS . 'rptDoctor.php');
    }else {
            /*aqui se puede redireccionar al index principal*/
    }
    
    if (isset($_GET["action"]) && $_GET["action"] == "antecedentesObstetricos") {
        require_once(MODELS. 'goNewRegistroAntecedenteObstetrico.php');
    }else{
        
    }
    
    if (isset($_GET["action"]) && $_GET["action"] == "registroObstetricia") {
        require_once(MODELS. 'goNewRegistroObstetricia.php');
    }else{
        
    }
    
    if (isset($_GET["action"]) && $_GET["action"] == "registroTrabajoParto") {
        require_once(MODELS. 'goNewRegistroTrabajoParto.php');
    }else{
        
    }
    if (isset($_GET["action"]) && $_GET["action"] == "registroDatosSalida") {
        require_once(MODELS. '.php');
    }else{
        
    }

?>