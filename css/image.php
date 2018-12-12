<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Animation leaves</title>
    <link rel="stylesheet" href="../library/fontAwesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="style/animate_leaves.css">
    <link rel="stylesheet" href="style/image_imgBox.css">

</head>
<body>
<div class="MenuIcon">
    <div class="MenuLine"></div>
</div>
<div class="MainMenu">
    <div id="logo"><img src="../library/img/css3.png" alt="logotype" height="75px" width="75px"></div>
    <ul class="MainMenu_ul">
        <li><a class="aa" href="animation.php">Animation</a><div class="line"></div></li>
        <li><a class="aa" href="form.php">form</a><div class="line"></div></li>
        <li><a class="aa" href="Content_Box.php">Content_Box</a><div class="line"></div></li>
        <li><a class="aa" href="text_rotate.php">text_rotate</a><div class="line"></div></li>
        <li><a class="aa" href="animation.php">Contact</a><div class="line"></div></li>
    </ul>
    <div class="close">
        <i class="fa fa-window-close" aria-hidden="true"></i>
    </div>
</div>
<p><a class="index" href="css1.php">главная</a></p>
<div class="wrapper">

    <div class="view_products">
        <ul class="thumb">
            <li><a href="../library/img/mac1.png" target="view_products_imgBox"><img src="../library/img/mini/mac1.png"
                                                                                     alt="MacBook pro"></a></li>
            <li><a href="../library/img/mac2.png" target="view_products_imgBox"><img src="../library/img/mini/mac2.png"
                                                                                     alt="MacBook pro"></a></li>
            <li><a href="../library/img/mac3.png" target="view_products_imgBox"><img src="../library/img/mini/mac3.png"
                                                                                     alt="MacBook pro"></a></li>
        </ul>
        <div class="view_products_imgBox">
            <img class="view_products_imgBox-img" src="../library/img/mac2.png" alt="MacBook pro">
        </div>
    </div>
</div>
<script src="../library/js/jquery.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('.thumb a').mouseover(function (e) {
            e.preventDefault();
            $('.view_products_imgBox-img').attr('src', $(this).attr('href'));
        });
        $('.MenuIcon').click(function () {
            $('.MainMenu').css('left', '0');
            function showMenu() {
                $('.MainMenu').css('clip-path', 'polygon(0 0, 100% 0, 100% 100%,0 100%)');
                $('.MenuIcon').animate({right: '-100'}, 300);
            }
            setTimeout(showMenu(),5000);
        });
        $('.close').click(function () {
            $('.MainMenu').css('clip-path', 'polygon(0 0, 0 0, 100% 100%,0 100%)');
            function hideMenu() {
                $('.MainMenu').css('left', '-300px');
                $('.MenuIcon').animate({right: '50'}, 300);
            }
            setTimeout(hideMenu(), 3000);
            function original() {
                $('.MainMenu').css('clip-path', 'polygon(0 0, 100% 0, 0 100%,0 100%)');
            }
            setTimeout(original(), 3000);

        })
    })
</script>
</body>

