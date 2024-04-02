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
                <h2 class="shadow__max">Контакты</h2>
                <div class="point forum__point">
                    <h3 id="but1c" class="active__point point__h3">Карта СНТ</h3>
                    <h3 id="but2c" class="point__h3">Правление СНТ</h3>
                    <h3 id="but3c" class="point__h3">Техподдержка</h3>
                    <h3 id="but4c" class="point__h3">Реквизиты</h3>
                </div>
            </div>
        </div>
        <!-- TODO POINT end -->

        <div clss="block__contact__list">

            <div id="info__block1c">
                <h2 class="shadow">Карта СНТ</h2>
                <div class="maps__info">
                    
                            <div>                                
                                <h3>СНТ Сосна</h3>
                        <p>СНТ Сосна, Орехово-Зуевский городской округ, Московская область</p>
                                <!--p>Координаты: 55.613773, 39.389445</p--></div>
                </div>
                <div class="maps__info">
                    <!--script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aaae8ca72f9dbf40732619429582d6b6a0f0f2fe88857672192185ae500282937&amp;width=586&amp;height=450&amp;lang=ru_RU&amp;scroll=true"></script-->
                    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aaae8ca72f9dbf40732619429582d6b6a0f0f2fe88857672192185ae500282937&amp;source=constructor" width="100%" height="460" frameborder="0"></iframe>
                </div>
                

                </div>
            </div>

   
            <div class="container">
                <ul id="info__block2c" class="info__list d_none contact__info">
                    <h2 class="shadow">Правление СНТ</h2>
                    
                    
                     <div class="container">
                         <li class="block__h3__person">
                             <h3 class="shadow">Председатель:</h3>
                         </li>
  <div class="posts-list">
      <article class="post">
        <div class="post-image">
            <?php
                    $arr = mysqli_query($mysql, "SELECT * FROM `person` WHERE `status` = 'Председатель'");
                    $arr = mysqli_fetch_all($arr);
                    foreach ($arr as &$value) {
                    ?>

                        <li class="block__margin block__info__person">
                            <img class="image__person" src="<?= $value[4] ?>" alt="фотография председателя"></li>
          </div>

    </article>
  </div> <!-- конец div class="posts-list"-->
  
  
  
  <aside>
      <div class="widget">
    <div class="block__text__person">
                                <h4><?= $value[1] ?></h4>
                                <div>
                                    <p><img src="../image/phone.png" alt="телефон"><?= $value[2] ?></p></div>
        <div>
                                    <p><img src="../image/mail.png" alt="письмо"><?= $value[3] ?></p>
                                </div>
                            </div>
                       
                    <?php
                    }
                    ?>
      </div>
</aside>

</div> <!-- конец div class="container"-->
                    
                    <div class="container">
                         <li class="block__h3__person">
                             <h3 class="shadow">Члены правления:</h3>
                         </li>
                    </div>
                    
                    
                    <?php
                    $arr = mysqli_query($mysql, "SELECT * FROM `person` WHERE `status` = 'Член правления'");
                    $arr = mysqli_fetch_all($arr);
                    foreach ($arr as &$value) {
                        if(empty ($value[4])){$value[4]='../image/no_foto.png';};
                        if(empty ($value[3])){$value[3]=' Нет';};
                    ?>
<div class="container">
    <div class="posts-list">
      <article class="post">
        <div class="post-image">
                        <li class="block__margin block__info__person">
          
                            <img class="image__person" src="<?= $value[4] ?>" alt="фотография члена правления">
            </li>
          </div>
        </article>
    </div>
    <aside>
                            <div class="block__text__person">
                                <h4><?= $value[1] ?></h4>
                                <!--div>
                                    <p><img src="../image/phone.png" alt="телефон"><?= $value[2] ?></p></div>
                                <div>
                                    <p><img src="../image/mail.png" alt="письмо"><?= $value[3] ?></p>
                                </div-->
                            </div>
    </aside>
                    

                    </div>              
         <?php
                    }
                    ?>
                    
                    
                    
                    <div class="container">
                         <li class="block__h3__person">
                             <h3 class="shadow">Сторож товарищества:</h3>
                         </li>
  <div class="posts-list">
      <article class="post">
        <div class="post-image">
            <?php
                    $arr = mysqli_query($mysql, "SELECT * FROM `person` WHERE `status` = 'Сторож'");
                    $arr = mysqli_fetch_all($arr);
                    foreach ($arr as &$value) {
                        if(empty ($value[4])){$value[4]='../image/no_foto.png';};
                        if(empty ($value[3])){$value[3]=' Нет';};
                    ?>

                        <li class="block__margin block__info__person">
                            <img class="image__person" src="<?= $value[4] ?>" alt="фотография сторожа"></li>
          </div>

    </article>
  </div> <!-- конец div class="posts-list"-->
  
  
  
  <aside>
      <div class="widget">
    <div class="block__text__person">
                                <h4><?= $value[1] ?></h4>
                                <div>
                                    <p><img src="../image/phone.png" alt="телефон"><?= $value[2] ?></p></div>
        <div>
                                    <p><img src="../image/mail.png" alt="письмо"><?= $value[3] ?></p>
                                </div>
                            </div>
                       
                    <?php
                    }
                    ?>
      </div>
</aside>

</div> <!-- конец div class="container"-->
                    <div class="container">
                         <li class="block__h3__person">
                             <h3 class="shadow">Охрана:</h3>
                         </li>
  <div class="posts-list">
      <article class="post">
        <div class="post-image">
            <?php
                    $arr = mysqli_query($mysql, "SELECT * FROM `person` WHERE `status` = 'Охрана'");
                    $arr = mysqli_fetch_all($arr);
                    foreach ($arr as &$value) {
                        if(empty ($value[4])){$value[4]='../image/no_foto.png';};
                        if(empty ($value[3])){$value[3]=' Нет';};
                    ?>

                        <li class="block__margin block__info__person">
                            <img class="image__person" src="<?= $value[4] ?>" alt="фотография охранника"></li>
          </div>

    </article>
  </div> <!-- конец div class="posts-list"-->
  
  
  
  <aside>
      <div class="widget">
    <div class="block__text__person">
                                <h4><?= $value[1] ?></h4>
                                <div>
                                    <p><img src="../image/phone.png" alt="телефон"><?= $value[2] ?></p></div>
        <div>
                                    <p><img src="../image/mail.png" alt="письмо"><?= $value[3] ?></p>
                                </div>
                            </div>
                       
                    <?php
                    }
                    ?>
      </div>
</aside>

</div> <!-- конец div class="container"-->
                    <div class="container">
                         <li class="block__h3__person">
                             <h3 class="shadow">Электрик:</h3>
                         </li>
  <div class="posts-list">
      <article class="post">
        <div class="post-image">
            <?php
                    $arr = mysqli_query($mysql, "SELECT * FROM `person` WHERE `status` = 'Электрик'");
                    $arr = mysqli_fetch_all($arr);
                    foreach ($arr as &$value) {
                        if(empty ($value[4])){$value[4]='../image/no_foto.png';};
                        if(empty ($value[3])){$value[3]=' Нет';};
                    ?>

                        <li class="block__margin block__info__person">
                            <img class="image__person" src="<?= $value[4] ?>" alt="фотография электрика"></li>
          </div>

    </article>
  </div> <!-- конец div class="posts-list"-->
  
  
  
  <aside>
      <div class="widget">
    <div class="block__text__person">
                                <h4><?= $value[1] ?></h4>
                                <div>
                                    <p><img src="../image/phone.png" alt="телефон"><?= $value[2] ?></p></div>
        <div>
                                    <p><img src="../image/mail.png" alt="письмо"><?= $value[3] ?></p>
                                </div>
                            </div>
                       
                    <?php
                    }
                    ?>
      </div>
</aside>

</div> <!-- конец div class="container"-->
                    <div class="container">
                         <li class="block__h3__person">
                             <h3 class="shadow">Опил аварийных деревьев, кустарников, окос территории:</h3>
                         </li>
  <div class="posts-list">
      <article class="post">
        <div class="post-image">
            <?php
                    $arr = mysqli_query($mysql, "SELECT * FROM `person` WHERE `status` = 'Опил'");
                    $arr = mysqli_fetch_all($arr);
                    foreach ($arr as &$value) {
                        if(empty ($value[4])){$value[4]='../image/no_foto.png';};
                        if(empty ($value[3])){$value[3]=' Нет';};
                    ?>

                        <li class="block__margin block__info__person">
                            <img class="image__person" src="<?= $value[4] ?>" alt="фотография лесоруба"></li>
          </div>

    </article>
  </div> <!-- конец div class="posts-list"-->
  
  
  
  <aside>
      <div class="widget">
    <div class="block__text__person">
                                <h4><?= $value[1] ?></h4>
                                <div>
                                    <p><img src="../image/phone.png" alt="телефон"><?= $value[2] ?></p></div>
        <div>
                                    <p><img src="../image/mail.png" alt="письмо"><?= $value[3] ?></p>
                                </div>
                            </div>
                       
                    <?php
                    }
                    ?>
      </div>
</aside>

</div> <!-- конец div class="container"-->
                    <div class="container">
                         <li class="block__h3__person">
                             <h3 class="shadow">Очистка территории товарищества от снега:</h3>
                         </li>
  <div class="posts-list">
      <article class="post">
        <div class="post-image">
            <?php
                    $arr = mysqli_query($mysql, "SELECT * FROM `person` WHERE `status` = 'Снег'");
                    $arr = mysqli_fetch_all($arr);
                    foreach ($arr as &$value) {
                        if(empty ($value[4])){$value[4]='../image/no_foto.png';};
                        if(empty ($value[3])){$value[3]=' Нет';};
                    ?>

                        <li class="block__margin block__info__person">
                            <img class="image__person" src="<?= $value[4] ?>" alt="фотография уборщика снега"></li>
          </div>

    </article>
  </div> <!-- конец div class="posts-list"-->
  
  
  
  <aside>
      <div class="widget">
    <div class="block__text__person">
                                <h4><?= $value[1] ?></h4>
                                <div>
                                    <p><img src="../image/phone.png" alt="телефон"><?= $value[2] ?></p></div>
        <div>
                                    <p><img src="../image/mail.png" alt="письмо"><?= $value[3] ?></p>
                                </div>
                            </div>
                       
                    <?php
                    }
                    ?>
      </div>
</aside>

</div> <!-- конец div class="container"-->
     
                </ul>

                
                
                
                
                
                
                
                
                
                

                <div id="info__block3c" class="d_none">
                    
                    <!--ul class="info__list contact__info">
                        <li></li>
                        <li>
                            
                            <h3 class="shadow">По вопросам и предложениям развития сайта обращаться:</h3>
                        </li>
                        <li class="block__margin">
                            <p><img src="../image/phone.png" alt="телефон">8(800)555-35-35</p>
                            <p><img src="../image/mail.png" alt="письмо">predsidatel@mail.com</p>
                        </li>
                    </ul-->

                    <!--p class="block__text_help">Ответы:</p-->

                     <div class="container">
                         <h2 class="shadow">Техническая поддержка</h2>
                         <div class="block__h3__person">
                             <h3 class="block__h3__person shadow">По вопросам и предложениям развития сайта обращаться:</h3>
                         </div>
                          <div class="posts-list">
                              <article class="post">
                                <div class="post-image">
                                                <li class="block__margin block__info__person">
                                                    <img class="image__person__square" src="../image/teh1.avif" alt="фотография 1"></li>
                                  </div>

                            </article>
                            </div> <!-- конец div class="posts-list"-->
  <aside>
      <div class="widget">
    <div class="block__text__person">
                                <h4>Екатерина</h4>
                                <div>
                                    <p><img src="../image/phone.png" alt="телефон">+7 (958) 833-89-52</p>
                                </div>
                                <div>
                                    <p><img src="../image/mail.png" alt="письмо">Нет</p>
                                </div>
                            </div>
                       
      </div>
</aside>

</div> <!-- конец div class="container"-->
         <hr>           
                    <div class="container">
                        
                          <div class="posts-list">
                              <article class="post">
                                <div class="post-image">
                                                <li class="block__margin block__info__person">
                                                    <img class="image__person__square" src="../image/teh2.avif" alt="фотография 1"></li>
                                  </div>

                            </article>
                            </div> <!-- конец div class="posts-list"-->
  <aside>
      <div class="widget">
    <div class="block__text__person">
                                <h4>Алексей</h4>
                                <div>
                                    <p><img src="../image/phone.png" alt="телефон">+7 (999) 084-27-05</p>
                                </div>
                                <div>
                                    <p><img src="../image/mail.png" alt="письмо">Нет</p>
                                </div>
                            </div>
                       
      </div>
</aside>

</div> <!-- конец div class="container"-->
         <hr> 
                    
                    <!--div class="block__result">
                        <div class="block__mail">
                            <img src="../image/teh1.png" alt="техподдержка">
                            <div class="block__answer">
                                <div class="block__answer__text">
                                    <h3>Екатерина</h3>
                                </div>
                                <p><img src="../image/phone.png" alt="телефон">+7 (999) 084-27-05</p>
                            <p><img src="../image/mail.png" alt="письмо">нет</p>
                            </div>
                        </div>
                        <hr>
                    </div>

                    <div class="block__result">
                        <div class="block__mail">
                            <img src="../image/teh2.png" alt="техподдержка">
                            <div class="block__answer">
                                <div class="block__answer__text">
                                    <h3>Алексей</h3>
                                </div>
                                <p><img src="../image/phone.png" alt="телефон">+7 (999) 084-27-05</p>
                            <p><img src="../image/mail.png" alt="письмо">нет</p>
                            </div>

                        </div>
                        <hr>
                    </div>

                    <!--div class="answers">

                        <input type="text" class="form__answer__help" placeholder="Ответить...">
                        <img src="../image/ans.png" alt="галочка">
                    </div-->
                </div>
                
                <div id="info__block4c" class="d_none">
                                   <h2 class="shadow">Реквизиты товарищества</h2>
                    
                    
                    <div class="details">
                        
                        <p class="margin-left-top"><font size=5><b>Полное название организации: </b></font><font size=3>САДОВОДЧЕСКОЕ НЕКОММЕРЧЕСКОЕ ТОВАРИЩЕСТВО "СОСНА"</font></p>
                        <p class="margin-left"><font size=5><b>ИНН: </b></font><font size=3>5073004020</font></p>
                        <p class="margin-left"><font size=5><b>КПП: </b></font><font size=3>507301001</font></p>
                        <p class="margin-left"><font size=5><b>ОГРН: </b></font><font size=3>1035011306252</font></p>
                        <p class="margin-left"><font size=5><b>ОКПО: </b></font><font size=3>39855551</font></p>
                        <p class="margin-left"><font size=5><b>Расчетный счет: </b></font>40703810040120000218<font size=3></font></p>
                        <p class="margin-left"><font size=5><b>БИК: </b></font>044525225<font size=3></font></p>
                        <p class="margin-left"><font size=5><b>Адрес: </b></font><font size=3>Московская обл., г. Орехово-Зуево, д. Красное, тер. Сосна, д. 0</font></p>
                        <p class="margin-left-bottom"><font size=5><b>Председатель: </b></font><font size=3>Ревуцкий Андрей Владимирович</font></p>
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
    <script src="../js/script_contacts.js"></script>
</body>

</html>