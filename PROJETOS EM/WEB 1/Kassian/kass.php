<html>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<table><tr>
<td><a href="">Home</a></td>
<td><a href="kass.php">Cadastro</a></td>
<td><a href="peso.php">Peso</a></td>
<td><a href="esporte.php">Esporte</a></td>

</table>
<table >
<tr><td><center><img src="google icon.png" width="30%"></center></td><td><center><h1>Página de Cadastro</h1></center></td></tr>
<tr><td bgcolor="black" ><center><font color="white">Física</font></center></td> <td bgcolor="black" ><center><font color="white">Juridica</font></center></td></tr>
<tr bgcolor="blue"><td width="300px"><center>Nome:</center></td>                 <td><center>Nome:</center></td></tr>
<tr bgcolor="blue"><td><input type="text" name="nome" size="50%"></td>           <td><input type="text" name="nome" size="50%"></td></tr>
<tr bgcolor="blue"><td><center>Sobrenome:</center></td>                          <td><center>Sobrenome:</center></td></tr>
<tr bgcolor="blue"><td><input type="text" name="sob" size="50%"></td>            <td><input type="text" name="sob" size="50%"></td></tr>
<tr bgcolor="blue"><td><center>RG:</center></td>                                 <td><center>RG:</center></td></tr>
<tr bgcolor="blue"><td><input type="text" name="rg" size="50%"></td>             <td><input type="text" name="rg" size="50%"></td></tr>
<tr bgcolor="blue"><td><center>CPF:</center></td>                                <td><center>CNPJ</center></td></tr>
<tr bgcolor="blue"><td><input type="text" name="cpf" size="50%"></td>             <td><input type="text" name="cnpj" size="50%"></td></tr>
<tr bgcolor="blue"><td><center>Cidade:</center></td>                             <td><center>Cidade:</center></td></tr>
<tr bgcolor="blue"><td><input type="text" name="cidade" size="50%"></td>        <td><input type="text" name="cidade" size="50%"></td></tr>
<tr bgcolor="blue"><td><input type="submit" value="Enviar"></td>                 <td><input type="submit" value="Enviar" ></td></tr>
<tr bgcolor="blue"><td><input type="submit" value="Limpar"></td>                 <td><input type="submit" value="Limpar" ></td></tr>
</table>

</form>

<?php
$nom = $_POST['nome'];
$sobn = $_POST['sob'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];
$cidade = $_POST['cidade'];
$cnpj = $_POST['cnpj'];

if ($cpf =""   ){
echo "Você é uma Pessoa Juridica <br> <br>";
echo "Seu nome é:<br> ",$nom,"<br>";
echo "Seu sobrenome é:<br>",$sobn,"<br>";
echo "Seu rg é:<br>",$rg,"<br>";
echo "Seu cnpj é:<br>",$cnpj,"<br>";
echo "Sua cidade é:<br>",$cidade,"<br>";	
}
else {
echo "Você é uma Pessoa Física <br><br>";
echo "Seu nome é:<br>",$nom ,"<br>";
echo "Seu sobrenome é:<br>",$sobn ,"<br>";
echo "Seu rg é:<br>",$rg ,"<br>";
echo "Seu cpf é:<br>",$cpf ,"<br>";
echo "Sua cidade é:<br>",$cidade,"<br>";
}

?>

</body>
</html>