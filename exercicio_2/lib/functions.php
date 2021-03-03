<?php

function get_pets()
{
    $petsJson = file_get_contents('data/pets.json');
    $pets = json_decode($petsJson, true);

    return $pets;
}

function save_pets($petsToSave)
{
    $json = json_encode($petsToSave, JSON_PRETTY_PRINT);
    file_put_contents('data/pets.json', $json);
}

function cpfCheck($cpf)
{
    $cpf = preg_replace('/[^0-9]/', "", $cpf);

    if (strlen($cpf) != 11 || preg_match('/([0-9])\1{10}/', $cpf)) {
        echo "False";
        return false;
    }

    $loopTime = [9, 10];

    foreach ($loopTime as $item) {

        $sum = 0;
        $multiply_for = $item + 1;

        for ($i = 0; $i < $item; $i++) {

            $sum += $cpf[$i] * ($multiply_for--);
        }

        $result = (($sum * 10) % 11);

        if ($cpf[$item] != $result) {
            echo "False";
            return false;
        }
    }
    echo "True";

    return true;
}
