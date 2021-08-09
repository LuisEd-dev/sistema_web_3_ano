<?php

require_once("../conexao/banco.php"); 

$sql = "SELECT *,DATE_FORMAT(new_data_publicacao,'%d/%m/%Y') as data  FROM tb_news";

$sql = mysqli_query($con, $sql) or die ("Erro na sql!")

?> 

<!doctype html>
<html> 
    <head>
    <meta charset="utf-8">
    <title> Consulta Noticias </title>
    <link rel="stylesheet" type="text/css" href="../css/consulta.css">
    </head>

    <body>
        <div id="principar">
            <div class="linha">
            <div class="coluna_01"> <strong> ID </strong></div>
            <div class="coluna_03"> <strong> Titulo </strong></div>
            <div class="coluna_02"> <strong> Descricao </strong></div>
            <div class="coluna_02"> <strong> Autor </strong></div>
            <div class="coluna_01"> <strong> Data Cadastro </strong></div>
            <div class="coluna_01"> <strong> Status </strong></div>
        </div> 

    <?php while ($dados = mysqli_fetch_array($sql)) { ?>
    <div class="linha">

        <div class="coluna_01"> <?php echo $dados['new_codigo']; ?> </div>
        <div class="coluna_03"> <?php echo $dados['new_titulo']; ?> </div>
        <div class="coluna_02"> <?php echo $dados['new_descricao']; ?> </div> 
        <div class="coluna_02"> <?php echo $dados['new_autor']; ?> </div> 
        <div class="coluna_01"> <?php echo $dados['data']; ?> </div>
        <div class="coluna_01"> <?php echo $dados['new_status']; ?> </div>
        
        <div class="coluna_01"> 
            <a onclick="excluir_registro(event)" href="delete_news.php?new_codigo=<?php echo $dados['new_codigo']; ?>">
                <img src="../img/excluir.png">
            </a>
        </div> 
        
        <div class="coluna_01"> 
            <a href="form_atualizar_news.php?new_codigo=<?php echo $dados['new_codigo']; ?>">
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
