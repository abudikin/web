<?php
session_start();
   
if(isset($_SESSION["name"]) && isset($_SESSION["food"]))
{
    $name=$_SESSION["name"];
    $food=$_SESSION["food"];
    echo "<h2>$name заказал еду $food</h2>";

}
