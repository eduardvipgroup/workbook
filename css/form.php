<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Animation leaves</title>
    <link rel="stylesheet" href="../library/fontAwesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="style/form.css">
    <script src="../library/js/jquery.js"></script>

</head>
<body>
<p><a class="index" href="css1.php">главная</a></p>
<div class="wrapper">

    <div class="form_box">
        <h2 data-text="авторизация">авторизация</h2>
        <form action="" class="form_1">
            <div class="form_1-inputBox">
                <input id="form_1-1" type="text" name="form_1-1" required>
                <label for="form_1-1">username</label>
            </div>
            <div class="form_1-inputBox">
                <input id="form_1-2" type="text" name="form_1-2" required>
                <label for="form_1-2">password</label>
            </div>
            <input type="submit">
        </form>
    </div>
    <p class="p1">тег &lt; progress &gt;</p>
    <progress value="22" max="100"></progress>
    <code>
        <?php
        echo htmlspecialchars("<progress value=\"22\" max=\"100\">");
        ?>
    </code>
    <h1 class="Picture_instead_of_color">text</h1>
    <svg xmlns="http://www.w3.org/2000/svg" width="600" height="300" viewBox="0 0 400 200" >
        <defs>
            <mask id="LetMask">
                <rect x="0" y="0" width="100%" height="100%" fill="#black" >
                    <text font-size="30" font-family="serif" x="100" y="300" fill="white" stroke="grey" stroke-width="5">Text</text>
            </mask>
        </defs>
        <image xlink:href="../library/img/php.png" width="100%" height="100%" mask="url(#LetMask)">
    </svg>
    <pattern id="pattern" patternUnits="userSpaceOnUse"
             width="200" height="300" viewbox="0 0 200 300">
        <image xlink:href="https://i.stack.imgur.com/sbuGW.jpg" width="200" height="300" />
    </pattern>
</div>

</body>