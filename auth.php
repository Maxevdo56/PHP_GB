<? ob_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
</head>
<body>
<?php
    $mysql = mysqli_connect('localhost', 'root', 'root', 'php_db', 3360);
    if (!$mysql) {
        die('Не могу соединиться с БД');
    }
if (!isset($_COOKIE['logged'])) {
    echo '
        <form method="POST">
            <input type="text" name="login"><br>
            <input type="password" name="passw"><br>
            <input type="submit" value="Войти">
        </form> ';
        $login = $_POST['login'];
        $password = $_POST['passw'];
        $authquery = mysqli_query($mysql, "SELECT * FROM users WHERE login = '$login'");
        while ($row = mysqli_fetch_assoc($authquery)) {     
            if ($row['password'] == $password && $row['login'] == $login) {
                setcookie('logged', 1);
                setcookie('name', $row['name']);
                header('Location: /user-cabinet.php');
            }
        };        
        echo 'введите логин и пароль';
    } else {
        header('Location: /user-cabinet.php');
    }
    mysqli_close($mysql);
    ?>
</body>
</html>
