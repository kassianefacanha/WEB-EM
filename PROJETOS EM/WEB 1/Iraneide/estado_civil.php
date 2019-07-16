<html>
<head>
<title></title>
<?php 
$est_civil =array(
'Solteiro' =>array('id'=>'Solteira'),
'Casado' =>array('id'=>'Casada'),
'Separado' =>array('id'=>'Separada'),
'Divociado' =>array('id'=>'Divociada'),
'Viúvo' =>array('id'=>'Viúva'),

);
?>
</head>

<body>



<form action="estado_civil.php"name="form_radio"method="post">
<label>Nome</label><input type="text"name="nome"/>
<p></p>
<label>ESTADO CIVIL</label>
<p></p>
<?php 
foreach ($est_civil as $value => $id_chave){
	echo '<p></p>'

?>
<input type="radio"name="radioEstc[]"value="
<?php foreach ($id_chave as $id => $vl){
echo $vl;
?>" />
<label><?php echo $value ;?></label>
<?php 
}
}

?>
<p></p>
<input type="submit"value="Enviar"name="enviar">
</form>
<html>
<body>
<h1>Resultado estado civil</h1>
<a>Código do estado civil :</a>
<?php 
$idRADIO = $_POST['radioEstc'];
$nomeresult = $_POST['nome'];

foreach ($idRADIO as $valor){
	echo $valor;
}
echo '<p></p>Nome : ',$nomeresult;
?>
</body>
</html>
</body>
</html>
