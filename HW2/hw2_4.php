<?php
//4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов,
//$operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций
//(использовать функции из пункта 3) и вернуть полученное значение (использовать switch)

$operation = ["вычитание","умножение", "деление", "сложение"];
function mathOperation($arg1=0,$arg2=0,$operation="сложение")
{

    switch ($operation) {
        case "вычитание":
            echo($arg1 - $arg2);
            break;
        case "умножение":
            echo($arg1 * $arg2);
            break;
        case "деление":
            echo($arg1 / $arg2);
            break;
        case "сложение":
            echo($arg1 + $arg2);
            break;
    }
};
mathOperation(3,343,"умножение")
?>