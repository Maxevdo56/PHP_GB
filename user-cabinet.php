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
    if (isset($_COOKIE['logged']) && isset($_COOKIE['name'])) {
        echo $_COOKIE['name'].', добро пожаловать в личный кабинет';
    } else {
        echo 'ДОСТУПА НЕТ!<br>Перейдите <a href="auth.php">по этой ссылке</a> для ввода логина и пароля';
    }
    ?>
    
</body>
</html>