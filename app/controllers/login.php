<?php
session_start();

include('../conexao/Conexao.php');

if (!isset($_POST['email']) || !isset($_POST['senha'])) {

    header('Location: ../views/Login/loginT.php');

}

$conexao = Conexao::getConexao();;

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "select email, senha from caminhoneiro where email = '{$email}' and senha = '{$senha}';";

$query = $conexao->query($sql)->fetchAll();

var_dump($query);

$_SESSION['email'] = $usuario;

//header('Location: ../views/caminhoneiro/perfilcaminhoneiro.php');

if (count($query) > 0) {

    header('Location: ../views/Caminhoneiro/perfilCaminhoneiro.php');

} else {

    $_SESSION['nao_autenticado'] = true;

    echo "Senha ou usuario invalido";

    //header('Location: ../views/Login/loginT.php');

    exit();
}
