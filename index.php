<<?php 
  header("location: sistema.php");

 ?>

<!DOCTYPE html>
<html lang="pt-br"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Atendimento</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
		
	<script src="js/login.js"></script>
  </head>

  <body>

    <div class="container">

      <form class="form-signin">
        <h2 class="form-signin-heading">Login</h2>
        
		<div class="input-group">
			<input type="text" class="form-control" placeholder="Email" aria-describedby="basic-addon2">
			<span class="input-group-addon" id="basic-addon2">@avancoinfo.com.br</span>
		</div>
        
		
        <label for="inputPassword" class="sr-only">Senha</label>
        <input id="inputPassword" class="form-control" placeholder="Senha" required="" type="password">
        <div class="checkbox">
          <label>
            <input value="remember-me" type="checkbox"> Lembrar-me.
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      </form>
	  <fieldset style="text-align:center;">
		<legend></legend>
		<h4>Ainda não é cadastrado?. <a href="index.html">Cadastrar-se!</a></h4>
	  </fieldset>
	  

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  

</body></html>