<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="..\prjt\estilo\styles.css">
	<title>Contatos</title>
	<style>
		body{
			background-image: url(..\prjt\imgs\fund.jpg);
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
			background-color:  white;
			width: 500px;
			height: 500px;
			top: 20%;
			left: 33%;
		}
		#Contatos1{
			position: relative;
		top: 200px;
		left: 100px;
		z-index: 0;
		}
		#Contatos2{
			position: relative;
			top: 12px;
			left: 530px;
			z-index: 1;
		}
	</style>
</head>
<body>
<!DOCTYPE html>
<html>

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
      </li>

      <li class="nav-item">
        <a class="nav-link" href="..\prjt\contatos.php">Contato</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="..\prjt\quemSomos.php">Quem somos?</a>
      </li>

     
      <li class="nav-item">
        <a class="nav-link" href="pedir.php">Pedir</a>
      </li>
      
    </ul>
    

    <button type="button" name="cadastro" class="btn btn-light"><a href="cadastro.php">Cadastro</a></button>
    
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>





<table border="2">
<!-- Imagem do whats -->
<div id="Contatos1">
	<div  data-toggle="modal" data-target="#exampleModalCenter">
	  <img height="200px" width="200px" src="../prjt/imgs/whats.png">
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Contatos do Whatsapp</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <strong>Bruna Cavalcanti:</strong>
        <p>(83)9-9656-0365</p>
        <strong>Edigleyston Miqueias:</strong>
        <p>(83)9-9620-9448</p>
        <strong>Kaio Aliff:</strong>
        <p>(83)9-8872-5091</p>
        <strong>Matheus Avelino:</strong>
        <p>(83)9-9653-2432</p>
        <strong>Victor Emanuel:</strong>
        <p>(83)9-8694-6912</p>
        <strong>Vitor Tissaleah:</strong>
        <p>(83)9-8761-9551</p>
        <strong>Yan Gabriel:</strong>
        <p>(83)9-8206-9366</p>
      </div>
    </div>
  </div>
</div>
</table>


<table border="2">
<!-- Imagem do facebook -->
<div id="Contatos2">
	<div  data-toggle="modal" data-target="#exampleModalCenter">
	  <img height="200px" width="200px" src="../prjt/imgs/facebook.png">
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Contatos do Facebook</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <strong>Bruna Cavalcanti:</strong>
        <p>facebook.com/bruna.honey</p>
        <strong>Edigleyston Miqueias:</strong>
        <p>facebook.com/edi.velezz</p>
        <strong>Kaio Aliff:</strong>
        <p>facebook.com/kaio.aliff.9</p>
        <strong>Matheus Avelino:</strong>
        <p>facebook.com/matheus.avelino.5</p>
        <strong>Victor Emanuel:</strong>
        <p>facebook.com/victor.britolima</p>
        <strong>Vitor Tissaleah:</strong>
        <p>facebook.com/vitortissaleah.vasconcelos</p>
        <strong>Yan Gabriel:</strong>
        <p>facebook.com/yan.moura.522</p>
      </div>
    </div>
  </div>
</div>
</table>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>