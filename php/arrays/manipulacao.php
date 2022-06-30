<?php
$notasBimestre1 = [
    'Vinicius' => 6,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9
];

$notasBimestre2 = [
    'João' => 6,
    'Ana' => 9,
    'Roberto' => 7,
];

// compara os valores de dois ou mais arrays e retorna os valores não encontrados
var_dump(array_diff($notasBimestre1, $notasBimestre2));

// compara as chaves de dois ou mais arrays e retorna as chaves não encontrados
var_dump(array_diff_key($notasBimestre1, $notasBimestre2));

// compara as chaves e valores de dois ou mais arrays e retorna os valores diferentes
var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2));

//Retornando apenas as chaves
$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
var_dump(array_keys($alunosFaltantes));

// Combinando arrays
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);
var_dump(array_combine($notasAlunos, $nomesAlunos));

//Inverte o valor pela chave e vice-versa
var_dump(array_flip($alunosFaltantes));


