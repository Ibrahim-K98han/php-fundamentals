<?php
    include 'header.php';
?>


<section class='mainContent'>
    <?php
    //   $mystr = "we are learning PHP";
    //   $str = explode(" ", $mystr);
    //   echo $str[0];

    $mystr = array("we","are","learning","PHP");
    echo implode(" ", $mystr);
    ?>

</section>



<?php
    include 'footer.php';
?>