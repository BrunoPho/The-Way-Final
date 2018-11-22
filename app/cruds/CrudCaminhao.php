<?php

require_once __DIR__."/../conexao/Conexao.php";
require_once __DIR__."/../models/Caminhao.php";

class Crudcaminhao{

    private $conexao;

    //CONEXÃO COM O BANCO
    public function __construct(){
        $this->conexao = Conexao::getConexao();
    }


    public function getcaminhaos (){

        $listacaminhaos = $this->conexao->query("SELECT * FROM caminhao")->fetchAll();

        return $listacaminhaos;
    }



    //Cadastra o usuário caminhao
    public function salvar (caminhao $caminhao){

        try {

            $sql = "INSERT INTO caminhao (cod_caminhao, ano_modelo, ano_fabricacao, capacidade, cod_modelo, cod_tipo, cod_caminhoneiro)
                VALUES ( '$caminhao->cod_caminhao','$caminhao->ano_modelo','$caminhao->ano_fabricacao','$caminhao->capacidade','$caminhao->cod_modelo','$caminhao->cod_tipo','$caminhao->cod_caminhao',)";

            $this->conexao->exec($sql);

        } catch (Exception $e){

            echo "Ocorreu um erro, volte a página incial e reporte, no formulario no final da página!";
            // header('Location: ../../index.html');

        }
    }

    //Busca o usuário caminhao
    public function getcaminhao (int $cod_caminhao){

        return $this->conexao->query("SELECT * FROM caminhao WHERE cod_caminhao = $cod_caminhao")->fetch();

        //return new caminhao($caminhao['nome'], $caminhao['email'], $caminhao['telefone'], $caminhao['senha'], $caminhao['rg'], $caminhao['cpf'], $caminhao['cidade'], $caminhao['num_cnh']);
    }

//Daqui pra baixo eu mexi

    //Edita as informações do usuário caminhao
    //cod_caminhao, ano_modelo, ano_fabricacao, capacidade, cod_modelo, cod_tipo, cod_caminhoneiro
    public function editar ($cod_caminhao, $ano_modelo, $ano_fabricacao, $capacidade, $cod_modelo, $cod_tipo, $cod_caminhoneiro){

        $sql = "UPDATE caminhao SET cod_caminhao = '$ano_modelo', ano_modelo = '$cod_caminhao', ano_fabricacao = '$ano_fabricacao', capacidade = '$capacidade', cod_modelo = '$cod_modelo', cod_tipo = '$cod_tipo', cod_caminhoneiro = '$cod_caminhoneiro'";
        $this->conexao->exec($sql);
    }
    //   numero_seguro, data_entrega, cod_caminhao, data_cadastro, quantidade, data_retirada, data_retirada_prev, data_entrega_prev, cod_status, cod_cidade, cod_produto

    //Exclui o usuário caminhao
    public function excluircaminhao ($id_caminhao){

        $this->conexao->exec("DELETE from caminhao where cod_caminhao = $id_caminhao");
    }

//
//    //login
//    public function login ($caminhao, $senha, $cod_caminheiro){
//
//        $this->conexao->query("SELECT * FROM caminhao WHERE cod_caminhao = $cod_caminheiro");
//
//  $caminhao = $this->fetch(PDO::FETCH_ASSOC); //SEMELHANTES JSON ENCODE E DECODE
//
//        return new caminhao($caminhao['nome'], $caminhao['senha'], $caminhao['telefone'], $caminhao['senha'], $caminhao['rg'], $caminhao['cpf'], $caminhao['num_cnh'], $caminhao['cod_cidade']);
//
//    }

}
