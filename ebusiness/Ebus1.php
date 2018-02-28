<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!--Linking to an external javascript file which contain the functions which calculates the total-->
        <script type="text/javascript" src="cost_calc.js"></script>
        <!--Linking to external css files-->
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css"/>
        <link rel="stylesheet" href="business.css" type="text/css"/>
    </head>
    
    <body>
        <h1 class="header3">Products</h1>
        
        <div class="formpage">
            <h3>Select a Product</h3>

            <br/>
            
            <form method="POST" action="Ebus2.php">
                
                <!--Radio buttons for differnt products-->
                <label for="salesforce">
                    <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                    Salesforce @ $100
                </label>
                
                <br/>
                <br/>
                
                <label for="Amazon Web Services">
                    <input type="radio" id="Amazon Web Services" name="product" onClick="disablebtnProceed()"/>
                    AWS @ $300
                </label>
                
                <br/>
                <br/>
                
                <label for="Cloud 9">
                    <input type="radio" id="Cloud 9" name="product" onClick="disablebtnProceed()"/>
                    Cloud9 @ $200
                </label>
                
                <br/>
                <br/>
                
                <label for="Gmail">
                    <input type="radio" id="Gmail" name="product" onClick="disablebtnProceed()"/>
                    Gmail @ $400
                </label>
                
                <br/>
                <br/>
                <br/>
                
                <!--Text box for subtotal with lable-->
                <label for="subtotal">
                    Sub Total:
                    <input type="text"  id="subtotal" value="0.00" readonly/>
                </lable>
                
                <br/>
                <br/>
                <br/>
                
                <!--Text box for discount amount with lable-->
                <label for="discount">
                    Discount @ 5%:
                    <input type="text"  id="discount" value="0.00" readonly/>
                </label>
                
                <br/>
                <br/>
                <br/>
                
                <!--Text-box for vat amount with label-->
                <label for="vat">
                    VAT @ 10%:
                    <input type="text"  id="vat" value="0.00" readonly/>
                </label>
                
                <br/>
                <br/>
                <br/>
                
                <!--Text-box for total amount-->
                <label for="total">
                    Total:
                    <input type="text" id="total" value="0.00" name="total" readonly/>
                </label>
                <br/>
                <button type="submit" id="btnProceed" class="cart" hidden>Add to Shopping Cart</button>
                
            </form>
        
            <br/>
            <br/>
            
            <!--When button is clicked calls calcSub() function to determine cost-->
            <button onClick="calcSub()" class="determine">Calculate Cost</button>
            
            <!--Clears form-->
            <a role="button" href="Ebus1.php" class="clear">Clear Choice</a>
        </div>
    </body>
</html>    