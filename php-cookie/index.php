<?php
    include 'header.php';
    setcookie('visited',"",time()-3600);
?>


<section class='mainContent'>
    <?php
        // if(!isset($_COOKIE['visited'])){
        //     setcookie("visited","1",time()+86400, "/") or die("Could not set cookie");
        //     echo "This is your first visit in this website";
        // }else{
        //     echo "You are our old visitor";
        // }
        echo "Cookie deleted";
    ?>

</section>



<?php
    include 'footer.php';
?>