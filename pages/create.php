<?php
session_start();
require_once("../database/database.php");

    $captcha = $_POST['captcha'];
    if($captcha!== $_SESSION['captcha']){header("Location: http://snt-sosna.ru/pages/forum.php");
exit( );}
else {
    if (isset($_POST["question"]) && !empty($_POST['question'])) {
            if($mysql->connect_error){
                die("Ошибка: " . $mysql->connect_error);
            }
        $text = $mysql->real_escape_string($_POST["question"]);
        $sql = "INSERT INTO faq (question, filter) VALUES ('$text','faq')";
            if($mysql->query($sql)){
                echo "Вопрос успешно добавлен";
/*отправляем напоминалку на почту*    
  $subject = 'Robot from '.$_SERVER['SERVER_NAME'];
  $msg = 'Появился новый контент ЧаВо!<br>';
$msg .= $text;
$headers= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$to = "boss@snt-sosna.ru";
  mail ($to, $subject, $msg, $headers);
/*********************************/
                $token = "6746100517:AAG9kKSsxsd-KjnvP7cgsOD74zpzhGNK9oU";
                        $chat_id = "866672491";
                        $chat_id1 = "654220146";
                    #Получаем ip адрес отправителя
                        $txt = "<b>Добавлен новый вопрос в разделе ЧаВо:</b> ".$text."%0A"; 
  }

#Отправляем сообщение
$fp=fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
$fp=fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id1}&parse_mode=html&text={$txt}","r");
    header("Location: http://snt-sosna.ru/pages/forum.php");
exit( );
#Возвращаем true
return true;
            } else{
                echo "Ошибка: " . $mysql->error;
                }
        mysqli_close($mysql);
    }

?>


