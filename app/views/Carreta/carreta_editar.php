<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title> Seus dados! </title>

</head>
<body>

<div class="container">

    <h1> Edite seus dados </h1>

    <!-- Form - Inicio do formulario -->
    <form class="form-horizontal" method="POST" action="../../controllers/caminhoneiro.php?acao=salvar_editar">

        <fieldset><!-- conjunto de campos -->

            <input type="hidden" name="id_caminhoneiro" value="<?= $_GET['id_caminhoneiro'] ?>">

            <!-- Text input (cod_carreta)-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="cod_carreta"></label>
                <div class="col-md-4">
                    <input value="<?= $caminhoneiro['cod_carreta'] ?>" id="cod_carreta" name="cod_carreta" type="number" placeholder="Código da carreta" class="form-control input-md" required="" title="Preencha com o número da placa da carreta">
                </div>
            </div>

            <!-- Text input (ano_fabricacao)-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="ano_fabricacao"></label>
                <div class="col-md-4">
                    <input value="<?= $caminhoneiro['ano_fabricacao'] ?>" id="ano_fabricacao" name="ano_fabricacao" type="number" placeholder="Ano de fabricação da carreta" class="form-control input-md" required="" title="Preencha com o ano de fabricação da carreta">
                </div>
            </div>

            <!-- Text input (ano_modelo)-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="ano_modelo"></label>
                <div class="col-md-4">
                    <input value="<?= $caminhoneiro['ano_modelo'] ?>" id="ano_modelo" name="ano_modelo" type="number" pattern="" placeholder="Ano do modelo da carreta" class="form-control input-md" required="" title="Preencha com o ano do modelo da carreta">
                </div>
            </div>

            <!-- Text input (cod_produto) TODO "Será passado pela tabela tipo_produto"-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="cod_produto"></label>
                <div class="col-md-4">
                    <input value="<?= $caminhoneiro['cod_produto'] ?>" id="cod_produto" name="cod_produto" type="number" placeholder="Código do produto" class="form-control input-md" required="">

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

        </fieldset>
    </form> <!-- /Form - Fim do formulario -->
</div>

</body>
</html>