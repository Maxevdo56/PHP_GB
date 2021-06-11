<?php

/* 1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. 
Затем написать скрипт, который работает по следующему принципу:
Если $a и $b положительные, вывести их разность.
Если $а и $b отрицательные, вывести их произведение.
Если $а и $b разных знаков, вывести их сумму.*/

$a = -5;
$b = -9;
if ($a >= 0 && $b >= 0) {
    echo $a - $b;
} else if ($a < 0 && $b < 0) {
    echo $a * $b;
} else {
    echo $a + $b;
}
echo '<br>';
// или так
$c = ($a >= 0 && $b >= 0) ? ($a - $b) : (($a < 0 && $b < 0) ? ($a * $b) : ($a + $b));
echo $c;
echo '<br>';
echo '<br>';

/* 2. Присвоить переменной $а значение в промежутке [0..15]. 
С помощью оператора switch организовать вывод чисел от $a до 15.*/


$a = 2;
Switch ($a) {
    Case 1: echo '1'.'<br>';
    Case 2: echo '2'.'<br>';
    Case 3: echo '3'.'<br>';
    Case 4: echo '4'.'<br>';
    Case 5: echo '5'.'<br>';
    Case 6: echo '6'.'<br>';
    Case 7: echo '7'.'<br>';
    Case 8: echo '8'.'<br>';
    Case 9: echo '9'.'<br>';
    Case 10: echo '10'.'<br>';
    Case 11: echo '11'.'<br>';
    Case 12: echo '12'.'<br>';
    Case 13: echo '13'.'<br>';
    Case 14: echo '14'.'<br>';
    Default: echo '15'.'<br>';
}
    echo '<br>';
/* 3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. 
Обязательно использовать оператор return.*/

function sum($a, $b) {
    return $a + $b;
};
function differ($a, $b) {
    return $a - $b;
};
function multipl($a, $b) {
    return $a * $b;
};
function divide($a, $b) {
    return $a / $b;
};

echo sum(8, 3); //11
echo '<br>';
echo differ(8, 3); //5
echo '<br>';
echo multipl(8, 3); //24
echo '<br>';
echo divide(8, 3); //2,666
echo '<br>';
echo '<br>';

/* 4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), 
где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. 
В зависимости от переданного значения операции выполнить одну из арифметических операций
(использовать функции из пункта 3) и вернуть полученное значение (использовать switch).
*/

function mathOperation($arg1, $arg2, $operation) {
    Switch ($operation) {
        Case 'sum': $result = sum($arg1, $arg2); Break;
        Case 'differ': $result = differ($arg1, $arg2); Break;
        Case 'multipl': $result = multipl($arg1, $arg2); Break;
        Case 'divide': $result = divide($arg1, $arg2); Break;
        Default: echo 'Введите правильную операцию';
    };
    return $result;
};
echo 'Функция mathOperation($arg1, $arg2, $operation);';
echo '<br>';
echo mathOperation(9, 3, 'sum'); //12
echo '<br>';
echo mathOperation(9, 3, 'differ'); //6
echo '<br>';
echo mathOperation(9, 3, 'multipl'); //27
echo '<br>';
echo mathOperation(9, 3, 'divide'); //3
echo '<br>';
echo '<br>';

/* 5. Посмотреть на встроенные функции PHP. Используя имеющийся HTML-шаблон, 
вывести текущий год в подвале при помощи встроенных функций PHP. */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <footer>Текущий год <?php echo date('Y')?></footer>
</body>
</html>

<?php
/* 
6. *С помощью рекурсии организовать функцию возведения числа в степень. 
Формат: function power($val, $pow), где $val – заданное число, $pow – степень.  */
echo '<br>';
echo '<br>';
function power($val, $pow) {
    if ($pow === 2) return $val*$val;
    return ($val * power($val, ($pow - 1)));
};

echo power(2, 3); // 8
echo '<br>';
echo power(2, 4); // 16
echo '<br>';
echo power(3, 3); // 27
echo '<br>';
echo '<br>';

/* *Написать функцию, которая вычисляет текущее время и возвращает его 
в формате с правильными склонениями, например: 22 часа 15 минут, 21 час 43 минуты. */

$settime = date('h:i');
var_dump($settime);
$hour = date('h', $settime);
var_dump($hour);

function showtime($settime) {
    $hour = date('h', $settime);
    return $hour;
    //return `'Сейчас '.date()$settime('h').'часов '.$settime('i').'минут.'`;
};
var_dump(showtime($settime));
?>