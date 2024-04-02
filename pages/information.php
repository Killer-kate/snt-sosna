<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100&family=Ruslan+Display&display=swap"
        rel="stylesheet">
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

    <!-- !MAIN -->
    <main>
        <!-- TODO POINT -->
        <div class="block__point">
            <div class="container">
                <h2 class="shadow__max">Информация</h2>
                <div class="point forum__point">
                    <h3 id="but1" class="active__point point__h3">Расписание автобусов</h3>
                    <h3 id="but2" class="point__h3">Полезные контакты</h3>
                    <h3 id="but3" class="point__h3">Документы СНТ</h3>
                </div>
            </div>
        </div>
        <!-- TODO POINT end -->

        <div class="block__information__list">
            <div class="container">
                
                <ul id="info__block2" class="d_none">
                    <h2 class="shadow">Полезные контакты:</h2>
                    <li>
                        <h3>Единая дежурно-диспетчерская служба:</h3>
                    </li>
                    <li class="block__margin no_marker">
                        <p><a href="tel:112"><img src="../image/phone.png" alt="телефон">112</a></p>
                        <p><a href="mailto:shatura_edds@rambler.ru"><img src="../image/globe.png" alt="интернет">shatura_edds@rambler.ru</a></p>
                    </li>

                    <li>
                        <h3>Служба спасения:</h3>
                    </li>
                    <li class="block__margin no_marker">
                        <p><a href="tel:01"><img src="../image/phone.png" alt="телефон">01</a></p>
                        <p><a href="tel:+74964521568"><img src="../image/phone.png" alt="доп. телефон">8(49645)2-15-68</a></p>
                    </li>

                    <li>
                        <h3>Правила набора номера в Единую службу спасения с мобильных телефонов различных компаний (для жителей Москвы и Московской области звонок бесплатный даже если отрицательный баланс):</h3>
                    </li>
                    <li class="block__margin no_marker">
                        <p><a href="tel:001"><img src="../image/phone.png" alt="телефон">Билайн 001</a></p>
                        <p><a href="tel:010"><img src="../image/phone.png" alt="телефон">МТС и Мегафон 010</a></p>
                    </li>

                    <li>
                        <h3>Межмуниципальный отдел МВД России «Шатурский»:</h3>
                    </li>
                    <li class="block__margin no_marker">
                        <p><a href="tel:02"><img src="../image/phone.png" alt="телефон">02</a></p>
                        <p><a href="tel:+74964521717"><img src="../image/phone.png" alt="доп. телефон">8(49645)2-17-17</a></p>
                    </li>

                    <li>
                        <h3>Скорая медицинская помощь:</h3>
                    </li>
                    <li class="block__margin no_marker">
                        <p><a href="tel:03"><img src="../image/phone.png" alt="телефон">03</p>
                        <p><a href="tel:+78005553535"><img src="../image/phone.png" alt="телефон">8(800)555-35-35</a></p>
                    </li>
                   
                    <li>
                        <h3>Аварийная служба газового хозяйства (МосОблГаз в Шатуре):</h3>
                    </li>
                    <li class="block__margin no_marker">
                        <p><a href="tel:04"><img src="../image/phone.png" alt="телефон">04</a></p>
                        <p><a href="tel:+74964523221"><img src="../image/phone.png" alt="доп. телефон">8(496) 452-32-21 абонентская служба</a></p>
                        <p><a href="tel:+74964524511"><img src="../image/phone.png" alt="доп. телефон">8(496) 452-45-11 аварийная</a></p>
                        <p><a href="tel:+74964523905"><img src="../image/phone.png" alt="доп. телефон">8(496) 452-39-05 ремонтная</a></p>
                    </li>
                    
                    <li>
                        <h3>Служба по отлову бродячих животных при ветеринарной клинике Шатуры:</h3>
                       
                    </li>
                    <li class="block__margin no_marker">
                        <p><a href="tel:+74964181335"><img src="../image/phone.png" alt="доп. телефон">+7(496)418-13-35</a></p>
                    </li>
                    
                    <li>
                        <h3>Председатель СНТ "Сосна":</h3>
                       
                    </li>
                    <li class="block__margin no_marker">
                        <p>Ревуцкий Андрей Владимирович</p>
                        <p><a href="tel:+79851813751"><img src="../image/phone.png" alt="доп. телефон">+7(985)181-37-51</a></p>
                        <p><a href="mailto:revun@yandex.ru"><img src="../image/globe.png" alt="интернет">Написать письмо</a></p>
                    </li>
                   
                </ul>



                <div id="info__block1" class="info__list">
                <h2 class="shadow">Расписание автобусов:</h2>
                <div class="table__info__bus">
                    <h2 class="shadow__min"><font size=6>"Шатура - Д. Красное"</font></h2>
                    <h4><font size=3>Автобус №55: Шатура - Дорофеево</font></h4>
                    <h4><font size=3>Автобус №54: Шатура - Орехово-Зуево</font></h4>
                    <div class="header__bus">
                        <h3 class="header__table header__table1">№ автобуса</h3>
                        <h3 class="header__table header__table2">Отправление<br>Автовокзал Шатура</h3>
                        <h3 class="header__table header__table2">Прибытие<br>д. Красное</h3>
                    </div>
                    <div class="background__bus">
                        <p>55</p>
                        <p>6:05</p>
                        <p>6:24</p>
                    </div>

                    <div class="background__bus">
                        <p>54</p>
                        <p>6:05</p>
                        <p>6:24</p>
                    </div>

                    <div class="background__bus">
                        <p>54</p>
                        <p>7:00</p>
                        <p>7:19</p>
                    </div>

                    <div class="background__bus">
                        <p>55</p>
                        <p>9:15</p>
                        <p>9:34</p>
                    </div>

                    <div class="background__bus">
                        <p>54</p>
                        <p>9:35</p>
                        <p>9:54</p>
                    </div>

                    <div class="background__bus">
                        <p>55</p>
                        <p>11:25</p>
                        <p>11:44</p>
                    </div>

                    <div class="background__bus">
                        <p>54</p>
                        <p>12:30</p>
                        <p>12:49</p>
                    </div>

                    <div class="background__bus">
                        <p>54</p>
                        <p>14:30</p>
                        <p>14:49</p>
                    </div>

                    <div class="background__bus">
                        <p>55</p>
                        <p>15:15</p>
                        <p>15:34</p>
                    </div>

                    <div class="background__bus">
                        <p>54</p>
                        <p>16:00</p>
                        <p>16:19</p>
                    </div>

                    <div class="background__bus">
                        <p>55</p>
                        <p>17:45</p>
                        <p>18:04</p>
                    </div>

                    <div class="background__bus">
                        <p>54</p>
                        <p>18:10</p>
                        <p>18:26</p>
                    </div>
                </div>

                <div class="table__info__bus">
                    <h2 class="shadow__min"><font size=6>"Д. Красное - Шатура"</font></h2>
                    <h4><font size=3>Автобус №55: Дорофеево — Шатура</font></h4>
                    <h4><font size=3>Автобус №54: Орехово-Зуево — Шатура</font></h4>
                    <div class="header__bus">
                        <h3 class="header__table header__table1">№ автобуса</h3>
                        <h3 class="header__table header__table2">Отправление<br>д. Красное</h3>
                        <h3 class="header__table header__table2">Прибытие<br>Автовокзал Шатура</h3>
                    </div>
                    <div class="background__bus">
                        <p>55</p>
                        <p>7:05</p>
                        <p>7:25</p>
                    </div>

                    <div class="background__bus">
                        <p>54</p>
                        <p>9:05</p>
                        <p>9:25</p>
                    </div>

                    <div class="background__bus">
                        <p>54</p>
                        <p>10:12</p>
                        <p>10:35</p>
                    </div>

                    <div class="background__bus">
                        <p>55</p>
                        <p>10:20</p>
                        <p>10:40</p>
                    </div>

                    <div class="background__bus">
                        <p>54</p>
                        <p>12:06</p>
                        <p>12:25</p>
                    </div>

                    <div class="background__bus">
                        <p>55</p>
                        <p>12:30</p>
                        <p>12:50</p>
                    </div>

                    <div class="background__bus">
                        <p>54</p>
                        <p>15:25</p>
                        <p>15:45</p>
                    </div>

                    <div class="background__bus">
                        <p>55</p>
                        <p>16:20</p>
                        <p>16:40</p>
                    </div>

                    <div class="background__bus">
                        <p>54</p>
                        <p>17:32</p>
                        <p>17:50</p>
                    </div>

                    <div class="background__bus">
                        <p>54</p>
                        <p>18:35</p>
                        <p>18:55</p>
                    </div>

                    <div class="background__bus">
                        <p>55</p>
                        <p>18:50</p>
                        <p>19:10</p>
                    </div>

                    <div class="background__bus">
                        <p>54</p>
                        <p>20:28</p>
                        <p>20:45</p>
                    </div>
                </div>

                <div class="table__info__bus">
                    <h2 class="shadow__min"><font size=6>"Орехово-Зуево - д. Красное"</font></h2>
                    <h4><font size=3>Автобус №54: Орехово-Зуево — Шатура</font></h4>
                    <div class="header__bus">
                        <h3 class="header__table header__table1">№ автобуса</h3>
                        <h3 class="header__table header__table2">Отправление<br>Орехово-Зуево</h3>
                        <h3 class="header__table header__table2">Прибытие<br>д. Красное</h3>
                    </div>
                    <div class="background__bus">
                        <p>54</p>
                        <p>8:05</p>
                        <p>9:04</p>
                    </div>

                    <div class="background__bus">
                        <p>54</p>
                        <p>9:10</p>
                        <p>10:11</p>
                    </div>

                    <div class="background__bus">
                        <p>54</p>
                        <p>11:05</p>
                        <p>12:05</p>
                    </div>

                    <div class="background__bus">
                        <p>54</p>
                        <p>14:25</p>
                        <p>15:24</p>
                    </div>

                    <div class="background__bus">
                        <p>54</p>
                        <p>16:30</p>
                        <p>17:31</p>
                    </div>

                    <div class="background__bus">
                        <p>54</p>
                        <p>17:35</p>
                        <p>18:34</p>
                    </div>

                    <div class="background__bus">
                        <p>54</p>
                        <p>19:35</p>
                        <p>20:27</p>
                    </div>
                </div>

                <div class="table__info__bus">
                    <h2 class="shadow__min"><font size=6>"д. Красное - Орехово-Зуево"</font></h2>
                    <h4><font size=3>Автобус №54: Орехово-Зуево — Шатура</font></h4>
                    <div class="header__bus">
                        <h3 class="header__table header__table1">№ автобуса</h3>
                        <h3 class="header__table header__table2">Отправление<br>д. Красное</h3>
                        <h3 class="header__table header__table2">Прибытие<br>Орехово-Зуево</h3>
                    </div>
                    <div class="background__bus">
                        <p>54</p>
                        <p>6:25</p>
                        <p>7:25</p>
                    </div>

                    <div class="background__bus">
                        <p>54</p>
                        <p>7:20</p>
                        <p>8:20</p>
                    </div>

                    <div class="background__bus">
                        <p>54</p>
                        <p>9:55</p>
                        <p>10:55</p>
                    </div>

                    <div class="background__bus">
                        <p>54</p>
                        <p>12:50</p>
                        <p>13:50</p>
                    </div>

                    <div class="background__bus">
                        <p>54</p>
                        <p>14:50</p>
                        <p>15:50</p>
                    </div>

                    <div class="background__bus">
                        <p>54</p>
                        <p>16:20</p>
                        <p>17:20</p>
                    </div>

                    <div class="background__bus">
                        <p>54</p>
                        <p>18:27</p>
                        <p>19:20</p>
                    </div>
                </div>

            </div>

            <div id="info__block3" class="d_none">
                <h2 class="shadow">Документы:</h2>
                <div class="point forum__point">
                    <h3 id="but4" class="active__point point__h3">Общие документы</h3>
                    <h3 id="but5" class="point__h3">Отчёты и протоколы</h3>
                </div>
                    <div id="info__block3__1" class="info__list">
                        <p class="dock__text">Для того чтобы скачать документ нажмите на строчку с нужным вам названием документа</p>

                        <div class="block__documents">
                            <p><a href="../docum/ustav.pdf" target="_blank"><img src="../image/download.png" alt="загрузка">Устав Садоводческого некоммерческого товарищества "Сосна" (редакция №2)</a></p>
                        </div>

                        <div class="block__documents">
                            <p><a href="../docum/pravila.pdf" target="_blank"><img src="../image/download.png" alt="загрузка">Правила внутреннего распорядка СНТ "Сосна"</a></p>
                        </div>

                        <div class="block__documents">
                            <p><a href="../docum/vznosy.pdf" target="_blank"><img src="../image/download.png" alt="загрузка">Порядок внесения взносов</a></p>
                        </div>

                        <div class="block__documents">
                            <p><a href="../docum/doverennost.pdf" target="_blank"><img src="../image/download.png" alt="загрузка">Доверенность к общему собранию</a></p>
                        </div>

                        <div class="block__documents">
                            <p><a href="../docum/217_FZ.pdf" target="_blank"><img src="../image/download.png" alt="загрузка">Федеральный закон №217 (от 29.07.2017)</a></p>
                        </div>

                        <div class="block__documents">
                            <p><a href="../docum/312_FZ.pdf" target="_blank"><img src="../image/download.png" alt="загрузка">Федеральный закон №312 (от 14.06.2022)</a></p>
                        </div>
                    </div>
                <div id="info__block3__2" class="d_none">
                    <!--p class="dock__text">Для того чтобы скачать документ нажмите на строчку с нужным вам названием документа</p-->
                    <p class="dock__text">Документов пока не добавлено</p>
                </div>

            </div>
            </div>
        </div>

    </main>
    <!-- !MAIN end -->

    <!-- !FOOTER -->
<?php
    require_once('footer.php');
     ?>
    <!-- !FOOTER end-->

    <script type="text/javascript" src="../js/script.js"></script>
</body>

</html>