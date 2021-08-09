<?php

    require_once("../conexao/banco.php");

    $sql = "SELECT *,DATE_FORMAT(for_data_cadastro,'%d/%m/%Y') as data  FROM tb_fornecedor";
    $sql = mysqli_query($con, $sql) or die("Erro na sql!");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
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
    <form name="frm_produto" action="cadastro_produto.php" method="POST">
        <div id="principal">
        
        <h1>Cadastro Produto</h1>

        <label for="txt_descricao">Descriaco</label>
        <input type="text" name="txt_descricao" class="input_01" >

        <label for="txt_qtde">Quantidade</label>
        <input type="text" name="txt_qtde" class="input_01" >

        <label for="txt_preco">Preço</label>
        <input type="text" name="txt_preco" class="input_01" >

        <label for="txt_status">Status</label>
        <select name="txt_status" class="select_01">
            <option value="A">Ativo</option>
            <option value="I">Inativo</option>
        </select>

        <label for="txt_foto">Foto</label>
        <input type="text" name="txt_foto" class="input_01" >

        <label for="txt_fornecedor">Fornecedor</label>
        <select name="txt_fornecedor" id="" class="select_01">

        <?php while($dados = mysqli_fetch_array($sql)){ ?>
            <option value="<?php echo $dados['for_codigo']; ?>"> <?php echo $dados["for_nome"] ?> </option>
        <?php } ?>

        </select>
        
        <input name="btn_enviar" type="submit" value="Enviar" class="btn" onclick="return validar_dados()">     


        </div>
    </form>
</body>
</html>