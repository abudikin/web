<?php 
session_start();
if(isset($_POST["name"]) && isset($_POST["food"]))
{
    $_SESSION["name"] = $_POST["name"];
    $_SESSION["food"] = $_POST["food"];
    header('Location: list_session.php');
}
?>

<form action="index.php" method="POST">
   Напишите имя: <input name="name">
   <select  name="food" size="1">
	   <option selected="selected">Каша</option>
	   <option>Яичница</option>
	   <option>Бутерброд</option>
	</select>
   <input type="submit" name="sub" value="подтвердить">
</form>

