<?php

    require_once("../conexao/banco.php");

    $id = $_REQUEST['txt_codigo'];

    $keyValueProduto = array_filter($_REQUEST, function($v, $k) {
        return $k != 'txt_codigo' && $k != 'btn_enviar' && $v >= 1;
    }, ARRAY_FILTER_USE_BOTH);

    //print_r($keyValueProduto);

    foreach ($keyValueProduto as $key => $value){

        $sql2 = "SELECT *,DATE_FORMAT(pro_data_cadastro,'%d/%m/%Y') as data FROM tb_produto WHERE pro_codigo = '$key'";
        $sql2 = mysqli_query($con, $sql2) or die("Erro na sql!");
        $dados = mysqli_fetch_array($sql2);

        $preco = $dados["pro_preco"];
        $total = $preco * $value;

        /*
        echo $key;
        echo "|";
        echo $value;
        echo "|";
        echo $preco;
        echo "|";
        echo $total;

        echo "<br>";
        */

        $sqlUpdate = "UPDATE tb_itens_venda SET ite_valor_unit = '$preco', ite_qtde = '$value', ite_total = '$total' WHERE ven_codigo = '$id' AND pro_codigo = '$key'"; 
        $sql = "INSERT INTO tb_itens_venda (ven_codigo, pro_codigo, ite_valor_unit, ite_qtde, ite_total) VALUES ('$id', '$key', '$preco', '$value', '$total' )"; 

        //echo $sqlUpdate;
        //echo $sql;

        mysqli_query($con, $sqlUpdate) or die ("ERRO");
        echo mysqli_affected_rows($con);

        if(mysqli_affected_rows($con) == 0){
            mysqli_query($con, $sql) or die ("Erro na sql");
        }

    }

    header("Location: form_atualizar_venda.php?ven_codigo=$id"); 
    
    
?>