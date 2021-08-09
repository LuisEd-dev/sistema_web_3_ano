<?php

    require_once("../conexao/banco.php"); 

    $descricao  = $_REQUEST["txt_descricao"];
    $qtde = $_REQUEST["txt_qtde"];
    $preco = $_REQUEST["txt_preco"];
    $status = $_REQUEST["txt_status"];
    $foto = $_REQUEST["txt_foto"];
    $fornecedor = $_REQUEST["txt_fornecedor"];

    $sql = "INSERT INTO tb_produto (pro_descricao, pro_qtde, pro_preco, pro_status, pro_foto, for_codigo) 
        VALUES ('$descricao', '$qtde', '$preco', '$status', '$foto', '$fornecedor' )"; 

    mysqli_query($con, $sql) or die ("Erro na sql"); 

    header("Location: consulta_produto.php"); 

?>