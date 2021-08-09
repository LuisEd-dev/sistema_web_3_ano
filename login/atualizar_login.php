<?php

    require_once("../conexao/banco.php");

    $id = $_REQUEST['txt_codigo']; 
    $nome = $_REQUEST['txt_nome']; 
    $login = $_REQUEST['txt_login'];
    $senha = $_REQUEST[ 'txt_senha' ];

    $sql = "UPDATE tb_login SET log_nome = '$nome', log_login = '$login', log_senha = '$senha ' WHERE log_codigo = '$id'"; 

    mysqli_query($con, $sql) or die ("Erro na sql");

    header("Location: consulta_login.php"); 
?>