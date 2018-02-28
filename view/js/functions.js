

$(function(){
	var atual_fs, next_fs, prev_fs;
	var formulario = $('form[name=formulario]');

	function next(elem){
		atual_fs = $(elem).parent();
		next_fs = $(elem).parent().next();

		$('#progress li').eq($('fieldset').index(next_fs)).addClass('ativo');
		atual_fs.hide(800);
		next_fs.show(800);
	}

	$('.prev').click(function(){
		atual_fs = $(this).parent();
		prev_fs = $(this).parent().prev();

		$('#progress li').eq($('fieldset').index(atual_fs)).removeClass('ativo');
		atual_fs.hide(800);
		prev_fs.show(800);
	});

	$('input[name=next1]').click(function(){
		$('.resp').html('');
			next($(this));
	});


	$('input[name=next2]').click(function(){

      	$('.resp').html('');
		next($(this));


	});

	$('input[name=next3]').click(function(){
			$('.resp').html('');
			next($(this));
	});
	
		$('input[name=next4]').click(function(){
			$('.resp').html('');
			next($(this));
	});
	
		$('input[name=next5]').click(function(){
			$('.resp').html('');
			next($(this));
	});
	
		$('input[name=next6]').click(function(){
			$('.resp').html('');
			next($(this));
	});
	
		$('input[name=next7]').click(function(){
			$('.resp').html('');
			next($(this));
	});
	
	$('input[type=submit]').click(function(evento){
	//este esta malo por fata que de verdad registre los datos
			$('.resp').html('<div class="ok"><p>Se han Registrado los Datos /este esta malo por fata que de verdad registre los datos</p></div>');
		
		evento.preventDefault();
	});
});