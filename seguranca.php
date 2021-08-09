<?PHP

session_start();

require_once("../conexao/banco.php");

$usuario = $_SESSION["usuario"];
$senha   = $_SESSION["senha"];

$sql = "select  
			log_login, 
			log_senha 
		from tb_login 
		where log_login = '$usuario' and log_senha = '$senha'";
		
$sql = mysqli_query($con, $sql) or die ("Erro na sql!") ;

$total = mysqli_num_rows($sql);

if ($total == 0) {
	header("Location: ../acesso_negado.php");
} 

?>




