$(document).ready(function(){

	// MOSTRANDO Y OCULTANDO MENU 
	$('#button-menu').click(function(){
		if($('#button-menu').attr('class') == 'fas fa-bars fa-2x fuxia' ){

			$('.navegacion').css({'width':'100%','background':'rgba(0,0,0,.5)'}); // Mostramos al fondo transparente		
			$('#button-menu').removeClass('fas fa-bars fa-2x fuxia').addClass('fas fa-times-circle fa-2x'); // Agregamos el icono X
			$('.navegacion .menu').css({'left':'0px'}); // Mostramos el menu


		}else{

			$('.navegacion').css({'width':'0%', 'background':'rgba(0,0,0,.0)'}); // Ocultamos el fonto transparente
			$('#button-menu').removeClass('fas fa-times-circle fa-2x').addClass('fas fa-bars fa-2x fuxia'); // Agregamos el icono del Menu
			$('.navegacion .menu').css({'left':'-320px'}); // Ocultamos el Menu
		}
	});

	$('nav.navegacion').click(function(){
		$('.navegacion').css({'width':'0%', 'background':'rgba(0,0,0,.0)'}); // Ocultamos el fonto transparente
		$('#button-menu').removeClass('fas fa-times-circle fa-2x').addClass('fas fa-bars fa-2x fuxia'); // Agregamos el icono del Menu
		$('.navegacion .menu').css({'left':'-320px'}); // Ocultamos el Menu

	});
	// Tooltip
	$(function () {
		$('[data-toggle="tooltip"]').tooltip()
	});
	// register
	$('#registerModal').on('shown.bs.modal', function (e) {
		$('#submitRegister').click(function(event){
			event.preventDefault();
			$( '#name-error' ).html( "" );
			$( '#email-error' ).html( "" );
			$( '#password-error' ).html( "" );
			$( '#login-password-error' ).html( "" );
			$( '#login-email-error' ).html( "" );
			var route 		= $('#route').val();
			var token 		= $("input[name=_token]").val();
			var name 		= $("input[name=name]").val();
			var email 		= $("input[name=email]").val();
			var password 	= $("input[name=password]").val();
			var password_confirmation 	= $("input[name=password_confirmation]").val();
			var data1 =
			{
				'_token':token,
				'name':name,
				'email':email,
				'password':password,
				'password_confirmation':password_confirmation,
			};

			$.ajax(route, {
				type: 'POST',
				dataType: 'json',
				data: data1,
				cache: false,
			}).done(function(data1, textStatus, jqXHR) {
				console.log('guardado satisfactoriamente');
						//limpiar el modal
						$("input[name=name]").val( "" );
						$("input[name=email]").val( "" );
						$("input[name=password]").val( "" );
						$("input[name=password_confirmation]").val( "" );
						$('#registerModal').modal('hide');
						swal("Guardado!", "<h2> Revisa tu correo para verificar tu cuenta! </h2>", "success");
					}).fail(function(jqXHR, textStatus, errorThrown) {
						console.error( jqXHR.responseJSON.errors, textStatus );

						if(jqXHR.responseJSON.errors) {
							if(jqXHR.responseJSON.errors.name){
								$( '#name-error' ).html( jqXHR.responseJSON.errors.name[0] );
							}
							if(jqXHR.responseJSON.errors.email){
								$( '#email-error' ).html( jqXHR.responseJSON.errors.email[0] );
							}
							if(jqXHR.responseJSON.errors.password){
								$( '#password-error' ).html( jqXHR.responseJSON.errors.password[0] );
							}
						}
					})
				});
	});

	// login
	$('#loginModal').on('shown.bs.modal', function (e) {
		$('#submitLogin').click(function(event){
			event.preventDefault();
			$( '#name-error' ).html( "" );
			$( '#email-error' ).html( "" );
			$( '#password-error' ).html( "" );
			$( '#login-password-error' ).html( "" );
			$( '#login-email-error' ).html( "" );
			var route 		= $('#route').val();
			var token 		= $("input[name=_token]").val();
			var email 		= $("input[name=email]").val();
			var password 	= $("input[name=password]").val();
			var data =
			{
				'_token':token,
				'email':email,
				'password':password,
			};

			$.ajax(route, {
				type: 'POST',
				dataType: 'json',
				data: data,
				cache: false,
			})
			
			     // Put the results in a div
			     .done(function( data ) {
			     	var SITE_URL = window.location.host;
			     	console.log(data.intended)
			     	console.log('logueado satisfactoriamente');
			     	$("#login-email").val( "" );
			     	$("#login-password").val( "" );
			     	$('#loginModal').modal('hide');
			     	window.location.href = data.intended;
			     })
			     .fail(function(jqXHR, textStatus, errorThrown) {
			     	console.error( jqXHR.responseJSON.errors, textStatus );
			     	if(jqXHR.responseJSON.errors) {

			     		if(jqXHR.responseJSON.errors.email){
			     			$( '#login-email-error' ).html( jqXHR.responseJSON.errors.email[0] );
			     		}
			     		if(jqXHR.responseJSON.errors.password){
			     			$( '#login-password-error' ).html( jqXHR.responseJSON.errors.password[0] );
			     		}
			     	}
			     })
			 });
	});




});
