<?php 
class Math {
    const ADD = "+";
    const SUBTRACT = "-";
    const MULTIPLY = "*";
    const DIVIDE = "/";

    private function doOperation($operation, $a, $b) {
        if ($operation == "+") {
            $answer = $a + $b;
            return $answer;
        } elseif( $operation == "-") {
            $answer = $a - $b;
            return $answer;
        } elseif ($operation == "*") {
            $answer = $a * $b;
            return $answer;
        } else {
            $answer = $a / $b;
            return $answer;
        }
    }

    public function add(int $a, int $b, ...$additional) {
        $answer = $this->doOperation(self::ADD, $a, $b);
        foreach ($additional as $number) {
            $answer += $number;
        }
        return $answer;
    }
    
    public function subtract(int $a, int $b, ...$additional) {
        $answer = $this->doOperation(self::SUBTRACT, $a, $b);
        foreach ($additional as $number) {
            $answer -= $number;
        }
        return $answer;
    }
    
    public function multiply(int $a, int $b, ...$additional) {
        $answer = $this->doOperation(self::MULTIPLY, $a, $b);
        foreach ($additional as $number) {
            $answer *= $number;
        }
        return $answer;
    }
    
    public function divide(int $a, int $b, ...$additional) {
        $answer = $this->doOperation(self::DIVIDE, $a, $b);
        foreach ($additional as $number) {
            $answer /= $number;
        }
        return $answer;
    }
}
?>