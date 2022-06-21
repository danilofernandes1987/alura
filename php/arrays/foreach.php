<?php

$array = [
    1 => 'um',
    2 => 'dois',
    3 => 'tres',
];

//Percorrendo valor
foreach ($array as $nomeNumero) {
    echo $nomeNumero . PHP_EOL;
}

//Percorrendo chave
foreach ($array as $chave => $nomeNumero) {
    echo "$chave em português é: $nomeNumero" . PHP_EOL;
}

//Tamanho do array
echo "Total: " . count($array) . PHP_EOL;
