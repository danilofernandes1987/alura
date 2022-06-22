<?php

$notas = [
    10,
    8,
    9,
    7
];

$notasOrdenadas = $notas;

sort($notasOrdenadas);

echo 'Desordenadas:';
var_dump($notas);

echo 'Ordenadas:';
var_dump($notasOrdenadas);

//array associativo
$notasAssociativas = [
    [
        'aluno' => 'Maria',
        'nota' => 10,
    ],
    [
        'aluno' => 'Vinicius',
        'nota' => 6,
    ],
    [
        'aluno' => 'Ana',
        'nota' => 9,
    ]
];

// Ensinando a função usort ordenar o array associativo por valor.
function ordenaNotas(array $nota1, array $nota2): int
{
    if ($nota1['nota'] > $nota2['nota']) {
        return -1;
    }

    if ($nota2['nota'] > $nota1['nota']) {
        return 1;
    }

    return 0;

    // Forma abrevida de fazer esta função

    //return $nota2['nota'] <=> $nota1['nota'];
}

usort($notasAssociativas, 'ordenaNotas');
var_dump($notasAssociativas);

$notasComChave = [
    'Vinicius' => 6,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9
];

// Ordenando array de forma decrescente perdendo a chave

$notasDecrescente = $notasComChave;

rsort($notasDecrescente);

var_dump($notasDecrescente);

// Ordenando o array de forma decrescente mantento a chave
$notasDecrescenteChave = $notasComChave;
arsort($notasDecrescenteChave);

var_dump($notasDecrescenteChave);

// Ordenando o array de forma crescente mantento a chave
$notasCrescenteChave = $notasComChave;
asort($notasCrescenteChave);

var_dump($notasCrescenteChave);

// Ordenando o array de forma crescente pela chave
$notasCrescenteChave = $notasComChave;
ksort($notasCrescenteChave);

var_dump($notasCrescenteChave);

// Ordenando o array de forma decrescente pela chave
$notasDecrescenteChave = $notasComChave;
krsort($notasDecrescenteChave);

var_dump($notasDecrescenteChave);

