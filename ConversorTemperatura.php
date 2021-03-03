<?php
//3 - Escreva uma função que receba graus Celsius e converta para Farenheit.
//Formular (0°C × 9/5) + 32 = 32°F

$celcius = 0;
$farenheit = 0;

function converteCelsiusParaFarenheit($celsius)
{
    $result = ($celsius * 9 / 5) + 32;
    echo "$result";
}
converteCelsiusParaFarenheit(1);
