<?php
$mysql = new mysqli("localhost", "root", "", "data");

if(!$mysql){
    die('Ошибка подключения к бд');
}
?>