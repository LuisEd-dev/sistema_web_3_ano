<?php

require_once('../conexao/banco.php');

$id = $_REQUEST['cli_codigo'];

$sql = "SELECT *  FROM tb_cliente WHERE cli_codigo = '$id'";
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

            <form name="frm_login" action="atualizar_cliente.php" method="post">
                <div id="principal">
                    <hl> Atualizar cliente </h1>
                        
                        <input name="cli_codigo" type="text" class="input_01" value="<?php echo $dados['cli_codigo']; ?>" hidden>

                        <label> Nome </label>
                        <input name="txt_nome" type="text" class="input_01" value="<?php echo $dados['cli_nome']; ?>">
                        
                        <label> Data Nascimento </label>
                        <input name="txt_data_nascimento" type="date" class="input_01" value="<?php echo $dados['cli_data_nascimento']; ?>">

                        <label> Email </label>
                        <input name="txt_email" type="email" class="input_01" value="<?php echo $dados['cli_email']; ?>">

                        <select name="txt_sexo" class="select_01">
                            <option value="M" <?php if($dados['cli_sexo'] == "M"){echo "selected";} ?> >Masculino</option>
                            <option value="F" <?php if($dados['cli_sexo'] == "F"){echo "selected";} ?> >Feminino</option>
                        </select>

                        <input name="btn_enviar" type="submit" class="btn">       
                </div>
            </form>

        </body>
</html>
                        