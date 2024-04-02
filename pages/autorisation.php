<?php
require("../database/database.php");
session_start();
$login = $mysql->real_escape_string($_POST['login']);
$password = $mysql->real_escape_string($_POST['password']);

$result = $mysql->query("SELECT * FROM `users` WHERE password = '$password' AND login = '$login'");

if(!$result){  
}else{
   
   if($result->num_rows == 1){
    $name = $result->fetch_assoc();
    $role = $name['role'];
    $login = $name['login'];
    $_SESSION['login'] = $login;
    $_SESSION['role'] = $role;
    if($role != ""){
       header("Location: personal_account.php");
    }
} else {
    $_SESSION['error'] = '<div class="error_autorisation"> <p>Пользователя с введеными данными не существует</p> </div>';
    header('Location: ../index.php');
} 
}
?>
