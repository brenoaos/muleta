<?php
	/*
	 * Incluir o parametros para a base de dados do sistema de arqivos
	 */
	
		//HOST DO BANCO DE DADOS - Endereço
		$host	= "mysql.hostinger.com.br";
	
		//Usuario DO BANCO DE DADOS - Nome de usuario
		$user	= "u308192804_super";
	
		//Senha DO BANCO DE DADOS - 
		$pass	= "123456789";
		
		//Senha DO BANCO DE DADOS - 
		$base	= "u308192804_atend";
	
	/*
	 * Conexao
	 */

	 $banco = new mysqli($host,$user,$pass,$base);
	 
?>