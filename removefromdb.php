    <?php
        $mysql = mysqli_connect('localhost', 'root', 'root', 'php_db', 3360);
        if (!$mysql) {
            die('Не могу соединиться с БД');
        }
        $pathquery = 'SELECT photo_filepath FROM products WHERE (`id` = "'.$_GET['product_ID'].'");';
        $imgpathquery = mysqli_fetch_assoc(mysqli_query($mysql, $pathquery));
        unlink($imgpathquery['photo_filepath']);
        $removequery = 'DELETE FROM products WHERE (`id` = "'.$_GET['product_ID'].'");'; 
        $remove_e = mysqli_query($mysql, $removequery);
        echo '
        <h3>Товар удалён!</h3>
        <form action="./editgoods.php">
            <input type="submit" value="Вернуться к базе данных">
        </form>
        '
    ?>