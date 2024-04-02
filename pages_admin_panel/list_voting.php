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
        <h2>Список голосований</h2>
    </div>
    <div class="list_contact_edit">
        
            <?php
            $result = $mysql->query("SELECT * FROM `voting`");
            while ($data = mysqli_fetch_array($result)) {
            ?>
            <div class="list_data">
                <p><?=$data[1]?></p>
                <p>Дата начала голосования:<br>
                <span><?=$data[8]?></span></p>
                <p>Дата конца голосования:<br>
                <span><?=$data[9]?></span></p>
                <div class="links1">
                <a class="link_edit"><img src="../image/eye.png" alt="просмотр"></a>
                </div>
                
            </div>
            <?php
            } ?>
        
    </div>
    
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