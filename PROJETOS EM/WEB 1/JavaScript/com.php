<?php

$Valorpag = $_post ['valpa'];
$Valorcom = $_post ['valco'];

if ($valpa >= valorco) {
	echo "<br> O seu troco é: (Valorpa - Valorco)";
}
else if ($valpa <= valorco){
	echo "Dinheiro Insuficiente";
}

?>

<html>
<body>
<a href = "compra.html">Voltar</a>
</body>
</html>