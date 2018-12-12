<?
$a = 5; // число
$b = '05'; // строка распознается как числовое значение
var_dump($a == $b);         //  5 = 05, ноль не учитывается
var_dump((int)'012345');     // с точки зрения целых чисел (integer), 012345 == 12345
var_dump((float)123.0 === (int)123.0); // оператор "Тождественно равно" :	TRUE если переменные равны и имеют тот же тип, но у нас раные типы, поэтому false
var_dump((int)0 === (int)'hello, world'); // переменные равны и имеют тот же тип, и для строк int() скорее всего вернет 0, если первый символ в строке не число

$c = 1;
$d = 2;

$c = $c + $d - $d = $c; // $c = $c + $d - ($d = $c); ассоциативность у '=' - правая, у '+', '-' - левая
echo "с = {$c}; d = {$d}";
//---------------------------------//

$title = "Lesson 1";
$h1 = "Lesson 1";
$name = "Эдуард";
$age = 38;
$todayDate = date("l - F - Y  H : i");
$_ = "_";
//$empty = " ";
// как все же вывести print_r на UTF-8 ?
$hi = "Меня зовут {$name}, мне $age лет. Через год мне будет " . ($age + 1) . " лет, а еще через год " . ($age + 2) . " лет.
На моих часах сейчас: $todayDate";
// строковые функции
$hi2 = str_ireplace(" ", $_, $hi); // str_ireplace - регистронезависивый, в отличие от str_replace
$rest = mb_strcut($hi2, strpos($hi, 'На'));
$onlyAge = str_replace($rest, "", $hi);
define("IMG_PATH", "../library/img/php.png");
$content = "<img src='" . IMG_PATH . "'>";
$hello = "Hello!";
$b = "<b>Пример жирного текста</b>";
$font = "<p style=\"color:green\">Этот текст зеленый</p>";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>

</head>
<body>
<br><br>
<h1><?= $h1 ?></h1>
<hr/>
<marquee direction="up" style="background: bisque ; height: 500px;" behavior="alternate">
    <?= $hello . ' ' . 'Бегущая строка - вчерашний день!' ?>
</marquee>
<hr/>
<?php echo "Eще раз" . " " . $hello . " " . "- из echo" ?>
<br><br>
Ниже картинка "PHP"<br>
<marquee behavior="alternate" direction="right" scrollamount="19" style="background: bisque ; width: 700px;"><?= $content ?> </marquee>

<br>
<br><br>
<?php echo "$hi <br><br> $rest <br><br> $onlyAge"?>
<br><br>
<div style="display: flex ; justify-content: space-around; align-items: center ; margin: auto ; width: 320px">
    <h4 style='color: blue'>TODAY IS </h4>
    <p><?php echo " " . $todayDate ?> </p>
</div>
<br><br>
<a href="site2.php">вторая страница</a> <br><br>
<a href="site3.php">третья страница</a><br><br>
<a href="three.php">четвертая страница</a>

</body>
</html>