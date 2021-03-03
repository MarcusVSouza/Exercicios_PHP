<?php
/*7 - Faça um Programa que peça os 3 lados de um triângulo.
 O programa deverá informar se os valores podem ser um triângulo. 
 Indique, caso os lados formem um triângulo, se o mesmo é: equilátero, isósceles ou escaleno.
- Dicas:
  - Três lados formam um triângulo quando a soma de quaisquer dois lados for maior que o terceiro;
  - Triângulo Equilátero: três lados iguais;
  - Triângulo Isósceles: quaisquer dois lados iguais;
  - Triângulo Escaleno: três lados diferentes;*/
$typeOfTriangle;
function Triangle()
{
    $numbers = func_get_args();
    if (empty($numbers) || sizeof($numbers) > 3) {
        echo "Um triangulo deve ter 3 lados";
    } elseif (
        $numbers[0] > $numbers[1] + $numbers[2] ||
        $numbers[1] > $numbers[0] + $numbers[2] ||
        $numbers[2] > $numbers[1] + $numbers[0]
    ) {
        echo "Este não é um triangulo válido";
    } else {
        $vertice = $numbers[0];
        $verticeCounter = 0;
        for ($i = 0; $i < sizeof($numbers); $i++) {
            if ($vertice == $numbers[$i]) {
                $verticeCounter++;
            }
            $vertice = $numbers[$i];
        }
        switch ($verticeCounter) {
            case 1:
                echo "Este triângulo é escaleno";
                break;
            case 2:
                echo "Este triângulo é isósceles";
                break;
            case 3:
                echo "Este triangulo é equilátero";
                break;
        }
    }
}
Triangle(10, 20, 10);
