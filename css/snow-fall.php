<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Animation leaves</title>
    <link rel="stylesheet" href="../library/fontAwesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="style/snow-fall.css">
</head>

<body>
<p><a class="index" href="css1.php">главная</a></p>
<div class="wrapper">
    <div id="particles-js"></div>
    <div class="toggle">
        <span>Start snowfall</span>
        <span>Stop snowfall</span>
    </div>
    <section>
        <img src="../library/img/winter-forest.jpg" alt="">
    </section>
    <div class="content">
        <h1>How to add snowfall effects with toggle on your website</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci asperiores atque deleniti doloremque
            dolorum
            eligendi est ex expedita, iste iure laborum molestias non nostrum odio praesentium quae quam quasi ut?
            Aliquam consequatur, rem! </p>
    </div>
    <section>
        <img src="../library/img/winter-car.jpg" alt="">
    </section>
    <div class="content">
        <h1>How to add snowfall effects with toggle on your website</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci asperiores atque deleniti doloremque
            dolorum
            eligendi est ex expedita, iste iure laborum molestias non nostrum odio praesentium quae quam quasi ut?
            Aliquam consequatur, rem! </p>

    </div>
</div>
<script src="../library/js/jquery.js"></script>
<script src="../library/js/particles.js"></script>
<script src="../library/js/app.js"></script>
<script type="text/javascript">
$(document).ready(function () {
    $('.toggle').click(function () {
        $('.toggle').toggleClass('active');
        $('#particles-js').toggleClass('active');
    })
})
</script>
</body>