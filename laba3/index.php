<?php   
if(isset($_POST['user']))
{
 //setcookie('user', $_POST['user']);//уничт. после закр.браузера
 setcookie('user', $_POST['user'], time()+180); //сохр. на 3 мин
 header('Location: cookie_get.php');
}
?>
<form action="index.php" method="POST" name="entry">
<fieldset>
  <legend>Авторизация</legend>
  Имя: <input type="text" name="user"><br>
            <input type="submit" value="Готово">
</fieldset>
</form>
