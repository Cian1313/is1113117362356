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
        <!--Adding favicon-->
        <link rel="icon" href="../cloudServiceVendor/QuantumFav.PNG" type="image/gif" sizes="16x16">
        <meta charset="utf-8">
    </head>
    
    <body>
        <h1 class="header3">Checkout</h1>
        
        <div class="formpage">
            <h3>Please enter you payment details</h3>
            <h4>Personal Details</h4>
            
            <form name="productform" action="Ebus3.php" METHOD="POST">
                
                <!--text-box for custmer to enter their name with a lable-->
                <label for="name">Name: *</label><br/>
                <input type="text" id="name" maxlength="30" name="name" placeholder="Your name..." required/><p id="nameerror" style="color:red"></p>
                
                <br/>
                <br/>
                
                <!--text box for the customer to enter their name-->
                <label for="email">Email: *</label><br/>
                <input type="text" id="email" name="email" pattern="[^ @]*@[^ @]*" placeholder="Your email..." required/><p id="emailerror" style="color:red "></p>
                
                <br/>
                <br/>
                
                <!--text boxs for customer to enter address-->
                <label>Address: *</label><br/>
                <input type="text" id="addressline1" name="addressline1" placeholder="Address line 1" required/><p id="adderror" style="color:red"></p><br/>
                <input type="text" id="addressline2" name="addressline2" placeholder="Address line 2"/><br/><br/>
                <input type="text" id="town" name="town" placeholder="Town/City" required/><p id="townerror" style="color:red"></p><br/>
                <input type="text" id="county" name="county" placeholder="County"/>
                
                <br/>
                <br/>
                
                <h4>Payment Details</h4>
                <!--checkboxs for user to select which option they want to pay with-->
                <label>Select Payment Option: *</label><br/><br/>
                <input type="radio" name="card" value="visa" checked><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Visa_2014_logo_detail.svg/2000px-Visa_2014_logo_detail.svg.png" alt="visa" height="15"/>
                <input type="radio" name="card" value="mastercard"><img src="http://www.freelogovectors.net/wp-content/uploads/2016/12/mastercard-logo1.png" alt="mastercard" height="20"/>
                
                <br/>
                <br/>
                
                <!--text box for the customer to enter their name-->
                <label for="user_pin">PIN: *</label><br/>
                <input type="password" name="pin" id="user_pin" placeholder="Your Pin..." pattern="[0-9]{4}" maxlength="4" required/>
                <p id="pinerror" style="color:red"></p>
                
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