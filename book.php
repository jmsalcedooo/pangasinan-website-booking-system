<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Book</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="#">
      <img src="images/pangasinanlogo.png">

   <nav class="navbar">
      <a href="home.php">Overview</a>
      <a href="about.php">About Us</a>
      <a href="destination.php">Destination</a>
      <a href="book.php">Book</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-3.png) no-repeat">
   <h1>book now!</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">Sign Up to Book Your Trip!</h1>

   <form action="book_form.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>Name :</span>
            <input type="text" placeholder="Full Name" name="name">
         </div>
         <div class="inputBox">
            <span>Email :</span>
            <input type="email" placeholder="pangasinanspot@email.com" name="email">
         </div>
         <div class="inputBox">
            <span>Phone :</span>
            <input type="text" placeholder="+123-456-7890" name="phone">
         </div>
         <div class="inputBox">
            <span>Address :</span>
            <input type="text" placeholder="123 Pangasinan St., Philippines" name="address">
         </div>
         <div class="inputBox">
            <span>Where to :</span>
            <input type="text" placeholder="Your Destination" name="location">
         </div>
         <div class="inputBox">
            <span>Extra Guests :</span>
            <input type="number" placeholder="How many" name="guests">
         </div>
         <div class="inputBox">
            <span>Arrival :</span>
            <input type="date" name="arrivals">
         </div>
         <div class="inputBox">
            <span>Leaving :</span>
            <input type="date" name="leaving">
         </div>
      </div>

      <center><input type="submit" value="Submit" class="btn" name="send">

   </form>

</section>


<!-- booking section ends -->

<section class="home-destination">

   <h1 class="heading-title"> Most Popular </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/img1.jpg" alt="">
         </div>
         <div class="content">
            <h3>Hundred Islands</h3>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img2.jpg" alt="">
         </div>
         <div class="content">
            <h3>Sunflower Maze Farm</h3>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img8.jpg" alt="">
         </div>
         <div class="content">
            <h3>Balingasay River</h3>
         </div>
      </div>

   </div>

</section>

<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>Quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i>Home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i>About</a>
         <a href="destination.php"> <i class="fas fa-angle-right"></i>Destination</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i>Book</a>
      </div>

      <div class="box">
         <h3>Support</h3>
         <a href="#"> <i class="fas fa-angle-right"></i>Ask Questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i>About Us</a>
         <a href="#"> <i class="fas fa-angle-right"></i>Privacy Policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i>Terms of Use</a>
      </div>

      <div class="box">
         <h3>Contact Info</h3>
         <a href="#"> <i class="fas fa-phone"></i>+63123456789</a>
         <a href="#"> <i class="fas fa-phone"></i>+111-222-3333</a>
         <a href="#"> <i class="fas fa-envelope"></i>pangasinanspot@email.com</a>
         <a href="#"> <i class="fas fa-map"></i>Pangasinan, Philippines</a>
      </div>

      <div class="box">
         <h3>Follow Us</h3>
         <a href="#"> <i class="fab fa-facebook"></i>Facebook</a>
         <a href="#"> <i class="fab fa-twitter"></i>Twitter</a>
         <a href="#"> <i class="fab fa-instagram"></i>Instagram</a>
         <a href="#"> <i class="fab fa-linkedin"></i>Linkedin</a>
      </div>

   </div>

   <div class="credit"> © 2022 <span>Group 2</span> | All Rights Reserved. </div>

</section>

<!-- footer section ends -->


<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>