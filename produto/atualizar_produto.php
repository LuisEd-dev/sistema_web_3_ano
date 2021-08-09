<?php

    require_once("../conexao/banco.php");

    $id = $_REQUEST["txt_codigo"];
    $descricao  = $_REQUEST["txt_descricao"];
    $qtde = $_REQUEST["txt_qtde"];
    $preco = $_REQUEST["txt_preco"];
    $status = $_REQUEST["txt_status"];
    $foto = $_REQUEST["txt_foto"];
    $fornecedor = $_REQUEST["txt_fornecedor"];

    $sql = "UPDATE tb_produto SET pro_descricao = '$descricao', pro_qtde = '$qtde', pro_preco = '$preco', pro_status = '$status', 
                pro_foto = '$foto', for_codigo = '$fornecedor' WHERE pro_codigo = '$id'"; 

    mysqli_query($con, $sql) or die ("Erro na sql");

    header("Location: consulta_produto.php"); 
?>