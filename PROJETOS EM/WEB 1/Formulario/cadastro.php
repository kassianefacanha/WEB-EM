<html>
<title>Cadastro </title>
</head>
<body>
<?php

$nome= $_POST["Nome"];
$email= $_POST["email"];
$ddd= $_POST["ddd"];
$tel= $_POST["telefone"];
$endereco= $_POST["endereco"];
$cidade= $_POST["cidade"];
$estado= $_POST["estado"];
$bairro = $_POST["bairro"];
$pais= $_POST["pais"];
$login= $_POST["login"];
$senha= $_POST["senha"];
$sexo= $_POST["sexo"];

$conexao = mysql_connect("localhost","root"); 
if (!$conexao)
die ("Erro de conex�o com localhost, o seguinte erro ocorreu -> ".mysql_error());
$banco = mysql_select_db("clientes",$conexao);

$query = "INSERT INTO `clientes` ( `nome` , `email` , `sexo` , `ddd` , `telefone` , `endere�o` , `cidade` , `estado` ,
`bairro` , `pa�s` , `login` , `senha` , `news` , `id` )
VALUES ('$nome', '$email', '$sexo', '$ddd', '$tel', '$endereco', '$cidade', '$estado', '$bairro', '$pais', '$login', '$senha',
'$news', '')";
mysql_query($query,$conexao);

echo "Seu cadastro foi realizado com sucesso!Agradecemos a aten��o.";

?>
</body>
</html>
