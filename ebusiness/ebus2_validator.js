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
    
    if(name == "" || email == "" || addressline1 == "" || town == "" || county == "" || pin == "")
    {
        window.alert("Please ensure all required field are filled(*)");
            
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