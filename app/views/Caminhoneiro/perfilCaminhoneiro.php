<?php

require_once __DIR__ . "/../../cruds/CrudCaminhoneiro.php";
require_once __DIR__ . "/../../models/Caminhoneiro.php";


//inicia a sessão
if (!isset($_SESSION)) {
    session_start();
}

function verifica_login(){

    if (!isset($_SESSION['cod_caminhoneiro'])) {
        header('Location: ../../index.html');
    }

}

verifica_login();

$caminhoneiro = new CrudCaminhoneiro();
$perfil_caminhoneiro = $caminhoneiro->getCaminhoneiro($_SESSION['cod_caminhoneiro']);


?>

<!DOCTYPE html>
<html lang="pt-br">
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
   
   <title> The way - A página que guia você </title>
  
  <link href="../../../assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../../assets/css/animate.min.css" rel="stylesheet">
  <link href="../../../assets/css/font-awesome.min.css" rel="stylesheet">
  <link href="../../../assets/css/lightbox.css" rel="stylesheet">
  <link href="../../../assets/css/main.css" rel="stylesheet">
  <link id="css-preset" href="../../../assets/css/presets/preset1.css" rel="stylesheet">
  <link href="../../../assets/css/responsive.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../../../assets/css/estilotw.css">
  <link rel="shortcut icon" href="../../../assets/images/logo.png">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
   
    <script type="text/javascript" src="../../../assets/js/jquery.js"></script>
    <script type="text/javascript" src="../../../assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../../assets/js/jquery.inview.min.js"></script>
    <script type="text/javascript" src="../../../assets/js/wow.min.js"></script>
    <script type="text/javascript" src="../../../assets/js/mousescroll.js"></script>
    <script type="text/javascript" src="../../../assets/js/smoothscroll.js"></script>
    <script type="text/javascript" src="../../../assets/js/jquery.countTo.js"></script>
    <script type="text/javascript" src="../../../assets/js/lightbox.min.js"></script>
    <script type="text/javascript" src="../../../assets/js/main.js"></script>
    <script src="../../../assets/js/html5shiv.js"></script>
    <script src="../../../assets/js/respond.min.js"></script>
  
  
 </head><!--/head(Cabeça)-->

<body>

  <!--.Pré-carregador-->  
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.Pré-carregador-->

  <header id=" Home ">

    <!--/#Controle deslizante doméstico-->
    <div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only"> Alternar de navegação </span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../../../index.html">
            <h1><img class="img-responsive" src="../../../assets/images/T.png" alt="logo"></h1>
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">

            <li class="scroll"><a href="../Y-Importar/ajuda.html">       Ajuda </a></li>
            <li class="scroll"><a href="http://localhost/The-Way-Final-master/app/controllers/caminhoneiro.php?acao=sair"> Sair  </a></li>

          </ul>
        </div>
      </div>
    </div><!--/#Navegação principal(menu principal)-->
  </header><!--/# Home -->
  <section id="services">
    <div class="container">
      <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="row">
        <div class="lateral col-md-2">
          
          <!--<div class="moldura-foto-perfil">
            <img src="../../../assets/images/binocargapesada.jpg" alt="">
          </div>-->
          
          <h3> Bino Farias </h3>

          <ul class="button">
            <button type="submit" class="btn btn-default">
              <li class="scroll"><a href="perfilCaminhoneiro.php"> Meus Dados </a></li></button>
            <button type="submit" class="btn btn-default">
              <li class="scroll"><a href="MeusFretes.php">         Fretes     </a></li></button>
            <button type="submit" class="btn btn-default">
              <li class="scroll"><a href="../Caminhoneiro/ServicosRegistrados.php"> Serviços </a></li></button>
            <button type="submit" class="btn btn-default">
              <li class="scroll"><a href="MeusCaminhoes.php">        Meus Caminhões </a></li></button>
            <button type="submit" class="btn btn-default">
              <li class="scroll"><a href="info_carga.php"> Novas cargas   </a></li></button>
          </ul>

        </div>

        <div class="container" >
        <div class="col-md-10">
          <nav class="navbar navbar-default">
            <div class="container-fluid">

              <!-- Marca e alternar agrupados para melhor exibição móvel -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only"> Toggle navigation </span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>

               <h1> Meus dados </h1>

                      <hr>

                      <div class="container">

                      <table>
                       <tbody>

                      <tb>
                          <tr>
                              <pre><?php print_r($perfil_caminhoneiro); ?></pre>
                          </tr>
                      </tb>

                          </tbody>
                        </table>
                      </div>

                      <hr>

  <footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container text-center">
        <div class="footer-logo">
          <a href="../../../index.html"><img class="img-responsive" src="../../../assets/images/logo.png" alt=""></a>
        </div>
        <div class="social-icons">
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <p> &copy; 2018 The way. </p>
          </div>
          <div class="col-sm-6">
           <!-- <p class="pull-right"> Projetado por <a href="http://www.themeum.com/"> Themeum </a></p> -->
          </div>
        </div>
      </div>
    </div>
  </footer>

</body>
</html>