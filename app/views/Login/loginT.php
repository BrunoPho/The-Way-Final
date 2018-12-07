<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 tags meta acima * devem * vir primeiro na cabeça <head>;
    Qualquer outro conteúdo principal deve vir * após * estas tags -->
    <meta name="author" content="Bruno Pinheiro">
    <meta name="description" content="">

       <title> The way - A página que guia você </title>

    <!-- Importação do CSS -->
    <link href="../../../assets/css/signin.css" rel="stylesheet">
    <link href="../../../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../assets/css/animate.min.css" rel="stylesheet">
    <link href="../../../assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="../../../assets/css/lightbox.css" rel="stylesheet">
    <link href="../../../assets/css/main.css" rel="stylesheet">
    <link href="../../../assets/css/responsive.css" rel="stylesheet">
    <link rel="shortcut icon" href="../../../assets/images/logo.png">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>

    <script src="../../../assets/js/html5shiv.js">  </script>
    <script src="../../../assets/js/respond.min.js"></script>

</head>
<body>

<div class="banner"><img class="seven-logo" src="../../../assets/images/logo.png" alt="logo_centro"></div>

<div class="container-fluid">

          <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">

                    <?php if(isset($_SESSION['nao_autenticado'])): ?>

                        <div class="notification is-danger">

                            <p> ERRO: Usuário ou senha inválidos. </p>

                        </div>

                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>

                </div>
            </div>
        </div>

    <!-- Form inicio -->
    <form class="form-signin" action="../../controllers/loginT.php" method="POST">

        <h2 class="form-signin-heading">         Entre em sua conta Transportadora </h2>
        <label for="inputEmail" class="sr-only"> Endereço de e-mail </label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Endereço de e-mail" required autofocus>
        <label for="inputPassword" class="sr-only"> Senha </label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required="">

        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> lembre-se de mim </label>
        </div>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit"> Logar </button>
    
    </form><!-- /Form -->
</div>

<!-- Botão para Home -->
<div style="text-align: center;">
    <div class="form-group">
        <label class=" control-label" type="botton1"></label>
        <div class="center">
            <a href="../../../index.html" class="btn btn-danger btn-lg active" role="button"> Cancelar </a>
        </div>
    </div>
</div>

<!-- IE10 Corta a janela de Superfície/bug da área de trabalho do Windows 8 -->
<script src="../../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
