<?php
 session_start();

 
 echo '<form action="" method="post">
	<fieldset>
		<legend>Campo Xml</legend>
		<input type="text" name="arquivo">
		<input type="submit" value="Enviar arquivo">
	</fieldset>
	
</form>';
 




 
 $filename=array($_POST['arquivo']);
 
foreach ($filename as $notas) 

{
	
$DOMDocument = new DOMDocument( '1.0', 'UTF-8' );
$DOMDocument->preserveWhiteSpace = false;
$DOMDocument->load( $notas );
$products = $DOMDocument->getElementsByTagName( 'prod' );
$total = $DOMDocument->getElementsByTagName( 'total' );

foreach( $products as $product )
{
    printf( '<strong>Produto:</strong> %s<br/>
             <strong>Valor:</strong> %01.2f<br/>', 
            $product->getElementsByTagName( 'xProd' )->item( 0 )->nodeValue,
            $product->getElementsByTagName( 'vUnCom' )->item( 0 )->nodeValue
    );
}

echo "<br>";
echo "<hr>";

foreach( $total as $totais )
{
	
    printf( '<strong>Total:</strong> %s<br/>
             <strong>Valor Total Produtos:</strong> %01.2f<br/>', 
            $totais->getElementsByTagName( 'vBC' )->item( 0 )->nodeValue,
            $totais->getElementsByTagName( 'vNF' )->item( 0 )->nodeValue
    );
}

echo "<hr>";
}








?>












