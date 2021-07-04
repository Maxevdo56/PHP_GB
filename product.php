<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Карточка товара</title>
</head>
<body>
<?php
        $mysql = mysqli_connect('localhost', 'root', 'root', 'php_db', 3360);
        if (!$mysql) {
            die('Не могу соединиться с БД');
        }
        $productID = $_GET['productID'];
        $cardquery = mysqli_query($mysql, "SELECT * FROM products WHERE id = '$productID'");
            while ($row = mysqli_fetch_assoc($cardquery)) {
                echo '<div class="productcard">';
                    echo '<h3>'.$row['name'].'</h3>';
                    echo '<p>Описание: '.$row['desc'].'</p>';
                    echo '<p>Страна: '.$row['country'].'</p>';
                    echo '<p>Калорий в 100 грамм: '.$row['nutricious'].' ккал</p>';
                    echo '<p>Цена за 1 кг: '.$row['price'].' руб.</p>';
                    echo '<img class="img_mini" src="'.$row['photo_filepath'].'">';
                echo '</div>';
                echo '<a href="catalog.php">Вернуться в каталог</a><br>';
            }
        mysqli_close($mysql);
    ?>
    <br>
<form name="addtocart" action="addtocart.php" method="post">
    <input type="" name="product_ID" value="<?php echo $productID;?>">
    <input type="submit" value="Добавить в корзину">
</form>
<?php 
var_dump($_POST['product_ID']);
var_dump($_POST); // вывод массива $_POST даёт NULL, т.е. массив пустой
?>

</body>
</html>