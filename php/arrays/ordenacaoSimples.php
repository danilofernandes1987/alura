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

function ordenaNotas(array $nota1, array $nota2): int
{
    if($nota1['nota'] > $nota2['nota']){
        return -1;
    }

    if($nota2['nota'] > $nota1['nota']){
        return 1;
    }

    return 0;
}

usort($notasAssociativas, 'ordenaNotas');
var_dump($notasAssociativas);
