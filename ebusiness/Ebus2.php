<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Enter Details</title>
    
     <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css"/>
        <link rel="stylesheet" href="business.css" type="text/css"/>
    </head>
    
    <body>
        
        <h1 class="header">Checkout</h1>
        
        <div class="formpage">
            <h3>Please enter you payment details</h3>
            
            <form action="Ebus3.php" METHOD="POST">
                
                <!--text-box for custmer to enter their name with a lable-->
                <lable for="name">Name:</lable>
                <input type="text" id="name" maxlength="30" name="name" placeholder="Your name..."required autofocus/>
                
                <br/>
                <br/>
                
                <!--text box for the customer to enter their name-->
                <lable for="email">Email:</lable>
                
                <input type="text" id="email" name="email" placeholder="Your email..." required>
                
                <br/>
                <br/>
                
                <!--text box for the customer to enter their name-->
                <lable for="user_pin">PIN:</lable>
             
                <input type="password" id="user_pin" placeholder="Your Pin..." maxlength="4" required/>
            
                <br/>
                <br/>
                
                <button type="submit" id="btnPurchase" class="cart" hidden>Proceed with Purchase</button>
            </form>
            
            <br/>
            <!--when the button calls the function validateDetails()-->
            <button onClick="validateDetails()" class="determine">Validate</button>
        </div>
       <script type="text/javascript" src="ebus2_validator.js"></script>
      <?php
       //Set session variables
       
       $_SESSION["total"] = $_POST["total"];
       ?>
       
    </body>
</html>

<!--Name + Email insert-->