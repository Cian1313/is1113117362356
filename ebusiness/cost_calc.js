/* global $ */
//We must calculate VAT and discount ourself

function calcSub()
{
    var argSubTotal; //Creates Variable
    
    if(document.getElementById('salesforce').checked)
    {
        argSubTotal = 100; //If salesforce is checked the variable = 100
    }//End if statement
    
    if(document.getElementById('Amazon Web Services').checked)
    {
        argSubTotal = 300;
    }//End if statement
    
    if(document.getElementById('Cloud 9').checked)
    {
        argSubTotal = 200;
    }//End if statement
    
    if(document.GetElementById('Gmail').checked)
    {
        argSubTotal = 400;
    }//End if statement
    
    display(argSubTotal) //Passing variable in the display function
}

function display(parm1) //parm1 equals value of argSubTotal
{
    
    document.getElementById("subtotal").value = parm1;
    document.getElementById("total").value = parm1;
    
    enablebtnProceed();
}

function enablebtnProceed()
{
    $('#btnProceed').prop('disabled', false);//find btnProceed go into properties and enable btn
}

function disablebtnProceed()
{
    $('#btnProceed').prop('disabled', true);
}
