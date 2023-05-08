<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

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

      <a href="home.php" class="logo"><i class="fas fa-plane" aria-hidden="true"></i><strong>World</strong>
         <span style="color:#8e44ad ;"><strong>Tour</strong></span></a>

      <nav class="navbar">
         <a class="butn active" href="home.php">home</a>
         <a href="about.php">about</a>
         <a href="package.php">package</a>
         <a href="book.php">book</a>
         <a href="login.php" class="fas fa-user" id="user-icon"> <?php echo $_SESSION['fname']; ?> </a>
         <a href="logout.php" class="fas fa-lock"> logout </a>
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
                  <span>explore, discover, travel</span>
                  <h3>travel around the world</h3>
                  <a href="package.php" class="btn">discover more</a>
               </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
               <div class="content">
                  <span>explore, discover, travel</span>
                  <h3>discover the new places</h3>
                  <a href="package.php" class="btn">discover more</a>
               </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
               <div class="content">
                  <span>explore, discover, travel</span>
                  <h3>make your tour worthwhile</h3>
                  <a href="package.php" class="btn">discover more</a>
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

      <h1 class="heading-title"> our services </h1>

      <div class="box-container">

         <div class="box">
            <img src="images/icon-1.png" alt="">
            <h3>adventure</h3>
         </div>

         <div class="box">
            <img src="images/icon-2.png" alt="">
            <h3>tour guide</h3>
         </div>

         <div class="box">
            <img src="images/icon-3.png" alt="">
            <h3>trekking</h3>
         </div>

         <div class="box">
            <img src="images/icon-4.png" alt="">
            <h3>camp fire</h3>
         </div>

         <div class="box">
            <img src="images/icon-5.png" alt="">
            <h3>off road</h3>
         </div>

         <div class="box">
            <img src="images/icon-6.png" alt="">
            <h3>camping</h3>
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
         <h3>about us</h3>
         <p>We are here to give tourists a best experience , to explore as much as places then can. As per customer reviews and comments our company provide good services which we helpful while traveling, room booking, visiting different. We have the experience of 10+ years and hopes for the best in future trusted by tourists. </p>
         <a href="about.php" class="btn">read more</a>
      </div>

   </section>

   <!-- home about section ends -->

   <!-- home packages section starts  -->

   <section class="home-packages">

      <h1 class="heading-title"> our packages </h1>

      <div class="box-container">

         <div class="box">
            <div class="image">
               <img src="images/img-1.jpg" alt="">
            </div>
            <div class="content">
               <h3>Agra</h3>
               <p>The Taj Mahal, is an Islamic ivory-white marble mausoleum on the right bank of the river Yamuna in the Indian city of Agra!</p>
               <a href="book.php" class="btn">book now</a>
            </div>
         </div>

         <div class="box">
            <div class="image">
               <img src="images/img-2.jpg" alt="">
            </div>
            <div class="content">
               <h3>Dubai</h3>
               <p>Beaches, sunshine, entertainment Dubai has it all. It's no wonder we've been named Tripadvisor's top destination in the world for 2022. Come see the magic!</p>
               <a href="book.php" class="btn">book now</a>
            </div>
         </div>

         <div class="box">
            <div class="image">
               <img src="images/img-3.jpg" alt="">
            </div>
            <div class="content">
               <h3>Australia</h3>
               <p>Popular Australian destinations include the coastal cities of Sydney, Brisbane and Melbourne, the Gold Coast and the Great Barrier Reef, the world's largest reef.</p>
               <a href="book.php" class="btn">book now</a>
            </div>
         </div>

      </div>

      <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>

   </section>

   <!-- home packages section ends -->

   <!-- home offer section starts  -->

   <section class="home-offer">
      <div class="content">
         <h3>upto 50% off</h3>
         <p>these is special offer to tourists and it is season of giving offers and sharing love between all people. Purchase your choice package do registration and grap these opportunity!! </p>
         <a href="book.php" class="btn">book now</a>
      </div>
   </section>

   <!-- home offer section ends -->

   <!-- footer section starts  -->

   <section class="footer">

      <div class="box-container">

         <div class="box">
            <h3>quick links</h3>
            <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
            <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
            <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
            <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
         </div>

         <div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
            <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
            <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
            <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
         </div>

         <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
            <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
            <a href="#"> <i class="fas fa-envelope"></i> worldtouragency@gmail.com </a>
            <a href="#"> <i class="fas fa-map"></i> mumbai, india - 400104 </a>
         </div>

         <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
         </div>

      </div>

      <div class="credit"> created by <span>Pallavi Patil</span> | all rights reserved! </div>

   </section>

   <!-- footer section ends -->









   <!-- swiper js link  -->
   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>


</body>

</html>