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

    //$newname = $_GET['newname'];
    $newname = mysqli_real_escape_string($mysql, htmlspecialchars(strip_tags($_POST['newname'])));
    $newcountry = mysqli_real_escape_string($mysql, htmlspecialchars(strip_tags($_POST['newcountry'])));
    $newnutricious = mysqli_real_escape_string($mysql, htmlspecialchars(strip_tags($_POST['newnutricious'])));
    $newprice = mysqli_real_escape_string($mysql, htmlspecialchars(strip_tags($_POST['newprice'])));
    $newdesc = mysqli_real_escape_string($mysql, htmlspecialchars(strip_tags($_POST['newdesc'])));
    $addquery = 'INSERT INTO products (`name`, `country`, `nutricious`, `price`, `desc`) 
                 VALUES ("'.$newname.'", "'.$newcountry.'", "'.$newnutricious.'", "'.$newprice.'", "'.$newdesc.'");';
   
    mysqli_query($mysql, $addquery);
    if ($_FILES['newimg']) {
        var_dump($_FILES);
    }
    $uploadDir = __DIR__.'/img';
    // ЗДЕСЬ ЗАКОНЧИЛ !!!
    $newName = $uploadDir.''
    
    ?>
    <h3>Товар добавлен!</h3>
    <form action="./editgoods.php">
        <input type="submit" value="Вернуться к базе данных">
    </form>
</body>
</html>