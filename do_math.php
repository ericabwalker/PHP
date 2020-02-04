<?php 
include 'math.php';

$result = new Math();
echo $result->add(10, 10) . " ";
echo $result->add(5, 5,...[10, 10, 20, 5]) . " ";
echo $result->add(150, 300) . " "; 

echo $result->subtract(100, 50) . " ";
echo $result->subtract(100, 50,...[10, 10, 20, 5]) . " ";
echo $result->subtract(1000, 500) . " ";

echo $result->multiply(5, 4) . " ";
echo $result->multiply(5, 5,...[2, 5]) . " ";
echo $result->multiply(10, 6) . " ";

echo $result->divide(60, 2) . " ";
echo $result->divide(60, 2,...[5, 2]) . " ";
echo $result->divide(300, 25) . " ";

?>