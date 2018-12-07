<?php

require_once "../models/Caminhoneiro.php";
require_once "../cruds/CrudCaminhoneiro.php";
require_once "../models/Transportadora.php";
require_once "../cruds/CrudTransportadora.php";
require_once "../models/Servico.php";
require_once "../cruds/CrudServico.php";


function verificar_caminhoneiro(){
    
    $CrudServico = new CrudServico();
    $listaservicos = $CrudServico->getservicos();

    session_start();

    $login =  $_POST['login'];
    $senha =  $_POST['senha'];
    $crud = new CrudCaminhoneiro();
    $listacaminhoneiros = $crud->getCaminhoneiros();
    $_SESSION['caminhoneiro_existe'] = false;

    foreach ($listacaminhoneiros as $listacaminhoneiro){

        if ($login == $listacaminhoneiro['login'] AND $senha == $listacaminhoneiro['senha'] ) {
            $_SESSION = $listacaminhoneiro;
            $_SESSION['usuario_online'] = true;
            $_SESSION['caminhoneiro_existe'] = true;
        }
    }
    // var_dump($_SESSION);
    if ($_SESSION['caminhoneiro_existe'] == true) {
        include '../../app/views/Y-Importar/cabecalho_padrao.php';
        include'../views/funcional.php';
    }
    $_SESSION['usuario_existe'] = false;
    $crud = new CrudTransportadora();
    $lista_transportadoras = $crud->gettransportadoras();
    foreach ($lista_transportadoras as $lista_transportadora){
        if ($login == $lista_transportadora['login'] AND $senha == $lista_transportadora['senha']) {
            $_SESSION = $lista_transportadora;
            $_SESSION['usuario_online'] = true;
            $_SESSION['usuario_existe'] = true;
        }
    }
    if ($_SESSION['usuario_existe'] == true) {
        include '../../app/views/Y-Importar/cabecalho_padrao.php';
        include __DIR__.'/../views/Caminhoneiro/caminhoneiro_listar.php';
    }
    elseif ($_SESSION['caminhoneiro_existe'] == false AND $_SESSION['usuario_existe'] == false){
        $_SESSION['alerta'] = 'Login ou Senha incorretos';
        include '../../app/views/Y-Importar/cabecalho_padrao.php';
        include '../views/Login/loginC.php';
    }
}
if (isset($_GET['acao'])){
    $acao = $_GET['acao'];
} else{
    header('Location: ../../index.php');
}

function login(){
    session_start();
    include '../../app/views/Y-Importar/cabecalho_padrao.php';
    include '../views/Login/loginC.php';
}
function logout(){
    session_start();
    session_destroy();
    header('Location: ../../index.php');
}
switch ($acao) {
    case 'login':
        login();
        break;
    case 'verificar_caminhoneiro':
        verificar_caminhoneiro();
        break;
    default:
    case 'logout':
        logout();
        break;

        break;
}