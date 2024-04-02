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
            <h2>Конструктор голосований</h2>
        </div>
        <form class="form_contact_new">
            <span>Заголовок голосования:</span>
            <input class="form_input" type="text" placeholder="Введите заголовок для голосования" required>
            <span>Описание голосования:</span>
            <textarea placeholder="Небольшое описание голосования" required></textarea>
            <span>Варианты голосования:</span>
            <input class="form_input" type="text" placeholder="Введите вариант голосования" required>
            <label id="myLabel">
                
    <img id="myimg" class="file_load_img" src="../image/icons/plus.png" alt="Нажмите для выбора файла.">
</label>

<script>
var count = 0;

function addInput() {
    if (count < 4) {
        var input = document.createElement("input");
        input.setAttribute("type", "text");
        input.setAttribute("placeholder", "Введите вариант голосования");
        input.setAttribute("required", true);
        input.setAttribute("class", "form_input");
        input.style = "margin:20px 0 0 0";

        var label = document.getElementById("myLabel");
        var img = label.querySelector('img');
        label.insertBefore(input, img);
        if(count == 3){
            var img = document.getElementById("myimg");
                img.style.display = "none";
        }
        count++;
    }
}

document.getElementById("myLabel").addEventListener("click", function(e){
    e.preventDefault();
    addInput();
});

</script>

            <div class="conveniences_list">
                <div>
                    <span>Начало:</span>
                        <input type="date" required>
                </div>
                <div>
                    <span>Конец:</span>
                        <input type="date" required>
                </div>
            </div>
            
                <button class="form_button events__button">Создать голосование</button>

        </form>
    </main>
    <!-- !MAIN end -->

    <!-- !FOOTER -->
    <?php
    require_once('../pages/footer.php');
    ?>
    <!-- !FOOTER end-->
    <!-- <script src="../js/script_contacts.js"></script> -->

</body>

</html>