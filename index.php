<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
</head>
<!--
    1. Создать галерею изображений, состоящую из двух страниц:
    просмотр всех фотографий (уменьшенных копий);
    просмотр конкретной фотографии (изображение оригинального размера) по ее ID в базе данных.
    2. В базе данных создать таблицу, в которой будет храниться информация о картинках 
    (адрес на сервере, размер, имя).
-->
<!--
    CREATE TABLE images (  
    id int NOT NULL primary key AUTO_INCREMENT comment 'primary key',
    file_path varchar(255) comment 'path to file',
    file_names varchar(255) comment 'name of file',
    file_size INT comment 'filesize in bytes'
    ) default charset utf8 comment '';
-->
<body>
<?php
    $link = mysqli_connect('127.0.0.1', 'root', '123456', 'php_db');
    echo 'DB Connection.....OK!<br>';
    $result = mysqli_query($link, "SELECT * FROM images");
/*
    while($row = mysqli_fetch_assoc($result)) 
    {
        echo $row['id'],' ', $row['file_path'],' ', $row['file_names'],' ', $row['file_size']. "<br />";
    }
    mysqli_close($link);*/
?>
    <h2>Задание 1 - Галлерея на HTML</h2>
    <a href="./img/wolf.jpg" target="_blank"><img width="350px" src="./img/wolf.jpg" alt="wolf"></a>
    <a href="./img/bear.jpg" target="_blank"><img width="350px" src="./img/bear.jpg" alt="bear"></a>
    <a href="./img/fox.jpg" target="_blank"><img width="350px" src="./img/fox.jpg" alt="fox"></a>
</body>
</html>