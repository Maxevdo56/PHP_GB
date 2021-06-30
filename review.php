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
    <?php
        if (count($_POST)) {
            $mysql = mysqli_connect('localhost', 'root', 'root', 'php_db', 3360);
            if (!$mysql) {
                die('Не могу соединиться с БД');
            }
            $review = mysqli_real_escape_string($mysql, htmlspecialchars(strip_tags($_POST['review'])));
            $review = trim($review);
            var_dump($review);

            $query = 'INSERT INTO reviews (`review`) VALUES ("'.$review.'"); ';
            var_dump($query);
            mysqli_query($mysql, $query);
        }
    ?>
    <h3 color="blue">Отзывы:</h3>
        
        <h4>Отзыв 1</h4>
        <p>Здесь будет отзыв из БД</p>
        <hr>
        
        <h4>Отзыв 2</h4>
        <p>Здесь будет отзыв из БД</p>

</body>
</html>