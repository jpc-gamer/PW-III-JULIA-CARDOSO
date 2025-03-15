<?php
	$valor = 100;
	$desconto = 100 * 0.27;
    $valor_final = $valor - $desconto;
	
	echo "<p> O valor do desconto é: ", $desconto, "</p>";
    echo "<p> O valor final da compra é: ", $valor_final, "</p>";
?>