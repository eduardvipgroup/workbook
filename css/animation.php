<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Animation leaves</title>
    <link rel="stylesheet" href="../library/fontAwesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="style/animate_leaves.css">
    <link rel="stylesheet" href="style/animate_text.css">
    <link rel="stylesheet" href="style/animate_button.css">
    <link rel="stylesheet" href="style/neon_text.css">
    <link rel="stylesheet" href="style/glowing_icon.css">
    <link rel="stylesheet" href="style/infinity.css">

</head>
<body>
<p><a class="index" href="css1.php">главная</a></p>
<div class="wrapper">

    <div class="animate_leaves">

        <section>

            <h1>animated leaves</h1>
            <div class="set">
                <div><img style="width: 50px; height: 50px;" src="../library/img/leave4.png" alt=""></div>
                <div><img style="width: 50px; height: 50px;" src="../library/img/leave2.png" alt=""></div>
                <div><img style="width: 50px; height: 50px;" src="../library/img/leave3.png" alt=""></div>
                <div><img style="width: 50px; height: 50px;" src="../library/img/leave1.png" alt=""></div>
                <div><img style="width: 50px; height: 50px;" src="../library/img/leave4.png" alt=""></div>
                <div><img style="width: 50px; height: 50px;" src="../library/img/leave2.png" alt=""></div>
                <div><img style="width: 50px; height: 50px;" src="../library/img/leave3.png" alt=""></div>
                <div><img style="width: 50px; height: 50px;" src="../library/img/leave1.png" alt=""></div>
            </div>
            <div class="set set2">
                <div><img style="width: 50px; height: 50px;" src="../library/img/leave4.png" alt=""></div>
                <div><img style="width: 50px; height: 50px;" src="../library/img/leave2.png" alt=""></div>
                <div><img style="width: 50px; height: 50px;" src="../library/img/leave3.png" alt=""></div>
                <div><img style="width: 50px; height: 50px;" src="../library/img/leave1.png" alt=""></div>
                <div><img style="width: 50px; height: 50px;" src="../library/img/leave4.png" alt=""></div>
                <div><img style="width: 50px; height: 50px;" src="../library/img/leave2.png" alt=""></div>
                <div><img style="width: 50px; height: 50px;" src="../library/img/leave3.png" alt=""></div>
                <div><img style="width: 50px; height: 50px;" src="../library/img/leave1.png" alt=""></div>
            </div>
            <div class="set set3">
                <div><img style="width: 50px; height: 50px;" src="../library/img/leave4.png" alt=""></div>
                <div><img style="width: 50px; height: 50px;" src="../library/img/leave2.png" alt=""></div>
                <div><img style="width: 50px; height: 50px;" src="../library/img/leave3.png" alt=""></div>
                <div><img style="width: 50px; height: 50px;" src="../library/img/leave1.png" alt=""></div>
                <div><img style="width: 50px; height: 50px;" src="../library/img/leave4.png" alt=""></div>
                <div><img style="width: 50px; height: 50px;" src="../library/img/leave2.png" alt=""></div>
                <div><img style="width: 50px; height: 50px;" src="../library/img/leave3.png" alt=""></div>
                <div><img style="width: 50px; height: 50px;" src="../library/img/leave1.png" alt=""></div>
            </div>
        </section>
    </div>
    <div class="animate_text">
        <ul class="animate_text_ul">
            <li>A</li>
            <li>n</li>
            <li>i</li>
            <li>m</li>
            <li>a</li>
            <li>t</li>
            <li>i</li>
            <li>o</li>
            <li>n</li>
        </ul>
    </div>
    <div class="group_button">
        <div class="animate_button">
            <a class="animate_button_a" href="#">button</a>
        </div>
        <div class="animate_button2">
            <small>каждые 4 часа контролируем команду согласно графику работ</small>
        </div>
    </div>

    <div class="neon_text">
        <h1 class="neon" data-text="Neon_text">Neon_text</h1>
    </div>
    <div class="glowing_icon">
        <span>new</span>
        <ul class="glowing_icon_ul">
            <li><a href=""><i class="fab fa-youtube"></i></a></li>
            <li><a href=""><i class="fas fa-gift"></i></a></li>
            <li><a href=""><i class="fas fa-glass-martini"></i></a></li>
            <li><a href=""><i class="fas fa-phone"></i></a></li>
        </ul>
    </div>
    <div class="svg">
        <p style="text-align: center">SVG: группировка и переиспользование элементов</p>
        <pre>
            <?php
            echo htmlspecialchars
            ("<g id='to-sun'>
                <circle fill='purple' r='20' cx='25' cy='25'/>
                <circle fill='crimson' r='20' cx='70' cy='25'/>
                <circle fill='red' r='20' cx='115' cy='25'/>
                <circle fill='orange' r='20' cx='160' cy='25'/>
                <circle fill='gold' r='20' cx='205' cy='25'/>
                <circle fill='yellow' r='20' cx='250' cy='25'/>
            </g>");
            ?>
        </pre>
        <svg style="display: flex" width="550" height="200">
            <!-- Группа 1  -->
            <g id="to-sun">
                <circle fill="purple" r="20" cx="25" cy="25"/>
                <circle fill="crimson" r="20" cx="70" cy="25"/>
                <circle fill="red" r="20" cx="115" cy="25"/>
                <circle fill="orange" r="20" cx="160" cy="25"/>
                <circle fill="gold" r="20" cx="205" cy="25"/>
                <circle fill="yellow" r="20" cx="250" cy="25"/>
            </g>
            <!-- Группа 2 -->
            <g id="to-night">
                <circle fill="greenyellow" r="20" cx="25" cy="70"/>
                <circle fill="yellowgreen" r="20" cx="70" cy="70"/>
                <circle fill="green" r="20" cx="115" cy="70"/>
                <circle fill="steelblue" r="20" cx="160" cy="70"/>
                <circle fill="darkviolet" r="20" cx="205" cy="70"/>
                <a href="css1.php"><circle fill="purple" r="60" cx="350" cy="70"/></a>
            </g>
        </svg>

        <svg width="240" height="190">
            <defs>
                <g>
                    <circle fill="gold" r="30" id="yellowball"/>
                </g>
                <!-- Описание символа -->
                <symbol id="mouth">
                    <polyline points="15 15 5 10 15 5" stroke="crimson" fill="none" stroke-width="3"/>
                </symbol>
                <!-- Описание символа -->
                <symbol id="bird">
                    <g stroke="brown">
                        <polyline points="0 0 0 55" stroke-width="3" transform="translate(25 100)"/>
                        <polyline points="0 0 0 55" stroke-width="3" transform="translate(45 100)"/>
                        <polyline points="0 30 12 30" stroke-width="3" transform="translate(19 125)"/>
                        <polyline points="0 30 12 30" stroke-width="3" transform="translate(40 125)"/>
                    </g>
                    <use xlink:href="#mouth" x="83" y="35"/>
                    <use xlink:href="#yellowball" x="90" y="55" transform="scale(.75)"/>
                    <use xlink:href="#yellowball" x="35" y="75" width="100"/>
                    <polyline points="55 70 45 90 20 80" stroke="orange" stroke-width="3" fill="none"/>
                    <circle fill="black" r="5" cx="75" cy="35"/>
                    <circle fill="gray" r="1" cx="77" cy="35"/>
                </symbol>
            </defs>

            <!-- Использование символа -->
            <use xlink:href="#bird" x="15" y="15"/>
            <!-- Ещё раз используем символ, повернув его по горизонтали -->
            <use xlink:href="#bird" x="0" y="35" transform="translate(225 -20) scale(-1,1)"/>
        </svg>
        <pre>
            <?php
            echo htmlspecialchars
            ("#infinity:before
            {
            border: 20px solid red;
            border-radius: 50px 50px 0 50px; // начало - левый верхний угол
            transform: rotate(-45deg);
            }");
            ?>
        </pre>
        <div id="infinity"></div>
    </div>
</div>

</body>
