<?php

// Verificar se uma palavra é um palíndromo (lê-se igual de trás para frente)
// sem usar funções prontas como strrev

$words = [
    "Arara",      // sim
    "PHP",        // sim
    "Marmita",    // Não
    "Radar",      // sim
    "Emprego",    // Não
    "Reviver",    // sim
    "Ovo",        // sim
    "Socos",      // sim
    "Computador", // Não
    "Entrevista", // Não
    "Blusa",      // Não
    "Osso",       // sim
    "Rir",        // sim
    "Logica"      // Não
];

function mirrorWord($word) {

    $mirrored = "";
    $wordLen = strlen($word);

    for($index = $wordLen-1; $index >= 0; $index--){
        $mirrored .= $word[$index];
    }

    return $mirrored;
}

foreach($words as $word) {
    $word = strtolower($word);
    $mirrored = mirrorWord($word);

    echo $word . ($mirrored === $word ? " é palíndromo" : " não é palíndromo") . PHP_EOL;
}
