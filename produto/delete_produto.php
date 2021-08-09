<?php

    require_once('../conexao/banco.php');

    $id = $_REQUEST['pro_codigo'];

    $sql = "DELETE FROM tb_produto WHERE pro_codigo = '$id'";

    mysqli_query($con, $sql) or die ("Erro na sql!"); 

    header("Location: consulta_produto.php"); 

?> 