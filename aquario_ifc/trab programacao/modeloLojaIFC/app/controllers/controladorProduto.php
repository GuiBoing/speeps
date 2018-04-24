<?php

    // O Controlador é a peça de código que sabe qual classe chamar, para onde redirecionar e etc.
    // Use o método $_GET para obter informações vindas de outras páginas.


    require_once "../models/Produto.php";
    require_once "../models/CrudProdutos.php";

    //quando um valor da URL for igual a cadastrar faça isso

if ($_GET['acao'] == 'cadastrar'){

    $nome      = $_POST[''];
    $preco     = $_POST[''];
    $categoria = $_POST['categoria'];
    $estoque   = $_POST['estoque'];

    $produto   = new Produto($nome, $preco, $estoque, $categoria, null);
    $crud = new CrudProdutos();
    $crud->salvar($produto);
    header('location: ../views/admin/produtos.php');

}

    }
