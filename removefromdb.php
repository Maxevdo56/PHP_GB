<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $mysql = mysqli_connect('localhost', 'root', 'root', 'php_db', 3360);
        if (!$mysql) {
            die('Не могу соединиться с БД');
        }
        $removequery = 'DELETE FROM products WHERE (`id` = "'.$_GET['product_ID'].'");'; 
        mysqli_query($mysql, $removequery);
    ?>
<h3>Товар удалён!</h3>
    <form action="./editgoods.php">
        <input type="submit" value="Вернуться к базе данных">
    </form>
</body>
</html>