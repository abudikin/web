<?php
//Задание 1.
echo "<h1>Лабораторная работа №2</h1>";
echo "<br>Задание 1.<br>Найдите длину строки «Не на пользу книги читать, когда только вершки с них хватать».<br>";
$s='Не на пользу книги читать, когда только вершки с них хватать';
$i=mb_strlen($s);

echo "Длина строки $i<br>";

//Задание 2.
echo "<br>Задание 2.<br> Создайте массив, состоящий из слов. Объедините все элементы массива в строку и выведите её.<br>";
$arr=array("gaghag","asfasf");
$s=implode(' ', $arr);
echo "$s<br>";

//Задание 3.
echo "<br> Задание 3.<br> Скопируйте текст задания данной лабораторной работы в строку. Поменяйте все вхождения слова «строки», на это же слово, написанное в верхнем регистре. Выведите новый текст.<br>";
$s="Найдите длину строки «Не на пользу книги читать, когда только вершки с них хватать».
Создайте массив, состоящий из слов. Объедините все элементы массива в строку и выведите её.
Скопируйте текст задания данной лабораторной работы в строку. Поменяйте все вхождения слова «строки», на это же слово, написанное в верхнем регистре. Выведите новый текст.
Разбейте фразу «Повторение – мать учения» на слова, исключив знак тире. Выведите полученный массив слов.
Найдите количество вхождений символа «с» в предложении «Учись смолоду, под старость не будешь знать голоду».
Выведите, сколько дней осталось до Нового года.
Дан текст «Функции – вещь довольно простая. Она представляет собой кусок кода, который принимает определенные параметры и на выходе возвращает какой-либо результат».  Закодируйте все буквы текста их порядковыми номерами (в алфавите).<br>";
$string = str_replace('строки', 'Строки', $s);
echo "$string<br>";

//Задание 4.
echo "Задание 4.<br> Разбейте фразу «Повторение – мать учения» на слова, исключив знак тире. Выведите полученный массив слов.<br>";
$keywords = preg_split("#[\s–]+#ui", "Повторение – мать учения");
print_r($keywords);


// Задание 5.
echo "<br><br>Задание 5.<br> Найдите количество вхождений символа «с» в предложении «Учись смолоду, под старость не будешь знать голоду».<br>";
$s="Учись смолоду, под старость не будешь знать голоду";
$k=substr_count($s, "с");
echo "Количество вхождений буквы С равна $k<br>";

// Задание 6.
echo "<br>Задание 6.<br> Выведите, сколько дней осталось до Нового года.<br>";
$t=strtotime('December 31, 2021');
$td=time();
$t=ceil(($t-$td)/86400);
echo "Дней до Нового года осталось : $t<br>";

// Задание 7.
echo "<br>Задание 7.<br> Дан текст «Функции – вещь довольно простая. Она представляет собой кусок кода, который принимает определенные параметры и на выходе возвращает какой-либо результат».
Закодируйте все буквы текста их порядковыми номерами (в алфавите).<br>";
$text="Функции – вещь довольно простая. Она представляет собой кусок кода, который принимает определенные параметры и на выходе возвращает какой-либо результат";

function task7($str){
    $lows = array('а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я');
    $uppers = array('А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я');
    $count = range(1,32);
    $string = str_ireplace($lows, $count, $str);
    $string = str_ireplace($uppers, $count, $string);
    echo $string;
}
task7($text);
?>