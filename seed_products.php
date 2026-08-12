<?php

@include 'config.php';

function check_and_seed_products($conn) {
   try {
      $check = $conn->prepare("SELECT COUNT(*) AS total FROM `products`");
      $check->execute();
      $row = $check->fetch(PDO::FETCH_ASSOC);

      if ($row['total'] < 10) {
         $sample_products = [
            ['Organic Red Apples', 'fruits', 'Fresh, crisp, and sweet organic red apples sourced directly from local orchards.', 3, 'Apple.jpeg'],
            ['Fresh Yellow Bananas', 'fruits', 'Rich in potassium and naturally sweet, perfect for breakfast and daily snacking.', 2, 'Banana.jpeg'],
            ['Sweet Red Grapes', 'fruits', 'Juicy and vibrant red seedless grapes, perfect for desserts and fresh salads.', 4, 'Grapes.jpeg'],
            ['Ripe Organic Mangoes', 'fruits', 'Sweet, aromatic tropical mangoes packed with rich flavor and vitamins.', 5, 'Mango.jpeg'],
            ['Juicy Golden Pineapple', 'fruits', 'Naturally sweet and tangy golden pineapple, rich in vitamin C.', 4, 'Pineapple.jpeg'],
            ['Fresh Red Strawberries', 'fruits', 'Sweet, fragrant red strawberries packed with antioxidants.', 6, 'Strawberry.jpeg'],
            ['Organic Farm Carrots', 'vegitables', 'Crunchy, sweet organic carrots packed with Vitamin A and essential nutrients.', 2, 'Carrot.jpeg'],
            ['Fresh Cauliflower', 'vegitables', 'Farm fresh white cauliflower heads, perfect for roasting, stir-fry, or curries.', 3, 'Cauliflower.jpeg'],
            ['Crisp Green Cucumber', 'vegitables', 'Hydrating and fresh green cucumbers, ideal for salads and refreshing snacks.', 2, 'Cucumber.jpeg'],
            ['Fresh Red Onions', 'vegitables', 'Essential kitchen staple, crisp and pungent red onions for everyday cooking.', 2, 'Onion.jpeg'],
            ['Fresh Red Amaranth', 'vegitables', 'Nutrient-dense fresh red amaranth greens, rich in iron and calcium.', 2, 'Red Amaranth.jpeg'],
            ['Organic Green Spinach', 'vegitables', 'Hand-picked tender spinach leaves, perfect for green smoothies and cooking.', 2, 'Spinach.jpeg'],
            ['Organic Green Zucchini', 'vegitables', 'Tender organic green zucchini, excellent for grilling, roasting, or pasta.', 3, 'Zucchini.jpeg'],
            ['Premium Lean Beef', 'meat', 'High quality, fresh lean cut beef ideal for roasting, grilling, or curries.', 12, 'Beef.jpeg'],
            ['Farm Raised Whole Chicken', 'meat', 'Fresh, tender whole chicken sourced from local organic poultry farms.', 8, 'Chicken.jpeg'],
            ['Fresh Tender Mutton', 'meat', 'Premium quality mutton chops, lean and flavorful for gourmet curries.', 15, 'Mutton.jpeg'],
            ['Premium Hilsa Fish', 'fish', 'Authentic fresh Hilsa fish, renowned for its rich flavor and delicate texture.', 14, 'Hilsa.jpeg'],
            ['Fresh Katla Fish', 'fish', 'Sustainably sourced fresh Katla fish cut into clean curry steaks.', 10, 'Katla.jpeg'],
            ['Fresh Rohu Fish', 'fish', 'Freshwater Rohu fish steaks, versatile for traditional fish curry recipes.', 9, 'Rohu.jpeg'],
            ['Wild Atlantic Salmon', 'fish', 'Rich in Omega-3 fatty acids, fresh Atlantic salmon fillet cut.', 16, 'Salmon.jpeg'],
            ['Fresh Tangra Fish', 'fish', 'Fresh small Tangra river fish, popular for light and spicy fish broth.', 11, 'Tangra.jpeg'],
            ['Fresh Tilapia Fillet', 'fish', 'Clean, mild-flavored fresh Tilapia fish, great for baking or frying.', 8, 'Tilapia.jpeg'],
            ['Yellowfin Tuna Steak', 'fish', 'Wild caught ocean fresh Yellowfin tuna steaks, dense and flavorful.', 15, 'Tuna.jpeg']
         ];

         $stmt = $conn->prepare("INSERT INTO `products` (name, category, details, price, image) VALUES (?, ?, ?, ?, ?)");
         $chk_stmt = $conn->prepare("SELECT id FROM `products` WHERE name = ?");

         foreach ($sample_products as $p) {
            $chk_stmt->execute([$p[0]]);
            if ($chk_stmt->rowCount() == 0) {
               $stmt->execute($p);
            }
         }
      }
   } catch (Exception $e) {
      // Gracefully ignore error if database not yet initialized
   }
}

if (isset($conn)) {
   check_and_seed_products($conn);
}
?>
