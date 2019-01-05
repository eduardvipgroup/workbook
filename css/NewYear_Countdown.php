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

        @media (max-width: 1280px) {
            html {
                font-size: 70px;
            }
        }
        @media (max-width: 960px) {
            html {
                font-size: 66px;
            }
        }
        body {
            margin: 30px;
            background: #262626;
        }

        .center {
            width: 85%;
            text-align: center;
        }
        @media (max-width: 960px) {
            .center {
                width: 70%;
            }
        }

        #clock {
            display: flex;
            margin: 0 auto;
            font-size: .3rem;
            flex-wrap: wrap;
            justify-content: center;
            transform: translateY(50%);
        }

        h1 {
            margin: 30px auto;
            padding: 0;
            color: #e7e9ff;
            font-family: sans-serif;
            font-size: .69rem;
            cursor: pointer;
            text-shadow: 0 15px 45px #2e56ff;
        }

        #clock div {
            position: relative;
            width: 1.5rem;
            padding: 10px;
            margin: 0 5px;
            color: white;
            background: #262626;
            border: 2px solid #000;
        }
        #clock div:last-child{
            background: #874289;
        }
        #clock div:before{
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 50%;
            background: rgba(255, 255, 255, .2);
        }
        #clock div span{
            display: block;
            text-align: center;
        }
        #clock div span:nth-child(1){
            font-size: .8rem;
            font-weight: 800;
        }
        #clock div span:nth-child(2){
            font-size: .2rem;
            font-weight: 800;
            margin-top: -5px;
        }
    </style>
</head>
<body>

<p style="font-size: .16rem"><a class="index" href="css1.php">главная</a></p>
<div class="center">
    <h1><span>2020</span> <br>New Year countdown</h1>
    <div id="clock"></div>
</div>
<script src="../library/js/jquery.js"></script>
<script src="../library/js/jquery.countdown-2.1.0/jquery.countdown.js"></script>

<script type="text/javascript">


    $('#clock').countdown('2020/01/01', function (event) {
        $(this).html(event.strftime(
             '<div><span>%w</span><span>Weeks</span></div>'
            + '<div><span>%d</span><span>Days</span></div>'
            + '<div><span>%H</span><span>Hours</span></div>'
            + '<div><span class="time">%M</span><span>Min</span></div>'
            + '<div><span>%S</span><span>Sec</span></div>'
            )
        );
    });
    var time = document.querySelector('.time');
    if(time.innerHTML === "40"){
        document.body.style.background = 'red';
    }
</script>
</body>