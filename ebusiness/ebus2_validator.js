/* global $ */

// functuon to validate the customers details
function validateDetails()
{
    var name, email, addressline1, town, county, card, pin, error;
    
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
                document.getElementById("error").value = "Name is required"
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