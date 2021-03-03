<?php
//6 - Escreva uma função que receba um número e exiba o dia correspondente da semana. (1-Domingo, 2- Segunda, etc.), se digitar outro valor deve aparecer valor inválido.
$number;
$day;

function DayOfWeek($number)
{
    switch ($number) {
        case 1:
            echo "Sunday";
            break;
        case 2:
            echo "Monday";
            break;
        case 3:
            echo "Thuesday";
            break;
        case 4:
            echo "Wednesday";
            break;
        case 5:
            echo "Thursday";
            break;
        case 6:
            echo "Friday";
            break;
        case 7:
            echo "Saturday";
            break;
    }
}
DayOfWeek(2);
