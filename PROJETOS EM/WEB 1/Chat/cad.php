<?php
$nome= $_POST['nome'];
$email= $_POST['email'];
$senha= $_POST['senha'];


?>
<?php  
   
$local_serve = "localhost";      // local do servidor

$usuario_serve = "root";         // nome do usuario

$senha_serve = "";                  // senha

$banco_de_dados = "chat";      // nome do banco de dados

$conn = @mysql_connect($local_serve, $usuario_serve, $senha_serve) or die ("O servidor não responde!");

// conecta-se ao banco de dados
$bd = @mysql_select_db($banco_de_dados,$conn)

  or die ("Não foi possivel conectar-se ao banco de dados!");
  
  $query = "INSERT INTO `chat` `usuario` ( ´id´,`nome` , `email` , `senha`  )VALUES ('','$nome', '$email','$senha')";
mysql_query($query,$con);

echo "Seu cadastro foi realizado com sucesso!Agradecemos a atenção.";
  
   
?>  