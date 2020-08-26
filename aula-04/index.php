<?php

$test_color = array(1 => "V1", 2 => "V2", "V3", "V4");
$color["V1"] = "Azul";
$color["V2"] = "Preto";
$color["V3"] = "Amarelo";

$endereco = array("bairro" => "centro", "rua" => "Rua Z", "num" => "234");
$endereco["1"]="teste";
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

$cursos =[
    ["PHP", array("Programação PHP", "60 horas", "13h - 16h")],
    ["C", array("Programação C", "60 horas", "13h - 16h")],
    ["JAVA", array("Programação OO JAVA", "60 horas", "13h - 16h")]
];

// echo $test_color[1]."\n";
// echo $color["V2"]."\n";
// echo $endereco["rua"]."\n";
// echo $endereco["1"]."\n";
// echo $aniversaiantes[1]["nome"]."\n";

// foreach($aniversaiantes as $a) {
//     echo "Nome: ".$a["nome"]."\n Ano: ".$a["ano"]."\n";
// }

// foreach($aniversaiantes as $key => $aniver) {
//     echo "Nome: ".$aniver["nome"]."\n Ano: ".$aniver["ano"]."\n";
// }

foreach($cursos as list($nome, list($disciplina, $CH, $horario))) {
    echo "Nome: $disciplina, $CH, $horario \n";
}