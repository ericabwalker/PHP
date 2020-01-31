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

function compare($c, $d, $e = false) {
    if ($c == $d && $e == false) {
        echo "$c and $d are equal. ";
    } elseif ($c == $d && $e == true) {
        if ($c === $d) {
            echo "$c and $d are equal and equal in datatype. ";
        } else {
            echo "$c and $d are equal but not equal in datatype. ";
        }
    } else {
        echo "$c and $d are not equal. ";
    }
}

echo compare(4, "4");
echo compare (5, "5", true);
echo compare (4, 4.0);
echo compare (5, 5.0, true);

?>