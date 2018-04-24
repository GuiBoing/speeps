<?php

require_once "../../../app/models/CrudProdutos.php";
require_once "../../../app/models/Produto.php";
$crud = new CrudProdutos();

$listaProdutos = $crud->getProdutos();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="https://icon-icons.com/icons2/881/PNG/512/Fish_Food_icon-icons.com_68747.png">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="../../../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../assets/css/ifc-style-admin.css">


    <title>Area do admin</title>


</head>

<body>
<!--Barra de busca-->
<div class="row">
    <div class="col-md-12">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="digite o nome do produto" aria-describedby="basic-addon2">
            <button class="input-group-addon" id="basic-addon2">buscar</button>
        </div>
    </div>
</div>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="../../../index.php"><img src="../../../assets/imagens/logo.png" alt="" width="120px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../../../index.php">Início</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../../../app/views/admin/produtos.php">Área do admin</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<br>

<table class="table table-bordered">
    <thead>
    <tr>
        <th>codigo</th>
        <th>nome de mercado</th>
        <th>nome cientifico</th>
        <th>Preço</th>
        <th>Estoque</th>
        <th>Categoria</th>
        <th>Ações</th>
    </tr>
    </thead>
    <tbody>
        <tr>
        <?php foreach($listaProdutos as $prod): ?>
            <th scope="row"><?= $prod->codigo ?></th>
            <td><?= $prod->nome ?></td>
            <td><?= $prod->nome_cient ?></td>
            <td><?= $prod->preco ?></td>
            <td><?= $prod->qtd_estoque ?></td>
            <td><?= $prod->categoria ?></td>
            <td><a href="">editar</a> | <a href="">remover</a></td>
        </tr>
    <?php endforeach; ?>

    </tbody>
</table>

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Instituto Federal Catarinense de Educação, Ciência e Tecnologia</p>
    </div>
    <!-- /.container -->
</footer>

</body>

</html>