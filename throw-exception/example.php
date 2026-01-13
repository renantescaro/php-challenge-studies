<?php

$errorNumbers = [3, 7];


function example($numberToCheck){
    global $errorNumbers;

    if(in_array($numberToCheck, $errorNumbers)) {
        throw new Exception("Número proibido recebido");
    }

    echo($numberToCheck . PHP_EOL);
}

try {
    for($index = 0; $index <= 10; $index++) {
        example($index);
    }
} catch (Exception $e) {
    echo($e->getMessage() . PHP_EOL);
}
