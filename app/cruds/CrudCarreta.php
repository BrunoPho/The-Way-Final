<?php

require_once __DIR__."/../conexao/Conexao.php";
require_once __DIR__."/../models/Carreta.php";

class Crudcarreta{

    private $conexao;

    //CONEXÃO COM O BANCO
    public function __construct(){
        $this->conexao = Conexao::getConexao();
    }

    public function getcarretas (){

        $listacarretas = $this->conexao->query("SELECT * FROM carreta")->fetchAll();

        return $listacarretas;
    }

    //Cadastra o usuário carreta
    public function salvar (carreta $carreta){

        try {

            $sql = "INSERT INTO carreta (cod_carreta, ano_fabricacao, ano_modelo, cod_produto)
                VALUES ( '$carreta->cod_carreta','$carreta->ano_fabricacao','$carreta->ano_modelo','$carreta->cod_produto')";

            $this->conexao->exec($sql);

        } catch (Exception $e){

            echo "Ocorreu um erro, volte a página incial e reporte, no formulario no final da página!";
            // header('Location: ../../index.html');

        }
    }

    //Busca o usuário carreta
    public function getcarreta (int $cod_carreta){

        return $this->conexao->query("SELECT * FROM carreta WHERE cod_carreta = $cod_carreta")->fetch();

        //return new carreta($carreta['nome'], $carreta['email'], $carreta['telefone'], $carreta['senha'], $carreta['rg'], $carreta['cpf'], $carreta['cidade'], $carreta['num_cnh']);
    }

//Daqui pra baixo eu mexi

    //Edita as informações do usuário carreta
    public function editar ($cod_carreta, $ano_fabricacao, $ano_modelo, $cod_produto){

        $sql = "UPDATE carreta SET cod_carreta = '$cod_carreta', ano_fabricacao = '$ano_fabricacao', ano_modelo = '$ano_modelo', cod_produto = '$cod_produto'";
        $this->conexao->exec($sql);
    }
    //   numero_seguro, data_entrega, cod_carreta, data_cadastro, quantidade, data_retirada, data_retirada_prev, data_entrega_prev, cod_status, cod_cidade, cod_produto

    //Exclui o usuário carreta
    public function excluircarreta ($id_carreta){

        $this->conexao->exec("DELETE from carreta where cod_carreta = $id_carreta");
    }

//
//    //login
//    public function login ($carreta, $senha, $cod_carreta){
//
//        $this->conexao->query("SELECT * FROM carreta WHERE cod_carreta = $cod_carreta");
//
//  $carreta = $this->fetch(PDO::FETCH_ASSOC); //SEMELHANTES JSON ENCODE E DECODE
//
//        return new carreta($carreta['nome'], $carreta['senha'], $carreta['telefone'], $carreta['senha'], $carreta['rg'], $carreta['cpf'], $carreta['num_cnh'], $carreta['cod_cidade']);
//
//    }

}
