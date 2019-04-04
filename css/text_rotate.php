<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Animation leaves</title>
    <link rel="stylesheet" href="../library/fontAwesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="style/form.css">
    <link rel="stylesheet" href="style/glowing-effects.css">
    <style>
        html {
            font-size: 100px;
        }
        @media (max-width: 1280px){
                  html{
                      font-size: 70px;
                  }
              }
        .box{
            display: flex;
            flex-direction: column;
            background: #060c21;
            position: relative;
            z-index: 0;
        }
        .text_rotate {
            padding: 20px 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 2rem;
            width: 7rem;
            background: #b5bbd0;
        }

        h1 {
            margin: 0;
            padding: 0;
            color: #2e56ff;
            font-family: sans-serif;
            font-size: 1rem;
            text-align: center;
            cursor: pointer;
            text-shadow: 0 15px 45px #2e56ff;
            height: 2rem;
        }
    </style>
</head>
<body>
<p style="font-size: .16rem"><a class="index" href="css1.php">главная</a></p>
<div class="box">
    <div class="text_rotate">
        <h1>Text rotate</h1>
    </div>
    <div class="glowing-effects">

        <div class="glowing-content">
            <h2 class="glowing-h1">Glowing Border</h2>
            <p class="glowing-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Aliquam asperiores autem ipsum nisi nostrum officiis rerum sit totam? Autem doloribus eveniet,
                id illum inventore ipsum maiores mollitia nobis, officia optio possimus quae veritatis voluptatibus!
                Animi aspernatur cupiditate deserunt exercitationem labore minima praesentium?
                Architecto distinctio dolore minus placeat voluptas voluptate voluptatum?
            </p>
        </div>


    </div>
</div>

<script src="../library/js/jquery.js"></script>

<script type="text/javascript">

    $('h1').on('mousemove', function (e) {
        var centerX = $(this).width() / 2;
        var centerY = $(this).height() / 2;
        console.log(centerX);
        console.log($(this));
        var moveX = centerX - e.offsetX;
        var moveY = centerY - e.offsetY;
        console.log(moveY);

        $(this).css({
            'transform': 'perspective(500px) rotateY(' + moveX / 10 + 'deg) rotateX(' + moveY / 5 + 'deg)'
        })
    })

</script>
</body>