<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="../library/css/style.css">
    <script src="../library/js/bootstrap.min.js"></script>
    <style>.sidebar-nav li:nth-child(1):before {
            background-color: #0b0c86;
        }</style>
</head>
<body>

<div class="wrapper-item">
    <div class="name name-lesson"></div>

    <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper-item" role="navigation">
        <ul class="nav sidebar-nav sidebar-nav-item">
            <li>
                <a class="index" href="../index.html">главная</a>
            </li>
            <li>
                <a href="#">работа с файлами</a>
            </li>
            <li>
                <a href="#">работа с БД Mysql</a>
            </li>
            <li>
                <a href="#">get, post, file - методы передачи данных на сервер</a>
            </li>
            <li>
                <a href="#">Cookie & Session</a>
            </li>
            <li>
                <a href="#">Services</a>
            </li>
            <li>
                <a href="#">шаблоны</a>
            </li>
        </ul>
    </nav>

    <div id="page-content-wrapper">

        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <a href="site.php">домашние задания по PHP</a>
                    <h1>Переменные, константы, циклы и массивы</h1>
                    <p><b style="color: green">Правильно:</b><br><br>
                        $variable <br>
                        $myVariable <br>
                        $_variableWithDigits <br><br>
                        <b style="color: red">Неправильно:</b> <br><br>
                        $1stvariable <br>
                        $Переменная (сработает, но так нельзя!) <br>
                        $any%other/variable­withSymbols <br><br>
                    </p>
                    <h4 style="color: #0b0c86">константы</h4>
                    <pre>
                        <?php
                        echo htmlspecialchars("<?php define('MY_CONST', 100); echo MY_CONST;?>");
                        ?>
                    </pre>

                    <h4 style="color: #0b0c86">Типы данных</h4>
                    <h5>По сути, переменная – это коробка, в которую можно положить предмет определённого типа: ботинки,
                        банку консервов или кота. У переменных также есть собственные специальные типы данных.
                        PHP поддерживает восемь простых типа данных:</h5>
                    <ul>
                        <li>boolean (логический тип);</li>
                        <li>integer (целые числа);</li>
                        <li>double (дробные числа);</li>
                        <li>string (строки);</li>
                        <li>array (массивы);</li>
                        <li>object (объекты);</li>
                        <li>resource (ресурсы);</li>
                        <li>NULL.</li>
                    </ul>
                    <pre>
                        <?php
                        echo htmlspecialchars('
                        <?php 
                        $int10 = 42;
                        $int2 = 0b101010;
                        $int8 = 052;
                        $int16 = 0x2A;
                        echo "Десятеричная система $int10";
                        echo "Двоичная система $int2";
                        echo "Восьмеричная система $int8";
                        echo "Шестнадцатеричная система $int16";?>
                        ');
                        ?>
                    </pre>

                    <p>Для работы с текстом применяются строки, которые бывают двух типов: в двойных кавычках и
                        одинарных.
                        <b>Тип кавычек</b> определяет обработку строк интерпретатором. Как было видно из примера выше,
                        записи переменных в двойных кавычках заменяются <span style="color: green">значениями</span>,
                        а <u>переменные в одинарных кавычках остаются неизменными.</u>
                    </p>
                    <h4 style="color: #0b0c86">Операции</h4>
                    <pre>
                        <?php
                        echo htmlspecialchars('
                        
<?php
$c = $a . $b. \'<br>\'; // конкатенация
$a = 4;
$b = 5;
echo $a + $b . \'<br>\';    // сложение
echo $a * $b . \'<br>\';    // умножение
echo $a -­ $b . \'<br>\';    // вычитание
echo $a / $b . \'<br>\';  // деление
echo $a % $b . \'<br>\'; // остаток от деления
echo $a ** $b . \'<br>\'; // возведение в степень
?>

                        ');
                        ?>
                    </pre>
                    <?php include "../iterator.php";
                    ?>
                    <?php include "../scandir.php";
                    ?>
                </div>
            </div>
        </div>
    </div>

</div>
</body>
</html>
