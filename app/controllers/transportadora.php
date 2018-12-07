<?php

require_once "../cruds/CrudTransportadora.php";
require_once "../models/Transportadora.php";


//inicia a sessão
if (!isset($_SESSION)) {
    session_start();
}


function index(){
    listar_transportadora();
}

function listar_transportadora(){    //todo trocando listar por perfil
  //  var_dump($_POST);
  //  exit();
    $transportadoras = new Crudtransportadora();
    $listatransportadoras = $transportadoras->getTransportadora();

    include __DIR__ . "/../views/Transportadora/transportadora_listar.php";

}
function listar_transportadoras(){    //todo trocar listar por perfil
    //_transportadora
    $transportadoras = new Crudtransportadora();
    $listatransportadoras = $transportadoras->gettransportadoras();

    include __DIR__ . "/../views/Transportadora/transportadora_listar.php";

}
function cadastro(){

    include __DIR__ . "/../views/Transportadora/transportadora_cadastro.php";
}

function cadastrar(){

    $transportadora = new transportadora();
    $transportadora->nome              = filter_input(INPUT_POST, 'nome',              FILTER_SANITIZE_STRING);
    $transportadora->email             = filter_input(INPUT_POST, 'email',             FILTER_SANITIZE_STRING);
    $transportadora->telefone          = filter_input(INPUT_POST, 'telefone',          FILTER_SANITIZE_STRING);
    $transportadora->senha             = filter_input(INPUT_POST, 'senha',             FILTER_SANITIZE_STRING);
    $transportadora->razao_social      = filter_input(INPUT_POST, 'razo_social',       FILTER_SANITIZE_STRING);
    $transportadora->cnpj              = filter_input(INPUT_POST, 'cnpj',              FILTER_SANITIZE_STRING);
    $transportadora->cod_cidade        = filter_input(INPUT_POST, 'cidade',            FILTER_SANITIZE_STRING);

    $crud_transportadora = new CrudTransportadora();
    $crud_transportadora->salvar($transportadora);
    var_dump($_SESSION);
    //exit();
    //listar_transportadora();
    //session_start();
    $login =  $_POST['email'];
    $senha =  $_POST['senha'];
    $listaTransportadora = $crud_transportadora->gettransportadoras();
    var_dump($listaTransportadora);
    $_SESSION['transportadora_existe'] = false;
    foreach ($listaTransportadora as $Transportadora){

        if ($login == $Transportadora['email'] AND $senha == $Transportadora['senha'] ) {
            $_SESSION = $Transportadora;
            $_SESSION['usuario_online'] = true;
            $_SESSION['transportadora_existe'] = true;
        }
    }
    // var_dump($_SESSION);
    if ($_SESSION['transportadora_existe'] == true) {
        echo 'oi';
        //exit();
        include '../views/Y-Importar/cabecalho_padrao.php';
        include '../views/Transportadora/perfilTransportadora.php';
    }

}

function editar(){

    //deve passar o ID

    $transportadora = new CrudTransportadora();
    $transportadora = $transportadora->getTransportadora($_GET['id_transportadora']);

    include __DIR__ . "/../views/Transportadora/transportadora_editar.php";

}

//Vai salvar e substituir o que foi o formulario (Atualizar)
function salvar_editar() {

    $transportadora = new CrudTransportadora();
    $transportadora->editar($_POST['id_transportadora'], $_POST['nome'], $_POST['email'], $_POST['telefone'], $_POST['senha'], $_POST['razo_social'], $_POST['cnpj'], $_POST['cidade_cod_cidade']);

}

if (isset($_GET['acao']) and function_exists($_GET['acao'])) {
    call_user_func($_GET['acao']);

} else {

    index(); // Redireciona á index

}

function excluir(){


    $transportadora = new CrudTransportadora();
    $transportadora->excluirtransportadora($_GET['id_transportadora']);

    header('Location: ../../app/controllers/Transportadora.php?acao=listar.php');
}