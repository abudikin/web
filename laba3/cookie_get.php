<?php
if(isset($_COOKIE["user"]))
{
     $user = $_COOKIE['user'];
     echo "<h2>Просмотр cookie-записи</h2>";
     echo "<h3>Добро пожаловать, $user!</h3>";
}
?>
