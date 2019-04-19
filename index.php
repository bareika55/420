<?php
$egg = rand(1, 3);

if ($egg == 1) {
    $kiausai = 'kiausai1';
} elseif ($egg == 2) {
    $kiausai = 'kiausai2';
} else {
    $kiausai = 'kiausai3';
}
if ($egg == 1) {
    $egg_zodis = 'kiaušą?';
} else {
    $egg_zodis = 'kiaušus?';
}
?>
<!doctype html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>420</title>
</head>
<body>
    <div class="row">
        <nav class="col-12">
            <a  href="index.php">Home <i class="fas fa-carrot"></i> </a>
            <a href="about.php">About <i class="fas fa-carrot"></i> </a>
            <a href="contact.php">Contacts <i class="fas fa-carrot"></i> </a>
            <a href="kiausrakulas.php">Kiaušrakulas <i class="fas fa-carrot"></i> </a>
        </nav>
    </div>
    <h1>
        Mūsų komandos pavadinimas - 420 <i class="fas fa-cannabis"></i>
    </h1>
    <div class="<?php print $kiausai; ?>">
        <span>Ar matai <?php print $egg . ' ' . $egg_zodis; ?></span>
    </div>
</body>
</html>