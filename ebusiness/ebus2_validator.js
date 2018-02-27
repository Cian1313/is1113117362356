/* global $ */

// functuon to validate the customers details
function validateDetails()
{
    var name, email, addressline1, town, county, card, pin;
    
    name = document.getElementById("name").value;
    email = document.getElementById("email").value;
    addressline1 = document.getElementById("addressline1").value;
    town = document.getElementById("town").value;
    county = document.getElementById("county");
    card = document.getElementById("card");
    pin = document.getElementById("user_pin").value;
    
    if(name == "" || email == "" || addressline1 == "" || town == "" || county == "" || card == "" || pin == "")
    {
        window.alert("Please ensure all required field are filled(*)");
            if(name == "")
            {
            document.getElementById("nameerror").innerHTML = "Name is required";
            }
            else
            {
             document.getElementById("nameerror").innerHTML = "";  
            }
            
            if(email == "")
            {
            document.getElementById("emailerror").innerHTML = "Email is required";
            }
            else
            {
             document.getElementById("emailerror").innerHTML = "";  
            }
            
            if(addressline1 == "")
            {
            document.getElementById("adderror").innerHTML = "Address line 1 is required";
            }
            else
            {
             document.getElementById("adderror").innerHTML = "";  
            }
            
            if(town == "")
            {
            document.getElementById("townerror").innerHTML = "Town is required";
            }
            else
            {
             document.getElementById("townerror").innerHTML = "";  
            }
            
            if(county == "")
            {
            document.getElementById("coerror").innerHTML = "County is required";
            }
            else
            {
             document.getElementById("coerror").innerHTML = "";  
            }
            
            if(card == "")
            {
            document.getElementById("carderror").innerHTML = "Card is required";
            }
            else
            {
             document.getElementById("carderror").innerHTML = "";  
            }
            
            if(pin == "")
            {
            document.getElementById("pinerror").innerHTML = "Pin is required";
            }
            else
            {
             document.getElementById("pinerror").innerHTML = "";  
            }
    }    
    else
    {
        enablebtnPurchase();
    }
    
}//End of function
   

function enablebtnPurchase()
{
    $('#btnPurchase').prop("hidden", false);
}//End of function

function disablebtnProceed()
{
    $('#btnPurchase').prop('hidden', true);
}//End of function