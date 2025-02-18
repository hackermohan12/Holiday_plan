<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Book Your Trip</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">Travel.</a>

   <nav class="navbar">
      <a href="home.php">Home</a>
      <a href="about.php">About</a>
      <a href="package.php">Packages</a>
      <a href="book.php">Book</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>Book Now</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">Book Your Trip!</h1>

   <form action="book_form.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>Name:</span>
            <input type="text" placeholder="Enter your full name" name="name" required>
         </div>
         <div class="inputBox">
            <span>Email:</span>
            <input type="email" placeholder="Enter your email address" name="email" required>
         </div>
         <div class="inputBox">
            <span>Phone:</span>
            <input type="number" placeholder="Enter your contact number" name="phone" required>
         </div>
         <div class="inputBox">
            <span>Address:</span>
            <input type="text" placeholder="Enter your residential address" name="address" required>
         </div>
         <div class="inputBox">
            <span>Destination:</span>
            <input type="text" placeholder="Where do you want to go?" name="location" required>
         </div>
         <div class="inputBox">
            <span>Guests:</span>
            <input type="number" placeholder="Number of people" name="guests" required min="1">
         </div>
         <div class="inputBox">
            <span>Arrival Date:</span>
            <input type="date" name="arrivals" required>
         </div>
         <div class="inputBox">
            <span>Departure Date:</span>
            <input type="date" name="leaving" required>
         </div>
      </div>

      <input type="submit" value="Submit" class="btn" name="send">

   </form>

</section>

<!-- booking section ends -->

<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>Quick Links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> Home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> About</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> Packages</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> Book</a>
      </div>

      <div class="box">
         <h3>Extra Links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> Ask Questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> About Us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> Privacy Policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> Terms of Use</a>
      </div>

      <div class="box">
         <h3>Contact Info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> support@travel.com </a>
         <a href="#"> <i class="fas fa-map"></i> Mumbai, India - 400104 </a>
      </div>

      <div class="box">
         <h3>Follow Us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> Facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> Twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> Instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> LinkedIn </a>
      </div>

   </div>

   <div class="credit"> Created by <span>Mr. Web Designer</span> | All Rights Reserved! </div>

</section>

<!-- footer section ends -->

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
