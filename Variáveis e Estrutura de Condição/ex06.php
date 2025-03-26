<?php
	$distancia_total = 100;
    $consumo_medio = 5;
    $valor_gasolina = 6;

    $media = $distancia_total / $consumo_medio;
     $valor_final = $media * $valor_gasolina;

    echo "<p> O custo da sua viagem é R$: ", $valor_final, "</p>";


?>