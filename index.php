<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ДЗ 6</title>
</head>

<body>
    <h2>Задание 1. Калькулятор (через тэг select)</h2>
    <form method="GET">
        <input type="text" required name="first_value" pattern="^[ 0-9]+$" placeholder="Введите первое число">
        <select name="operation" id="act">
            <option value="plus">плюс</option>
            <option value="minus">минус</option>
            <option value="multipl">умножить</option>
            <option value="divide">разделить</option>
        </select>
        <input type="text" required name="second_value" pattern="^[0-9]+$" placeholder="Введите второе число">
        <input type="submit">
    </form>
    <?php
        $firstnum = $_GET["first_value"];
        $secondnum = $_GET["second_value"];
        switch ($_GET['operation']) {
            case 'plus': 
                $response = $firstnum.' + '.$secondnum.' = '.($firstnum + $secondnum);
                Break;
            case 'minus': 
                $response = $firstnum.' - '.$secondnum.' = '.($firstnum - $secondnum); 
                Break;
            case 'multipl': 
                $response = $firstnum.' * '.$secondnum.' = '.($firstnum * $secondnum);
                Break;
            case 'divide':
                if ($secondnum == 0) {
                    $response = '<b>ОШИБКА!</b> Делить на 0 нельзя';
                    Break;
                } else {
                    $response = $firstnum.' : '.$secondnum.' = '.($firstnum / $secondnum); 
                    Break;
                }
        }    
    ?>
    <p>Ответ: <?php echo $response?></p>

    <h2>Задание 2. Калькулятор (через кнопки)</h2>
    <form method="GET">
        <input type="text" required name="first_button_value" pattern="^[ 0-9]+$" placeholder="Введите первое число">
        <input type="text" required name="second_button_value" pattern="^[0-9]+$" placeholder="Введите второе число">
        <input type="submit" name="oper_button" value="plus">
        <input type="submit" name="oper_button" value="minus">
        <input type="submit" name="oper_button" value="multipl">
        <input type="submit" name="oper_button" value="divide">
    </form>
    <?php
        $firstnum_b = $_GET["first_button_value"];
        $secondnum_b = $_GET["second_button_value"];
        switch ($_GET['oper_button']) {
            case 'plus': 
                $response_button = $firstnum_b.' + '.$secondnum_b.' = '.($firstnum_b + $secondnum_b);
                Break;
            case 'minus': 
                $response_button = $firstnum_b.' - '.$secondnum_b.' = '.($firstnum_b - $secondnum_b);
                Break;
            case 'multipl': 
                $response_button = $firstnum_b.' * '.$secondnum_b.' = '.($firstnum_b * $secondnum_b);
                Break;
            case 'divide':
                if ($secondnum_b == 0) {
                    $response_button = '<b>ОШИБКА!</b> Делить на 0 нельзя';
                    Break;
                } else {
                    $response_button = $firstnum_b.' / '.$secondnum_b.' = '.($firstnum_b / $secondnum_b);
                    Break;
                }
        }    
    ?>
    <p>Ответ: <?php echo $response_button?></p>
</body>

</html>