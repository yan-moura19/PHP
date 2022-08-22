<?php
  include("conexao.php");
    $grupo = selectTodosOsCadastros();
    $grupo1 = selectTodosOsPedidos();
    //var_dump($grupo);
    session_start();
require 'loginn/secury.php';
?>



<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <title>Pedidos</title>

</head>

<style>
  body{
    background-image: url("../prjt/imgs/pote.png");
    background-repeat: repeat;
    background-attachment:fixed;
    background-size: 2000px 900px;


    
  }

</style>



<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="..\prjt\index.php">VAGALUME</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">

      <li class="nav-item active">
        <a class="nav-link" href="index.php">Início <span class="sr-only">(current)</span></a>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="quemSomos.php">Quem somos?</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="loginn\login.php">Pedidos</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="pedir.php">Pedir</a>
      </li>

</ul>

  <p class="text-success my-2 my-sm-0" ><span style="color: #0080FF;"> Usuario: <?php echo $_SESSION['nameuser']; ?></span></p>
  <img style="height: 30px;width: 30px;" src="../prjt/imgs/user.png">
  <button type="button" style="height: 40px;" name="sair" class="btn btn-light my-2 my-sm-0"><a href="loginn/deslogar.php">Sair</a> </button>



<button style="height: 40px;" type="button" name="cadastro" class="btn btn-light my-2 my-sm-0"><a href="cadastro.php">Cadastro</a></button>

<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Digite sua busca..." aria-label="Search">
      <button class="btn btn-light my-2 my-sm-0" type="submit">Procurar</button>
    </form>
</nav>


<table border="1">
    <?php
    foreach ($grupo1 as $test) { ?>
         <table align="center">
          <tr>
            <td>
          <div class="grid-containerPedidos" >
                 
                  <div class="col s12 m4">
                  <table bordersolid="5">
            <div class="card mb-1" style="width: 700px;height: 280px;">
              <img class="card-img-top" style="width: 250px;height: 250px;" src="..\prjt\imgs\logo.png" alt="Card image cap">
              <div class="card-body" style="position: absolute; top: 5px; left: 280px;">
                <h5 class="card-title"><?=$test["pedido"]?></h5> 
               <p class="card-text" "><strong>Nome: </strong><?=$test["nome"]?><br>
                    <strong>Email: </strong><?=$test["email"]?><br>
                    <strong>Cidade: </strong><?=$test["cidade"]?><br>
                    <strong>Pedido: </strong><?=$test["pedido"]?><br>
                    <strong>Código para doar: </strong><?=$test["id"]?><br>
                    <strong><i>Já foi atendido:</strong> <?=$test["atendido"]?></i>

                  </p>
                  <br>
                 <div style="position: absolute; top: 230px;left: 350px;">
                  <form name ="consultar" action="doacoes.php?pessoa=<?=$test["id"]?>" method="POST">
                <!--<a href="doacoes.php" class="btn btn-primary">Doar</a>-->
                <input type="hidden" name="id" value="<?=$test["id"]?>">
                <input type="submit" class="btn btn-primary" name="Doar" value="Doar">
                </form>
                </div>
                <!--
                <form name="alterar" action="alterar.php" method="POST">
                      <input type="hidden" name="id" value="<?=$test["id"]?>">
                  <input type="submit" name="Editar" value="editar">
                </form>
                -->
                
                </div>
              </div>
            </div>
          </div>
        </table>
        </table>
        <?php }
        ?>

</table>

        


  
    </tbody>



</table>

  




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>