<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Animation leaves</title>
    <link rel="stylesheet" href="../library/fontAwesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="style/form.css">
    <style>
        html {
            font-size: 100px;
        }
        @media (max-width: 1280px){
                  html{
                      font-size: 70px;
                  }
              }
        .text_rotate {
            padding: 20px 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 1rem;
            width: 7rem;
            background: #b5bbd0;
        }

        h1 {
            margin: 0;
            padding: 0;
            color: #2e56ff;
            font-family: sans-serif;
            font-size: .99rem;
            text-align: center;
            cursor: pointer;
            text-shadow: 0 15px 45px #2e56ff;
        }
    </style>
</head>
<body>
<p style="font-size: .16rem"><a class="index" href="css1.php">главная</a></p>
<div class="text_rotate">
    <h1>Text rotate</h1>
</div>
<script src="../library/js/jquery.js"></script>

<script type="text/javascript">
    $('h1').on('mousemove', function (e) {
        var centerX = $(this).width() / 2;
        console.log(centerX);
        var moveX = centerX - e.offsetX;
        $(this).css({
            'transform': 'perspective(500px) rotateY(' + moveX / 15 + 'deg) rotateX(' + moveX / 5 + 'deg)'
        })
    })

</script>
</body>