<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>amazing navbar</title>
    <link rel="stylesheet" href="style/navbar.css">
    <script src="../library/js/jquery.js"></script>

</head>
<body>
<p><a class="index" href="css1.php">главная</a></p>

<nav class="menu">
    <header>Menu <span>×</span></header>
    <ol>
        <li class="menu-item"><a href="#0">Home</a></li>
        <li class="menu-item"><a href="#0">About</a></li>
        <li class="menu-item">
            <a href="#0">Widgets</a>
            <ol class="sub-menu">
                <li class="menu-item"><a href="#0">Grocerry</a></li>
                <li class="menu-item"><a href="#0">Discount</a></li>
                <li class="menu-item"><a href="#0">Huge Sale</a></li>
            </ol>
        </li>
        <li class="menu-item">
            <a href="#0">Juice</a>
            <ol class="sub-menu">
                <li class="menu-item"><a href="#0">Russi</a></li>
                <li class="menu-item"><a href="#0">Paneer Pyaza</a></li>
                <li class="menu-item"><a href="#0">Rasbhari</a></li>
            </ol>
        </li>
        <li class="menu-item"><a href="#0">Contact</a></li>
    </ol>
    <footer><button aria-label="Toggle Menu">Toggle</button></footer>
</nav>
<script type="text/javascript">

    var $els = $('.menu a, .menu header');
    var count = $els.length;
    var grouplength = Math.ceil(count/3);
    var groupNumber = 0;
    var i = 1;
    $('.menu').css('--count',count+'');
    $els.each(function(j){
        if ( i > grouplength ) {
            groupNumber++;
            i=1;
        }
        $(this).attr('data-group',groupNumber);
        i++;
    });

    $('.menu footer button').on('click',function(e){
        e.preventDefault();
        $els.each(function(j){
            $(this).css('--top',$(this)[0].getBoundingClientRect().top + ($(this).attr('data-group') * -15) - 20);
            $(this).css('--delay-in',j*.1+'s');
            $(this).css('--delay-out',(count-j)*.1+'s');
        });
        $('.menu').toggleClass('closed');
        e.stopPropagation();
    });

    // run animation once at beginning for demo
    setTimeout(function(){
        $('.menu footer button').click();
        setTimeout(function(){
            $('.menu footer button').click();
        }, (count * 100) + 500 );
    }, 500);


</script>
</body>
