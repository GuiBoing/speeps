<?php

    // O Controlador é a peça de código que sabe qual classe chamar, para onde redirecionar e etc.
    // Use o método $_GET para obter informações vindas de outras páginas.


    require_once "../models/Produto.php";
    require_once "../models/CrudProdutos.php";

    //quando um valor da URL for igual a cadastrar faça isso

if ($_GET['acao'] == 'cadastrar'){

    $nome      = $_POST['nome'];
    $preco     = $_POST['preco'];
    $categoria = $_POST['categoria'];
    $estoque   = $_POST['estoque'];

    $produto   = new Produto($nome, $preco, $estoque, $categoria, null);
    $crud = new CrudProdutos();
    $crud->salvar($produto);
    header('location: ../views/admin/produtos.php');

}

    //quando um valor da URL for igual a editar faça isso
    if ( $_GET['acao'] == 'editar'){


        $crud = new CrudProdutos();
        $crud->editar($_POST['id'],$_POST['nome'],$_POST['preco'],$_POST['quantidade'],$_POST['categoria']);


        header('location:../views/admin/produtos.php');

    }


    if ( $_GET['acao'] == 'excluir') {
//        echo "chamou excluiir";
        $crud = new CrudProdutos();
        $crud->excluir($_GET['id']);

        header('location:../views/admin/produtos.php');



    }
