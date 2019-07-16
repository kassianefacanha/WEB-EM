<?php

/*
recebe as variaveis do formulario,
vo fazer assim pra facilitar.

mais vc não precisa defenir elas,
pode usar o $_POST[''] que vai dar o mesmo efeito
*/

$nome        = $_POST['nome'];
$cidade        = $_POST['cidade'];
$estado        = $_POST['estado'];
$foto        = $_FILES['foto'];

#conecta com o banco de dados...
include("conectar.php");

/*
eu vo definir no php mesmo, os campos nome, cidade como obrigatorios. 
*/

if(empty($nome)){

#usando o comando empty() você chega se uma variavel esta vazia.
#retornando true quando estiver vazia.

    echo "<script> alert('Campo \"nome\" obrigatorio!')
            location = ('form.php');
            </script>";
}

if(empty($cidade)){
    echo "<script> alert('Campo \"cidade\" obrigatorio!')
            location = ('form.php');
            </script>";
}
#agora eu upo a foto pro servidor, se upar a foto ja grava no servidor!
$pasta = "imagens/";
if(move_uploaded_file($_FILES['foto']['tmp_name'], $pasta)){

    #$tabela = a tabela do seu banco de dados!
    $sql_grava    = "INSERT INTO $tabela('nome','cidade','estado','foto') VALUES ('".$nome."', '".$cidade."', '".$estado."', '".$_FILES['foto']['tmp_name']."', )";
    $exe_grava    = mysql_query($sql_grava);
    echo "Enviado com sucesso. Obrigado!";
}else{
    echo "Ocorreu um erro no processo, tente novamente!";
}

?>