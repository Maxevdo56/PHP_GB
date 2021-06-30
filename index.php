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
                    $oper = 'плюс'; 
                    $result = $_GET['first_value'] + $_GET['second_value']; 
                    Break;
                case 'minus': 
                    $oper = 'минус'; 
                    $result = $_GET["first_value"] - $_GET["second_value"]; 
                    Break;
                case 'multipl': 
                    $oper = 'умножить на'; 
                    $result = $_GET["first_value"] * $_GET["second_value"]; 
                    Break;
                case 'divide': 
                    $oper = 'разделить на'; 
                    if ($secondnum == 0) {
                        $result = 'делить на 0 нельзя';
                        Break;
                    } else {
                        $result = $_GET["first_value"] / $_GET["second_value"]; 
                        Break;
                    }
            }    
        ?>
        <input type="submit">   
        <p>Ответ: <?php echo $_GET["first_value"].' '.$oper.' '.$_GET["second_value"].' = '.$result;?></p>
</body>

</html>