

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="..\prjt\estilo\styles.css">

	<title>Vagalume</title>
	
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

    
    <button type="button" name="cadastro" class="btn btn-light"><a href="cadastro.php">Cadastro</a></button>

    
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Digite sua busca..." aria-label="Search">
      <button class="btn btn-light my-2 my-sm-0" type="submit">Procurar</button>
    </form>
</nav>

<div id="carrossel">
<div id="myCarousel" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class=""></li>
          <li data-target="#myCarousel" data-slide-to="1" class=""></li>
          <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
        </ol>

        <div class="carousel-inner">
          <div class="carousel-item">
            <img class="first-slide" src="..\prjt\imgs\sld1.jpg" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1><strong>DOE</strong></h1>
                <p><strong>Contribua para a felicidade do próximo.</strong></p>
                <a class="btn btn-lg btn-primary" href="..\prjt\loginn\login.php" role="button">Ver Detalhes</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <img class="second-slide" src="..\prjt\imgs\sld2.jpeg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1><strong>DOE</strong></h1>
                <p><strong>Contribua para a felicidade do próximo.</strong></p>
                <a class="btn btn-lg btn-primary" href="..\prjt\loginn\login.php" role="button">Ver Detalhes</a>
              </div>
            </div>
          </div>

          <div class="carousel-item active">
            <img class="third-slide" src="..\prjt\imgs\sld3.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1><strong>DOE</strong></h1>
                <p><strong>Contribua para a felicidade do próximo.</strong></p>
                <a class="btn btn-lg btn-primary" href="..\prjt\loginn\login.php" role="button">Ver Detalhes</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
</div>











<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>