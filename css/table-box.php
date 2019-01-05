<?php
$conn = mysqli_connect('127.0.0.1', 'root', '', 'shop1');
$table = mysqli_query($conn, "SELECT * FROM `table-box` ORDER BY id ASC");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Animation leaves</title>
    <link rel="stylesheet" href="../library/fontAwesome/css/fontawesome-all.min.css">
    <style>
        body{
            height: 100vh;
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
        }
        .table-box{
            min-width: 800px;
            height: 400px;
            overflow-y: scroll;
            background: white;
            box-shadow: 0 10px 100px rgba(0,0,0,.5);
            margin: 20px 0 10px 0;
        }
        table{
            width: 100%;
            text-align: left;
            border-collapse: collapse;
        }
        th{
            border-right: 1px solid #ddd;

        }
        th, td {
            border-bottom: 1px solid #ddd;
        }
        th{
            position: sticky;
            top: -1px;
            background: #12c9ea;
            color: white;
        }
        tr th:nth-child(1){
            width: 60px;
            background: #03707d;
            text-align: center;
        }
        tr td:nth-child(1){
            width: 60px;
            background: #12c9ea;
            text-align: center;
        }
    </style>
</head>

<body>
<p><a class="index" href="css1.php">главная</a></p>
    <div class="table-box">
        <table cellpadding="10">
            <tr>
                <th>Sr. No.</th>
                <th>Name</th>
                <th>Gender</th>
                <th>D. O. B. (Date of Birth)</th>
                <th>Country</th>
            </tr>

            <?php foreach ($table as $td): ?>
                <tr>
                    <td><?= $td['id']; ?></td>
                    <td><?= $td['Name']; ?></td>
                    <td><?= $td['Gender']; ?></td>
                    <td><?= $td['Date of Birth']; ?></td>
                    <td><?= $td['Country']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>