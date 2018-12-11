 $('body').on('click', '#submitForm', function(){
 	var registerForm = $("#Register");
 	var formData = registerForm.serialize();
 	$( '#name-error' ).html( "" );
 	$( '#email-error' ).html( "" );
 	$( '#password-error' ).html( "" );

 	$.ajax({
 		url:'/register',
 		type:'POST',
 		data:formData,
 		success:function(data) {
 			console.log(data);
 			if(data.errors) {
 				if(data.errors.name){
 					$( '#name-error' ).html( data.errors.name[0] );
 				}
 				if(data.errors.email){
 					$( '#email-error' ).html( data.errors.email[0] );
 				}
 				if(data.errors.password){
 					$( '#password-error' ).html( data.errors.password[0] );
 				}
 				
 			}
 			if(data.success) {
 				$('#success-msg').removeClass('hide');
 				setInterval(function(){ 
 					$('#SignUp').modal('hide');
 					$('#success-msg').addClass('hide');
 				}, 3000);
 			}
 		},
 	});
 });
