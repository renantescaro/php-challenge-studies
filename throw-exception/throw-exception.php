<?php

// Criar uma função que divida dois números, lançando uma exceção se o divisor for zero, garantindo tipagem estrita.

declare(strict_types=1);

function divide(float $dividend, float $divisor): float {
    if ($divisor === 0.0) {
        throw new Exception("Erro: Divisão por zero não permitida.");
    }

    return $dividend / $divisor;
}

try {
    echo("Resultado: " . divide(10.5, 2.5) . PHP_EOL);
    echo("Resultado: " . divide(10, 0) . PHP_EOL);
} catch (Exception $e) {
    echo($e->getMessage() . PHP_EOL);
}
