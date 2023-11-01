<!-- header section starts  -->

<header class="header">

   <nav class="navbar nav-1">
      <section class="flex">
         <a href="index.php" class="logo"><i class="fas fa-house"></i>SewaBeliRumah</a>

         <ul>
            <li><a href="post_property.php">post property<i class="fas fa-paper-plane"></i></a></li>
         </ul>
      </section>
   </nav>

   <nav class="navbar nav-2">
      <section class="flex">
         <div id="menu-btn" class="fas fa-bars"></div>

         <div class="menu">
            <ul>
               <li><a href="#">my listings<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="dashboard.php">dashboard</a></li>
                     <li><a href="post_property.php">post property</a></li>
                     <li><a href="my_listings.php">my listings</a></li>
                  </ul>
               </li>
               <li><a href="#">options<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="search.php">filter search</a></li>
                     <li><a href="listings.php">all listings</a></li>
                  </ul>
               </li>
               <li><a href="#">help<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="about.php">about us</a></i></li>
                     <li><a href="contact.php">contact us</a></i></li>
                     <li><a href="contact.php#faq">FAQ</a></i></li>
                  </ul>
               </li>
            </ul>
         </div>

         <ul>
            <li><a href="saved.php">saved <i class="far fa-heart"></i></a></li>
            <li><a href="#">account <i class="fas fa-angle-down"></i></a>
               <ul>
                  <?php
                  $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
                  $select_profile->execute([$user_id]);
                  if($select_profile->rowCount() > 0 ){
                     $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
                  ?>
                  <li><a href="update.php"><?= $fetch_profile['name'] ;?></a></li>
                  <?php 
                   }else{
                  ?>
                  <li><a href="login.php">login now</a></li>
                  <?php } ?>
                  <?php if($user_id != ''){ ?>
                  <li><a href="update.php">update profile</a></li>
                  <li><a href="components/user_logout.php" onclick="return confirm('logout from this website?');">logout</a>
                  <?php } ?></li>
               </ul>
            </li>
         </ul>
      </section>
   </nav>

</header>

<!-- header section ends -->