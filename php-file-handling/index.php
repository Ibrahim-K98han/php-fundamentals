<?php
    include 'header.php';
?>


<section class='mainContent'>
    <?php
        // echo readfile("text.txt");

        //$ourFile = fopen("text.txt", "r") or die("File not found");
        //echo fread($ourFile,filesize("text.txt")); // show all line
        // echo fgets($ourFile,filesize("text.txt")); // show first line
        // echo fgetc($ourFile); // show only first character

        // while(!feof($ourFile)){
        //     echo fgets($ourFile)."<br>"; // read all line by line
        // }
        // fclose($ourFile);

        // while(!feof($ourFile)){
        //     echo fgetc($ourFile)."<br>"; // read all character by character
        // }
        // fclose($ourFile);


        //create file
        // $createFile = fopen("new.txt", "w") or die("File not found");
        // $one = "Bangladesh\n";
        // fwrite($createFile, $one);
        // $two = "Pakistan\n";
        // fwrite($createFile, $two);
        // fclose($createFile);

        //file upload
        
        if(isset($_FILES['image'])){
            $fileName = $_FILES['image']['name'];
            $fileTemp = $_FILES['image']['tmp_name'];
            move_uploaded_file($fileTemp, "images/".$fileName);
            echo "Image Uploaded Successfully";
        }

    ?>

    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST" enctype="multipart/form-data">
        <input type="file" name="image">
        <input type="submit" value="Submit">
    </form>
</section>



<?php
    include 'footer.php';
?>