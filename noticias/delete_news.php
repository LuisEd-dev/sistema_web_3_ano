<?php
require_once('../conexao/banco.php');

$id = $_REQUEST['new_codigo'];

$sql = "DELETE FROM tb_news WHERE new_codigo = '$id'";

mysqli_query($con, $sql) or die ("Erro na sql!"); 

header("Location: consulta_news.php"); 

?> 