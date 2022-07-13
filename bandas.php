<?php

$bandas = [
    'Dream theater',
    'Neo Pi Neo',
    'ExaltaSamba',
    'Iron Maiden',
    'Aviões do Forró',
];

$bandas[100] = 'Nirvana';
$bandas[9] = 'Calcinha Preta';


echo '<ul>';

 foreach ($bandas as $cadaBanda) {
    echo "<li>{$cadaBanda}</li>";
 }

echo '</ul>';
