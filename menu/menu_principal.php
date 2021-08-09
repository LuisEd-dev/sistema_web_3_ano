<?PHP
require_once("../seguranca.php");
?>

<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title> .:: Sistema WEB ::. </title>
	<link href="../css/menu.css" rel="stylesheet" type="text/css" />

	<style type="text/css">
		body {
			background-color: #FFF;
			margin: 0px;
			width: 100%;
			height: 100vh;
			font-family: Verdana, Geneva, sans-serif;
			color: #6e7882;
			font-size: 14px;
			background-color: #F4F4F4;
		}

		#principal {
			width: 100%;
			height: 1000px;
		}

		#menu {
			width: 25%;
			height: 1000px;
			background-color: #26333c;
			float: left;
		}

		#conteudo {
			width: 75%;
			height: 1000px;
			float: left;
			background-color: #F4F4F4;
		}

		.titulo {
			width: 96%;
			height: 21px;
			float: left;
			border: 0px;
			font-weight: bold;
			color: #FFF;
			background-color: #ff0000;
			padding: 2%;
		}

		.botao {
			width: 92%;
			height: 20px;
			float: left;
			border: 0px;
			border-bottom: 2px;
			border-color: #1e2b34;
			border-style: solid;
			padding: 4%;
		}

		.botao:hover {
			background-color: #0000ff;
			color: #FFF;
		}

		a {
			font-family: Verdana, Geneva, sans-serif;
			color: #fff;
			font-size: 14px;
		}

		img {
			width: 12px;
			height: 12px;
		}
	</style>


</head>

<body>
	<div id="principal">
		<div id="menu">

			<div class="titulo"> :: Login </div>

			<a href="../login/form_login.html" target="conteudo">
				<div class="botao"> <img src="../img/icon_cadastro.png"> Formulário de Cadastro Usuário </div>
			</a>

			<a href="../login/consulta_login.php" target="conteudo">
				<div class="botao"> <img src="../img/icon_consulta.png"> Consulta Usuários </div>
			</a>

			<a href="../cliente/form_cliente.html" target="conteudo">
				<div class="botao"> <img src="../img/icon_cadastro.png"> Formulário de Cadastro Cliente </div>
			</a>

			<a href="../cliente/consulta_cliente.php" target="conteudo">
				<div class="botao"> <img src="../img/icon_consulta.png"> Consulta Clientes </div>
			</a>

			<a href="../fornecedor/form_fornecedor.html" target="conteudo">
				<div class="botao"> <img src="../img/icon_cadastro.png"> Formulário de Cadastro Fornecedor </div>
			</a>

			<a href="../fornecedor/consulta_fornecedor.php" target="conteudo">
				<div class="botao"> <img src="../img/icon_consulta.png"> Consulta Fornecedor </div>
			</a>

			<a href="../produto/form_produto.php" target="conteudo">
				<div class="botao"> <img src="../img/icon_cadastro.png"> Formulário de Cadastro Produto </div>
			</a>

			<a href="../produto/consulta_produto.php" target="conteudo">
				<div class="botao"> <img src="../img/icon_consulta.png"> Consulta Produto </div>
			</a>

			<a href="../noticias/form_news.html" target="conteudo">
				<div class="botao"> <img src="../img/icon_cadastro.png"> Formulário de Noticias </div>
			</a>

			<a href="../noticias/consulta_news.php" target="conteudo">
				<div class="botao"> <img src="../img/icon_consulta.png"> Consulta Noticias </div>
			</a>

			<a href="../venda-jair/form_venda.php" target="conteudo">
				<div class="botao"> <img src="../img/icon_cadastro.png"> Formulário de Vendas </div>
			</a>

			<a href="../venda-jair/consulta_venda.php" target="conteudo">
				<div class="botao"> <img src="../img/icon_consulta.png"> Consulta Vendas </div>
			</a>

			<div class="titulo"> :: Backup </div>

			<a href="../backup.php" target="conteudo">
				<div class="botao"> <img src="../img/icon_cadastro.png"> Fazer Backup </div>
			</a>

			<div class="titulo"> :: Sair </div>

			<a href="../logout.php">
				<div class="botao"> <img src="../img/icon_cadastro.png"> Logout </div>
			</a>

		</div>

		<div id="conteudo">
			<iframe name="conteudo" src="" height="1000px" width="100%" frameborder="0" scrolling="auto"> </iframe>
		</div>

	</div>
</body>

</html>