<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ДЗ 6</title>
</head>

<body>
    <h2>Калькулятор</h2>
    <form method="GET">
        <input type="text" required name="first_value" pattern="^[ 0-9]+$" placeholder="Введите первое число">
        <select name="operation" id="act">
            <option value="plus">плюс</option>
            <option value="minus">минус</option>
            <option value="multipl">умножить</option>
            <option value="divide">разделить</option>
        </select>
        <input type="text" required name="second_value" pattern="^[0-9]+$" placeholder="Введите второе число">
        <?php
            $firstnum = $_GET["first_value"];
            $secondnum = $_GET["second_value"];
            switch ($_GET['operation']) {
                case 'plus': 
                    $result = $_GET['first_value'] + $_GET['second_value']; 
                    $oper = 'плюс'; Break;
                case 'minus': 
                    $result = $_GET["first_value"] - $_GET["second_value"]; 
                    $oper = 'минус'; Break;
                case 'multipl': 
                    $result = $_GET["first_value"] * $_GET["second_value"]; 
                    $oper = 'умножить на'; Break;
                case 'divide': 
                    $result = $_GET["first_value"] / $_GET["second_value"]; 
                    $oper = 'разделить на'; Break;
            }
            
        ?>
        <input type="submit">

        <form action="#" method="post">   
        <p>Ответ: <?php echo $_GET["first_value"].' '.$oper.' '.$_GET["second_value"].' = '.$result;?></p>
</body>

</html>