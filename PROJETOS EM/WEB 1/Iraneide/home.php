<html>
<head>
<title></title></head>

<body>
<label>Ir para</label>
<form action="home.php">
<select>
 <option value="<html><body><a href="peso.php"></body></html>">PESO</option>
 <option value="<html><body><a href="estado_civil.php"></body></html>">ESTADO CIVIL</option>
  <option value="<html><body><a href="checkbox.php"></body></html>">ESPORT</option>
   <option value="<html><body><a href="input.php"></body></html>">CIDADE</option>
    <option value="<html><body><a href="home.php"></body></html>">HOME</option>
            
</select>
 <input type="submit" value="ir">
</form>


<form action="home.php"name="form_list_ativ"method="post">
<?php 
$esportes[1]="Futebol";
$esportes[2]="Basquetebol";
$esportes[3]="Esgrima";
$esportes[4]="Ciclismo";
$esportes[5]="Boxe";
$esportes[6]="Natação";
?>
<h1>Lista ed Preferência</h1>
<h3>Marque as alternaia esportivas do seu intersse</h3>
<?php foreach ($esportes as $value){

?>
<input type="checkbox"name="ativ_esport[]"value="<?php echo $value ;?>"/>
<label><?php echo $value;?></label>
<?php 
}
?>
<?php 
$lista_ativ =$_POST['ativ_esport'];
foreach ($lista_ativ as $value){
	echo "<p></p>", $value;
}
?>
<p></p>
<input type="submit"value="Enviar"name="enviar">


</form>

</body>
</html>