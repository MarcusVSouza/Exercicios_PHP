<?php
//4 - Escreva uma função que converta metros para centímetros.
$meter = 0;
$centimeter = 0;

function MetersToCentimeters($meter)
{
    $result = $meter * 100;
    echo "$result";
}
MetersToCentimeters(1);
