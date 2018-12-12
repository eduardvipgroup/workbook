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
    <div class="name name-lesson" style="background: url('../library/img/css.png') no-repeat; background-size: cover;width: 110px"></div>

    <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper-item" role="navigation" style="width: 230px; margin-left: 20px">
        <ul class="nav sidebar-nav sidebar-nav-item">
            <li>
                <a class="index" href="../index.html">главная</a>
            </li>
            <li>
                <a href="animation.php">animation</a>
            </li>
            <li>
                <a href="image.php">Image</a>
            </li>
            <li>
                <a href="form.php">form</a>
            </li>
            <li>
                <a href="Content_Box.php">Content Box</a>
            </li>
            <li>
                <a href="text_rotate.php">JQuery - text rotate</a>
            </li>
            <li>
                <a href="Text_layer.php">Text Layer</a>
            </li>
            <li>
                <a href="Blurred_Glass.php">Blurred Glass Effect Transparent Div</a>
            </li>
            <li>
                <a href="NewYear_Countdown.php">New Year countdown</a>
            </li>
        </ul>
    </nav>

    <div id="page-content-wrapper">

        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <h1>REM, SASS, @media </h1>
                    <pre>
                    <?php
                    echo htmlspecialchars("
                    *
                      box-sizing: border-box
                    html
                    overflow: visible
                    min-width: 1000px
                    height: 100%
                    line-height: 1.6
                    font-family: $\font-family, sans-serif
                    font-size: 100px 
                    -webkit-overflow-scrolling: touch
                       @media (max-width: 1380px)
                       font-size: 92px   
                       @media (max-width: 1280px)
                       font-size: 84px
                       @media (max-width: 1180px)
                       font-size: 77px
                       @media (max-width: 1080px)
                       font-size: 70px
                    
                    body
                        display: flex
                        flex-direction: column
                        max-width: 19.2rem
                        min-height: 100%
                        margin: 0 auto
                        background: $\color-fond - переменная SASS
                        box-shadow: 0 0 .33rem rgba($\color-fond, .33)
                        font-size: .16rem                      
                    ");
                    ?>
                    </pre>
                    <h4 style="color: #591186">Прижать футер к низу</h4>
                    <pre>
                        <?php
                        echo htmlspecialchars("<div class='main' style='flex-grow: 1'>");
                        ?>
                    </pre>
                    <h4 style="color: #591186">Картинка фона</h4>
                    <p><b>COVER</b> - масштабирует изображение с сохранением пропорций: ширина или высота равнялась
                        ширине или высоте блока.</p>
                    <pre>
                        <?php
                        echo htmlspecialchars("<div class='img' style='background: url('img/Layer.png') no-repeat;
                                                     background-size: cover'></div>");
                        ?>
                    </pre>
                    <h4 style="color: #591186"><a href="https://bennettfeely.com/clippy/" target="_blank">свойство clip-path</a></h4>
                    <p>Позволяет скрывать участки изображения по маске</p>
                    <p><b style="color: red">*</b> Не работает в IE</p>
                    <ul>
                        <li>Circle: circle(radius at x-axis y-axis)</li>
                        <li>Ellipse: ellipse(x-rad y-rad at x-axis y-axis)</li>
                        <li>Polygon: polygon(x-axis y-axis, x-axis y-axis, ... )</li>
                        <li>Inset: inset(top right bottom left round top-radius right-radius bottom-radius
                            left-radius)
                        </li>
                    </ul>
                    <h3 style="color: #7d0986">Методы Трехмерной Трансформации</h3>

                    <table class="reference" cellspacing="0" cellpadding="0" border="1" width="100%">
                        <tbody><tr>
                            <th width="22%" align="left">Функция</th>
                            <th width="78%" align="left">Описание</th>
                        </tr>
                        <tr>
                            <td>matrix3d<br>
                                (<i>n,n,n,n,n,n,n,n,n,n,n,n,n,n,n,n</i>)</td>
                            <td>Определяет трехмерную трансформацию, используя матрицу 4x4 из 16 значений</td>
                        </tr>
                        <tr>
                            <td>translate3d(<i>x,y,z</i>)</td>
                            <td>Определяет трехмерный перенос</td>
                        </tr>
                        <tr>
                            <td>translateX(<i>x</i>)</td>
                            <td>Определяет трехмерный перенос, ипользуя только значение для оси X</td>
                        </tr>
                        <tr>
                            <td>translateY(<i>y</i>)</td>
                            <td>Определяет трехмерный перенос, ипользуя только значение для оси Y</td>
                        </tr>
                        <tr>
                            <td>translateZ(<i>z</i>)</td>
                            <td>Определяет трехмерный перенос, ипользуя только значение для оси Z</td>
                        </tr>
                        <tr>
                            <td>scale3d(<i>x,y,z</i>)</td>
                            <td>Определяет трехмерную трансформацию масштабирования</td>
                        </tr>
                        <tr>
                            <td>scaleX(<i>x</i>)</td>
                            <td>Определяет трехмерную трансформацию масштабирования с заданием
                                параметра для оси X</td>
                        </tr>
                        <tr>
                            <td>scaleY(<i>y</i>)</td>
                            <td>Определяет трехмерную трансформацию масштабирования с заданием
                                параметра для оси Y</td>
                        </tr>
                        <tr>
                            <td>scaleZ(<i>z</i>)</td>
                            <td>Определяет трехмерную трансформацию масштабирования с заданием
                                параметра для оси Z</td>
                        </tr>
                        <tr>
                            <td>rotate3d(<i>x,y,z,angle</i>)</td>
                            <td>Определяет трехмерный поворот</td>
                        </tr>
                        <tr>
                            <td>rotateX(<i>угол</i>)</td>
                            <td>Определяет трехмерный поворот вдоль оси X</td>
                        </tr>
                        <tr>
                            <td>rotateY(<i>угол</i>)</td>
                            <td>Определяет трехмерный поворот вдоль оси Y</td>
                        </tr>
                        <tr>
                            <td>rotateZ(<i>угол</i>)</td>
                            <td>Определяет трехмерный поворот вдоль оси Z</td>
                        </tr>
                        <tr>
                            <td>perspective(<i>n</i>)</td>
                            <td>Определяет перспективный вид для трехмерно-трансформированного элемента</td>
                        </tr>
                        </tbody></table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
