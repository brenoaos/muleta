$(document).ready(function(){
	//padrao
	$('button[type=submit]').addClass('disabled');
	$('button[type=submit]').attr('disabled','disabled');
	
	console.log('Controle iniciado!');
	
	//controllers de validação da inserção de dados
	$(':input[type=password]').keyup(function(){
		var senha, confirmacao, user;
			
		senha 	= $('#inputPassword').val();
		confir = $('#inputConfirmacao').val();
		user	= $('#inputEmail').val();
			 
		if(user == "" || senha.length <= 0){
			$('button[type=submit]').addClass('disabled');
			$('button[type=submit]').attr('disabled','disabled');
			$('.confirmacao').addClass('has-error');
			
			console.log('Usuario ou senha não preenchido!');
		}
		else{
			console.log('Campos preenchidos corretamente!');
			$('button[type=submit]').removeClass('disabled');
			$('button[type=submit]').removeAttr('disabled','disabled');
			$('.confirmacao').removeClass('has-error');
		}
			
	});
	
	$('button[type=submit]').click(function(){
		alert('click');
	});
	
	
	
});