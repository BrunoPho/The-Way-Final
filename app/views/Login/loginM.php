<html lang="pt-br">
<head>
<style type="text/css">

         body{
          /*background:url("../../assets/image/fundo_login2.jpg");

          background-position: center;
          }*/
          #botao{
            float:right;
          }
          #cadastrar{
            float: left;
          }
          #card{
              width: 400px;
              height: 180px;
          }
          #d{
            height: 250px;
          }
        </style>



</head>
<body>
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>
        
   <div class="navbar-fixed">
    <nav class="blue-grey nav-wrapper" role="navigation">
      <div class="nav-wrapper container ">
        <a href="../../../index.html"><i class="material-icons prefix left">arrow_back</i>Voltar</a>
        <a id="logo-container" href="../../../index.html" class="brand-logo center white-text">OJP</a>
        <ul class="right hide-on-med-and-down">
      <li><a href="#"></a></li>
          <!--<li><a class="btn-floating btn-large waves-effect waves-light blue-grey tooltipped pulse" data-tooltip="Menu"><i class="material-icons " data-activates="nav-mobile">menu</i></a><a href="#" class="waves-effect waves-light btn-floating"><i class="material-icons left">add</i></a></li>!-->
         <!-- <li><a href="#" class="dropdown-button waves-effect waves-light btn-floating" data-activates="dropdown1"><i class="material-icons left">account_circle</i></a>!</li>-->
        </ul>
        <ul id="nav-mobile" class="side-nav">
          <li><a href="#">Cadastrar-se</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse top-nav waves-effect waves-light circle hide-on-large-only"><i class="material-icons btn-black">menu</i></a>
          <div class="nav-wrapper">
       </div>
      </div>
    </nav>
  </div>

        <div id="d"></div>
        <div id="pri" class="row container">

            <form  action="../../controllers/loginM.php?acao=verificar_caminhoneiro" method="post" class="col s4 offset-s4">

              <div class="row">
                <div id="card" class="card ">
                  <div class="card-content">
                    <div id="cabecalho">

                      <h5 class=""><i class="material-icons prefix ">account_circle</i>Login</h5>

                    </div>

                      <div class="input-field inline">

                          <label>
                              <input type="text" name="login" class="validate black-text">
                          </label>

                          <label for="text" class="black-text">Login</label>

                      </div>
                      <div class="input-field inline">

                          <label>
                              <input type="password" name="senha" class="
                              validate black-text" >
                          </label>

                          <label for="email" data-error="incorreto" data-success="correto" class="black-text">Senha</label>

                      </div>
                      <div>
                      <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
                        <i class="material-icons right">send</i>
                      </button>
                      <!--<a id="botao" class="btn btn-floating btn-large cyan accent-2 pulse halfway-fab tooltipped" href="funcional.php" data-tooltip="enviar"><i class="material-icons">send</i></a>-->
                      </div>
                    </div>
                  </div>
                </div>
              </form>
          </div>
        </body>
    </html>
