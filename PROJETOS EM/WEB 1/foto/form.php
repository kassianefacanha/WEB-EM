<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
<form action="enviar.php" method="post" enctype="multipart/form-data">
<!-- lembrando que se for enviar Foto pelo formulario vc tem que colocar o enctype. -->
<table width="288" border="1">
  <tr>
    <td width="53">Nome:</td>
    <td width="219"><input name="nome" type="text" /></td>
  </tr>
  <tr>
    <td>Cidade:</td>
    <td><input name="cidade" type="text" /></td>
  </tr>
  <tr>
    <td>Estado:</td>
    <td><input name="estado" type="text" /></td>
  </tr>
  <tr>
    <td>Foto</td>
    <td><input name="foto" type="file" /></td>
  </tr>
</table><table width="286" border="1">
  <tr>
    <td width="136" align="center"><input name="enviar" type="submit" value="Enviar Formulario!" /></td>
    <td width="134" align="center"><input name="resetar" type="reset" value="Limpar Campos!" /></td>
  </tr>
</table>

</form>
</body>
</html>