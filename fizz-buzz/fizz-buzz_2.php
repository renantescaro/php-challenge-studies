<?php

// Percorrer números de 1 a 100. Se múltiplo de 3, imprima "Fizz"; se múltiplo de 5, "Buzz"; se ambos, "FizzBuzz"

for ($i = 1; $i <= 100; $i++) {
    $result = "";

    if ($i % 3 === 0) $result .= "Fizz";
    if ($i % 5 === 0) $result .= "Buzz";

    echo $i . "-" . $result . PHP_EOL;
}
