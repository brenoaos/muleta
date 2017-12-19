<?php
	require('connBD.php');
	
	class Usuario{
		
		$query	= "";
		$ret	= array("status" => "", "mensagem" => "" );
		$user	= "";
		$pass	= "";
		$mail	= "";
		$lemb	= "";
		$key	= "";
		
		function __construct($dados){
			$user = $dados['usuario'];
			$pass = $dados['senha'];
			$mail = $dados['email'];
			$lemb = $dados['lembrar'];
		}
		
		function logar(){
			if(consulta(0) === $pass){
				criaCookieSession();
				$ret['status'] = 0;
				$ret['mensagem'] = "";
				$ret['index'] = "view";
			}
			else{
				$ret['status'] = 1;
				$ret['mensagem'] = "Usuario ou senha invalido!";
			}
			
			echo json_encode($ret);
		}
		
		function deslogar(){
			setcookie("keySession",'',0,'/');
		}
		
		function estaLogado(){
			if($_COOKIE['keySession'] == consulta(1))
			{
				$ret['status']	= 0;
				$ret['mensagem']= "Usuario esta logado!"
			}
			else{
				$ret['status']	= 1;
			}
		}
		
		function cadastrar(){
			//numero de registro para esse usuario
			$numRows = consulta(2);
			if()
		}
		
		function lembrarSenha($usuario){
			
		}
		
		function infoConta($usuario){
			
		}
		
		function criaCookieSession(){
			$tempo = "";
			if($lemb){
				tempo = 10000;
			}
			setcookie("keySession",query(1),$tempo,'/');
		}
		
		function consulta($tipo){
			switch($tipo){
				case 0	: 	$query  = "SELECT senha_usuario from usuSis where email_usuario = " . $user;
							return	= mysqli_query($conn,$query);
							break;
				
				case 2	:	$query = "SELECT key from usuSis where email_usuario = " . $user;
							break;
							
				case 10 : 	$query = "SELECT key from usuSis where email_usuario = " . $user;
							return	= mysqli_query($conn,$query);
							break;
				
				case 20	:	$query = "INSERT INTO `usuSis`(`nome_usuario`, `senha_usuario`, `email_usuario`, `key`, `permissoes`, `data_inclusao`, `contribuicoes`) VALUES ("'.$user.'","'..'","'..'","'..'","'..'","'..'",)"
				
				case 99 : 	$query = "SELECT * from usuSis";
			}
		
			return $query;
		}
		
	}


?>