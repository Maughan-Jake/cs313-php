<?php

//define the products, costs, description, price in arrays
$items = array("Rear Sprocket", "Fatty Bars", "Radiator Braces", "Auto Clutch");
$origCost = array(79.99, 100.00, 199.99, 599.99 );
$costs = array(49.99, 72.99, 129.99, 349.99);
$description = array(
  "This Sprocket is a long lasting durable Off-Road sprocket that was developed and tested over the course of 5 years.",
  "These fatty bars are 1 1/4' thick and made of lightweigh aluminum. Tested by the best riders in the world.",
  "Don't like bent radiators after a long ride? Us neither. Meet the all aluminum radiator braces. Made to withstand the roughest of crashes.",
  "Sick of stalling? Meet the auto clutch. garunteed to make stalling your bike near impossible. Perfect for beginner riders."
);
$imgs = array("images/sprocket.jpg", "images/fat-bars.jpg", "images/radiator-braces.jpg", "images/auto-clutch.jpg");



//Load up session
if ( !isset($_SESSION["total"]) ) {
    $_SESSION["total"] = 0;
    for ($i=0; $i< count($items); $i++) {
     $_SESSION["quantity"][$i] = 0;
    $_SESSION["costs"][$i] = 0;
   }
  }

//Add
if ( isset($_GET["add"]) ) {
  $i = $_GET["add"];
  $quantity = $_SESSION["quantity"][$i] + 1;
  $_SESSION["costs"][$i] = $costs[$i] * $quantity;
  $_SESSION["cart"][$i] = $i;
  $_SESSION["quantity"][$i] = $quantity;
}

//Delete
if ( isset($_GET["delete"]) ) {
  $i = $_GET["delete"];
  $quantity = $_SESSION["quantity"][$i];
  $quantity--;
  $_SESSION["quantity"][$i] = $quantity;

//remove item if quantity is zero
if ($quantity == 0 || $quantity < 0) {
  $_SESSION["costs"][$i] = 0;
  unset($_SESSION["cart"][$i]);
} else {
 $_SESSION["costs"][$i] = $costs[$i] * $quantity;
}}

?>