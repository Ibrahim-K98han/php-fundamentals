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