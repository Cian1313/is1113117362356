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
       $_SESSION["name"] = $_POST["name"];
       $_SESSION["email"] = $_POST["email"];
       ?>
       
       <?php
       //Echo session variables 
       echo "Name: " . $_SESSION["name"] . "</br>";
       echo "Email: " . $_SESSION["email"] . "</br>";
       echo "Total: " . $_SESSION["total"];
       ?>
   </body>
</html>