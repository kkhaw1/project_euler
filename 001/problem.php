<?php

echo solve_problem(), "\n";

function solve_problem() {
    $sum = 0;

    for($i = 0; $i < 1000; ++$i) {
        if($i % 3 == 0 || $i % 5 == 0) {
            $sum += $i;
        }
    }

    return $sum;
}
