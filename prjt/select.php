<?php
	include("conexao.php");
		$grupo = selectTodosOsCadastros();
		$grupo1 = selectTodosOsPedidos();
    //$grupo2 = procurar();
    $grupo3 = selectAsDoacoes();
		//var_dump($grupo2);
?>

<!DOCTYPE html>




<html>
<head>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta charset="utf-8">

	<title>GERENCIAMENTO</title>

  <style>
    body{
      background-image: url("imgs/pote.png");
      background-size: 700px,550px;
    }
    #tabelaCadastros{
      position: absolute;
      color: white;
      top: 10%;
      left: 35%

    }


    #tabelaPedidos{
      position: absolute;
      top: 500px;
      left: 30px;
      color: white;
    }
    #tabelaDoado{
      position: absolute;
      top: 500px;
      left: 60%;
      color: white;
      
    }

    h2{
      position: absolute;
      top :450px;
      left:225px;
      color: white;
      font-size: 40px;
    }
    h3{
      position: absolute;
      top :-50px;
      left:225px;
      color: white;
      font-size: 40px;


    }
  </style>

</head>


<body>
  <a class="btn btn-primary" href="loginn/deslogar.php"  type="submit" name="Voltar" value="Voltar">Voltar</a>
  
  <h1 align="center" style="position: absolute; top: 15px;left: 600px;" ><span style="color: white;font-size: 40px;"> Cadastros</span></h1>
  <table align="center" id="tabelaCadastros" border="1">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Senha</th>
        <th>Editar</th>
        <th>Excluir</th>
      </tr>
    </thead>
    <tbody>
      <?php
        foreach ($grupo as $pessoa) { ?>

          <tr>
            <td><?=$pessoa["id"]?></td>
            <td><?=$pessoa["nome"]?></td>
            <td><?=$pessoa["email"]?></td>
            <td><?=$pessoa["senha"]?></td>
            

            <td>
              <form name="alterar" action="alterar.php" method="POST">
              <input type="hidden" name="id" value="<?=$pessoa["id"]?>" />
              <input class="btn btn-primary" type="submit" name="Editar" value="editar">

              </form>

            </td>
            <td>
              <form name="excluirCad" action="alterar.php" method="POST">
              <input type="hidden" name="id" value="<?=$pessoa["id"]?>">
                <input type="hidden" name="acao" value="excluirCad">
                <input type="submit" name="Excluir"  value=excluir class="btn btn-danger my-2 my-sm-0" >
              </form>
            </td>
            
            
          </tr>
        <?php }
        ?>


  
    </tbody>



</table>


<br>
<br>


  <table id="tabelaPedidos" border="3">
    <strong><h2>Pedidos</h2></strong>
    <thead>
            <th>ID</th>
            <th>nome</th>
            <th>email</th>
            <th>cidade</th>
            <th>pedido</th>
            <th>Atendimento</th>
            <th>Editar</th>
            <th>Excluir</th>

    </thead>
    <tbody>
      <?php

        foreach ($grupo1 as $test) { ?>

        	
    
            
              <tr><td><?=$test["id"]?></td>
            <td><?=$test["nome"]?></td>
            <td><?=$test["email"]?></td>
            <td><?=$test["cidade"]?></td>
            <td><?=$test["pedido"]?></td>
            <td><?=$test["atendido"]?></td>
    
    
    <td>
      <form name="alterar" action="alterarPedido.php" method="POST">
              <input type="hidden" name="id" value="<?=$test["id"]?>">
              <input class="btn btn-primary"type="submit" name="Editar" value="editar">
      </form>
    </td>

    <td>
      <form name="excluir" action="alterarPedido.php" method="POST">
              <input type="hidden" name="id" value="<?=$test["id"]?>">
                <input type="hidden" name="acao" value="excluir">
                <input type="submit" name="Excluir"  value="excluir" class="btn btn-danger my-2 my-sm-0" >
      </form>
    </td>

      </tr>
    
  
        <?php }
        ?>
    
    </tbody>
  </table>





    <div id="tabelaDoado">
    <strong><h3>Doado</h3></strong>
    <table  border="3">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Senha</th>
        <th>Colaboração</th>
        <th>Numero Do Pedido</th>

        <th>Excluir</th>
      </tr>
    </thead>
    <tbody>
      <?php
        foreach ($grupo3 as $pessoa3) { ?>

          <tr>
            <td><?=$pessoa3["id"]?></td>
            <td><?=$pessoa3["nome"]?></td>
            <td><?=$pessoa3["email"]?></td>
            <td><?=$pessoa3["senha"]?></td>
            <td><?=$pessoa3["colaborado"]?></td>
            <td><?=$pessoa3["numeroPedido"]?></td>
            

          
            <td>
              <form name="excluirDoado" action="alterar.php" method="POST">
              <input type="hidden" name="id" value="<?=$pessoa3["id"]?>">
                <input type="hidden" name="acao" value="excluirDoado">
                <input type="submit" name="Excluir"  value=excluir class="btn btn-danger my-2 my-sm-0" >
              </form>
            </td>
            
            
          </tr>
        <?php }
        ?>


  
    </tbody>



</table>
</div>





<br>
<br>
.
<!--
  <table border="1">
    <thead>
      
    </thead>
    <tbody>
      <?php
        foreach ($grupo2 as $test1) { ?>

          <div class="card" style="width: 18rem;">
  <img class="card-img-top" src=".../100px180/" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?=$test1["pedido"]?></h5>
    <p class="card-text"><?=$test1["nome"]?>,
            <?=$test1["email"]?>,
            <?=$test1["cidade"]?>,
            <?=$test1["pedido"]?></p>
    <a href="#" class="btn btn-primary">Doar</a>
     <form name="alterar" action="alterarPedido.php" method="POST">
              <input type="hidden" name="id" value="<?=$test1["id"]?>">
              <input type="submit" name="Editar" value="editar">

              <form name="excluir" action="alterarPedido.php" method="POST">
              <input type="hidden" name="id" value="<?=$test1["id"]?>">
                <input type="hidden" name="acao" value="excluir">
                <input type="submit" name="Excluir"  value="excluir" class="btn btn-danger my-2 my-sm-0" >
              </form>
  </div>
  
              
                
              
            
</div>
        <?php }
        ?>


  
    </tbody>



</table>

-->
	




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>