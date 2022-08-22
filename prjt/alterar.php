<?php
	include("conexao.php");
		$pessoa = selectUmCadastro($_POST["id"]);
		
?>
<!DOCTYPE html>

<html>
<head>
	<style>
	body{
		background-image:url("imgs/pote.png");
		
	}
	h1{
			position: absolute;
			top: 20px;
			left: 620px;
			color: white;
			font-size: 150px;

	}
		
		#edit{
			position: absolute;
			top: 150px;
			width: 300px;
			left: 500px;


		}
	</style>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h1><span style="color: white;">Alterar</span></h1>
<div id=edit> 
<form name="dadosPessoa" action="conexao.php" method="POST">
					<div class="input-group mb-3">
  		<div class="input-group-prepend">
    		<span class="input-group-text" id="basic-addon1">Nome:</span>
  		</div>
  		<input type="text" class="form-control" value="<?=$pessoa["nome"]?>"aria-label="Digite" name="nome"  aria-describedby="basic-addon1">
		</div>

		<div class="input-group mb-3">
  		<div class="input-group-prepend">
    		<span class="input-group-text" id="basic-addon1">Email:</span>
  		</div>
  		<input type="text" class="form-control" placeholder="Digite seu email" aria-label="Digite" name="email" value="<?=$pessoa["email"]?>" aria-describedby="basic-addon1">

		</div>


		<div class="input-group">
  		<div class="input-group-prepend">
    		<span class="input-group-text">Senha:</span>
    		<input size="19px" type="text" value="<?=$pessoa["senha"]?>" name="senha">

  		</div>

		</div>
		<br>
				<td><input type="hidden" name="acao" value="alterarCadastro" />
					<input type="hidden" name="id" value="<?=$pessoa["id"]?>" />

				<input class="btn btn-primary" type="submit" name="Enviar" value= "Enviar"/></td>
			

</form>
</div>

	




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>