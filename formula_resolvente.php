<?php

function formulaResolvente($a, $b, $c) {
    $sqrt = pow($b, 2) - (4 * $a * $c);

    if ($sqrt < 0) {
        return 'Sem Solução';
    }
    
    $negativo = (-$b - sqrt($sqrt)) / (2 * $a);
    $positivo = (-$b + sqrt($sqrt)) / (2 * $a);    
    
    return [$negativo, $positivo];
}

echo implode(' <-> ', formulaResolvente(2, 1, -3)) . PHP_EOL;
echo formulaResolvente(2, 1, 3) . PHP_EOL;
