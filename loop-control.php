<?php
$numbers = range(0, 100, 3);

$i = 0;
do {
    if ($numbers[$i] === reset($numbers)) {
        echo "First number | ";
        $i++;
    } elseif ($numbers[$i] % 10 == 0) {
        echo "$numbers[$i] is a round number | ";
        $i++;
    } elseif ($numbers[$i] % 7 == 0) {
        $result = $numbers[$i] / 7;
        echo "Sevens are lucky, this number has $result | ";
        $i++;
    } elseif ($numbers[$i] === end($numbers)) {
        echo "Last number ";
        $i++;
    } else {
        echo $numbers[$i] . " | ";
        $i++;
    } 
} while ($i < count($numbers));
?>