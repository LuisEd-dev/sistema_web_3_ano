<?php

require_once('../conexao/banco.php');

$id = $_REQUEST['for_codigo'];

$sql = "SELECT * FROM tb_fornecedor WHERE for_codigo = '$id'";
$sql = mysqli_query($con, $sql) or die ("Erro na sql!");
$dados = mysqli_fetch_array($sql); 

?>

<!DOCTYPE html>
    <html>
        <head>
            <meta charset='utf-8'>
            <title> Formulário Atualizar </title>
            <link rel="stylesheet" type="text/css" href="../css/formatacao.css"> 

            <script language="JavaScript">
	
    function mascara(t, mask){
   
    var i = t.value.length;
    var saida = mask.substring(1,0);
    var texto = mask.substring(i)
    
     if (texto.substring(0,1) != saida){
         t.value += texto.substring(0,1);
     }
   
    }
   
    function foco() {
       document.frm_modelo.txt_nome.focus()
   }
   
    function validar_dados() {
       if(document.frm_modelo.txt_nome.value=="") {
           alert ("Você deve preencher o campo RG!");
           document.frm_modelo.txt_nome.focus();
   
           return false;
     }
   
       if(document.frm_modelo.txt_nascimento.value=="") {
           alert ("Você deve preencher o campo Nome!");
           document.frm_modelo.txt_nascimento.focus();
   
           return false;
     }
    }
     
   </script>

        </head>

        <body onload="foco()">

            <form name="frm_login" action="atualizar_fornecedor.php" method="post">
                <div id="principal">
                    <hl> Atualizar fornecedor </h1>
                        
                        <input name="for_codigo" type="text" class="input_01" value="<?php echo $dados['for_codigo']; ?>" hidden>

                        <label> Nome </label>
                        <input name="txt_nome" type="text" class="input_01" value="<?php echo $dados['for_nome']; ?>">

                        <label> Telefone </label>
                        <input name="txt_fone" type="text" class="input_01" value="<?php echo $dados['for_fone']; ?>" onkeypress="mascara(this, '## ####-####')" maxlength="12">
                        
                        <label> Celular </label>
                        <input name="txt_cel" type="text" class="input_01" value="<?php echo $dados['for_cel']; ?>" onkeypress="mascara(this, '## #####-####')">

                        <label> Email </label>
                        <input name="txt_email" type="email" class="input_01" value="<?php echo $dados['for_email']; ?>">

                        <input name="btn_enviar" type="submit" value="Enviar" class="btn" onclick="return validar_dados()">       
                </div>
            </form>

        </body>
</html>
                        