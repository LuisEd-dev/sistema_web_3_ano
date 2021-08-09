<?php
require_once('../conexao/banco.php');

$id = $_REQUEST['log_codigo'];

$sql = "DELETE FROM tb_login WHERE log_codigo = '$id'";

mysqli_query($con, $sql) or die ("Erro na sql!"); 

header("Location: consulta_login.php"); 

?> 