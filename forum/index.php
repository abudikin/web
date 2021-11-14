
<?php 
include_once("connect.php");
if(!mysqli_ping($connect))
    die("Ошибка соединения с базой данных");
?>
<form action="index.php" method="POST">
   Напишите имя: <input name="name">
   msg: <input name="msg">
   title: <input name="title">
<input type="submit" name="sub" value="подтвердить">
</form>
<?php
if(isset($_POST["name"]) && isset($_POST["title"]) && isset($_POST["msg"]))
{
    $name=$_POST["name"];
    $msg=$_POST["msg"];
    $title=$_POST["title"];
    $sql1="INSERT INTO message (msg) VALUES ('$msg')";
    $sql1="INSERT INTO message (title) VALUES ('$title')";
    $sql2="INSERT INTO user (name) VALUES ('$name')";
    mysqli_query($connect, $sql1);
    mysqli_query($connect, $sql2);
    $command = "select * from message";
$query = mysqli_query($connect, $command);
if($query)
{
    while($row = mysqli_fetch_array($query))
        {
            echo "<h3>".$row['title']."</h3>";
            echo $row['msg'];
        }
}
else echo "Ошибка выполнения запроса";
mysqli_close($connect);
}  
?>