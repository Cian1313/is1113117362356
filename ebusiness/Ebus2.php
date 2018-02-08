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
        <h3>Please enter you payment details</h3>
        
        <form action="EBus3.php" METHOD="POST">
            
            <lable for="name">Name</lable>
            <br/>
            <input type="text" id="name" maxlength="30"/>
            
            <br/>
            <br/>
            
            <lable for="email">Email</lable>
            <br/>
            <input type="text" id="email">
            
            <br/>
            <br/>
        
            <lable for="user_pin">PIN</lable>
           <br/>
            <input type="password" id="user_pin" placeholder="Card Pin" maxlength="4"/>
        
            <br/>
            <br/>
            
            <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
        </form>
        
        <br/>
        <button onClick="validateDetails()">Validate</button>
        
       <script type="text/javascript" src="ebus2_validator.js"></script>
    </body>
</html>

<!--Name + Email insert-->