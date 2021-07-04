<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Каталог товаров</title>
</head>

<body>
<h2>Каталог товаров</h2>
    <?php
        $mysql = mysqli_connect('localhost', 'root', 'root', 'php_db', 3360);
        if (!$mysql) {
            die('Не могу соединиться с БД');
        }
        $productsquery = mysqli_query($mysql, "SELECT * FROM products WHERE 1");
        echo '<div class="wrap">';
            while ($row = mysqli_fetch_assoc($productsquery)) {
                echo '<div class="productcard">';
                echo '<h3>'.$row['name'].'</h3>';
                echo '<p>Цена за 1 кг: '.$row['price'].' руб.</p>';
                echo '<a href="product.php?productID='.$row['id'].'">Перейти к товару</a>';
                echo '<img class="img_mini" src="'.$row['photo_filepath'].'">';
                echo '</div>';
            }
        mysqli_close($mysql);
    ?>
    
</body>

</html>