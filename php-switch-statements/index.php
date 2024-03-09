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
        <?php
            $coding = "JAVA";
            switch($coding){
                case "HTML":
                    echo "I Love HTML";
                    break;
                case "PHP":
                    echo "I Love PHP";
                    break;
                case "JAVA";
                    echo "I Love JAVA";
                    break;
                default:
                    echo "I Love Programming";
            }
        ?>
    </section>
    <section class="footerOption">
        <h2><?php echo "PHP Fundamentals"; ?></h2>
    </section>
</div>
   
</body>
</html>