<?php

    require_once("../conexao/banco.php");

    $id = $_REQUEST['cli_codigo']; 
    $nome = $_REQUEST['txt_nome']; 
    $data_nascimento = $_REQUEST['txt_data_nascimento']; 
    $email = $_REQUEST['txt_email']; 
    $sexo = $_REQUEST['txt_sexo']; 


    $sql = "UPDATE tb_cliente SET cli_nome = '$nome', cli_data_nascimento = '$data_nascimento', cli_email = '$email', cli_sexo = '$sexo' WHERE cli_codigo = '$id'"; 

    echo $sql;

    mysqli_query($con, $sql) or die ("Erro na sql");

    header("Location: consulta_cliente.php"); 
?>