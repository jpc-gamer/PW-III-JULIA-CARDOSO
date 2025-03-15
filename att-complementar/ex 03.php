<?php
	$valor_produto = 100 ;
    $acressimo = ($valor_produto * 0.16) + $valor_produto;
    $valor_parcela = $acressimo/10 ;
    $valor_total = $valor_parcela*10; 

    echo "<p> O valor das parcelas é: ", $valor_parcela, "</p>";
    echo "<p> O valor final da compra é: ", $valor_total, "</p>";
	
?>