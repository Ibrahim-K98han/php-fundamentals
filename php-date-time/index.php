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
        <span>
            <?php  
                date_default_timezone_set('Asia/Dhaka');
                echo "Time is: ".date("h:i:sa")."<br>";
            ?>
        </span>
    </section>
    <section class='mainContent'>
        <?php
            // echo "Today is: ".date("d.m.Y")."<br>";
            // echo "Today is: ".date("l")."<br>";
            // echo "Time is: ".date("h:i:sa")."<br>";

            date_default_timezone_set('Asia/Dhaka');
            echo "Bangladesh Time is: ".date("h:i:sa")."<br>";            
        ?>
    </section>
    <section class="footerOption">
        <p>&copy; <?php echo date("Y");?> Ibrahim Khan</p>
        <h2><?php echo "PHP Fundamentals"; ?></h2>
    </section>
</div>
   
</body>
</html>