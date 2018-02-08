<!DOCTYPE html>
<html>
    <head>
    <title>Enter Details</title>
    
     <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    
    <body>
        <h4>Please Enter Your Details</h4>
        
        <form action="EBus3.php" METHOD="POST">
        
            <lable for="user_pin">PIN</lable>
            <input type="password" id="user_pin" placeholder="Card Pin" maxlength="4"/>
        
            <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
        </form>
        
        <br/>
        <button onClick="validateDetails()">Validate</button>
        
       <script type="text/javascript" src="ebus2_validator.js"></script>
    </body>
</html>

<!--Name + Email insert-->