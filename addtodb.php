    <?php
    $mysql = mysqli_connect('localhost', 'root', 'root', 'php_db', 3360);
    if (!$mysql) {
        die('Не могу соединиться с БД');
    }
    
    if ($_FILES['newimg']) {
        $uploadDir = __DIR__.'/img/products';
        $newName = $uploadDir.'/'.$_FILES['newimg']['name'];
        $newImgPath = './img/products/'.$_FILES['newimg']['name'];
        move_uploaded_file($_FILES['newimg']['tmp_name'], $newName);
    }
    
    $newname = mysqli_real_escape_string($mysql, htmlspecialchars(strip_tags($_POST['newname'])));
    $newcountry = mysqli_real_escape_string($mysql, htmlspecialchars(strip_tags($_POST['newcountry'])));
    $newnutricious = mysqli_real_escape_string($mysql, htmlspecialchars(strip_tags($_POST['newnutricious'])));
    $newprice = mysqli_real_escape_string($mysql, htmlspecialchars(strip_tags($_POST['newprice'])));
    $newdesc = mysqli_real_escape_string($mysql, htmlspecialchars(strip_tags($_POST['newdesc'])));
    $addquery = 'INSERT INTO products (`name`, `country`, `nutricious`, `price`, `photo_filepath`, `desc`) 
                 VALUES ("'.$newname.'", "'.$newcountry.'", "'.$newnutricious.'", "'.$newprice.'", "'.$newImgPath.'", "'.$newdesc.'");';
    mysqli_query($mysql, $addquery);
    echo '
    <h3>Товар добавлен!</h3>
    <form action="./editgoods.php">
        <input type="submit" value="Вернуться к базе данных">
    </form>'
    ?>