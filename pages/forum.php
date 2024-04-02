<?php
session_start();
require_once("../database/database.php");

### <!--функция генерирования капчи и запись её в СЕССИЮ-->

function captcha()
{
 $chars = 'abdefhknrstyzABDEFHKNQRSTYZ23456789';
$generate_string = '';
$length = rand(5, 6);

for ($x = 0; $x < $length; $x++) {
    $i = rand(0, 34);
    $generate_string .= $chars[$i];
 }
return $generate_string;
 }
$_SESSION['captcha'] = captcha();


?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>Сайт СНТ "Сосна"</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/media.css" type="text/css">
    <link rel="stylesheet" href="../style/media_login_form.css" type="text/css">
    <script type="text/javascript" src="../js/jquery.js"></script>
    
<!--скрипт для отображения вопрос-ответ в виде faq со сдвигом блоков-->
<script type="text/javascript"> 
    $(document).ready(function(){
	   $(".question").click(function(){
		  $(this).next().slideToggle();
	       }, function(){
		  $(this).next().slideToggle();
	       });
    });
</script>
    <style type="text/css">
.question{
	cursor: pointer;
	text-decoration: underline;
	background-color: #a3ae36;
	border: 1px solid #888;
    border-radius: 20px 20px 20px 20px;
	margin-top: 5px;
	padding-left: 10px;
    padding-top: 20px;
}
 
.answer{
	border: 1px solid #ccc;
    border-radius: 20px 20px 20px 20px;
	padding: 10px;
	margin-bottom: 10px;
	display: none;
}
    *,
    *::before,
    *::after {
      box-sizing: border-box;
    }
        
   

    label {
      display: block;
      margin-bottom: 0.5rem;
    }

    input[type="text"] {
      display: block;
      margin:0 auto;
      width: 90%;
      padding: .375rem .75rem;
        margin-bottom: 1rem;
      font-size: 2rem;
      font-weight: 400;
      line-height: 1.5;
      color: #212529;
      background-color: #fff;
      background-clip: padding-box;
      border: 1px solid #ced4da;
      appearance: none;
      border-radius: 1rem;
      transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }
        
        input[type="submit"] {
      display: block;
      margin:0 auto;
      width: 90%;
      padding: .375rem .75rem;
      font-size: 2rem;
      font-weight: 400;
      line-height: 1.5;
      border: 1px solid #ced4da;
      background-color: #FFD225;
      appearance: none;
      border-radius: 1rem;
      transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }

    input[type="text"]:focus {
      color: #212529;
      background-color: #fff;
      border-color: #86b7fe;
      outline: 0;
      box-shadow: 0 0 0 0.25rem rgb(13 110 253 / 25%);
    }

    input.is-invalid {
      border-color: #dc3545;
      padding-right: calc(1.5em + .75rem);
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
      background-repeat: no-repeat;
      background-position: right calc(.375em + .1875rem) center;
      background-size: calc(.75em + .375rem) calc(.75em + .375rem);
      background-color: #fff;
    }

    .invalid-feedback {
      display: none;
      width: 100%;
      margin-top: .25rem;
      font-size: .875em;
      color: #dc3545;
    }

    .is-invalid~.invalid-feedback {
      display: block;
    }
</style>
</head>
<body>
     <!-- !HEADER -->
<?php
    require_once('header.php');
     ?>
    <!-- !HEADER end -->
    <main>
        
        <!-- TODO POINT -->
                <div class="block__point">
            <div class="container">
                <h2 class="shadow__max">Форум</h2>
                <div class="point forum__point">
                    <h3 id="but1f" class="active__point point__h3">Часто задаваемые вопросы</h3>
                    <h3 id="but2f" class="point__h3">Предложения и жалобы</h3>
                    <h3 id="but4f" class="point__h3">Доска объявлений</h3>
                    <h3 id="but3f" class="point__h3">Голосования пользователей</h3>
                </div>
            </div>
        </div>
        
       
        <!-- TODO POINT end -->

        <section class="events">
            <div class="container">
                <div class="block__applications" id="info__block1f">
                    <h2 class="shadow">Часто задаваемые вопросы</h2>
                    <?php
                        $arr = mysqli_query($mysql, "SELECT * FROM `faq` WHERE `filter` = 'faq';");
                       while($row = mysqli_fetch_assoc($arr)){
	               echo ' <div class="question elem__aplications"><h3>' .$row['question']. '</h3></div>
	                   <div class="answer elem__aplications"><span>' .$row['answer']. '</span></div>';
            }
                        ?>
               
                    
                    <div>
                            <!--Форма Задавания вопроса-->
                    
        <div style="text-align:center; width: 100%; border: 2px solid #A3AE36; margin-top: 1rem; border-radius: 30px; background-color: #A3AE36;">
            <div class="create__news">
                <h2><font size=6>Задать вопрос председателю:</font></h2>
                
            <table style="width: 100%;text-align:center;"><tr><td id="logo_form" align="center" style="width:30%"><img style="align:center;width:80%;" src="../image/logo_footer.png" alt="альтернативный текст" /></td>
                <td>
                <form action="create.php" method="post">
                    <label style="color:black;">Введите свой вопрос:</label>
                    <p><textarea cols="25" rows="3" type="text" name="question" style="color:black; resize: none; width: 90%;"></textarea></p>
                    <label style="color:black;">Введите код:<b> <?php echo $_SESSION['captcha']; ?></b> в поле ниже</label>
                    <br>
    <input class="create__input1" type="text" required='required' title="CAPTCHA" name="captcha" placeholder="Введите код" style="color:#A3AE36;" />
                   <input style="margin-bottom: 0.5em;" type="submit" value="Отправить"/>
                </form>
                </td></tr></table>
            </div>
        </div>
                        </div>
                   
                </div>
                <div class="block__applications d_none" id="info__block2f">
<!--Форма Задавания вопроса-->
                    <h2 class="shadow">Жалобы и предложения:</h2>
                    <?php
                        $arr = mysqli_query($mysql, "SELECT * FROM `faq` WHERE `filter` = 'offer';");
                       while($row = mysqli_fetch_assoc($arr)){
	               echo ' <div class="question elem__aplications"><h3>' .$row['question']. '</h3></div>
	                   <div class="answer elem__aplications"><span>' .$row['answer']. '</span></div>';
            }
                        ?>
                    
        <div style="text-align:center; width: 100%; border: 2px solid #A3AE36; margin-top: 1rem; border-radius: 30px; background-color: #A3AE36;">
            <div class="create__news">
                <h2><font size=6>Жалобы и предложения:</font></h2>
                
            <table style="width: 100%;text-align:center;"><tr><td id="logo_form" align="center" style="width:30%"><img style="align:center;width:80%;" src="../image/logo_footer.png" alt="альтернативный текст" /></td>
                <td>
                <form action="create_offer.php" method="post">
                    <label style="color:black;">Введите свою жалобу или предложение:</label>
                    <p><textarea cols="25" rows="3" type="text" name="question" style="color:black; resize: none; width: 90%;"></textarea></p>
                    <label style="color:black;">Введите код:<b> <?php echo $_SESSION['captcha']; ?></b> в поле ниже</label>
                    <br>
    <input class="create__input1" type="text" required='required' title="CAPTCHA" name="captcha" placeholder="Введите код" style="color:#A3AE36;" />
                   <input style="margin-bottom: 0.5em;" type="submit" value="Отправить"/>
                </form>
                </td></tr></table>
            </div>
        </div>
                </div>                
                <div class="info__list d_none" id="info__block3f">
                     <?php
                        require('develop_page.php');
                    ?>
                </div>
                <div class="events__cards d_none" id="info__block4f">
                     
                    <div class="events__cards">
                       
                    <?php
                        $arr = mysqli_query($mysql, "SELECT * FROM `ad` ORDER BY `number` DESC limit 15");
                        $arr = mysqli_fetch_all($arr);
                        foreach ($arr as &$value) {
                        ?>

                            <div class="card">
                                <img src="../<?= $value[3] ?>" alt="фото">
                                <h3><?= $value[1] ?></h3>
                                <div class="truncate">
                                    <p><?= $value[2] ?></p>
                                </div>
                                <span><?php $var=$value[4]; format_vremeni($var); echo format_vremeni($var)?></span>
                            </div>
                        <?php
                        }
                        ?>
                        <h3>По вопросам публикации объявлений - обращаться в техническую поддержку раздела "Контакты".</h3>
                </div>
                    
                </div>
                </div>
                    </section>
        
    </main>

<!-- !FOOTER -->
<?php
    require_once('footer.php');
     ?>
<!-- !FOOTER end-->
        <script type="text/javascript" src="../js/script_forum.js"></script>
</body>
</html>