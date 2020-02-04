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

?>