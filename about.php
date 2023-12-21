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
         <h3>DATA PRIVACY CLAUSE/ POLICY</h3>
         <p><b>Privacy Policy</b><br>At Merienda Corner, we prioritize your privacy:</p>
         <p><b>Information Collection:</b><br> We collect necessary details for orders and site improvement.</p>
         <p><b>Usage</b><br>Your data is used for order fulfillment, service enhancement, and occasional marketing</p>
         <p><b>Protection</b><br>We ensure your information is secure and not shared without your permission.</p>
         <p><b>Your use of our services implies consent to this policy.For inquiries, reach us at themeriendacorner@gmail.com.
</p>


         <a href="menu.html" class="btn">our menu</a>
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
         <p>At The Merienda Corner, explore Filipino snacks, mixing bases, dips, drinks, and sweets to create your ideal merienda, blending tradition with your own touch!</p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>fast delivery</h3>
         <p>The Merienda Corner, we pride ourselves on swift and efficient delivery Effortless Ordering, Speedy Preparation, Dedicated Couriers, Live Tracking, Priority Service, Freshness Guarantee</p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>enjoy food</h3>
         <p>At The Merienda Corner, experience Filipino snack nostalgia with traditional treats and innovative flavors that celebrate the essence of Filipino merienda culture in every bite.</p>
      </div>

   </div>

</section>

<!-- steps section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="title">customer's reivews</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/Kamid.png" alt="">
            <p>Merienda  Corner's online ordering is a game-changer! Seamless process, prompt delivery, and the food? Absolutely delicious! A top choice for a hassle-free and flavorful dining experience.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Jemalyn Kamid</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/Ange.jpg" alt="">
            <p>Merianda Corner Food is an absolute gem! From the moment I walked in, I was greeted by a warm and friendly atmosphere.I like the concept of their business, their mouthwatering foods, and people in their shop is approachable. So delicious foods!</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Angelyn Aguilar</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/Unice.jpg" alt="">
            <p>Merianda Corner Food has become my go-to spot for a fantastic dining experience. Their concept is simply brilliant - it's a fusion of creativity and culinary expertise that reflects in every aspect of their establishment.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Eunice Lagyal</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/Justine.jpg" alt="">
            <p>Merienda Corner offers a diverse menu featuring a classic burger, pizza, and Burger King items. The burger classic boasts a satisfying blend of flavors, with a well-cooked patty and fresh toppings. The pizza 'A' is a delightful choice, with a tempting combination of ingredients that harmonize well. Additionally, incorporating Burger King items adds a unique touch to the menu, catering to a variety of tastes.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Justine Montuya</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/Jonas.jpg" alt="">
            <p>The burger is very affordable yet meaty. I highly recommend this store that offers affordable food but still maintains the quality of the products! My favorite here is the burger king.
</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Jonas Esparagoza</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/KENT.jpg" alt="">
            <p>I'm absolutely enamored by Merianda Corner Food! This place is a hidden culinary treasure that captivates from the moment you step in. The concept they've cultivated is nothing short of genius, blending innovation with a deep respect for flavor profiles and quality ingredients.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Kent Vilanos</h3>
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