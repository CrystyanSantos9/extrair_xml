<?php

$path = "arquivos/";
$diretorio = dir($path);
$armazena = array();

echo "Lista de Arquivos do diretorio '<strong>".$path."</strong>':<br />";
while($arquivo = $diretorio ->read()) {
	echo "<a href=' ".$path.$arquivo." '>".$arquivo."</a><br />";
	array_push($armazena,$arquivo);
	print_r($armazena);
}

$diretorio->close();



?>