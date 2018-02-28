$(document).ready(function() {
    $('#pregSecreta').material_select();
});
$(document).ready(function(){
        $("#flemail").parent().find("#correoLogin").addClass("active").focus();
});
/*Deshabilitar el botón Volver del navegador*/
$(document).ready(function(){
initControls();
});

function initControls(){
window.location.hash="red";
window.location.hash="Red" //chrome
window.onhashchange=function(){window.location.hash="red";}
}

function confirmarSalida(){
    var salir = confirm("¿Desea Salir del Formulario? \nLa Información será Borrada");
    if (salir == true) {
        window.location="index.php";
    }else{
        return false;
    }
}

function confSalida(){
    var salir = confirm("¿Desea Salir del Formulario? \nLa Información será Borrada");
    if (salir == true) {
        window.location="?view=vistas&action=menuPrincipal";
    }else{
        return false;
    }
}


function confUsuario(){
    var confUsers = confirm("¿Desea Registrarse?\nVerifique los datos!");
    if (confUsers == true) {
            window.location="index.php";
        }else{
            return false;
    }
}
function confRegObstetrico(){
    var regObst=confirm("¿Desea guardar los datos de la historia obstetrica?");
    if (regObst == true) {
        window.location="?view=vistas&action=medicinaGeneral";
    }else{
        return false;
    }
}

function confRegistro(){
    var registrar = confirm("¿Esta seguro que los datos del paciente son correctos?\nVerifique los datos a Registrar!");
    if (registrar == true) {
        window.location="?view=vistas&action=menuPrincipal";
    }else{
        return false;
    }
}

function confRegistroDoctor(){
    var medico = confirm("¿Estas seguro de registrarse Doctor?\nVerifique que los datos sean Correctos!");
    if (medico == true) {
        window.location="index.php";
        //window.location="?view=vistas&action=menuPrincipal";
    }else{
        return false;
    }
}
function regHorarioDoctor(){
    var horario = confirm("¿Esta seguro de asignar esa cantidad para el doctor?\nVerifique la cantidad!");
    if (horario == true) {
        window.location="?view=vistas&action=menuPrincipal";
    }else{
        return false;
    }
}
/**************************************************************************************************************/
/*Funcion Anidada para Trabajo y Parto*/
$(document).ready(function() {
   $("#cbx_rupturaMemb").change(function() {
       $("#cbx_rupturaMemb option:selected").each(function() {
          cod_rupturamemb = $(this).val();
          $.post("?view=models&action=selectMembrana", {cod_rupturamemb: cod_rupturamemb}, function(data){
              $("#cbx_especificar").html(data);
          });
       });
   });
});
/***************************************************************************************************************/

/*Función para select anidados en el formulario Pacientes*/
$(document).ready(function(){
		$("#cbx_nacionalidad").change(function(){
			$("#cbx_nacionalidad option:selected").each(function(){
				cod_nacion = $(this).val();
				$.post("?view=models&action=selectEstado", {cod_nacion: cod_nacion}, function(data){
					$("#cbx_estado").html(data);
				});
			});
		});
	});

	$(document).ready(function(){
		$("#cbx_estado").change(function(){
			$("#cbx_estado option:selected").each(function(){
				cod_estado = $(this).val();
				$.post("?view=models&action=selectMunicipio", {cod_estado: cod_estado}, function(data){
					$("#cbx_municipio").html(data);
				});
			});
		});
	});
	
	$(document).ready(function(){
	   $("#cbx_municipio").change(function(){
	      $("#cbx_municipio option:selected").each(function(){
	         cod_municipio = $(this).val();
	         $.post("?view=models&action=selectParroquia", {cod_municipio: cod_municipio}, function(data){
	            $("#cbx_parroquia").html(data); 
	         });
	      });
	   });
	});
	
	$(document).ready(function() {
	   $("#cbx_municipio").change(function() {
	      $("#cbx_municipio option:selected").each(function() {
	         cod_mun = $(this).val();
	         $.post("?view=models&action=selectCiudad", {cod_mun: cod_mun}, function(data) {
	            $("#cbx_ciudad").html(data); 
	         });
	      });
	   });
	});
/****************************************************************************************************************/	
/*funcion de los selec anidados de Newregistro citas*/

/*Función para select anidados especialidad con dotor en el formularioNewregistroCitas*/
$(document).ready(function(){
		$("#cbx_especialidad").change(function(){
			$("#cbx_especialidad option:selected").each(function(){
				cod_especi = $(this).val();
			  $.post("?view=models&action=selectEspecialidad", {cod_especi: cod_especi}, function(data){
					$("#eli_doctor").html(data);
				});
			});
		})
	});
	
/*Función para select anidados dotor con paciente en el formularioNewregistroCitas*/
$(document).ready(function(){
		$("#eli_doctor").change(function(){
			$("#eli_doctor option:selected").each(function(){
				cod_doctor_bp = $(this).val();
			  $.post("?view=models&action=selectPaciente", {cod_doctor_bp: cod_doctor_bp}, function(data){
					$("#eli_paci").html(data);
				});
			});
		})
	});
	
/*Función para select anidados especialidad con turno en el formularioNewregistroCitas*/
$(document).ready(function(){
		$("#cbx_especialidad").change(function(){
			$("#cbx_especialidad option:selected").each(function(){
				cod_especi_turno = $(this).val();
			  $.post("?view=models&action=selectTurno", {cod_especi_turno: cod_especi_turno}, function(data){
					$("#cbx_turno").html(data);
				});
			});
		})
	});
/*termina funcion de los selec anidados de Newregistrocita*/	

/************************************************************************************************************************
esto es para ocultar y visualizar el nav para el modal de medicina general*/
$(document).ready(function(){
  $("#hide").click(function(){
    $("#element").hide();
  });
  $("#show").click(function(){
    $("#element").show();
  });
});
/**************************************************************************************************************************
Funcion para activar los modales en el form de medicina general*/
$(document).ready(function(){
    $('#obstetrica').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var recipient = button.data('whatever')
      var modal = $(this)
      modal.find('.modal-title').text(recipient)

    });
});
$(document).ready(function(){
    $('#antecedente').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var recipient = button.data('whatever')
      var modal = $(this)
      modal.find('.modal-title').text(recipient)

    });
});
$(document).ready(function(){
    $('##personales').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var recipient = button.data('whatever')
      var modal = $(this)
      modal.find('.modal-title').text(recipient)

    });
});
/************************************************************************************************************************/
/*Funcion que valida las direcciones de correo*/
function valida_correo(correo) {
	if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(correo)){
		  return (true)
		  } else {
		   return (false);
		  }
}
/************************************************************************************************************************/
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

	if (confirm("¿Estas seguro de la Consulta?\nVerifique que los datos ingresados sean Correctos!")) {
	    recup.submit();
	}else{
	    return false;
	}
}/*Aqui finaliza la validacion del formulario de recuperar contraseña*/
function recPregPass(){
    var preg = document.form;
    if (document.getElementById("#selectPregunta") == "empty") {
        document.getElementById("valor").innerHTML="<font color='#ff0000'>Seleccione una Pregunta!</font>";
        return false
    }else{
        document.getElementById("valor").innerHTML="";
    }
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
$(document).ready(function(){
        $("#conf").parent().find("#lconf").addClass("active").focus();
});
function actualizaPass(){
    var pass = document.formPass;
    if (pass.fconfpass.val == 0) {
        document.getElementById("valor").innerHTML="<font color='#ff0000'>Escriba la Contraseña!</font>";
		pass.fconfpass.value="";
		pass.fconfpass.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
    }
    if (pass.fcrepass.val == 0) {
        document.getElementById("valor").innerHTML="<font color='#ff0000'>Repita la Contraseña!</font>";
		pass.fcrepass.value="";
		pass.fcrepass.focus();
		return false;
	}else{
		document.getElementById("valor").innerHTML="";
    }
    
    if (confirm("¿Seguro de su Contraseña?\nRecuerdela muy bien!")) {
	    pass.submit();
	}else{
	    return false;
	}
    
}
/**************************************************************************************************************************/
/*Función de habilitar input a traves de radiobutton formulario de Pediatria*/

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

function habilitado(value) {

	if(value=="otros"){
		// habilitamos
		document.getElementById("inpthabilitar").disabled=false;
	}else if(value=="biop"){
		// deshabilitamos
		document.getElementById("inpthabilitar").disabled=true;
	}else if (value =="autop") {
		document.getElementById("inpthabilitar").disabled=true;
	}

}
/************************************************************************************************************************/
function habilitaRadio(value) {

	if (value == "lactante") {
		document.getElementById("date").disabled = false;
		document.getElementById("checkbox1").disabled = false;
		document.getElementById("checkbox2").disabled = false;
		document.getElementById("checkbox3").disabled = false;
		document.getElementById("checkbox4").disabled = false;
		document.getElementById("checkbox5").disabled = false;
		document.getElementById("checkbox6").disabled = false;
		document.getElementById("checkbox7").disabled = false;
		document.getElementById("checkbox8").disabled = false;
		document.getElementById("checkbox9").disabled = false;
		document.getElementById("checkbox10").disabled = false;
		document.getElementById("checkbox11").disabled = false;
		document.getElementById("checkbox12").disabled = false;
		document.getElementById("checkbox13").disabled = false;
		document.getElementById("checkbox14").disabled = false;
		document.getElementById("checkbox15").disabled = false;
		document.getElementById("checkbox16").disabled = false;
		document.getElementById("checkbox17").disabled = false;
		document.getElementById("checkbox18").disabled = false;
		document.getElementById("checkbox19").disabled = true;
		document.getElementById("checkbox19").checked = 0;
		document.getElementById("inptEscuela").disabled = true;
		document.getElementById("inptEscuela").value = '';
		document.getElementById("checkbox20").disabled = true;
		document.getElementById("checkbox20").checked = 0;
		document.getElementById("inptProgreso").disabled = true;
		document.getElementById("inptProgreso").value = '';
	}else if (value == "infante") {
		document.getElementById("date").disabled = false;
		document.getElementById("checkbox1").disabled = true;
		document.getElementById("checkbox1").checked = 0;
		document.getElementById("respira").disabled = true;
		document.getElementById("respira").value = '';
		document.getElementById("checkbox2").disabled = true;
		document.getElementById("checkbox2").checked = 0;
		document.getElementById("cianosis").disabled = true;
		document.getElementById("cianosis").value = '';
		document.getElementById("checkbox3").disabled = true;
		document.getElementById("checkbox3").checked = 0;
		document.getElementById("fiebre").disabled = true;
		document.getElementById("fiebre").value = '';
		document.getElementById("checkbox4").disabled = true;
		document.getElementById("checkbox4").checked = 0;
		document.getElementById("vomitos").disabled = true;
		document.getElementById("vomitos").value = '';
		document.getElementById("checkbox5").disabled = true;
		document.getElementById("checkbox5").checked = 0;
		document.getElementById("ictericia").disabled = true;
		document.getElementById("ictericia").value = '';
		document.getElementById("checkbox6").disabled = true;
		document.getElementById("checkbox6").checked = 0;
		document.getElementById("hemo").disabled = true;
		document.getElementById("hemo").value = '';
		document.getElementById("checkbox7").disabled = true;
		document.getElementById("checkbox7").checked = 0;
		document.getElementById("convulsion").disabled = true;
		document.getElementById("convulsion").value = '';
		document.getElementById("checkbox8").disabled = true;
		document.getElementById("checkbox8").checked = 0;
		document.getElementById("malformacion").disabled = true;
		document.getElementById("malformacion").value = '';
		document.getElementById("checkbox9").disabled = true;
		document.getElementById("checkbox9").checked = 0;
		document.getElementById("oftalmia").disabled = true;
		document.getElementById("oftalmia").value = '';
		document.getElementById("checkbox10").disabled = true;
		document.getElementById("checkbox10").checked = 0;
		document.getElementById("coriza").disabled = true;
		document.getElementById("coriza").value = '';
		document.getElementById("checkbox11").disabled = true;		
		document.getElementById("checkbox11").checked = 0;
		document.getElementById("inptotrosDiag").disabled = true;
		document.getElementById("inptotrosDiag").value = '';
		document.getElementById("checkbox12").disabled = true;
		document.getElementById("checkbox12").checked = 0;
		document.getElementById("inptCabeza").disabled = true;
		document.getElementById("inptCabeza").value = '';
		document.getElementById("checkbox13").disabled = true;
		document.getElementById("checkbox13").checked = 0;
		document.getElementById("inptsentar").disabled = true;
		document.getElementById("inptsentar").value = '';
		document.getElementById("checkbox14").disabled = true;
		document.getElementById("checkbox14").checked = 0;
		document.getElementById("inptpararse").disabled = true;
		document.getElementById("inptpararse").value = '';
		document.getElementById("checkbox15").disabled = true;
		document.getElementById("checkbox15").checked = 0;
		document.getElementById("inptCamino").disabled = true;
		document.getElementById("inptCamino").value = '';
		document.getElementById("checkbox16").disabled = true;
		document.getElementById("checkbox16").checked = 0;
		document.getElementById("inptPalabras").disabled = true;
		document.getElementById("inptPalabras").value = '';
		document.getElementById("checkbox17").disabled = true;
		document.getElementById("checkbox17").checked = 0;
		document.getElementById("inptEsfinter").disabled = true;
		document.getElementById("inptEsfinter").value = '';
		document.getElementById("checkbox18").disabled = true;
		document.getElementById("checkbox18").checked = 0;
		document.getElementById("inptpDiente").disabled = true;
		document.getElementById("inptpDiente").value = '';
		document.getElementById("checkbox19").disabled = false;
		document.getElementById("checkbox20").disabled = false;
		
	}
}
/***********************************************************************************************************************
Funcion para habilitar input para formulario de Pediatria Sección Interrogatorio I*/

    function habilitarInput(){
/**************************PERIODO NEONATAL*********************************************************/

    	if (document.getElementById("checkbox1").checked == true) {
    		document.getElementById("respira").disabled = false;
    	}else{
    		document.getElementById("respira").disabled = true;
    	}

    	if (document.getElementById("checkbox2").checked == true) {
    		document.getElementById("cianosis").disabled = false;
    	}else{
    		document.getElementById("cianosis").disabled = true;
    	}

    	if (document.getElementById("checkbox3").checked == true) {
    		document.getElementById("fiebre").disabled = false;
    	}else{
    		document.getElementById("fiebre").disabled = true;
    	}

    	if (document.getElementById("checkbox4").checked == true) {
			document.getElementById("vomitos").disabled = false;
    	}else{
    		document.getElementById("vomitos").disabled = true;
    	}

    	if (document.getElementById("checkbox5").checked == true) {
			document.getElementById("ictericia").disabled = false;
    	}else{
    		document.getElementById("ictericia").disabled = true;
    	}

    	if (document.getElementById("checkbox6").checked == true) {
			document.getElementById("hemo").disabled = false;
    	}else{
			document.getElementById("hemo").disabled = true;
    	}

    	if (document.getElementById("checkbox7").checked == true) {
			document.getElementById("convulsion").disabled = false;
    	}else{
    		document.getElementById("convulsion").disabled = true;
    	}

    	if (document.getElementById("checkbox8").checked == true) {
			document.getElementById("malformacion").disabled = false;
    	}else{
    		document.getElementById("malformacion").disabled = true;
    	}

    	if (document.getElementById("checkbox9").checked == true) {
			document.getElementById("oftalmia").disabled = false;
    	}else{
    		document.getElementById("oftalmia").disabled = true;
    	}

    	if (document.getElementById("checkbox10").checked == true) {
			document.getElementById("coriza").disabled = false;
    	}else{
    		document.getElementById("coriza").disabled = true;
    	}

    	if (document.getElementById("checkbox11").checked == true) {
			document.getElementById("inptotrosDiag").disabled = false;
    	}else{
    		document.getElementById("inptotrosDiag").disabled = true;
    	}
/******************************************************************************************************
DESARROLLO***/

    	if (document.getElementById("checkbox12").checked == true) {
			document.getElementById("inptCabeza").disabled = false;
    	}else{
    		document.getElementById("inptCabeza").disabled = true;
    	}

    	if (document.getElementById("checkbox13").checked == true) {
			document.getElementById("inptsentar").disabled = false;
    	}else{
    		document.getElementById("inptsentar").disabled = true;
    	}

    	if (document.getElementById("checkbox14").checked == true) {
			document.getElementById("inptpararse").disabled = false;
    	}else{
    		document.getElementById("inptpararse").disabled = true;
    	}

    	if (document.getElementById("checkbox15").checked == true) {
			document.getElementById("inptCamino").disabled = false;
    	}else{
    		document.getElementById("inptCamino").disabled = true;
    	}

    	if (document.getElementById("checkbox16").checked == true) {
			document.getElementById("inptPalabras").disabled = false;
    	}else{
    		document.getElementById("inptPalabras").disabled = true;
    	}

    	if (document.getElementById("checkbox17").checked == true) {
			document.getElementById("inptEsfinter").disabled = false;
    	}else{
			document.getElementById("inptEsfinter").disabled = true;
    	}

    	if (document.getElementById("checkbox18").checked == true) {
			document.getElementById("inptpDiente").disabled = false;
    	}else{
    		document.getElementById("inptpDiente").disabled = true;
    	}

    	if (document.getElementById("checkbox19").checked == false) {
    		document.getElementById("inptEscuela").disabled = true;
    	}else{
    		document.getElementById("inptEscuela").disabled = false;
    	}

    	if (document.getElementById("checkbox20").checked == false) {
    		document.getElementById("inptProgreso").disabled = true;
    	}else{
    		document.getElementById("inptProgreso").disabled = false;
    	}

    	if (document.getElementById("checkbox21").checked == true) {
    		document.getElementById("inptProgPeso").disabled = false;
    	}else{
    		document.getElementById("inptProgPeso").disabled = true;
    	}
/*******************************************************************************************
ALIMENTACION***/

    	if (document.getElementById("checkbox33").checked == true) {
			document.getElementById("inptdieta").disabled = false;
    	}else{
    		document.getElementById("inptdieta").disabled = true;
    	}
	/**********************************************************************************************************
	Sección de activación de input mediante Checkbox desde habitos psicologicos hasta historia familiar del form de pediatria
	HABITOS PSICOLOGICOS*/

    	if (document.getElementById("checkSuenio").checked == true) {
			document.getElementById("inptsuenio").disabled = false;
    	}else{
    		document.getElementById("inptsuenio").disabled = true;
    	}

    	if (document.getElementById("checkSiesta").checked == true) {
			document.getElementById("inptsiesta").disabled = false;
    	}else{
 			document.getElementById("inptsiesta").disabled = true;  		
    	}
    	if (document.getElementById("checkJuegos").checked == true) {
			document.getElementById("inptjuego").disabled = false;
    	}
    	else{
			document.getElementById("inptjuego").disabled = true;
    	}

    	if (document.getElementById("checkSex").checked == true) {
			document.getElementById("inptsexo").disabled = false;
    	}else{
    		document.getElementById("inptsexo").disabled = true;
    	}

    	if (document.getElementById("checkDedos").checked == true) {
			document.getElementById("inptChupaDedos").disabled = false;
    	}else{
    		document.getElementById("inptChupaDedos").disabled = true;
    	}

    	if (document.getElementById("checking").checked == true) {
			document.getElementById("inptComeUnia").disabled = false;
    	}else{
    		document.getElementById("inptComeUnia").disabled = true;
    	}
		if (document.getElementById("checkRasgos").checked == true) {
			document.getElementById("inptRasgos").disabled = false;
		}else{
			document.getElementById("inptRasgos").disabled = true;
		}

		if (document.getElementById("checkRecrear").checked == true) {
			document.getElementById("inptRecreacion").disabled = false;
		}else{
			document.getElementById("inptRecreacion").disabled = true;
		}

		if (document.getElementById("checkRecrear").checked == true) {
			document.getElementById("inptRecreacion").disabled = false;
		}else{
			document.getElementById("inptRecreacion").disabled = true;
		}

		if (document.getElementById("checkOcupacion").checked == true) {
			document.getElementById("inptOcupacion").disabled = false;
		}else{
			document.getElementById("inptOcupacion").disabled = true;
		}

		if (document.getElementById("checkOtras").checked == true) {
			document.getElementById("inptHabOtros").disabled = false;
		}else{
			document.getElementById("inptHabOtros").disabled = true;
		}
/*********************************************************************************************
INMINIZANTES Y PRUEBAS**/

		if (document.getElementById("checkViruela").checked == true) {
			document.getElementById("inptViruela").disabled = false;
		}else{
			document.getElementById("inptViruela").disabled = true;
		}
		
		if (document.getElementById("checkedTos").checked == true) {
			document.getElementById("inptTos").disabled = false;
		}else{
			document.getElementById("inptTos").disabled = true;
		}
		
		if (document.getElementById("checkDiafteria").checked == true) {
			document.getElementById("inptDiafteria").disabled = false;
		}else{
			document.getElementById("inptDiafteria").disabled = true;
		}
		
		if (document.getElementById("checkTetanos").checked == true) {
			document.getElementById("inptTetano").disabled = false;
		}else{
			document.getElementById("inptTetano").disabled = true;
		}
		
		if (document.getElementById("checkTifica").checked == true) {
			document.getElementById("inptTifica").disabled = false;
		}else{
			document.getElementById("inptTifica").disabled = true;
		}
		
		if (document.getElementById("checkBCG").checked == true) {
			document.getElementById("inptBCG").disabled = false;
		}else{
			document.getElementById("inptBCG").disabled = true;
		}
		
		if (document.getElementById("checkPolio").checked == true) {
			document.getElementById("inptPolio").disabled = false;
		}else{
			document.getElementById("inptPolio").disabled = true;
		}
		
		if (document.getElementById("checkTuber").checked == true) {
			document.getElementById("inptTuber").disabled = false;
		}else{
			document.getElementById("inptTuber").disabled = true;
		}
		
		if (document.getElementById("checkboxOtros").checked == true) {
			document.getElementById("inptOtras").disabled = false;
		}else{
			document.getElementById("inptOtras").disabled = true;
		}
/*************************************************************************************************************
HISTORIA FAMILIAR***/
		if (document.getElementById("checkHfam").checked == true) {
			document.getElementById("inptHistFam").disabled = false;
		}	else{
			document.getElementById("inptHistFam").disabled = true;
		}
/************************************************************************************************************************
funcion javascript para el formulario de pediatria en la seccion interrogatorio II desde Piel Hasta Ojos
PIEL PINACULO*/
		if (document.getElementById("checkColor").checked == true) {
			document.getElementById("inptColor").disabled = false;
		}else{
			document.getElementById("inptColor").disabled = true;
		}

		if (document.getElementById("checkHumedad").checked == true) {
			document.getElementById("inptHumedad").disabled = false;
		}else{
			document.getElementById("inptHumedad").disabled = true;
		}

		if (document.getElementById("checkContext").checked == true) {
			document.getElementById("inptContext").disabled = false;
		}else{
			document.getElementById("inptContext").disabled = true;
		}

		if (document.getElementById("checkPigmento").checked == true) {
			document.getElementById("inptPigmento").disabled = false;
		}else{
			document.getElementById("inptPigmento").disabled = true;
		}

		if (document.getElementById("checkHidrata").checked == true) {
			document.getElementById("inptHidrata").disabled = false;
		}else{
			document.getElementById("inptHidrata").disabled = true;
		}

		if (document.getElementById("checkEquismo").checked == true) {
			document.getElementById("inptEquismo").disabled = false;
		}else{
			document.getElementById("inptEquismo").disabled = true;
		}

		if (document.getElementById("checkPete").checked == true) {
			document.getElementById("inptPete").disabled = false;
		}else{
			document.getElementById("inptPete").disabled = true;
		}

		if (document.getElementById("checkCia").checked == true) {
			document.getElementById("inptCia").disabled = false;
		}else{
			document.getElementById("inptCia").disabled = true;
		}

		if (document.getElementById("checkErup").checked == true) {
			document.getElementById("inptErup").disabled = false;
		}else{
			document.getElementById("inptErup").disabled = true;
		}

		if (document.getElementById("checkPanic").checked == true) {
			document.getElementById("inptPanic").disabled = false;
		}else{
			document.getElementById("inptPanic").disabled = true;
		}

		if (document.getElementById("checkTurgor").checked == true) {
			document.getElementById("inptTurgor").disabled = false;
		}else{
			document.getElementById("inptTurgor").disabled = true;
		}

		if (document.getElementById("checkEdema").checked == true) {
			document.getElementById("inptEdema").disabled = false;
		}else{
			document.getElementById("inptEdema").disabled = true;
		}

		if (document.getElementById("checkUnias").checked == true) {
			document.getElementById("inptUnias").disabled = false;
		}else{
			document.getElementById("inptUnias").disabled = true;
		}

		if (document.getElementById("checkNod").checked == true) {
			document.getElementById("inptNod").disabled = false;
		}else{
			document.getElementById("inptNod").disabled = true;
		}

		if (document.getElementById("checkPelos").checked == true) {
			document.getElementById("inptPelos").disabled = false;
		}else{
			document.getElementById("inptPelos").disabled = true;
		}

		if (document.getElementById("checkVascula").checked == true) {
			document.getElementById("inptVascula").disabled = false;
		}else{
			document.getElementById("inptVascula").disabled = true;
		}

		if (document.getElementById("checkCicatris").checked == true) {
			document.getElementById("inptCicatris").disabled = false;
		}else{
			document.getElementById("inptCicatris").disabled = true;
		}

		if (document.getElementById("checkUlcera").checked == true) {
			document.getElementById("inptUlcera").disabled = false;
		}else{
			document.getElementById("inptUlcera").disabled = true;
		}

		if (document.getElementById("checkFistula").checked == true) {
			document.getElementById("inptFistula").disabled = false;
		}else{
			document.getElementById("inptFistula").disabled = true;
		}
		if (document.getElementById("checkOtros").checked == true) {
			document.getElementById("inpOtros").disabled = false;
		}else{
			document.getElementById("inpOtros").disabled = true;
		}
/**************************************************************************************************************
CABEZA**/
		if (document.getElementById("checkConf").checked == true) {
			document.getElementById("inptConf").disabled = false;
		}else{
			document.getElementById("inptConf").disabled = true;
		}

		if (document.getElementById("checkFront").checked == true) {
			document.getElementById("inptFront").disabled = false;
		}else{
			document.getElementById("inptFront").disabled = true;
		}

		if (document.getElementById("checkSutura").checked == true) {
			document.getElementById("inptSutura").disabled = false;
		}else{
			document.getElementById("inptSutura").disabled = true;
		}

		if (document.getElementById("checkCircunf").checked == true) {
			document.getElementById("inptCircunf").disabled = false;
		}else{
			document.getElementById("inptCircunf").disabled = true;
		}

		if (document.getElementById("checkCraneo").checked == true) {
			document.getElementById("inptCraneo").disabled = false;
		}else{
			document.getElementById("inptCraneo").disabled = true;
		}

		if (document.getElementById("checkCabello").checked == true) {
			document.getElementById("inptCabello").disabled = false;
		}else{
			document.getElementById("inptCabello").disabled = true;
		}

		if (document.getElementById("checkbOtras").checked == true) {
			document.getElementById("inptOtros").disabled = false;
		}else{
			document.getElementById("inptOtros").disabled = true;
		}
/*********************************************************************************************
OJOS*/
		if (document.getElementById("checkConjuntiva").checked == true) {
			document.getElementById("inptConjuntiva").disabled = false;
		}else{
			document.getElementById("inptConjuntiva").disabled = true;
		}

		if (document.getElementById("checkEsclero").checked == true) {
			document.getElementById("inptEsclero").disabled = false;
		}else{
			document.getElementById("inptEsclero").disabled = true;
		}

		if (document.getElementById("checkCornea").checked == true) {
			document.getElementById("inptCornea").disabled = false;
		}else{
			document.getElementById("inptCornea").disabled = true;
		}

		if (document.getElementById("checkPupila").checked == true) {
			document.getElementById("inptPupila").disabled = false;
		}else{
			document.getElementById("inptPupila").disabled = true;
		}

		if (document.getElementById("checkmovie").checked == true) {
			document.getElementById("inptMovie").disabled = false;
		}else{
			document.getElementById("inptMovie").disabled = true;
		}

		if (document.getElementById("checkDesvia").checked == true) {
			document.getElementById("inptDesvia").disabled = false;
		}else{
			document.getElementById("inptDesvia").disabled = true;
		}

		if (document.getElementById("checkNistag").checked == true) {
			document.getElementById("inptNistag").disabled = false;
		}else{
			document.getElementById("inptNistag").disabled = true;
		}

		if (document.getElementById("checkPtosis").checked == true) {
			document.getElementById("inptPtosis").disabled = false;
		}else{
			document.getElementById("inptPtosis").disabled = true;
		}

		if (document.getElementById("checkExostalmo").checked == true) {
			document.getElementById("inptExostalmo").disabled = false;
		}else{
			document.getElementById("inptExostalmo").disabled = true;
		}

		if (document.getElementById("checkOftalmo").checked == true) {
			document.getElementById("inptOftalmo").disabled = false;
		}else{
			document.getElementById("inptOftalmo").disabled = true;
		}

		if (document.getElementById("checkOjo").checked == true) {
			document.getElementById("inptOjo").disabled = false;
		}else{
			document.getElementById("inptOjo").disabled = true;
		}
/***************************************************************************************************************
OIDO*/
		if (document.getElementById("checkPabellon").checked == true) {
			document.getElementById("inptPabellon").disabled = false;
		}else{
			document.getElementById("inptPabellon").disabled = true;
		}

		if (document.getElementById("checkCanal").checked == true) {
			document.getElementById("inptCanal").disabled = false;
		}else{
			document.getElementById("inptCanal").disabled = true;
		}

		if (document.getElementById("checkTimpano").checked == true) {
			document.getElementById("inptTimpano").disabled = false;
		}else{
			document.getElementById("inptTimpano").disabled = true;
		}

		if (document.getElementById("checkAudicion").checked == true) {
			document.getElementById("inptAudicion").disabled = false;
		}else{
			document.getElementById("inptAudicion").disabled = true;
		}
		
		if (document.getElementById("checkSecre").checked == true) {
			document.getElementById("inptSecre").disabled = false;
		}else{
			document.getElementById("inptSecre").disabled = true;
		}

		if (document.getElementById("checkMastoide").checked == true) {
			document.getElementById("inptMastoide").disabled = false;
		}else{
			document.getElementById("inptMastoide").disabled = true;
		}

		if (document.getElementById("checkDolor").checked == true) {
			document.getElementById("inptDolor").disabled = false;
		}else{
			document.getElementById("inptDolor").disabled = true;
		}

		if (document.getElementById("selectOtro").checked == true) {
			document.getElementById("selectInpOtro").disabled = false;
		}else{
			document.getElementById("selectInpOtro").disabled = true;
		}
/******************************************************************************************************
RINOFARINGE**/
		if (document.getElementById("checkFosas").checked == true) {
			document.getElementById("inptFosas").disabled = false;
		}else{
			document.getElementById("inptFosas").disabled = true;
		}
		
		if (document.getElementById("checkMucosa").checked == true) {
			document.getElementById("inptMucosa").disabled = false;
		}else{
			document.getElementById("inptMucosa").disabled = true;
		}
		
		if (document.getElementById("checkSecrecion").checked == true) {
			document.getElementById("inptSecrecion").disabled = false;
		}else{
			document.getElementById("inptSecrecion").disabled = true;
		}
		
		if (document.getElementById("checkTabique").checked == true) {
			document.getElementById("inptTabique").disabled = false;
		}else{
			document.getElementById("inptTabique").disabled = true;
		}
		
		if (document.getElementById("checkAcceso").checked == true) {
			document.getElementById("inptAcceso").disabled = false;
		}else{
			document.getElementById("inptAcceso").disabled = true;
		}
		
		if (document.getElementById("checkDiasfa").checked == true) {
			document.getElementById("inptDiasfa").disabled = false;
		}else{
			document.getElementById("inptDiasfa").disabled = true;
		}
		
		if (document.getElementById("checkAmigdala").checked == true) {
			document.getElementById("inptAmigdala").disabled = false;
		}else{
			document.getElementById("inptAmigdala").disabled = true;
		}
		
		if (document.getElementById("checkFaringe").checked == true) {
			document.getElementById("inptFaringe").disabled = false;
		}else{
			document.getElementById("inptFaringe").disabled = true;
		}
		
		if (document.getElementById("checkAdenoide").checked == true) {
			document.getElementById("inptAdenoide").disabled = false;
		}else{
			document.getElementById("inptAdenoide").disabled = true;
		}
		
		if (document.getElementById("checkPosnasal").checked == true) {
			document.getElementById("inptPosnasal").disabled = false;
		}else{
			document.getElementById("inptPosnasal").disabled = true;
		}
		
		if (document.getElementById("checkDisfagia").checked == true) {
			document.getElementById("inptDisfagia").disabled = false;
		}else{
			document.getElementById("inptDisfagia").disabled = true;
		}
		
		if (document.getElementById("checkFaOtro").checked == true) {
			document.getElementById("inFaOtro").disabled = false;
		}else{
			document.getElementById("inFaOtro").disabled = true;
		}
/*******************************************************************************************************
BOCA**/		
		if (document.getElementById("checkAliento").checked == true) {
			document.getElementById("inptAliento").disabled = false;
		}else{
			document.getElementById("inptAliento").disabled = true;
		}
		
		if (document.getElementById("checkLabios").checked == true) {
			document.getElementById("inptLabios").disabled = false;
		}else{
			document.getElementById("inptLabios").disabled = true;
		}
		
		if (document.getElementById("checkDiente").checked == true) {
			document.getElementById("inptDiente").disabled = false;
		}else{
			document.getElementById("inptDiente").disabled = true;
		}
		
		if (document.getElementById("checkEncia").checked == true) {
			document.getElementById("inptEncia").disabled = false;
		}else{
			document.getElementById("inptEncia").disabled = true;
		}
		
		if (document.getElementById("checkBmucosa").checked == true) {
			document.getElementById("inptBmucosa").disabled = false;
		}else{
			document.getElementById("inptBmucosa").disabled = true;
		}
		
		if (document.getElementById("checkLengua").checked == true) {
			document.getElementById("inptLengua").disabled = false;
		}else{
			document.getElementById("inptLengua").disabled = true;
		}
		
		if (document.getElementById("checkConducto").checked == true) {
			document.getElementById("inptConducto").disabled = false;
		}else{
			document.getElementById("inptConducto").disabled = true;
		}
		
		if (document.getElementById("checkParalisis").checked == true) {
			document.getElementById("inptParalisis").disabled = false;
		}else{
			document.getElementById("inptParalisis").disabled = true;
		}
		
		if (document.getElementById("checkbBotros").checked == true) {
			document.getElementById("inptBotros").disabled = false;
		}else{
			document.getElementById("inptBotros").disabled = true;
		}
/************************************************************************************************
CUELLO**/
		if (document.getElementById("checkMovilidad").checked == true) {
			document.getElementById("inptMovilidad").disabled = false;
		}else{
			document.getElementById("inptMovilidad").disabled = true;
		}
		
		if (document.getElementById("checkTumoracion").checked == true) {
			document.getElementById("inptTumoracion").disabled = false;
		}else{
			document.getElementById("inptTumoracion").disabled = true;
		}
		
		if (document.getElementById("checkTiroide").checked == true) {
			document.getElementById("inptTiroide").disabled = false;
		}else{
			document.getElementById("inptTiroide").disabled = true;
		}
		
		if (document.getElementById("checkVasos").checked == true) {
			document.getElementById("inptVasos").disabled = false;
		}else{
			document.getElementById("inptVasos").disabled = true;
		}
		
		if (document.getElementById("checkTraquea").checked == true) {
			document.getElementById("inptTraquea").disabled = false;
		}else{
			document.getElementById("inptTraquea").disabled = true;
		}
		
		if (document.getElementById("checkCuello").checked == true) {
			document.getElementById("inptCuello").disabled = false;
		}else{
			document.getElementById("inptCuello").disabled = true;
		}
/*****************************************************************************************************
GANGLIOS LINFATICOS*/
		
		if (document.getElementById("checkCervical").checked == true) {
			document.getElementById("inptCervical").disabled = false;
		}else{
			document.getElementById("inptCervical").disabled = true;
		}

		if (document.getElementById("checkOccipital").checked == true) {
			document.getElementById("inptOccipital").disabled = false;
		}else{
			document.getElementById("inptOccipital").disabled = true;
		}
		
		if (document.getElementById("checkSupra").checked == true) {
			document.getElementById("inptSupra").disabled = false;
		}else{
			document.getElementById("inptSupra").disabled = true;
		}
		
		if (document.getElementById("checkAxilar").checked == true) {
			document.getElementById("inptAxilar").disabled = false;
		}else{
			document.getElementById("inptAxilar").disabled = true;
		}
		
		if (document.getElementById("checkInguinal").checked == true) {
			document.getElementById("inptInguinal").disabled = false;
		}else{
			document.getElementById("inptInguinal").disabled = true;
		}
		
		if (document.getElementById("checkEpi").checked == true) {
			document.getElementById("inptEpi").disabled = false;
		}else{
			document.getElementById("inptEpi").disabled = true;
		}
		
		if (document.getElementById("checkGotros").checked == true) {
			document.getElementById("inptGotros").disabled = false;
		}else{
			document.getElementById("inptGotros").disabled = true;
		}
/*******************************************************************************************************
TORAX Y PULMONES**/
		if (document.getElementById("checkForma").checked == true) {
			document.getElementById("inptForma").disabled = false;
		}else{
			document.getElementById("inptForma").disabled = true;
		}

		if (document.getElementById("checkSimetria").checked == true) {
			document.getElementById("inptSimetria").disabled = false;
		}else{
			document.getElementById("inptSimetria").disabled = true;
		}
		
		if (document.getElementById("checkExpansion").checked == true) {
			document.getElementById("inptExpansion").disabled = false;
		}else{
			document.getElementById("inptExpansion").disabled = true;
		}
		
		if (document.getElementById("checkPercusion").checked == true) {
			document.getElementById("inptPercusion").disabled = false;
		}else{
			document.getElementById("inptPercusion").disabled = true;
		}
		
		if (document.getElementById("checkRuido").checked == true) {
			document.getElementById("inptRuido").disabled = false;
		}else{
			document.getElementById("inptRuido").disabled = true;
		}
		
		if (document.getElementById("checkPapitacion").checked == true) {
			document.getElementById("inptPapitacion").disabled = false;
		}else{
			document.getElementById("inptPapitacion").disabled = true;
		}
		
		if (document.getElementById("checkRespcion").checked == true) {
			document.getElementById("inptRespcion").disabled = false;
		}else{
			document.getElementById("inptRespcion").disabled = true;
		}
		
		if (document.getElementById("checkRespiracion").checked == true) {
			document.getElementById("inptRespcion_min").disabled = false;
		}else{
			document.getElementById("inptRespcion_min").disabled = true;
		}
		
		if (document.getElementById("checkToraxOtro").checked == true) {
			document.getElementById("inptToraxOtro").disabled = false;
		}else{
			document.getElementById("inptToraxOtro").disabled = true;
		}
    }
/*************************************************************************************************************************
Funcion para habilitar inputs en formulario de Medicina General de Inmunizacion y Pruebas*/

function habInpMedicGneral(){
    
    if (document.getElementById("checkAntFamOtros").checked == true) {
        document.getElementById("inpAntFamily").disabled = false;
    }else{
        document.getElementById("inpAntFamily").disabled = true;
    }
    
    if (document.getElementById("checkOcup").checked == true) {
        document.getElementById("inptOcup").disabled = false;
    }else{
        document.getElementById("inptOcup").disabled = true;
    }
    
    if (document.getElementById("checkbNutricion").checked == true) {
        document.getElementById("inptNutricion").disabled = false;
    }else{
        document.getElementById("inptNutricion").disabled = true;
    }
    
    if (document.getElementById("checkSex").checked == true) {
        document.getElementById("inptSex").disabled = false;
    }else{
        document.getElementById("inptSex").disabled = true;
    }
    
    if (document.getElementById("checkSuenio").checked == true) {
        document.getElementById("inptSuenio").disabled = false;
    }else{
        document.getElementById("inptSuenio").disabled = true;
    }
    
    if (document.getElementById("checkRecrea").checked == true) {
        document.getElementById("inptRecrea").disabled = false;
    }else{
        document.getElementById("inptRecrea").disabled = true;
    }
    
    if (document.getElementById("checkAseo").checked == true) {
        document.getElementById("inptAseo").disabled = false;
    }else{
        document.getElementById("inptAseo").disabled = true;
    }
    
    if (document.getElementById("checkSerolog").checked == true) {
        document.getElementById("inptSerologia").disabled = false;
    }else{
        document.getElementById("inptSerologia").disabled = true;
    }
    
    if (document.getElementById("checkInmuOtras").checked == true) {
        document.getElementById("inpInmuOtros").disabled = false;
    }else{
        document.getElementById("inpInmuOtros").disabled = true;
    }
    
    if (document.getElementById("OtrosParac").checked == true) {
        document.getElementById("inptParasitos").disabled = false;
    }else{
        document.getElementById("inptParasitos").disabled = true;
    }
    
}
$(document).ready(function() {
    $("input[name=famOtros]").change(function() {
        document.getElementById("inpAntFamily").focus();
        document.getElementById("inpAntFamily").value = '';
    });
     $("input[name=ocup]").change(function() {
        document.getElementById("inptOcup").focus();
        document.getElementById("inptOcup").value = '';
    });
     $("input[name=nutricion]").change(function() {
        document.getElementById("inptNutricion").focus();
        document.getElementById("inptNutricion").value= '';
    });
     $("input[name=sexuales]").change(function() {
        document.getElementById("inptSex").focus();
        document.getElementById("inptSex").value = '';
    });
    $("input[name=inpSuenio]").change(function() {
        document.getElementById("inptSuenio").focus();
        document.getElementById("inptSuenio").value = '';
    });
    $("input[name=recrea]").change(function() {
        document.getElementById("inptRecrea").focus();
        document.getElementById("inptRecrea").value = '';
    });
    $("input[name=aseo]").change(function() {
        document.getElementById("inptAseo").focus();
        document.getElementById("inptAseo").value = '';
    });
    $("input[name=serologia]").change(function() {
        document.getElementById("inptSerologia").focus();
        document.getElementById("inptSerologia").value = '';
    });
    $("input[name=inmuOtros]").change(function() {
        document.getElementById("inpInmuOtros").focus();
        document.getElementById("inpInmuOtros").value = '';
    });
    $("input[name=parasitos]").change(function() {
        document.getElementById("inptParasitos").focus();
        document.getElementById("inptParasitos").value = '';
    });
    
});


/************************************************************************************************************************/
/*Funcion para campos del form de pediatria en la sección de desarrollo del niño en el interrogatorio

HABITOS PSICOLOGICOS*/
$(document).ready(function(){
	$("input[name=suenio]").change(function(){
		document.getElementById('inptsuenio').focus();
		document.getElementById('inptsuenio').value = '';
	});

	$("input[name=siesta]").change(function(){
		document.getElementById('inptsiesta').focus();
		document.getElementById('inptsiesta').value = '';
	});

	$("input[name=juego]").change(function(){
		document.getElementById('inptjuego').focus();
		document.getElementById('inptjuego').value = '';
	});

	$("input[name=sexual]").change(function(){
		document.getElementById('inptsexo').focus();
		document.getElementById('inptsexo').value = '';
	});

	$("input[name=chupadedos]").change(function(){
		document.getElementById('inptChupaDedos').focus();
		document.getElementById('inptChupaDedos').value = '';
	});

	$("input[name=comeUnia]").change(function(){
		document.getElementById('inptComeUnia').focus();
		document.getElementById('inptComeUnia').value = '';
	});

	$("input[name=rasgos]").change(function(){
		document.getElementById('inptRasgos').focus();
		document.getElementById('inptRasgos').value = '';
	});

	$("input[name=recreacion]").change(function(){
		document.getElementById('inptRecreacion').focus();
		document.getElementById('inptRecreacion').value = '';
	});

	$("input[name=ocupacion]").change(function(){
		document.getElementById('inptOcupacion').focus();
		document.getElementById('inptOcupacion').value = '';
	});

	$("input[name=rasgos]").change(function(){
		document.getElementById('inptRasgos').focus();
		document.getElementById('inptRasgos').value = '';
	});

	$("input[name=habOtros]").change(function(){
		document.getElementById('inptHabOtros').focus();
		document.getElementById('inptHabOtros').value = '';
	});
});
/******************************************************************************************************

INMUNIZANTES Y PRUEBAS**/
$(document).ready(function(){
	$("input[name=viruela]").change(function(){
		document.getElementById('inptViruela').focus();
		document.getElementById('inptViruela').value = '';
	});
		
	$("input[name=tosferina]").change(function(){
		document.getElementById('inptTos').focus();
		document.getElementById('inptTos').value = '';
	});

	$("input[name=diafteria]").change(function(){
		document.getElementById('inptDiafteria').focus();
		document.getElementById('inptDiafteria').value = '';
	});

	$("input[name=tetanos]").change(function(){
		document.getElementById('inptTetano').focus();
		document.getElementById('inptTetano').value = '';
	});

	$("input[name=tificas]").change(function(){
		document.getElementById('inptTifica').focus();
		document.getElementById('inptTifica').value = '';
	});

	$("input[name=bcg]").change(function(){
		document.getElementById('inptBCG').focus();
		document.getElementById('inptBCG').value = '';
	});

	$("input[name=polio]").change(function(){
		document.getElementById('inptPolio').focus();
		document.getElementById('inptPolio').value = '';
	});

	$("input[name=tuberculina]").change(function(){
		document.getElementById('inptTuber').focus();
		document.getElementById('inptTuber').value = '';
	});

	$("input[name=pruebOtro]").change(function(){
		document.getElementById('inptOtras').focus();
		document.getElementById('inptOtras').value = '';
	});
});
/*****************************************************************************************

HISTORIA FAMILIAR***/
$(document).ready(function(){
	$("input[name=histFamOtros]").change(function(){
		document.getElementById('inptHistFam').focus();
		document.getElementById('inptHistFam').value = '';
	});
});
	/******************************************************************/
	/*Función Ajax para interrogatorio II del form de pediatria

	PIEL PINACULO*/
$(document).ready(function(){
	$("input[name=colorPiel]").change(function(){
		document.getElementById('inptColor').focus();
		document.getElementById('inptColor').value = '';
	});

	$("input[name=humedad]").change(function(){
		document.getElementById('inptHumedad').focus();
		document.getElementById('inptHumedad').value = '';
	});

	$("input[name=contextura]").change(function(){
		document.getElementById('inptContext').focus();
		document.getElementById('inptContext').value = '';
	});

	$("input[name=pigmento]").change(function(){
		document.getElementById('inptPigmento').focus();
		document.getElementById('inptPigmento').value = '';
	});

	$("input[name=hidratacion]").change(function(){
		document.getElementById('inptHidrata').focus();
		document.getElementById('inptHidrata').value = '';
	});

	$("input[name=equimosis]").change(function(){
		document.getElementById('inptEquismo').focus();
		document.getElementById('inptEquismo').value = '';
	});

	$("input[name=petequias]").change(function(){
		document.getElementById('inptPete').focus();
		document.getElementById('inptPete').value = '';
	});

	$("input[name=cianosis]").change(function(){
		document.getElementById('inptCia').focus();
		document.getElementById('inptCia').value = '';
	});

	$("input[name=erupcion]").change(function(){
		document.getElementById('inptErup').focus();
		document.getElementById('inptErup').value = '';
	});

	$("input[name=paniculo]").change(function(){
		document.getElementById('inptPanic').focus();
		document.getElementById('inptPanic').value = '';
	});

	$("input[name=turgor]").change(function(){
		document.getElementById('inptTurgor').focus();
		document.getElementById('inptTurgor').value = '';
	});

	$("input[name=edema]").change(function(){
		document.getElementById('inptEdema').focus();
		document.getElementById('inptEdema').value = '';
	});
	
	$("input[name=TipUnias]").change(function(){
		document.getElementById('inptUnias').focus();
		document.getElementById('inptUnias').value = '';
	});

	$("input[name=nodulo]").change(function(){
		document.getElementById('inptNod').focus();
		document.getElementById('inptNod').value = '';
	});

	$("input[name=pelos]").change(function(){
		document.getElementById('inptPelos').focus();
		document.getElementById('inptPelos').value = '';
	});

	$("input[name=vascula]").change(function(){
		document.getElementById('inptVascula').focus();
		document.getElementById('inptVascula').value = '';
	});

	$("input[name=cicatris]").change(function(){
		document.getElementById('inptCicatris').focus();
		document.getElementById('inptCicatris').value = '';
	});
	$("input[name=ulceras]").change(function(){
		document.getElementById('inptUlcera').focus();
		document.getElementById('inptUlcera').value = '';
	});

	$("input[name=fistula]").change(function(){
		document.getElementById('inptFistula').focus();
		document.getElementById('inptFistula').value = '';
	});	
	$("input[name=CheqPiel]").change(function(){
		document.getElementById('inpOtros').focus();
		document.getElementById('inpOtros').value = '';
	});
});	
/********************************************************************************************
CABEZA**/
$(document).ready(function(){
	$("input[name=config]").change(function(){
		document.getElementById('inptConf').focus();
		document.getElementById('inptConf').value = '';
	});

	$("input[name=frontales]").change(function(){
		document.getElementById('inptFront').focus();
		document.getElementById('inptFront').value = '';
	});

	$("input[name=sutura]").change(function(){
		document.getElementById('inptSutura').focus();
		document.getElementById('inptSutura').value = '';
	});

	$("input[name=circunf]").change(function(){
		document.getElementById('inptCircunf').focus();
		document.getElementById('inptCircunf').value = '';
	});

	$("input[name=craneo]").change(function(){
		document.getElementById('inptCraneo').focus();
		document.getElementById('inptCraneo').value = '';
	});

	$("input[name=cabello]").change(function(){
		document.getElementById('inptCabello').focus();
		document.getElementById('inptCabello').value = '';
	});

	$("input[name=CabOtras]").change(function(){
		document.getElementById('inptOtros').focus();
		document.getElementById('inptOtros').value = '';
	});
});
/******************************************************************************************
OJOS**/
$(document).ready(function(){
	$("input[name=conjuntiva]").change(function(){
		document.getElementById('inptConjuntiva').focus();
		document.getElementById('inptConjuntiva').value = '';
	});

	$("input[name=eclerotica]").change(function(){
		document.getElementById('inptEsclero').focus();
		document.getElementById('inptEsclero').value = '';
	});

	$("input[name=cornea]").change(function(){
		document.getElementById('inptCornea').focus();
		document.getElementById('inptCornea').value = '';
	});

	$("input[name=pupila]").change(function(){
		document.getElementById('inptPupila').focus();
		document.getElementById('inptPupila').value = '';
	});

	$("input[name=movie]").change(function(){
		document.getElementById('inptMovie').focus();
		document.getElementById('inptMovie').value = '';
	});

	$("input[name=desviacion]").change(function(){
		document.getElementById('inptDesvia').focus();
		document.getElementById('inptDesvia').value = '';
	});

	$("input[name=nistagmus]").change(function(){
		document.getElementById('inptNistag').focus();
		document.getElementById('inptNistag').value = '';
	});

	$("input[name=ptosis]").change(function(){
		document.getElementById('inptPtosis').focus();
		document.getElementById('inptPtosis').value = '';
	});

	$("input[name=exoftalmo]").change(function(){
		document.getElementById('inptExostalmo').focus();
		document.getElementById('inptExostalmo').value = '';
	});

	$("input[name=oftalmo]").change(function(){
		document.getElementById('inptOftalmo').focus();
		document.getElementById('inptOftalmo').value = '';
	});

	$("input[name=checkOjo]").change(function(){
		document.getElementById('inptOjo').focus();
		document.getElementById('inptOjo').value = '';
	});
});
	/*****************************************************************************/
	/*Función Ajax para interrogatorio II del form de pediatria parte del oido-Boca
	OIDO*/
$(document).ready(function(){
	$("input[name=pabellon]").change(function(){
		document.getElementById('inptPabellon').focus();
		document.getElementById('inptPabellon').value = '';
	});

	$("input[name=canal]").change(function(){
		document.getElementById('inptCanal').focus();
		document.getElementById('inptCanal').value = '';
	});

	$("input[name=timpano]").change(function(){
		document.getElementById('inptTimpano').focus();
		document.getElementById('inptTimpano').value = '';
	});

	$("input[name=audicion]").change(function(){
		document.getElementById('inptAudicion').focus();
		document.getElementById('inptAudicion').value = '';
	});

	$("input[name=secrecion]").change(function(){
		document.getElementById('inptSecre').focus();
		document.getElementById('inptSecre').value = '';
	});

	$("input[name=mastoide]").change(function(){
		document.getElementById('inptMastoide').focus();
		document.getElementById('inptMastoide').value = '';
	});

	$("input[name=dolor]").change(function(){
		document.getElementById('inptDolor').focus();
		document.getElementById('inptDolor').value = '';
	});

	$("input[name=selectOtro]").change(function(){
		document.getElementById('selectInpOtro').focus();
		document.getElementById('selectInpOtro').value = '';
	});
});
/********************************************************************************************
RINOFARINGE***/
$(document).ready(function(){
	$("input[name=fosas]").change(function(){
		document.getElementById('inptFosas').focus();
		document.getElementById('inptFosas').value = '';
	});
	
	$("input[name=mucosa]").change(function(){
		document.getElementById('inptMucosa').focus();
		document.getElementById('inptMucosa').value = '';
	});
	
	$("input[name=secrecion]").change(function(){
		document.getElementById('inptSecrecion').focus();
		document.getElementById('inptSecrecion').value = '';
	});
	
	$("input[name=tabique]").change(function(){
		document.getElementById('inptTabique').focus();
		document.getElementById('inptTabique').value = '';
	});
	
	$("input[name=accesorio]").change(function(){
		document.getElementById('inptAcceso').focus();
		document.getElementById('inptAcceso').value = '';
	});
	
	$("input[name=diasfanos]").change(function(){
		document.getElementById('inptDiasfa').focus();
		document.getElementById('inptDiasfa').value = '';
	});
	
	$("input[name=amigdalas]").change(function(){
		document.getElementById('inptAmigdala').focus();
		document.getElementById('inptAmigdala').value = '';
	});
	
	$("input[name=amigdalas]").change(function(){
		document.getElementById('inptAmigdala').focus();
		document.getElementById('inptAmigdala').value = '';
	});
	
	$("input[name=faringe]").change(function(){
		document.getElementById('inptFaringe').focus();
		document.getElementById('inptFaringe').value = '';
	});
	
	$("input[name=adenoides]").change(function(){
		document.getElementById('inptAdenoide').focus();
		document.getElementById('inptAdenoide').value = '';
	});
	
	$("input[name=posnasal]").change(function(){
		document.getElementById('inptPosnasal').focus();
		document.getElementById('inptPosnasal').value = '';
	});
	
	$("input[name=disfagia]").change(function(){
		document.getElementById('inptDisfagia').focus();
		document.getElementById('inptDisfagia').value = '';
	});
	
	$("input[name=faOtro]").change(function(){
		document.getElementById('inFaOtro').focus();
		document.getElementById('inFaOtro').value = '';
	});
});
/********************************************************************************************
BOCA***/
$(document).ready(function(){
	$("input[name=aliento]").change(function(){
		document.getElementById('inptAliento').focus();
		document.getElementById('inptAliento').value = '';
	});
	
	$("input[name=labios]").change(function(){
		document.getElementById('inptLabios').focus();
		document.getElementById('inptLabios').value = '';
	});
	
	$("input[name=dientes]").change(function(){
		document.getElementById('inptDiente').focus();
		document.getElementById('inptDiente').value = '';
	});
	
	$("input[name=encias]").change(function(){
		document.getElementById('inptEncia').focus();
		document.getElementById('inptEncia').value = '';
	});
	
	$("input[name=bMucosa]").change(function(){
		document.getElementById('inptBmucosa').focus();
		document.getElementById('inptBmucosa').value = '';
	});
	
	$("input[name=lengua]").change(function(){
		document.getElementById('inptLengua').focus();
		document.getElementById('inptLengua').value = '';
	});
	
	$("input[name=conducto]").change(function(){
		document.getElementById('inptConducto').focus();
		document.getElementById('inptConducto').value = '';
	});
	
	$("input[name=paralisis]").change(function(){
		document.getElementById('inptParalisis').focus();
		document.getElementById('inptParalisis').value = '';
	});
	
	$("input[name=bOtros]").change(function(){
		document.getElementById('inptBotros').focus();
		document.getElementById('inptBotros').value = '';
	});
});
/******************************************************************************************
CUELLO***/
$(document).ready(function(){
	$("input[name=movilidad]").change(function(){
		document.getElementById('inptMovilidad').focus();
		document.getElementById('inptMovilidad').value = '';
	});
	
	$("input[name=tumoracion]").change(function(){
		document.getElementById('inptTumoracion').focus();
		document.getElementById('inptTumoracion').value = '';
	});
	
	$("input[name=tiroide]").change(function(){
		document.getElementById('inptTiroide').focus();
		document.getElementById('inptTiroide').value = '';
	});
	
	$("input[name=vasos]").change(function(){
		document.getElementById('inptVasos').focus();
		document.getElementById('inptVasos').value = '';
	});
	
	$("input[name=traquea]").change(function(){
		document.getElementById('inptTraquea').focus();
		document.getElementById('inptTraquea').value = '';
	});
	
	$("input[name=cuelloOtros]").change(function(){
		document.getElementById('inptCuello').focus();
		document.getElementById('inptCuello').value = '';
	});
});
/**************************************************************************************************
GAGLIOS LINFATICOS**/
$(document).ready(function(){
	$("input[name=cervical]").change(function(){
		document.getElementById('inptCervical').focus();
		document.getElementById('inptCervical').value = '';
	});
	
	$("input[name=occipital]").change(function(){
		document.getElementById('inptOccipital').focus();
		document.getElementById('inptOccipital').value = '';
	});
	
	$("input[name=Supra]").change(function(){
		document.getElementById('inptSupra').focus();
		document.getElementById('inptSupra').value = '';
	});
	
	$("input[name=axilar]").change(function(){
		document.getElementById('inptAxilar').focus();
		document.getElementById('inptAxilar').value = '';
	});
	
	$("input[name=inguinal]").change(function(){
		document.getElementById('inptInguinal').focus();
		document.getElementById('inptInguinal').value = '';
	});
	
	$("input[name=epitro]").change(function(){
		document.getElementById('inptEpi').focus();
		document.getElementById('inptEpi').value = '';
	});

	$("input[name=gOtros]").change(function(){
		document.getElementById('inptGotros').focus();
		document.getElementById('inptGotros').value = '';
	});
});
/****************************************************************************************************
TORAX Y PULMONES***/
$(document).ready(function(){
	$("input[name=forma]").change(function(){
		document.getElementById('inptForma').focus();
		document.getElementById('inptForma').value = '';
	});

	$("input[name=simetria]").change(function(){
		document.getElementById('inptSimetria').focus();
		document.getElementById('inptSimetria').value = '';
	});

	$("input[name=expansion]").change(function(){
		document.getElementById('inptExpansion').focus();
		document.getElementById('inptExpansion').value = '';
	});

	$("input[name=percusion]").change(function(){
		document.getElementById('inptPercusion').focus();
		document.getElementById('inptPercusion').value = '';
	});

	$("input[name=ruidoAdvent]").change(function(){
		document.getElementById('inptRuido').focus();
		document.getElementById('inptRuido').value = '';
	});

	$("input[name=papitacion]").change(function(){
		document.getElementById('inptPapitacion').focus();
		document.getElementById('inptPapitacion').value = '';
	});

	$("input[name=respcion]").change(function(){
		document.getElementById('inptRespcion').focus();
		document.getElementById('inptRespcion').value = '';
	});

	$("input[name=respiracion]").change(function(){
		document.getElementById('inptRespcion_min').focus();
		document.getElementById('inptRespcion_min').value = '';
	});

	$("input[name=toraxOtro]").change(function(){
		document.getElementById('inptToraxOtro').focus();
		document.getElementById('inptToraxOtro').value = '';
	});
});
/***********************************************************************************************************************/
/*Funcion para habilitar inputs por medio de checkbox para el modal de medicinaGeneral*/
function activar(){
	if (document.form.fimicos.checked == true) {
		document.form.inpFimico.disabled = false;
	}else{
		document.form.inpFimico.disabled = true;
	}

	if (document.form.lueticos.checked == true) {
		document.form.inpLeu.disabled = false;
	}else{
		document.form.inpLeu.disabled = true;
	}

	if (document.form.alcoholico.checked == true) {
		document.form.inpAl.disabled = false;
	}else{
		document.form.inpAl.disabled = true;
	}

	if (document.form.neuro.checked == true) {
		document.form.inpNeu.disabled = false;
	}else{
		document.form.inpNeu.disabled = true;
	}

	if (document.form.emb.checked == true) {
		document.form.inpEmb.disabled = false;
	}else{
		document.form.inpEmb.disabled = true;
	}

	if (document.form.otros.checked == true) {
		document.form.inpOtros.disabled = false;
	}else{
		document.form.inpOtros.disabled = true;
	}

	if (document.form.ginec.checked == true) {
		document.form.inpCaract.disabled = false;
		document.form.inpAnio.disabled = false;
		document.form.inpTipo.disabled = false;
	}else{
		document.form.inpCaract.disabled =true;
		document.form.inpAnio.disabled =true;
		document.form.inpTipo.disabled =true;
	}

	if (document.form.sexual.checked == true) {
		document.form.inpRelacion.disabled = false;
		document.form.inpEdad.disabled = false;
	}else{
		document.form.inpRelacion.disabled = true;
		document.form.inpEdad.disabled = true;
	}

	if (document.form.quirurgico.checked == true) {
		document.form.fecha.disabled = false;
		document.form.nat.disabled = false;
		document.form.operacion.disabled = false;
	}else{
		document.form.fecha.disabled = true;
		document.form.nat.disabled = true;
		document.form.operacion.disabled = true;
	}

	if (document.faObst.paridad.checked == true) {
		document.faObst.gesta.disabled = false;
		document.faObst.parto.disabled = false;
		document.faObst.aborto.disabled = false;
		document.faObst.interv.disabled = false;
		document.faObst.ninos.disabled = false;
	}else{
		document.faObst.gesta.disabled = true;
		document.faObst.parto.disabled = true;
		document.faObst.aborto.disabled = true;
		document.faObst.interv.disabled = true;
		document.faObst.ninos.disabled = true;
	}

	if (document.formRecipe.opcion1.checked == true) {
		document.formRecipe.nombMedicamento.disabled = false;
		document.formRecipe.presentacion.disabled = false;
		document.formRecipe.concentracion.disabled = false;
	}else{
		document.formRecipe.nombMedicamento.disabled = true;
		document.formRecipe.presentacion.disabled = true;
		document.formRecipe.concentracion.disabled = true;
	}

	if (document.formRecip.prescrita.checked == true) {
		document.formRecip.cantPrescrita.disabled = false;
	}else{
		document.formRecip.cantPrescrita.disabled = true;
	}

	if (document.formRecip.dispensada.checked == true) {
		document.formRecip.cantDispensada.disabled = false;
	}else{
		document.formRecip.cantDispensada.disabled = true;
	}	
}

function activarCheck(){
	if (document.formRecipe.opcion2.checked == true) {
		document.formRecipe.nombMed.disabled = false;
		document.formRecipe.presen.disabled = false;
		document.formRecipe.concent.disabled = false;
	}else{
		document.formRecipe.nombMed.disabled = true;
		document.formRecipe.presen.disabled = true;
		document.formRecipe.concent.disabled = true;
	}
}
function activaCheckbox(){
	if (document.formRecipe.opcion3.checked == true) {
		document.formRecipe.named.disabled = false;
		document.formRecipe.nampresent.disabled = false;
		document.formRecipe.namconcent.disabled = false;		
	}else{
		document.formRecipe.named.disabled = true;
		document.formRecipe.nampresent.disabled = true;
		document.formRecipe.namconcent.disabled = true;
	}
}

/*********************************************************************************************************************/
/*Funcion para activar input en modal N° 2 de medicina general*/
function activar3(){
    /*******************
    te explico primero 
    declaras la funcion document (document)
    despues 
    asignas el nombre del formulario (formGinecologico)
    tercero llamas el nombre de input o campo (menarquia)
    y cuarto le pasas una funcion js llamada checked (checked)
    *********************/
    if (document.formGinecologico.menarquia.checked == true){
        document.formGinecologico.menar.disabled = false;
    }else{
		document.formGinecologico.menar.disabled = true;
	}
	
	if (document.formGinecologico.libid.checked == true){
	    document.formGinecologico.libi.disabled = false;
	}else{
		document.formGinecologico.libi.disabled = true;
    }
    
    if (document.formGinecologico.regla.checked == true){
	    document.formGinecologico.reglas.disabled = false;
	}else{
		document.formGinecologico.reglas.disabled = true;
    }
    
    if (document.formGinecologico.part.checked == true){
	    document.formGinecologico.partos.disabled = false;
	}else{
		document.formGinecologico.partos.disabled = true;
    }
    
    if (document.formGinecologico.abort.checked == true){
	    document.formGinecologico.aborto.disabled = false;
	}else{
		document.formGinecologico.aborto.disabled = true;
    }
    
    if (document.formGinecologico.menopausia.checked == true){
	    document.formGinecologico.menop.disabled = false;
	}else{
		document.formGinecologico.menop.disabled = true;
    }
    
    if (document.formGinecologico.otra.checked == true){
	    document.formGinecologico.otras.disabled = false;
	}else{
		document.formGinecologico.otras.disabled = true;
    }
}



/*********************************************************************************************************************/
/*Funcion para activar input en modal Nº 3 de medicina general*/
function activacion(){
	
	if (document.fhObst.checkedOtros.checked == true) {
		document.fhObst.tipAntec.disabled = false;
	}else{
		document.fhObst.tipAntec.disabled = true;
	}
	if (document.fhObst.checkPrenatal.checked == true) {
	    document.fhObst.institucion.disabled = false;
	    document.fhObst.conHecha.disabled = false;
	}else{
	    document.fhObst.institucion.disabled = true;
	    document.fhObst.conHecha.disabled = true;
	}
	if (document.fhObst.checkMaternidad.checked == true) {
	    document.fhObst.maternidad.disabled = false;
	    document.fhObst.numHistoria.disabled = false;
	    document.fhObst.consultaHechas.disabled = false;
	    document.fhObst.resumen.disabled = false;
	}else{
	    document.fhObst.maternidad.disabled = true;
	    document.fhObst.numHistoria.disabled = true;
	    document.fhObst.consultaHechas.disabled = true;
	    document.fhObst.resumen.disabled = true;
	}
}

$(document).ready(function() {
   $("input[name=checkPrenatal]").change(function(){
		document.getElementById('institucion').focus();
		document.getElementById('institucion').value = '';
	});
	$("input[name=checkMaternidad]").change(function(){
		document.getElementById('maternidad').focus();
		document.getElementById('maternidad').value = '';
	});
	$("input[name=checkedOtros]").change(function(){
		document.getElementById('inputPersonales').focus();
		document.getElementById('inputPersonales').value = '';
	});
}); 


/***************************************************************************************************************/
/*Funcion Ajax para limpiar inputs dependiendo del check de los checkbox del modal de medicinaGeneral*/
$(document).ready(function(){
	$("input[name=fimicos]").change(function(){
		document.getElementById('fimico').focus();
		document.getElementById('fimico').value = '';
	});
	$("input[name=lueticos]").change(function(){
		document.getElementById('inpluetico').focus();
		document.getElementById('inpluetico').value = '';
	});
	$("input[name=alcoholico]").change(function(){
		document.getElementById('alcohol').focus();
		document.getElementById('alcohol').value = '';
	});
	$("input[name=neuro]").change(function(){
		document.getElementById('neurop').focus()
		document.getElementById('neurop').value = '';
	});
	$("input[name=emb]").change(function(){
		document.getElementById('embarazo').focus();
		document.getElementById('embarazo').value = '';
	});
	$("input[name=otros]").change(function(){
		document.getElementById('otro').focus();
		document.getElementById('otro').value = '';
	});
	$("input[name=ginec]").change(function(){
		document.getElementById('caracter').focus();
		document.getElementById('caracter').value = '';
		document.getElementById('anio').value = '';
		document.getElementById('tipo').value = '';
	});
	$("input[name=sexual]").change(function(){
		document.getElementById('relacion').focus();
		document.getElementById('relacion').value = '';
		document.getElementById('inputedad').value = '';
	});
	$("input[name=quirurgico]").change(function(){
		document.getElementById('inptfecha').focus();
		document.getElementById('inptfecha').value = '';
		document.getElementById('naturalidad').value = '';
		document.getElementById('inptOperacion').value = '';
	});
	$("input[name=paridad]").change(function(){
		document.getElementById('gesta').focus();
		document.getElementById('gesta').value ='';
		document.getElementById('parto').value ='';
		document.getElementById('aborto').value ='';
		document.getElementById('intervencion').value ='';
		document.getElementById('nino').value ='';
	});
	$("input[name=opcion1]").change(function(){
		document.getElementById('nomMed').focus();
		document.getElementById('nomMed').value = '';
		document.getElementById('nomPrest').value = '';
		document.getElementById('nomConcent').value = '';	
	});
	$("input[name=opcion2]").change(function(){
		document.getElementById('nombMed').focus();
		document.getElementById('nombMed').value = '';
		document.getElementById('presen').value = '';
		document.getElementById('concent').value = '';		
	});
	$("input[name=opcion3]").change(function(){
		document.getElementById('named').focus();
		document.getElementById('named').value = '';
		document.getElementById('nampresent').value = '';
		document.getElementById('namconcent').value = '';		
	});
	$("input[name=prescrita]").change(function(){
		document.getElementById('cantpres').focus();
		document.getElementById('cantpres').value = '';
	});
	$("input[name=dispensada]").change(function(){
		document.getElementById('cantdispensada').focus();
		document.getElementById('cantdispensada').value = '';
	});

	$("input[name=checkOtros]").change(function(){
	   document.getElementById('antecdt').focus();
	   document.getElementById('antecdt').value = '';
	});
	$("input[name=dprenatal]").change(function() {
	   document.getElementById('nombInst').focus();
	   document.getElementById('nombInst').value = '';
	   document.getElementById('consultHechas').value = '';
	});
	$("input[name=maternidad]").change(function() {
	    document.getElementById('nombmat').focus();
	    document.getElementById('nombmat').value = '';
	    document.getElementById('historia').value = '';
	    document.getElementById('consulta').value = '';
	    document.getElementById('resumen').value = '';
	});
});
/**********************************************************************************************************************/
/*Funcion ajax para limpiar inputs de acuerdo al check de los radiobutton del form de Pediatria*/

$(document).ready(function(){
	$("input[name=optradio]").change(function(){
		document.getElementById('especificar').focus();
		document.getElementById('especificar').value = '';
	});
	$("input[name=optionradio]").change(function(){
		document.getElementById('inpthabilitar').focus();
		document.getElementById('inpthabilitar').value ='';
	});
});
/************************************************************************************************************************/
/*Barra de progreso*/
window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'http://bootsnipp.com');
        });

$(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-success').addClass('btn-default');
            $item.addClass('btn-success');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-success').trigger('click');
});

/*********************************************************************************************************************/

//funcion para confirmar una cita
    function confirmar_cita(id_cita) {
        if (!confirm("\u00bfEsta Seguro que Deseas Confirmar esta Cita?")) {
            return false;
        }
        $('#form_confir_cita').attr("action", '?view=models&action=confirmacionCita&id_cita=' + id_cita);
        $('#form_confir_cita').submit();
    }

//cuando se va borrar un registro una cita

    function eliminar_cita(id_cita) {
        if (!confirm("\u00bfEsta seguro que deseas eliminar esta Cita?")) {
            return false;
        }
        $('#form_listado_cita').attr("action", '?view=models&action=eliminacionCita&id_cita=' + id_cita);
        $('#form_listado_cita').submit();
    }
    
    //funcion para cambiar el estatus de na cita a R
    function cambia_status_cita(id_cita) {
        $('#form_cambia_status_cita').attr("action", '?view=models&action=cambia_status_cita&id_cita=' + id_cita);
        $('#form_cambia_status_cita').submit();
    }

/**********************************************************************************************************************/
//vaidacion para registro de cita
//select especialidad
$(document).on('focus', '#cbx_especialidad', function(){
    $(validaEspecialidad());
    function validaEspecialidad(cbx_especialidad){
        $.ajax({
			// url: '../../core/validatePhp/validaCorreo.php',
            url: 'core/validatePhp/validaFormNewCita.php',
            type: 'POST',
            dataType: 'html',
            data: $("#formNewCita").serialize(),
            	success: function(data){
            	    
			    	// $("#ntEspecialidad").html('');
			    	$("#ntDoctor").html('');
			    	$("#ntEli_Paci").html('');
			    	$("#ntTurno").html('');
			    	$("#ntEli_dia_cita").html('');
			    	$("#ntFechaCita").html('');

			        $("#ntEspecialidad").html(data); // Mostrar la respuestas del script PHP.
			    } 
        })

    }
    
    $(document).on('change', '#cbx_especialidad', function(){
        var valorEspecialidad=$('#cbx_especialidad').val();
        if (valorEspecialidad!="" ) {
            validaEspecialidad(valorEspecialidad);
        } else {
            validaEspecialidad();
        }
    });
});

//select doctor
$(document).on('focus', '#eli_doctor', function(){
    $(validaDoctor());
    function validaDoctor(eli_doctor){
        $.ajax({
			// url: '../../core/validatePhp/validaCorreo.php',
            url: 'core/validatePhp/validaFormNewCita.php',
            type: 'POST',
            dataType: 'html',
            data: $("#formNewCita").serialize(),
            	success: function(data){
            	    
			    	$("#ntEspecialidad").html('');
			    	//$("#ntDoctor").html('');
			    	$("#ntEli_Paci").html('');
			    	$("#ntTurno").html('');
			    	$("#ntEli_dia_cita").html('');
			    	$("#ntFechaCita").html('');

			        $("#ntDoctor").html(data); // Mostrar la respuestas del script PHP.
			    } 
        })

    }
    
    $(document).on('change', '#eli_doctor', function(){
        var valorDoctor=$('#eli_doctor').val();
        if (valorDoctor!="" ) {
            validaDoctor(valorDoctor);
        } else {
            validaDoctor();
        }
    });
});

//select paciente
$(document).on('focus', '#eli_paci', function(){
    $(validaPaciente());
    function validaPaciente(eli_paci){
        $.ajax({
			// url: '../../core/validatePhp/validaCorreo.php',
            url: 'core/validatePhp/validaFormNewCita.php',
            type: 'POST',
            dataType: 'html',
            data: $("#formNewCita").serialize(),
            	success: function(data){
            	    
			    	$("#ntEspecialidad").html('');
			    	$("#ntDoctor").html('');
			    	//$("#ntEli_Paci").html('');
			    	$("#ntTurno").html('');
			    	$("#ntEli_dia_cita").html('');
			    	$("#ntFechaCita").html('');

			        $("#ntEli_Paci").html(data); // Mostrar la respuestas del script PHP.
			    } 
        })

    }
    
    $(document).on('change', '#eli_paci', function(){
        var valorPaciente=$('#eli_paci').val();
        if (valorPaciente!="" ) {
            validaPaciente(valorPaciente);
        } else {
            validaPaciente();
        }
    });
});

//select turno
$(document).on('focus', '#cbx_turno', function(){
    $(validaTurno());
    function validaTurno(cbx_turno){
        $.ajax({
			// url: '../../core/validatePhp/validaCorreo.php',
            url: 'core/validatePhp/validaFormNewCita.php',
            type: 'POST',
            dataType: 'html',
            data: $("#formNewCita").serialize(),
            	success: function(data){
            	    
			    	$("#ntEspecialidad").html('');
			    	$("#ntDoctor").html('');
			    	$("#ntEli_Paci").html('');
			    	//$("#ntTurno").html('');
			    	$("#ntEli_dia_cita").html('');
			    	$("#ntFechaCita").html('');

			        $("#ntTurno").html(data); // Mostrar la respuestas del script PHP.
			    } 
        })

    }
    
    $(document).on('change', '#cbx_turno', function(){
        var valorTurno=$('#cbx_turno').val();
        if (valorTurno!="" ) {
            validaTurno(valorTurno);
        } else {
            validaTurno();
        }
    });
});

//select Dia cita
$(document).on('focus', '#eli_dia_cita', function(){
    $(validaTurno());
    function validaDia(eli_dia_cita){
        $.ajax({
			// url: '../../core/validatePhp/validaCorreo.php',
            url: 'core/validatePhp/validaFormNewCita.php',
            type: 'POST',
            dataType: 'html',
            data: $("#formNewCita").serialize(),
            	success: function(data){
            	    
			    	$("#ntEspecialidad").html('');
			    	$("#ntDoctor").html('');
			    	$("#ntEli_Paci").html('');
			    	$("#ntTurno").html('');
			    	//$("#ntEli_dia_cita").html('');
			    	$("#ntFechaCita").html('');

			        $("#ntEli_dia_cita").html(data); // Mostrar la respuestas del script PHP.
			    } 
        })

    }
    
    $(document).on('change', '#eli_dia_cita', function(){
        var valorTurno=$('#eli_dia_cita').val();
        if (valorDia!="" ) {
            validaDia(valorDia);
        } else {
            validaDia();
        }
    });
});

// input Fecha de la cita
$(document).on('blur', '#date', function(){
    $(validaFechaCita());
    function validaFechaCita(date){
        $.ajax({
			// url: '../../core/validatePhp/validaCorreo.php',
            url: 'core/validatePhp/validaFormNewCita.php',
            type: 'POST',
            dataType: 'html',
            data: $("#formNewCita").serialize(),
            	success: function(data){

                    $("#ntEspecialidad").html('');
			    	$("#ntDoctor").html('');
			    	$("#ntEli_Paci").html('');
			    	$("#ntTurno").html('');
			    	$("#ntEli_dia_cita").html('');
			    	//$("#ntFechaCita").html('');

			        $("#ntFechaCita").html(data); // Mostrar la respuestas del script PHP.
			    } 
        })
  
    }
    
    $(document).on('focus', '#date', function(){
        var valorFechaCita=$('#date').val();
        if (valorFechaCita!="" ) {
            validaFechaCita(valorFechaCita);
        } else {
            validaFechaCita();
        }
    });
});

//termina validacion para registro de cita

//*******************************************************************************************************************
//validacion para formulario de nuevo usuario 
//funcionando!!!
$(document).on('focus', '#usuario', function(){
    $(validaUsu());
    function validaUsu(usuario){
        $.ajax({
			// url: '../../core/validatePhp/validaCorreo.php',
            url: '?view=validacion&action=vNuevoUsuario',
            type: 'POST',
            dataType: 'html',
            data: $("#newUsuForm").serialize(),
            	success: function(data){
            		// $("#ntUsuario").html('');
			    	$("#ntCorreo").html('');
			    	$("#ntPass").html('');
			    	$("#ntcPassword").html('');
			    	$("#ntPreSecreta").html('');
			    	$("#ntRsp").html('');
			    	$("#ntRol").html('');

			        $("#ntUsuario").html(data); // Mostrar la respuestas del script PHP.
			    } 
        })
  
    }
    
    $(document).on('keyup', '#usuario', function(){
        var valorUsu=$('#usuario').val();
        if (valorUsu!="" ) {
            validaUsu(valorUsu);
        } else {
            validaUsu();
        }
    });
});
$(document).on('focus', '#correo', function(){
    $(validaCorreo());
    function validaCorreo(correo){
        $.ajax({
			// url: '../../core/validatePhp/validaCorreo.php',
            url: '?view=validacion&action=vNuevoUsuario',
            type: 'POST',
            dataType: 'html',
            data: $("#newUsuForm").serialize(), 
            	success: function(data){
            		$("#ntUsuario").html('');
			    	//$("#ntCorreo").html('');
			    	$("#ntPass").html('');
			    	$("#ntcPassword").html('');
			    	$("#ntPreSecreta").html('');
			    	$("#ntRsp").html('');
			    	$("#ntRol").html('');

			        $("#ntCorreo").html(data); // Mostrar la respuestas del script PHP.
			    } 
        })
  
    }
    
    $(document).on('keyup', '#correo', function(){
        var valorCorreo=$('#correo').val();
        if (valorCorreo!="" ) {
            validaCorreo(valorCorreo);
        } else {
            validaCorreo();
        }
    });
});
$(document).on('focus', '#newPassword', function(){
    $(validaPass());
    function validaPass(newPassword){
        $.ajax({
			// url: '../../core/validatePhp/validaCorreo.php',
            url: '?view=validacion&action=vNuevoUsuario',
            type: 'POST',
            dataType: 'html',
            data: $("#newUsuForm").serialize(), 
            	success: function(data){
            		 $("#ntUsuario").html('');
			    	$("#ntCorreo").html('');
			    	//$("#ntPass").html('');
			    	$("#ntcPassword").html('');
			    	$("#ntPreSecreta").html('');
			    	$("#ntRsp").html('');
			    	$("#ntRol").html('');

			        $("#ntPass").html(data); // Mostrar la respuestas del script PHP.
			    } 
        })
  
    }
    
    $(document).on('keyup', '#newPassword', function(){
        var valorPass=$('#newPassword').val();
        if (valorPass!="" ) {
            validaPass(valorPass);
        } else {
            validaPass();
        }
    });
});
$(document).on('focus', '#cpassword', function(){
    $(validacPass());
    function validacPass(newPassword){
        $.ajax({
			// url: '../../core/validatePhp/validaCorreo.php',
            url: '?view=validacion&action=vNuevoUsuario',
            type: 'POST',
            dataType: 'html',
            data: $("#newUsuForm").serialize(), 
            	success: function(data){
            		$("#ntUsuario").html('');
			    	$("#ntCorreo").html('');
			    	$("#ntPass").html('');
			    	//$("#ntcPassword").html('');
			    	$("#ntPreSecreta").html('');
			    	$("#ntRsp").html('');
			    	$("#ntRol").html('');

			        $("#ntcPassword").html(data); // Mostrar la respuestas del script PHP.
			    } 
        })
  
    }
    
    $(document).on('keyup', '#cpassword', function(){
        var valorcPass=$('#cpassword').val();
        if (valorcPass!="" ) {
            validacPass(valorcPass);
        } else {
            validacPass();
        }
    });
});
$(document).on('focus', '#pregSecreta', function(){
    $(validaPreg());
    function validaPreg(pregSecreta){
        $.ajax({
			// url: '../../core/validatePhp/validaCorreo.php',
            url: '?view=validacion&action=vNuevoUsuario',
            type: 'POST',
            dataType: 'html',
            data: $("#newUsuForm").serialize(), 
            	success: function(data){
            		$("#ntUsuario").html('');
			    	$("#ntCorreo").html('');
			    	$("#ntPass").html('');
			    	$("#ntcPassword").html('');
			    	//$("#ntPreSecreta").html('');
			    	$("#ntRsp").html('');
			    	$("#ntRol").html('');

			        $("#ntPreSecreta").html(data); // Mostrar la respuestas del script PHP.
			    } 
        })
  
    }
    
    $(document).on('change', '#pregSecreta', function(){
        var valorPreg=$('#pregSecreta').val();
        if (valorPreg!="" ) {
            validaPreg(valorPreg);
        } else {
            validaPreg();
        }
    });
});
$(document).on('focus', '#rsecreta', function(){
    $(validaRsp());
    function validaRsp(rsecreta){
        $.ajax({
			// url: '../../core/validatePhp/validaCorreo.php',
            url: '?view=validacion&action=vNuevoUsuario',
            type: 'POST',
            dataType: 'html',
            data: $("#newUsuForm").serialize(), 
            	success: function(data){
            		$("#ntUsuario").html('');
			    	$("#ntCorreo").html('');
			    	$("#ntPass").html('');
			    	$("#ntcPassword").html('');
			    	$("#ntPreSecreta").html('');
			    	//$("#ntRsp").html('');
			    	$("#ntRol").html('');

			        $("#ntRsp").html(data); // Mostrar la respuestas del script PHP.
			    } 
        })
  
    }
    
    $(document).on('keyup', '#rsecreta', function(){
        var valorRsp=$('#rsecreta').val();
        if (valorRsp!="" ) {
            validaRsp(valorRsp);
        } else {
            validaRsp();
        }
    });
});
$(document).on('focus', '#rolUsu', function(){
    $(validaRol());
    function validaRol(rolUsu){
        $.ajax({
			// url: '../../core/validatePhp/validaCorreo.php',
            url: '?view=validacion&action=vNuevoUsuario',
            type: 'POST',
            dataType: 'html',
            data: $("#newUsuForm").serialize(), 
            	success: function(data){
            		$("#ntUsuario").html('');
			    	$("#ntCorreo").html('');
			    	$("#ntPass").html('');
			    	$("#ntcPassword").html('');
			    	$("#ntPreSecreta").html('');
			    	$("#ntRsp").html('');
			    	//$("#ntRol").html('');

			        $("#ntRol").html(data); // Mostrar la respuestas del script PHP.
			    } 
        })
  
    }
    
    $(document).on('change', '#rolUsu', function(){
        var valorRol=$('#rolUsu').val();
        if (valorRol!="" ) {
            validaRol(valorRol);
        } else {
            validaRol();
        }
    });
});
/**********************************************************************************************************************/
//validacion para el login
$(document).on('focus', '#correoLogin', function(){
    $(validaCorreoLogin());
    function validaCorreoLogin(correoLogin){
        $.ajax({
			// url: '../../core/validatePhp/validaCorreo.php',
            url: '?view=validacion&action=vLogin',
            type: 'POST',
            dataType: 'html',
            data: $("#loginForm").serialize(),
            	success: function(data){
			    	//$("#ntCorreoLogin").html('');
			    	$("#ntPasswordLogin").html('');

			        $("#ntCorreoLogin").html(data); // Mostrar la respuestas del script PHP.
			    } 
        })
  
    }
    
    $(document).on('keyup', '#correoLogin', function(){
        var valorCorreoLogin=$('#correoLogin').val();
        if (valorCorreoLogin!="" ) {
            validaCorreoLogin(valorCorreoLogin);
        } else {
            validaCorreoLogin();
        }
    });
});
$(document).on('focus', '#passLogin', function(){
    $(validaPassLogin());
    function validaPassLogin(passLogin){
        $.ajax({
			// url: '../../core/validatePhp/validaCorreo.php',
            url: '?view=validacion&action=vLogin',
            type: 'POST',
            dataType: 'html',
            data: $("#loginForm").serialize(),
            	success: function(data){
			    	$("#ntCorreoLogin").html('');
			    	//$("#ntPasswordLogin").html('');

			        $("#ntPasswordLogin").html(data); // Mostrar la respuestas del script PHP.
			    } 
        })
  
    }
    
    $(document).on('keyup', '#passLogin', function(){
        var valorPassLogin=$('#passLogin').val();
        if (valorPassLogin!="" ) {
            validaPassLogin(valorPassLogin);
        } else {
            validaPassLogin();
        }
    });
});
/**********************************************************************************************************************/
//validaciones para el formulario Nuevo paciente
$(document).on('focus', '#pacCedula', function(){
    $(validapacCedula());
    function validapacCedula(pacCedula){
        $.ajax({
			// url: '../../core/validatePhp/validaCorreo.php',
            url: 'core/validatePhp/validaFormNewPaciente.php',
            type: 'POST',
            dataType: 'html',
            data: $("#formNewPaciente").serialize(),
            	success: function(data){
			    	//$("#ntCedula").html('');
			    	$("#ntTipoSangre").html('');
			    	$("#ntAlerg").html('');
			    	$("#ntNomPaciente").html('');
			    	$("#ntApePaciente").html('');
			    	$("#ntFechaNac").html('');
			    	$("#ntEstCivil").html('');
			    	$("#ntGenero").html('');
			    	$("#ntOficio").html('');
			    	$("#ntPais").html('');
			    	$("#ntEstado").html('');
			    	$("#ntMunicipio").html('');
			    	$("#ntParroquia").html('');
			    	$("#ntCiudad").html('');
			    	$("#ntTipoSeguro").html('');
			    	$("#ntNroSeguro").html('');
			    	$("#ntTipoTelefonia").html('');
			    	$("#ntNroTlf").html('');
			    	$("#ntParentesco").html('');
			    	$("#ntNomFam").html('');
			    	$("#ntApeFam").html('');
			    	$("#ntNroFam").html('');

			        $("#ntCedula").html(data); // Mostrar la respuestas del script PHP.
			    } 
        })
  
    }
    
    $(document).on('keyup', '#pacCedula', function(){
        var valorpacCedula=$('#pacCedula').val();
        if (valorpacCedula!="" ) {
            validapacCedula(valorpacCedula);
        } else {
            validapacCedula();
        }
    });
});

//Input tipo de sangre
$(document).on('focus', '#tipoSangre', function(){
    $(validaTipoSangre());
    function validaTipoSangre(tipoSangre){
        $.ajax({
			// url: '../../core/validatePhp/validaCorreo.php',
            url: 'core/validatePhp/validaFormNewPaciente.php',
            type: 'POST',
            dataType: 'html',
            data: $("#formNewPaciente").serialize(),
            	success: function(data){
			    	$("#ntCedula").html('');
			    	//$("#ntTipoSangre").html('');
			    	$("#ntAlerg").html('');
			    	$("#ntNomPaciente").html('');
			    	$("#ntApePaciente").html('');
			    	$("#ntFechaNac").html('');
			    	$("#ntEstCivil").html('');
			    	$("#ntGenero").html('');
			    	$("#ntOficio").html('');
			    	$("#ntPais").html('');
			    	$("#ntEstado").html('');
			    	$("#ntMunicipio").html('');
			    	$("#ntParroquia").html('');
			    	$("#ntCiudad").html('');
			    	$("#ntTipoSeguro").html('');
			    	$("#ntNroSeguro").html('');
			    	$("#ntTipoTelefonia").html('');
			    	$("#ntNroTlf").html('');
			    	$("#ntParentesco").html('');
			    	$("#ntNomFam").html('');
			    	$("#ntApeFam").html('');
			    	$("#ntNroFam").html('');

			        $("#ntTipoSangre").html(data); // Mostrar la respuestas del script PHP.
			    } 
        })
  
    }
    
    $(document).on('change', '#tipoSangre', function(){
        var valorTipoSangre=$('#tipoSangre').val();
        if (valorTipoSangre!="" ) {
            validaTipoSangre(valorTipoSangre);
        } else {
            validaTipoSangre();
        }
    });
});
//input alergias
$(document).on('focus', '#alergia', function(){
    $(validaAlergias());
    function validaAlergias(alergia){
        $.ajax({
			// url: '../../core/validatePhp/validaCorreo.php',
            url: 'core/validatePhp/validaFormNewPaciente.php',
            type: 'POST',
            dataType: 'html',
            data: $("#formNewPaciente").serialize(),
            	success: function(data){
			    	$("#ntCedula").html('');
			    	$("#ntTipoSangre").html('');
			    	//$("#ntAlerg").html('');
			    	$("#ntNomPaciente").html('');
			    	$("#ntApePaciente").html('');
			    	$("#ntFechaNac").html('');
			    	$("#ntEstCivil").html('');
			    	$("#ntGenero").html('');
			    	$("#ntOficio").html('');
			    	$("#ntPais").html('');
			    	$("#ntEstado").html('');
			    	$("#ntMunicipio").html('');
			    	$("#ntParroquia").html('');
			    	$("#ntCiudad").html('');
			    	$("#ntTipoSeguro").html('');
			    	$("#ntNroSeguro").html('');
			    	$("#ntTipoTelefonia").html('');
			    	$("#ntNroTlf").html('');
			    	$("#ntParentesco").html('');
			    	$("#ntNomFam").html('');
			    	$("#ntApeFam").html('');
			    	$("#ntNroFam").html('');

			        $("#ntAlerg").html(data); // Mostrar la respuestas del script PHP.
			    } 
        })
  
    }
    
    $(document).on('change', '#alergia', function(){
        var valorAlergia=$('#alergia').val();
        if (valorAlergia!="" ) {
            validaAlergias(valorAlergia);
        } else {
            validaAlergias();
        }
    });
});
//Input nombre del Paciente
$(document).on('focus', '#nomPaciente', function(){
    $(validaNomPaciente());
    function validaNomPaciente(nomPaciente){
        $.ajax({
			// url: '../../core/validatePhp/validaCorreo.php',
            url: 'core/validatePhp/validaFormNewPaciente.php',
            type: 'POST',
            dataType: 'html',
            data: $("#formNewPaciente").serialize(),
            	success: function(data){
			    	$("#ntCedula").html('');
			    	$("#ntTipoSangre").html('');
			    	$("#ntAlerg").html('');
			    	//$("#ntNomPaciente").html('');
			    	$("#ntApePaciente").html('');
			    	$("#ntFechaNac").html('');
			    	$("#ntEstCivil").html('');
			    	$("#ntGenero").html('');
			    	$("#ntOficio").html('');
			    	$("#ntPais").html('');
			    	$("#ntEstado").html('');
			    	$("#ntMunicipio").html('');
			    	$("#ntParroquia").html('');
			    	$("#ntCiudad").html('');
			    	$("#ntTipoSeguro").html('');
			    	$("#ntNroSeguro").html('');
			    	$("#ntTipoTelefonia").html('');
			    	$("#ntNroTlf").html('');
			    	$("#ntParentesco").html('');
			    	$("#ntNomFam").html('');
			    	$("#ntApeFam").html('');
			    	$("#ntNroFam").html('');

			        $("#ntNomPaciente").html(data); // Mostrar la respuestas del script PHP.
			    } 
        })
  
    }
    
    $(document).on('keyup', '#nomPaciente', function(){
        var valorNomPaciente=$('#nomPaciente').val();
        if (valorNomPaciente!="" ) {
            validaNomPaciente(valorNomPaciente);
        } else {
            validaNomPaciente();
        }
    });
});
//input apellido del paciente
$(document).on('focus', '#apePaciente', function(){
    $(validaApePaciente());
    function validaApePaciente(apePaciente){
        $.ajax({
			// url: '../../core/validatePhp/validaCorreo.php',
            url: 'core/validatePhp/validaFormNewPaciente.php',
            type: 'POST',
            dataType: 'html',
            data: $("#formNewPaciente").serialize(),
            	success: function(data){
			    	$("#ntCedula").html('');
			    	$("#ntTipoSangre").html('');
			    	$("#ntAlerg").html('');
			    	$("#ntNomPaciente").html('');
			    	//$("#ntApePaciente").html('');
			    	$("#ntFechaNac").html('');
			    	$("#ntEstCivil").html('');
			    	$("#ntGenero").html('');
			    	$("#ntOficio").html('');
			    	$("#ntPais").html('');
			    	$("#ntEstado").html('');
			    	$("#ntMunicipio").html('');
			    	$("#ntParroquia").html('');
			    	$("#ntCiudad").html('');
			    	$("#ntTipoSeguro").html('');
			    	$("#ntNroSeguro").html('');
			    	$("#ntTipoTelefonia").html('');
			    	$("#ntNroTlf").html('');
			    	$("#ntParentesco").html('');
			    	$("#ntNomFam").html('');
			    	$("#ntApeFam").html('');
			    	$("#ntNroFam").html('');

			        $("#ntApePaciente").html(data); // Mostrar la respuestas del script PHP.
			    } 
        })
  
    }
    
    $(document).on('keyup', '#apePaciente', function(){
        var valorApePaciente=$('#apePaciente').val();
        if (valorApePaciente!="" ) {
            validaApePaciente(valorApePaciente);
        } else {
            validaApePaciente();
        }
    });
});

// Select estado civil
	$(document).on('focus', '#estCivil', function(){
    $(validaestCivil());
    function validaestCivil(estCivil){
        $.ajax({
			// url: '../../core/validatePhp/validaCorreo.php',
            url: 'core/validatePhp/validaFormNewPaciente.php',
            type: 'POST',
            dataType: 'html',
            data: $("#formNewPaciente").serialize(),
            	success: function(data){
			    	$("#ntCedula").html('');
			    	$("#ntTipoSangre").html('');
			    	$("#ntAlerg").html('');
			    	$("#ntNomPaciente").html('');
			    	$("#ntApePaciente").html('');
			    	$("#ntFechaNac").html('');
			    	//$("#ntEstCivil").html('');
			    	$("#ntGenero").html('');
			    	$("#ntOficio").html('');
			    	$("#ntPais").html('');
			    	$("#ntEstado").html('');
			    	$("#ntMunicipio").html('');
			    	$("#ntParroquia").html('');
			    	$("#ntCiudad").html('');
			    	$("#ntTipoSeguro").html('');
			    	$("#ntNroSeguro").html('');
			    	$("#ntTipoTelefonia").html('');
			    	$("#ntNroTlf").html('');
			    	$("#ntParentesco").html('');
			    	$("#ntNomFam").html('');
			    	$("#ntApeFam").html('');
			    	$("#ntNroFam").html('');

			        $("#ntEstCivil").html(data); // Mostrar la respuestas del script PHP.
			    } 
        })
  
    }
    
    $(document).on('change', '#estCivil', function(){
        var valorestCivil=$('#estCivil').val();
        if (valorestCivil!="" ) {
            validaestCivil(valorestCivil);
        } else {
            validaestCivil();
        }
    });
});
// Select genero
	$(document).on('focus', '#genero', function(){
    $(validagenero());
    function validagenero(genero){
        $.ajax({
			// url: '../../core/validatePhp/validaCorreo.php',
            url: 'core/validatePhp/validaFormNewPaciente.php',
            type: 'POST',
            dataType: 'html',
            data: $("#formNewPaciente").serialize(),
            	success: function(data){
			    	$("#ntCedula").html('');
			    	$("#ntTipoSangre").html('');
			    	$("#ntAlerg").html('');
			    	$("#ntNomPaciente").html('');
			    	$("#ntApePaciente").html('');
			    	$("#ntFechaNac").html('');
			    	$("#ntEstCivil").html('');
			    	//$("#ntGenero").html('');
			    	$("#ntOficio").html('');
			    	$("#ntPais").html('');
			    	$("#ntEstado").html('');
			    	$("#ntMunicipio").html('');
			    	$("#ntParroquia").html('');
			    	$("#ntCiudad").html('');
			    	$("#ntTipoSeguro").html('');
			    	$("#ntNroSeguro").html('');
			    	$("#ntTipoTelefonia").html('');
			    	$("#ntNroTlf").html('');
			    	$("#ntParentesco").html('');
			    	$("#ntNomFam").html('');
			    	$("#ntApeFam").html('');
			    	$("#ntNroFam").html('');

			        $("#ntGenero").html(data); // Mostrar la respuestas del script PHP.
			    } 
        })
  
    }
    
    $(document).on('change', '#genero', function(){
        var valorgenero=$('#genero').val();
        if (valorgenero!="" ) {
            validagenero(valorgenero);
        } else {
            validagenero();
        }
    });
});
// Select profesion/oficio
	$(document).on('focus', '#profesion', function(){
    $(validaprofesion());
    function validaprofesion(profesion){
        $.ajax({
			// url: '../../core/validatePhp/validaCorreo.php',
            url: 'core/validatePhp/validaFormNewPaciente.php',
            type: 'POST',
            dataType: 'html',
            data: $("#formNewPaciente").serialize(),
            	success: function(data){
			    	$("#ntCedula").html('');
			    	$("#ntTipoSangre").html('');
			    	$("#ntAlerg").html('');
			    	$("#ntNomPaciente").html('');
			    	$("#ntApePaciente").html('');
			    	$("#ntFechaNac").html('');
			    	$("#ntEstCivil").html('');
			    	$("#ntGenero").html('');
			    	//$("#ntOficio").html('');
			    	$("#ntPais").html('');
			    	$("#ntEstado").html('');
			    	$("#ntMunicipio").html('');
			    	$("#ntParroquia").html('');
			    	$("#ntCiudad").html('');
			    	$("#ntTipoSeguro").html('');
			    	$("#ntNroSeguro").html('');
			    	$("#ntTipoTelefonia").html('');
			    	$("#ntNroTlf").html('');
			    	$("#ntParentesco").html('');
			    	$("#ntNomFam").html('');
			    	$("#ntApeFam").html('');
			    	$("#ntNroFam").html('');

			        $("#ntOficio").html(data); // Mostrar la respuestas del script PHP.
			    } 
        })
  
    }
    
    $(document).on('change', '#profesion', function(){
        var valorprofesion=$('#profesion').val();
        if (valorprofesion!="" ) {
            validaprofesion(valorprofesion);
        } else {
            validaprofesion();
        }
    });
});
// Select Nacionalidad
	$(document).on('focus', '#cbx_nacionalidad', function(){
    $(validacbx_nacionalidad());
    function validacbx_nacionalidad(cbx_nacionalidad){
        $.ajax({
			// url: '../../core/validatePhp/validaCorreo.php',
            url: 'core/validatePhp/validaFormNewPaciente.php',
            type: 'POST',
            dataType: 'html',
            data: $("#formNewPaciente").serialize(),
            	success: function(data){
			    	$("#ntCedula").html('');
			    	$("#ntTipoSangre").html('');
			    	$("#ntAlerg").html('');
			    	$("#ntNomPaciente").html('');
			    	$("#ntApePaciente").html('');
			    	$("#ntFechaNac").html('');
			    	$("#ntEstCivil").html('');
			    	$("#ntGenero").html('');
			    	$("#ntOficio").html('');
			    	//$("#ntPais").html('');
			    	$("#ntEstado").html('');
			    	$("#ntMunicipio").html('');
			    	$("#ntParroquia").html('');
			    	$("#ntCiudad").html('');
			    	$("#ntTipoSeguro").html('');
			    	$("#ntNroSeguro").html('');
			    	$("#ntTipoTelefonia").html('');
			    	$("#ntNroTlf").html('');
			    	$("#ntParentesco").html('');
			    	$("#ntNomFam").html('');
			    	$("#ntApeFam").html('');
			    	$("#ntNroFam").html('');

			        $("#ntPais").html(data); // Mostrar la respuestas del script PHP.
			    } 
        })
  
    }
    
    $(document).on('change', '#cbx_nacionalidad', function(){
        var valorcbx_nacionalidad=$('#cbx_nacionalidad').val();
        if (valorcbx_nacionalidad!="" ) {
            validacbx_nacionalidad(valorcbx_nacionalidad);
        } else {
            validacbx_nacionalidad();
        }
    });
});
//mostrar|ocultar panel "posee usted seguro"
	$(document).ready(function(){
		$("#mostrar").click(function(){
			$('#panelSeguro').show("swing");
		 });
		$("#ocultar").click(function(){
			$('#panelSeguro').hide("linear");
		});
	});
// Select Estado
	$(document).on('focus', '#cbx_estado', function(){
    $(validacbx_estado());
    function validacbx_estado(cbx_estado){
        $.ajax({
			// url: '../../core/validatePhp/validaCorreo.php',
            url: 'core/validatePhp/validaFormNewPaciente.php',
            type: 'POST',
            dataType: 'html',
            data: $("#formNewPaciente").serialize(),
            	success: function(data){
			    	$("#ntCedula").html('');
			    	$("#ntTipoSangre").html('');
			    	$("#ntAlerg").html('');
			    	$("#ntNomPaciente").html('');
			    	$("#ntApePaciente").html('');
			    	$("#ntFechaNac").html('');
			    	$("#ntEstCivil").html('');
			    	$("#ntGenero").html('');
			    	$("#ntOficio").html('');
			    	$("#ntPais").html('');
			    	//$("#ntEstado").html('');
			    	$("#ntMunicipio").html('');
			    	$("#ntParroquia").html('');
			    	$("#ntCiudad").html('');
			    	$("#ntTipoSeguro").html('');
			    	$("#ntNroSeguro").html('');
			    	$("#ntTipoTelefonia").html('');
			    	$("#ntNroTlf").html('');
			    	$("#ntParentesco").html('');
			    	$("#ntNomFam").html('');
			    	$("#ntApeFam").html('');
			    	$("#ntNroFam").html('');

			        $("#ntEstado").html(data); // Mostrar la respuestas del script PHP.
			    } 
        })
  
    }
    
    $(document).on('change', '#cbx_estado', function(){
        var valorcbx_estado=$('#cbx_estado').val();
        if (valorcbx_estado!="" ) {
            validacbx_estado(valorcbx_estado);
        } else {
            validacbx_estado();
        }
    });
});
// Select Municipio
	$(document).on('focus', '#cbx_municipio', function(){
    $(validacbx_municipio());
    function validacbx_municipio(cbx_municipio){
        $.ajax({
			// url: '../../core/validatePhp/validaCorreo.php',
            url: 'core/validatePhp/validaFormNewPaciente.php',
            type: 'POST',
            dataType: 'html',
            data: $("#formNewPaciente").serialize(),
            	success: function(data){
			    	$("#ntCedula").html('');
			    	$("#ntTipoSangre").html('');
			    	$("#ntAlerg").html('');
			    	$("#ntNomPaciente").html('');
			    	$("#ntApePaciente").html('');
			    	$("#ntFechaNac").html('');
			    	$("#ntEstCivil").html('');
			    	$("#ntGenero").html('');
			    	$("#ntOficio").html('');
			    	$("#ntPais").html('');
			    	$("#ntEstado").html('');
			    	//$("#ntMunicipio").html('');
			    	$("#ntParroquia").html('');
			    	$("#ntCiudad").html('');
			    	$("#ntTipoSeguro").html('');
			    	$("#ntNroSeguro").html('');
			    	$("#ntTipoTelefonia").html('');
			    	$("#ntNroTlf").html('');
			    	$("#ntParentesco").html('');
			    	$("#ntNomFam").html('');
			    	$("#ntApeFam").html('');
			    	$("#ntNroFam").html('');

			        $("#ntMunicipio").html(data); // Mostrar la respuestas del script PHP.
			    } 
        })
  
    }
    
    $(document).on('change', '#cbx_municipio', function(){
        var valorcbx_municipio=$('#cbx_municipio').val();
        if (valorcbx_municipio!="" ) {
            validacbx_municipio(valorcbx_municipio);
        } else {
            validacbx_municipio();
        }
    });
});
// Select Parroquia
	$(document).on('focus', '#cbx_parroquia', function(){
    $(validacbx_parroquia());
    function validacbx_parroquia(cbx_parroquia){
        $.ajax({
			// url: '../../core/validatePhp/validaCorreo.php',
            url: 'core/validatePhp/validaFormNewPaciente.php',
            type: 'POST',
            dataType: 'html',
            data: $("#formNewPaciente").serialize(),
            	success: function(data){
			    	$("#ntCedula").html('');
			    	$("#ntTipoSangre").html('');
			    	$("#ntAlerg").html('');
			    	$("#ntNomPaciente").html('');
			    	$("#ntApePaciente").html('');
			    	$("#ntFechaNac").html('');
			    	$("#ntEstCivil").html('');
			    	$("#ntGenero").html('');
			    	$("#ntOficio").html('');
			    	$("#ntPais").html('');
			    	$("#ntEstado").html('');
			    	$("#ntMunicipio").html('');
			    	//$("#ntParroquia").html('');
			    	$("#ntCiudad").html('');
			    	$("#ntTipoSeguro").html('');
			    	$("#ntNroSeguro").html('');
			    	$("#ntTipoTelefonia").html('');
			    	$("#ntNroTlf").html('');
			    	$("#ntParentesco").html('');
			    	$("#ntNomFam").html('');
			    	$("#ntApeFam").html('');
			    	$("#ntNroFam").html('');

			        $("#ntParroquia").html(data); // Mostrar la respuestas del script PHP.
			    } 
        })
  
    }
    
    $(document).on('change', '#cbx_parroquia', function(){
        var valorcbx_parroquia=$('#cbx_parroquia').val();
        if (valorcbx_parroquia!="" ) {
            validacbx_parroquia(valorcbx_parroquia);
        } else {
            validacbx_parroquia();
        }
    });
});
// Select Ciudad
	$(document).on('focus', '#cbx_ciudad', function(){
    $(validacbx_ciudad());
    function validacbx_ciudad(cbx_ciudad){
        $.ajax({
			// url: '../../core/validatePhp/validaCorreo.php',
            url: 'core/validatePhp/validaFormNewPaciente.php',
            type: 'POST',
            dataType: 'html',
            data: $("#formNewPaciente").serialize(),
            	success: function(data){
			    	$("#ntCedula").html('');
			    	$("#ntTipoSangre").html('');
			    	$("#ntAlerg").html('');
			    	$("#ntNomPaciente").html('');
			    	$("#ntApePaciente").html('');
			    	$("#ntFechaNac").html('');
			    	$("#ntEstCivil").html('');
			    	$("#ntGenero").html('');
			    	$("#ntOficio").html('');
			    	$("#ntPais").html('');
			    	$("#ntEstado").html('');
			    	$("#ntMunicipio").html('');
			    	$("#ntParroquia").html('');
			    	//$("#ntCiudad").html('');
			    	$("#ntTipoSeguro").html('');
			    	$("#ntNroSeguro").html('');
			    	$("#ntTipoTelefonia").html('');
			    	$("#ntNroTlf").html('');
			    	$("#ntParentesco").html('');
			    	$("#ntNomFam").html('');
			    	$("#ntApeFam").html('');
			    	$("#ntNroFam").html('');

			        $("#ntCiudad").html(data); // Mostrar la respuestas del script PHP.
			    } 
        })
  
    }
    
    $(document).on('change', '#cbx_ciudad', function(){
        var valorcbx_ciudad=$('#cbx_ciudad').val();
        if (valorcbx_ciudad!="" ) {
            validacbx_ciudad(valorcbx_ciudad);
        } else {
            validacbx_ciudad();
        }
    });
});
// Select Parentesco
	$(document).on('focus', '#parentescoFam', function(){
    $(validaparentescoFam());
    function validaparentescoFam(parentescoFam){
        $.ajax({
			// url: '../../core/validatePhp/validaCorreo.php',
            url: 'core/validatePhp/validaFormNewPaciente.php',
            type: 'POST',
            dataType: 'html',
            data: $("#formNewPaciente").serialize(),
            	success: function(data){
			    	$("#ntCedula").html('');
			    	$("#ntTipoSangre").html('');
			    	$("#ntAlerg").html('');
			    	$("#ntNomPaciente").html('');
			    	$("#ntApePaciente").html('');
			    	$("#ntFechaNac").html('');
			    	$("#ntEstCivil").html('');
			    	$("#ntGenero").html('');
			    	$("#ntOficio").html('');
			    	$("#ntPais").html('');
			    	$("#ntEstado").html('');
			    	$("#ntMunicipio").html('');
			    	$("#ntParroquia").html('');
			    	$("#ntCiudad").html('');
			    	$("#ntTipoSeguro").html('');
			    	$("#ntNroSeguro").html('');
			    	$("#ntTipoTelefonia").html('');
			    	$("#ntNroTlf").html('');
			    	//$("#ntParentesco").html('');
			    	$("#ntNomFam").html('');
			    	$("#ntApeFam").html('');
			    	$("#ntNroFam").html('');

			        $("#ntParentesco").html(data); // Mostrar la respuestas del script PHP.
			    } 
        })
  
    }
    
    $(document).on('change', '#parentescoFam', function(){
        var valorparentescoFam=$('#parentescoFam').val();
        if (valorparentescoFam!="" ) {
            validaparentescoFam(valorparentescoFam);
        } else {
            validaparentescoFam();
        }
    });
});
// Input Nombre familiar
	$(document).on('focus', '#nomFamiliar', function(){
    $(validanomFamiliar());
    function validanomFamiliar(nomFamiliar){
        $.ajax({
			// url: '../../core/validatePhp/validaCorreo.php',
            url: 'core/validatePhp/validaFormNewPaciente.php',
            type: 'POST',
            dataType: 'html',
            data: $("#formNewPaciente").serialize(),
            	success: function(data){
			    	$("#ntCedula").html('');
			    	$("#ntTipoSangre").html('');
			    	$("#ntAlerg").html('');
			    	$("#ntNomPaciente").html('');
			    	$("#ntApePaciente").html('');
			    	$("#ntFechaNac").html('');
			    	$("#ntEstCivil").html('');
			    	$("#ntGenero").html('');
			    	$("#ntOficio").html('');
			    	$("#ntPais").html('');
			    	$("#ntEstado").html('');
			    	$("#ntMunicipio").html('');
			    	$("#ntParroquia").html('');
			    	$("#ntCiudad").html('');
			    	$("#ntTipoSeguro").html('');
			    	$("#ntNroSeguro").html('');
			    	$("#ntTipoTelefonia").html('');
			    	$("#ntNroTlf").html('');
			    	$("#ntParentesco").html('');
			    	//$("#ntNomFam").html('');
			    	$("#ntApeFam").html('');
			    	$("#ntNroFam").html('');

			        $("#ntNomFam").html(data); // Mostrar la respuestas del script PHP.
			    } 
        })
  
    }
    
    $(document).on('keyuo', '#nomFamiliar', function(){
        var valornomFamiliar=$('#nomFamiliar').val();
        if (valornomFamiliar!="" ) {
            validanomFamiliar(valornomFamiliar);
        } else {
            validanomFamiliar();
        }
    });
});
// Input Apellido familiar
	$(document).on('focus', '#apeFamiliar', function(){
    $(validaapeFamiliar());
    function validaapeFamiliar(apeFamiliar){
        $.ajax({
			// url: '../../core/validatePhp/validaCorreo.php',
            url: 'core/validatePhp/validaFormNewPaciente.php',
            type: 'POST',
            dataType: 'html',
            data: $("#formNewPaciente").serialize(),
            	success: function(data){
			    	$("#ntCedula").html('');
			    	$("#ntTipoSangre").html('');
			    	$("#ntAlerg").html('');
			    	$("#ntNomPaciente").html('');
			    	$("#ntApePaciente").html('');
			    	$("#ntFechaNac").html('');
			    	$("#ntEstCivil").html('');
			    	$("#ntGenero").html('');
			    	$("#ntOficio").html('');
			    	$("#ntPais").html('');
			    	$("#ntEstado").html('');
			    	$("#ntMunicipio").html('');
			    	$("#ntParroquia").html('');
			    	$("#ntCiudad").html('');
			    	$("#ntTipoSeguro").html('');
			    	$("#ntNroSeguro").html('');
			    	$("#ntTipoTelefonia").html('');
			    	$("#ntNroTlf").html('');
			    	$("#ntParentesco").html('');
			    	$("#ntNomFam").html('');
			    	//$("#ntApeFam").html('');
			    	$("#ntNroFam").html('');

			        $("#ntApeFam").html(data); // Mostrar la respuestas del script PHP.
			    } 
        })
  
    }
    
    $(document).on('keyup', '#apeFamiliar', function(){
        var valorapeFamiliar=$('#apeFamiliar').val();
        if (valorapeFamiliar!="" ) {
            validaapeFamiliar(valorapeFamiliar);
        } else {
            validaapeFamiliar();
        }
    });
});
// Input Numero de telefono familiar
	$(document).on('focus', '#nroTlfFamiliar', function(){
    $(validanroTlfFamiliar());
    function validanroTlfFamiliar(nroTlfFamiliar){
        $.ajax({
			// url: '../../core/validatePhp/validaCorreo.php',
            url: 'core/validatePhp/validaFormNewPaciente.php',
            type: 'POST',
            dataType: 'html',
            data: $("#formNewPaciente").serialize(),
            	success: function(data){
			    	$("#ntCedula").html('');
			    	$("#ntTipoSangre").html('');
			    	$("#ntAlerg").html('');
			    	$("#ntNomPaciente").html('');
			    	$("#ntApePaciente").html('');
			    	$("#ntFechaNac").html('');
			    	$("#ntEstCivil").html('');
			    	$("#ntGenero").html('');
			    	$("#ntOficio").html('');
			    	$("#ntPais").html('');
			    	$("#ntEstado").html('');
			    	$("#ntMunicipio").html('');
			    	$("#ntParroquia").html('');
			    	$("#ntCiudad").html('');
			    	$("#ntTipoSeguro").html('');
			    	$("#ntNroSeguro").html('');
			    	$("#ntTipoTelefonia").html('');
			    	$("#ntNroTlf").html('');
			    	$("#ntParentesco").html('');
			    	$("#ntNomFam").html('');
			    	$("#ntApeFam").html('');
			    	//$("#ntNroFam").html('');

			        $("#ntNroFam").html(data); // Mostrar la respuestas del script PHP.
			    } 
        })
  
    }
    
    $(document).on('keyup', '#nroTlfFamiliar', function(){
        var valornroTlfFamiliar=$('#nroTlfFamiliar').val();
        if (valornroTlfFamiliar!="" ) {
            validanroTlfFamiliar(valornroTlfFamiliar);
        } else {
            validanroTlfFamiliar();
        }
    });
});
	//Fin del formulario Nuevo Paciente
/**********************************************************************************************************************/
//formulario obtetricia 1
// Input Motivo de admision
	$(document).on('focus', '#mot_conslt_obss', function(){
    $(validamot_conslt_obss());
    function validamot_conslt_obss(mot_conslt_obss){
        $.ajax({
			// url: '../../core/validatePhp/validaCorreo.php',
            url: 'core/validatePhp/validaFormObstetriciaIngreso.php',
            type: 'POST',
            dataType: 'html',
            data: $("#formulario").serialize(),
            	success: function(data){
			    	$("#ntNroHistoria").html('');
			    	$("#ntFechaEntrada").html('');
			    	$("#ntHoraEntrada").html('');
			    	$("#ntSala").html('');
			    	$("#ntCama").html('');
			    	$("#ntServicio").html('');
			    	//("#ntMotivoAdmision").html('');
			    	$("#ntSintoma").html('');
			    	$("#ntTacto").html('');
			    	$("#ntEspeculo").html('');
			    	$("#ntDiagnostico").html('');
			    	$("#ntMenarquiaInicio").html('');
			    	$("#ntMenarquiaFin").html('');
			    	$("#ntIntensidad").html('');
			    	$("#ntAlturaUterina").html('');
			    	$("#ntCircunferenciaAdbominal").html('');
			    	$("#ntPresentacion").html('');
			    	$("#ntPosicion").html('');
			    	$("#ntAusculacion").html('');


			        $("#ntMotivoAdmision").html(data); // Mostrar la respuestas del script PHP.
			    } 
        })
  
    }
    
    $(document).on('keyup', '#mot_conslt_obss', function(){
        var valormot_conslt_obss=$('#mot_conslt_obss').val();
        if (valormot_conslt_obss!="" ) {
            validamot_conslt_obss(valormot_conslt_obss);
        } else {
            validamot_conslt_obss();
        }
    });
});
/**********************************************************************************************************************/
//Formulario Medicina General
// Input Motivo de admision
	$(document).on('focus', '#mot_conslt_obss', function(){
    $(validamot_conslt_obss());
    function validamot_conslt_obss(mot_conslt_obss){
        $.ajax({
			// url: '/core/validatePhp/validaFormMedicinaGeneral.php',
            url: 'core/validatePhp/validaFormMedicinaGeneral.php',
            type: 'POST',
            dataType: 'html',
            data: $("#formulario").serialize(),
            	success: function(data){
			    	$("#ntNroHistoria").html('');
			    	$("#ntFechaEntrada").html('');
			    	$("#ntHoraEntrada").html('');
			    	$("#ntSala").html('');
			    	$("#ntCama").html('');
			    	$("#ntServicio").html('');
			    	//("#ntMotivoAdmision").html('');
			    	$("#ntSintoma").html('');
			    	$("#ntTacto").html('');
			    	$("#ntEspeculo").html('');
			    	$("#ntDiagnostico").html('');
			    	$("#ntMenarquiaInicio").html('');
			    	$("#ntMenarquiaFin").html('');
			    	$("#ntIntensidad").html('');
			    	$("#ntAlturaUterina").html('');
			    	$("#ntCircunferenciaAdbominal").html('');
			    	$("#ntPresentacion").html('');
			    	$("#ntPosicion").html('');
			    	$("#ntAusculacion").html('');


			        $("#ntMotivoAdmision").html(data); // Mostrar la respuestas del script PHP.
			    } 
        })
  
    }
    
    $(document).on('keyup', '#mot_conslt_obss', function(){
        var valormot_conslt_obss=$('#mot_conslt_obss').val();
        if (valormot_conslt_obss!="" ) {
            validamot_conslt_obss(valormot_conslt_obss);
        } else {
            validamot_conslt_obss();
        }
    });
});

/**********************************************************************************************************************/

/**********************************************************************************************************************
Función Ajax para validacion de formulario de pediatria*/

/*Sección datos de admisión del paciente*/
// Input Nombre familiar
	$(document).on('focus', '#mtvadmin', function(){
    $(validaDatosAdmision());
    function validaDatosAdmision(mtvadmin){
        $.ajax({
            url: 'core/validatePhp/validaFormPediatria.php',
            type: 'POST',
            dataType: 'html',
            data: $("#formPediatria").serialize(),
            	success: function(data){
			    	//$("#ntAdmin").html('');
			    	$("#ntEnfermedad").html('');
			    	$("#ntdiagFinal").html('');
			    	$("#ntotroDiag").html('');
			    	$("#ntintervencion").html('');
			    	$("#entintervencion").html('');
			    	$("#ntDia").html('');
			    	$("#ntMes").html('');
			    	$("#ntFechaNac").html('');
			    	$("#ntRespirar").html('');
			    	$("#ntCianosis").html('');
			    	$("#ntFiebre").html('');
			    	$("#ntVomito").html('');
			    	$("#ntIctericia").html('');
			    	$("#ntHemo").html('');
			    	$("#ntConvulsion").html('');
			    	$("#ntMalformac").html('');
			    	$("#ntOftalmia").html('');
			    	$("#ntCoricia").html('');
			    	$("#ntOtroDiag").html('');
			    	$("#ntCabezaMeses").html('');
			    	$("#ntSentar").html('');
			    	$("#ntPararse").html('');
			    	$("#ntCamino").html('');
			    	$("#ntPalabra").html('');
			    	$("#ntControl").html('');
			    	$("#ntDiente").html('');
			    	$("#ntEscuela").html('');
			    	$("#ntProgreso").html('');
			    	$("#ntPeso").html('');
			    	$("#ntDieta").html('');
			    	$("#ntSuenio").html('');
			    	$("#ntSiesta").html('');
			    	$("#ntJuego").html('');
			    	$("ntSexualidad").html('');
			    	$("#ntDedos").html('');
			    	$("#ntComeUnia").html('');
			    	$("#ntRasgos").html('');
			    	$("#ntRecreacion").html('');
			    	$("#ntOcupacion").html('');
			    	$("#ntHotros").html('');
			    	$("#ntViruela").html('');
			    	$("#ntTosferina").html('');
			    	$("#ntDiafteria").html('');
			    	$("#ntTetanos").html('');
			    	$("#ntTifica").html('');
			    	$("#ntBCG").html('');
			    	$("#ntPolio").html('');
			    	$("#ntTuber").html('');
			    	$("#ntOtrras").html('');
			    	$("#ntHfamiliar").html('');
			    	$("#ntcondGeneral").html('');
			    	$("#ntNutricion").html('');
			    	$("#ntcondOtros").html('');
			    	$("#ntColor").html('');
			    	$("#ntHumedad").html('');
			    	$("#ntContextura").html('');
			    	$("#ntPigmento").html('');
			    	$("#ntHidratacion").html('');
			    	$("#ntEquimosis").html('');
			    	$("#ntPetequia").html('');
			    	$("#ntCianosis").html('');
			    	$("#ntErupcion").html('');
			    	$("#ntPaniculo").html('');
			    	$("#ntTurgor").html('');
			    	$("#ntEdema").html('');
			    	$("#ntUnias").html('');
			    	$("#ntNodulo").html('');
			    	$("#ntPelos").html('');
			    	$("#ntVascula").html('');
			    	$("#ntCicatris").html('');
			    	$("#ntUlcera").html('');
			    	$("#ntFistula").html('');
			    	$("#ntInpOtros").html('');
			    	$("#ntConfig").html('');
			    	$("#ntFrontal").html('');
			    	$("#ntSutura").html('');
			    	$("#ntCircunferencia").html('');
			    	$("#ntCabello").html('');
			    	$("#ntCabOtros").html('');
			    	$("#ntConjuntiva").html('');
			    	$("#ntEclerotica").html('');
			    	$("#ntCornea").html('');
			    	$("#ntPupila").html('');
			    	$("#ntMovimiento").html('');
			    	$("#ntDesviacion").html('');
			    	$("#ntNistagmus").html('');
			    	$("#ntPtosis").html('');
			    	$("#ntExoftalmo").html('');
			    	$("#ntOftalmo").html('');
			    	$("#ntJotros").html('');
			    	$("#ntPabellon").html('');
			    	$("#ntTimpano").html('');
			    	$("#ntAudicion").html('');
			    	$("#ntSecrecion").html('');
			    	$("#ntMastoide").html('');
			    	$("#ntDolor").html('');
			    	$("#ntOidoOtro").html('');
			    	$("#ntFosas").html('');
			    	$("#ntMucosa").html('');
			    	$("#ntSecreNasal").html('');
			    	$("#ntTabique").html('');
			    	$("#ntSenos").html('');
			    	$("#ntDiasfa").html('');
			    	$("#ntAmigdala").html('');
			    	$("#ntFaringe").html('');
			    	$("#ntAdenoide").html('');
			    	$("#ntPosnasal").html('');
			    	$("#ntDisfagia").html('');
			    	$("#ntRinoOtros").html('');
			    	$("#ntAliento").html('');
			    	$("#ntLabios").html('');
			    	$("#ntEncia").html('');
			    	$("#ntMucosa").html('');
			    	$("#ntLengua").html('');
			    	$("#ntConducto").html('');
			    	$("#ntParalisis").html('');
			    	$("#ntBocaOtro").html('');
			    	$("#ntCmovimiento").html('');
			    	$("#ntTiroide").html('');
			    	$("#ntVasos").html('');
			    	$("#ntTraquea").html('');
			    	$("#ntCuelloOtros").html('');
			    	$("#ntCervical").html('');
			    	$("#ntOccipital").html('');
			    	$("#ntSupra").html('');
			    	$("#ntAxilar").html('');
			    	$("#ntInguinal").html('');
			    	$("#ntEpitroclare").html('');
			    	$("#ntGotros").html('');
			    	$("#ntForma").html('');
			    	$("#ntSimetria").html('');
			    	$("#ntExpansion").html('');
			    	$("#ntPercusion").html('');
			    	$("#ntRuido").html('');
			    	$("#ntPalpitacion").html('');
			    	$("#ntRespiracion").html('');
			    	$("#ntRespMin").html('');
			    	$("#ntToraxOtro").html('');
			    	
			        $("#ntAdmin").html(data); // Mostrar la respuestas del script PHP.*/
			    } 
        })
  
    }
    
   $(document).on('keyup', '#mtvadmin', function(){
         var valorMotivo=$('#mtvadmin').val();
        if (valorMotivo!="" ) {
            validaDatosAdmision(valorMotivo);
        } else {
            validaDatosAdmision();
        }
    });
});

/*Sección datos de enfactual del paciente*/
// Input Nombre familiar
	$(document).on('focus', '#enfactual', function(){
    $(validaDatosAdmision());
    function validaDatosAdmision(enfactual){
        $.ajax({
            url: 'core/validatePhp/validaFormPediatria.php',
            type: 'POST',
            dataType: 'html',
            data: $("#formPediatria").serialize(),
            	success: function(data){
			    	$("#ntAdmin").html('');
			    	//$("#ntEnfermedad").html('');
			    	$("#ntdiagFinal").html('');
			    	$("#ntotroDiag").html('');
			    	$("#ntintervencion").html('');
			    	$("#entintervencion").html('');
			    	$("#ntDia").html('');
			    	$("#ntMes").html('');
			    	$("#ntFechaNac").html('');
			    	$("#ntRespirar").html('');
			    	$("#ntCianosis").html('');
			    	$("#ntFiebre").html('');
			    	$("#ntVomito").html('');
			    	$("#ntIctericia").html('');
			    	$("#ntHemo").html('');
			    	$("#ntConvulsion").html('');
			    	$("#ntMalformac").html('');
			    	$("#ntOftalmia").html('');
			    	$("#ntCoricia").html('');
			    	$("#ntOtroDiag").html('');
			    	$("#ntCabezaMeses").html('');
			    	$("#ntSentar").html('');
			    	$("#ntPararse").html('');
			    	$("#ntCamino").html('');
			    	$("#ntPalabra").html('');
			    	$("#ntControl").html('');
			    	$("#ntDiente").html('');
			    	$("#ntEscuela").html('');
			    	$("#ntProgreso").html('');
			    	$("#ntPeso").html('');
			    	$("#ntDieta").html('');
			    	$("#ntSuenio").html('');
			    	$("#ntSiesta").html('');
			    	$("#ntJuego").html('');
			    	$("ntSexualidad").html('');
			    	$("#ntDedos").html('');
			    	$("#ntComeUnia").html('');
			    	$("#ntRasgos").html('');
			    	$("#ntRecreacion").html('');
			    	$("#ntOcupacion").html('');
			    	$("#ntHotros").html('');
			    	$("#ntViruela").html('');
			    	$("#ntTosferina").html('');
			    	$("#ntDiafteria").html('');
			    	$("#ntTetanos").html('');
			    	$("#ntTifica").html('');
			    	$("#ntBCG").html('');
			    	$("#ntPolio").html('');
			    	$("#ntTuber").html('');
			    	$("#ntOtrras").html('');
			    	$("#ntHfamiliar").html('');
			    	$("#ntcondGeneral").html('');
			    	$("#ntNutricion").html('');
			    	$("#ntcondOtros").html('');
			    	$("#ntColor").html('');
			    	$("#ntHumedad").html('');
			    	$("#ntContextura").html('');
			    	$("#ntPigmento").html('');
			    	$("#ntHidratacion").html('');
			    	$("#ntEquimosis").html('');
			    	$("#ntPetequia").html('');
			    	$("#ntCianosis").html('');
			    	$("#ntErupcion").html('');
			    	$("#ntPaniculo").html('');
			    	$("#ntTurgor").html('');
			    	$("#ntEdema").html('');
			    	$("#ntUnias").html('');
			    	$("#ntNodulo").html('');
			    	$("#ntPelos").html('');
			    	$("#ntVascula").html('');
			    	$("#ntCicatris").html('');
			    	$("#ntUlcera").html('');
			    	$("#ntFistula").html('');
			    	$("#ntInpOtros").html('');
			    	$("#ntConfig").html('');
			    	$("#ntFrontal").html('');
			    	$("#ntSutura").html('');
			    	$("#ntCircunferencia").html('');
			    	$("#ntCabello").html('');
			    	$("#ntCabOtros").html('');
			    	$("#ntConjuntiva").html('');
			    	$("#ntEclerotica").html('');
			    	$("#ntCornea").html('');
			    	$("#ntPupila").html('');
			    	$("#ntMovimiento").html('');
			    	$("#ntDesviacion").html('');
			    	$("#ntNistagmus").html('');
			    	$("#ntPtosis").html('');
			    	$("#ntExoftalmo").html('');
			    	$("#ntOftalmo").html('');
			    	$("#ntJotros").html('');
			    	$("#ntPabellon").html('');
			    	$("#ntTimpano").html('');
			    	$("#ntAudicion").html('');
			    	$("#ntSecrecion").html('');
			    	$("#ntMastoide").html('');
			    	$("#ntDolor").html('');
			    	$("#ntOidoOtro").html('');
			    	$("#ntFosas").html('');
			    	$("#ntMucosa").html('');
			    	$("#ntSecreNasal").html('');
			    	$("#ntTabique").html('');
			    	$("#ntSenos").html('');
			    	$("#ntDiasfa").html('');
			    	$("#ntAmigdala").html('');
			    	$("#ntFaringe").html('');
			    	$("#ntAdenoide").html('');
			    	$("#ntPosnasal").html('');
			    	$("#ntDisfagia").html('');
			    	$("#ntRinoOtros").html('');
			    	$("#ntAliento").html('');
			    	$("#ntLabios").html('');
			    	$("#ntEncia").html('');
			    	$("#ntMucosa").html('');
			    	$("#ntLengua").html('');
			    	$("#ntConducto").html('');
			    	$("#ntParalisis").html('');
			    	$("#ntBocaOtro").html('');
			    	$("#ntCmovimiento").html('');
			    	$("#ntTiroide").html('');
			    	$("#ntVasos").html('');
			    	$("#ntTraquea").html('');
			    	$("#ntCuelloOtros").html('');
			    	$("#ntCervical").html('');
			    	$("#ntOccipital").html('');
			    	$("#ntSupra").html('');
			    	$("#ntAxilar").html('');
			    	$("#ntInguinal").html('');
			    	$("#ntEpitroclare").html('');
			    	$("#ntGotros").html('');
			    	$("#ntForma").html('');
			    	$("#ntSimetria").html('');
			    	$("#ntExpansion").html('');
			    	$("#ntPercusion").html('');
			    	$("#ntRuido").html('');
			    	$("#ntPalpitacion").html('');
			    	$("#ntRespiracion").html('');
			    	$("#ntRespMin").html('');
			    	$("#ntToraxOtro").html('');
			    	
			        $("#ntAdmin").html(data); // Mostrar la respuestas del script PHP.*/
			    } 
        })
  
    }
    
   $(document).on('keyuo', '#enfactual', function(){
         var valorMotivo=$('#enfactual').val();
        if (valorMotivo!="" ) {
            validaDatosAdmision(valorMotivo);
        } else {
            validaDatosAdmision();
        }
    });
});

/*Sección datos de diagotros del paciente*/
// Input Nombre familiar
	$(document).on('focus', '#mtvadmin', function(){
    $(validaDatosAdmision());
    function validaDatosAdmision(mtvadmin){
        $.ajax({
            url: 'core/validatePhp/validaFormPediatria.php',
            type: 'POST',
            dataType: 'html',
            data: $("#formPediatria").serialize(),
            	success: function(data){
			    	//$("#ntAdmin").html('');
			    	$("#ntEnfermedad").html('');
			    	$("#ntdiagFinal").html('');
			    	$("#ntotroDiag").html('');
			    	$("#ntintervencion").html('');
			    	$("#entintervencion").html('');
			    	$("#ntDia").html('');
			    	$("#ntMes").html('');
			    	$("#ntFechaNac").html('');
			    	$("#ntRespirar").html('');
			    	$("#ntCianosis").html('');
			    	$("#ntFiebre").html('');
			    	$("#ntVomito").html('');
			    	$("#ntIctericia").html('');
			    	$("#ntHemo").html('');
			    	$("#ntConvulsion").html('');
			    	$("#ntMalformac").html('');
			    	$("#ntOftalmia").html('');
			    	$("#ntCoricia").html('');
			    	$("#ntOtroDiag").html('');
			    	$("#ntCabezaMeses").html('');
			    	$("#ntSentar").html('');
			    	$("#ntPararse").html('');
			    	$("#ntCamino").html('');
			    	$("#ntPalabra").html('');
			    	$("#ntControl").html('');
			    	$("#ntDiente").html('');
			    	$("#ntEscuela").html('');
			    	$("#ntProgreso").html('');
			    	$("#ntPeso").html('');
			    	$("#ntDieta").html('');
			    	$("#ntSuenio").html('');
			    	$("#ntSiesta").html('');
			    	$("#ntJuego").html('');
			    	$("ntSexualidad").html('');
			    	$("#ntDedos").html('');
			    	$("#ntComeUnia").html('');
			    	$("#ntRasgos").html('');
			    	$("#ntRecreacion").html('');
			    	$("#ntOcupacion").html('');
			    	$("#ntHotros").html('');
			    	$("#ntViruela").html('');
			    	$("#ntTosferina").html('');
			    	$("#ntDiafteria").html('');
			    	$("#ntTetanos").html('');
			    	$("#ntTifica").html('');
			    	$("#ntBCG").html('');
			    	$("#ntPolio").html('');
			    	$("#ntTuber").html('');
			    	$("#ntOtrras").html('');
			    	$("#ntHfamiliar").html('');
			    	$("#ntcondGeneral").html('');
			    	$("#ntNutricion").html('');
			    	$("#ntcondOtros").html('');
			    	$("#ntColor").html('');
			    	$("#ntHumedad").html('');
			    	$("#ntContextura").html('');
			    	$("#ntPigmento").html('');
			    	$("#ntHidratacion").html('');
			    	$("#ntEquimosis").html('');
			    	$("#ntPetequia").html('');
			    	$("#ntCianosis").html('');
			    	$("#ntErupcion").html('');
			    	$("#ntPaniculo").html('');
			    	$("#ntTurgor").html('');
			    	$("#ntEdema").html('');
			    	$("#ntUnias").html('');
			    	$("#ntNodulo").html('');
			    	$("#ntPelos").html('');
			    	$("#ntVascula").html('');
			    	$("#ntCicatris").html('');
			    	$("#ntUlcera").html('');
			    	$("#ntFistula").html('');
			    	$("#ntInpOtros").html('');
			    	$("#ntConfig").html('');
			    	$("#ntFrontal").html('');
			    	$("#ntSutura").html('');
			    	$("#ntCircunferencia").html('');
			    	$("#ntCabello").html('');
			    	$("#ntCabOtros").html('');
			    	$("#ntConjuntiva").html('');
			    	$("#ntEclerotica").html('');
			    	$("#ntCornea").html('');
			    	$("#ntPupila").html('');
			    	$("#ntMovimiento").html('');
			    	$("#ntDesviacion").html('');
			    	$("#ntNistagmus").html('');
			    	$("#ntPtosis").html('');
			    	$("#ntExoftalmo").html('');
			    	$("#ntOftalmo").html('');
			    	$("#ntJotros").html('');
			    	$("#ntPabellon").html('');
			    	$("#ntTimpano").html('');
			    	$("#ntAudicion").html('');
			    	$("#ntSecrecion").html('');
			    	$("#ntMastoide").html('');
			    	$("#ntDolor").html('');
			    	$("#ntOidoOtro").html('');
			    	$("#ntFosas").html('');
			    	$("#ntMucosa").html('');
			    	$("#ntSecreNasal").html('');
			    	$("#ntTabique").html('');
			    	$("#ntSenos").html('');
			    	$("#ntDiasfa").html('');
			    	$("#ntAmigdala").html('');
			    	$("#ntFaringe").html('');
			    	$("#ntAdenoide").html('');
			    	$("#ntPosnasal").html('');
			    	$("#ntDisfagia").html('');
			    	$("#ntRinoOtros").html('');
			    	$("#ntAliento").html('');
			    	$("#ntLabios").html('');
			    	$("#ntEncia").html('');
			    	$("#ntMucosa").html('');
			    	$("#ntLengua").html('');
			    	$("#ntConducto").html('');
			    	$("#ntParalisis").html('');
			    	$("#ntBocaOtro").html('');
			    	$("#ntCmovimiento").html('');
			    	$("#ntTiroide").html('');
			    	$("#ntVasos").html('');
			    	$("#ntTraquea").html('');
			    	$("#ntCuelloOtros").html('');
			    	$("#ntCervical").html('');
			    	$("#ntOccipital").html('');
			    	$("#ntSupra").html('');
			    	$("#ntAxilar").html('');
			    	$("#ntInguinal").html('');
			    	$("#ntEpitroclare").html('');
			    	$("#ntGotros").html('');
			    	$("#ntForma").html('');
			    	$("#ntSimetria").html('');
			    	$("#ntExpansion").html('');
			    	$("#ntPercusion").html('');
			    	$("#ntRuido").html('');
			    	$("#ntPalpitacion").html('');
			    	$("#ntRespiracion").html('');
			    	$("#ntRespMin").html('');
			    	$("#ntToraxOtro").html('');
			    	
			        $("#ntAdmin").html(data); // Mostrar la respuestas del script PHP.*/
			    } 
        })
  
    }
    
   $(document).on('keyup', '#mtvadmin', function(){
         var valorMotivo=$('#mtvadmin').val();
        if (valorMotivo!="" ) {
            validaDatosAdmision(valorMotivo);
        } else {
            validaDatosAdmision();
        }
    });
});

/*Sección datos de diagclin del paciente*/
// Input Nombre familiar
	$(document).on('focus', '#diagclin', function(){
    $(validaDatosAdmision());
    function validaDatosAdmision(diagclin){
        $.ajax({
            url: 'core/validatePhp/validaFormPediatria.php',
            type: 'POST',
            dataType: 'html',
            data: $("#formPediatria").serialize(),
            	success: function(data){
			    	$("#ntAdmin").html('');
			    	$("#ntEnfermedad").html('');
			    	//$("#ntdiagFinal").html('');
			    	$("#ntotroDiag").html('');
			    	$("#ntintervencion").html('');
			    	$("#entintervencion").html('');
			    	$("#ntDia").html('');
			    	$("#ntMes").html('');
			    	$("#ntFechaNac").html('');
			    	$("#ntRespirar").html('');
			    	$("#ntCianosis").html('');
			    	$("#ntFiebre").html('');
			    	$("#ntVomito").html('');
			    	$("#ntIctericia").html('');
			    	$("#ntHemo").html('');
			    	$("#ntConvulsion").html('');
			    	$("#ntMalformac").html('');
			    	$("#ntOftalmia").html('');
			    	$("#ntCoricia").html('');
			    	$("#ntOtroDiag").html('');
			    	$("#ntCabezaMeses").html('');
			    	$("#ntSentar").html('');
			    	$("#ntPararse").html('');
			    	$("#ntCamino").html('');
			    	$("#ntPalabra").html('');
			    	$("#ntControl").html('');
			    	$("#ntDiente").html('');
			    	$("#ntEscuela").html('');
			    	$("#ntProgreso").html('');
			    	$("#ntPeso").html('');
			    	$("#ntDieta").html('');
			    	$("#ntSuenio").html('');
			    	$("#ntSiesta").html('');
			    	$("#ntJuego").html('');
			    	$("ntSexualidad").html('');
			    	$("#ntDedos").html('');
			    	$("#ntComeUnia").html('');
			    	$("#ntRasgos").html('');
			    	$("#ntRecreacion").html('');
			    	$("#ntOcupacion").html('');
			    	$("#ntHotros").html('');
			    	$("#ntViruela").html('');
			    	$("#ntTosferina").html('');
			    	$("#ntDiafteria").html('');
			    	$("#ntTetanos").html('');
			    	$("#ntTifica").html('');
			    	$("#ntBCG").html('');
			    	$("#ntPolio").html('');
			    	$("#ntTuber").html('');
			    	$("#ntOtrras").html('');
			    	$("#ntHfamiliar").html('');
			    	$("#ntcondGeneral").html('');
			    	$("#ntNutricion").html('');
			    	$("#ntcondOtros").html('');
			    	$("#ntColor").html('');
			    	$("#ntHumedad").html('');
			    	$("#ntContextura").html('');
			    	$("#ntPigmento").html('');
			    	$("#ntHidratacion").html('');
			    	$("#ntEquimosis").html('');
			    	$("#ntPetequia").html('');
			    	$("#ntCianosis").html('');
			    	$("#ntErupcion").html('');
			    	$("#ntPaniculo").html('');
			    	$("#ntTurgor").html('');
			    	$("#ntEdema").html('');
			    	$("#ntUnias").html('');
			    	$("#ntNodulo").html('');
			    	$("#ntPelos").html('');
			    	$("#ntVascula").html('');
			    	$("#ntCicatris").html('');
			    	$("#ntUlcera").html('');
			    	$("#ntFistula").html('');
			    	$("#ntInpOtros").html('');
			    	$("#ntConfig").html('');
			    	$("#ntFrontal").html('');
			    	$("#ntSutura").html('');
			    	$("#ntCircunferencia").html('');
			    	$("#ntCabello").html('');
			    	$("#ntCabOtros").html('');
			    	$("#ntConjuntiva").html('');
			    	$("#ntEclerotica").html('');
			    	$("#ntCornea").html('');
			    	$("#ntPupila").html('');
			    	$("#ntMovimiento").html('');
			    	$("#ntDesviacion").html('');
			    	$("#ntNistagmus").html('');
			    	$("#ntPtosis").html('');
			    	$("#ntExoftalmo").html('');
			    	$("#ntOftalmo").html('');
			    	$("#ntJotros").html('');
			    	$("#ntPabellon").html('');
			    	$("#ntTimpano").html('');
			    	$("#ntAudicion").html('');
			    	$("#ntSecrecion").html('');
			    	$("#ntMastoide").html('');
			    	$("#ntDolor").html('');
			    	$("#ntOidoOtro").html('');
			    	$("#ntFosas").html('');
			    	$("#ntMucosa").html('');
			    	$("#ntSecreNasal").html('');
			    	$("#ntTabique").html('');
			    	$("#ntSenos").html('');
			    	$("#ntDiasfa").html('');
			    	$("#ntAmigdala").html('');
			    	$("#ntFaringe").html('');
			    	$("#ntAdenoide").html('');
			    	$("#ntPosnasal").html('');
			    	$("#ntDisfagia").html('');
			    	$("#ntRinoOtros").html('');
			    	$("#ntAliento").html('');
			    	$("#ntLabios").html('');
			    	$("#ntEncia").html('');
			    	$("#ntMucosa").html('');
			    	$("#ntLengua").html('');
			    	$("#ntConducto").html('');
			    	$("#ntParalisis").html('');
			    	$("#ntBocaOtro").html('');
			    	$("#ntCmovimiento").html('');
			    	$("#ntTiroide").html('');
			    	$("#ntVasos").html('');
			    	$("#ntTraquea").html('');
			    	$("#ntCuelloOtros").html('');
			    	$("#ntCervical").html('');
			    	$("#ntOccipital").html('');
			    	$("#ntSupra").html('');
			    	$("#ntAxilar").html('');
			    	$("#ntInguinal").html('');
			    	$("#ntEpitroclare").html('');
			    	$("#ntGotros").html('');
			    	$("#ntForma").html('');
			    	$("#ntSimetria").html('');
			    	$("#ntExpansion").html('');
			    	$("#ntPercusion").html('');
			    	$("#ntRuido").html('');
			    	$("#ntPalpitacion").html('');
			    	$("#ntRespiracion").html('');
			    	$("#ntRespMin").html('');
			    	$("#ntToraxOtro").html('');
			    	
			        $("#ntdiagFinal").html(data); // Mostrar la respuestas del script PHP.*/
			    } 
        })
  
    }
    
   $(document).on('keyup', '#diagclin', function(){
         var valorMotivo=$('#diagclin').val();
        if (valorMotivo!="" ) {
            validaDatosAdmision(valorMotivo);
        } else {
            validaDatosAdmision();
        }
    });
});

/*Sección datos de diagotros del paciente*/
// Input Nombre familiar
	$(document).on('focus', '#otrosdiag', function(){
    $(validaDatosAdmision());
    function validaDatosAdmision(otrosdiag){
        $.ajax({
            url: 'core/validatePhp/validaFormPediatria.php',
            type: 'POST',
            dataType: 'html',
            data: $("#formPediatria").serialize(),
            	success: function(data){
			    	$("#ntAdmin").html('');
			    	$("#ntEnfermedad").html('');
			    	$("#ntdiagFinal").html('');
			    	//$("#ntotroDiag").html('');
			    	$("#ntintervencion").html('');
			    	$("#entintervencion").html('');
			    	$("#ntDia").html('');
			    	$("#ntMes").html('');
			    	$("#ntFechaNac").html('');
			    	$("#ntRespirar").html('');
			    	$("#ntCianosis").html('');
			    	$("#ntFiebre").html('');
			    	$("#ntVomito").html('');
			    	$("#ntIctericia").html('');
			    	$("#ntHemo").html('');
			    	$("#ntConvulsion").html('');
			    	$("#ntMalformac").html('');
			    	$("#ntOftalmia").html('');
			    	$("#ntCoricia").html('');
			    	$("#ntOtroDiag").html('');
			    	$("#ntCabezaMeses").html('');
			    	$("#ntSentar").html('');
			    	$("#ntPararse").html('');
			    	$("#ntCamino").html('');
			    	$("#ntPalabra").html('');
			    	$("#ntControl").html('');
			    	$("#ntDiente").html('');
			    	$("#ntEscuela").html('');
			    	$("#ntProgreso").html('');
			    	$("#ntPeso").html('');
			    	$("#ntDieta").html('');
			    	$("#ntSuenio").html('');
			    	$("#ntSiesta").html('');
			    	$("#ntJuego").html('');
			    	$("ntSexualidad").html('');
			    	$("#ntDedos").html('');
			    	$("#ntComeUnia").html('');
			    	$("#ntRasgos").html('');
			    	$("#ntRecreacion").html('');
			    	$("#ntOcupacion").html('');
			    	$("#ntHotros").html('');
			    	$("#ntViruela").html('');
			    	$("#ntTosferina").html('');
			    	$("#ntDiafteria").html('');
			    	$("#ntTetanos").html('');
			    	$("#ntTifica").html('');
			    	$("#ntBCG").html('');
			    	$("#ntPolio").html('');
			    	$("#ntTuber").html('');
			    	$("#ntOtrras").html('');
			    	$("#ntHfamiliar").html('');
			    	$("#ntcondGeneral").html('');
			    	$("#ntNutricion").html('');
			    	$("#ntcondOtros").html('');
			    	$("#ntColor").html('');
			    	$("#ntHumedad").html('');
			    	$("#ntContextura").html('');
			    	$("#ntPigmento").html('');
			    	$("#ntHidratacion").html('');
			    	$("#ntEquimosis").html('');
			    	$("#ntPetequia").html('');
			    	$("#ntCianosis").html('');
			    	$("#ntErupcion").html('');
			    	$("#ntPaniculo").html('');
			    	$("#ntTurgor").html('');
			    	$("#ntEdema").html('');
			    	$("#ntUnias").html('');
			    	$("#ntNodulo").html('');
			    	$("#ntPelos").html('');
			    	$("#ntVascula").html('');
			    	$("#ntCicatris").html('');
			    	$("#ntUlcera").html('');
			    	$("#ntFistula").html('');
			    	$("#ntInpOtros").html('');
			    	$("#ntConfig").html('');
			    	$("#ntFrontal").html('');
			    	$("#ntSutura").html('');
			    	$("#ntCircunferencia").html('');
			    	$("#ntCabello").html('');
			    	$("#ntCabOtros").html('');
			    	$("#ntConjuntiva").html('');
			    	$("#ntEclerotica").html('');
			    	$("#ntCornea").html('');
			    	$("#ntPupila").html('');
			    	$("#ntMovimiento").html('');
			    	$("#ntDesviacion").html('');
			    	$("#ntNistagmus").html('');
			    	$("#ntPtosis").html('');
			    	$("#ntExoftalmo").html('');
			    	$("#ntOftalmo").html('');
			    	$("#ntJotros").html('');
			    	$("#ntPabellon").html('');
			    	$("#ntTimpano").html('');
			    	$("#ntAudicion").html('');
			    	$("#ntSecrecion").html('');
			    	$("#ntMastoide").html('');
			    	$("#ntDolor").html('');
			    	$("#ntOidoOtro").html('');
			    	$("#ntFosas").html('');
			    	$("#ntMucosa").html('');
			    	$("#ntSecreNasal").html('');
			    	$("#ntTabique").html('');
			    	$("#ntSenos").html('');
			    	$("#ntDiasfa").html('');
			    	$("#ntAmigdala").html('');
			    	$("#ntFaringe").html('');
			    	$("#ntAdenoide").html('');
			    	$("#ntPosnasal").html('');
			    	$("#ntDisfagia").html('');
			    	$("#ntRinoOtros").html('');
			    	$("#ntAliento").html('');
			    	$("#ntLabios").html('');
			    	$("#ntEncia").html('');
			    	$("#ntMucosa").html('');
			    	$("#ntLengua").html('');
			    	$("#ntConducto").html('');
			    	$("#ntParalisis").html('');
			    	$("#ntBocaOtro").html('');
			    	$("#ntCmovimiento").html('');
			    	$("#ntTiroide").html('');
			    	$("#ntVasos").html('');
			    	$("#ntTraquea").html('');
			    	$("#ntCuelloOtros").html('');
			    	$("#ntCervical").html('');
			    	$("#ntOccipital").html('');
			    	$("#ntSupra").html('');
			    	$("#ntAxilar").html('');
			    	$("#ntInguinal").html('');
			    	$("#ntEpitroclare").html('');
			    	$("#ntGotros").html('');
			    	$("#ntForma").html('');
			    	$("#ntSimetria").html('');
			    	$("#ntExpansion").html('');
			    	$("#ntPercusion").html('');
			    	$("#ntRuido").html('');
			    	$("#ntPalpitacion").html('');
			    	$("#ntRespiracion").html('');
			    	$("#ntRespMin").html('');
			    	$("#ntToraxOtro").html('');
			    	
			        $("#ntotroDiag").html(data); // Mostrar la respuestas del script PHP.*/
			    } 
        })
  
    }
    
   $(document).on('keyup', '#otrosdiag', function(){
         var valorMotivo=$('#otrosdiag').val();
        if (valorMotivo!="" ) {
            validaDatosAdmision(valorMotivo);
        } else {
            validaDatosAdmision();
        }
    });
});
/*********************************************************************************************************************/
//Formulario de reportes pacientes x doctor
	$(document).on('focus', '#docRpt', function(){
    $(validadocRpt());
    function validadocRpt(docRpt){
        $.ajax({
			// url: '../../core/validatePhp/validaCorreo.php',
            url: '?view=models&action=reporteDocA',
            type: 'POST',
            dataType: 'html',
            data: $("#formRptOne").serialize(),
            	success: function(data){
			        $("#resultRpt").html(data); // Mostrar la respuestas del script PHP.
			    } 
        })
  
    }
    
    $(document).on('change', '#docRpt', function(){
        var valordocRpt=$('#docRpt').val();
        if (valordocRpt!="" ) {
            validadocRpt(valordocRpt);
        } else {
            validadocRpt();
        }
    });
});
//Formulario de reportes pacientes por año
	$(document).on('focus', '#pacRpt', function(){
    $(validapacRpt());
    function validapacRpt(pacRpt){
        $.ajax({
			// url: '../../core/validatePhp/validaCorreo.php',
            url: '?view=models&action=reporteDocA',
            type: 'POST',
            dataType: 'html',
            data: $("#formRptTwo").serialize(),
            	success: function(data){
			        $("#resultRptPac").html(data); // Mostrar la respuestas del script PHP.
			    } 
        })
  
    }
    
    $(document).on('change', '#pacRpt', function(){
        var valorpacRpt=$('#pacRpt').val();
        if (valorpacRpt!="" ) {
            validapacRpt(valorpacRpt);
        } else {
            validapacRpt();
        }
    });
});
//Formulario de reportes pacientes por año
	$(document).on('focus', '#pacRptMes', function(){
    $(validapacRptMes());
    function validapacRptMes(pacRptMes){
        $.ajax({
			// url: '../../core/validatePhp/validaCorreo.php',
            url: '?view=models&action=reporteDocA',
            type: 'POST',
            dataType: 'html',
            data: $("#formRptTwo").serialize(),
            	success: function(data){
			        $("#resultRptPac").html(data); // Mostrar la respuestas del script PHP.
			    } 
        })
  
    }
    
    $(document).on('change', '#pacRptMes', function(){
        var valorpacRptMes=$('#pacRptMes').val();
        if (valorpacRptMes!="" ) {
            validapacRptMes(valorpacRptMes);
        } else {
            validapacRptMes();
        }
    });
});

/*********************************************************************************************************************/
  function maxLengthCheck(object)
  {
    if (object.value.length > object.maxLength)
      object.value = object.value.slice(0, object.maxLength)
  }s
//Formulario "busqueda" Perfil
$(document).on('focus', '#cedulaPac', function(){
    $(validacedulaPac());
    function validacedulaPac(cedulaPac){
        $.ajax({
			// url: '../../core/validatePhp/validaCorreo.php',
            url: 'core/validatePhp/validaBusquedaPersonal.php',
            type: 'POST',
            dataType: 'html',
            data: $("#fperfil").serialize(),
            	success: function(data){
			        $("#ntcedulaPac").html(data); // Mostrar la respuestas del script PHP.
			    } 
        })

    }
    
    $(document).on('keyup', '#cedulaPac', function(){
        var valorcedulaPac=$('#cedulaPac').val();
        if (valorcedulaPac!="" ) {
            validacedulaPac(valorcedulaPac);
        } else {
            validacedulaPac();
        }
    });
});
/*********************************************************************************************************************/
