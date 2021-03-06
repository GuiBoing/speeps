<?php
require_once "../models/CrudProdutos.php";
$crud = new CrudProdutos();
//seguranca
$codigo = filter_input(INPUT_GET, 'codigo', FILTER_VALIDATE_INT);
$produto = $crud->getProduto($codigo);
?>



<!DOCTYPE html>
<html lang="pt">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lojão do IFC</title>

    <!-- Bootstrap core CSS -->
    <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/css/ifc-style.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="../../index.php"><img src="../../assets/imagens/logo.png" alt="" width="80px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../../index.php">Início</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container product-content">

    <!-- Page Features -->
    <div class="row">

        <div class="col-md-5">
            <img src="../../assets/imagens/bgaqua.png" alt="" class="img-fluid">
        </div>

        <div class="col-md-7">
            <div class="row">
                <div class="col-md-12">
                    <h2><?= $produto->nome; ?></h2>
                    <h4 class="lead"><?= $produto->nome_cient; ?></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table>
                        <tr>
                            <td><h5>Disponibilidade</h5></td>
                            <td></td>
                            <td><h6><?= $produto-> getDisponibilidade()?></h6></td>
                        </tr>
                        <tr>
                            <td><h5>Preço</h5></td>
                            <td></td>
                            <td><h6><?= $produto-> preco?></h6></td>
                        </tr>
                        <tr>
                            <td><h5>Categoria</h5></td>
                            <td></td>
                            <td><h6><?= $produto-> categoria?></h6></td>
                        </tr>

                    
                    </table>
                </div>
            </div>
            <!-- end row -->

            <div class="row description-wrapper">
                <div class="col-md-12">
                    <p class="description">Consectetur adipisicing elit. Accusantium ad, adipisci commodi delectus ea eius eligendi expedita in ipsum magnam modi mollitia nisi, obcaecati perspiciatis quae quo repellendus temporibus velit.
                    </p>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-md-12 bottom-rule">
                    <h2 class="product-price">mostre preco</h2>
                </div>
            </div>
            <!-- end row -->

            <div class="row add-to-cart">
                <div class="col-md-5 product-qty">
                    <input class="btn btn-default btn-lg btn-qty" value="1" />
                    <button class="btn btn-lg btn-brand btn-full-width">
                        comprar
                    </button>
                </div>
            </div><!-- end row -->

        </div>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Instituto Federal Catarinense de Educação, Ciência e Tecnologia</p>
    </div>
    <!-- /.container -->
</footer>

</body>

</html>