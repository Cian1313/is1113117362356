/* global $ */

// functuon to validate the customers details
function validateDetails()
{
    // declare our variables
    var name, email, addressline1, town, card, pin;
    
    //assign values to our variables
    name = document.getElementById("name").value;
    email = document.getElementById("email").value;
    addressline1 = document.getElementById("addressline1").value;
    town = document.getElementById("town").value;
    card = document.getElementById("card");
    pin = document.getElementById("user_pin").value;
    
    //if statement to see if required fields are filled
    if(name == "" || email == "" || addressline1 == "" || town == "" || card == "" || pin == "")
    {
        //if any field not filled message box shows
        window.alert("Please ensure all required field are filled(*)");
            //Nested if statements to indacte to the user which fields are required if intially left blank
            //Code similar to this sourced from - https://stackoverflow.com/questions/15591829/user-text-input-with-an-if-statement?rq=1
            if(name == "")
            {
            document.getElementById("nameerror").innerHTML = "Name is required";
            }
            else
            {
             document.getElementById("nameerror").innerHTML = "";  
            }//End of if statement
            
            if(email == "")
            {
            document.getElementById("emailerror").innerHTML = "Email is required";
            }
            else
            {
             document.getElementById("emailerror").innerHTML = "";  
            }//End of if statement
            
            if(addressline1 == "")
            {
            document.getElementById("adderror").innerHTML = "Address line 1 is required";
            }
            else
            {
             document.getElementById("adderror").innerHTML = "";  
            }//End of if statement
            
            if(town == "")
            {
            document.getElementById("townerror").innerHTML = "Town is required";
            }
            else
            {
             document.getElementById("townerror").innerHTML = "";  
            }//End of if statement
            
            if(card == "")
            {
            document.getElementById("carderror").innerHTML = "Card is required";
            }
            else
            {
             document.getElementById("carderror").innerHTML = "";  
            }//End of if statement
            
            if(pin == "")
            {
            document.getElementById("pinerror").innerHTML = "Pin is required";
            }
            else
            {
             document.getElementById("pinerror").innerHTML = "";  
            }//End of if statement
    }    
    else
    {
        //if all required field filled btnPurchase is shown
        enablebtnPurchase();
    }//End of if statement
    
}//End of function
   

function enablebtnPurchase()
{
    $('#btnPurchase').prop("hidden", false);
}//End of function

function disablebtnProceed()
{
    $('#btnPurchase').prop('hidden', true);
}//End of function