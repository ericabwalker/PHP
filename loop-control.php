<?php
$numbers = range(0, 100, 3);

foreach ($numbers as $number) {
    if ($number === reset($numbers)) {
        echo "First number | ";
    } elseif ($number % 10 == 0) {
        echo "$number is a round number | ";
    } elseif ($number % 7 == 0) {
        $result = $number / 7;
        echo "Sevens are lucky, this number has $result | ";
    } elseif ($number === end($numbers)) {
        echo "Last number ";
    } else {
        echo $number . " | ";
    }   
}
?>