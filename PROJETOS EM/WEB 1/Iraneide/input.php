<html>
<head>
<title></title>

<?php 
$cidades=array('caucaia',
		'Juazeiro do Norte',
		'Maracanaú',
		'Sobarl',
		'Crato',
		'Itapipoca',
		'Maranguape',
		'Iguatu',
		'Quixadá',
		'Pacajus'
);

?>
</head>

<body>


<form method="post"action="input.php">
<div id="menu">


</div>

<label>Digite seu nome</label>
<input type="text"id="tx_nome"name="tx_nome"value="">
<input type="submit"value="enviar"/>
<?php 
$qtde_lista = $_POST['tx_nome'];
echo '<br>Seu nome:',$qtde_lista,'</br>';
?>
</form>


</body>
</html>

