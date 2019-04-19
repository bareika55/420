<?php

$x = rand(0, 1);
if ($x) {
    $img1 = 'background1';
} else {
    $img1 = 'background2';
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/grid.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <title>420</title>
    </head>
    <body class="<?php print $img1; ?>">
    <div class="row about_text">
        <nav class="col-12">
            <a  href="index.php">Home <i class="fas fa-carrot"></i> </a>
            <a href="about.php">About <i class="fas fa-carrot"></i> </a>
            <a href="contact.php">Contacts <i class="fas fa-carrot"></i> </a>
            <a href="kiausrakulas.php">Kiaušrakulas<i class="fas fa-carrot"></i> </a>
        </nav>
        <div class="col-12 flex_about">
            <h1 id="#about">WE ARE 420 TEAM!</h1>
            <div>
                <ul>
                    <li><p>The business world might appear buttoned-down from the outside - but in reality, it's a lot more interesting than you might realize. Many entrepreneurs are known for being colorful characters, both at work and in their personal lives. After all, following rules and staying inside the lines doesn't often make for business success! </p>
                    </li>
                    <li><p>For most billionaire businesspeople, having more than one home is par for the course. But for years, Nicholas Berggruen avoided ever buying a house at all. He opted to live exclusively in hotels while traveling the world instead, which earned him the curious nickname of "the homeless billionaire." Recently, though, Berggruen decided to put down some roots. He finally bought a $40 million house in 2017, perhaps wishing to give his two young children a stable place to grow up.</p>
                    </li>
                    <li> <p>In 2011, Facebook founder Mark Zuckerberg undertook a personal challenge to only eat meat that he killed himself. He announced this challenge to the world with his now-infamous status update, "I just killed a pig and a goat," on May 4, 2011. Zuckerberg soon clarified that he took on the challenge in an effort to learn about sustainable farming and to consume resources more responsibly. The change wasn't permanent, though. After the year-long challenge was over, Zuckerberg went back to buying meat at the store.</p>
                    </li>
                    <li><p>Mark Benioff, one of the founders of Salesforce, is notorious for coming up with over-the-top (and sometimes inflammatory) marketing gimmicks. Most famously, he once orchestrated a fake protest at a Siebel Systems conference, complete with picket signs, chanting, and even a fake TV crew. This drummed up a lot of attention for Salesforce at his rival's expense. On another occasion, Benioff arranged to rent an airport's entire taxi fleet right before another Siebel event was held nearby. He then had his employees pitch Salesforce on the way to the event, much to Siebel's displeasure.</p>
                    </li>
                    <li><p>In 1995, a computer programmer started auctioning off stuff on his personal website. AuctionWeb, as it was then known, was really just a personal project, but, when the amount of web traffic made it necessary to upgrade to a business Internet account, Omidyar had to start charging people fees. He actually hired his first employee to handle all the payment checks. The site is now known as eBay.  </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </body>
</html>