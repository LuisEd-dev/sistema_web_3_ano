<?php

    require_once("../conexao/banco.php");

    $id = $_REQUEST['txt_codigo']; 
    $titulo = $_REQUEST['txt_titulo']; 
    $descricao = $_REQUEST['txt_descricao']; 
    $autor = $_REQUEST['txt_autor'];
    $status = $_REQUEST['txt_status'];

    $sql = "UPDATE tb_news SET new_titulo = '$titulo', new_descricao = '$descricao', new_autor = '$autor', new_status = '$status' WHERE new_codigo = '$id'"; 

    mysqli_query($con, $sql) or die ("Erro na sql");

    header("Location: consulta_news.php"); 
?>