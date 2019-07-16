<html>
<head><title>Cadastro</title>
</head>
<body>
<center>

<form name="cadastro" method="post" action="cad.php">
<table width="625" border="0">
<tr>
<td width="69">Nome:</td>
<td width="546"><input name="nome" type="text" id="nome" size="70" maxlength="60" />
<span class="style1">*</span></td>
</tr>
<tr>
<td>Email:</td>
<td><input name="email" type="text" id="email" size="70" maxlength="60" />
<span class="style1">*</span></td>
</tr>
<tr>
<td>Senha:</td>
<td><input name="senha" type="password" id="senha" maxlength="12" />
<span class="style1">*</span></td>
</tr>
<tr><td>
<input name="cadastrar" type="submit" id="cadastrar" value="Cadastrar" />
<input name="limpar" type="reset" id="limpar" value="Limpar" /></td></tr>
</table>
</form>
</center>

</body>
</html>