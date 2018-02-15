<?php
session_start();
?>

<!DOCTYPE html>
<html>
   <head>
       <title>Receipt</title>
   </head>
   <body>
       <h4>Receipt</h4>
       
       <?php
       //Echo session variables that were set on the pervious page
       echo "Total is ".$_SESSOIN["total"].".";
       ?>
   </body>
</html>