<?php
session_start();
require_once("../database/database.php");
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
     <?php
    require_once('develop_page.php');
    ?>
    
    </main>
    <!-- !MAIN end -->
    <!-- !FOOTER -->
<?php
    require_once('footer.php');
     ?>
    <!-- !FOOTER end-->
</body>

</html>