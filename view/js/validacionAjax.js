//Este archivo captura los datos enviados por el formulario de pediatria
//y los envia al archivo php que realizara la validacion
    $(function()
    {
    	$("#adPaciente").click(function(){
			//C:/xampp/htdocs/workspace/view/js/ajax.js
			var url = "core/validatePhp/ajax.php"; // El script a dónde se realizará la petición.
    		$.ajax({
				type: "POST",
				   url: url,
				   data: $("#formPediatria").serialize(), // Adjuntar los campos del formulario enviado.
				   success: function(data)
           {
               $("#motivoadmin").html('');
               $("#enfactual").html('');
			 //  $("#diag").html('');
			 //  //el radio del formulario
			 //  $("#otrosSalida").html('');
			 //  $("#detallesSalida").html('');
			 //  $("#diagclin").html('');
			 //  $("#otrosdiag").html('');
			 //  $("#interPrincipal").html('');
			 //  $("#otrasInter").html('');
			 //  //fecha de salida del paciente
			 //  $("#fechaSalida").html('');
			 //  $("#medicoTratante").html('');
			 //  $("#jefeServ").html('');
			 //  $("#especificar").html('');
			   

               $("#mensaje").html(data); // Mostrar la respuestas del script PHP.
           }
         });

    return false; // Evitar ejecutar el submit del formulario.
 });
    });
        $(function()
    {
    	$("#btn_login").click(function(){
			//C:/xampp/htdocs/workspace/view/js/ajax.js
			var url = "core/validatePhp/nuevoUsuarioAjax.php"; // El script a dónde se realizará la petición.
    		$.ajax({
				type: "POST",
				   url: url,
				   data: $("#formNewUsuario").serialize(), // Adjuntar los campos del formulario enviado.
				   success: function(data)
           {
               $("#usuario").html('');
               $("#nuevoUsuMsg").html(data); // Mostrar la respuestas del script PHP.
           }
         });

    return false; // Evitar ejecutar el submit del formulario.
 });
    });
        $(function()
    {
    	$("#btn_login_acc").click(function(){
			//C:/xampp/htdocs/workspace/view/js/ajax.js
			var url = "core/validatePhp/validacionLogin.php"; // El script a dónde se realizará la petición.
    		$.ajax({
				type: "POST",
				   url: url,
				   data: $("#login_form").serialize(), // Adjuntar los campos del formulario enviado.
				   success: function(data)
           {
               $("#correo").html('');
               $("#password").html('');
               $("#nuevoUsuMsg").html(data); // Mostrar la respuestas del script PHP.
           }
         });

    return false; // Evitar ejecutar el submit del formulario.
 });
    });