<?php

require_once('../conexao/banco.php');

$id = $_REQUEST['new_codigo'];

$sql = "SELECT * FROM tb_news WHERE new_codigo = '$id'";
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

            <form name="frm_news" action="atualizar_news.php" method="post">
                <div id="principal">
                    <hl> Atualizar Noticia </h1>
                        <label> Código </label> 
                        <input name="txt_codigo" type="text" class="input_01" value="<?php echo $dados['new_codigo']; ?>"> 
                        
                        <label> Titulo </label>
                        <input name="txt_titulo" type="text" class="input_01" value="<?php echo $dados['new_titulo']; ?>">
                        
                        <label> Descrição </label>
                        <input name="txt_descricao" type="textarea" class="input_01" value="<?php echo $dados['new_descricao']; ?>">

                        <label> Autor </label>
                        <input name="txt_autor" type="text" class="input_01" value="<?php echo $dados['new_autor']; ?>">

                        <label> Status </label>
                        <select name="txt_status" class="select_01">
                            <option value="A" <?php if($dados['new_status'] == "A"){echo "selected";} ?> >Ativo</option>
                            <option value="I" <?php if($dados['new_status'] == "I"){echo "selected";} ?>>Inativo</option>
                        </select>

                        <input name="btn_enviar" type="submit" value="Enviar" class="btn" onclick="return validar_dados()">       
                </div>
            </form>

        </body>
</html>
                        