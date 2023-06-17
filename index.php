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
            <li><a href="#home">Home </a></li>
            <li><a href="#menu">Menu </a></li>
            <li><a href="#specials">Specials</a></li>
            <li><a href="#footer">Contact</a></li> <!-- contact info is written in the footer  -->
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="feedback.php">Feedback</a></li>
        </ul>

        <ul>
            <li><a href="login_form.php"><i class="fa-solid fa-user" style="color: #06A579;"></i> Login</a></li>
            <li><a href="orders.php"><i class="fa-solid fa-truck-fast" style="color: #06A579;"></i> Delivery</a></li>
        </ul>

    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="image">
            <img src="images/halal-first.jpeg" alt="">
        </div>

        <div class="content" data-aos="fade-up">
            <h3>Deliciously Convenient: Order Halal!</h3>
            <p>Welcome to Order Halal, your ultimate destination for mouthwatering halal cuisine! We take pride in
                offering you a delightful dining experience right at your doorstep. Whether you're craving the flavors
                of our rich and
                diverse menu or seeking the comfort of dining in our cozy restaurant, we have you covered.</p>

            <a href="orders.php" class="btn">explore now</a>
        </div>

    </section>

    <!-- home section ends -->

    <!-- Reservation form section starts  -->

    <section class="form-container" data-aos="zoom-in">

        <form action="reservation_form.php" method="POST">
            <div class="inputBox">
                <span>Phone Number</span>
                <input type="tel" name="phone_number" placeholder="01234567890">
            </div>

            <div class="inputBox">
                <span>Date</span>
                <input type="date" name="date">
            </div>

            <div class="inputBox">
                <span>Time</span>
                <input type="time" name="time">
            </div>

            <input type="submit" value="Click here to Reserve! You will receive a confirmation call from our operators." class="btn">
        </form>

    </section>

    <!-- Reservation form section ends -->

    <!-- menu section starts  -->

    <section class="menu" id="menu">

        <h1 class="heading"> Our <span>Set Meals</span> </h1>

        <div class="box-container">

            <div class="box" data-aos="fade-up">
                <div class="image">
                    <img src="images/vegeterian-thali.jpg" alt="">
                    <h3> <i class="fas fa-utensils"></i> Vegeterian </h3>
                </div>
                <div class="content">
                    <p>Meal consisting of a variety of vegetarian dishes, includes tandoori, rice, curry etc.
                    </p>
                    <a href="orders.php" class="btn"> Order now</a>
                </div>
            </div>

            <div class="box" data-aos="fade-up">
                <div class="image">
                    <img src="images/fried-platter.webp" alt="">
                    <h3> <i class="fas fa-utensils"></i> Non-Vegeterian </h3>
                </div>
                <div class="content">
                    <p>Variety of fried food, includes fried chicken, fried rice, roti, curry, chuttney etc.</p>
                    <a href="orders.php" class="btn"> Order now</a>
                </div>
            </div>

            <div class="box" data-aos="fade-up">
                <div class="image">
                    <img src="images/fastfood.jpg" alt="">
                    <h3> <i class="fas fa-utensils"></i> Fast food </h3>
                </div>
                <div class="content">
                    <p>Bountiful of yummy fastfoods, includes chicken shawrma, beef burgers & chips etc.</p>
                    <a href="orders.php" class="btn"> Order now</a>
                </div>
            </div>

            <div class="box" data-aos="fade-up">
                <div class="image">
                    <img src="images/seafood-dish.jpg" alt="">
                    <h3> <i class="fas fa-utensils"></i> Sea food </h3>
                </div>
                <div class="content">
                    <p>Excuisite Seafood dish, large prawns prepared with extreme care.</p>
                    <a href="orders.php" class="btn"> Order now</a>
                </div>
            </div>

            <div class="box" data-aos="fade-up">
                <div class="image">
                    <img src="images/chinese.jpg" alt="">
                    <h3> <i class="fas fa-utensils"></i> Chinese cuisine </h3>
                </div>
                <div class="content">
                    <p>Our chinese cheff will bring you authentic flavors from china.</p>
                    <a href="orders.php" class="btn"> Order now</a>
                </div>
            </div>

            <div class="box" data-aos="fade-up">
                <div class="image">
                    <img src="images/desert.jpg" alt="">
                    <h3> <i class="fas fa-utensils"></i> Sweet tooth </h3>
                </div>
                <div class="content">
                    <p>Delicious deserts from donuts to ice-cream, we got you all covered.</p>
                    <a href="orders.php" class="btn"> Order now</a>
                </div>
            </div>

        </div>

    </section>

    <!-- menu section ends -->


    <!-- specials section starts  -->

    <section class="menu" id="specials">
        <h1 class="heading"> our daily <span>Specials</span> </h1>
        <div class="box-container">
            <div class="box" data-aos="fade-up">
                <div class="image" style="height: auto;">
                    <img src="images/fbpage.jpg" alt="">
                </div>
                <div class="content">
                    <p>Discover our tantalizing daily specials exclusively curated for our esteemed customers.
                        Indulge in the finest flavors
                        and savor our chef's carefully crafted dishes. Visit our page regularly as we update it
                        daily with new and exciting
                        offerings. Relish in the fun dishes we have for you!
                    </p>
                    <div style="display: flex; justify-content: center;">
                        <a href="#" class="btn" style="margin-right: 10px;">Link to page</a>
                        <a href="orders.php" class="btn">Order now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- specials section ends -->


    <!--Gallery section statrs-->

    <section class="menu" id="gallery">
        <h1 class="heading"><span>Gallery</span> </h1>
        <div class="box-container">
            <div class="box" data-aos="fade-up">
                <div class="image" style="height: auto;">
                    <img src="images/exterior.jpg" alt="">
                    <h3> Exterior </h3>
                </div>
                <div class="image" style="height:auto;">
                    <img src="images/interior.jpg" alt="">
                    <h3> Interior </h3>
                </div>
                <div class="image" style="height: auto;">
                    <img src="images/kitchen.jpg" alt="">
                    <h3> Kitchen </h3>
                </div>
                <div class="image" style="height: auto;">
                    <img src="images/cheff.webp" alt="">
                    <h3> Cheffs </h3>
                </div>
            </div>
        </div>
    </section>

    <!--Gallery section ends-->

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
    @include 'reservation_form.php';
    ?>

</body>

</html>