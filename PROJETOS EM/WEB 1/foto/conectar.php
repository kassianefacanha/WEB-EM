<?php
$host    = "localhost";    #servidor
$login    = "root";        #login do banco de dados
$senha    = "";            #senha do banco de dados
$db        = "liliane";    #banco de dados
$tabela    = "form";    #tabela

$con   = mysql_connect($host,$login,$senha) or die(mysql_erro());    #conecta com o servidor
$sel   = mysql_select_db($db) or die(mysql_error());                #seleciona a database

?>