<?php
    include 'header.php';
?>


<section class='mainContent'>
    <?php
        // phpinfo();
        error_reporting(E_ERROR | E_WARNING | E_PARSE);
        $price = 45;
        if($price == 45){
            print "The price is $price";
        }else{
            print "Price is not 45";
        }
    ?>

</section>



<?php
    include 'footer.php';
?>