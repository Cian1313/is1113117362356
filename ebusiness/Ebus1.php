<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css"/>
        <link rel="stylesheet" href="business.css" type="text/css"/>
        
    </head>
    
    <body>
        
        <h1 class="header">Products</h1>
        
        <div class="formpage">
        <h3>Select a Product</h3>
        
        <br/>
        
        <form method="POST" action="Ebus2.php">
            <lable for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                Salesforce @ $100
            </lable>
            
            <br/>
            <br/>
            
            <lable for="Amazon Web Services">
                <input type="radio" id="Amazon Web Services" name="product" onClick="disablebtnProceed()"/>
                AWS @ $300
            </lable>
            
            <br/>
            <br/>
            
            <lable for="Cloud 9">
                <input type="radio" id="Cloud 9" name="product" onClick="disablebtnProceed()"/>
                Cloud9 @ $200
            </lable>
            
            <br/>
            <br/>
            
            <lable for="Gmail">
                <input type="radio" id="Gmail" name="product" onClick="disablebtnProceed()"/>
                Gmail @ $400
            </lable>
            
            <br/>
            <br/>
            <br/>
            
            <lable for="subtotal">
                Sub Total:
                <input type="text"  id="subtotal" value="0.00" readonly/>
            </lable>
            
            <br/>
            <br/>
            <br/>
            
            <lable for="discount">
                Discount @ 5%:
                <input type="text"  id="discount" value="0.00" readonly/>
            </lable>
            
            <br/>
            <br/>
            <br/>
            <lable for="vat">
                VAT @ 10%:
                <input type="text"  id="vat" value="0.00" readonly/>
            </lable>
            
            <br/>
            <br/>
            <br/>
            
            <lable for="total">
                Total:
                <input type="text" id="total" value="0.00" readonly/>
            </lable>
            
            <br/>
            <br/>
            <br/>
            
            <button type="submit" id="btnProceed" class="cart" hidden>Add to Shopping Cart</button>
            
        </form>
        
        
        <br/>
        <br/>
        <button onClick="calcSub()" class="determine">Calculate Cost</button>
        <a role="button" href="Ebus1.php" class="clear">Clear Choice</a>
        </div>
    </body>
</html>    