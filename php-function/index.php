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
            // function school($name = "My School", $year = "2015"){
            //     echo "$name is started $year <br>";
            // }
            // school("Demra High School", "1998");
            // school("Ml High School", "1974");
            // school("Bl High School" , "2000");
            // school();
        


            // function addition($a, $b){
            //     echo $a+$b;
            // }
            //  addition(10,20);

            function sum($x, $y){
                return $x + $y."<br>";
                
            }
            echo sum(5,10);
            echo sum(10,10);
        ?>
    </section>
    <section class="footerOption">
        <h2><?php echo "PHP Fundamentals"; ?></h2>
    </section>
</div>
   
</body>
</html>