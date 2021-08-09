<?php

    require_once("../conexao/banco.php");

    $id = $_REQUEST['for_codigo']; 
    $nome = $_REQUEST['txt_nome']; 
    $fone = $_REQUEST['txt_fone']; 
    $cel = $_REQUEST['txt_cel']; 
    $email = $_REQUEST['txt_email'];


    $sql = "UPDATE tb_fornecedor SET 
                for_nome = '$nome',
                for_fone = '$fone',
                for_cel = '$cel', 
                for_email = '$email' WHERE for_codigo = '$id'"; 

    echo $sql;

    mysqli_query($con, $sql) or die ("Erro na sql");

    header("Location: consulta_fornecedor.php"); 
?>