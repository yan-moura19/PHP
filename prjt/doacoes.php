<?php
	include("conexao.php");
  $pessoa = intval($_GET['pessoa']);
  session_start();
  require 'loginn/secury.php';
  ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="..\prjt\estilo\styles.css">
	<title>Doações</title>
</head>

<style>
	body{
		background-image: url("../prjt/imgs/fundo2.png");
		background-repeat: no-repeat;
		background-size: 100% cover;
	}

	#fund{
			position: relative;
			width: 500px;
			height: 500px;
			top: 20%;
			left: 33%;
		}
		h1{
			font-family: Schola;
		}


</style>



<body>


<!-- Começo do menu-->


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="..\prjt\index.php">VAGALUME</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">


      <li class="nav-item active">
        <a class="nav-link" href="..\prjt\index.php">Início <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="..\prjt\quemSomos.php">Quem somos?</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="..\prjt\loginn\login.php">Pedidos</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="pedir.php">Pedir</a>
      </li>

    </ul>
    <p class="text-success my-2 my-sm-0" >Usuario: <?php echo $_SESSION['nameuser']; ?></p>
    <button type="button" style="height: 40px;" name="sair" class="btn btn-light my-2 my-sm-0"><a href="loginn/deslogar.php">Sair</a> </button>

    <button type="button" name="cadastro" class="btn btn-light"><a href="cadastro.php">Cadastro</a></button>

    
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Digite sua busca..." aria-label="Search">
      <button class="btn btn-light my-2 my-sm-0" type="submit">Procurar</button>
    </form>

  </div>
</nav>

<!-- Aqui acaba o menu-->



<!-- Form da doação-->


<div id="fund">
<form name="dadosPessoa" action="conexao.php" method="POST">
<!--Dados do doador-->
<strong><h1 align="center"><span style="color: white;">Seus Dados</span></h1></strong>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Nome:</span>
  </div>
  <input type="text" class="form-control" placeholder="Digite o seu nome completo" aria-label="Digite" name="nome" value="<?php echo $_SESSION['nameuser']; ?>" aria-describedby="basic-addon1" readonly="true">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Email:</span>
  </div>
  <input type="text" class="form-control" placeholder="Digite o seu email pessoal" aria-label="Digite" name="email" value="<?php echo $_SESSION['emailuser']; ?>" aria-describedby="basic-addon1" readonly="true">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Cidade:</span>
  </div>
  <input type="text" class="form-control" placeholder="Digite o nome da cidade em que você mora" aria-label="Digite" name="cidade" value="" aria-describedby="basic-addon1">
</div>
<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">Senha:</span>
    <input size="19px" type="password" name="senha">

  </div>
</div>

<br>
<!--Fim da table-->
<strong><span style="color: white;">------------------------------------------------------------------------------</span></strong>

<strong><h1 align="center"><span style="color: white;">Dados da Doação</span></h1></strong>


<!-- Dados da doação-->
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Colaboração:</span>
  </div>
  <input type="text" class="form-control" placeholder="Digite como você pode colaborar" aria-label="Digite como você pode colaborar" name="colaborado" value="" aria-describedby="basic-addon1">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Código do  pedido:</span>
  </div>
  <input type="text" class="form-control" placeholder="Digite o código do pedido" aria-label="Digite" name="numeroPedido" value="<?php echo($_GET['pessoa']); ?>" aria-describedby="basic-addon1" readonly="true">
</div>

<input type="hidden" name="acao" value="doar" />
<input class="btn btn-primary" type="submit" name="Enviar" value= "Enviar"/>
</form>

<!-- Fim do form-->

</div>

























<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>