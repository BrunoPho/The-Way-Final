<!doctype html>
<html lang="pt-br">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

      <title> Tela de edição do seus dados! </title>
    
</head>
<body>

<div class="container">

    <h1> Edite seus dados </h1>

<!-- Form - Inicio do formulario -->
    <form class="form-horizontal" method="POST" action="../../controllers/caminhao.php?acao=salvar_editar">

        <fieldset><!-- conjunto de campos -->
<!-- cod_caminhao, ano_modelo, ano_fabricacao, capacidade, cod_modelo, cod_tipo, cod_caminhoneiro -->

            <input type="hidden" name="id_caminhao" required="<?= $_GET['id_caminhao'] ?>">

             <!-- Text input (cod_caminhao)-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="cod_caminhao"></label>
                <div class="col-md-4">
                    <input id="cod_caminhao" name="cod_caminhao" type="number" placeholder="Código do caminhao" class="form-control input-md" value="<?= $caminhao['cod_caminhao'] ?>" title="">
                </div>
            </div>

            <!-- Text input (ano_modelo)-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="ano_modelo"></label>
                <div class="col-md-4">
                    <input id="ano_modelo" name="ano_modelo" type="number" placeholder="Ano do modelo" class="form-control input-md" value="<?= $caminhao['ano_modelo'] ?>" title="Preencha com o ano do modelo de seu caminhão">
                </div>
            </div>

            <!-- Text input (ano_fabricacao)-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="ano_fabricacao"></label>
                <div class="col-md-4">
                    <input id="ano_fabricacao" name="ano_fabricacao" type="number" pattern="" placeholder="ano_fabricacao" class="form-control input-md" value="<?= $caminhao['ano_fabricacao'] ?>" title="Digite o ano de fabricacao de seu caminhão">
                </div>
            </div>

            <!-- Text input (capacidade)-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="capacidade"></label>
                <div class="col-md-4">
                    <input id="capacidade" name="capacidade" type="number" placeholder="Capacidade de carga do seu caminhão" class="form-control input-md" value="<?= $caminhao['capacidade'] ?>">

                </div>
            </div>

            <!-- Text input (cod_modelo)-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="cod_modelo"></label>
                <div class="col-md-4">
                    <input id="cod_modelo" name="cod_modelo" type="number" placeholder="Código de modelo" class="form-control input-md" value="<?= $caminhao['cod_modelo'] ?>">
                </div>
            </div>

            <!-- Text input (cod_tipo)-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="cod_tipo"></label>
                <div class="col-md-4">
                    <input id="cod_tipo" name="cod_tipo" type="number" placeholder="Código do tipo de caminhão" class="form-control input-md" value="<?= $caminhao['cod_tipo'] ?>">
                </div>

                <!-- Text input (cod_caminhoneiro) TODO "Não modicavel, vem junto" -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="cod_caminhoneiro"></label>
                    <div class="col-md-4">
                        <input id="cod_caminhoneiro" name="cod_caminhoneiro" type="number" placeholder="Código do caminhoneiro" class="form-control input-md" value="<?= $caminhao['cod_cidade'] ?>">

                    </div>
                </div>

                <!-- Botões -->
                <!-- Button (Double) - Botão (Cancelar) -->
                <div class="form-group">
                    <label class="col-md-4 control-label" type="botton1"></label>
                    <div class="col-md-8">
                        <!--<a href="cadastroC2.html" class="btn btn-success" role="button"> Prosseguir </a>-->
                        <a href="../../../index.html" class="btn btn-danger" role="button"> Cancelar </a>
                        <button class="btn btn-info" type="submit"> Atualizar </button>
                    </div>
                  </div>
               </div>

        </fieldset>
    </form> <!-- /Form - Fim do formulario -->
 </div>

</body>
</html>

<?= $caminhao['cod_caminhao'] ?>
<?= $caminhao['ano_modelo'] ?>
<?= $caminhao['ano_fabricacao'] ?>
<?= $caminhao['capacidade'] ?>
<?= $caminhao['cod_modelo'] ?>
<?= $caminhao['cod_tipo'] ?>
<?= $caminhao['cod_cidade'] ?>