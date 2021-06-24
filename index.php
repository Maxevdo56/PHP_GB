<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
</head>
<!--
    CREATE TABLE images (  
    id int NOT NULL primary key AUTO_INCREMENT comment 'primary key',
    file_path varchar(255) comment 'path to file',
    file_names varchar(255) comment 'name of file',
    file_size INT comment 'filesize in bytes'
    ) default charset utf8 comment '';
-->
<body>
<a href=""></a>
<?php
    echo '<h2>Галлерея фотографий сортируется по количеству просмотров</h2>';
    $link = mysqli_connect('127.0.0.1', 'root', 'root', 'php_db', 3360);
    $image_id = $_GET['id'];
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
?>
    
</body>
</html>