<?php
session_start();
require_once("conexao/banco.php");

$usuario = $_REQUEST['txt_usuario'];
$senha   = $_REQUEST['txt_senha'];

$sql = "select  
			log_login, 
			log_senha 
		from tb_login 
		where log_login = '$usuario' 
		and log_senha = '$senha'";
		
$sql = mysqli_query($con, $sql) or die ("Erro na sql!") ;
echo $total = mysqli_num_rows($sql);

if ($total == 1) {
	$_SESSION["usuario"] = $usuario;
	$_SESSION["senha"] = $senha;
	header("location: backup/index.php");
	// header("location: menu/menu_principal.php");
} else {
	header("location: acesso_negado.php");
}
