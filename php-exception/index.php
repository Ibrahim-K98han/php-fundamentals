<?php
    include 'header.php';
?>


<section class='mainContent'>
    <?php
       function numberCheck($num){
        if($num > 1){
            throw new Exception("value must be 1 or below");
        }
        return true;
       }
       try{
            numberCheck(2);
            echo "If you see this, the number is 1 or below";
        }catch(Exception $e){
            echo "Message: ".$e->getMessage();
       }
    ?>

</section>



<?php
    include 'footer.php';
?>