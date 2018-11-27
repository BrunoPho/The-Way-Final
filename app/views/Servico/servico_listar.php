<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title> Hello, serviços! </title>

</head>
<body>

    <div class="container">

        <p><h1> Lista de serviços </h1></p>

        <table class="table">
            <thead>
            <tr>
                <th scope="col"> numero_seguro      </th>
                <th scope="col"> data_entrega       </th>
                <th scope="col"> cod_servico        </th>
                <th scope="col"> data_cadastro      </th>
                <th scope="col"> quantidade         </th>
                <th scope="col"> data_retirada      </th>
                <th scope="col"> data_retirada_prev </th>
                <th scope="col"> data_entrega_prev  </th>
                <th scope="col"> cod_status         </th>
                <th scope="col"> cod_cidade         </th>
                <th scope="col"> cod_produto        </th>
                <th scope="col">     #              </th>
                <th scope="col">     #              </th>
            </tr>
            </thead>
            <tbody>

            <?php foreach ($listaservicos as $servico): ?>

            <tr>    

                <th scope="row"><?= $servico['numero_seguro'] ?></th>
                <td><?= $servico['data_entrega'] ?>  </td>
                <td><?= $servico['cod_servico'] ?>   </td>
                <td><?= $servico['data_cadastro'] ?> </td>
                <td><?= $servico['quantidade'] ?>    </td>
                <td><?= $servico['data_retirada'] ?> </td>
                <td><?= $servico['data_retirada_prev'] ?> </td>
                <td><?= $servico['data_entrega_prev'] ?>  </td>
                <td><?= $servico['cod_status'] ?>  </td>
                <td><?= $servico['cod_cidade'] ?>  </td>
                <td><?= $servico['cod_produto'] ?> </td>
                <td><a class="btn btn-info"   href="http://localhost/The-Way-Final-master/app/controllers/servico.php?acao=editar&id_servico= <?= $servico['cod_servico'] ?>"> Editar  </a></td>
                <td><a class="btn btn-danger" href="http://localhost/The-Way-Final-master/app/controllers/servico.php?acao=excluir&id_servico=<?= $servico['cod_servico'] ?>"> Excluir </a></td>
            </tr>

            <button class="btn btn-info" href="../Transportadora/perfilTransportadora.html" > Voltar </button>

            <?php endforeach; ?>

            </tbody>
        </table>
    </div>

</body>
</html>