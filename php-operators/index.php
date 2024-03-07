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
        1. arithmetic operators
        2. Assignment operators
        3. Comparison operators
        4. Increment/Decrement operators
        5. Logical operators
        6. String operators
        7. Array operators
        <br><br>
        <?php
        //   1. arithmetic operators
        // $x = 11;
        // $y = 2;
        //echo $x+$y;
        // echo $x-$y;
        // echo $x*$y;
        // echo $x/$y;
        // echo $x%$y;


        // 2. Assignment operators
        // $x = 5;
        // $x *= 4;
        // echo $x;


        // 3. Comparison operators
        // $x = 100;
        // $y = 10;
        // var_dump($x === $y); identical operator data and value 2 ta e check kora
        // var_dump($x != $y); not equal
        // var_dump($x == $y);
        // var_dump($x < $y);
        // var_dump($x > $y);


        // 4. Increment/Decrement operators
        // $x = 5;
        // ++$x; // pre increment
        // --$x; // pre decrement
        // echo $x--; //post decrement
        // echo "<br>";
        // echo $x;


        // 5. Logical operators
        // logical AND
        // $a = 40;
        // $b = 20;
        // if($a == 40 and $b == 20){
        //     echo "Ibrahim Khan";
        // }else{
        //     echo "Sorry";
        // }

        // logical OR
        // if($a == 20 or $b == 30){
        //     echo "Ibrahim Khan";
        // }else{
        //     echo "Sorry";
        // }


        // logical XOR
        // if($a == 40 xor $b == 30){
        //     echo "Ibrahim Khan";
        // }else{
        //     echo "Sorry";
        // }


        // 6. String operators
        // .
        //.=
        // $x = "Ibrahim ";
        // $y = "Khan";
        // $fullName = $x.$y;
        // echo $fullName;
        // $x .= $y;
        // echo $x;


        // 7. Array operators
        $x = array(
            "name" => "Ibrahim",
            "id" => "21221203049"
        );
        $y = array(
            "email" => "ibrahim@gmail.com",
            "mobile" => "01751800957"
        );
        var_dump($x + $y);
        ?>
    </section>
    <section class="footerOption">
        <h2><?php echo "PHP Fundamentals"; ?></h2>
    </section>
</div>
   
</body>
</html>