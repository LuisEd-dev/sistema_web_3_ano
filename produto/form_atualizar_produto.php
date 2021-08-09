<?php

require_once('../conexao/banco.php');

$id = $_REQUEST['pro_codigo'];

$sql = "SELECT * FROM tb_produto WHERE pro_codigo = '$id'";
$sql = mysqli_query($con, $sql) or die ("Erro na sql!");
$dados = mysqli_fetch_array($sql); 

$sql2 = "SELECT *,DATE_FORMAT(for_data_cadastro,'%d/%m/%Y') as data  FROM tb_fornecedor";
$sql2 = mysqli_query($con, $sql2) or die("Erro na sql!");

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

        <body>

            <form name="frm_produto" action="atualizar_produto.php" method="post">
                <div id="principal">
                    <hl> Atualizar login </h1>
                        
                    <input name="txt_codigo" type="text" class="input_01" value="<?php echo $dados['pro_codigo']; ?>" hidden>

                    <label for="txt_descricao">Descriaco</label>
                    <input type="text" name="txt_descricao" class="input_01" value="<?php echo $dados['pro_descricao']; ?>">

                    <label for="txt_qtde">Quantidade</label>
                    <input type="text" name="txt_qtde" class="input_01" value="<?php echo $dados['pro_qtde']; ?>">

                    <label for="txt_preco">Preço</label>
                    <input type="text" name="txt_preco" class="input_01" value="<?php echo $dados['pro_preco']; ?>">

                    <label for="txt_status">Status</label>
                    <select name="txt_status" class="select_01">
                        <option value="A" <?php if($dados['pro_status'] == "A"){echo "selected";} ?> >Ativo</option>
                        <option value="I" <?php if($dados['pro_status'] == "I"){echo "selected";} ?>>Inativo</option>
                    </select>

                    <label for="txt_foto">Foto</label>
                    <input type="text" name="txt_foto" class="input_01" value="<?php echo $dados['pro_foto']; ?>">

                    <label for="txt_fornecedor">Fornecedor</label>
                    <select name="txt_fornecedor" class="select_01">

                        <?php while($dados2 = mysqli_fetch_array($sql2)){ ?>
                            <option <?php if($dados2['for_codigo'] == $dados['for_codigo']){echo "selected";} ?> value="<?php echo $dados2['for_codigo']; ?>"> <?php echo $dados2["for_nome"] ?> </option>
                        <?php } ?>

                    </select>

                    <input name="btn_enviar" type="submit" value="Enviar" class="btn" onclick="return validar_dados()">       
                </div>
            </form>

        </body>
</html>
                        