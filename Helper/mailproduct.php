<?php


/*
 */
 
 include "usern.php";
 include "sendmail.php";
 include "Http.php";
 use Helper\Http\Http as Http;
 
 
 $to="myonaingoo623@gmail.com";
 $subject="MNO Shop";

 
 foreach($products as $product){
   $pp=$product["id"];
   $mass1=$product["proname"];
   $mass2="buy the product";
   $mass3="please not buy the product";
   $massbuy="<h1 style='color:#ff0000;'>".$mass1.$mass2."</h1>";
   $massnbuy=$mass1.$mass3;

   
   if($_GET["pid"]==$product["id"]){
    sendmail($to,$subject,$massbuy);
    Http::redirect("product.php","pid=$pp&buy=buy");
    // header("location: product.php?pid=$pp&buy=buy");
   }elseif($_GET["nbuy"]==$product["id"]){
   sendmail($massnbuy);
    Http::redirect("product.php","pid=$pp");
    // header("location: product.php?pid=$pp");
   }
   
   
 }

 
 







?>
