/* global $ */

// functuon to validate the customers details
function validateDetails()
{
    var name, email, addressline1, town, county, card, pin, colour;
    
    name = document.getElementById("name").value;
    email = document.getElementById("email").value;
    addressline1 = document.getElementById("addressline1").value;
    town = document.getElementById("town").value;
    county = document.getElementById("county");
    card = document.getElementById("card");
    pin = document.getElementById("user_pin").value;
    colour == rgb(255, 0, 0)
    
    if(name == "" || email == "" || addressline1 == "" || town == "" || county == "" || card == "" || pin == "")
    {
        window.alert("Please ensure all required field are filled(*)");
            if(name == "")
            {
                document.getElementById("name").background == colour
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