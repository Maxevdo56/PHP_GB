<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Отзывы</title>
</head>
<body>
<h2>Задание 3. Добавление отзыва</h2>
    <form method="POST">
        <textarea name="review" cols="70" rows="5" placeholder="Введите ваш отзыв"></textarea>
        <br>
        <input type="submit">
        <br><br>
    </form>
    <h3 style="color: blue">Отзывы:</h3>
    <?php        
            $mysql = mysqli_connect('localhost', 'root', 'root', 'php_db', 3360);
            if (!$mysql) {
                die('Не могу соединиться с БД');
            }
            $review = mysqli_real_escape_string($mysql, htmlspecialchars(strip_tags($_POST['review'])));
            $review = trim($review);
            $query = 'INSERT INTO reviews (`review`) VALUES ("'.$review.'"); ';
            if ($review != NULL) {
                mysqli_query($mysql, $query);
            }
            // вывод отзывов
            $selectreviews = mysqli_query($mysql, "SELECT * FROM reviews WHERE 1");
            while ($row = mysqli_fetch_assoc($selectreviews)) {
                echo '<h4>Отзыв '.$row['id'].'</h4>';
                echo '<p>'.$row['review'].'</p><hr>';
            }
            mysqli_close($mysql);
        
/*
            if ($image_id != null) {
                echo '<a href="/">На главную</a><br>';
                $image_result = mysqli_query($link, "SELECT * FROM images WHERE id = $image_id;");
                while ($row = mysqli_fetch_assoc($image_result)) 
                {
                    $view_plus_one = (int)$row['viewed'] + 1;
                    mysqli_query($link, "UPDATE `php_db`.`images` SET `viewed` = '$view_plus_one' WHERE `id` = '$image_id';");
                    echo 'Количество просмотров этой фотографии: '.$view_plus_one.'<br>';
                    echo '<img src="'.$row["file_path"].$row["file_names"].'">';
                }
            } else {
                $result = mysqli_query($link, "SELECT * FROM images ORDER BY viewed DESC;");
                while($row = mysqli_fetch_assoc($result)) 
                {
                    echo '<a href="/?id='.$row['id'].'"><img width="350px" src="'.$row['file_path'].$row['file_names'].'"></a>';
                    echo 'Просмотров: '.$row['viewed'].'<br>';
                }
            };
            mysqli_close($link);

*/
           
    ?>


</body>
</html>