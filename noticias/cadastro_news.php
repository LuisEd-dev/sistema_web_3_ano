<?php

require_once("../conexao/banco.php"); 

$titulo = $_REQUEST['txt_titulo']; 
$descricao = $_REQUEST['txt_descricao']; 
$autor = $_REQUEST['txt_autor'];
$status = $_REQUEST['txt_status'];

$sql = "INSERT INTO tb_news (new_titulo, new_descricao, new_autor, new_status) VALUES ('$titulo', '$descricao', '$autor', '$status' )"; 

mysqli_query($con, $sql) or die ("Erro na sql"); 

header("Location: consulta_news.php"); 

?>