<?php

echo solve_problem(), "\n";

function solve_problem() {
    $sum = 0;
    $current = 1;
    $next = 2;

    while($current <= 4e6) {
        $new = $current + $next;
        if($next % 2 == 0) {
            $sum += $next;
        }
        $current = $next;
        $next = $new;
    }

    return $sum;
}
