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
        <h2>Конструктор альбома</h2>
    </div>
    <form class="form_contact_new">
        <span>Название альбома:</span>
        <input class="form_input" type="text" placeholder="Введите название для новости" required>

        <label id="file-label">
    <div>
        <input id="uploadfileinp" type="file" multiple hidden>
        <div id="files-list" class="file_name"></div>
    </div>
    <img id="myimg" class="file_load_img" src="../image/icons/plus.png" alt="Нажмите для выбора файла.">
        <button class="form_button events__button">Создать альбом</button>
        
</label>

<script>
    const uploadedFileNames = new Set();

    document.getElementById('uploadfileinp').addEventListener('change', function() {
        Array.from(this.files).forEach(file => {
            if (uploadedFileNames.has(file.name)) {
                alert('Файл с таким именем уже прикреплен.');
                return;
            }

            uploadedFileNames.add(file.name);
            let div = document.createElement('div');
            let span = document.createElement('span');
            // Проверяем, содержит ли имя файла уже расширение
            if (file.name.split('.').pop() === file.type.split('/')[1]) {
                span.textContent = file.name; // Если да, оставляем имя без изменений
            } else {
                span.textContent = file.name + '.' + file.type.split('/')[1]; // Если нет, добавляем формат файла
            }
            span.addEventListener('click', function(event) {
                event.preventDefault();
            });
            div.appendChild(span);
            let img = document.createElement('img');
            img.src = "../image/icons/x.png";
            img.style.display = 'inline';
            img.alt = "Нажмите для удаления файла.";
            img.addEventListener('click', function(event) {
                document.getElementById('uploadfileinp').value = '';
                span.textContent = '';
                img.style.display = 'none';
                div.parentNode.removeChild(div);
                uploadedFileNames.delete(file.name);
                event.preventDefault();
            });
            div.appendChild(img);
            document.getElementById('files-list').appendChild(div);
        });
    });
</script>

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