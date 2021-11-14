<?php
header('Content-Type: text/html; charset=utf-8');
echo "<h1>Лаба 4</h1><br> Задание 2.<br>";
$fl_str = fopen("Text.txt", "rt") or die('Невозможно открыть файл'); 
echo  fread($fl_str, filesize("Text.txt")); 
//fclose($fl_str);

echo "<br><br>задание 3.<br>";
$farr = file("Text.txt");
$count = count($farr);
$string=file_get_contents("Text.txt");
$countw=preg_match_all('/([^\.\!\?]+[\.\?\!]*)/',$string)-1;

echo "Количество строк: $count<br>";
echo "Количество предложений:$countw <br>";
fclose($fl_str);

echo "<br> задание 4<br>";
$str=fopen("Text.txt", "r+t");
$n = 1;
$arr1 =$junk =array();
while(!feof($str))
{
    if($n%2!=0)
        $junk[] = fgets($str);
    else
    	$arr1[] = fgets($str);
    $n++;
}
for ($i=0; $i < count($arr1) ; $i++) { 
	echo "$arr1[$i]";
}

echo "<br><br> Задание 5<br>";
$pattern='/PHP/';
$repl= 'PHP (серверный язык программирования)';

$pos=preg_replace($pattern, $repl, $string,1);
echo "$pos<br>";
//fwrite($str, $pos);
fclose($str);
?>