<?php

$zmones = rand(1, 10);
$tikimybe = round((1 / ($zmones + 1) * 100), $precision = 2);
if ($zmones == 1) {
    $zodis = 'žmogum';
} else {
    $zodis = 'žmonėm';
}
?>
<html xmlns:https="http://www.w3.org/1999/xhtml">
    <head>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/grid.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <title>420</title>
    </head>
    <body style="background-image: url(img/zuikis.gif)">
        <nav class="col-12">
            <a  href="index.php">Home <i class="fas fa-carrot"></i> </a>
            <a href="about.php">About <i class="fas fa-carrot"></i> </a>
            <a href="contact.php">Contacts <i class="fas fa-carrot"></i> </a>
            <a href="kiausrakulas.php">Kiaušrakulas <i class="fas fa-carrot"></i> </a>
        </nav>
        <div class="col-12 flex_about">
            <h1>KIAUŠRAKULAS</h1>
            <h2>Jei muši kiaušinius su <?php print $zmones . ' ' . $zodis; ?>, tavo tikimybė laimėti bus – <?php print $tikimybe; ?> %</h2>
        </div>
    </body>
</html>