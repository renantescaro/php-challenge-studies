<?php

// Percorrer números de 1 a 100. Se múltiplo de 3, imprima "Fizz"; se múltiplo de 5, "Buzz"; se ambos, "FizzBuzz"

for($number = 1; $number <=100; $number++) {
    $result = "";
    if($number % 3 == 0) {
        $result = "Fizz";
    }
    if($number % 5 == 0) {
        $result .= "Buzz";
    }
    if($result != "") {
        echo($number." - ".$result."\n");
    }
}
