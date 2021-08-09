<?php
require_once('../conexao/banco.php');

$id = $_REQUEST['for_codigo'];

$sql = "DELETE FROM tb_fornecedor WHERE for_codigo = '$id'";

mysqli_query($con, $sql) or die ("Erro na sql!"); 

header("Location: consulta_fornecedor.php"); 

?> 