<?php

function kontrolaVstupu($a, $b)
{
    if (!is_int($a) || !is_int($b) || $a <= 0 || $b <= 0) {
        echo "chybný výstup\n";
        return;
    }

    echo "Vstupy jsou v pořádku.\n";
}

$a = (int) readline("Zadejte hodnotu pro a: ");
$b = (int) readline("Zadejte hodnotu pro b: ");

kontrolaVstupu($a, $b);

?>