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
        1.GLOBALS
        2.$_SERVER
        3.REQUEST
        4.POST
        5.$_GET
        <br><br>
        <!-- <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
            Username: <input type="text" name="username">
            <input type="submit" value="Submit">
        </form> -->
        <a href="text.php?msg=Good&text=Bye">Sent Data</a>
        <?php
        // 1.GLOBALS
        // $x = 5;
        // $y = 10;
        // function sum(){
        //     $GLOBALS['z'] = $GLOBALS['x']+$GLOBALS['y'];
        // }
        // sum();
        // echo $z;


        // 2.$_SERVER
        // echo $_SERVER['PHP_SELF']; //file location
        // echo $_SERVER['SERVER_NAME']; //web site name
        // echo $_SERVER['HTTP_USER_AGENT']; //user brawser
        // echo $_SERVER['SERVER_ADDR']; //ip address

        // 3.REQUEST, POST
        // if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //     $name = $_REQUEST['username'];
        //     if(empty($name)){
        //         echo "<span style='color:red'>User name field must not be empty</span>";
        //     }else{
        //         echo "<span style='color:green'>You have submitted : $name</span>";
        //     }
        // }

        // 5.$_GET
        
        ?>
    </section>
    <section class="footerOption">
        <h2><?php echo "PHP Fundamentals"; ?></h2>
    </section>
</div>
   
</body>
</html>