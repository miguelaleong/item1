<?php

function clava($a, $b, $c)
{
    if (($a <= $c) && ($c <= $b))
        return true;
    return false;
}

function solution(array $A, array $B, $N, array $C, $M)
{
    $tablon = 0;
    $clavos = 0;
    while ($tablon < $N && ($clavos < $M)) {
        if (clava($A[$tablon], $B[$tablon], $C[$clavos]))
            $tablon ++;
        else
            $clavos ++;
    }
    if (($clavos == $M) && ($tablon < $N))
        return - 1;
    return ++$clavos;
}

$A = [
    1,
    4,
    5,
    8
];
$B = [
    4,
    5,
    9,
    10
];
$C = [
    4,
    6,
    7,
    10,
    2
];

$n = 4;
$m = 5;
echo solution($A, $B, $n, $C, $m);

?>