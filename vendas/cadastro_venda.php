<?php

    require_once("../conexao/banco.php"); 

    $cliente  = $_REQUEST["txt_cliente"];
    $pagamento  = $_REQUEST["txt_pagamento"];

    
    $sql = "INSERT INTO tb_venda (cli_codigo, ven_tipo_pagamento) 
        VALUES ('$cliente', '$pagamento' )"; 

        $var1 = mysqli_query($con, $sql) or die ("Erro na sql"); 
        
        echo mysqli_insert_id($con);

        header("Location: form_atualizar_venda.php?ven_codigo=".mysqli_insert_id($con)); 

?>