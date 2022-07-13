<?php
 
 $frutas = [
    'Laranja', //0
    'Banana', //1
    'Abacaxi', //2
 ];

 //adicionando nova fruta no array
 $frutas[] = 'Maça'; //3

 $frutas[10] = 'Melancia';

 $frutas[7] = 'Morango';

 $frutas[] = 'Tangerina';

 var_dump($frutas);