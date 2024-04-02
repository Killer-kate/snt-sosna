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

        <main>
        <?php
        if ($_SESSION['role'] == "Пользователь") {
            echo '
            <section>
            <div class="container">
                <div class="information__account__user">';
                $login = $_SESSION['login'];
                $arr = mysqli_query($mysql, "SELECT * FROM `users` WHERE `login` = '$login' ");
                $arr = mysqli_fetch_all($arr);
                foreach ($arr as &$value) {
                    echo '
                    <div class="block__1__info">
                        <div class="block__image__user">
                            <div style="width:310px; height:316px; border-radius:25px; background-image:url(../image/gallery/userfoto1.jpg); background-size:cover;"></div>
                            <button>Изменить фото</button>
                            <button class="button2">Выйти из аккаунта</button>
                        </div>

                        <div class="block__information__user">
                            <h2>' .$value[1]. '</h2>
                            <ul>
                                <li>Телефон: <span>' .$value[5]. '</span></li>
                                <li>Почта: <span>' .$value[6]. '</span></li>
                                <li>Кадастр: <span>нет</span></li>
                                <li>Номер уч. <span>' . $value[7] . '</span></li>
                                <li>Долг чл. в. <span>нет</span></li>
                                <li>Долг цел.в. <span>нет</span></li>
                                <li>Документы: <span>нет</span></li>
                            </ul>
                        </div>
                    </div>
                    ';
                    
                        }
                    
                        echo '
                    <div class="block__2__info">
                        <h2>Прочее</h2>
                        <ul>
                            <li>Заявка на продажу <span>не расмотренно \ расматривается \ одобрено \ не одобрено</span></li>
                            <li>ответы на темы <span>0</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            
        </section>
            ';
        } else if ($_SESSION['role'] == "Администратор") {
            echo '
            <h2 class="admin_block_h2">Добро пожаловать в админ панель<br>
            <p>Администратор: '.$_SESSION['login'].'</p></h2>

            <div class="admin_panel">
                <div class="block_admin_panel">
                    <h3>Полезные контакты</h3>
                    <a href="../pages_admin_panel/Create_contact.php"><button>Создать контакт</button></a>
                    <a href="../pages_admin_panel/Edit_contact.php"><button>Изменить контакт</button></a>
                </div>
                <div class="block_admin_panel">
                    <h3>Новости</h3>
                    <a href="../pages_admin_panel/Create_news.php"><button>Создать новость</button></a>
                    <a href="../pages_admin_panel/Edit_news.php"><button>Изменить новость</button></a>
                </div>
                <div class="block_admin_panel">
                    <h3>Документы</h3>
                    <a href="../pages_admin_panel/Create_docs.php"><button>Создать документ</button></a>
                    <a href="../pages_admin_panel/Edit_docs.php"><button>Изменить документ</button></a>
                </div>
                <div class="block_admin_panel">
                    <h3>Пользователи</h3>
                    <a href="../pages_admin_panel/Create_user.php"><button>Создать пользователя</button></a>
                    <a href="../pages_admin_panel/Edit_user.php"><button>Изменить пользователя</button></a>
                    
                </div>
                <div class="block_admin_panel">
                    <h3>Участки на продажу</h3>
                    <a href="../pages_admin_panel/Create_region.php"><button>Создать участок</button></a>
                    <a href="../pages_admin_panel/Edit_region.php"><button>Изменить участок</button></a>
                    <a href="../pages_admin_panel/list_region.php"><button>Список желающих продать участок</button></a>
                </div>
                <div class="block_admin_panel">
                    <h3>Голосования</h3>
                    <a href="../pages_admin_panel/Create_voting.php"><button>Создать голосование</button></a>
                    <a href="../pages_admin_panel/Edit_voting.php"><button>Изменить голосование</button></a>
                    <a href="../pages_admin_panel/list_voting.php"><button>Результаты голосования</button></a>
                </div>
                <div class="block_admin_panel">
                    <h3>Галлерея</h3>
                    <a href="../pages_admin_panel/Create_album.php"><button>Создать альбом</button>
                    <a href="../pages_admin_panel/Edit_album.php"><button>Изменить альбом</button></a>
                </div>
                <div class="block_admin_panel">
                    <h3>Долги</h3>
                    <button>Редактировать долг</button>
                </div>
            </div>
            <button class="admin_panel_button2">Выйти из админ панели</button>
            ';
        }
    ?>
        </main>
</body>
</html>