<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	 
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		
		<meta name="author" content="">
		
		<!-- <link rel="icon" href="../../favicon.ico"> -->
	 
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		
		<title>ENTRAR</title>

		<!-- Bootstrap core CSS -->
		<link href="bootstrap.min.css" rel="stylesheet">

		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<link href="ie10-viewport-bug-workaround.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="signin.css" rel="stylesheet">

		<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
		<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
		<script src="ie-emulation-modes-warning.js"></script>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<style>
		body{
			background-image: url("../imgs/fundo2.png");
			background-repeat: no-repeat;
			background-size: cover; 
		}
		#plgem{
			position: relative;
			background-color: #228B22;
			top: 0;
			height: 60px;
			width: 100%;
			z-index: 0;
		}
		#log{
			position: relative;
			left: 50%;
			height: 20px;
		}
		#fund{
			position: relative;
			width: 500px;
			height: 500px;
			padding-top: 5%;
			left: 33%;
		}
		#menu{
			position: relative;
			top: -42px;
		}
	</style>
	</head>
<?php
unset($_SESSION['iduser'],
$_SESSION['nameuser'],$_SESSION['emailuser']);

?>
	<body background="https://i.imgur.com/dXtatdd.jpg" class="text-center">
		<div id="menu">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="..\index.php">VAGALUME</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">

		    <ul class="navbar-nav mr-auto">

		      <li class="nav-item active">
		        <a class="nav-link" href="..\index.php">Início <span class="sr-only">(current)</span></a>
		      </li>

		      <li class="nav-item">
		        <a class="nav-link" href="..\quemSomos.php">Quem somos?</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="login.php">Pedidos</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="../pedir.php">Pedir</a>
		      </li>
		      
		    </ul>
		    

		    <button type="button" name="cadastro" class="btn btn-light"><a href="../cadastro.php">Cadastro</a></button>
		    
		    <form class="form-inline my-2 my-lg-0">
      			<input class="form-control mr-sm-2" type="search" placeholder="Digite sua busca..." aria-label="Search">
      			<button class="btn btn-light my-2 my-sm-0" type="submit">Procurar</button>
    		</form>
		  </div>
		</nav>
	</div>

		<div class="container">

			<form class="form-signin" method="post" action="proc_login.php">
			 
				<h2 class="form-signin-heading"><span style="color: white;">LOGIN</span></h2>
				<label for="inputEmail" class="sr-only">Email</label>
				<input type="email" id="inputEmail" class="form-control" placeholder="Digite seu email" name="emailc" required autofocus> <br>
				
				<label for="inputPassword" class="sr-only">Senha</label>
				<input type="password" id="inputPassword" class="form-control" placeholder="Digite sua senha" name="senhac" required> <br>
					
				<button class="btn btn-lg btn-primary btn-block" type="submit">ENTRAR</button>
				<br>
				<br>
				<a style="color: white;" href="../cadastro.php"><u>Cadastre-se aqui! :)</u></a>
			</form>
			
			 <p class="text-center text-danger">
				 <?php
					if (isset($_SESSION['errorlogin'] )) {
						echo $_SESSION['errorlogin'];
						unset($_SESSION['errorlogin']);
					}
				 ?>
			 </p>

			 <p class="text-center text-danger">
				<?php
					if (isset($_SESSION['../loginn/secury'] )) {
						echo $_SESSION['../loginn/../loginn/secury'];
						unset($_SESSION['../loginn/secury']);
						}
					?>
				</p>
			 
				

		</div> <!-- /container -->


		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="ie10-viewport-bug-workaround.js"></script>
	</body>
</html>
