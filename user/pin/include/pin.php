<?php

session_start();

    $first_key = "4193233";
    $second_key = "0777216";
    $third_key = "0672345";
    $increase_interval = array(50,75,100);
    $inputKey = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $inputKey = $_POST['input_value'];

        if(!empty($inputKey)){

            if ($inputKey == $_SESSION['key1'] ){
                echo "Successful"; 
                $_SESSION['next'] = 50;
                $_SESSION['key2'] = $second_key;


            
                //Set your desired text here
                $_SESSION['lmdtext'] = "Enter your SNC code."; //Make changes here
                $_SESSION['pinText'] = "Please enter your SNC code to continue, please do not share your code with anyone ";
     
            }
            else if ($inputKey == $_SESSION['key2']) {
                echo "Successful"; 
                $_SESSION['next'] = 75;
                $_SESSION['key3'] = $third_key;


                //Set your desired text here
                $_SESSION['lmdtext'] = "Enter your Confirmation code."; //Make changes here
                $_SESSION['pinText'] = "Please enter your CONFIRMATION code to continue, please do not share your code with anyone ";
 
            }
            else if ($inputKey == $_SESSION['key3']) {
                echo "Successful"; 
                $_SESSION['next'] = 100;
   
                //Set your desired text here
                $_SESSION['lmdtext'] = "You have successfully enter your 3 code";
                $_SESSION['pinText'] = "WELLDONE!"; //Make changes here
 
            }
            else{
                echo "Not Successful";
            }
            
        } 

    }













    



// $car = "Hello";
// $response = "";




// $key = array(4193233, 0777216, 0672345);
// $inputKey= "";

// if($_SERVER['REQUEST_METHOD'] == 'POST'){
//     $inputKey = $_POST['key'];
    
//     if(!empty($inputKey) && $inputKey == $key[0]){
//         $response = "success";
//     }
    
// }

// if (isset($_GET['name'])) {
//     echo 'GET: Your name is'. $_GET['name'];

// }
// echo json_encode($response);


    // $_POST = json_decode(file_get_contents("php://input"),true);