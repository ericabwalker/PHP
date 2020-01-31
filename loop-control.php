<?php
$numbers = range(0, 100, 3);

$i = 0;
while ($i < count($numbers)) {
    switch ($numbers[$i]) {
        case 3:
            echo "Three ";
            $i++;
            break;
        case 9:
            echo "Nine Nine Nine ";
            $i++;
            break;
        case 15:
            echo "Fifteen Fifteen Fifteen Fifteen Fifteen ";
            $i++;
            break;
        default:
            echo $numbers[$i] . " ";
            $i++;
    }
}
?>