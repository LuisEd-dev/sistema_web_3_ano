<?php

    require_once("../conexao/banco.php");

    $sql = "SELECT *,DATE_FORMAT(cli_data_cadastro,'%d/%m/%Y') as data FROM tb_cliente";
    $sql = mysqli_query($con, $sql) or die("Erro na sql!");

    $sql2 = "SELECT *,DATE_FORMAT(pro_data_cadastro,'%d/%m/%Y') as data FROM tb_produto";
    $sql2 = mysqli_query($con, $sql2) or die("Erro na sql!");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Vendas</title>
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
       document.frm_venda.txt_pagamento.focus()
   }
   
   /*
   function validar_dados() {
       if(document.frm_venda.txt_pagamento.value=="") {
           alert ("Você deve preencher o campo RG!");
           document.frm_venda.txt_pagamento.focus();
   
           return false;
     }
   
       if(document.frm_venda.txt_.value=="") {
           alert ("Você deve preencher o campo Nome!");
           document.frm_venda.txt_nascimento.focus();
   
           return false;
     }
    }
   */
     
   </script>

</head>
<body onload="foco()">
    <form name="frm_venda" action="cadastro_venda.php" method="POST">
        <div id="principal">
        
        <h1>Cadastro de Vendas</h1>

        <label for="txt_pagamento">Tipo do pagamento</label>
        <select name="txt_pagamento" class="select_01">
            <option value="C">Crédito</option>
            <option value="D">Débito</option>
        </select>

        <label for="txt_cliente">Cliente</label>
        <select name="txt_cliente" class="select_01">

        <?php while($dados = mysqli_fetch_array($sql)){ ?>
            <option value="<?php echo $dados['cli_codigo']; ?>"> <?php echo $dados["cli_nome"] ?> </option>
        <?php } ?>

        </select>
        
        <input name="btn_enviar" type="submit" value="Enviar" class="btn">     

        </div>
    </form>
</body>
</html>