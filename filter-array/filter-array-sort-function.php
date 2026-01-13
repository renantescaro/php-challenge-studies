<?php

// Usar funções nativas do PHP
// Dado um array de usuários, retorne apenas os nomes daqueles que são maiores de 18 anos, ordenados alfabeticamente.


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

// maiores de 18
$filtered = array_filter($users, fn($u) => $u['age'] >= 18);

// apenas os nomes
$names = array_column($filtered, 'name');

// ordenar alfabeticamente
sort($names);

var_dump($names);