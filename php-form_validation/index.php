<?php
    $errname = $erremail = $errweb = $errcomment = $errgender = "";
    $name = $email = $website = $comment = $gender = "";
        
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                if(empty($_POST["name"])){
                    $errname = "Name is required";
                }else{
                    $name = validate($_POST["name"]);
                }
                if(empty($_POST["email"])){
                    $erremail = "Email is required";
                }
                elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                    $erremail = "Invalid Email Formate";
                }
                else{
                    $email = validate($_POST["email"]);
                }
                if(empty($_POST["website"])){
                    $errweb = "Web is required";
                }else{
                    $website = validate($_POST["website"]);
                }
                if(empty($_POST["gender"])){
                    $errgender = "<span style='color:red'>Gender is required</span>";
                }else{
                    $gender = validate($_POST["gender"]);
                }
                $comment = validate($_POST["comment"]);

                // echo "Name : ".$name."<br>";
                // echo "Email : ".$email."<br>";
                // echo "Website : ".$website."<br>";
                // echo "Comment : ".$comment."<br>";
                // echo "Gender : ".$gender;
            }
            function validate($data){
                $data = trim($data);
                $data = stripcslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
?>

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
       <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
       <table>
        <p style="color:red">* Required field</p>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name">*<?php echo $errname; ?></td>
            </tr>
            <tr>
                <td>E-mail</td>
                <td><input type="email" name="email">*<?php echo $erremail; ?></td>
            </tr>
            <tr>
                <td>Website</td>
                <td><input type="text" name="website">*<?php echo $errweb; ?></td>
            </tr>
            <tr>
                <td>Comment</td>
                <td><textarea name="comment" row="5" cols="40" ></textarea></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="gender" value="Male">Male
                    <input type="radio" name="gender" value="Female">Female
                    *<?php echo $errgender; ?>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Submit" name="Submit"></td>
            </tr>
        </table>
        </form>
    </section>
    <section class="footerOption">
        <h2><?php echo "PHP Fundamentals"; ?></h2>
    </section>
</div>
   
</body>
</html>