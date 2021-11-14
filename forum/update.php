
<?php
include_once("connect.php");
if(isset($_POST["name"]))
{
    $name=$_POST["name"];
    $msg=$_POST["msg"];
    $title=$_POST["title"];
    $sql1="INSERT INTO message ('msg','title') VALUES ('$msg', '$title')";
    $sql2="INSERT INTO user ('name') VALUES ('$name')";
    mysqli_query($connect, $sql1);
    mysqli_query($connect, $sql2);
    
?>