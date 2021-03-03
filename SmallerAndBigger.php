<?php

//5 - Escreva uma função que receba um número indeterminado de parâmetro e imprima o maior e o menor deles.
function SmallerAndBigger()
{
    $bigger = 0;
    $smaller = 0;
    $numbers = func_get_args();
    //var_dump($numbers);
    //exit();
    if (empty($numbers)) {
        echo "Nenhum número foi digitado \n";
    } else {
        for ($i = 0; $i < sizeof($numbers); $i++) {
            if ($bigger > $numbers[$i]) {
                $bigger = $numbers[$i];
            } elseif ($smaller < $numbers[$i]) {
                $smaller = $numbers[$i];
            }
        }
        echo "Estes são o menor e maior numeros " . "$bigger" . ", " . "$smaller\n";
    }
}
SmallerAndBigger(0, -8, 1, 2, 8,  9, 6, 7);
