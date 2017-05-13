<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Template Bootstrap</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/font-awesome.css" rel="stylesheet">
  <link href="css/mystyle.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>


<body class="container">

<!-- INICIO MENU -->
<div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container">
            <div class="navbar-header col-md-8">
              <!-- BOTÃO QUANDO FICA PEQUENO -->
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- FIM - BOTÃO QUANDO FICA PEQUENO -->
              
             <a class="navbar-brand" href="#">LOGO DA EMPRESA </a>
            </div>
            
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="action"><a href="#">Incio</a></li>
                <li ><a class="glyphicon glyphicon-home" href="#">About</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
</div>
<!-- FIM MENU -->

<!-- INICIO BANNER -->
<br><br><br>
    <section class="row">
      <div class="col-lg-12">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="img/banner.png" width="100%" alt="Banner" title="Banner Projeto e-Jovem">
              <div class="carousel-caption">
                <button class="btn btn-default btn-lg">SAIBA MAIS</button>
              </div>
            </div>
          </div>
        </div>

      </div><!-- col-lg-12 -->
    </section>
<!-- FIM BANNER -->

<!-- INICIO - O QUE FAZEMOS -->
<br>
    <h1 class="font-fontastique text-center">
      O QUE FAZEMOS
    </h1>
    <h2 class="font-advent text-center sub-titulo-section">
      fazemos por um mundo melhor
    </h2>

	<div class="row"><!-- PARTE 01 -->
      <div class="col-lg-4">
        <div class="card card-blue">
          <span class="fa fa-group"><span>
          <h3 class="font-fontastique">COLABORAÇÃO</h3>

          <p class="font-advent">
            Desenvolvimento Colaborativo utilizando o Empreendedorismo Social como forma de criar protagonistas, ampliando sempre seus horizontes.
          </p>
        </div>
      </div><!-- col-lg-4 -->


	<div class="col-lg-4"><!-- PARTE 02 -->
        <div class="card card-green">
          <span class="fa fa-graduation-cap"><span>
          <h3 class="font-fontastique">APRENDIZADO</h3>

          <p class="font-advent">
              Uma forma diferente de profissionalizar. Através de uma metodologia única e que foca nos 4 pilares da educação.
          </p>
        </div>
      </div><!-- col-lg-4 -->

      <div class="col-lg-4"> <!-- PARTE 03 -->
        <div class="card card-orange">
          <span class="fa fa-desktop"><span>
          <h3 class="font-fontastique">INCLUSÃO DIGITAL</h3>

          <p class="font-advent">
            Cuidando para que através do Software Livre a Inclusão Digital possa de fato fazer parte da cultura dos alunos da rede pública de ensino.

          </p>
        </div>
      </div><!-- col-lg-4 -->
    </div><!-- row -->      
<!-- FIM - O QUE FAZEMOS -->

<!-- INICIO - SOBRE -->
<div id="sobre"></div>
    <br><br><br>
    <h1 class="titulo-section font-fontastique text-center">
      SOBRE O PROJETO
    </h1>
    <h2 class="font-advent text-center sub-titulo-section">
      Pontos Importantes na criação de Oportunidades
    </h2>



    <br>
    <div class="row"> <!-- PARTE 01 -->
      <div class="col-lg-6">
        <div class="jumbotron text-center">
          <p class="font-advent" style="font-size: 18pt;">
            O Projeto e-Jovem é uma iniciativa do Governo do Estado do Ceará através da Secretaria da Educação que visa atender os alunos e ex-alunos da rede pública de ensino, profissionalizando-os nas disciplinas de Informática, Técnicas Administrativas e Vendas, e Empreendedorismo Social.
          </p>
          <br>

          <button class="btn btn-default btn-lg">CONTINUAR LENDO</button>
        </div>
      </div> <!-- col-lg-6 -->


        <div class="col-lg-6"><!-- PARTE 02 -->
        <div class="panel panel-default">
          <div class="panel-body font-advent">
                <br>
                <span class="info-num"><strong>+ 20.000</strong> Alunos Beneficiados</span>
                <br><br>
                <span class="info-num"><strong>+ 160</strong> Municipios Atendidos</span>
                <br><br>
                <span class="info-num"><strong>+ 2.500</strong> Projetos Sociais</span>
                <br><br>
                <span class="info-num"><strong>+ 15%</strong> de Empregabilidade</span>
                <br><br>
                <span class="info-num"><strong>+ 8</strong> Anos de Existência</span>
                <br><br>
            </div>
          </div><!-- panel-body -->
        </div><!-- panel -->
      </div><!-- col-lg-6 -->
    </div><!-- row -->

<!-- FIM - SOBRE -->

  <!-- jQuery (necessario para os plugins Javascript do Bootstrap) -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>