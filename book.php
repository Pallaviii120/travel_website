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
   <title>book</title>

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

   <div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
      <h1>book now</h1>
   </div>

   <!-- booking section starts  -->

   <section class="booking">

      <h1 class="heading-title">book your trip!</h1>

      <form action="temp.php" method="GET" class="book-form">

         <div class="flex">
            <div class="inputBox">
               <span>name :</span>
               <input type="text" placeholder="Enter Your Name" name="firstname" required>
            </div>
            <div class="inputBox">
               <span>email :</span>
               <input type="email" placeholder="Enter Your Email" name="emailid" required>
            </div>
            <div class="inputBox">
               <span>phone :</span>
               <input type="text" placeholder="Enter Your Number" name="phoneno" required>
            </div>
            <div class="inputBox">
               <span>address :</span>
               <input type="text" placeholder="Enter Your Address" name="address" required>
            </div>
            <div class="inputBox">
               <style>
                  .booking .book-form .flex .inputBox {
                     flex: 1 1 41rem;
                  }

                  .booking .book-form .flex .inputBox select {
                     width: 100%;
                     padding: 1.2rem 1.4rem;
                     font-size: 1.6rem;
                     color: var(--light-black);
                     text-transform: none;
                     margin-top: 1.5rem;
                     border: var(--border);
                  }

                  .booking .book-form .flex .inputBox select:focus {
                     background: var(--black);
                     color: var(--white);
                  }

                  .booking .book-form .flex .inputBox select:focus::placeholder {
                     color: var(--light-white);
                  }

                  .booking .book-form .flex .inputBox span {
                     font-size: 1.5rem;
                     color: var(--light-black);
                  }
               </style>
               <span>where to :</span>
               <select name="destination" required>
                  <option>Agra</option>
                  <option>Dubai</option>
                  <option>Australia</option>
                  <option>Nepal</option>
                  <option>Singapore</option>
                  <option>Thailand</option>
               </select>
            </div>
            <div class="inputBox"><span>how many :</span><input type="number" placeholder="Number Of Guests" name="count" required></div>
            <div class="inputBox"><span>arrivals :</span><input type="date" name="arrivals" required></div>
            <div class="inputBox"><span>leaving :</span><input type="date" name="leaving" required></div>

         </div><input type="submit" value="Continue" class="btn" name="send">
      </form>
   </section>
   <section class="footer">
      <div class="box-container">
         <div class="box">
            <h3>quick links</h3><a href="index.html"><i class="fas fa-angle-right"></i>home</a><a href="about.php"><i class="fas fa-angle-right"></i>about</a><a href="package.php"><i class="fas fa-angle-right"></i>package</a><a href="book.php"><i class="fas fa-angle-right"></i>book</a>
         </div>
         <div class="box">
            <h3>extra links</h3><a href="#"><i class="fas fa-angle-right"></i>ask questions</a><a href="#"><i class="fas fa-angle-right"></i>about us</a><a href="#"><i class="fas fa-angle-right"></i>privacy policy</a><a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
         </div>
         <div class="box">
            <h3>contact info</h3><a href="#"><i class="fas fa-phone"></i>+123-456-7890 </a><a href="#"><i class="fas fa-phone"></i>+111-222-3333 </a><a href="#"><i class="fas fa-envelope"></i>worldtouragency@gmail.com </a><a href="#"><i class="fas fa-map"></i>mumbai,
               india - 400104 </a>
         </div>
         <div class="box">
            <h3>follow us</h3><a href="#"><i class="fab fa-facebook-f"></i>facebook </a><a href="#"><i class="fab fa-twitter"></i>twitter </a><a href="#"><i class="fab fa-instagram"></i>instagram </a><a href="#"><i class="fab fa-linkedin"></i>linkedin </a>
         </div>
      </div>
      <div class="credit">created by <span>Pallavi Patil</span>| all rights reserved ! </div>
   </section>

   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
   <script src="js/script.js"></script>

</body>

</html>