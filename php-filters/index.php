<?php
    include 'header.php';
?>


<section class='mainContent'>
    <?php
    //    $str = "<h2>I am learning PHP</h2>";
    //    $newstr = filter_var($str, FILTER_SANITIZE_STRING);
    //    echo $newstr;

    //$ip = "127.0.0.1.00000";
    // $email = 'ibrahim@gmail';
    // if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    //     echo "$email It is valid Email Address";
    // }else{
    //     echo "$email It is not valid Email Address";
    // }


    $intnum = 300;
    $min = 1;
    $max = 200;
    if(filter_var($intnum, FILTER_VALIDATE_INT,array("options"=>array("min_range"=>$min, "max_range"=>$max))) == false){
        echo "It is not valid";
    }else{
        echo "It is valid";
    }
    ?>

</section>



<?php
    include 'footer.php';
?>