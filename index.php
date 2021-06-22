<! --
Задание 1. Создать галерею фотографий. Она должна состоять из одной страницы, 
на которой пользователь видит все картинки в уменьшенном виде. 
При клике на фотографию она должна открыться в браузере в новой вкладке. 
Размер картинок можно ограничивать с помощью свойства width
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Gallery</title>
</head>
<body>
    <h2>Задание 1 - Галлерея на HTML</h2>
    <a href="./img/wolf.jpg" target="_blank"><img width="350px" src="./img/wolf.jpg" alt="wolf"></a>
    <a href="./img/bear.jpg" target="_blank"><img width="350px" src="./img/bear.jpg" alt="bear"></a>
    <a href="./img/fox.jpg" target="_blank"><img width="350px" src="./img/fox.jpg" alt="fox"></a>

    <! --
    Задание 2. *Строить фотогалерею, не указывая статичные ссылки к файлам, 
    а просто передавая в функцию построения адрес папки с изображениями. 
    Функция сама должна считать список файлов и построить фотогалерею со ссылками в ней.
    -->
    <?php
        echo '<br>'.'<h2>Задание 2 - Галлерея на PHP</h2>'.'<br>';
        $files = scandir('./img/');
        foreach ($files as $file) {
            if ($file == '.' || $file == '..') {
                continue;
            } else {
                echo '<a href="./img/'.$file.'" target="_blank"><img width="350px" src="./img/'.$file.'"></a>';
            };
        };
    ?>
    
    <! --
    Задание 3. *[ для тех, кто изучал JS-1 ] 
    При клике по миниатюре нужно показывать полноразмерное изображение в модальном окне
    -->
    <?php
        echo '<br>'.'<h2>Задание 3 - Галлерея на PHP + модальное окно</h2>'.'<br>';
        $files = scandir('./img/');
        foreach ($files as $file) {
            if ($file == '.' || $file == '..') {
                continue;
            } else {
                echo '<div class="modal" id="modal-1">';
                echo '<div class="modal__content">';
                echo '<a class="modal5" href="./img/'.$file.'" target="_parent"><img width="350px" src="./img/'.$file.'"></a>';
                echo '</div>';
                echo '</div>';
                
            };
        };
    ?>


    <header class="header">
    <div class="header__inner">
        <div class="header__logo">
        <p>Smartlanding</p>
        </div>
        <button id="callback-button" class="header__button">Обратный звонок</button>
    </div>
    </header>
    <!-- Модальное окно -->
    <div class="modal" id="modal-1">
    <div class="modal__content">
        <button class="modal__close-button"><img src="./close.png" width="18" alt=""></button>
        <?php 
            echo '<img width="600px" src="./img/'.$file.'">';
        ?>
    </div>
    </div>


    </div>
</div>
<script src="./script.js"></script> 
</body>
</html>