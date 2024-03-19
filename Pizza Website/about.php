<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>about us</h3>
   <p><a href="home.php">home</a> <span> / about</span></p>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>At PIZZA PARADISE, it is just not about food but we strive to give you a memorable experience with loads of smiles over gorgeous food. With comfortable and youthful ambience, friendly and efficient service, elaborate menu and delectable food, PIZZA PARADISE is your junction for a great conversational meal! At PIZZA PARADISE, we don’t just make pizza. We make people happy. PIZZA PARADISE was built on the belief that pizza night should be special, and we carry that belief into everything we do. With more than 20+ experienced cooks under our belts, we understand how to best serve our customers through tried and true service principles: We create food we’re proud to serve and deliver it fast, with a smile😋</p>
         <a href="menu.php" class="btn">our menu</a>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="title">simple steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>choose order</h3>
         <p>Our Menu is specially designed in a way that you get the best choices in terms of taste and platter. It is an ideal getaway to a world of Italian- American flavors. We have an elaborate spread of Veg and Non Veg Pizza, Beverages and Desserts that delight you with a complete meal.</p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>fast delivery</h3>
         <p>Once your order is successfully placed, we provide you with the fastest delivery service where you can expect to receive your order hot and fresh within 30-minutes, Since the website both offer a simple ordering process, a pleasant ordering experience is guaranteed</p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>enjoy food</h3>
         <p>There You Go !!! Enjoy our meal</p>
         <p>There’s nothing cookie-cutter about PIZZA PARADISE. Not our pizzas. Not our people. Around here, we don’t settle for anything less than food we’re proud to serve. And we don’t just clock in. We’re the pizza company that lives life unboxed.
         </p>
      </div>

   </div>

</section>

<!-- steps section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="title">customer's reviews</h1>
   <style>
      h1
      {
         text-align:center;
      }
      </style>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/Review 1.jpg" alt="">
            <p>OMG!! PIZZA PARADISE Is undoubtedly much better than Dominos.The taste and the hygiene they maintain is just unmatchable.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Smitha</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/Review 2.jpg" alt="">
            <p>I totally enjoyed their Pizza's.They were Abssouletly delicious,especially their Margherita is just mouth watering.I am looking forward to visit the store next time</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Denver</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/Review 3.jpg" alt="">
            <p>Marvelous Delicious and breathtaking,Each and every slice of pizza is made with perfection.I liked Maharaja Pizza a lot, and the moctails tasted very good too !</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Balvir Singh</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/Review 4.jpg" alt="">
            <p>The Pizza was just wow i like Chicken tandoori Pizza Very much.This Pizza is better than any other Pizza.Chocolate Brownie tasted very delicious</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Arshad Khan </h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/Review 5.jpg" alt="">
            <p>If Pizza was an Art then Pizza Paradise would be the Picasso of it.You guys are just the best.Your Chicken and nuts Extravaganza is just eypleasing </p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Abhinav</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/Review 6.jpg" alt="">
            <p>Your Pizza's are just Amazing.I have a daughther who is 10 years old,Am not joking.She is a big fan of your Non Veg Pizzas,Ur Pizzas are just <3</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Anushka</h3>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- reviews section ends -->



















<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->=






<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>