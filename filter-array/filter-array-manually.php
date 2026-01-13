<?php

// Sem usar funções de ordenações internas do PHP
// Dado um array de usuários, retorne apenas os nomes daqueles que são maiores de 18 anos, ordenados alfabeticamente.

$characters = [
    'a'=>0,  'b'=>1,
    'c'=>2,  'd'=>3,
    'e'=>4,  'f'=>5,
    'g'=>6,  'h'=>7,
    'i'=>8,  'j'=>9,
    'k'=>10, 'l'=>11,
    'm'=>12, 'n'=>13,
    'o'=>14, 'p'=>15,
    'q'=>16, 'r'=>17,
    's'=>18, 't'=>19,
    'u'=>20, 'v'=>21,
    'w'=>22, 'x'=>23,
    'y'=>24, 'z'=>25,
];

$users = [
    ['name' => 'Leo', 'age' => 15],
    ['name' => 'Joao', 'age' => 20],
    ['name' => 'Ana', 'age' => 17],
    ['name' => 'Beto', 'age' => 25],
    ['name' => 'Marcos', 'age' => 30],
    ['name' => 'Fred', 'age' => 2],
    ['name' => 'Francisco', 'age' => 80],
    ['name' => 'Amanda', 'age' => 21],
    ['name' => 'Bianca', 'age' => 20],
    ['name' => 'Amora', 'age' => 19],
];

$age18 = [];

foreach($users as $person) {
    if($person['age'] > 18) {
        array_push($age18, $person);
    }
}

function checkAlphabeticalOrder($word1, $word2) {
    global $characters;
    $word1 = strtolower($word1);
    $word2 = strtolower($word2);

    $len1 = strlen($word1);
    $len2 = strlen($word2);
    $limit = min($len1, $len2);

    for ($index = 0; $index < $limit; $index++) {
        $char1 = $word1[$index];
        $char2 = $word2[$index];

        if ($characters[$char1] < $characters[$char2]) return true;
        if ($characters[$char1] > $characters[$char2]) return false;
    }
}

function putInOrder(&$array) {
    $arrayCount = count($array);

    for ($index = 0; $index < $arrayCount - 1; $index++) {
        for ($subIndex = 0; $subIndex < $arrayCount - $index - 1; $subIndex++) {

            if (!checkAlphabeticalOrder($array[$subIndex]['name'], $array[$subIndex+1]['name'])) {
                $temp = $array[$subIndex];
                $array[$subIndex] = $array[$subIndex+1];
                $array[$subIndex+1] = $temp;
            }
        }
    }
}

putInOrder($age18);

var_dump($age18);
