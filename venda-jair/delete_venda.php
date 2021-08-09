<?php

    require_once('../conexao/banco.php');

    $venda = $_REQUEST['ven_codigo'];

    $sql = "DELETE FROM tb_itens_venda WHERE ven_codigo = '$venda'";
    mysqli_query($con, $sql) or die (mysqli_error($con)); 

    $sql2 = "DELETE FROM tb_venda WHERE ven_codigo = '$venda'";
    mysqli_query($con, $sql2) or die (mysqli_error($con)); 

    header("Location: consulta_venda.php"); 

?> 