<?php
     session_start();
     
     include('../conexao/Conexao.php');

     if (!isset($_POST['email']) || !isset($_POST['senha'])) {

        header('Location: ../views/Login/loginT.php');

     }

     $conexao = Conexao::getConexao();;

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "select email, senha from transportadora where email = '{$email}' and senha = '{$senha}';";

    $query = $conexao->query($sql)->fetchAll();

    var_dump($query);

    $_SESSION['email'] = $usuario;

    //header('Location: ../views/Transportadora/perfilTransportadora.php');

  if (count($query) > 0) {

      $_SESSION['cod_transportadora'] = $query ['cod_transportadora'];
      $_SESSION['nome']               = $query ['nome'];
      $_SESSION['email']              = $query ['email'];
      $_SESSION['telefone']           = $query ['telefone'];
      $_SESSION['senha']              = $query ['senha'];
      $_SESSION['razao_social']       = $query ['razao_social'];
      $_SESSION['cnpj']               = $query ['cnpj'];
      $_SESSION['cidade_cod_cidade']  = $query ['cidade_cod_cidade'];

   header('Location: ../views/Transportadora/perfilTransportadora.php');

  } else {

    $_SESSION['nao_autenticado'] = true;

    echo "Senha ou usuario invalido";

    //header('Location: ../views/Login/loginT.php');

    exit();
}
