<?php

require_once("../conexao/banco.php"); 

$sql = "SELECT *,DATE_FORMAT(cli_data_nascimento,'%d/%m/%Y') as data_nascimento, DATE_FORMAT(cli_data_cadastro,'%d/%m/%Y') as data_cad FROM tb_cliente";

$sql = mysqli_query($con, $sql) or die ("Erro na sql!");

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
            <div class="coluna_03"> <strong> Nome </strong></div>
            <div class="coluna_02"> <strong> Data Nascimento </strong></div>
            <div class="coluna_03"> <strong> Email </strong></div>
            <div class="coluna_01"> <strong> Sexo </strong></div>
            <div class="coluna_02"> <strong> Data Cadastro </strong></div>
        </div> 

    <?php while ($dados = mysqli_fetch_array($sql)) { ?>
    <div class="linha">

        <div class="coluna_01"> <?php echo $dados['cli_codigo']; ?> </div>
        <div class="coluna_03"> <?php echo $dados['cli_nome']; ?> </div>
        <div class="coluna_02"> <?php echo $dados['data_nascimento']; ?> </div>
        <div class="coluna_03"> <?php echo $dados['cli_email']; ?> </div>
        <div class="coluna_01"> <?php echo $dados['cli_sexo']; ?> </div>
        <div class="coluna_02"> <?php echo $dados['data_cad']; ?> </div>
        
        <div class="coluna_01"> 
            <a onclick="excluir_registro(event)" href="delete_cliente.php?cli_codigo=<?php echo $dados['cli_codigo']; ?>">
                <img src="../img/excluir.png">
            </a>
        </div> 
        
        <div class="coluna_01"> 
            <a href="form_atualizar_cliente.php?cli_codigo=<?php echo $dados['cli_codigo']; ?>">
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
