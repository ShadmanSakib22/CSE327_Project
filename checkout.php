<?php
session_start();
include 'config.php';

if (isset($_POST['checkout'])) {
   $username = $_POST['username'];
   $address = $_POST['address'];
   $phoneNumber = $_POST['phone_number'];

   // Insert data into checkout table
   $cartSql = "SELECT * FROM cart WHERE username = '$username'";
   $cartResult = mysqli_query($conn, $cartSql);

   while ($cartRow = mysqli_fetch_assoc($cartResult)) {
      $itemName = $cartRow['item_name'];
      $quantity = $cartRow['quantity'];
      $price = $cartRow['price'];

      $checkoutSql = "INSERT INTO checkout (username, itemName, quantity, price, address, phoneNumber) VALUES ('$username', '$itemName', '$quantity', '$price', '$address', '$phoneNumber')";

      if (mysqli_query($conn, $checkoutSql)) {
         // Data inserted into checkout table successfully
      } else {
         // Error occurred while inserting data into checkout table
         echo "Error: " . mysqli_error($conn);
         break;
      }
   }

   // Empty the cart table for the current user
   $emptyCartSql = "DELETE FROM cart WHERE username = '$username'";
   if (mysqli_query($conn, $emptyCartSql)) {
      // Cart emptied successfully
      echo "Checkout successful. Your cart has been emptied.";
   } else {
      // Error occurred while emptying the cart
      echo "Error: " . mysqli_error($conn);
   }
}
