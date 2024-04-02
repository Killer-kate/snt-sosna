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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100&family=Ruslan+Display&display=swap"rel="stylesheet">
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
        <div class="block__point">
            <div class="container">
                <h2 class="shadow__max">Новости</h2>
                <div class="point">
                    <h3 id="but1n" class="active__point point__h3">Все новости</h3>
                    <h3 id="but2n" class="point__h3">Информация</h3>
                    <h3 id="but3n" class="point__h3">Мероприятия</h3>
                    <h3 id="but4n" class="point__h3">Должники</h3>
                </div>
            </div>
        </div>
        <!-- TODO POINT end -->

         <!-- TODO NEWS -->
         <section class="events">
            <div class="container">
                <!-- Все новости -->
                <div id="info__block1n" class="events__cards">
                <?php
                        $arr = mysqli_query($mysql, "SELECT * FROM `events` WHERE `filter` IN ('news', 'events') ORDER BY `number` DESC limit 15");
                        $arr = mysqli_fetch_all($arr);
                        foreach ($arr as &$value) {
                        ?>
                        
                            <div class="card">
                                <img src="../<?= $value[3] ?>" alt="мероприятие">
                                <h3><?= $value[1] ?></h3>
                                <div class="truncate">
                                    <p><?= $value[2] ?></p>
                                </div>
                                <span><?php $var=$value[4]; format_vremeni($var); echo format_vremeni($var)?></span>
                            </div>
                        <?php
                        }
                        ?>
                </div>
                    <!-- Информация -->
                <div id="info__block2n" class="events__cards d_none">
                <?php
                        $arr = mysqli_query($mysql, "SELECT * FROM `events` WHERE `filter`= 'news' ORDER BY `number` DESC limit 15");
                        $arr = mysqli_fetch_all($arr);
                        foreach ($arr as &$value) {
                        ?>

                            <div class="card">
                                <img src="../<?= $value[3] ?>" alt="мероприятие">
                                <h3><?= $value[1] ?></h3>
                                <div class="truncate">
                                    <p><?= $value[2] ?></p>
                                </div>
                                <span><?php $var=$value[4]; format_vremeni($var); echo format_vremeni($var)?></span>
                            </div>
                        <?php
                        }
                        ?>
                </div>
                    <!-- Мероприятия -->
                <div id="info__block3n" class="events__cards d_none">
                <?php
                        $arr = mysqli_query($mysql, "SELECT * FROM `events` WHERE `filter`= 'events' ORDER BY `number` DESC limit 15");
                        $arr = mysqli_fetch_all($arr);
                        foreach ($arr as &$value) {
                        ?>

                            <div class="card">
                                <img src="../<?= $value[3] ?>" alt="мероприятие">
                                <h3><?= $value[1] ?></h3>
                                <div class="truncate">
                                    <p><?= $value[2] ?></p>
                                </div>
                                <span><?php $var=$value[4]; format_vremeni($var); echo format_vremeni($var)?></span>
                            </div>
                        <?php
                        }
                        ?>
                </div>
                <!-- Должники -->
                <div id="info__block4n" class="events__cards d_none">
            <div id="info__block1 style="width:100%;>
                <div>
                      <h2 class="shadow">Здесь будет опубликован список должников</h2>
                </div>
            </div>
                </div>
                
            </div>
        </section>
        <!-- TODO NEWS -->
    </main>
    <!-- !MAIN end -->

    <!-- !FOOTER -->
    <?php
    require_once('footer.php');
     ?>
    <!-- !FOOTER end-->

    <script src="../js/script_news.js"></script>
</body>
</html>