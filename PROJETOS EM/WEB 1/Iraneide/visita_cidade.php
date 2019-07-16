<?php 
$cidade_vis = $_POST['lista_cidade'];
require 'select.php';
foreach ($cidade_vis as $vl_cidade){
echo '<p></p>Obrigado por nos visitar',$vl_cidade;
}
?>