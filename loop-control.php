<?php
$numbers = range(0, 100, 3);

for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] === reset($numbers)) {
        echo "First number | ";
    } elseif ($numbers[$i] % 10 == 0) {
        echo "$numbers[$i] is a round number | ";
    } elseif ($numbers[$i] % 7 == 0) {
        $result = $numbers[$i] / 7;
        echo "Sevens are lucky, this number has $result | ";
    } elseif ($numbers[$i] === end($numbers)) {
        echo "Last number ";
    } else {
        echo $numbers[$i] . " | ";
    } 
}