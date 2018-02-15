<?php
session_start();
?>

<!DOCTYPE html>
<html>
   <head>
       <title>Receipt</title>
       <link rel="stylesheet" href="../mystylesheet.css" type="text/css"/>
       <link rel="stylesheet" href="business.css" type="text/css"/>
   </head>
   <body>
       
       <h1 class="header"> Payment Complete</h1>
       <div class="reciptpage">
       <h3>Purchase Receipt</h3>
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
      <div> 
      </br>
      </br>
      <a href="../homepage.html" class="home">Home</a>
   </body>
</html>