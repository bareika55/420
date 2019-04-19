<?php

$tel1 = rand(1000000, 10000000);
$telefono_numeris = "(+370) 6 $tel1";
$tel2 = rand(1000000, 10000000);
$telefono_numeris2 = "(+370) 6 $tel2";
$tel3 = rand(1000000, 10000000);
$telefono_numeris3 = "(+370) 6 $tel3";
$tel4 = rand(1000000, 10000000);
$telefono_numeris4 = "(+370) 6 $tel4";
$tel5 = rand(1000000, 10000000);
$telefono_numeris5 = "(+370) 6 $tel5";
$tel6 = rand(1000000, 10000000);
$telefono_numeris6 = "(+370) 6 $tel6";

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/grid.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <title>420</title>
    </head>
    <body class="img22">
    <div class="row">
        <nav class="col-12">
            <a href="index.php">Home <i class="fas fa-carrot"></i></a>
            <a href="about.php">About <i class="fas fa-carrot"></i></a>
            <a href="contact.php">Contacts <i class="fas fa-carrot"></i></a>
            <a href="kiausrakulas.php">Kiaušrakulas <i class="fas fa-carrot"></i></a>
        </nav>
    </div>
    <div class="row about_text">
        <div class="col-12 flex_about">
            <h1 id="#about">CONTACT US 420!</h1>
        </div>
        <div>
            <ul>
                <li><?php print $telefono_numeris . ' ' . '- Aurimas Stecenka' ?></li>
                <li><?php print $telefono_numeris2 . ' ' . '- Pavel Savlevic' ?></li>
                <li><?php print $telefono_numeris3 . ' ' . '- Kasparas Bareika'?></li>
                <li><?php print $telefono_numeris4 . ' ' . '- Vardenis Pavardenis'?></li>
                <li><?php print $telefono_numeris5  . ' ' . '- Darius Sakalauskas'?></li>
            </ul>
        </div>
    </div>
    </body>
</html>