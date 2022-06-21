<?php

$array = [
    1 => 'um',
    2 => 'dois',
    3 => 'tres',
];

//Manipulando valor
foreach ($array as $nomeNumero) {
    echo $nomeNumero . PHP_EOL;
}

//Manupulando chave
foreach ($array as $chave => $nomeNumero) {
    echo "$chave em português é: $nomeNumero" . PHP_EOL;
}

//Tamanho do array

echo "Total: " . count($array) . PHP_EOL;
