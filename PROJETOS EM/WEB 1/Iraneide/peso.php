<html>
<body>

<div id="todo">
<form action="peso.php"method="post">
<label>Digite seu primeiro peso</label>
<input type="text"id="fild_peso1"name="fild_peso1"value=""/>
<br></br>
<label>Digite seu segundo peso</label>
<input type="text"id="fild_peso2"name="fild_peso2"value=""/>
<br></br>
<label>Digite seu terceiro peso</label>
<input type="text"id="fild_peso3"name="fild_peso3"value=""/>
<br></br>
<input type="submit"value="enviar"/>
<br></br>


<?php
$maior_peso;
$peso1 = $_POST['fild_peso1'];
$peso2 = $_POST['fild_peso2'];
$peso3 = $_POST['fild_peso3'];
$maior_peso = $peso2;
if ($maior_peso < $peso2){
	$maior_peso =$peso2;
}
if ($maior_peso<$peso3){
	$maior_peso = $peso3;
}
?>
<label>Maior peso</label>
<input type="text"id="resultado_peso"name="resultado_peso"readonly="true"value="<?php echo $maior_peso; ?>">
</form>
</div>
</body>
</html>