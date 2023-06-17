<?php
session_start();
include 'config.php';

if (isset($_POST['remove'])) {
   $username = $_POST['username'];
   $itemName = $_POST['item_name'];

   // Remove item from cart table
   $sql = "DELETE FROM cart WHERE username = '$username' AND itemName = '$itemName'";
   if (mysqli_query($conn, $sql)) {
      // Item added to cart successfully
      $message = "Item Removed from cart sucessfully.";
      echo "<script type='text/javascript'>alert('$message');</script>";
      header('location:orders.php');
   } else {
      $message = "Unexpected Error Occured, Please Try Again Later.";
      echo "<script type='text/javascript'>alert('$message');</script>";
      header('location:orders.php');
   }
}
