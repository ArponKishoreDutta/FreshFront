<?php

if(!isset($_SESSION)) {
   session_start();
}

$user_id = $_SESSION['user_id'] ?? null;

if(isset($message)){
   foreach($message as $msg){
      echo '
      <div class="message">
         <span>'.$msg.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<script>
   if (localStorage.getItem('theme') === 'dark') {
      document.documentElement.classList.add('dark-theme');
   }
</script>

<header class="header">

   <div class="flex">

      <a href="home.php" class="logo"><i class="fas fa-leaf"></i> FreshFront<span>.</span></a>

      <nav class="navbar">
         <a href="home.php">home</a>
         <a href="shop.php">shop</a>
         <a href="orders.php">orders</a>
         <a href="about.php">about</a>
         <a href="contact.php">contact</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="theme-toggle-btn" title="Toggle Theme"><i class="fas fa-moon"></i></div>
         <a href="search_page.php" class="fas fa-search" title="Search"></a>
         <?php
            $count_wishlist_items = $conn->prepare("SELECT * FROM `wishlist` WHERE user_id = ?");
            $count_wishlist_items->execute([$user_id ?? 0]);
            $count_cart_items = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
            $count_cart_items->execute([$user_id ?? 0]);
         ?>
         <a href="wishlist.php" title="Wishlist"><i class="fas fa-heart"></i><span><?= $count_wishlist_items->rowCount(); ?></span></a>
         <a href="cart.php" title="Shopping Cart"><i class="fas fa-shopping-cart"></i><span><?= $count_cart_items->rowCount(); ?></span></a>
         <div id="user-btn" class="fas fa-user" title="Account"></div>
      </div>

      <div class="profile">
         <?php
            if($user_id){
               $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
               $select_profile->execute([$user_id]);
               $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
               if($fetch_profile){
         ?>
         <img src="uploaded_img/<?= htmlspecialchars($fetch_profile['image']); ?>" alt="">
         <p><?= htmlspecialchars($fetch_profile['name']); ?></p>
         <a href="user_profile_update.php" class="btn">update profile</a>
         <a href="logout.php" class="delete-btn">logout</a>
         <?php
               }
            } else {
         ?>
         <p>please login or register first!</p>
         <div class="flex-btn">
            <a href="login.php" class="option-btn">login</a>
            <a href="register.php" class="option-btn">register</a>
         </div>
         <?php } ?>
      </div>

   </div>

</header>