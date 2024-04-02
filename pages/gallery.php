<?php
session_start();
require_once("../database/database.php");
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100&family=Ruslan+Display&display=swap" rel="stylesheet">
    <title>Сайт СНТ "Сосна"</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/media.css" type="text/css">
    <link rel="stylesheet" href="../style/media_login_form.css" type="text/css">
</head>

<body>
    <!-- !HEADER -->
     <?php
    require_once('header.php');
    ?>
    <!-- !HEADER end -->

    <!-- !MAIN -->
    <main>
        <!-- TODO POINT -->
        <!-- TODO POINT end -->
        <p class="padding__30"> </p>
        

            
               <div class="container">
                    <div class="block-cell">
                        <h2 class="shadow">Галерея</h2>
                <div class="point forum__point">
                    <h3 id="but1g" class="active__point point__h3">Фото</h3>
                    <h3 id="but2g" class="point__h3">Видео</h3>
                </div>
                        <div id="info__block1g" class="info__block1g">
                        <?php
  /* Функция для удаления лишних файлов: сюда, помимо удаления текущей и родительской директории, так же можно добавить файлы, не являющиеся картинкой (проверяя расширение) */
  function excess($files) {
    $result = array();
    for ($i = 0; $i < count($files); $i++) {
      if ($files[$i] != "." && $files[$i] != "..") $result[] = $files[$i];
    }
    return $result;
  }
  $dir = "../image/gal"; // Путь к директории, в которой лежат изображения
  $files = scandir($dir); // Получаем список файлов из этой директории
  $files = excess($files); // Удаляем лишние файлы
  /* Дальше происходит вывод изображений на страницу сайта (по 4 штуки на одну строку) */
?>
<?php for ($i = 0; $i < count($files); $i++) { ?>
  <img src="<?=$dir."/".$files[$i]?>" alt="" class="foto" />
  <?php if (($i + 1) % 4 == 0) { ?><br /><?php } ?>
<?php } ?>
                </div>
                        <div id="info__block2g" style="width:100%; justify-content:center;" class="d_none">

                        <video width="480" height="480" controls class="video">
  <source src="../image/gallery/video/hb_snt.mp4" type="video/mp4">
  Извините, Ваш браузер не поддерживает воспроизведение видео
</video>
                        <video width="272" height="480" controls class="video">
  <source src="../image/gallery/video/ny_2024.mp4" type="video/mp4">
 Извините, Ваш браузер не поддерживает воспроизведение видео
</video>
                        <video width="637" height="480" controls class="video">
  <source src="../image/gallery/video/003_min.mp4" type="video/mp4">
  Извините, Ваш браузер не поддерживает воспроизведение видео
</video>
                            <video width="272" height="480" controls class="video">
  <source src="../image/gallery/video/boydarka.mp4" type="video/mp4">
 Извините, Ваш браузер не поддерживает воспроизведение видео
</video>
                        
                </div>
            </div>
    </div>
    </main>
    <!-- !MAIN end -->
    <!-- !FOOTER -->
<?php
    require_once('footer.php');
     ?>
    <!-- !FOOTER end-->
    <script src="../js/script_gallery.js"></script>
</body>

</html>