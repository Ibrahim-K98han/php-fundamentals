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
        1.index array()
        2.associative array()
        3.multidimensional array()
        <br><br>
        <?php
            // 1.index array()
            //$x = array(5,3,10,11,15);
            // echo $x[2];
            // echo count($x); // array count
            // $length = count($x);
            // for($i=0; $i<$length; $i++){
            //     echo $x[$i]."<br>";
            // }


            // 2.associative array()
            // $age = array(
            //     "Korim" => "25",
            //     "Ibrahim" => "26",
            //     "Sakib" => "24",
            //     "Bokul" => "27"
            // );
            // // echo $age["Ibrahim"];
            // foreach($age as $a=>$s){
            //     echo $a." ".$s."<br>";
            // }


            // 3.multidimensional array()
            // $cars = array(
            //     array("BMW",15,50.2),
            //     array("Toyota",20,15.2),
            //     array("Volvo",25,10.2),
            //     array("Audi",35,12.2)
            // );

            //    echo $cars[2][2];
                // for($row=0; $row<4; $row++){
                //     echo "<p>Row Number $row</p>";
                //     echo "<ul>";
                //     for($col=0; $col<3; $col++){
                //         echo "<li>".$cars[$row][$col]."</li>";
                //     }
                //     echo "</ul>";
                // }




            // Array Sorting
            // $names = array("Ibrahim","Rakib","Tomal","Mamun","Akbor","Badol");
            // $names = array(25,5,20,0,1);
            // sort($names); 
            // rsort($names); //reversed
            // $length = count($names);
            // for($i=0; $i<$length; $i++){
            //     echo $names[$i]."<br>";
            // }

            $age = array(
                "Ibrahim"=>"25",
                "Hasan"=>"35",
                "Rakib"=>"23"
            );
            asort($age); //value wise output
            ksort($age); //key wise output
            foreach($age as $key=>$value){
                echo $key." ".$value."<br>";
            }

        ?>
    </section>
    <section class="footerOption">
        <h2><?php echo "PHP Fundamentals"; ?></h2>
    </section>
</div>
   
</body>
</html>