<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Корзина</title>
</head>
<body>
<?php
    $mysql = mysqli_connect('localhost', 'root', 'root', 'php_db', 3360);
    if (!$mysql) {
        die('Не могу соединиться с БД');
    }
    $productsquery = mysqli_query($mysql, "SELECT * FROM products WHERE 1");
    echo '<h3>Корзина товаров</h3>';
    echo '<table class="tablerow">';
            echo '<tr >';
            echo '<td class="tablerow">Наименование</td>';
            echo '<td class="tablerow">Управление товаром</td>';
            echo '<td class="tablerow">Цена за 1 кг</td>';
            echo '<td class="tablerow">Количество</td>';
            echo '<td class="tablerow">Итого</td>';
            echo '</tr>';
        while ($row = mysqli_fetch_assoc($productsquery)) {
            $price = $row['price'];
            $quantity = $_SESSION['cart'][$row['id']];
            if ($quantity < 1) { continue; }
            $good_total = $price * $quantity;
            echo '<tr >';
            echo '<td class="tablerow">'.$row['name'].' <img width="100px" src="'.$row['photo_filepath'].'"></td>';
            echo '<td class="tablerow"><a href="product.php?productID='.$row['id'].'">Перейти к товару</a></td>';
            echo '<td class="tablerow">'.$price.' руб.</td>';
            echo '<td class="tablerow">'.$quantity.'</td>';
            echo '<td class="tablerow">'.$good_total.' руб.</td>';
            $total += $good_total;
            echo '</tr>';
        }
            echo '<tr>';
            echo '<td></td>';
            echo '<td></td>';
            echo '<td></td>';
            echo '<td><b>Итого:</td>';
            echo '<td><b>'.$total.' руб.</td>';
            echo '</tr></b>';
    echo '</table>';

    mysqli_close($mysql);
    echo '<a href="index.php">Перейти в каталог товаров</a>';  
?>
</body>
</html>