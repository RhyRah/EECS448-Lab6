<?php

    $username = $_POST["username"];
    $password = $_POST["password"];
    $ballnum = $_POST["ballnum"];
    $billnum = $_POST["billnum"];
    $fpjnum = $_POST["fpjnum"];
    $ship = $_POST["ship"];

    $ballprice = 43.99;
    $billprice = 60.99;
    $fpjprice = 75.99;
    
    
    $ballcost = $ballnum * $ballprice;
    $billcost = $billnum * $billprice;
    $fpjcost = $fpjnum * $fpjprice;
    
   

    echo("Welcome ".$username."!<br>");
    echo("Here is your password: ".$password."<br><br>");
    echo("Here is your receipt, thank you for shopping!<br><br><br>");
    
    
    echo("            Quantity    Cost Per Item    Sub Total<br><br>"); 
    echo("Signed Ball ".$ballnum." ".$ballprice. " ".$ballcost."<br>");
    echo("Bill Self Poster ".$billnum." ".$billprice. " ".$billcost."<br>"); 
    echo("Fav Jersey ".$fpjnum." ".$fpjprice. " ".$fpjcost."<br>"); 
    echo("Shipping  <br>");

    
?>
