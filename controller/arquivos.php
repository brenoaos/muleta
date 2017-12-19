<?php
	include("connDB.php");
	
	$dados = $_POST['data'];
		if(isset($_GET['tt'])){
			$dados = $_GET['tt'];
		}
	$retorno;
	
	$querySelect = "SELECT * FROM `arquivos` WHERE `nome` = '" . strtolower($dados['value'])."'";
	$queryInsert = "INSERT INTO `arquivos`(`nome`, `nome_externo`, `caminho`, `descricao`) VALUES ('" . strtolower($dados['nome'])."','" . $dados['exte']."','" . strtolower($dados['path'])."','" . $dados['desc']."')";
	$queryUpdate = "UPDATE `arquivos` SET `nome`='".strtolower($dados['nome'])."',`nome_externo`='" . $dados['exte']."',`caminho`='" . strtolower($dados['path'])."',`descricao`='" . $dados['desc']."',`data_alteracao`='".date("Y-m-d h:m:i")."' WHERE ID = '".$dados['codigo']."'";
	$querySearch = "SELECT * FROM `arquivos` WHERE `nome` like '%".strtolower($dados['value'])."%' or `nome_externo` like '%".strtolower($dados['value'])."%' or `descricao` like '%".strtolower($dados['value'])."%'";
	
	if($dados['type'] == "Find"){
		$consulta = $banco->query($querySelect);
		if($consulta->num_rows < 1){
			$retorno['code'] = 0;
			$retorno['mensagem'] = "Arquivo " . strtoupper($dados['value']) . " não encontrado"; 
		}
		else{
			
			$retorno['code'] = 1;
			$retorno['mensagem'] = "Arquivo " . strtoupper($dados['value']) . " encontrado";
			$retorno['dados'] = $consulta->fetch_assoc();
		}
	}
	
	
	if($dados['type'] == "Insert"){
		if($insert = $banco->query($queryInsert)){
			$retorno['code'] = 1;
			$retorno['mensagem'] = "Inserido";
		}
		else{
			$retorno['code'] = 0;
			$retorno['mensagem'] = "Registro não pode ser inserido \n".$banco->error;
		}
		
	}
	
	if($dados['type'] == "Update"){
		if($insert = $banco->query($queryUpdate)){
			$retorno['code'] = 1;
			$retorno['mensagem'] = "Atualizado";
			$retorno['sql'] = $queryUpdate;
		}
		else{
			$retorno['code'] = 0;
			$retorno['mensagem'] = "Registro não pode ser Atualizado \n".$banco->error;
			$retorno['sql'] = $queryUpdate;
		}
		
	}
	
	if($dados['type'] == "Search"){
		$consulta = $banco->query($querySearch);
		$retorno['sql'] = $querySearch;
		$retorno['rows'] = $consulta->num_rows;
		$retorno['info'];
		
		if($retorno['rows'] > 0){
			$cont = 1;
			$retorno['mensagem'] = "Encontrado(os) ".$retorno['rows']." resultados para ".$dados['value'];
			while($ret = $consulta->fetch_assoc()){
				
				$retorno['info'][$cont]['id'] = $ret["ID"];
				$retorno['info'][$cont]['nome'] = $ret["nome"];
				$retorno['info'][$cont]['nome_externo'] = $ret["nome_externo"];
				$retorno['info'][$cont]['descricao'] = $ret["descricao"];
				$retorno['info'][$cont]['caminho'] = $ret["caminho"];
			
				$cont++;
			}
		}
		else{
			$retorno['mensagem'] = "Nada encontrado com ".$dados['value'];
		}
		
	}

	echo json_encode($retorno);
?>