<?php

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