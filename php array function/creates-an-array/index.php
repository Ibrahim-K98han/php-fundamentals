<?php include 'header.php'; ?>


<section class='mainContent'>
    <?php
    //    $car = array("volvo", "BMW", "Toyota");
    //    $length = count($car);
        //    echo $length;

    //    for($i=0; $i<$length; $i++){
    //         echo $car[$i]."<br>";
    //    }



    ///associative array

    // $age = array(
    //     "Ibrahim" => "25",
    //     "Hasan" => "20",
    //     "Rakib" => "26"
    // );
    // foreach ($age as $key => $value) {
    //     echo "Name = ".$key.", Age = ".$value."<br>";
    // }


    //multidimensional array

    $car = array(
        array("Volvo","100","90"),
        array("BMW","200","80"),
        array("Toyota","120","30"),
    );

    echo $car[2][0];
    ?>

</section>



<?php include 'footer.php'; ?>