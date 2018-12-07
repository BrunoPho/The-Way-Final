<?php
     session_start();
     
    include('../conexao/Conexao.php');

       if (empty($_POST['email']) || empty($_POST['senha'])) {

         header('Location: ../views/Login/loginC.php');

        exit();
        }

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select email, senha from caminhoneiro where email = '{$email}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if ($row == 1) {

    $_SESSION['email'] = $usuario;

    header('Location: ../views/Caminhoneiro/perfilCaminhoneiro.php');

    exit();

  } else {

    $_SESSION['nao_autenticado'] = true;

    header('Location: ../views/loginC.php');

    exit();
}
