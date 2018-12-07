<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>The way - A página que guia você</title>

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
  <link href="../../views/Y-Importar/cabecalho_padrao.php">
  <link href="../../views/Y-Importar/rodape.php">

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="cdnjs.cloudflare.com/ajax/libs/jquery/3.3.7/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.7/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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

<div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>

<header id=" Home ">
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

          <li class="scroll"><a href="../Y-Importar/ajuda.html"> Ajuda        </a></li>
          <li class="scroll"><a href="../../../index.html">      Sair         </a></li>

        </ul>
      </div>
    </div>
  </div>

</header>

<div class="container bootstrap snippet">
  <div class="row">
    <div class="col-sm-10"><h1> Petobras </h1></div>
    <div class="col-sm-2"><a href="#users" class="pull-right"></a></div>
  </div>
  <div class="row">
      <div class="col-sm-3">

      <div class="panel panel-default">
        <div class="panel-heading"> Seu site: <i class="fa fa-link fa-1x"></i></div>
          <div class="panel-body" href="http://www.petrobras.com.br/pt/" ><a "> www.petrobras.com </a></div>
      </div>

      <ul class="list-group">
        <li class="list-group-item text-muted">Atividade <i class="fa fa-dashboard fa-1x"></i></li>
        <li class="list-group-item text-right"><span class="pull-left"><strong>Serviços cadastrados</strong></span> 1525 </li>
        <li class="list-group-item text-right"><span class="pull-left"><strong>Serviços em andamento</strong></span> 13 </li>
      </ul>


    </div><!--/col-3-->
    <div class="col-sm-9">
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
        <li><a data-toggle="tab" href="#messages">Cadastrar Serviço</a></li>
      </ul>

        <fieldset><!-- conjunto de campos -->

      <div class="tab-content">
        <div class="tab-pane active" id="home">
          
          <hr>

          <form class="form" action="#" method="POST" id="hometrasportadora">
            
            <h1> Meus dados </h1>

            <hr>

        <tbody>
            <tr>
                <th><?= $transportadora['cod_transportadora'] ?></th>
                <td><?= $transportadora['nome']               ?> </td>
                <td><?= $transportadora['email']              ?> </td>
                <td><?= $transportadora['telefone']           ?> </td>
                <td><?= $transportadora['senha']              ?> </td>
                <td><?= $transportadora['razao_social']       ?> </td>
                <td><?= $transportadora['cnpj']               ?> </td>
                <td><?= $transportadora['cidade_cod_cidade']  ?> </td>
            </tr>
        </tbody>

        <hr>

          </form>
        </div><!--/tab-pane-->

        <div class="tab-pane" id="messages">

          <form class="form" action="../../controllers/servico.php?acao=cadastrar" method="POST" id="hometrasportadora">

          <hr>
      
            <!-- Text input (numero_seguro)-->
            <div class="form-group">
                <div class="col-xs-6">
                  <label> Numero de seguro </label>
                    <input id="numero_seguro" name="numero_seguro" type="number" placeholder="Numero de seguro" class="form-control input-md" required="" title="Preencha com seu numero de seguro">
                </div>
            </div>

            <!-- Text input (data_entrega)-->
            <div class="form-group">
                <div class="col-xs-6">
                  <label> Data de entrega </label>
                    <input id="data_entrega" name="data_entrega" type="date" placeholder="data_entrega" class="form-control input-md" required="" title="Preencha com a data de entraga do serviço">
                </div>
            </div>

            <!-- Text input (cod_servico)-->
            <div class="form-group">
                <div class="col-xs-6">
                <label> Código de servico </label>
                    <input id="cod_servico" name="cod_servico" type="number" pattern="" placeholder="Código de serviço" class="form-control input-md" required="" title="Código de serviço">
                </div>
            </div>

            <!-- Text input (data_cadastro)-->
            <div class="form-group">
                <div class="col-xs-6">
                    <label> Data de cadastro </label>
                    <input id="data_cadastro" name="data_cadastro" type="date" placeholder="Data de cadastro do serviço" class="form-control input-md" required="">

                </div>
            </div>


            <!-- Text input (quantidade)-->
            <div class="form-group">
                <div class="col-xs-6">
                  <label> Quantidade </label>
                    <input id="quantidade" name="quantidade" type="number" placeholder="Quantidade de caminhoneiros" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Text input (data_retirada)-->
            <div class="form-group">
                <div class="col-xs-6">
                        <label> Data de retirada </label>
                    <input id="data_retirada" name="data_retirada" type="date" placeholder="Data de finalição do serviço" class="form-control input-md" required="">
                </div>
              </div>

                <!-- Text input (data_retirada_prev)-->
                <div class="form-group">
                    <div class="col-xs-6">
                        <label> Data de retirada prevista </label>
                        <input id="data_retirada_prev" name="data_retirada_prev" type="date" placeholder="Data da finalição prevista do serviço" class="form-control input-md" required="">
                    </div>
                </div>

                <!-- Text input (data_entrega_prev)-->
                <div class="form-group">
                    <div class="col-xs-6">
                        <label> Data de entrega prevista </label>
                        <input id="data_entrega_prev" name="data_entrega_prev" type="date" placeholder="Data da entraga prevista do serviço" class="form-control input-md" required="">

                    </div>
                </div>

                <!-- Text input (cod_status)-->
                <div class="form-group">
                    <div class="col-xs-6">
                      <label> Código de Status </label>
                        <input id="cod_status" name="cod_status" type="number" placeholder="Código do estatus do serviço" class="form-control input-md" required="">

                    </div>
                </div>

                <!-- Text input (cod_cidade)-->
                <div class="form-group">
                    <div class="col-xs-6">
                      <label> Cidade </label>
                        <input id="cod_cidade" name="cod_cidade" type="text" placeholder="Cidade e região do serviço" class="form-control input-md" required="">

                    </div>
                </div>

                <!-- Text input (cod_produto)-->
                <div class="form-group">
                    <div class="col-xs-6">
                      <label> Código de produto </label>
                        <input id="cod_produto" name="cod_produto" type="number" placeholder="Código do produto" class="form-control input-md" required="">

                    </div>
                </div>

              <div class="form-group">
              <div class="col-xs-12">
                <br>
                <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Cadastrar </button>

              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

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
        </div>
      </div>
    </div>
  </div>
</footer>

</body>
</html>