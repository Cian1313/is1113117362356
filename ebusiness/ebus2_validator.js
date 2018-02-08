/* global $ */

function validateDetails()
{
    var pin, name, email;

    pin = document.getElementById("user_pin").value;
    name = document.getElementById("name").value;
    email = document.getElementById("email").value;
    
    if(pin == "" && name =="" && email == "")
    {
        alert("Please enter your details");
    }
    else if(String(pin).length < 4 && name != "" && email !="")
    {
        alert("Please ensure your pin is entered correctly");
    }
    else if(String(pin).length == 4 && name == "" && email != "")
    {
        alert("Please enter your name");
    }
    else if(String(pin).length == 4 && name !="" && email =="")
    {
        alert("Please enter your email");
    }
    else if(String(pin).length < 4 && name == "" && email != "")
    {
        alert("Please enter your name and pin");
    }
    else if(String(pin).length < 4 && name != "" && email =="")
    {
        alert("Please enter your email and pin");
    }
    else if(String(pin).length == 4 && name == "" && email =="")
    {
        alert("Please enter your name and email");
    }   
    else
    {
        enablebtnPurchase();
    }
}    
   

function enablebtnPurchase()
{
    $('#btnPurchase').prop("hidden", false);
}

function disablebtnProceed()
{
    $('#btnPurchase').prop('hidden', true);
}