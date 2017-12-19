$(document).ready(function(){

	var senha, confirmacao, user;

	//padrao
	$('#submit:button').addClass('disabled');
	$('#submit:button').attr('disabled','disabled');
	

	//controllers de validação da inserção de dados

	$(':input[type=password]').keyup(function(){
		user	= $('#inputEmail').val();	
		pass 	= $('#inputPassword').val();
		passC 	= $('#inputConfirmacao').val();
		 

		if(pass != passC){
			$('#submit:button').addClass('disabled');
			$('#submit:button').attr('disabled','disabled');
			$('.confirmacao').addClass('has-error');
		//	console.log('As senhas não conferem');
		}

		else if(user == ""){
			$('#submit:button').addClass('disabled');
			$('#submit:button').attr('disabled','disabled');
			$('.confirmacao').addClass('has-error');
		//	console.log('Usuario não preenchido');

		}

		else if(pass.length <= 5){
			$('#submit:button').addClass('disabled');
			$('#submit:button').attr('disabled','disabled');
			$('.confirmacao').addClass('has-error');
		//	console.log('No minimo 6 posições para senha');

		}

		else{

		//	console.log('Campos preenchidos corretamente!');
			$('#submit:button').removeClass('disabled');
			$('#submit:button').removeAttr('disabled','disabled');
			$('.confirmacao').removeClass('has-error');

		}

			

	});

	

	$('#submit:button').click(function(){
		user	= $('#inputEmail').val();	
		pass 	= $('#inputPassword').val();
		passC 	= $('#inputConfirmacao').val();

	//	console.log('usuario: ' + user);
	//	console.log('senha:' + pass);

		var cadastro = {

						'type'	: "Insert",
						'user'	: user,
						'pass'	: pass

					};

					

	//	console.log(cadastro);

		

		$.post("controller/usuario.php",
			{
				data : cadastro
			},

			function(data, status){
			//	console.log(data);
				
				pass.value = "";
				passC.value = "";

				if(data.code == 1){
					alert(data.mensagem);
					location.href = "login.php"
				}
				else{

				}

			},

			"json"

			);

			

	});

});

