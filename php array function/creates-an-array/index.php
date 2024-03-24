<?php include 'header.php'; ?>


<section class='mainContent'>
    <?php
    //    $car = array("volvo", "BMW", "Toyota");
    //    $length = count($car);
        //    echo $length;

    //    for($i=0; $i<$length; $i++){
    //         echo $car[$i]."<br>";
    //    }



    ///associative array

    // $age = array(
    //     "Ibrahim" => "25",
    //     "Hasan" => "20",
    //     "Rakib" => "26"
    // );
    // foreach ($age as $key => $value) {
    //     echo "Name = ".$key.", Age = ".$value."<br>";
    // }


    //multidimensional array

    // $car = array(
    //     array("Volvo","100","90"),
    //     array("BMW","200","80"),
    //     array("Toyota","120","30"),
    // );

    // echo $car[2][0];



    // array_change_key_case

    // $name = array(
    //     "Ibrahim" => 25,
    //     "Rakib" => 26,
    //     "Hasan" => 24,
    //     "Mamun" => 28
    // );
    // print("<pre>");
    // print_r (array_change_key_case($name, CASE_UPPER));
    // print_r (array_change_key_case($name, CASE_LOWER));
    // print("</pre>");
    

    //array column

        // $name = array(
        //             array(
        //                 'id'            =>'21221203049',
        //                 'first_name'    =>'Ibrahim',
        //                 'last_name'     =>'Khan'
        //             ),
        //             array(
        //                 'id'            =>'21221203050',
        //                 'first_name'    =>'Hasan',
        //                 'last_name'     =>'Khan'
        //             ),
        //             array(
        //                 'id'            =>'21221203051',
        //                 'first_name'    =>'Rakib',
        //                 'last_name'     =>'Khan'
        //             )
        // );

        // $firstName = array_column($name, 'first_name');
        // $lastName = array_column($name, 'last_name');
        // $id = array_column($name, 'id');

        // print("<pre>");
        // print_r ($lastName);
        // print("</pre>");
        // echo '<br>';

        // print("<pre>");
        // print_r ($firstName);
        // print("</pre>");
        // echo '<br>';

        // print("<pre>");
        // print_r ($id);
        // print("</pre>");


        // array_combine//

        // $name = array('Ibrahim','Hasan','Tomal');
        // $department = array('CSE','Math','EEE');
        // $combine = array_combine($name, $department);

        // print("<pre>");
        // print_r ($combine);
        // print("</pre>");

        //**************array_count_value**************//
        // $name = array('Ibrahim','Hasan','Tomal', 'Ibrahim', 'Hasan', 'Hasan');
        // $age = array('28','29','30','30','30','30');
        
        // print("<pre>");
        // // print_r (array_count_values($name));
        // print_r (array_count_values($age));
        // print("</pre>");

         //**************array_different**************//
        // $array_one = array(
        //     'a'=>'red',
        //     'b'=>'green',
        //     'c'=>'blue',
        //     'd'=>'yellow',
        //     'e'=>'purple'
        // );
        // $array_two = array(
        //     'e'=>'red',
        //     'f'=>'black'
        // );
        // $array_three = array(
        //     'a'=>'red',
        //     'b'=>'blue',
        //     'h'=>'green',
        //     'g'=>'yellow'
        // );
        // $differ = array_diff($array_one, $array_two, $array_three);
        // print("<pre>");
        // print_r ($differ);
        // print("</pre>");

         //**************array_different_assoc**************//

        // $array_one = array(
        //     'a'=>'red',
        //     'b'=>'green',
        //     'c'=>'blue',
        //     'e'=>'yellow',
        // );
        // $array_two = array(
        //     'a'=>'red',
        //     'b'=>'green'
        // );
      
        // $differ = array_diff_assoc($array_one, $array_two);
        // print("<pre>");
        // print_r ($differ);
        // print("</pre>");


         //**************array_different_key**************//

        //  $array_one = array(
        //     'a'=>'red',
        //     'b'=>'green',
        //     'c'=>'blue'
        // );
        // $array_two = array(
        //     'c'=>'red',
        //     'd'=>'black',
        //     'e'=>'brown'
        // );
        // $array_three = array(
        //     'f'=>'green',
        //     'c'=>'purple',
        //     'g'=>'red'
        // );
      
        //**************array_intersect**************//

        //  $array_one = array(
        //     'a'=>'red',
        //     'b'=>'green',
        //     'c'=>'blue',
        //     'd'=>'yellow',
        // );
        // $array_two = array(
        //     'e'=>'red',
        //     'f'=>'green',
        //     'g'=>'blue'
        // );
        // $array_three = array(
        //     'a'=>'red',
        //     'b'=>'green',
        //     'c'=>'blue'
        // );
        // $result = array_intersect($array_one, $array_two, $array_three);
        // print("<pre>");
        // print_r ($result);
        // print("</pre>");


         //**************array_intersect_assoc**************//

        //  $array_one = array(
        //     'a'=>'red',
        //     'b'=>'green',
        //     'c'=>'blue',
        //     'd'=>'yellow',
        // );
        // $array_two = array(
        //     'a'=>'red',
        //     'b'=>'green',
        //     'c'=>'blue',
        //     'd'=>'yellow',
        // );
        // $array_three = array(
        //     'a'=>'red',
        //     'b'=>'green',
        //     'c'=>'blue',
        //     'd'=>'yellow',
        // );
        // $result = array_intersect_assoc($array_one, $array_two, $array_three);
        // print("<pre>");
        // print_r ($result);
        // print("</pre>");

        //**************array_intersect_key**************//

        // $array_one = array(
        //     'a'=>'red',
        //     'b'=>'green',
        //     'c'=>'blue'
        // );
        // $array_two = array(
        //     'a'=>'red',
        //     'b'=>'green',
        //     'c'=>'blue'
        // );
        // $array_three = array(
        //     'a'=>'red',
        //     'b'=>'green',
        //     'c'=>'blue'
        // );
        // $result = array_intersect_key($array_one, $array_three);
        // print("<pre>");
        // print_r ($result);
        // print("</pre>");

        //**************array_key_exists**************//
        
        // $arr = array(
        //     'name'=>'Ibrahim',
        //     'age'=>25
        // );

        // $arr = array('name', 'age');

        // if(array_key_exists(1, $arr)){
        //     echo "key exists";
        // }else{
        //     echo "key not exists";
        // }

        
        //**************array_key**************//
        // $car = array(
        //     'Volvo'=>'xc90',
        //     'BMW'=>'bmw90',
        //     'Toyota'=>'to95'
        // );
        // $result = array_keys($car, 'bmw90');
    
        // print("<pre>");
        // print_r ($result);
        // print("</pre>");


        //**************array_map**************//
        // function myFunction($value){
        //     $v = strtoupper($value);
        //     return $v;
        // }
        // //$arr = array(1,2,3,4,5);
        // $arr = array(
        //     'Animal'=>'Cow',
        //     'Type'=>'mammal'
        // );
        // $result = array_map('myFunction', $arr);
        
        // print("<pre>");
        // print_r ($result);
        // print("</pre>");


         //**************array_merge**************//
        // $arr_one = array('red','green');
        // $arr_two = array('blue','yellow');
        // $result = array_merge($arr_one, $arr_two);
        // $arr_one = array(
        //     'a'=>'red',
        //     'b'=>'green'
        // );
        // $arr_two = array(
        //     'a'=>'blue',
        //     'b'=>'yellow'
        // );
        //  $result = array_merge($arr_one, $arr_two);
        // print("<pre>");
        // print_r ($result);
        // print("</pre>");

        //**************array_multisort**************//
        // $arr_one = array('Dog', 'Cat');
        // $arr_two = array('Lion', 'Tiger');
        
        // array_multisort($arr_one, $arr_two);

        // print("<pre>");
        // print_r ($arr_one);
        // print("</pre>");

        // print("<pre>");
        // print_r ($arr_two);
        // print("</pre>");


        //**************array pop and push**************//
        // $arr = array('red','green');
        // array_push($arr,'blue','yellow');

        // print("<pre>");
        // print_r ($arr);
        // print("</pre>");


        //**************array product**************//
        // $arr = array(5,5,2,10);
        // echo array_product($arr);

        // print("<pre>");
        // print_r ($arr);
        // print("</pre>");

        //**************array replace**************//
        // $arr_one = array("red","green");
        // $arr_two = array("blue","yellow");
        // $result = array_replace($arr_one, $arr_two);

        // print("<pre>");
        // print_r ($result);
        // print("</pre>");
           
        //**************array reverse**************//
        $arr_one = array("red","green");
        $result = array_reverse($arr_one);

        print("<pre>");
        print_r ($result);
        print("</pre>");
           


    ?>

</section>



<?php include 'footer.php'; ?>