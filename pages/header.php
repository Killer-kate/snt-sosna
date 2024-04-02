<header>
    <?php
    function format_vremeni($var){
                            $time = strtotime($var);      
                            # Создаем ассоциативный массив где каждому числу месяца присваем название месяца
                            $month_name = array( 1 => 'января', 2 => 'февраля', 3 => 'марта', 
                                    4 => 'апреля', 5 => 'мая', 6 => 'июня', 
                                    7 => 'июля', 8 => 'августа', 9 => 'сентября', 
                                    10 => 'октября', 11 => 'ноября', 12 => 'декабря' 
                                               );

                            #Получаем название месяца, здесь используется наш созданный массив
                            $month = $month_name[ date( 'n',$time ) ]; 

                            $day   = date( 'j',$time ); # С помощью функции date() получаем число дня
                            $year  = date( 'Y',$time ); # Получаем год
                            
                            
                            $date_ok = "$day $month $year";  # Собираем пазл из переменных
    return $date_ok;
}
    ?>
        <div class="header">
            <div class="container">
                <nav class="menu__nav">
                    <input style="margin: 10px;" type='checkbox' id='responsive-menu'>
                    <label style="font-size: 30px; font-weight: 700;">&nbsp;&nbsp;&nbsp;Меню</label>
                    <?php
                        $url = $_SERVER['REQUEST_URI']; 
                            if (preg_match('/news/i', $url)){$news="active";}else{$news="nav__link";}; 
                            if (preg_match('/forum/i', $url)){$forum="active";}else{$forum="nav__link";}; 
                            if (preg_match('/information/i', $url)){$information="active";}else{$information="nav__link";}; 
                            if (preg_match('/contact/i', $url)){$contact="active";}else{$contact="nav__link";};
                            if (preg_match('/gallery/i', $url)){$gallery="active";}else{$gallery="nav__link";};
                            if (preg_match('/by/i', $url)){$by="active";}else{$by="nav__link";};
                        echo "<ul><li><a class='nav__link $news' href='news.php'>Новости</a></li>
                        <li><a class='nav__link $forum' href='forum.php'>Форум</a></li>
                        <li><a class='nav__link $information' href='information.php'>информация</a></li>
                        <li class='hidden_mobile'><a href='../index.php'><img class='img__logo' width='100' src='../image/logo_header.svg' alt='logo'><p>На главную</p></a></li>
                        <li><a class='nav__link $contact' href='contact.php'>контакты</a></li>
                        <li><a class='nav__link $gallery' href='gallery.php'>галерея</a></li>
                        <li><a class='nav__link $by' href='about.php'>О СНТ</a></li>
                    </ul>";
                    ?>
                </nav>
            </div>
        </div>
                <div class="personal__account">
            <?php
                require('login_form.php');
            ?>
        </div>

    </header>