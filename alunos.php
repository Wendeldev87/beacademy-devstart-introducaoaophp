<?php

$a1 = [
    'nome' => 'Chiquim',
    'email' => 'Chiquim@email.com',
    'telefone' => '85 9 8889-0000',
    'notas' => [
        9,
        8.9
        7
        6
    ]
];

$a2 = [ 
    'nome' => '',
    'email' => 'maria@email.com',
    'telefone' => '85 9 9999-0000', 
    'notas' => [
        9,
        8.9
        7
        6
    ]
];

$alunos = [ //dimensao 1
    $a1,
    $a2,
];

$var_dump($alunos);
