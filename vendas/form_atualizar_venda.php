<?php

require_once('../conexao/banco.php');

$id = $_REQUEST['ven_codigo'];

$sql = "SELECT * FROM tb_venda WHERE ven_codigo = '$id'";
$sql = mysqli_query($con, $sql) or die ("Erro na sql!");
$dados = mysqli_fetch_array($sql); 

$sql2 = "SELECT *,DATE_FORMAT(pro_data_cadastro,'%d/%m/%Y') as data FROM tb_produto";
$sql2 = mysqli_query($con, $sql2) or die("Erro na sql!");

$sql3 = "SELECT * FROM tb_itens_venda WHERE ven_codigo = '$id'";
$sql3 = mysqli_query($con, $sql3) or die("Erro na sql!");

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
    /*
   
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
    } */
     

    function excluir_registro() {

        if(!confirm('Deseja realmente excluir este registro?') 

        ){

        if(window.event)

            window.event.returnValue=false;

        else

            e.preventDefault();

        }

    }

   </script>

        </head>

        <body>

            <form name="frm_venda" action="atualizar_venda.php" method="post">
                <div id="principal">
                    <h1> Atualizar Venda </h1>
                        
                    <input name="txt_codigo" type="text" class="input_01" value="<?php echo $dados['ven_codigo']; ?>" hidden>

                    <?php while($dados = mysqli_fetch_array($sql2)){ ?>
                            <label for="<?php echo $dados["pro_codigo"];?>"><?php echo $dados["pro_descricao"];?></label>
                            <input type="number" class="input_01" name="<?php echo $dados["pro_codigo"];?>" value="0" max="<?php echo $dados["pro_qtde"];?>" required >
                    <?php } ?>
                
                        <h2>Produtos Adicionados</h2>

                    <?php while($dados3 = mysqli_fetch_array($sql3)){ ?>
                        <label> Codigo do Produto: <?php echo $dados3["pro_codigo"]; ?> | Valor Unitario:  <?php echo $dados3["ite_valor_unit"]; ?> | QTDE <?php echo $dados3["ite_qtde"]; ?> | Total: <?php echo $dados3["ite_total"]; ?> 
                        <a onclick="excluir_registro(event)" href="delete_item.php?ven_codigo=<?php echo $dados3['ven_codigo']; ?>&pro_codigo=<?php echo $dados3["pro_codigo"]; ?>">X</a></label>
                    <?php } ?>

                    <input name="btn_enviar" type="submit" value="Enviar" class="btn" >       
                </div>
            </form>

        </body>
</html>
                        