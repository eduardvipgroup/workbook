<?php
echo "<br><br><img src='library/img/sea.jpg'>";
$ddr = dirname($_GET['src']);


echo "<a href='?src=" . $ddr . "'><b>на уровень выше ...</b></a><br> ";
//путь директории по default
if ($_GET['src'] == '') {
    $dir = new DirectoryIterator("/");
} else {
    $dir = new DirectoryIterator($_GET['src']);
}

echo "<br>" . $dir . "<br>";

// цикл по содержанию директории
foreach ($dir as $item) {

    if (strpos($item, ".") === false) {
        echo "<img src='library/img/linux.png'><a href='?src=" . $_GET['src'] . "/" . $dir . "&item=" . $item . "'>" . $item . "</a><br> ";
    } else {
        if ($item == "." OR $item == "..") {
            echo "";
        } else {
            echo "<img src='library/img/file2.png'>" . $item . "<br> ";
        }
    }


}