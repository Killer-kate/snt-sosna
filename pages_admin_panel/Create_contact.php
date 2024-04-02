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
</head>

<body>


    <!-- !HEADER -->
    
    <!-- !HEADER end -->

    <!-- !MAIN -->
    <main>
    <div class="header_link">
        <a href="../pages/personal_account.php"><img src="../image/iconLeft.png" alt="стрелочка"></a>
        <h2>Конструктор контакта</h2>
    </div>
    <form class="form_contact_new">
        <span>Название контакта:</span>
        <input class="form_input" type="text" placeholder="Введите ФИО контакта" required>
        <span>Варианты для связи:</span>
        <div class="form_div">
        <div><img src="../image/phone.png" alt=""><input type="text" placeholder="Введите телефон контакта" required></div>
        <div><img src="../image/globe.png" alt=""><input type="text" placeholder="Введите почту контакта" required></div>
        <div><img src="../image/metka.png" alt=""><input type="text" placeholder="Введите должность контакта" required></div>
        </div>
        <button class="form_button events__button">Создать контакт</button>
    </form>
    </main>
    <!-- !MAIN end -->

    <!-- !FOOTER -->
<?php
    require_once('../pages/footer.php');
     ?>
    <!-- !FOOTER end-->
    <script src="../js/script_contacts.js"></script>
</body>

</html>