<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>Pedir</title>
	<style>
		body{
			background-image: url("../prjt/imgs/fundo3.png");
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
			padding-top: 40px;
			left: 33%;
		}

	</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="..\prjt\index.php">VAGALUME</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">

      <li class="nav-item active">
        <a class="nav-link" href="..\prjt\index.php">Início <span class="sr-only">(current)</span></a>



      <li class="nav-item">
        <a class="nav-link" href="..\prjt\quemSomos.php">Quem somos?</a>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="..\prjt\loginn\login.php">Pedidos</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="pedir.php">Pedir</a>
      </li>
     
      
    </ul>
    <button type="button" name="cadastro" class="btn btn-light"><a href="cadastro.php">Cadastro</a></button>

    


    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Digite sua busca..." aria-label="Search">
      <button class="btn btn-light my-2 my-sm-0" type="submit">Procurar</button>
    </form>
  </div>
</nav>







<div id="fund">

<form name="dadosPessoa" action="conexao.php" method="POST">




<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Nome:</span>
  </div>
  <input type="text" class="form-control" placeholder="Digite seu nome" aria-label="Digite" name="nome" value="" aria-describedby="basic-addon1">
</div>


<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Digite seu email" aria-label="email" name="email" value="" aria-describedby="basic-addon2">
  <div class="input-group-append">
    <span class="input-group-text" id="basic-addon2">@example.com</span>
  </div>
</div>


<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Cidade:</span>
  </div>
  <input type="text" class="form-control" placeholder="Digite sua cidade" aria-label="Digite" name="cidade" value="" aria-describedby="basic-addon1">
</div>


<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">Pedido:</span>
  </div>
  <input size="50px" type="text" placeholder="Digite o que deseja pedir" name="pedido" value= ""/>
</div>
<br>
<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">Senha:</span>
    <input size="19px" type="password" name="senha">

  </div>
</div>
<br>
<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">Foi atendido?</span>
  </div>
  <input type="text" name="atendido" placeholder=" Digite Sim ou Não" value= ""/>
</div>



<!-- ESSE COMENTÁRIO É PARA A POSSIBILIDADE DE INSERÇÃO DE IMAGENS NOS FORMULÁRIOS-->


<!--quando ver isso, pesquisar sobre o metodo $_POST, e sobre $_FILE-->


<!-- O tipo de encoding de dados, enctype, DEVE ser especificado abaixo -->
<!--<form enctype="multipart/form-data" action="__URL__" method="POST">-->
    <!-- MAX_FILE_SIZE deve preceder o campo input -->
    <!--<input type="hidden" name="MAX_FILE_SIZE" value="30000" />-->
    <!-- O Nome do elemento input determina o nome da array $_FILES -->
    <!--Enviar esse arquivo: <input name="userfile" type="file" />
    <input type="submit" value="Enviar arquivo" />
</form>-->











<br>

<input type="hidden" name="acao" value="pedir" />
<input class="btn btn-primary" type="submit" name="Enviar" value= "Enviar"/>

</div>


</form>



















<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>