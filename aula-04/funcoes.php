<?php

function multiplica($num1, $num2): int {
    return $num1 * $num2;
}

function multiplica2($num1, $num2) {
    return $num1 * $num2;
}

function maiorMenor($num1, $num2) {
    
    if (($num1 > $num2) && ($num2 < $num1)) {
        $maior = $num1;
        $menor = $num2;
    }
    return array("Maior" => $maior, "Menor" => $menor);
}

$aniversaiantes = array(
    array("nome" => "Pedro", "ano" => "10-08-2000"),
    array("nome" => "Luiz", "ano" => "10-08-2000"),
    array("nome" => "Davi", "ano" => "10-08-2000"),
    array("nome" => "Jardeu", "ano" => "10-08-2000"),
    array("nome" => "Anderson", "ano" => "10-08-2000"),
    array("nome" => "Livia", "ano" => "10-08-2000"),
    array("nome" => "Valeria", "ano" => "10-08-2000"),
    array("nome" => "Raimundo", "ano" => "10-08-2000"),
    array("nome" => "Luiza", "ano" => "10-08-2000"),
    array("nome" => "Maria", "ano" => "10-08-2000"),
);

usort($aniversaiantes, function($q) {
    echo $q;
});

echo multiplica(10, 2);
echo maiorMenor(10, 2);