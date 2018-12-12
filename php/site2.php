<?php
date_default_timezone_set("Asia/Khabarovsk");
define("IMG_PATH","../library/img/");
//Подготовим переменные
$title = "Main page";
$about = "About me";
$article = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, impedit?";
$image_name = "php.png";
$year = date("h - d - M - Y");

//вставим переменные в подшаблоны header и content
$header = "<title>{$title}</title>";

$content = "<center><h1>{$about}</h1></center>
<p>{$article}</p>
<br><br>
<img src='" . IMG_PATH . $image_name . "' alt='computer' width='200' height='200'>
<br><br>
<font style='color:#ff0165'>Этот текст розовый</font>
<br><br>
<b>Пример жирного текста</b>
<br><br>
";

//вставим подшаблоны в главный шаблон
$file = "<!DOCTYPE html>
<html>
<head>
    {$header}
</head>
<body>
{$content}
</body>
<footer>
<center>
    {$year}
</center>
</footer>
</html>
";

echo $file;
