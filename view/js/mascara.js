jQuery(function($){
    $("#numero1").mask("9,99", {
        // Generamos un evento en el momento que se rellena
        completed:function(){
        $("#numero1").addClass("ok")
        }
    });
    // Definimos las mascaras para cada input
    $("#movil").mask("999-999-9999");
    $("#pacCedula").mask("99999999");
    $("#nroTlfFamiliar").mask("9999-999-9999");
    $("#tlfMovil").mask("9999-999-9999");
    $("#tlfOficina").mask("9999-999-9999");
    $("#tlfLocal").mask("9999-999-9999");
});