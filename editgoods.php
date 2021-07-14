<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
    $mysql = mysqli_connect('localhost', 'root', 'root', 'php_db', 3360);
    if (!$mysql) {
        die('Не могу соединиться с БД');
    }
    $productsquery = mysqli_query($mysql, "SELECT * FROM products WHERE 1");
    echo '<h3>Управление товарами в базе данных</h3>';
    echo '<table class="tablerow">';
            echo '<tr bgcolor="#faebb">';
                echo '<td class="tablerow">Управление</td>';
                echo '<td class="tablerow">Наименование</td>';
                echo '<td class="tablerow">Страна товара</td>';
                echo '<td class="tablerow">Энергетическая ценность, ккал</td>';
                echo '<td class="tablerow">Цена за 1 кг</td>';
                echo '<td class="tablerow">Описание</td>';
                echo '<td class="tablerow">Фотография</td>';
            echo '</tr>';
            echo '<tr  bgcolor="9ada76">';
                echo '<td class="tablerow">
                <form enctype="multipart/form-data" name="addtodatabase" action="./addtodb.php" method="POST">
                    <input type="submit" value="Добавить в базу"></td>';
                echo '<td class="tablerow"><input type="text" style="width:130px" required name="newname" placeholder="Введите название"></td>';
                echo '<td class="tablerow"><input type="text" style="width:130px" required name="newcountry" placeholder="Введите страну"></td>';
                echo '<td class="tablerow"><input type="text" style="width:130px" required pattern="^[ 0-9]+$" name="newnutricious" placeholder="Сколько ккал в 1 кг"></td>';
                echo '<td class="tablerow"><input type="text" style="width:130px" required name="newprice" placeholder="Введите цену за 1 кг"></td>';
                echo '<td class="tablerow"><textarea cols="25" rows="4" required name="newdesc" placeholder="Введите описание"></textarea></td>';
                echo '<td class="tablerow"><input type="file" name="newimg"></td>';
                
            echo '</tr>';
            echo '</form>';
            
        while ($row = mysqli_fetch_assoc($productsquery)) {
            echo '<tr >';
            echo '<td class="tablerow">
            <form name="removefromdatabase" action="./removefromdb.php" method="GET">
                <input type="hidden" name="product_ID" value="'.$row['id'].'">
                <input type="submit" value="Удалить из базы">
            </form>
            </td>';
            echo '<td class="tablerow">'.$row['name'].'</td>';
            echo '<td class="tablerow">'.$row['country'].'</td>';
            echo '<td class="tablerow">'.$row['nutricious'].'</td>';
            echo '<td class="tablerow">'.$row['price'].'</td>';
            echo '<td class="tablerow">'.$row['desc'].'</td>';
            echo '<td class="tablerow"><img width="100px" src="'.$row['photo_filepath'].'"></td>';
            echo '</tr>';
        }
    echo '</table>';

    mysqli_close($mysql);
    echo '<a href="index.php">Перейти в каталог товаров</a>';  
?>
</body>
</html>