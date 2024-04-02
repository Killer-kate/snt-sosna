<?php
session_start();
require_once("../database/database.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Update question</title>
<meta charset="utf-8" />
</head>
<body>
    <?php
        if($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["id"]))
            {
                $id = $mysql->real_escape_string($_GET["id"]);
                $sql = "SELECT * FROM faq WHERE id = '$id'";
                    if($result = $mysql->query($sql)){
                        if($result->num_rows > 0){
                            foreach($result as $row){
                                $question = $row["question"];
                                $answer = $row["answer"];
                            }
                        echo "<h3>Ответ на вопрос</h3>
                            <form method='post'>
                            <input type='hidden' name='id' value='$id' />
                            <p>Вопрос:
                            <input type='text' name='question' value='$question' style='width:50%'/></p>
                            <p>Ответ:
                            <input type='text' name='answer' value='$answer'  style='width:50%'/></p>
                            <input type='submit' value='Ответить'>
                            </form>";
                        }
                        else{
                            echo "<div>Вопрос не найден</div>";
                        }
                mysqli_free_result($result);
                    } else{
                        echo "Ошибка: " . $mysql->error;
                            }
                        }
                    elseif (isset($_POST["id"]) && isset($_POST["question"]) && isset($_POST["answer"])) {
                        $id = $mysql->real_escape_string($_POST["id"]);
                        $question = $mysql->real_escape_string($_POST["question"]);
                        $answer = $mysql->real_escape_string($_POST["answer"]);
                        $sql = "UPDATE faq SET question = '$question', answer = '$answer' WHERE id = '$id'";
                        if($result = $mysql->query($sql)){
                            header("Location: /admin/admin.php?action=faq");
                        } else{
                                echo "Ошибка: " . $mysql->error;
                            }
                    }
                    else{
                        echo "Некорректные данные";
                        }
                    mysqli_close($mysql);
?>
</body>
</html>