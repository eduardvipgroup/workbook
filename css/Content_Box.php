<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Animation leaves</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../library/fontAwesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="style/Content_Box.css">
    <link rel="stylesheet" href="style/share.css">
    <script src="../library/js/jquery.js"></script>

</head>
<body>
<p><a class="index" href="css1.php">главная</a></p>
<div class="wrapper">
    <div class="wrapper-box">

        <div class="box">
            <div class="icon"><i class="fas fa-search"></i></div>
            <div class="content">
                <h3>Search</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, omnis. </p>
            </div>
        </div>
        <div class="box">
            <div class="icon"><i class="fas fa-user"></i></div>
            <div class="content">
                <h3>Search</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, omnis. </p>
            </div>
        </div>
        <div class="box">
            <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
            <div class="content">
                <h3>Search</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, omnis. </p>
            </div>
        </div>
    </div>
    <div class="share">
        <ul>
            <li><a href="#"><i class="fab fa-facebook"></i>facebook</a></li>
            <li><a href="#"><i class="fab fa-twitter"></i>twitter</a></li>
            <li><a href="#"><i class="fab fa-vk"></i>vk</a></li>
            <li><a href="#"><i class="fab fa-instagram"></i>instagram</a></li>
            <li><a href="#"><i class="fab fa-linkedin"></i>linkedin</a></li>
        </ul>

        <div class="toggle"></div>
    </div>

</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('.toggle').click(function () {
            $('.share').toggleClass('active');
        })
    })
</script>
</body>