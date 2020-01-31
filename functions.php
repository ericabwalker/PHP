<?php 

function add(int $a, int $b) {
    return $a + $b;
}

function subtract(int $a, int $b) {
    return $a - $b;
}

function multiply(int $a, int $b) {
    return $a * $b;
}

function divide(int $a, int $b) {
    return $a / $b;
}

echo add(10, 60) . " ";
echo subtract(100, 80) . " ";
echo multiply(5, 10) . " ";
echo divide(80, 2) . " ";

$a = 10;
$b = 60;
echo add($a, $b) . " ";

$a = 100;
$b = 80;
echo subtract($a, $b) . " ";

$a = 5;
$b = 10;
echo multiply($a, $b) . " ";

$a = 80;
$b = 2;
echo divide($a, $b) . " ";
?>