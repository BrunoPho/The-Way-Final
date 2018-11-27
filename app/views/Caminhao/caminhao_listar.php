<!doctype html>
<html lang="pt-br">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title> Caminhões! </title>
</head>
<body>

<div class="container">

    <h1> Lista caminhões </h1>

    <table class="table">
        <thead>
        <tr>  
            <th scope="col"> Código do caminhão           </th>
            <th scope="col"> Ano do modelo                </th>
            <th scope="col"> Ano da frabricação           </th>
            <th scope="col"> Capacidade                   </th>
            <th scope="col"> Código de modelo             </th>
            <th scope="col"> Código do tipo do caminhão   </th>
            <th scope="col"> Código do caminhão           </th>
        </tr>
        </thead>
        <tbody>

        <?php foreach ($listaCaminhaos as $caminhao): ?>
            <tr>
                <th scope="row"><?= $caminhao['cod_caminhao'] ?></th>
                <td><?= $caminhao['ano_modelo'] ?></td>
                <td><?= $caminhao['ano_frabricação'] ?></td>
                <td><?= $caminhao['capacidade'] ?></td>
                <td><?= $caminhao['cod_modelo'] ?></td>
                <td><?= $caminhao['cod_tipo'] ?></td>
                <td><?= $caminhao['cod_caminhao'] ?></td>
                <td><a class="btn btn-info"   href="http://localhost/The-Way-Final-master/app/controllers/caminhao.php?acao=editar&id_caminhao= <?= $caminhao['cod_caminhao'] ?>"> Editar  </a></td>
                <td><a class="btn btn-danger" href="http://localhost/The-Way-Final-master/app/controllers/caminhao.php?acao=excluir&id_caminhao=<?= $caminhao['cod_caminhao'] ?>"> Excluir </a></td>
            </tr>

        <?php endforeach; ?>

        </tbody>
    </table>
</div>

</body>
</html>