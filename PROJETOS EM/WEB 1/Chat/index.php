
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Entre no Chat</title>
<style type="text/css">
*{
 margin:0;
 padding:0;
}
body{ 
 background:blue;
}
div#formulario{
 width:500px;
 padding:5px; 
 height:100px; 
 background:#fff;
 border:1px solid #333;
 position:absolute;
 left:30%;
 top:50%;
 margin_left:-250px;
 margin_top:-50px;
}
div#formulario span{
 font:18px "Trebuchet MS",tahoma,arial;
 color:#036;
 float:left;
 width:100%;
 margin-bottom:10px;
}
div#formulario input[type=text]{
 width:485px;
 padding:5px; 
 border:1px solid #ccc; 
 outline:none;
 font:16px tahoma,arial;
 color:#666;
}
div#formulario input[type=text]:focus{
 border-color:#036; 
}
div#formulario input[type=submit]{
  padding:4px 6px;
  background: #069;
  font:15px tahoma,arial;
  color:#fff;
  border:1px solid #036;
  float:left;
  margin_top:5px;
  text-align:center;
  width:95px;
  text_shadow:#000 0 1px 0;
}
div#formulario input[type=submit]:hover{
 cursor:pointer;
 background:#09f;
}
</style>
</head>
<body>
<div id="formulario">
<span>Digite seu e-mail</span>
<form action="" method="post" enctype="multipart/form-data">
<label>
<input type="text" name="email"/>
</label>
<input type="hidden" name="acao" value="logar"/>
<input type="submit" value="LOGAR"/>
</form>
</div>


</body>
</html>
