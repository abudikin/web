<?php 
$list = array();
if(isset($_COOKIE["pay"]))
{
     $item = $_COOKIE['pay'];
     $list[$i]=$item;
     $i=$i+1;
}
echo "Вы заказали:";
	for ($j=0; $j <count($list) ; $j++) { 
		echo "$list[$j]<br>";
	}
?>