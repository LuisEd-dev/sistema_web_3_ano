<?php
require_once('../conexao/banco.php');

$id = $_REQUEST['cli_codigo'];

$sql = "DELETE FROM tb_cliente WHERE cli_codigo = '$id'";

mysqli_query($con, $sql) or die ("Erro na sql!"); 

header("Location: consulta_cliente.php"); 

?> 