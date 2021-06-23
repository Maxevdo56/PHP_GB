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
                echo '<a class="click-image get-modal_1" href="#">
                    <img width="350px" src="./img/'.$file.'"></a>';
            };
        };
    ?>

  <!-- Модальное окно -->
  <div class="modal" id="modal-window">
    <div class="modal__content">
      <button class="modal-close-button"><img src="./close.png" width="12" alt=""></button>
      <?php var_dump($file);?>
      <img width="100%" src="./img/<?php echo $file ?>" alt="">
    </div>
  </div>

  <script src="./script.js"></script>

</body>
</html>