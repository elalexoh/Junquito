
$(document).ready(function(){
    validacionesGenerales();
});
function validacionesGenerales(){
	valida_Nuevo_Usuario();
	valida_recup_Cuenta();
	validar_form_doctor();
	funcValRegistroPaciente();
	//limpiar_campo();
	Consult_paciente_gineco();
	funcValEvento();
	funcValConsulta();
	consultaPaciente();
	historiaMedica();
	funcioValNewCita();
	funcValNewHistoria();
	funcValConsulListaCitas();
	validar_form_pediatria();
}

/*funcion para limpiar los campos de los formularios*/
function limpiezaGeneral(){
    document.form.reset();
    document.fnewdoct.reset();
    document.fnewpac.reset();
}

/*Deshabilitar el botón Volver del navegador*/
$(document).ready(function(){
initControls();
});

function initControls(){
window.location.hash="red";
window.location.hash="Red" //chrome
window.onhashchange=function(){window.location.hash="red";}
}

/*Confirmando que el usuario desea salir del formulario en la seccion del login*/
function confirmarSalida(){
    var salir = confirm("¿Desea Salir del Formulario? \nLa Información será Borrada");
    if (salir) {
        window.location="index.php";
    }else{
        return false;
    }
}
//frederick
function confSalida(){
    var salir = confirm("¿Desea Salir del Formulario? \nLa Información será Borrada");
    if (salir) {
        window.location="?view=vistas&action=menuPrincipal";
    }else{
        return false;
    }
}


/*function muestra_seguridad_clave(clave,form){
   seguridad = seguridad_clave(clave);
  form.seguridad.value = seguridad + "%";
} 

function seguridad_clave(clave){
    var mayuscula = ABCEDFGHIJKMNLOPQRSTUVWXYZ;
    var minuscula = abcdefghijklmnopqrstuvwxyz;
    var numero = 1234567890;
    var seguridad = 0;
   if (clave.length!=0){
      if (mayuscula(clave) && minuscula(clave)){
         seguridad += 30;
      }
      if  (numero(clave) &&  mayuscula(clave)){
         seguridad += 25;
      }
      if (clave.length >= 9 && clave.length <= 10){
         seguridad += 15;
      }else{
         if (clave.length >= 6 && clave.length <= 8){
            seguridad += 30;
         }else{
            if (clave.length > 8){
               seguridad += 40;
            }
         }
      }
   }
   return seguridad;            
}*/

/*Funcion que valida las direcciones de correo*/
function valida_correo(correo) {
	if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(correo)){
		  return (true)
		  } else {
		   return (false);
		  }
}
/*Funcion para validar el input para la consulta en la vista principal del sistema*/
function formularioPerfil(){
    var perfil = document.fperfil;
    
    if (perfil.cedula.value == 0) {
        alert("Ingrese la Cédula");
        perfil.cedula.value="";
        perfil.cedula.focus();
        return false;
    }else{
        
    }
    perfil.submit();
}


/*Para que en el navegador no se guarde la contraseña*/
/*$('#form').attr('autocomplete', 'off');*/
//document.setAttribute('form').autocomplete='off';

/*Inicio de la funcion del formulario login*/
$(document).ready(function(){
        $("#email").parent().find("#flemail").addClass("active").focus();
});

function valida_login() {
	var f=document.form;
	
	if (f.email.value == 0) {
		document.getElementById("errorEmail").innerHTML="<font color='#ff0000'>El Campo 'email' Vacío</font>";
		f.email.focus();
		f.email.value="";
		return false;
	}else {
		document.getElementById("errorEmail").innerHTML="";
	}

	if (valida_correo(f.email.value)==false) {
		document.getElementById("errorEmail").innerHTML="<font color='#ff0000'>El email ingresado no es válido</font>";
		f.email.value="";
		f.email.focus();
		return false;
	}else {
		document.getElementById("errorEmail").innerHTML="";
	}

	if (f.password.value==0) {
		document.getElementById("valor").innerHTML="<font color='#ff0000'>El Campo 'password' vacío</font>";
		f.password.value="";
		f.password.focus();
		return false;
	}else {
		document.getElementById("valor").innerHTML="";
	}
	f.submit();
}/*Aqui termina la funcion del formulario login*/


/*funcion para el formulario de nuevo usuario*/
$(document).ready(function(){
        $("#usuario").parent().find("#lusuario").addClass("active").focus();
});

function valida_Nuevo_Usuario(){
	var users=document.frUser;
	
	if(users.frusuario.value == 0){
		alert("El Campo 'usuario' vacío");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>El Campo 'usuario' vacío</font>";
		users.frusuario.value="";
		users.frusuario.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
	
	if (users.email.value == 0) {
		alert("El Campo 'email' vacío");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>El Campo 'email' vacío</font>";
		users.email.value="";
		users.email.focus();
		return false();
	}else{
		document.getElementById("valor").innerHTML="";
	}
	
	if (valida_correo(users.email.value)== false) {
		alert("El 'email' ingresado no es válido");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>El 'email' ingresado no es válido</font>";
		users.email.value="";
		users.email.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
	
	if (users.password.value ==0) {
		alert("El Campo 'contraseña' vacío");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>El Campo 'contraseña' vacío</font>";
		users.password.value="";
		users.password.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
	
	if (users.cpassword.value ==0) {
		alert("El Campo repetir 'contraseña' vacío");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>El Campo repetir 'contraseña' vacío</font>";
		users.cpassword.value="";
		users.cpassword.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
	
	if (users.password.value != users.cpassword.value) {
		alert("Los Campos 'contraseña' & 'Repetir' no coinciden");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>Los Campos 'contraseña' & 'Repetir' no coinciden</font>";
		users.password.value="";
		users.cpassword.value="";
		users.password.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
	
	if (users.presecreta.value == 0) {
		alert("Seleccione una Pregunta \nMemorize la Pregunta");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>El Campo repetir 'contraseña' vacío</font>";
		users.presecreta.value="";
		users.presecreta.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
	
	if (users.ressecreta.value == 0) {
		alert("Responda y Memorize la Respuesta");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>El Campo repetir 'contraseña' vacío</font>";
		users.ressecreta.value="";
		users.ressecreta.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
	
	if (users.rol_usu.value == 0) {
		alert("Seleccione el nivel \nHonestidad en la Selección");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>El Campo repetir 'contraseña' vacío</font>";
		users.rol_usu.value="";
		users.rol_usu.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
	
	if (confirm("¿Estas seguro de registrarse?\nVerifique que los datos sean Correctos!")) {
	    users.submit();
	}else{
	    return false;
	}
	
	
}/*finaliza la funcion de validacion del formulario de nuevo usuario*/

/*funcion para el formulario de recuperar contraseña*/
$(document).ready(function(){
        $("#fremail").parent().find("#flpemail").addClass("active").focus();
});

function valida_recup_Cuenta(){
	var recup=document.frecupass;
	if (recup.frecupcorreo.value == 0) {
		document.getElementById("valor").innerHTML="<font color='#ff0000'>El Campo 'correo' se encuentra vacío</font>";
		recup.frecupcorreo.value="";
		recup.frecupcorreo.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
	
	if (valida_correo(recup.frecupcorreo.value)== false) {
		document.getElementById("valor").innerHTML="<font color='#ff0000'>Escriba el correo correctamente!</font>";
		recup.frecupcorreo.value="";
		recup.frecupcorreo.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
	
	/*if (recup.presecreta.value == 0) {
		document.getElementById("valor").innerHTML="<font color='#ff0000'>Seleccione la pregunta!</font>";
		recup.presecreta.value="";
		recup.presecreta.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
	
	if (recup.respsecret.value == 0) {
		document.getElementById("valor").innerHTML="<font color='#ff0000'>Escriba la respuesta válida!</font>";
		recup.respsecret.value="";
		recup.respsecret.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}*/
	
	if (confirm("¿Estas seguro de la Consulta?\nVerifique que los datos ingresados sean Correctos!")) {
	    recup.submit();
	}else{
	    return false;
	}
}/*Aqui finaliza la validacion del formulario de recuperar contraseña*/

/*Funcion para validar el campo de respuesta secreta*/
$(document).ready(function() {
    $("#fresp").parent().find("#lfrep").addClass("active").focus();
});

function recPregPass(){
    var preg = document.form;
    
   if (preg.fresp.value == 0) {
		document.getElementById("valor").innerHTML="<font color='#ff0000'>Escriba la respuesta!</font>";
		preg.fresp.value="";
		preg.fresp.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
	
	if (confirm("¿Estas seguro de su respuesta?\nRecuerde muy bien la respuesta!")) {
	    preg.submit();
	}else{
	    return false;
	}
}

/*Funcion para validar campos del formulario registro de doctor*/
$(document).ready(function(){
        $("#dfc").parent().find("#lfc").addClass("active").focus();
});

function validar_form_doctor(){
	var fdoctor=document.fnewdoct;
	
	if (!fdoctor.fdradio[0].checked && !fdoctor.fdradio[1].checked){
            alert('Seleccione el tipo de Identidad\nVenezolano o Extranjero');
            return false;
         }

	if (fdoctor.fdcedula.value == 0) {
	    alert("El Campo 'Cédula' esta Vacío!");
	    //fdoctor.fdcedula.style.color='#ff0000';marca el texto en el color determinado
		fdoctor.fdcedula.value="";
		fdoctor.fdcedula.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}

	if (isNaN(parseInt(fdoctor.fdcedula.value))) {
	    alert("El Campo 'Cédula' es Númerico!");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>El Campo 'Cédula' es Númerico!</font>";
		fdoctor.fdcedula.value="";
		fdoctor.fdcedula.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}

	if (fdoctor.fdcedula.value.length < 7) {
	    alert("Los Números de la 'Cédula' estan incompleto!");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>Los Números de la 'Cédula' estan incompleto!</font>";
		fdoctor.fdcedula.value="";
		fdoctor.fdcedula.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}

	if (fdoctor.fdcedula.value.length > 8) {
		alert("Los Números de la 'Cédula' estan excedidos!");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>Los Números de la 'Cédula' estan excedidos!</font>";
		fdoctor.fdcedula.value="";
		fdoctor.fdcedula.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
	
	if (fdoctor.fdprofesion.value == 0) {
		alert("Seleccione la 'Especialidad' Doctor");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>Seleccione la 'Especialidad' Doctor</font>";
		fdoctor.fdprofesion.value="";
		fdoctor.fdprofesion.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
	
	if (fdoctor.fdnomb.value == 0) {
		alert("El Campo 'Nombre' se encuentra vacío");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>El Campo 'Nombre' se encuentra vacío</font>";
		fdoctor.fdnomb.value="";
		fdoctor.fdnomb.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
	
	if (fdoctor.fdnomb.value.length < 4) {
	    alert("Los Datos del Nombre no se encuentran completos!");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>Los Datos del Nombre no se encuentran completos!</font>";
		fdoctor.fdnomb.value="";
		fdoctor.fdnomb.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}

	if (fdoctor.fdnomb.value.length > 10) {
		alert("Los Datos se encuentran excedidos!");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>Los Datos se encuentran excedidos!</font>";
		fdoctor.fdnomb.value="";
		fdoctor.fdnomb.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
	
	if (fdoctor.fdap.value == 0) {
		alert("El Campo 'Apellido' se encuentra vacío");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>El Campo 'Apellido' se encuentra vacío</font>";
		fdoctor.fdap.value="";
		fdoctor.fdap.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
	
	if (fdoctor.fdnomb.value.length < 4) {
		alert("Los Datos del Apellido no se encuentran completos!");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>Los Datos del Apellido no se encuentran completos!</font>";
		fdoctor.fdap.value="";
		fdoctor.fdap.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}

	if (fdoctor.fdap.value.length > 10) {
		alert("Los Datos se encuentran excedidos!");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>Los Datos se encuentran excedidos!</font>";
		fdoctor.fdap.value="";
		fdoctor.fdap.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
	
	if (fdoctor.fdg.value == 0) {
		alert("Seleccione su 'Sexualidad' Doctor");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>Mencione su 'Sexualidad' Doctor</font>";
		fdoctor.fdg.value="";
		fdoctor.fdg.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
	
	if (fdoctor.theDate.value == 0) {
		alert("El Campo 'Fecha de Nacimiento' esta Vacío!");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>El Campo 'Fecha de Nacimiento' esta Vacío!</font>";
		fdoctor.theDate.value="";
		fdoctor.theDate.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
	
	if (fdoctor.fdnacionalidad.value == 0) {
		alert("Mencione la Procedencia de su 'País");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>Mencione la Procedencia de su 'País'</font>";
		fdoctor.fdnacionalidad.value="";
		fdoctor.fdnacionalidad.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
	
	
	if (fdoctor.fdttelef.value == 0) {
		alert("Seleccione el 'tipo de telefonía' que posee Doctor");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>Seleccione el 'tipo de telefonía' que posee Doctor</font>";
		fdoctor.fdttelef.value="";
		fdoctor.fdttelef.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}

	if (fdoctor.fdnumber.value == 0) {
		alert("El Campo 'Teléfono' se encuentra Vacío!");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>El Campo 'Teléfono' se encuentra Vacío!</font>";
		fdoctor.fdnumber.value="";
		fdoctor.fdnumber.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}

	/*if (isNaN(parseInt(fdoctor.fdnumber.value))) {
		alert("El Campo 'Teléfono' es Númerico!");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>El Campo 'Teléfono' es Númerico!</font>";
		fdoctor.fdnumber.value="";
		fdoctor.fdnumber.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}*/

	if (fdoctor.fdnumber.value.length < 10) {
		alert("El Número 'Telefonico' esta incompleto!");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>El Número 'Telefonico' esta incompleto!</font>";
		fdoctor.fdnumber.value="";
		fdoctor.fdnumber.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}

	if (fdoctor.fdturno.value == 0) {
		alert("El Seleccione el 'Turno' a realizar");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>El Seleccione el 'código de Área'</font>";
		fdoctor.fdturno.value="";
		fdoctor.fdturno.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
	
	if (fdoctor.fdhora.value == 0) {
		alert("Seleccione 'El Horario de Trabajo'");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>Seleccione 'El Horario de Trabajo'</font>";
		fdoctor.fdhora.value="";
		fdoctor.fdhora.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
	
	if (confirm("¿Estas seguro de registrarse Doctor?\nVerifique los datos a Ingresar en el Registro!")) {
	    fdoctor.submit();
	}else{
	    return false;
	}
	
}/*Final de la validacion del formulario registro de doctor*/

/*Aqui es la funcion para validar los campos del formulario REGISTRO NUEVO PACIENTE*/

$(document).ready(function(){
        $("#rpcedula").parent().find("#lrpcedula").addClass("active");
});

 function funcValRegistroPaciente(){

	var frpaciente = document.fnewpac;
	if (!frpaciente.fdradio[0].checked && !frpaciente.fdradio[1].checked){
            alert('Seleccione el tipo de Identidad\nVenezolano o Extranjero');
            return false;
    }
	
	if (frpaciente.rpcedula.value == 0) {
		alert("El Campo 'Cédula' esta Vacío!");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>El Campo 'Cédula' esta Vacío!</font>";
		frpaciente.rpcedula.value="";
		frpaciente.rpcedula.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}

	if (isNaN(parseInt(frpaciente.rpcedula.value))) {
		alert("El Campo 'Cédula' es Númerico!");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>El Campo 'Cédula' es Númerico!</font>";
		frpaciente.rpcedula.value="";
		frpaciente.rpcedula.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}

	if (frpaciente.rpcedula.value.length < 7) {
		alert("Los Números de la 'Cédula' estan incompleto!");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>Los Números de la 'Cédula' estan incompleto!</font>";
		frpaciente.rpcedula.value="";
		frpaciente.rpcedula.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}

	if (frpaciente.rpcedula.value.length > 8) {
		alert("Los Números de la 'Cédula' estan excedidos!");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>Los Números de la 'Cédula' estan excedidos!</font>";
		frpaciente.rpcedula.value="";
		frpaciente.rpcedula.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
	
	if (frpaciente.rptiposang.value == 0) {
		alert("El Seleccione el 'Tipo de Sangre'");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>El Seleccione el 'Tipo de Sangre'</font>";
		frpaciente.rptiposang.value="";
		frpaciente.rptiposang.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
	
	if (frpaciente.rpalerg.value == 0) {
		alert("El Mencione el 'Medicamento o los Medicamento' que le produce alergia");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>El Seleccione el 'Medicamento' que es alergico</font>";
		frpaciente.rpalerg.value="";
		frpaciente.rpalerg.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
	
	if (frpaciente.rpnombre.value == 0 ) {
		alert("El Primer 'Nombre' se Encuentra Vacío!");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>El Campo 'Nombre del Paciente' se Encuentra Vacío!</font>";
		frpaciente.rpnombre.value="";
		frpaciente.rpnombre.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}

	if (frpaciente.rpnombre.value.length < 4) {
		alert("Los Datos del Nombre se encuentran imcompletos!");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>Los Datos del Nombre se encuentran imcompletos!</font>";
		frpaciente.rpnombre.value="";
		frpaciente.rpnombre.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}

	if (frpaciente.rpnombre.value.length > 10) {
		alert("Los Datos se encuentran excedidos!");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>Los Datos se encuentran excedidos!</font>";
		frpaciente.rpnombre.value="";
		frpaciente.rpnombre.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}

	if (frpaciente.rpapellido.value == 0) {
		alert("El Campo 'Apellido' esta Vacío!");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>El Campo 'Apellido del Paciente' esta Vacío!</font>";
		frpaciente.rpapellido.value="";
		frpaciente.rpapellido.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}

	if (frpaciente.rpapellido.value.length < 4) {
		alert("Los Datos del Apellido del Paciente no se encuentran completos!");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>Los Datos del Apellido del Paciente no se encuentran completos!</font>";
		frpaciente.rpapellido.value="";
		frpaciente.rpapellido.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}

	if (frpaciente.rpapellido.value.length > 10) {
		document.getElementById("valor").innerHTML="<font color='#ff0000'>Los Datos se encuentran excedidos!</font>";
		frpaciente.rpapellido.value="";
		frpaciente.rpapellido.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
	
	/*if (frpaciente.theDate.value== 0) {
		alert("Indique su 'Fecha de Nacimiento \nPor Favor'!");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>El Campo 'Fecha de Nacimiento' esta Vacío!</font>";
		frpaciente.theDate.value="";
		frpaciente.theDate.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}*/
	
	if (frpaciente.rpcivil.value == 0) {
		alert("Seleccione el 'Estado Civil' del Paciente");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>Seleccione el 'Estado Civil' del Paciente</font>";
		frpaciente.rpcivil.value="";
		frpaciente.rpcivil.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}

	if (frpaciente.rpsexo.value == 0) {
		alert("Seleccione el 'Sexo' del Paciente");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>Seleccione el 'Sexo' del Paciente</font>";
		frpaciente.rpsexo.value="";
		frpaciente.rpsexo.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}

	if (frpaciente.rpprofesion.value == 0) {
		alert("Seleccione la 'Profesión' del Paciente");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>Seleccione la 'Profesión' del Paciente</font>";
		frpaciente.rpprofesion.value="";
		frpaciente.rpprofesion.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
	
	if (frpaciente.rpnacionalidad.value == 0) {
		alert("Seleccione la 'Nacionalidad' del Paciente");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>Seleccione la 'Nacionalidad' del Paciente</font>";
		frpaciente.rpnacionalidad.value="";
		frpaciente.rpnacionalidad.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}

	if (frpaciente.rpestado.value == 0) {
		alert("Seleccione el 'Estado' proveniente del Paciente");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>Seleccione el 'Estado' proveniente del Paciente</font>";
		frpaciente.rpestado.value="";
		frpaciente.rpestado.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}

	if (frpaciente.rpciudad.value == 0) {
		alert("Seleccione la 'Ciudad' proveniente del Paciente");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>Seleccione la 'Ciudad' proveniente del Paciente</font>";
		frpaciente.rpciudad.value="";
		frpaciente.rpciudad.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}

	if (frpaciente.rpmunicipio.value == 0) {
		alert("Seleccione el 'Municipio' proveniente del Paciente");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>Seleccione el 'Municipio' proveniente del Paciente</font>";
		frpaciente.rpmunicipio.value="";
		frpaciente.rpmunicipio.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}

	if (frpaciente.rpparroq.value == 0) {
		alert("Seleccione la 'Parroquia' proveniente del Paciente");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>Seleccione la 'Parroquia' proveniente del Paciente</font>";
		frpaciente.rpparroq.value="";
		frpaciente.rpparroq.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
	
	if (frpaciente.rpseguro.value == 0) {
		alert("Seleccione el 'Nombre del Seguro' Asociado");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>Seleccione el 'Nombre del Seguro' Asociado</font>";
		frpaciente.rpseguro.value="";
		frpaciente.rpseguro.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";		
	}
	
	if (frpaciente.rpnro.value == 0) {
		alert("Escriba el 'Nro de Seguro' Por Favor!");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>Escriba el 'Nro de Seguro' Por Favor!</font>";
		frpaciente.rpnro.value="";
		frpaciente.rpnro.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";		
	}

	if (frpaciente.rpnro.value.length < 4) {
		alert("El Nro de Seguro es Incorrecto!");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>El Nro de Seguro es Incorrecto!</font>";
		frpaciente.rpnro.value="";
		frpaciente.rpnro.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}

	if (frpaciente.rpnro.value.length > 10) {
		alert("Los Datos se encuentran excedidos!");
		
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>Los Datos se encuentran excedidos!</font>";
		frpaciente.rpnro.value="";
		frpaciente.rpnro.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
	
	if (frpaciente.rpttelef.value == 0) {
		document.getElementById("valor").innerHTML="<font color='#ff0000'>Seleccione el 'tipo de telefonía' que posee el Paciente</font>";
		frpaciente.rpttelef.value="";
		frpaciente.rpttelef.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}

	if (frpaciente.rpnumber.value == 0) {
		alert("El Campo 'Teléfono' se encuentra Vacío!");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>El Campo 'Teléfono' se encuentra Vacío!</font>";
		frpaciente.rpnumber.value="";
		frpaciente.rpnumber.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}

	if (frpaciente.rpnombfam.value == 0) {
		alert("Mencione el Nombre del Familiar");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>Mencione el Nombre del Familiar</font>";
		frpaciente.rpnombfam.value="";
		frpaciente.rpnombfam.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
	
	if (frpaciente.rpapfam.value == 0) {
		alert("Mencione el Apellido del Familiar");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>Mencione el Apellido del Familiar</font>";
		frpaciente.rpapfam.value="";
		frpaciente.rpapfam.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
	
	if (frpaciente.rppafam.value == 0) {
		alert("Seleccione el parentesco familiar");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>Seleccione el parentesco familiar</font>"
		frpaciente.rppafam.value="";
		frpaciente.rppafam.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
	if (confirm("¿Estas seguro de registrar al Paciente?\nVerifique los datos antes de Ingresar en el Registro!")) {
	    frpaciente.submit();
	}else{
	    return false;
	}
 }/*Finaliza la validacion del formulario REGISTRO NUEVO PACIENTE*/
 
 /*FUNCION PARA VALIDAR LA BUSQUEDA DE CITAS ESPECIFICAS*/
 function funcValConsulListaCitas(){
     	var fvalcita = document.form_listado_cita;
	//if (fvalcita.fhistoria.value == 0 ) {
	//    alert("Introduzca el Número de Historia!");
	//	fvalcita.fhistoria.value="";                              COMENTADDO POR QUE STA E CONSTRUCCIN
	//	fvalcita.fhistoria.focus();
	//	return false;
	//}else{
	//	document.getElementById("valor").innerHTML="";
//	}
	
	fvalcita.submit();
 }/*FINALIZA LA FUNCION PARA VALIDAR LA BUSQUEDA DE CITAS ESPECIFICAS*/
 
 /*FUNCION PARA VALIDAR LA CONSULA DE PACIENTE*/
 function consultadePaciente(){
     	var fc = document.consulta_historia;
	if (fc.fhistoria.value == 0 ) {
	    alert("Introduzca el Número de Historia!");
		fc.fhistoria.value="";
		fc.fhistoria.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
	
	fc.submit();
 }/*FINALIZA LA FUNCION PARA VALIDAR LA CONSULA DE PACIENTE*/
 
 /*FUNCION PARA VALIDAR EL REGISTRO DE CITA*/

function funcioValNewCita(){

	var newCitaVal = document.citaVal;
	    if (newCitaVal.asuntoCita.value ==0 ) {
        alert("Seleccione el Asunto a Tratar!");
		newCitaVal.asuntoCita.value="";
		newCitaVal.asuntoCita.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
	if (newCitaVal.eli_paci.value ==0 ) {
		alert("Elija al Paciente!");
		newCitaVal.eli_paci.value="";
		newCitaVal.eli_paci.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
		if (newCitaVal.eli_doctor.value ==0 ) {
		alert("Elija al Doctor!");
		newCitaVal.eli_doctor.value="";
		newCitaVal.eli_doctor.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
	if (newCitaVal.fechancita.value ==0 ) {
		alert("Introduzca la Fecha para la Cita!");
		newCitaVal.fechancita.value="";
		newCitaVal.fechancita.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
	if (newCitaVal.horancita.value ==0 ) {
		alert("Elija la Hora de la Cita!");
		newCitaVal.horancita.value="";
		newCitaVal.horancita.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
	 newCitaVal.submit();
}

 /*FINALIZA LA FUNCION PARA VALIDAR EL REGISTRO DE CITA*/
 
  /*FUNCION PARA VALIDAR REGISTRO DE NUEVA HISTORIA*/
 function historiaMedica(){
     var fhistoria = document.formNewHistoria;
     
	if (fhistoria.num.value == 0 ) {
		alert("Introduzca Número de Historia Médica del paciente");
		fhistoria.num.value="";
		fhistoria.num.focus();
		return false;
	}else {
		document.getElementById("valor").innerHTML="";
	}
	
	if (fhistoria.chistoria.value == 0 ) {
		alert("Introduzca Número de Historia Médica del paciente");
		fhistoria.chistoria.value="";
		fhistoria.chistoria.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}

	
	if (isNaN(parseInt(fhistoria.chistoria.value))) {
		alert("El Campo es Númerico!");
		fhistoria.chistoria.value="";
		fhistoria.chistoria.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
	
	if (fhistoria.nombmed.value ==0 ) {
		alert("Seleccione al Médico");
		fhistoria.nombmed.value="";
		fhistoria.nombmed.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
	 fhistoria.submit();
}
     	/* FINALIZA LA FUNCION PARA VALIDAR REGISTRO DE NUEVA HISTORIA*/
 
 /* funcion para validar el apartado de evento*/
 function funcValEvento(){

	var fesnot = document.fesno;
	if (fesnot.fdtitulo.value ==0 ) {
		document.getElementById("valor").innerHTML="<font color='#ff0000'>El Campo 'Titulo' se Encuentra Vacío!</font>";
		fesnot.fdtitulo.value="";
		fesnot.fdtitulo.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
		if (fesnot.fdtexto.value ==0 ) {
		document.getElementById("valor").innerHTML="<font color='#ff0000'>El Campo 'Texto' se Encuentra Vacío!</font>";
		fesnot.fdtexto.value="";
		fesnot.fdtexto.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
	 fesnot.submit();
}
 /*Finaliza la validacion del del apartado de evento*/
 
  /* funcion para validar consulta de paciente de medicina general*/
 function funcValConsulMediGeneral(){

	var fescon = document.fesconsul;
	if (fescon.rpcedula.value ==0 ) {
	    alert("El Campo Ingresar Cedula Paciente se Encuentra Vacío!");  
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>El Campo 'Ingresar Cedula Paciente' se Encuentra Vacío!</font>";
		fescon.rpcedula.value="";
		fescon.rpcedula.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
	 fescon.submit();
}
 /*Finaliza la validacion de consulta de paciente de medicina general*/
 
  /* funcion para validar el formulario de estadisticas por consulta*/
 
 function funcValConsulta(){

	var festesc = document.festconsul;
// 	    if (festesc.especialidad.value ==0 ) {
// 		document.getElementById("valor").innerHTML="<font color='#ff0000'>El Campo 'Seleccionar Especialidad ' se Encuentra Vacío!</font>";
// 		festesc.especialidad.value="";
// 		festesc.especialidad.focus();
// 		return false;
// 	}else{
// 		document.getElementById("valor").innerHTML="";
// 	}
	if (festesc.dateIniv.value ==0 ) {
		document.getElementById("valor").innerHTML="<font color='#ff0000'>El Campo 'Fecha de Inicio' se Encuentra Vacío!</font>";
		festesc.dateIniv.value="";
		festesc.dateIniv.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
		if (festesc.datefiv.value ==0 ) {
		document.getElementById("valor").innerHTML="<font color='#ff0000'>El Campo 'Fecha de Culminacion ' se Encuentra Vacío!</font>";
		festesc.datefiv.value="";
		festesc.datefiv.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
	if (confirm("¿Deseas Mostrar la Estadistica que solicitas?")) {
	    festesc.submit();
	}else{
	    return false;
	}
	 
}
 
 /*Finaliza la validacion del formulario de estadisticas por consultas*/
 
/* funcion para validar el apartado de pediatria*/                                       //NO SE VEN LOS ALR NI EN ESTADISTICAS
 function validar_form_pediatria(){

	var fespedia = document.formPediatria;
	if (fespedia.diagclin.value ==0 ) {
		//alert("llene el campo Diagnóstico Clínico Final");
		document.getElementById("valor").innerHTML="<font color='#ff0000'>El Campo 'Diagnóstico Clínico Final se encuentra vacío PAG:1!</font>";
		fespedia.diagclin.value="";
		fespedia.diagclin.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
		if (fespedia.otrosdiag.value ==0 ) {
		//alert("llene el campo Otros Diagnósticos");
		document.getElementById("valor").innerHTML="<font color='#ff0000'>El Campo 'Otros Diagnósticos se encuentra vacío PAG:1!</font>";
		fespedia.otrosdiag.value="";
		fespedia.otrosdiag.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
	 fespedia.submit();
}
 /*Finaliza la validacion del del apartado de pediatria 
 
 /* funcion para validar consulta morblidad*/
 
 function funcValConsulEmerHosp(){

	var fesmor = document.festmorb;
	if (fesmor.dateIniv.value ==0 ) {
	    alert("El Campo Fecha de Inicio se Encuentra Vacío!");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>El Campo 'Fecha de Inicio' se Encuentra Vacío!</font>";
		fesmor.dateIniv.value="";
		fesmor.dateIniv.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
		if (fesmor.datefiv.value ==0 ) {
		alert("El Campo Fecha de Culminacion se Encuentra Vacío!");    
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>El Campo 'Fecha de Culminacion ' se Encuentra Vacío!</font>";
		fesmor.datefiv.value="";
		fesmor.datefiv.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
	 fesmor.submit();
}
 
 /*Finaliza la validacion de consulta morblidad*/
 
 
 /* funcion para validar nueva historia*/
 
 function funcValNewHistoria(){

	var fesnhis = document.formNewHistoria;
	if (fesnhis.number.value ==0 ) {
	    alert("El Campo Numero de Historia esta vacío!");
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>El Campo 'Fecha de Inicio' se Encuentra Vacío!</font>";
		fesnhis.number.value="";
		fesnhis.number.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
		if (fesnhis.chistoria.value ==0 ) {
		alert("El Campo de Cedula esta vacío!");    
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>El Campo 'Fecha de Culminacion ' se Encuentra Vacío!</font>";
		fesnhis.chistoria.value="";
		fesnhis.chistoria.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
		if (fesnhis.nombmed.value ==0 ) {
		alert("Elija a un Médico!");    
		//document.getElementById("valor").innerHTML="<font color='#ff0000'>El Campo 'Fecha de Culminacion ' se Encuentra Vacío!</font>";
		fesnhis.nombmed.value="";
		fesnhis.nombmed.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
	}
	 fesnhis.submit();
}
 
 /*Finaliza la validacion de nueva historia*/
 
 
 /*formulario consulta paciente ginecologia*/
function Consult_paciente_gineco(){
	if (true) {
		
	}else{
		
	}
}/*finaliza la validacion de los campos del formulario consulta paciente ginecologia*/

//Mascaras

jQuery(function($){
   $("#nom_newpac").mask("999 aa");
   $("#peso_obs").mask("999,99 aa");
   $("#tension_sis_obs").mask("999");
   $("#tension_dis_obs").mask("999");
   $("#pulso_obs").mask("999");
   $("#temp_obs").mask("999");
   $("#tension_sis_obs").mask("999");
   $("#tension_dis_obs").mask("999");
   $("#fec_ingr_obs").mask("9999/99/99",{placeholder:"aaaa/mm/dd"});
   $("#hora_obs_ent").mask("99:99 aa",{placeholder:"00:00 aa"});
   $("#fec_ult_regla").mask("9999/99/99",{placeholder:"aaaa/mm/dd"});
   $("#dia_emb").mask("9999/99/99",{placeholder:"aaaa/mm/dd"});
   $("#alt_emb_act").mask("99 aa");
   $("#cir_abd").mask("999 aa");
   $("#aus_foco").mask("999 aaaa",{placeholder:"000 mmHg"});
   $("#edd_emb").mask("99");
   $("#fec_ini_sint").mask("9999/99/99",{placeholder:"aaaa/mm/dd"});


});

    

function ChangeCase(elem){
  elem.value = elem.value.toUpperCase();
}
  window.onload=function(){
//Validacion Cedula Estudiante
var pattern = /\d/,
    caja = document.getElementById("rpcedula");

caja.addEventListener("keypress", function(e){
    this.value = this.value.toUpperCase();
    if (this.value.length === 0 && (!(/(E|V|P|e|v|p)/).test(String.fromCharCode(e.charCode))))
        e.preventDefault();
    if (this.value.length > 0 && (!pattern.test(String.fromCharCode(e.charCode)) || this.value.length == 10))
        e.preventDefault();
    if (this.value.length === 1)
        this.value += "-";
}, false);
}



function soloLetras(e){

  key = e.keyCode || e.which;
  teclado = String.fromCharCode(key).toLowerCase();
  letras = "abcdefghijklmnñopqrstuvwxyz ";
  especiales = "8-37-38-46-164";
  tecladoEspecial = false;

  for(var i in especiales){
    
    if(key == especiales[i]){
      tecladoEspecial = true; break; 
    }
  }

  if(letras.indexOf(teclado)==-1 && !tecladoEspecial){
    return false;
  }

}

function soloNumeros(e){

  key = e.keyCode || e.which;
  teclado = String.fromCharCode(key);
  numeros = "1234567890 ";
  especiales = "8-37-38-46";
  tecladoEspecial = false;

  for(var i in especiales){
    
    if(key == especiales[i]){
      tecladoEspecial = true; break; 
    }
  }

  if(numeros.indexOf(teclado)==-1 && !tecladoEspecial){
    return false;
  }
  
}
//agregar numero a listado [formularioNewPaciente]
        var nextinput = 0;
        function AgregarCampos(){
            var tipoTelefono=document.getElementById("tipoTelefono").value;
            var numeroTelefono=document.getElementById("movil").value;
            nextinput++;
            campo = '<div class="container"><div class="row"><div class="input-field col s12 m12 l6"><select name="rpttelef'+nextinput+'" class="browser-default col s12 m12 l12" title="Tipo de Telefonía"><option value="'+tipoTelefono+'" disabled selected>'+tipoTelefono+'</option></select></div><div class="input-field col s12 m12 l6"><input disabled value="'+numeroTelefono+'" type="text" id="movil'+nextinput+'" name="rpnumber'+nextinput+'" class="validate"  onpaste="return false" /><label for="rpnumber'+nextinput+'" title="'+numeroTelefono+'"></label></div></div></div>';
            $("#campos").append(campo);
        }

//desactivar disebled de formNewPediatria

function disponible(value) {

			if(value=="otro"){
				// habilitamos
				document.getElementById("especificar").disabled=false;
			}else if(value=="curar"){
				// deshabilitamos
				document.getElementById("especificar").disabled=true;
			}else if (value =="mejoria") {
				document.getElementById("especificar").disabled=true;
			}else if (value =="aut") {
				document.getElementById("especificar").disabled=true;
			}

		}