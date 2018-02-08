/* global $ */

// This function calculates the subtotal amiount based on product selected
function calcSub()
{
    var argSubTotal; //Creates Variable
    
    if(document.getElementById('salesforce').checked)
    {
        argSubTotal = 100; //If salesforce is checked the variable = 100
    }//End if statement
    
    else if (document.getElementById('Amazon Web Services').checked)
    {
        argSubTotal = 300;
    }//End if statement
    
    else if(document.getElementById('Cloud 9').checked)
    {
        argSubTotal = 200;
    }//End if statement
    
    else  
    {
        argSubTotal = 400;
    }//End if statement
    
    display(argSubTotal) //Passing variable in the display function
    calcDisVatTotal(argSubTotal)
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

// This function calculates the VAT and discount amounts
function calcDisVatTotal(parmSubTotal)
{
    var argDiscount, subMinusDis, argVat, argTotal;
    
    argDiscount = parmSubTotal * 0.05
    subMinusDis = parmSubTotal - argDiscount
    argVat = subMinusDis * 0.1
   argTotal = subMinusDis + argVat
    
    showDis(argDiscount)
    showVat(argVat)
    showTotal(argTotal)
    
}

function showDis(parm3)
{
    document.getElementById("discount").value = parm3
}

function showVat(parm4)
{
    document.getElementById("vat").value = parm4
}

function showTotal(parm5)
{
    document.getElementById("total").value= parm5
}