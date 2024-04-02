<?php
header("HTTP/1.0 404 NOT Found");
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Сайт садового некоммерческого товарищества СОСНА создан для информирования проживающих садоводов о новостях, расписании автобусов и мероприятиях товарищества.">
    <meta name="Keywords" content="СНТ Сосна, садовое некоммерческое товарищество СОСНА, расписание автобусов Шатура - д.Красное, расписание автобусов д.Красное - Орехово-Зуево, садоводство">
    <meta property="og:title" content="СНТ СОСНА">
    <meta property="og:site_name" content="Сайт некоммерческого товарищества Сосна">
    <meta property="og:url" content="https://snt-sosna.ru">
    <meta property="og:description" content="Сайт садового некоммерческого товарищества СОСНА создан для информирования садоводов о новостях и жизни товарищества.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://snt-sosna.ru/image/intro.webp">
    <link rel="canonical" href="https://snt-sosna.ru">    
    <title>Сайт садового некоммерческого товарищества СОСНА</title>
    <link rel="icon" href="https://snt-sosna.ru/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../style/style_404.css" type="text/css">
    <link rel="stylesheet" href="../style/media.css" type="text/css">
</head>

<body>
    <!-- !HEADER -->
<header>
        <div class="header">
            <div class="container">
                <nav class="menu__nav">
                    <input type='checkbox' name="responsive-menu" id='responsive-menu' onclick='updatemenu()'>
                    <label for="responsive-menu" class="responsive-menu">&nbsp;&nbsp;&nbsp;"Сосна"</label>
                    <?php
                        $url = $_SERVER['REQUEST_URI']; 
                            if (preg_match('/news/i', $url)){$news="active";}else{$news="nav__link";}; 
                            if (preg_match('/forum/i', $url)){$forum="active";}else{$forum="nav__link";}; 
                            if (preg_match('/information/i', $url)){$information="active";}else{$information="nav__link";}; 
                            if (preg_match('/contact/i', $url)){$contact="active";}else{$contact="nav__link";};
                            if (preg_match('/gallery/i', $url)){$gallery="active";}else{$gallery="nav__link";};
                            if (preg_match('/by/i', $url)){$by="active";}else{$by="nav__link";};
                        echo "<ul><li><a class='nav__link $news' href='https://snt-sosna.ru/pages/news.php'>Новости</a></li>
                        <li><a class='nav__link $forum' href='https://snt-sosna.ru/pages/forum.php'>Форум</a></li>
                        <li><a class='nav__link $information' href='https://snt-sosna.ru/pages/information.php'>информация</a></li>
                        <li class='hidden_mobile'><a href='https://snt-sosna.ru'><img class='img__logo' width='100' src='../image/logo_header.png' alt='logo'><p>На главную</p></a></li>
                        <li><a class='nav__link $contact' href='https://snt-sosna.ru/pages/contact.php'>контакты</a></li>
                        <li><a class='nav__link $gallery' href='https://snt-sosna.ru/pages/gallery.php'>галерея</a></li>
                        <li><a class='nav__link $by' href='https://snt-sosna.ru/pages/by.php'>Покупка</a></li>
                    </ul>";
                    ?>
                </nav>
            </div>
        </div>


    </header>
    <main>
        <!-- TODO POINT -->
        <!-- TODO POINT end -->
        <p> </p>
            <div id="info__block1">
                <div>
                        <h2 class="big__404">404</h2>
                        <h2 class="small__404">Страница не найдена</h2>
                </div>    
            </div>
    </main>
    <!-- !MAIN end -->
    <!-- !FOOTER -->
<footer>
    <div class="container">
        <div class="block__footer">
                <div class='footer__text'>    
                <div><a href='../index.php'><img src='../image/logo_footer.png' alt='логотип' class="logo__footer"></a></div>
                <div><h5>Copyright © СНТ "Сосна" 2024.</h5></div>
        </div>
        </div>
    </div>
</footer>
    <!-- !FOOTER end-->
</body>

</html>