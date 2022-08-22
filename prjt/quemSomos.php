<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
      body{
        background-color: black;
        background:black;
      }
     #img1{
       height: 608px;
      width: 100%

     }
     #img2{
       height: 608px;
      width: 100%

     }
     #img3{
       height: 608px;
      width: 100%

     }

     #borda{

     color: black;
  
     }
    #carousel1{
      width: 70%;
      height: 
      background-image: url(..\prjt\imgs\fund.jpg);
      background-repeat: no-repeat;
      background-size: cover; 
      
    }

    #texto{
  right: 150px;
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
    #card1{
      position: relative;
      top: 100px;
      
      z-index: 0;
      width: 98%;
      
    }
    #Divlado{
      position: relative;
      top: -608px;
      left: 70%;
      width: 30%;
      height: 608px;
      background-color: transparent;

    }
    #DivLado2{
      position: relative;
      top: 0px;
      left: 0%;
      width: 100%;
      height: 50%;
      background-color:#CCEEFF;


    }
    #DivLado1{
      position: relative;
      top: 0%;
      left: 0%;
      width: 100%;
      height: 50%;
      background-color: #CCEEFF;
      padding-top: 5px;
      padding-left: 5px;
      text-align: center;


    }

    #card2{
      position: relative;
      top: -79px;
      left: 38%;
      z-index: 1;
    }

    #carrossel{
      position: relative;
      height: 50px;
      width: 30%;

    }#carrossel img{
      height: 50%;
      width: 100%;
    }#carrossel h1{
      color: black;
      text-shadow: 4px 1px rgba(255,255,255,0.5);

    }#carrossel p{
      color: black;
      text-shadow: 4px 1px rgba(255,255,255,0.5);
    }
  .grid-containerPedidos{
    display: grid;
    grid-template-columns: auto auto auto;
    padding: 30px;
  
  }
  
  #quemsomos{
    position: relative;
    top: 15px;
    left: 125px;
  }#imagem{
    height: 150px;
    width: 150px;

  }
  #tabela{
    height: 100px;
  }#tabela td{
    height: 220px;
  }



  </style>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="..\prjt\estilo\styles.css">
  <title>Vagalume</title>

</head>
<body >


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
          <li data-target="#myCarousel" data-slide-to="0" class="" ></li>
          <li data-target="#myCarousel" data-slide-to="1" class=""></li>
          <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
        </ol>
<div id="carousel1">
        <div class="carousel-inner">
          <div class="carousel-item">      
            <div id="img1">
            <img class="first-slide" src="..\prjt\imgs\sld1.jpg"  alt="First slide" >
            </div>
            <div class="container">
              <div class="carousel-caption text-left">
                <h1><strong>DOE</strong></h1>
                <p><strong>Contribua para a felicidade do próximo.</strong></p>
                <a class="btn btn-lg btn-primary" href="..\prjt\loginn\login.php" role="button">Ver Detalhes</a>          
            </div>
          </div>
</div>
          <div class="carousel-item">
            <div id="img2">
            <img class="second-slide" src="..\prjt\imgs\sld2.jpeg"   alt="Second slide">
           </div>
            <div class="container">

              <div class="carousel-caption">
                <h1><strong>DOE</strong></h1>
                <p><strong>Contribua para a felicidade do próximo.</strong></p>
                <a class="btn btn-lg btn-primary" href="..\prjt\loginn\login.php" role="button">Ver Detalhes</a>
              </div>
            </div>
          </div>


          <div class="carousel-item active">
            <div id="img3">
            <img class="third-slide" src="..\prjt\imgs\sld3.jpg" alt="Third slide">
            </div>
            <div class="container">

              <div class="carousel-caption text-right">
                <h1><strong>DOE</strong></h1>
                <p><strong>Contribua para a felicidade do próximo.</strong></p>
                <a class="btn btn-lg btn-primary" href="..\prjt\loginn\login.php" role="button">Ver Detalhes</a>
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
</div>





<div id="Divlado">
  <div id="DivLado1"> 
     <span style="color: black;font-size: 20px;"><strong>Quem Somos ?</strong></span><br>

    <span style="color: black;"><strong> Olá!</strong> Nós somos a Vagalume, Nós Fazemos a diferença! Nós nascemos do
desejo de fazer o bem, utilizando da tecnologia como ponte dos Doadores para
os necessitados. Tendo como finalidade criar uma corrente de doações em que
todos possam contribuir e ajudar pessoas ou instituições, que tem os mais
diversos tipos de necessidade, podendo alcançar o maior número de pessoas
perto de você.</span>
  </div>
  
  <div id="DivLado2">

<div id="quemsomos">
  <table id="tabela" border="2">

  <!-- Imagem do faixa -->
  <div id="imagem">
  <div  data-toggle="modal" data-target="#exampleModalCenter">
    <img src="../prjt/imgs/contato.png">
  </div>
</div>
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
  </div>


























<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>