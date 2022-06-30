<?php

$notas = [
    'Vinicius' => null,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9
];

// Verifica se é um array

if (is_array($notas)) {
    echo 'Sim, é um array' . PHP_EOL;
}


// Verifica se o array é numerico com numeros sequenciais, a partir da versão 8.1 do php

var_dump(array_is_list($notas));


// Verifica se existe chave informada em um array

var_dump(array_key_exists('Vinicius', $notas));


// Verifica se existe uma chave e é diferente de nulo

var_dump(isset($notas['Vinicius']));


// Verifica se existe um valor dentro do array

var_dump(in_array('10', $notas));


//Retorna a chave de um valor dentro de um array (No exemplo retornará Ana, pois tirou 10)

echo array_search(10, $notas) . PHP_EOL;