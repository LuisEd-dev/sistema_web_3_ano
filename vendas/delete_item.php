<?php

    require_once('../conexao/banco.php');

    $produto = $_REQUEST['pro_codigo'];
    $venda = $_REQUEST['ven_codigo'];

    $sql = "DELETE FROM tb_itens_venda WHERE pro_codigo = '$produto' AND ven_codigo = '$venda'";

    mysqli_query($con, $sql) or die (mysqli_error($con)); 

    header("Location: form_atualizar_venda.php?ven_codigo=$venda"); 

?> 