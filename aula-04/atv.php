<?php
/*
Dado um array, desenvolva um programa PHP que: 

a) Retorne todos os elementos do array que contenham a palavra PHP e tenham mais de três caracteres, ou seja, elementos que contenham apenas a palavra PHP não devem ser considerados. 

b) Retorne o array original sem os elementos que satisfizeram o critério definido no item a. 

Exemplo: 

$_array = array ("PHP",1,10,"PHP5","PHP4", " Livro de PHP",2); 

Resultado: 

array("PHP5","PHP4","Livro de PHP")

*/


$_array = array("PHP", 1, 10, "PHP5", "PHP4", " Livro de PHP", 2);

$aux = [];
foreach ($_array as $key => $value) {
    $contString = strlen($value);
    if ((strpos($value, 'PHP') !== false) && $contString > 3) {
        $aux[$key] = $value;
    }
}

var_dump($aux);

$valorPhp = array_filter($_array, function($a) {
    $contString = strlen($a);
    return (strpos($a, 'PHP') !== false)  && $contString > 3;
});


var_dump($valorPhp);