<?php 
class Math {
    public function add(int $a, int $b, ...$additional) {
        $answer = $a + $b;
        foreach ($additional as $number) {
            $answer += $number;
        }
        return $answer;
    }
    
    public function subtract(int $a, int $b, ...$additional) {
        $answer = $a - $b;
        foreach ($additional as $number) {
            $answer -= $number;
        }
        return $answer;
    }
    
    public function multiply(int $a, int $b, ...$additional) {
        $answer = $a * $b;
        foreach ($additional as $number) {
            $answer *= $number;
        }
        return $answer;
    }
    
    public function divide(int $a, int $b, ...$additional) {
        $answer = $a / $b;
        foreach ($additional as $number) {
            $answer /= $number;
        }
        return $answer;
    }
}

$result = new Math();
echo $result->add(10, 5) . " ";
echo $result->add(5, 5,...[10, 10, 20, 5]) . " "; 

echo $result->subtract(100, 50) . " ";
echo $result->subtract(100, 50,...[10, 10, 20, 5]) . " ";

echo $result->multiply(5, 4) . " ";
echo $result->multiply(5, 5,...[2, 5]) . " ";

echo $result->divide(60, 2) . " ";
echo $result->divide(60, 2,...[5, 2]) . " ";
?>