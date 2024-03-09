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
        1.if
        2.if else
        3.if elseif
        <br>
        <br>
        <?php
            // 1.if
            // $x = 10;
            // if($x > 5){
            //     echo "ok";
            // }

            
            // 2.if else
            // $x = 10;
            // if($x>15){
            //     echo "ok";
            // }else{
            //     echo "sorry";
            // }


            // 3.if elseif
            $x = 11 ;
            if($x> 15){
                echo "ok 15";
            }elseif($x > 12){
                echo "ok 12";
            }else{
                echo "Sorry";
            }

        ?>
    </section>
    <section class="footerOption">
        <h2><?php echo "PHP Fundamentals"; ?></h2>
    </section>
</div>
   
</body>
</html>