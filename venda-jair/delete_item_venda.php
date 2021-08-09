<?php

    require_once('../conexao/banco.php');

    $venda = $_REQUEST['ven_codigo'];
    $id = $_REQUEST['ite_codigo'];

    $sql = "DELETE FROM tb_itens_venda WHERE ven_codigo = '$venda' AND ite_codigo = '$id'";
    mysqli_query($con, $sql) or die (mysqli_error($con)); 

    header("Location: form_venda.php?ven_codigo=$venda"); 

?> 