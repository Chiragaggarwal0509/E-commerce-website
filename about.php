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
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>Why choose us?</h3>
         <p>Welcome to Shopie.<br>
At Shopie, we're passionate about providing the latest and greatest in electronic gadgets and accessories to tech enthusiasts like you. Whether you're a seasoned pro or just starting your journey into the world of electronics, we've got something for everyone.
<br>
Our mission is simple: to offer high-quality products at competitive prices, all while delivering exceptional customer service. With a carefully curated selection of products from top brands, you can shop with confidence knowing that you're getting the best of the best.
<br>
But we're more than just an online store. We're a community of like-minded individuals who share a love for all things tech. 
Happy shopping!</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">Client's reviews</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         
         <p>I recently purchased a laptop from Shopie, and I couldn't be happier with my purchase!
            <br> The product arrived quickly, and the quality exceeded my expectations. 
            <br>I'll definitely be a returning customer.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Shraddha</h3>
      </div>

      <div class="swiper-slide slide">
         <p>I've been shopping at Shopie for years, and I've always been impressed by their excellent customer service.
            <br> Whenever I have a question or concern, their team is quick to respond and always goes above and beyond to ensure my satisfaction</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Shreya</h3>
      </div>

      <div class="swiper-slide slide">
         <p>The selection of products at Shopie is unmatched! Whether I'm looking for the latest smartphone or a hard-to-find accessory, I know I can always find what I need here. Plus, the prices are unbeatable</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Prisha</h3>
      </div>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>