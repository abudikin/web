<?php
    $n=21;
   
    
    if($a%3==0)
    {   
        echo "Задание 1.<br>";
        echo "Дано двузначное число. Определить, кратна ли трем сумма его цифр. <br>";
        echo "задаются числа $n<br>";
        echo "число $n делится на 3 <br>";
    }
    else
    {   
        echo "Задание 1.<br>";
        echo "Дано двузначное число. Определить, кратна ли трем сумма его цифр. <br>";
        echo "задаются числа $n<br>";
        echo "число $n  не делится на 3 <br>";
    }
    //начало задания 2
    $k=121;
    $kva=pow($k,2);
    $a1=intdiv($k,100);
    $b1=(intdiv($k,10))%10;
    $c1=$k%10;
    $sumkub=(pow($a1,3)+pow($b1,3)+pow($c1,3));
    if($kva==$sumkub)
    {   
        echo "<br>Задание 2.<br>";
        echo "Дано трехзначное число. Определить, равен ли квадрат этого числа сумме кубов его цифр.<br>";
        echo "задаются числа $k<br>";
        echo "квадрат числа $k равен $kva и сумма кубов и его цифр равна $sumkub и они равны<br>";
    }
    else
    {   
        echo "<br>Задание 2.<br>";
        echo "Дано трехзначное число. Определить, равен ли квадрат этого числа сумме кубов его цифр.<br>";
        echo "задаются числа $k<br>";
        echo "квадрат числа $k равен $kva и сумма кубов и его цифр равна $sumkub и они  не равны<br>";
    }
    //начало задания 3
    $a=1;
    $b=2;
    $c=1;
    if($a==$b)
    {
        echo "<br>Задание 3.<br>";
        echo "Даны три числа a, b, c. Определить имеется ли среди них хотя бы одна пара равных между собой чисел.<br>";
        echo "задаются числа $a $b $c<br>";
        echo "числа $a и $b равны<br>";
    }
    elseif($a==$c)
    {
        echo "<br>Задание 3.<br>";
        echo "Даны три числа a, b, c. Определить имеется ли среди них хотя бы одна пара равных между собой чисел.<br>";
        echo "задаются числа $a $b $c<br>";
        echo "числа $a и $c равны<br>";
    }
    elseif($c==$b)
    {
        echo "<br>Задание 3.<br>";
        echo "Даны три числа a, b, c. Определить имеется ли среди них хотя бы одна пара равных между собой чисел.<br>";
        echo "задаются числа $a $b $c<br>";
        echo "числа $с и $b равны<br>";
    }
    else
    {
        echo "<br>Задание 3.<br>";
        echo "Даны три числа a, b, c. Определить имеется ли среди них хотя бы одна пара равных между собой чисел.<br>";
        echo "задаются числа $a $b $c<br>";
        echo "нет равных пар<br>";
    }

    //начало задания 4

    $mas = range(-5,10);
    $maxmas=count($mas);
    echo "<br>Задание 4.<br>";
    echo "Дана последовательность чисел. Определить, есть ли в последовательности отрицательные числа и вывести их порядковые номера.<br>";
    echo "задаются последовательность от $mas[0]<br>";
    for($i = 0; $i < count($mas); $i++)
    {   if($mas[$i]<0)
        {
        echo "Индекс отрицательного массива: $i  Значение: $mas[$i]<br>";
        }
    }
    //начало задания 5
    echo "<br>Задание 5.<br>";
    echo "Дано предложение. Найти количество одинаковых слов в предложении.<br>" ;
    $s  = "папа мама отец мать мать папа мать";
    $s = strtolower($s);
    echo 'string = '.$s;
    echo "<br>";

    $a = explode(" ", $s);
    $f = 0;
    $l = 0;
    for($i = 0; $i < count($a)-1; $i++)
    {
        for($j = 0; $j < count($a); $j++)
            if ($a[$i] == $a[$j] && $i != $j)
                $l = 1;
        if ($l == 0)
            $f = $f+1;
        else 
            $l = 0;
    }
    $k =  count($a)-$f;
    echo 'количество одинаковых слов = '.$k;
?>