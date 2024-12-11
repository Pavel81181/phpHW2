<!-- 2. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch). -->

<?php

function calculator ( $a, $b, $oper) {
    
    switch ($oper) {
    
    case '+':
        return $a + $b;
    
    case '-':

        return $a - $b;

    case '*':
        return $a * $b;
    
    case '/':

    if ($b != 0) {
      
    return $a / $b;
    }
    else {
        return "Нельзя делить на 0!";
    }
}
}

echo calculator(2,2,'+');
echo calculator(2,2,'-');
echo calculator(2,2,'*');
echo calculator(2,2,'/');
