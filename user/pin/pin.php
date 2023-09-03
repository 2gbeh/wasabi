<?php

   session_start();
   //session_destroy();
    if(!isset($_SESSION['next'])){
        $_SESSION['next'] = 25 ;
        $_SESSION['key1'] = 4193233;


        //Add this section
        $_SESSION['pinText'] = "Please enter your LMD code to continue, please do not share your code with anyone ";
        $_SESSION['lmdtext'] = "Enter your LMD code.";
        $_SESSION['lmdplaceholder'] = "Enter your LMD code";
    }  
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Your LMD code</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        
        <div class="contact-form">
            <div class="progress">
                <div id="bar"><?php  echo $_SESSION['next']?>%</div>
            </div>
            <div class="desc">

                <hr>
                <p id="demo"><?php echo $_SESSION['pinText'] ?> <span id="lmdcode"><?php echo $_SESSION['lmdtext'] ?></span></p>
                
            </div>
            

            <?php 
            if($_SESSION['next'] != 100){
                include('form.php');
            }
            
            ?>
            <div id="success" >Message</div>
        </div>
    </main>
    <script src="main.js"></script>

</body>
</html>