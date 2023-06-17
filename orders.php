<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['log_name'])) {
   header('location:login_form.php');
}

global $user;
$username = $_SESSION['log_name'];
$sql = "SELECT user_type FROM user_form Where name = '$username'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$user = $row['user_type'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">


   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file cdn link  -->
   <link rel="stylesheet" href="css/style.css">
</head>

<body>

   <!-- header section starts  -->

   <header class="header">

      <a href="#" class="logo"> <i class="fas fa-utensils"></i> Order-Halal </a>

      <ul>
         <li><a href="index.php">Home </a></li>
         <li><a href="#top">Top </a></li>
         <li><a href="#item">packages </a></li>
         <li><a href="#footer">Contact</a></li> <!-- contact info is written in the footer  -->
         <li><a href="feedback.php">Feedback</a></li>
      </ul>

      <ul>
         <li><a href="logout.php"><i class="fa-solid fa-user" style="color: #06A579;"></i> Logout</a></li>
         <li><a href="#checkout"><i class="fa-solid fa-truck-fast" style="color: #06A579;"></i> Checkout</a></li>
      </ul>

   </header>

   <!-- header section ends -->

   <!-- home section starts  -->

   <section class="home" id="top">

      <div class="content" data-aos="fade-up" style="padding-top: 20px;">
         <h3>Logged in as: <span><?php echo $_SESSION['log_name'] ?></span></h3>
         <p>Enter the quantity of the set you want and proceed to checkout. <br>
            Enter your billing address & phone number and wait for a call to confirm order. <br>
            Please note your order was not processed if you do not recieve a call from us. <br>
            Thank You. </p>
      </div>

   </section>

   <!-- home section ends -->

   <!-- item section starts  -->
   <section class="menu" id="item">

      <h1 class="heading"> Our <span>Set Meals</span> </h1>

      <div class="box-container">

         <?php
         // Fetching items from the database
         $sql = "SELECT * FROM items";
         $result = mysqli_query($conn, $sql);

         // Loop through the items and display them
         while ($row = mysqli_fetch_assoc($result)) {
            $itemName = $row['item_name'];
            $price = $row['price'];
            $image = $row['image_url'];

         ?>
            <div class="box" data-aos="fade-up">
               <div class="image">
                  <img src="<?php echo $image; ?>" alt="<?php echo $itemName; ?>">
               </div>
               <div class="content">
                  <p style="color:orange"><?php echo $itemName; ?></p>
                  <p>Price: $<?php echo $price; ?></p>
                  <form action="add_to_cart.php" method="POST">
                     <input type="hidden" name="username" value="<?php echo $_SESSION['log_name']; ?>">
                     <input type="hidden" name="item_name" value="<?php echo $itemName; ?>">
                     <input type="number" name="quantity" placeholder="0" style="background-color:bisque">
                     <input type="hidden" name="price" value="<?php echo $price; ?>">
                     <br><br>
                     <input type="submit" name="submit" value="Add to Cart" class="btn" style="margin:auto; flex:content">
                  </form>
                  <form action="remove_from_cart.php" method="POST">
                     <input type="hidden" name="item_name" value="<?php echo $itemName; ?>">
                     <input type="hidden" name="username" value="<?php echo $_SESSION['log_name']; ?>">
                     <br>
                     <input type="submit" name="remove" value="Remove from Cart" class="btn" style="margin:auto; flex:content">
                  </form>
               </div>
            </div>
         <?php } ?>

         <!-- Checkout Form -->
         <section class="form-container" data-aos="zoom-in">
            <form action="checkout.php" method="POST">
               <input type="hidden" name="username" value="<?php echo $_SESSION['log_name']; ?>">
               <input type="hidden" name="item_name" value="<?php echo $itemName; ?>">

               <div class="inputBox">
                  <span>Billing Address</span>
                  <input type="text" name="address" placeholder="Enter billing address" required>
               </div>

               <div class="inputBox">
                  <span>Phone Number</span>
                  <input type="tel" name="phone_number" placeholder="Enter phone number" required>
               </div>

               <input type="submit" name="checkout" value="Checkout" class="btn">
            </form>
         </section>
      </div>
   </section>
   <!-- item section ends -->


   <!-- footer section starts, aka Contact Us  -->

   <section class="footer" id="footer">

      <div class="box-container">

         <div class="box" data-aos="fade-up">
            <h3>About Us:</h3>
            <a>At Order Halal, we take pride in offering a wide variety of halal meals that cater to different
               tastes and
               preferences.</a>
            <a>Order Halal is committed to upholding the authenticity of halal food, and we source our
               ingredients
               from trusted
               suppliers. Your satisfaction is our top priority, and we strive to exceed your expectations with
               every order.</a>
         </div>

         <div class="box" data-aos="fade-up">
            <h3>Open During</h3>
            <a> <i class="fas fa-chevron-right"></i> Sunday: 9:00 AM - 9:00 PM</a>
            <a> <i class="fas fa-chevron-right"></i> Monday: 9:00 AM - 9:00 PM </a>
            <a> <i class="fas fa-chevron-right"></i> Tuesday: 9:00 AM - 6:00 PM</a>
            <a> <i class="fas fa-chevron-right"></i> Wednesday: 9:00 AM - 6:00 PM</a>
            <a> <i class="fas fa-chevron-right"></i> Thursday: 9:00 AM - 6:00 PM</a>
            <a> <i class="fas fa-chevron-right"></i> Friday: 3:00 PM - 11:00 PM</a>
            <a> <i class="fas fa-chevron-right"></i> Saturday: Closed</a>
         </div>

         <div class="box" data-aos="fade-up">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> Phone: 124-680-1214 </a>
            <a href="#"> <i class="fas fa-phone"></i> Phone: 123-456-7890 </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Address: 123 Mirpur-1, Dhaka </a>
            <a href="#"> <i class="fas fa-envelop"></i> Email: order.halal@gmail.com </a>
         </div>

         <div class="box" data-aos="fade-up">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
         </div>

      </div>

      <div class="credit"> © 2023 <span>Order-Halal.</span> | All rights reserved. </div>

   </section>

   <!-- footer section ends -->






   <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

   <!--php form script-->

   <?php
   // Include the PHP script to handle form submission
   @include 'add_to_cart.php';
   ?>

</body>

</html>