<?php

require_once("../conexao/banco.php"); 

$sql = "SELECT *,DATE_FORMAT(pro_data_cadastro,'%d/%m/%Y') as data FROM tb_produto";

$sql = mysqli_query($con, $sql) or die ("Erro na sql!")

?> 

<!doctype html>
<html> 
    <head>
    <meta charset="utf-8">
    <title> Consulta Login </title>
    <link rel="stylesheet" type="text/css" href="../css/consulta.css">
    </head>

    <body>
        <div id="principar">
            <div class="linha">
            <div class="coluna_01"> <strong> ID </strong></div>
            <div class="coluna_02"> <strong> Descricao </strong></div>
            <div class="coluna_01"> <strong> Quantidade </strong></div>
            <div class="coluna_01"> <strong> Preco </strong></div>
            <div class="coluna_02"> <strong> Data Cadastro </strong></div>
            <div class="coluna_01"> <strong> Status </strong></div>
            <div class="coluna_02"> <strong> Foto </strong></div>
            <div class="coluna_01"> <strong> Fornecedor </strong></div>
        </div> 

    <?php while ($dados = mysqli_fetch_array($sql)) { ?>
    <div class="linha">

        <div class="coluna_01"> <?php echo $dados['pro_codigo']; ?> </div>
        <div class="coluna_02"> <?php echo $dados['pro_descricao']; ?> </div>
        <div class="coluna_01"> <?php echo $dados['pro_qtde']; ?> </div> 
        <div class="coluna_01"> <?php echo $dados['pro_preco']; ?> </div>
        <div class="coluna_02"> <?php echo $dados['data']; ?> </div>
        <div class="coluna_01"> <?php echo $dados['pro_status']; ?> </div>
        <div class="coluna_02"> <?php echo $dados['pro_foto']; ?> </div>
        <div class="coluna_01"> <?php echo $dados['for_codigo']; ?> </div>
        
        <div class="coluna_01"> 
            <a onclick="excluir_registro(event)" href="delete_produto.php?pro_codigo=<?php echo $dados['pro_codigo']; ?>">
                <img src="../img/excluir.png">
            </a>
        </div> 
        
        <div class="coluna_01"> 
            <a href="form_atualizar_produto.php?pro_codigo=<?php echo $dados['pro_codigo']; ?>">
                <img src="../img/edit.png">
            </a>
        </div> 
    
    </div>
    <?php } ?>

</div> 
</body>

<script type="text/javascript">   

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

</html> 
