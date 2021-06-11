<?php

/* 1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. 
Затем написать скрипт, который работает по следующему принципу:
Если $a и $b положительные, вывести их разность.
Если $а и $b отрицательные, вывести их произведение.
Если $а и $b разных знаков, вывести их сумму.*/

echo '1. Две целочисленные переменные $a и $b<br>';

$a = -5;
$b = -9;
echo 'Вариант через if .. else if .. else ';
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
echo 'Вариант через тернарный оператор '.$c.'<br><br>';

/* 2. Присвоить переменной $а значение в промежутке [0..15]. 
С помощью оператора switch организовать вывод чисел от $a до 15.*/

echo '2. вывод чисел от $a [0..15] до 15<br>';
$a = 7;
Switch ($a) {
    Case 1: echo '1<br>';
    Case 2: echo '2<br>';
    Case 3: echo '3<br>';
    Case 4: echo '4<br>';
    Case 5: echo '5<br>';
    Case 6: echo '6<br>';
    Case 7: echo '7<br>';
    Case 8: echo '8<br>';
    Case 9: echo '9<br>';
    Case 10: echo '10<br>';
    Case 11: echo '11<br>';
    Case 12: echo '12<br>';
    Case 13: echo '13<br>';
    Case 14: echo '14<br>';
    Default: echo '15<br><br>';
}

/* 3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. 
Обязательно использовать оператор return.*/

echo '3. Основные 4 арифметические операции в виде функций<br>';
function sum($a, $b) { return $a + $b; };
function differ($a, $b) { return $a - $b; };
function multipl($a, $b) { return $a * $b; };
function divide($a, $b) { return $a / $b; };

echo sum(8, 3).'<br>'; //11 
echo differ(8, 3).'<br>'; //5
echo multipl(8, 3).'<br>'; //24
echo divide(8, 3).'<br>'.'<br>'; //2,666

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
echo '4. Функция mathOperation($arg1, $arg2, $operation)<br>';
echo mathOperation(9, 3, 'sum').'<br>'; //12
echo mathOperation(9, 3, 'differ').'<br>'; //6
echo mathOperation(9, 3, 'multipl').'<br>'; //27
echo mathOperation(9, 3, 'divide').'<br>'.'<br>'; //3

/* 5. Посмотреть на встроенные функции PHP. Используя имеющийся HTML-шаблон, 
вывести текущий год в подвале при помощи встроенных функций PHP. */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<div>5. Вывод текущего года с помощью встроенной функции PHP date()</div>
    <footer>Текущий год <?php echo date('Y')?></footer>
    <br>
</body>
</html>

<?php
/* 
6. *С помощью рекурсии организовать функцию возведения числа в степень. 
Формат: function power($val, $pow), где $val – заданное число, $pow – степень.  */

echo '7. Функция power($val, $pow) - возведение в степень с помощью рекурсии. ';
echo '<br>';
function power($val, $pow) {
    if ($pow === 2) return $val*$val;
    return ($val * power($val, ($pow - 1)));
};

echo power(2, 3).'<br>'; // 8
echo power(2, 4).'<br>'; // 16
echo power(3, 3).'<br>'.'<br>'; // 27

/* 7. *Написать функцию, которая вычисляет текущее время и возвращает его 
в формате с правильными склонениями, например: 22 часа 15 минут, 21 час 43 минуты. */

echo '7. Функция showtime().<br>';
function showtime() {
    Switch (date('H')) {
        Case 21: ;
        Case 1: $hour = 'час'; Break;
        Case 2: ;
        Case 3: ;
        Case 22: ;
        Case 23: ;
        Case 4: $hour = 'часа'; Break;
        Default: $hour = 'часов'; Break;
    };

    if (date('i') == 11 || date('i') == 12 || date('i') == 13) {
        $minute = 'минут';
    } else {
    $mod_min = fmod (date('i'), 10);
        Switch ($mod_min) {
            Case 1: $minute = 'минута'; Break;
            Case 2: ;
            Case 3: ;
            Case 4: $minute = 'минуты'; Break;
            Default: $minute = 'минут'; Break;
        }
    };
    return 'Сейчас '.date('H').' '.$hour.' '.date('i').' '.$minute;
};
echo showtime();
?>