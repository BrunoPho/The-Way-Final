<!doctype html>
<html lang="pt-br">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title> Carretas! </title>

</head>
<body>

<div class="container">

    <p><h1> Lista de carretas </h1></p>

    <table class="table">
        <thead>
        <tr>
            <th scope="col"> cod_carreta    </th>
            <th scope="col"> ano_fabricacao </th>
            <th scope="col"> ano_modelo     </th>
            <th scope="col"> cod_produto    </th>
            <th scope="col">     #          </th>
            <th scope="col">     #          </th>
        </tr>
        </thead>
        <tbody>

        <?php foreach ($listacarretas as $carreta): ?>

            <tr>
                <th scope="row"><?= $carreta['cod_carreta'] ?></th>
                <td><?= $carreta['ano_fabricacao'] ?></td>
                <td><?= $carreta['ano_modelo'] ?></td>
                <td><?= $carreta['cod_produto'] ?></td>
                <td><a class="btn btn-info"   href="http://localhost/The-Way-Final-master/app/controllers/carreta.php?acao=editar&id_carreta= <?= $carreta['cod_carreta'] ?>"> Editar  </a></td>
                <td><a class="btn btn-danger" href="http://localhost/The-Way-Final-master/app/controllers/carreta.php?acao=excluir&id_carreta=<?= $carreta['cod_carreta'] ?>"> Excluir </a></td>
            </tr>

        <?php endforeach; ?>

        </tbody>
    </table>
</div>

</body>
</html>