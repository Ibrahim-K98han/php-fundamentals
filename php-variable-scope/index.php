<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP Syntax</title>
</head>
<body>
<div class='phpCoding'>
    <section class="headerOption">
        <h2><?php echo "PHP Fundamentals"; ?></h2>
    </section>
    <section class='mainContent'>
        <?php
            $x = 15;
            function test1(){
                global $x;
                $a = 5;
                echo $a."<br>";
                echo $x."<br>";

            }
            function test2(){
                global $x;
                $b = 10;
                echo $b."<br>";
                echo $x;
            }
            test1();
            test2();
        ?>
    </section>
    <section class="footerOption">
        <h2><?php echo "PHP Fundamentals"; ?></h2>
    </section>
</div>
   
</body>
</html>