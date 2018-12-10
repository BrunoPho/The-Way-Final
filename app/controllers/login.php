<?php

include('../conexao/Conexao.php');

if (!isset($_POST['email']) || !isset($_POST['senha'])) {

    header('Location: ../views/Login/loginC.php');

}

$conexao = Conexao::getConexao();;

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "select * from caminhoneiro where email = '{$email}' and senha = '{$senha}';";

$query = $conexao->query($sql)->fetch();

if (count($query) > 0) {

    session_start();

    $_SESSION['cod_caminhoneiro'] = $query ['cod_caminhoneiro'];
    $_SESSION['nome']             = $query ['nome'];
    $_SESSION['email']            = $query ['email'];
    $_SESSION['telefone']         = $query ['telefone'];
    $_SESSION['senha']            = $query ['senha'];
    $_SESSION['rg']               = $query ['rg'];
    $_SESSION['cpf']              = $query ['cpf'];
    $_SESSION['cidade']           = $query ['cidade'];
    $_SESSION['num_antt']         = $query ['num_antt'];
    $_SESSION['num_cnh']          = $query ['num_cnh'];
    $_SESSION['categoria_cnh']    = $query ['categoria_cnh'];

    header('Location: ../views/Caminhoneiro/perfilCaminhoneiro.php');

} else {

    $_SESSION['nao_autenticado'] = true;

    echo "Senha ou usuario invalido";

    exit();
}

