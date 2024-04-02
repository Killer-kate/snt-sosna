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
        <p style="padding:30px;"> </p>
        

            <div id="info__block1" style="width:100%; justify-content:center;">
               
                    <div class="block-cell">
                        <h2 style="padding-bottom:50px;text-shadow: 2px 0 black, 0 -2px black, -2px 0 black, 0 2px black;">Галерея</h2>
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
  <img src="<?=$dir."/".$files[$i]?>" alt="" style="margin-left:10px;margin-right: 10px;border-radius:20px;padding-bottom:7px;" />
  <?php if (($i + 1) % 4 == 0) { ?><br /><?php } ?>
<?php } ?>

                </div>
            </div>
    
    </main>
    <!-- !MAIN end -->
    <!-- !FOOTER -->
<?php
    require_once('footer.php');
     ?>
    <!-- !FOOTER end-->
</body>

</html>