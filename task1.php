<!-- 1. Реализовать основные 4 арифметические операции в виде функции с тремя параметрами – два параметра это числа, третий – операция. Обязательно использовать оператор return. -->

<?php

function add ( $a, $b) {
    return $a + $b;
}

function substract ( $a, $b) {
    return $a - $b;
}

function multiply ( $a, $b) {
    return $a * $b;
}

function divide ( $a, $b) {
    if ($b != 0) {
    
    
    return $a / $b;
    }
    else {
        return "Нельзя делить на 0!";
    }
}

echo add(2,2);
echo substract(2,2);
echo multiply(2,2);
echo divide(2,2);