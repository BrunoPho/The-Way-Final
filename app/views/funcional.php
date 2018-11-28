<?php
    // var_dump($_SESSION); 
    if(!isset ($_SESSION['usuario_online']))
  {
      header('location:index.php');
      }
    ?>

  <!DOCTYPE html>
  <html lang="pt-br">
  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
     
      <title>OJP/home</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
          	
            <style type="text/css">
        		.parallax-container {
       	 		height: 600px;
      		}
      	 body {
              background-image: url("../../assets/image/fundo3.jpg");
              background-attachment: fixed;
          }
        	</style>

</head>
<body>

  	<ul id="dropdown1" class="dropdown-content">
     <li><a href="#!">one</a></li>
     <li><a href="#!">two</a></li>
     <li class="divider"></li>
     <li><a href="#!">three</a></li>
  	</ul>
  
  <header>
  	
    <div class="navbar-fixed">
     <nav class="blue-grey nav-wrapper" role="navigation">
      <div class="nav-wrapper container "><a href= "../controllers/caminhoneiro.php?acao=listar" class="blue-grey-text"><i class="material-icons prefix left">arrow_back</i>Voltar</a>
        <a id="logo-container" href="../../index.html" class="brand-logo center white-text">OJP</a>
        
        <ul class="right hide-on-med-and-down">
      <li><a href="../controllers/loginM.php?acao=logout" class="white-text">Logout</a></li>
          <!--<li><a class="btn-floating btn-large waves-effect waves-light blue-grey tooltipped pulse" data-tooltip="Menu"><i class="material-icons " data-activates="nav-mobile">menu</i></a><a href="#" class="waves-effect waves-light btn-floating"><i class="material-icons left">add</i></a></li>!-->
          <li><!--<a href="#" class="dropdown-button waves-effect waves-light btn-floating" data-activates="dropdown1"><i class="material-icons left">account_circle</i></a>!--></li>
        </ul>
        <!--<div class="nav-wrapper">
        <form>
          <div class="input-field">
            <input id="search" type="search" required>
            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
            <i class="material-icons">close</i>
          </div>
        </form>
      </div>	!-->

          <div class="nav-wrapper">
        <!--<form>
          <div class="input-field inline">
            <input id="search" type="search" required>
            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
            <i class="material-icons">close</i>
          </div>
        </form>!-->
            <div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="material-icons">menu</i></a></div>
      </div>
      </div>
    </nav>
  </div>
        <ul id="nav-mobile" class="side-nav fixed">
          <li><div class="user-view">
              <div class="background">
          <img src="../../assets/images/esteto.jpg">
        </div>
        <a href="../controllers/caminhoneiro.php?acao=listarcaminhoneiro&id=<?=$_SESSION['idcaminhoneiro']?>"><img class="circle" src="../visao/imgcaminhoneiro/<?= $_SESSION['img'];?>"></a>
        <!--<a href="perfil.php"><span class="white-text name"></span></a>-->
        <a href="../controllers/caminhoneiro.php?acao=listarcaminhoneiro&id=<?=$_SESSION['idcaminhoneiro']?>"><span class="white-text email"><?= $_SESSION['login'];?></span></a>
      </div></li>
          <li class="search">
            <div class="search-wrapper card">
              <input id="search" placeholder="Busque sua vaga aqui"><label for="icon_telephone"><i class="material-icons">search</i></label>
              <div class="search-results"></div>
            </div>
          </div></li>
          <li class="bold"><a href="../controllers/caminhoneiro.php?acao=listarcaminhoneiro&id=<?=$_SESSION['idcaminhoneiro']?>" class="waves-effect waves-teal">Meu Perfil</a></li>
          <li class="no-padding">
            
          </li>
          <li class="bold"><a href="perfil.php" class="waves-effect waves-teal">Minhas Vagas</a></li>
          <li class="bold"><a href="../controllers/caminhoneiro.php?acao=logout" class="waves-effect waves-teal">Sair</a></li>
        </ul>
        </header>
        <?php foreach ($listavagas as $vaga): ?>
        <div class="row">
        	<div class="col s3"></div>
          <div class="col s6 m6 ">
            <div class="card">
          <div class="card-content">
            <span class="card-title"><?= $vaga['nome']?></span>
            <p><?= $vaga['descricao']?></p> 
            <a class="waves-effect waves-light btn">Cadastrar-se</a>

          </div>
          <ul class="collapsible" data-collapsible="accordion">
    <li>
      <div class="collapsible-header">
        <i class="material-icons">arrow_downward
  </i>
        <a href="#" class="black-text">Ver mais sobre vaga</a>
        <span class="badge"></span></div>

      <div class="collapsible-body white"><p>Lorem ipsum dolor sit amet.</p></div>
    </li>
    <li>
    </li>
  </ul>
        </div>
          </div>
        </div>

        <?php endforeach; ?>
  <?php include '../../assets/rodape.html';?>

    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="../../assets/js/materialize.js"></script>
    <script src="../../assets/js/init.js"></script>
    <script type="text/javascript"></script>
    </body>
  </html>