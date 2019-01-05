<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Black & white | Mouse move</title>
    <link rel="stylesheet" href="../library/fontAwesome/css/fontawesome-all.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
        }

        .index {
            display: block;
            color: rgb(0, 0, 0);
            text-decoration: none;
            background: #35acdf;
            width: 100px;
            height: 30px;
            text-align: center;
            line-height: 30px;
            text-transform: uppercase;
            margin: 30px;
            cursor: pointer;
        }

        section {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            background: #091930;

        }
        h2{
            font-size: 10em;
            font-weight: bold;
            padding: 20px;
            text-align: center;
            text-transform: uppercase;
            line-height: 1.2em;
            background: white;
            margin: 0;
        }
        section p{
            font-size: 28px;
            padding: 100px;
            align-items: center;
            display: flex;
            justify-content: center;
            background: #091930;
            height: 100%;
            width: 100%;
            margin: 0;

        }
        .pointer{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: white;
            pointer-events: none;
            mix-blend-mode: difference;
        }
    </style>
</head>

<body>
<p><a class="index" href="css1.php">главная</a></p>
<section>
    <div class="pointer"></div>
    <h2>Black & white</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        A asperiores assumenda dignissimos doloremque, earum esse eveniet facilis iure magni minus molestias odio optio
        quam quas quia reprehenderit rerum, sunt totam vero voluptas voluptate.
    </p>
</section>
<script src="../library/js/jquery.js"></script>

<script type="text/javascript">
$(document).mousemove(function (e) {
    $('.pointer').css({left:e.pageX, top: e.pageY});
})
</script>
</body>