<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/about-img-1.png" alt="">
         <h3>why choose us?</h3>
         <p>At our store, we prioritize quality, freshness, and customer satisfaction. Our team works hard to bring you the best selection of organic and farm-fresh produce, ensuring you receive only the highest quality products. Choose us for a hassle-free shopping experience with quick delivery, great customer service, and products you can trust!</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="images/about-img-2.png" alt="">
         <h3>what we provide?</h3>
         <p>We offer a wide range of fresh vegetables, fruits, meat, and other essential grocery items. Our products are sourced from trusted suppliers to guarantee the finest quality. Whether you’re looking for healthy snacks, fresh ingredients for your meals, or ready-to-cook items, our shop has everything you need for a healthy lifestyle.</p>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">clients reivews</h1>

   <div class="box-container">

      <div class="box">
         <img src="https://www.politico.com/dims4/default/resize/630/quality/90/format/webp?url=https%3A%2F%2Fstatic.politico.com%2F26%2F32%2F165f3a964b29b8f9f4825c80686e%2Fgettyimages-2226497011.jpg" alt="">
         <p>I love these potatoes! They are fresh, firm, and perfect for making mashed potatoes or fries. The quality is excellent, and they cook evenly every time.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Donald Trump</h3>
      </div>

      <div class="box">
         <img src="https://d3i6fh83elv35t.cloudfront.net/static/2025/05/2025-05-13T151431Z_1675301138_RC22HEAPY9HE_RTRMADP_3_RUSSIA-PUTIN-BUSINESS-1024x703.jpg" alt="">
         <p>These carrots are incredibly crunchy and sweet! They make a perfect addition to my salads and soups. The freshness is noticeable right when you cut into them.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Vladimir Putin</h3>
      </div>

      <div class="box">
         <img src="https://i.guim.co.uk/img/static/sys-images/Guardian/Pix/pictures/2013/5/13/1368429861204/Kim-Jong-un-009.jpg?width=465&dpr=1&s=none&crop=none" alt="">
         <p>These spinach leaves are fresh and full of flavor. They cook down perfectly in my dishes and retain their vibrant color. Will definitely buy again!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Kim Jong Un</h3>
      </div>

      <div class="box">
         <img src="https://files.idyllic.app/files/static/2265944" alt="">
         <p>The chicken breasts were tender and juicy. Cooked them on the grill, and they were full of flavor. Very satisfied with the quality.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Spider-Man</h3>
      </div>

      <div class="box">
         <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSypyQaHH0gucQf8YfKTY2udSH9CKC2mz5DXg&s" alt="">
         <p>These bananas are so fresh and ripe. They stay firm for a long time and are great for smoothies or just as a quick snack."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Superman</h3>
      </div>

      <div class="box">
         <img src="https://p.turbosquid.com/ts-thumb/Mf/kj2ZEX/eJ/neytiri_avatar_head_001/jpg/1735983616/1920x1080/fit_q87/ddddd9166c474d7b02e28977c4fed5f63a31dee4/neytiri_avatar_head_001.jpg" alt="">
         <p>I bought these oranges for juicing, and they did not disappoint! They are super juicy, and the flavor is amazing. I’ll be getting more next time.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Neytiri</h3>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>