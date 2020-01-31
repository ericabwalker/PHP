<?php
$numbers = range(0, 100, 3);

for ($i = 0; $i < count($numbers); $i++) {
    switch ($numbers[$i]) {
        case 3:
            echo "Three ";
            break;
        case 9:
            echo "Nine Nine Nine ";
            break;
        case 15:
            echo "Fifteen Fifteen Fifteen Fifteen Fifteen ";
            break;
        default:
            echo $numbers[$i] . " ";
    }
}