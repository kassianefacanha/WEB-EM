<html>
<head>
<title>CADASTRO PHP</title>
<style type="text/css">

#list{
background:white;
height: 90%;
width:70%;
float:left;
}
#notas{
background:yellow;
height: 90%;
width:29%;
float:right;
}



</style>

</head>
<body bgcolor="blue">
<center><h1><font color="white">Cadastro PHP</font></h1></center>
<div id="list">
<form action="kassi.php" method="post">

<?php 
$esportes[1]="Futebol;<br>";
$esportes[2]="Basquete;<br>";
$esportes[3]="Esgrima;<br>";
$esportes[4]="Ciclismo<br>";
$esportes[5]="Boxe;<br>";
$esportes[6]="Natação;<br>";


?>
<center><h1><font color="black">Lista de Preferências</font></h1></center>
<ul><li>Marque seus esportes preferidos</li></ul>
<?php foreach ($esportes as $value){
?>
<input type="checkbox" name="prefe[]" value= "<?php echo $value;  ?> ">
<label><?php echo $value ;?></label>
<?php 
}
?>
<input type="submit" value="Enviar" name="enviar">

<center><h1><font color="black">Esportes Preferidas</font></h1></center>
<?php 
$lista_esport = $_POST['prefe'];
foreach ($lista_esport as $value){
	echo "<p></p>" , $value;
	
}

?>
</form>





</body>
</html>
<?php
