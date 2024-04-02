<?php
session_start();
require_once("database/database.php");
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Сайт садового некоммерческого товарищества СОСНА создан для информирования садоводов о новостях и жизни товарищества.">
    <meta name="Keywords" content="СНТ Сосна, садовое некоммерческое товарищество СОСНА, расписание автобусов Шатура - д.Красное, расписание автобусов д.Красное - Орехово-Зуево, садоводство">
    <meta property="og:title" content="СНТ СОСНА">
    <meta property="og:site_name" content="Сайт некоммерческого товарищества Сосна">
    <meta property="og:url" content="https://snt-sosna.ru">
    <meta property="og:description" content="Сайт садового некоммерческого товарищества СОСНА создан для информирования садоводов о новостях и жизни товарищества.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://snt-sosna.ru/image/intro.webp">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!--link href="https://fonts.googleapis.com/css2?family=Inter:wght@100&family=Ruslan+Display&display=swap" rel="stylesheet"-->
    <title>Сайт садового некоммерческого товарищества СОСНА</title>
    <link rel="icon" href="https://snt-sosna.ru/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style/style.css" type="text/css">
    <link rel="stylesheet" href="style/media.css" type="text/css">
</head>

<body>
    <!-- !HEADER -->
<header>
        <div class="header">
            <div class="container">
                <nav class="menu__nav">
                    <input style="margin: 10px;" type='checkbox' id='responsive-menu' onclick='updatemenu()'>
                    <label style="font-size: 30px; font-weight: 700;">&nbsp;&nbsp;&nbsp;СНТ "Сосна"</label>
                    <?php
                        $url = $_SERVER['REQUEST_URI']; 
                            if (preg_match('/news/i', $url)){$news="active";}else{$news="nav__link";}; 
                            if (preg_match('/forum/i', $url)){$forum="active";}else{$forum="nav__link";}; 
                            if (preg_match('/information/i', $url)){$information="active";}else{$information="nav__link";}; 
                            if (preg_match('/contact/i', $url)){$contact="active";}else{$contact="nav__link";};
                            if (preg_match('/gallery/i', $url)){$gallery="active";}else{$gallery="nav__link";};
                            if (preg_match('/by/i', $url)){$by="active";}else{$by="nav__link";};
                        echo "<ul><li><a class='nav__link $news' href='pages/news.php'>Новости</a></li>
                        <li><a class='nav__link $forum' href='pages/forum.php'>Форум</a></li>
                        <li><a class='nav__link $information' href='pages/information.php'>информация</a></li>
                        <li><a href='../index.php'><img class='img__logo' width='100' src='image/logo_header.png' alt='logo'></a></li>
                        <li><a class='nav__link $contact' href='pages/contact.php'>контакты</a></li>
                        <li><a class='nav__link $gallery' href='pages/gallery.php'>галерея</a></li>
                        <li><a class='nav__link $by' href='pages/by.php'>Купить участок</a></li>
                    </ul>";
                    ?>
                </nav>
            </div>
        </div>
        <div class="personal__account">
            <a href="personalAccount.php">
                <div class="circle">
                    <img src="image/user.png" alt="личный кабинет">
                </div>
            </a>
                
        </div>

    </header>

    <!-- !HEADER end -->
    <!-- TODO INTRO -->
    <div class="intro">
        <div class="container">
            <div class="intro__inner">
                <h1 class="intro__title"><span>"СОСНА"</span> - Дача твоей мечты</h1>
            </div>
        </div>
    </div>
    <!-- TODO INTRO end -->
    <!-- !MAIN -->
    <main>
        <!-- TODO INFORMATION BLOCK -->
        <section class="information">
            <div class="container">
                <div class="decor__info"><img src="image/block.png" alt=""></div>
                <div class="info">
                    <div class="block__1">
                        <div>
                            <img class="info_foto1" src="image/foto1.jpg" alt="мероприятие в снт">
                        </div>
                        <div class="block__text">
                            <h2>Наше снт</h2>
                            <p>Наше СНТ расположено на территории поля и лесного массива, поэтому воздух здесь чистый и
                                нет городского шума. </p>
                            <p>На территории СНТ есть не большой пляж и зона для игры в волейбол. Все желающие могут
                                прийти поиграть, а затем расслабиться под лучами солнышка и принять водные процедуры в
                                пруду, а вечером устроить романтический вечер сидя у воды или организовать не большой
                                пикничок.</p>
                        </div>
                        <img class="info_foto2" src="image/foto2.png" alt="фото с мероприятия">
                    </div>
                    <div class="block__2">
                        <div class="block__text2">
                            <p>В нашем СНТ живут очень добрые и активные люди которые любят устраивать различные
                                конкурсы и мероприятия.
                            </p>
                            <ul class="list">
                                <li>В дни летних каникул был объявлен конкурс детских рисунков на тему: "Здравствуй
                                    ЛЕТО!", по результатам которого все дети получили памятные подарки. </li>
                                <li>В мае мы отметили "День Победы", где дети рассказывали стихи, желающие исполнили
                                    песни военных лет под аккомпанемент аккордеониста и "минусовок", а в окончании
                                    праздника, все гости отведали гречневой каши с тушенкой.</li>
                                <li>19 августа 2023 года мы отметили 35 лет нашему СНТ веселым и задорным концертом.
                                </li>
                            </ul>
                        </div>
                        <div><img class="info_foto3" src="image/foto3.png" alt="фото с пруда"></div>
                        <img class="info_foto4" src="image/foto4.webp" alt="фото с пруда">
                    </div>
                </div>
            </div>
        </section>
        <!-- TODO INFORMATION BLOCK end -->

        <!-- TODO MAP BLOCK -->
        <section class="map">
            <div class="container">
                <div class="map__header">
                    <h2>Карта</h2>
                </div>
                <div class="map__info">
                    <div class="map__description">
                        <p class="active">Магазин</p>
                        <p>Колодец</p>
                        <p>Волейбольная площадка</p>
                    </div>
                    <div><img src="image/map.png" alt="карта СНТ"></div>
                    <div class="map__description">
                        <p>Пляж</p>
                        <p>Здание администрации</p>
                        <p>Трансформаторная будка</p>
                    </div>
                </div>

            </div>
        </section>
        <!-- TODO MAP BLOCK end -->

        <!-- TODO EVENTS -->
        <section class="events">

            <h2>Мероприятия</h2>
            <div class="block__events__card">
                <div class="container">
                    <div class="events__cards decor__margin">
                        <?php
                        $arr = mysqli_query($mysql, "SELECT * FROM `events` ORDER BY `number` DESC limit 4");
                        $arr = mysqli_fetch_all($arr);
                        foreach ($arr as &$value) {
                        ?>

                            <div class="card">
                                <img src="<?= $value[3] ?>" alt="мероприятие">
                                <h3><?= $value[1] ?></h3>
                                <div class="truncate">
                                    <p><?= $value[2] ?></p>
                                </div>
                                <span><?= $value[4] ?></span>
                            </div>
                        <?php
                        }
                        ?>

                    </div>
                    <a href="pages/news.php" class="events__button">Смотреть все</a>
                    <div class="null__block">

                    </div>
                </div>
            </div>

        </section>
        <!-- TODO EVENTS end -->

        <!-- TODO GALLERY -->
        <section class="gallery">
            

            
                <h2>Галерея</h2>
                <div class="block__events__card2">
                <div class="container">
                <div class="gallery__block">
                    <div class="image__gallvert">
                        <div class="gallery__section">
                            <img src="image/gallery/gal1.png" alt="галерея">
                            <img src="image/gallery/gal5.png" alt="галерея">
                            <img src="image/gallery/gal2.png" alt="галерея">
                            <img src="image/gallery/gal3.png" alt="галерея">
                        </div>
                        </div>
                </div>
                <a href="pages/gallery.php" class="gallery__button events__button">Смотреть все</a>
            </div>
            </div>
        </section>
        <!-- TODO GALLERY end -->
    </main>
    <!-- !MAIN end -->

    <!-- !FOOTER -->
<footer>
    <div class="container">
        <div class="block__footer">
            <?php
                        $url = $_SERVER['REQUEST_URI']; 
                            if (preg_match('/news/i', $url)){$news="active";}else{$news="nav__link";}; 
                            if (preg_match('/forum/i', $url)){$forum="active";}else{$forum="nav__link";}; 
                            if (preg_match('/information/i', $url)){$information="active";}else{$information="nav__link";}; 
                            if (preg_match('/contact/i', $url)){$contact="active";}else{$contact="nav__link";};
                            if (preg_match('/gallery/i', $url)){$gallery="active";}else{$gallery="nav__link";};
                            if (preg_match('/by/i', $url)){$by="active";}else{$by="nav__link";};
           echo "
        <div class='footer__text'>
            
                <div><a href='../index.php'><img src='image/logo_footer.png' alt='логотип' style='width:13%;'></a></div>
                <div><h5 style='text-decoration: none; color: #223001;'>Copyright © СНТ \"Сосна\" 2024.</h5></div>
            
        </div>";
            ?>
        </div>
    </div>
</footer>
    <!-- !FOOTER end-->
</body>

</html>