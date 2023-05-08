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
   <title>package</title>

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

      <a href="index.html" class="logo"><i class="fas fa-plane" aria-hidden="true"></i><strong>World</strong>
         <span style="color:#8e44ad ;"><strong>Tour</strong></span></a>


      <nav class="navbar">
         <a href="index.html">home</a>
         <a href="about.php">about</a>
         <a href="package.php">package</a>
         <a href="book.php">book</a>
         <a href="login.php" class="fas fa-user" id="user-icon"> <?php echo $_SESSION['fname']; ?> </a>
         <a href="logout.php" class="fas fa-lock"> logout </a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>

   </section>

   <!-- header section ends -->

   <div class="heading" style="background:url(images/header-bg-2.png) no-repeat">
      <h1>packages</h1>
   </div>

   <!-- packages section starts  -->
   <form method="GET" action="book.php">
      <section class="packages">

         <h1 class="heading-title">top destinations</h1>

         <div class="box-container">

            <div class="box">
               <div class="image">
                  <img src="images/img-1.jpg" alt="">
               </div>
               <div class="content">
                  <h3>Agra</h3>
                  <p>The Taj Mahal, is an Islamic ivory-white marble mausoleum on the right bank of the river Yamuna in the Indian city of Agra!</p>
                  <button class="btn"><a href="book.php" style="color: white;">book now</a></button>
               </div>
            </div>

            <div class="box">
               <div class="image">
                  <img src="images/img-2.jpg" alt="">
               </div>
               <div class="content">
                  <h3>Dubai</h3>
                  <p>Beaches, sunshine, entertainment Dubai has it all. It's no wonder we've been named Tripadvisor's top destination in the world for 2022. Come see the magic!</p>
                  <button class="btn"><a href="book.php" style="color: white;">book now</a></button>
               </div>
            </div>

            <div class="box">
               <div class="image">
                  <img src="images/img-3.jpg" alt="">
               </div>
               <div class="content">
                  <h3>Australia</h3>
                  <p>Popular Australian destinations include the coastal cities of Sydney, Brisbane and Melbourne, the Gold Coast and the Great Barrier Reef, the world's largest reef.</p>
                  <button class="btn"><a href="book.php" style="color: white;">book now</a></button>
               </div>
            </div>

            <div class="box">
               <div class="image">
                  <img src="images/img-4.jpg" alt="">
               </div>
               <div class="content">
                  <h3>Nepal</h3>
                  <p>Nepal, formerly the Federal Democratic Republic of Nepal, is a landlocked country in South Asia. It is mainly situated in the Himalayas, but also includes parts of the Indo-Gangetic Plain, bordering Tibet of China to the north, and India </p>
                  <button class="btn"><a href="book.php" style="color: white;">book now</a></button>
               </div>
            </div>

            <div class="box">
               <div class="image">
                  <img src="images/img-5.jpg" alt="">
               </div>
               <div class="content">
                  <h3>singapore</h3>
                  <p>A thriving street food scene and world-class restaurants offer countless ways to taste and sip your way through Singapore’s culinary melting pot. Your first trip to Singapore will prove that sometimes the best things come in small packages.</p>
                  <button class="btn"><a href="book.php" style="color: white;">book now</a></button>
               </div>
            </div>

            <div class="box">
               <div class="image">
                  <img src="images/img-6.jpg" alt="">
               </div>
               <div class="content">
                  <h3>thailand</h3>
                  <p>Thailand is a country of many contrasting facets, with glorious beaches as well as forests, jungles and mountains. Whether you want to swim, sunbathe or explore the wildlife, a family holiday in Thailand will never be dull</p>
                  <button class="btn"><a href="book.php" style="color: white;">book now</a></button>
               </div>
            </div>


         </div>

      </section>
   </form>
   <!-- packages section ends -->














   <!-- footer section starts  -->


   <section class="footer">

      <div class="box-container">

         <div class="box">
            <h3>quick links</h3>
            <a href="index.html"> <i class="fas fa-angle-right"></i> home</a>
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
   <script src="images/bg.jpg"></script>

</body>

</html>