<?php

	include("connDB.php");
	
	$dados = $_POST['data'];
		if(isset($_GET['dados'])){
			$dados = $_GET['dados'];
		}

	//VARIAVEL DE RETORNO
	$retorno;

	//VARIAVEL COM O CODIGO DE VERIFICAÇÃO
	$codigoVerificacao = $dados['user']."&".strtotime("+1 day");
	$codigoVerificacao64 = base64_encode($codigoVerificacao);

	//SQL DE BUSCA DE USUARIO JÁ CADASTRADO
	$buscaUsuarioDB = "SELECT * FROM usuario WHERE username = '".$dados['user']."'";

	//SQL DE CADASTRO DE UM NOVO USUARIO NO BANCO DE DADOS
	$cadastraUsuarioDB ="INSERT INTO usuario(username,password, email, inclusao, situacao,codigoVerificacao) VALUES('".$dados['user']."','".$dados['pass']."','".$dados['user']."@avancoinfo.com.br','".date('Y-m-d H:m:s')."','pendente','".$codigoVerificacao64."')";

	if($dados['type'] == "Insert"){
		$consulta = $banco->query($buscaUsuarioDB);
	
		if($consulta->num_rows >= 1){
			$retorno['code'] = 0;
			$retorno['mensagem'] = "Ja existe o usuario ".$dados['user']." no banco de dados";
			$retorno['codeError'] = $cadastro->errno;
			$retorno['error'] = $cadastro->error;
			$retorno['sql'] = $buscaUsuarioDB;
			
		}
		else{

			if($cadastro = $banco->query($cadastraUsuarioDB)){
				$retorno['code'] = 1;
				$retorno['mensagem'] = "Usuario cadastrado com sucesso!\nUm email de verificação foi lhe enviado para sua caixa de entrada";
			//	$enviaEmail->cadastroUsuario('inclusão',$dados['user']);
			}
			else{
				$retorno['code'] = 0;
				$retorno['codeError'] = $cadastro->errno;
				$retorno['mensagem'] = $cadastro->error;
				$retorno['sql']	= $buscaUsuarioDB;
			}
		}
	}
	else if($dados['type'] == 'Checker'){
		$consulta = $banco->query($buscaUsuarioDB);
		if($consulta->num_rows == 1){
			var_dump($consulta);
		}
	}

//	echo json_encode($consulta);
	echo json_encode($retorno);

?>

