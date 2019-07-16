<?php header("content-type:text/html;charset=ISO-8859-1",true);?>
<html>
<head>
<title></title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/>
<?php 
$arquivo = fopen('texto.txt','r');
if ($arquivo ==false)
die('não foi possivel abrir o arquivo.');
$linha = fgets($arquivo);

echo $linha;
fclose($arquivo);
?>
</head>
<body>
<h3>conteudo do arquivo</h3>
<textarea name="textos"  rows="10" cols="40">

<?php 
$arquivo = fopen('artigo.html','r');
if ($arquivo == false)
die('não foi possivel abrir o arquivo.!');
$string = file_get_contents('artigo.html');
echo $string;
fclose($arquivo);


?>
</textarea>

<form name="form" method="post">
<h3> escreva o texto do seu artigo</h3>
<p></p>
<textarea  name="texto" rows="20" cols="60"></textarea>
<p></p>
<input type="submit" value="salvar" onclick= "<?php  salvarArquivo()?>"/>
<?php
function salvarArquivo(){
$txt = $_POST['texto'];
$arquivo = fopen('meuartigo.html','w+');
if (isset($_POST['texto'])){
if (!fwrite($arquivo,$txt))
die ('não foi possivel atualizar o arquivo.');

foclose($arquivo);

}
}
?>

</form>


</body>

</html>
