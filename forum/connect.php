<?php
$host = "localhost";
$user = "root";
$passw = "";
$db = "my_forum";

$connect = mysqli_connect("localhost", "root", "", "my_forum") OR die ("Ошибка подключения к базе данных." . mysqli_connect_error());
?>
