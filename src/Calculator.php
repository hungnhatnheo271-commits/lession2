<?php
class Calculator
{
    public function add($a, $b)
    {
        if (!is_numeric($a) || !is_numeric($b)) {
            return 0;
        }
        return $a + $b;
    }
    public function subtract($a, $b)
    {
        return $a - $b;
    }
    public function multiply($a, $b)
    {
        return $a * $b;
    }
    public function divide($a, $b)
    {
        if ($b === 0) {
            echo "Error: Division by zero";
        }
        return $a / $b;
    }
    public function squareRoot($a)
    {
        return sqrt($a);
    }
    public function absolute($a)
    {
        return abs($a);
    }
}