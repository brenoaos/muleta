<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>Avanço Muleta</title>

    <!-- Bootstrap -->
    <link rel="icon" href="img/favicon.png">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="  crossorigin="anonymous"></script>
    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="/muleta">Muleta</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav">
			<li>
				<li><a href="?p=<?php echo base64_encode(date("Y-m-d").'|arquivos') ?>">Arquivos</a></li>
			</li>
			
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">NF-e <span class="caret"></span></a>
			  <ul class="dropdown-menu">
				<li><a href="?p=<?php echo base64_encode(date("Y-m-d").'|gerachave') ?>">Gerar Ch.Acesso</a></li>
				<li><a href="?p=<?php echo base64_encode(date("Y-m-d").'|validachave') ?>">Valida Ch.Acesso</a></li>
			  </ul>
			</li>
			
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Diversos<span class="caret"></span></a>
			  <ul class="dropdown-menu">
				<li><a href="?p=<?php echo base64_encode(date("Y-m-d").'|gerachave') ?>">Gerar CPF/CNPJ</a></li>
				<li><a href="?p=<?php echo base64_encode(date("Y-m-d").'|validachave') ?>">Validar CPF/CNPJ</a></li>
			  </ul>
			</li>
						
			</div>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
    
	<!-- content program -->
	<div class="container">
		<?php
		 
			$t = explode('|',base64_decode($_GET['p']));
			echo '<script>console.log("'.$_GET['p'].'")</script>';
			echo '<script>console.log("'.base64_decode($_GET['p']).'")</script>';
			
			$dataHoje = date('Y-m-d');

			$pagina =  $t[1] == "" ?  "view/home.php" : "view/".$t[1].".php";

			if(strtotime($dataHoje) == strtotime($t[0])){

				if(file_exists($pagina)){
					include $pagina;
				}
				else{
					echo "<h1>Oops!.. Página não encontrada</h1>";
				}
			}
			else{
				
				if(!isset($t[0])){
				 echo "<h1>Oops!.. Página não encontrada</h1>";
				}
				else{
					
					include $pagina;
				}
				
				
				
				
			}
		 
		 ?>
	
	</div>
    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <!-- <script src="js/bootstrap.min.js"></script> -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
