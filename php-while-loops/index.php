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
        //    $x = 1;
        //    while($x <= 5){
        //         echo "The number is : $x <br>";
        //         $x++;
        //    }

        
        $x = 7;
        do{
            echo "The number is : $x <br>";
            $x++;
        }while($x <=5);


        //    for($i=1; $i<=10; $i++){
        //         echo "The number is : $i <br>";
        //    }
        ?>
    </section>
    <section class="footerOption">
        <h2><?php echo "PHP Fundamentals"; ?></h2>
    </section>
</div>
   
</body>
</html>