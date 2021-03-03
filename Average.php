<?php
//1 - Escreva uma função que receba um número indeterminado de parâmetros(números) e retorne a média desses números.
$average;

function average()
{
    $numbers = func_get_args();
    if (empty($numbers)) {
        $average = 0;
    } else {
        $sum = array_sum($numbers);
        $total = count($numbers);
        $average = $sum / $total;
    }

    echo "resultado da media " . "$average\n";
}
average(10, 10, 10, 10, 10);
