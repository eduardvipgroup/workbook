<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Countdown-10-9-8</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
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
        .wrapper{
            background: #091930;
            width: 100vw;
            height: 100vh;
        }
        #fly-in{
            font-size: 10vw;
            margin: 20vh auto;
            height: 20vh;
            text-transform: uppercase;
            overflow: hidden;
        }
        #fly-in div{
            position: absolute;
            left: 40%;
            animation: switch 10s linear 1;
            opacity: 0;
        }
        #fly-in div:nth-child(1){
            color: orange;
            animation-delay: 3s;
        }
        #fly-in div:nth-child(2){
            color: hotpink;
            animation-delay: 4s;
        }
        #fly-in div:nth-child(3){
            color: darkgreen;
            animation-delay: 5s;
        }
        #fly-in div:nth-child(4){
            color: #2b8cf6;
            animation-delay: 6s;
        }
        #fly-in div:nth-child(5){
            color: fuchsia;
            animation-delay: 7s;
        }
        #fly-in div:nth-child(6){
            color: gold;
            animation-delay: 8s;
        }
        #fly-in div:nth-child(7){
            color: greenyellow;
            animation-delay: 9s;
        }
        #fly-in div:nth-child(8){
            color: snow;
            animation-delay: 10s;
        }
        #fly-in div:nth-child(9){
            color: #0eff68;
            animation-delay: 11s;
        }
        #fly-in div:nth-child(10){
            color: #bc9aff;
            animation-delay: 12s;
        }
        @keyframes switch {
            0%{
                opacity: 0;
                filter: blur(20px);
                transform: scale(4);
            }
            3%{
                opacity: 1;
                filter: blur(0);
                transform: scale(1);
            }
            13%{
                opacity: 0;
                filter: blur(0);
                transform: scale(.9);
            }
            80%{
                opacity: 0;
            }
            100%{
                opacity: 0;
            }
        }
        #fly-out{
            font-size: 14vw;
            margin: -40vh auto;
            height: 20vh;
            text-align: center;
            text-transform: uppercase;
            animation: out 10s linear 1;
            animation-delay: 13s;
            opacity: 0;
            color: #ffd806;
        }
        @keyframes out {
            0% {
                opacity: 0;
                filter: blur(20px);
                transform: scale(.2);
            }
            3%{
                opacity: 1;
                filter: blur(1px);
                transform: scale(1);
            }
            30%{
                 opacity: 1;
                 filter: blur(0);
                 transform: scale(.8);
             }
        }
    </style>
</head>
<body>
<p><a class="index" href="css1.php">главная</a></p>
<div class="wrapper">
    <div id="fly-in">
        <div>10</div>
        <div>9</div>
        <div>8</div>
        <div>7</div>
        <div>6</div>
        <div>5</div>
        <div>4</div>
        <div>3</div>
        <div>2</div>
        <div>1</div>
    </div>
    <div id="fly-out">thanks</div>
</div>

</body>