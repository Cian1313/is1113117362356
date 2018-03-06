<?php
session_start();
?>

<!DOCTYPE html>
<html>
   <head>
       <title>Receipt</title>
       <meta charset="utf-8">
       <!--Linking to external css files-->
       <link rel="stylesheet" href="../mystylesheet.css" type="text/css"/>
       <link rel="stylesheet" href="business.css" type="text/css"/>
       <!--Adding favicon-->
        <link rel="icon" href="../cloudServiceVendor/QuantumFav.PNG" type="image/gif" sizes="16x16">
        
   </head>
   <body>
       
       <h1 class="header3"> Payment Complete</h1>
       <div class="reciptpage">
           <h3>Purchase Receipt</h3>
           
           <?php
           //Setting session variables
           $_SESSION["name"] = $_POST["name"];
           $_SESSION["email"] = $_POST["email"];
           $_SESSION["addressline1"] = $_POST["addressline1"];
           $_SESSION["town"] = $_POST["town"];
           $_SESSION["county"] = $_POST["county"];
           ?>
           
           <?php
           //Echo session variables 
           echo "Name: " ." ".$_SESSION["name"] . "<br>";
           echo "Address: "." ".$_SESSION["addressline1"].", ".$_SESSION["town"].", ".$_SESSION["county"]."<br>"; 
           echo "Email: " ." ".$_SESSION["email"] . "<br>";
           echo "Total: " ." ".$_SESSION["total"];
           ?>
       
      </br>
      </br>
      <a href="../homepage.html" class="home">Home</a>
      </div>
   </body>
</html>