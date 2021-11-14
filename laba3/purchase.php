<?php
     session_start();
     if (!isset($_SESSION['counter'])) {
          $_SESSION['counter'] = 1;
     } else {
          $_SESSION['counter'] = $_SESSION['counter'] + 1;
     }


     echo 'Вы обновили эту страницу '.$_SESSION['counter'].' раз!';
    if(isset($_POST['pay']))
{
 setcookie('pay', $_POST['pay'], time()+180); //сохр. на 3 мин
 header('Location: basket.php');
}
?>
<a href="/purchase.php">
     <input type="submit" value="Обновить">
</a>
<a href="/cookie_get.php">
     <input type="submit" value="назад">
</a>

<form action="purchase.php" method="POST" name="shop">
<fieldset>
  <legend>Продукты</legend>
  Продукт: <input type="text" name="pay"><br>
            <input type="submit" value="Готово">
</fieldset>
</form>