<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> .:: Login ::. </title>
<link rel="stylesheet" type="text/css" href="css/formatacao.css">
<style type="text/css">

body {
    background-image: url("img/fundo.jpg");
    background-size: 100%;
    background-attachment: fixed;
}

label {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	color: white;
	margin: 5px;
	width: 300px;
	height: 16px;
	float: left;
}

.btn {
	width:  100px;
	height: 24px;
	background-color: #742f95;
	border: 0px;
	float: left;
	margin: 5px;
	color: #FFF;
}

.btn:hover {
	width:  100px;
	height: 24px;
	background-color: #b02e1e;
	border: 0px;
	float: left;
	margin: 5px;
	color: #FFF;
}

</style>


</head>

<body>

<form name="frm_login" action="validacao.php" method="post">
  <div id="principal">
    <label> Login </label>
    <input name="txt_usuario" type="text" class="input_01">

    <label> Senha </label>
    <input name="txt_senha" type="password" class="input_01">

    <input name="btn_enviar" type="submit" value="Logar" class="btn">
  </div>
</form>

</body>
</html>

