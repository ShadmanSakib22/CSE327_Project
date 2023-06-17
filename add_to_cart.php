<?php
session_start();
include 'config.php';

if (isset($_POST['submit'])) {
   $username = $_POST['username'];
   $itemName = $_POST['item_name'];
   $quantity = $_POST['quantity'];
   $price = $_POST['price'];

   // Calculate total price
   $totalPrice = $price * $quantity;

   // Insert item into cart table
   $sql = "INSERT INTO cart (username, itemName, quantity_, price) VALUES ('$username', '$itemName', '$quantity', '$totalPrice')";
   if (mysqli_query($conn, $sql)) {
      // Item added to cart successfully
      $message = "Item added to cart sucessfully.";
      echo "<script type='text/javascript'>alert('$message');</script>";
      header('location:orders.php');
   } else {
      $message = "Unexpected Error Occured, Please Try Again Later.";
      echo "<script type='text/javascript'>alert('$message');</script>";
      header('location:orders.php');
   }
}
