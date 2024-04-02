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
<!--           
            <div class='footer__text'>
                <a href='news.php' class='footer__point $news'>Новости</a>
                <div class='footer__content'>
                    <a href='#'>Информация</a>
                    <a href='#'>Мероприятия</a>
                    <a href='#'>Должники</a>
                </div>
            </div>
            <div class='footer__text'>
                <a href='forum.php' class='footer__point $forum'>Форум</a>
                <div class='footer__content'>
                    <a href='#'>Вопросы</a>
                    <a href='#'>Голосования</a>
                    <a href='#'>Остальные темы</a>
                </div>
            </div>
            <div class='footer__text'>
                <a href='information.php' class='footer__point $information'>Информация</a>
                <div class='footer__content'>
                    <a href='#'>Полезные контакты</a>
                    <a href='#'>Расписание автобусов</a>
                    <a href='#'>Документы СНТ</a>
                </div>
            </div>
            <div><a href='../index.php'><img src='../image/logo_g.png' alt='логотип'></a></div>
            <div class='footer__text'>
                <a href='contact.php' class='footer__point $contact'>Контакты</a>
                <div class='footer__content'>
                    <a href='#'>Карта</a>
                    <a href='#'>Управление</a>
                    <a href='#'>Техподдержка</a>
                </div>
            </div>
            <div class='footer__text'>
                <a href='gallery.php' class='footer__point $gallery'>Галерея</a>
            </div>
            <div class='footer__text'>
                <a href='by.php' class='footer__point $by'>Участки на продажу</a>
                <div class='footer__content'>
                    <a href='#'>Личные</a><br>
                    <a href='#'>Бесхозные</a>
                </div>
            </div>  
?-->
        <div class='footer__text'>
            <center>
                <div><a href='../index.php'><img src='../image/logo_footer.svg' alt='логотип' class='logo__footer'></a></div>
                <div><h5>Copyright © СНТ \"Сосна\" 2024.</h5></div>
            </center>
        </div>
                
                
                ";
            ?>
        </div>
    </div>
</footer>