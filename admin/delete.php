<?php
session_start();
require_once("../database/database.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Delete question</title>
<meta charset="utf-8" />
</head>
<body>
    <?php
        if($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["id"]))
            {
                        $id = $mysql->real_escape_string($_GET["id"]);
                        //$question = $mysql->real_escape_string($_POST["question"]);
                        //$answer = $mysql->real_escape_string($_POST["answer"]);
                        $sql = "DELETE FROM faq WHERE id = '$id'";
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