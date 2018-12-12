<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Animation leaves</title>
    <link rel="stylesheet" href="../library/fontAwesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="style/blurred_class.css">
</head>
<body>
<p><a class="index" href="css1.php">главная</a></p>

<div class="add">
    <div class="block"></div>
    <section>
        <div class="box">
            <h2>Blurred Glass Effect Transparent Div</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>
                Atque dicta dolorem et illo ipsam nostrum omnis
                optio quisquam saepe tempore. Lorem ipsum dolor sit amet, <br>
                consectetur adipisicing elit. Molestias, neque!
            </p>
        </div>
    </section>
    <div class="item"><div class="space-invader"></div></div>
</div>

</body>
<script>
    var a = document.querySelector('.item');
    var elem = document.querySelector('.add');
    var left = 0;

    for (var i = 0; i <5; i++){
        var el = a.cloneNode(true);
        console.log(el);
        left += 20;
        el.style.right = left + 'px';
        elem.appendChild(el);
    }


</script>
</html>