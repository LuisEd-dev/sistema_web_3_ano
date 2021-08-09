<?php

require_once("../conexao/banco.php"); 

    $nome = $_REQUEST['txt_nome']; 
    $data_nascimento = $_REQUEST['txt_data_nascimento']; 
    $email = $_REQUEST['txt_email']; 
    $sexo = $_REQUEST['txt_sexo']; 

$sql = "INSERT INTO tb_cliente (cli_nome, cli_data_nascimento, cli_email, cli_sexo) VALUES ('$nome', '$data_nascimento', '$email', '$sexo');"; 

echo $sql;

mysqli_query($con, $sql) or die ("Erro na sql"); 

header("Location: consulta_cliente.php"); 

?>