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

	

	




});
