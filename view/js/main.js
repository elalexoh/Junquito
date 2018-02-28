//obtiene los registros de paciente este codigo funciona en el area de consultas
$(document).on('focus', '#busqueda', function(){
    $(obtener_registros());
    function obtener_registros(consulta){
        $.ajax({
            url: 'core/models/buscar.php',
            type: 'POST',
            dataType: 'html',
            data: {consulta: consulta},
        })
        
        .done(function(resultado){
            $("#tabla_resultado").html(resultado);
        })
    }
    
    $(document).on('keyup', '#busqueda', function(){
        var valorBusqueda=$('#busqueda').val();
        if (valorBusqueda!="" ) {
            obtener_registros(valorBusqueda);
        } else {
            obtener_registros();
        }
    });
});
//obtiene el valor para ordenar los registros de manera ascendente o descendente este codigo funciona en el area de consultas
// $(ordena_registros());
// function ordena_registros(orden){
//     $.ajax({
//         url: '../../core/models/buscar.php',
//         type: 'POST',
//         dataType: 'html',
//         data: {orden: orden},
//     })
    
//     .done(function(resultado){
//         $("#tabla_resultado").html(resultado);
//     })
// }
// 	$(document).ready(function(){
// 		$("#ordenarPor").change(function(){
// 		    $("#ordenarPor option:selected").each(function(){
//                 var valorOrden=$('#ordenarPor').val();
//                 if (valorOrden!="" ) {
//                     ordena_registros(valorOrden);
//                 } else {
//                     ordena_registros();
//                 }
// 				});
// 			});
// 		});
//busca en la base de datos pacientes ya existentes, este codigo funciona en el formulario de nuevo paciente
$(document).on('focus', '#rpcedula', function(){
    $(paciente());
    function paciente(cedula){
        $.ajax({
            url: '../../core/models/pacienteAjax.php',
            type: 'POST',
            dataType: 'html',
            data: {cedula: cedula},
        })
        
        .done(function(resultado){
            $("#cedula").html(resultado);
        })
    }
    
    $(document).on('keyup', '#rpcedula', function(){
        var cedula=$('#rpcedula').val();
        if (cedula!="" ) {
            paciente(cedula);
        } else {
            paciente();
        }
    });
});
//validacion para el correo (login)
// if ($(document).on('focus', '#correo') || $(document).on('focus', '#password') ) {
    
// }
$(document).on('focus', '#correo', function(){
    $(validaCorreo());
    function validaCorreo(correo){
        $.ajax({
            url: '../../core/validatePhp/validaCorreo.php',
            type: 'POST',
            dataType: 'html',
            data: {correo: correo},
        })
        
        .done(function(resultado){
            $("#errorEmail").html(resultado);
        })
    }
    
    $(document).on('keyup', '#correo', function(){
        var correo=$('#correo').val();
        if (correo!="" ) {
            validaCorreo(correo);
        } else {
            correo();
        }
    });
});
$(document).on('focus', '#newPassword', function(){
    $(validaPass());
    function validaPass(contra){
        $.ajax({
            url: '../../core/validatePhp/validaPass.php',
            type: 'POST',
            dataType: 'html',
            data: {contra: contra},
        })
        
        .done(function(resultado){
            $("#eNewPass").html(resultado);
        })
    }
    
    $(document).on('keyup', '#newPassword', function(){
        var valorContrasena=$('#newPassword').val();
        if (valorContrasena!="" ) {
            validaPass(valorContrasena);
        } else {
            validaPass();
        }
    }); 
});
    function varCedula(cedula){
        $('#enviar').attr("action", '?view=models&action=imprimirHistoria&cedula=' + cedula);
        $('#enviar').submit();
    }