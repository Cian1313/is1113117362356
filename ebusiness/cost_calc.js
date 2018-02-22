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
    
  //Passing variable in the display function
    calcDisVatTotal(argSubTotal)
}

// This function calculates the VAT and discount amounts
function calcDisVatTotal(parmSubTotal)
{
    var argSubTotal, argDiscountAmt, subMinusDis, argVatAmt, argTotalPrice;
    
    argSubTotal=parmSubTotal
    
    argDiscountAmt = argSubTotal * 0.05
    subMinusDis = argSubTotal - argDiscountAmt
    argVatAmt = subMinusDis * 0.1
   argTotalPrice = subMinusDis + argVatAmt
    
   display(argSubTotal, argDiscountAmt, argVatAmt, argTotalPrice)
    
}

function display(parm1, parm2, parm3, parm4) //parm1 equals value of argSubTotal
{
    
    document.getElementById("subtotal").value = parm1;
    document.getElementById("discount").value = parm2;
    document.getElementById("vat").value = parm3;
    document.getElementById("total").value = parm4;
   
    
    showbtnProceed();
}

function showbtnProceed()
{
    $('#btnProceed').prop('hidden', false);//find btnProceed go into properties and enable btn
}

function hidebtnProceed()
{
    $('#btnProceed').prop('hidden', true);
}



// function showDis(parm3)
// {
//     document.getElementById("discount").value = parm3
// }

// function showVat(parm4)
// {
//     document.getElementById("vat").value = parm4
// }

// function showTotal(parm5)
// {
//     document.getElementById("total").value= parm5
// }