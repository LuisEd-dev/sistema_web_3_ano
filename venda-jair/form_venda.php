
<?php

    require_once("../conexao/banco.php"); 

    $venda = isset($_REQUEST["ven_codigo"]) ? $_REQUEST["ven_codigo"] : "";

    $sqlCliente = "SELECT * FROM tb_cliente";
    $sqlCliente = mysqli_query($con, $sqlCliente) or die ("Erro na sqlCliente!");

    $sqlVenda = "SELECT *,DATE_FORMAT(ven_data,'%d/%m/%Y') as data FROM tb_venda as venda
    INNER JOIN tb_cliente as cliente on (venda.cli_codigo = cliente.cli_codigo) WHERE ven_codigo = '$venda'";
    $sqlVenda = mysqli_query($con, $sqlVenda) or die ("Erro na sqlVenda!");
    $dadosVenda = mysqli_fetch_array($sqlVenda);

    $sqlProduto = "SELECT *,DATE_FORMAT(pro_data_cadastro,'%d/%m/%Y') as data FROM tb_produto";
    $sqlProduto = mysqli_query($con, $sqlProduto) or die ("Erro na sqlProduto!");
    $dadosProduto = mysqli_fetch_array($sqlProduto);

    $sqlItens = "SELECT * FROM tb_itens_venda as itens
    INNER JOIN tb_produto as produto on (itens.pro_codigo = produto.pro_codigo) WHERE itens.ven_codigo = '$venda'";
    $sqlItens = mysqli_query($con, $sqlItens) or die ("Erro na sqlItens!");

?> 

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" type="text/css" href="../css/formatacao_venda.css">

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
    <div id="principal">

        <?php if($venda == ""){ ?>

            <form name="frm_venda" action="cadastro_venda.php" method="POST">
                <div class="principal_form">
                    <h1>Cadastro Venda</h1>
                
                    <label for="txt_cliente">Cliente</label>
                    <select name="txt_cliente" id="" class="select_01">

                    <?php while($dados = mysqli_fetch_array($sqlCliente)){ ?>
                        <option value="<?php echo $dados['cli_codigo']; ?>"> <?php echo $dados["cli_nome"] ?> </option>
                    <?php } ?>

                    </select>        

                    <label for="txt_pagamento">Tipo Pagamento</label>
                    <select name="txt_pagamento" class="select_01">
                        <option value="1">Dinheiro</option>
                        <option value="2">Cartao</option>
                    </select>

                    <input name="btn_enviar" type="submit" value="Enviar" class="btn" onclick="return validar_dados()">
                </div>
            </form>
        
        <?php } else { ?>
            <div class="principal_form">
                <form name="frm_venda" action="cadastro_venda.php" method="POST">

                    <h1>Cadastro Venda</h1>
                
                    <label for="txt_cliente">Cliente</label>
                    <select name="txt_cliente" id="" class="select_01" disabled>
                        <option value="<?php echo $dadosVenda['cli_codigo']; ?>"> <?php echo $dadosVenda["cli_nome"] ?> </option>
                    </select>        

                    <label for="txt_pagamento">Tipo Pagamento</label>
                    <select name="txt_pagamento" class="select_01" disabled>
                        <option value="1" <?php if($dadosVenda['ven_tipo_pagamento'] == "1"){echo "selected";} ?>>Dinheiro</option>
                        <option value="2" <?php if($dadosVenda['ven_tipo_pagamento'] == "2"){echo "selected";} ?>>Cartao</option>
                    </select>
                    
                </form>

                    

                <form name="frm_item_venda" action="cadastro_item_venda.php" method="POST">
                
                    <h1>Cadastro Itens</h1>

                    <input type="hidden" name="txt_venda" value="<?php echo $venda; ?>">

                    <label for="txt_produto">Produto</label>
                    <select name="txt_produto" id="" class="select_01">
                        <option value="<?php echo $dadosProduto['pro_codigo']; ?>"> <?php echo $dadosProduto["pro_descricao"] ?> </option>
                    </select>        

                    <label for="txt_valor">Valor unitario</label>
                    <input type="text" name="txt_valor" class="input_01" >

                    <label for="txt_qtde">Quantidade</label>
                    <input type="text" name="txt_qtde" class="input_01" >

                    <label for="txt_total">Total</label>
                    <input type="text" name="txt_total" class="input_01" >

                    <input name="btn_enviar" type="submit" value="Enviar" class="btn">

                </form>

            </div>

            <div class="principal_consulta">

            <div class="linha">
                <div class="coluna_02"> <strong> Produto </strong></div>
                <div class="coluna_02"> <strong> Qtde </strong></div>
                <div class="coluna_02"> <strong> Total </strong></div>
            </div> 

            <?php while ($dados = mysqli_fetch_array($sqlItens)) { ?>
                <div class="linha">

                    <div class="coluna_02"> <?php echo $dados['pro_descricao']; ?> </div>
                    <div class="coluna_02"> <?php echo $dados['ite_qtde']; ?> </div>
                    <div class="coluna_02"> <?php echo $dados['ite_total']; ?> </div>
                    <div class="coluna_01"> 
                        <a href="delete_item_venda.php?ven_codigo=<?php echo $dados['ven_codigo']; ?>&&ite_codigo=<?php echo $dados['ite_codigo']; ?>" onclick="excluir_registro(event)">
                            <img src="../img/excluir.png" alt="">
                        </a>
                    </div>
                </div>
            <?php } ?>

            </div>
                
        <?php } ?>
    </div>

</body>
</html>