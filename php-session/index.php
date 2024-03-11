<?php
    session_start();
    include 'header.php';
?>


<section class='mainContent'>
    <?php
        $_SESSION['user']     = "Ibrahim"; 
        $_SESSION['password'] = "123";
        
        echo "User Name is : ".$_SESSION['user']."<br>";
        // session_unset();
        echo "Password is : ".$_SESSION['password'];

        session_destroy();
    ?>

</section>



<?php
    include 'footer.php';
?>