<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>TravelWise - Explore the World</title>

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

   <a href="home.php" class="logo">TravelWise</a>

   <nav class="navbar">
      <a href="home.php">Home</a>
      <a href="about.php">About</a>
      <a href="package.php">Packages</a>
      <a href="book.php">Book Now</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
            <div class="content">
               <span>Explore, Discover, Travel</span>
               <h3>Travel Around the World</h3>
               <a href="package.php" class="btn">Discover More</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
            <div class="content">
               <span>Explore, Discover, Travel</span>
               <h3>Discover New Destinations</h3>
               <a href="package.php" class="btn">Discover More</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
            <div class="content">
               <span>Explore, Discover, Travel</span>
               <h3>Make Every Trip Memorable</h3>
               <a href="package.php" class="btn">Discover More</a>
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services">

   <h1 class="heading-title"> Our Services </h1>

   <div class="box-container">

      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>Adventure Tours</h3>
      </div>

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>Expert Tour Guides</h3>
      </div>

      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>Trekking Packages</h3>
      </div>

      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>Campfire Experiences</h3>
      </div>

      <div class="box">
         <img src="images/icon-5.png" alt="">
         <h3>Off-Road Trips</h3>
      </div>

      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>Camping & Lodging</h3>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="images/about-img.jpg" alt="">
   </div>

   <div class="content">
      <h3>About TravelWise</h3>
      <p>TravelWise is your trusted partner in exploring the world. From breathtaking landscapes to cultural experiences, we offer tailor-made travel packages to suit every wanderlust soul. Let us plan your next adventure!</p>
      <a href="about.php" class="btn">Read More</a>
   </div>

</section>

<!-- home about section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title"> Our Popular Packages </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/img-1.jpg" alt="">
         </div>
         <div class="content">
            <h3>Mountain Adventures</h3>
            <p>Experience the thrill of trekking through stunning mountain ranges and scenic trails.</p>
            <a href="book.php" class="btn">Book Now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-2.jpg" alt="">
         </div>
         <div class="content">
            <h3>Tropical Getaways</h3>
            <p>Relax on pristine beaches, explore tropical islands, and enjoy the ocean breeze.</p>
            <a href="book.php" class="btn">Book Now</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="images/img-3.jpg" alt="">
         </div>
         <div class="content">
            <h3>Historical Tours</h3>
            <p>Discover the rich history and cultural heritage of ancient civilizations.</p>
            <a href="book.php" class="btn">Book Now</a>
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="package.php" class="btn">Load More</a> </div>

</section>

<!-- home packages section ends -->

<!-- home offer section starts  -->

<section class="home-offer">
   <div class="content">
      <h3>Up to 50% Off</h3>
      <p>Enjoy incredible discounts on select travel packages. Book now and save big on your dream vacation!</p>
      <a href="book.php" class="btn">Book Now</a>
   </div>
</section>

<!-- home offer section ends -->

<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>Quick Links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> Home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> About</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> Packages</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> Book Now</a>
      </div>

      <div class="box">
         <h3>Support</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> FAQ</a>
         <a href="#"> <i class="fas fa-angle-right"></i> Privacy Policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> Terms & Conditions</a>
      </div>

      <div class="box">
         <h3>Contact Info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
         <a href="#"> <i class="fas fa-envelope"></i> contact@travelwise.com </a>
         <a href="#"> <i class="fas fa-map"></i> Kathmandu, Nepal </a>
      </div>

   </div>

   <div class="credit"> Created by <span>TravelWise Team</span> | All Rights Reserved! </div>

</section>

<!-- footer section ends -->

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
