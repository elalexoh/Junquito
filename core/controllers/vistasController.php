<?php
/*aqui hay que hacer una funcion que permita controlar la vista hacia en index de la carpeta html
la variable action va a hacer referencia al metodo o funcion que quieras ejecutar*/
/*controlador para el ingreso a la pantalla principal o HOME*/
    
    if (isset($_GET["action"]) && $_GET["action"] == "nuevoUsuario"){
            require_once(HTML_CORE . 'overall/formularioNewUsuario.php');
        }else {
            /*aqui se puede redireccionar al index principal*/
    }
    
    /*controlador para el menu principal*/
    if (isset($_GET["action"]) && $_GET["action"] == "menuPrincipal") {
            require_once(HTML_CORE . 'overall/perfil.php');
        }else {
                /*aqui se puede redireccionar al index principal*/
    }
    //eliminar despues de terminado el nuevo form para pacientes
    if (isset($_GET["action"]) && $_GET["action"] == "nuevoForm") {
            require_once(HTML_CORE . 'overall/formPaciente.php');
    }
        
    /*controlador para el formulario del paciente*/
    if(isset($_GET["action"]) && $_GET["action"] == "newPaciente"){
        /*si existe la variable action y esta es igualn a newPaciente, llamamos a la vista que contiene el form de newpaciente
        y estando alli pues procedemos a registrarlo, porque nos muestra la vista que contiene ese proceso.*/
            require_once(HTML_CORE . 'overall/formularioNewPaciente.php');
        }else if(isset($_GET["action"]) && $_GET["action"] == "crearegistro"){
            //aqui llamas al modelo y le pasas los parametros via post o get para que los inserte en BD
        }else{
            /*se redirecciona al index principal*/
            /*include(HTML_CORE . 'public/vistas.php');*/
    }
    
    /*Controlador para el formulario de doctor*/
    if (isset($_GET["action"]) && $_GET["action"] == "newDoctor") {
            require_once(HTML_CORE . 'overall/formularioNewDoctor.php');
        }else {
            /*aqui se puede redireccionar al index principal*/
    }
    /*Controlador para el formulario para datos del personal*/
    if (isset($_GET["action"]) && $_GET["action"] == "newPersonal") {
            require_once(HTML_CORE .'overall/formularioNewArchivoCentral.php');
    }else{
        
    }
    
    if (isset($_GET["action"]) && $_GET["action"] == "newAsistente") {
            require_once(HTML_CORE . 'overall/formularioNewAsistente.php');
    }else{
        
    }
    
    if (isset($_GET["action"]) && $_GET["action"] == "consultaPaciente") {
            require_once(HTML_CORE . 'overall/card.php');
        }else {
            /*aqui se puede redireccionar al index principal*/
    }
    
    if (isset($_GET["action"]) && $_GET["action"] == "nuevoPaciente") {
            require_once(HTML_CORE . 'overall/formulario_newpaciente.php');
        }else {
            /*aqui se puede redireccionar al index principal o hacer un condicional*/
    }
    
    /*este controlador dirige hacia el formulario que solicita el correo del
    usuario y la respuesta de la pregunta secreta*/
    if (isset($_GET["action"]) && $_GET["action"] == "recupPassword") {
            require_once(HTML_CORE . 'overall/formularioRecuperaPass.php');
    }else {
        
    }
    
    /*controlador del formulario para la actualizacion de la contraseña*/
    //Aqui el formulario pide la nueva contraseña
   if (isset($_GET["action"]) && $_GET["action"] == "validacion") {
            require_once(HTML_CORE . 'overall/preguntaSecret.php');
    }else{
        
    }
    
    //controlador del formulario para la actualizacion de la contraseña
    //Aqui se dirige hacia el formulario que pide el correo del usuario
    if (isset($_GET["action"]) && $_GET["action"] == "updatePassword") {
            require_once(HTML_CORE . 'overall/updatePassword.php');
    }else {
        
    }
    
    if (isset($_GET["action"]) && $_GET["action"] == "nuevoServicio") {
            require_once(HTML_CORE . 'overall/formulario_newservices.php');
    }else {
        
    }
    
    if (isset($_GET["action"]) && $_GET["action"] == "consultasAuditoria") {
            require_once(HTML_CORE . 'overall/auditoria.php');
    }else {
        
    }
    
    if (isset($_GET["action"]) && $_GET["action"] == "nuevaHistoriaMedica") {
            require_once(HTML_CORE . 'overall/newHistoria.php');
    }else{
        
    }
    
    if (isset($_GET["action"]) && $_GET["action"] == "nuevaHistoriaClinica") {
            require_once(HTML_CORE . 'overall/formulario_historiaclinica.php');
    }else {
        
    }
    
    if (isset($_GET["action"]) && $_GET["action"] == "pediatria") {
            require_once(HTML_CORE . 'overall/formularioNewPediatria.php');
    }else {
        
    }
    
    if (isset($_GET["action"]) && $_GET["action"] == "medicinaGeneral") {
            require_once(HTML_CORE . 'overall/formularioNewMedicinaGeneral.php');
    }else {
        
    }
    
    /* Controlador formulario Historia obstetrica <------------------------------------------------------- */
    if (isset($_GET["action"]) && $_GET["action"] == "nuevaHistoriaObstetrica") {
            require_once(HTML_CORE . 'overall/formularioNewObstetricia.php');
    }else {
        
    }
    /* Controlador formulario Trabajo y Parto <------------------------------------------------------- */
    if (isset($_GET["action"]) && $_GET["action"] == "nuevoTrabajoParto") {
            require_once(HTML_CORE . 'overall/formularioNewTrabajoParto.php');
    }else {
        
    }
    /* Controlador formulario de Salida y Puerperio <------------------------------------------------------- */
    if (isset($_GET["action"]) && $_GET["action"] == "nuevaSalidaPuerperio") {
            require_once(HTML_CORE . 'overall/formularioSalida.php');
    }else {
        
    }
    
    if (isset($_GET["action"]) && $_GET["action"] == "modPaciente") {
            require_once(HTML_CORE . 'overall/modalPaciente.php');
    }
    
    //Roles que pueden ir a esta ruta EN CITAS 
    //La enfermera
    if (isset ($_GET["action"]) && $_GET["action"] == "nuevaCita") {
            require_once(HTML_CORE .'overall/formularioNewRegistroCitas.php');
    }
    
    if (isset($_GET["action"]) && $_GET["action"] == "consultaUsuario") {
            require_once(HTML_CORE . 'overall/consultaRegistroUsuario.php');
    }
    
    if (isset($_GET["action"]) && $_GET["action"] == "busquedaPersonal") {
            require_once(HTML_CORE . 'overall/consultaPersonal.php');
    }
    
    if (isset($_GET["action"]) && $_GET["action"] == "conPediatria") {
            require_once(HTML_CORE . 'overall/consultaPediatria.php');
    }
    if (isset($_GET["action"]) && $_GET["action"] == "conMedicinaGeneral") {
            require_once(HTML_CORE . 'overall/consultaMedicinaGeneral.php');
    }
    
    
    if (isset($_GET["action"]) && $_GET["action"] == "tratamiento") {
            require_once(HTML_CORE . 'overall/tratamiento.php');
    }
    
    if (isset($_GET["action"]) && $_GET["action"] == "Estadisticas") {
            require_once(HTML_CORE . 'overall/estadisticaGenerales.php');
    }
    /***************************************************************************
    Controladores solo para imagenes*/
    if (isset($_GET["action"]) && $_GET["action"] == "error404") {
            include('view/img/error404.jpg');
    }
    
    if (isset($_GET["action"]) && $_GET["action"] == "editar") {
        include('view/img/cancel.png');
    }
    /***************************************************************************/
    if (isset($_GET["action"]) && $_GET["action"] == "newServicios") {
            require_once(HTML_CORE . 'overall/formulario_newservices.php');
    }else {
        /*aqui se puede redireccionar al index principal*/
    }
    
    if(isset($_GET["action"]) && $_GET["action"] == "plantilla") {
            require_once(HTML_CORE . 'overall/plantilla.php');
    }else {
        
    }
     if(isset($_GET["action"]) && $_GET["action"] == "descargarReporte") {
            require_once(HTML_CORE . 'overall/bajarTxt.php');
    }else {
        
    }
     
     if (isset($_GET["action"]) && $_GET["action"] == "estadisticasHospital") {
        require_once(HTML_CORE . 'overall/estadisticasTotal.php');
    }else {
        
    }
    /*if (isset($_GET["action"]) && $_GET["action"] == "nuevaHistoriaObstetricaold") {
        require_once(HTML_CORE . 'overall/formularioNewObstetricia2.php');
    }else {
        
    }
    //controlador para el formulario de Historia obstetrica: antecedentes personales
    if (isset($_GET["action"]) && $_GET["action"] == "nuevaHistoriaObstetricaAnt") {
        require_once(HTML_CORE . 'overall/formularioNewObstetricia3.php');
    }else {
        
    }
    /* controlador para el formulario de Historia obstetrica: Trabajo y Parto */
    /*if (isset($_GET["action"]) && $_GET["action"] == "nuevaHistoriaObstetricaParto") {
        require_once(HTML_CORE . 'overall/formularioNewObstetricia4.php');
    }else {
        
    }
    if (isset($_GET["action"]) && $_GET["action"] == "nuevaHistoriaObstetricaMadre") {
        require_once(HTML_CORE . 'overall/formularioNewObstetricia5.php');
    }else {
        
    }
    if (isset($_GET["action"]) && $_GET["action"] == "nuevaHistoriaObstetricaExm") {
        require_once(HTML_CORE . 'overall/formularioNewObstetricia6.php');
    }else {
        
    }
    if (isset($_GET["action"]) && $_GET["action"] == "nuevaHistoriaObstetricaRcn") {
        require_once(HTML_CORE . 'overall/formularioNewObstetricia7.php');
    }else {
        
    }
    if (isset($_GET["action"]) && $_GET["action"] == "nuevaHistoriaObstetricaRcnII") {
        require_once(HTML_CORE . 'overall/formularioNewObstetricia8.php');
    }else {
        
    }
    if (isset($_GET["action"]) && $_GET["action"] == "nuevaHistoriaObstetricaPuerperio") {
        require_once(HTML_CORE . 'overall/formularioNewObstetricia9.php');
    }else {
        
    }*/
?>