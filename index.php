<?php  

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

$verification_status = "0";

$check_user = $conn->prepare("SELECT * FROM `users` WHERE id = ? AND verification_status = ?");
$check_user->execute([$user_id, $verification_status]);
$row = $check_user->fetch(PDO::FETCH_ASSOC);

if($check_user->rowCount() > 0){

   if($verification_status == "verified"){
      $_SESSION['user_id'] = $row['id'];
      $_SESSION['email'] = $row['email'];
      $_SESSION['otp'] = $row['otp'];
      header('location:index.php');
   }
   elseif($verification_status == "0"){
      $_SESSION['user_id'] = $row['id'];
      $_SESSION['email'] = $row['email'];
      $_SESSION['otp'] = $row['otp'];
      header('location:verify.php');
   }
}

include 'components/save_send.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home | SewaBeliRumah</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>


<!-- home section starts  -->

<div class="home">

   <section class="center">

      <form action="search.php" method="post">
         <h3>find your perfect home</h3>
         <div class="box">
            <p>enter location <span>*</span></p>
            <input type="text" name="h_location" required maxlength="100" placeholder="enter city name" class="input">
         </div>
         <div class="flex">
            <div class="box">
               <p>property type <span>*</span></p>
               <select name="h_type" class="input" required>
                  <option value="house">house</option>
                  <option value="flat">flat</option>
                  <option value="shop">shop</option>
               </select>
            </div>
            <div class="box">
               <p>offer type <span>*</span></p>
               <select name="h_offer" class="input" required>
                  <option value="sale">sale</option>
                  <option value="rent">rent</option>
               </select>
            </div>
            <div class="box">
               <p>minimum budget <span>*</span></p>
               <select name="h_min" class="input" required>
                  <option value="400">RM 400</option>
                  <option value="600">RM 600</option>
                  <option value="800">RM 800</option>
                  <option value="900">RM 900</option>
                  <option value="1000">RM 1K</option>
                  <option value="1200">RM 1.2K</option>
                  <option value="1400">RM 1.4K</option>
                  <option value="1600">RM 1.6K</option>
                  <option value="1800">RM 1.8K</option>
                  <option value="2000">RM 2K</option>
                  <option value="10000">RM 10k</option>
                  <option value="15000">RM 15k</option>
                  <option value="20000">RM 20k</option>
                  <option value="30000">RM 30k</option>
                  <option value="40000">RM 40k</option>
                  <option value="40000">RM 40k</option>
                  <option value="50000">RM 50k</option>
                  <option value="100000">RM 100k</option>
                  <option value="200000">RM 200k</option>
                  <option value="300000">RM 300k</option>
                  <option value="400000">RM 400k</option>
                  <option value="500000">RM 500k</option>
               </select>
            </div>
            <div class="box">
               <p>maximum budget <span>*</span></p>
               <select name="h_max" class="input" required>
                  <option value="400">RM 400</option>
                  <option value="600">RM 600</option>
                  <option value="800">RM 800</option>
                  <option value="900">RM 900</option>
                  <option value="1000">RM 1K</option>
                  <option value="1200">RM 1.2K</option>
                  <option value="1400">RM 1.4K</option>
                  <option value="1600">RM 1.6K</option>
                  <option value="1800">RM 1.8K</option>
                  <option value="2000">RM 2K</option>
                  <option value="10000">RM 10k</option>
                  <option value="15000">RM 15k</option>
                  <option value="20000">RM 20k</option>
                  <option value="30000">RM 30k</option>
                  <option value="40000">RM 40k</option>
                  <option value="40000">RM 40k</option>
                  <option value="50000">RM 50k</option>
                  <option value="100000">RM 100k</option>
                  <option value="200000">RM 200k</option>
                  <option value="300000">RM 300k</option>
                  <option value="400000">RM 400k</option>
                  <option value="500000">RM 500k</option>
               </select>
            </div>
         </div>
         <input type="submit" value="search property" name="h_search" class="btn">
      </form>

   </section>

</div>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services">

   <h1 class="heading">our services</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>Beli Rumah</h3>
         <p>Disini merupakan platform memudahkan anda membuat pilihan bijak sebelum membeli Rumah Idaman.</p>
      </div>

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>Sewa Rumah</h3>
         <p>Memudahkan anda sebagai pemilik(owner) untuk sewa kan kepada penyewa yang tepat.</p>
      </div>

      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>Jual Rumah</h3>
         <p>Anda Pemilik(owner)?</p>
         <p>yang nak jual Rumah?</p>
         <p>di sini lah tempat nya </p>
         <p>kerana kita ada servis bantu owner jual rumah melalui ejen @ jual sendiri.</p>
      </div>

      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>24/7 Servis</h3>
         <p>Bantuan serta khidmat pelanggan kami membantu anda 24/7</p>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- listings section starts  -->

<section class="listings">

   <h1 class="heading">latest listings</h1>

   <div class="box-container">
      <?php
         $total_images = 0;
         $select_properties = $conn->prepare("SELECT * FROM `property` ORDER BY date DESC LIMIT 6");
         $select_properties->execute();
         if($select_properties->rowCount() > 0){
            while($fetch_property = $select_properties->fetch(PDO::FETCH_ASSOC)){
               
            $select_user = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_user->execute([$fetch_property['user_id']]);
            $fetch_user = $select_user->fetch(PDO::FETCH_ASSOC);

            if(!empty($fetch_property['image_02'])){
               $image_coutn_02 = 1;
            }else{
               $image_coutn_02 = 0;
            }
            if(!empty($fetch_property['image_03'])){
               $image_coutn_03 = 1;
            }else{
               $image_coutn_03 = 0;
            }
            if(!empty($fetch_property['image_04'])){
               $image_coutn_04 = 1;
            }else{
               $image_coutn_04 = 0;
            }
            if(!empty($fetch_property['image_05'])){
               $image_coutn_05 = 1;
            }else{
               $image_coutn_05 = 0;
            }

            $total_images = (1 + $image_coutn_02 + $image_coutn_03 + $image_coutn_04 + $image_coutn_05);

            $select_saved = $conn->prepare("SELECT * FROM `saved` WHERE property_id = ? and user_id = ?");
            $select_saved->execute([$fetch_property['id'], $user_id]);

      ?>
      <form action="" method="POST">
         <div class="box">
            <input type="hidden" name="property_id" value="<?= $fetch_property['id']; ?>">
            <?php
               if($select_saved->rowCount() > 0){
            ?>
            <button type="submit" name="save" class="save"><i class="fas fa-heart"></i><span>saved</span></button>
            <?php
               }else{ 
            ?>
            <button type="submit" name="save" class="save"><i class="far fa-heart"></i><span>save</span></button>
            <?php
               }
            ?>
            <div class="thumb">
               <div class="info">
                  <p class="total-images"><i class="far fa-image"></i> <span><?= $total_images; ?></span></p>
                  <?php 
                  $select_time_post = $conn->prepare("SELECT * FROM `property`");
                  $select_time_post->execute();
                     $fetch_timeAgo = $select_time_post->fetch(PDO::FETCH_ASSOC);
                  ?>
                  <p class="clock"><i class="far fa-clock"></i> <time class="timeago" datetime="<?= $fetch_timeAgo['date'] ;?>"></time></p> 
               </div>
               <img src="uploaded_files/<?= $fetch_property['image_01']; ?>" alt="">
            </div>
            <div class="admin">
               <h3><?= substr($fetch_user['name'], 0, 1); ?></h3>
               <div>
                  <p><?= $fetch_user['name']; ?></p>
                  <span><?= date("d-m-Y",strtotime($fetch_property['date'])); ?></span>
               </div>
            </div>
         </div>
         <div class="box">
            <div class="price"><b>RM <span><?= $fetch_property['price']; ?> <?php if($fetch_property['rental_day_month'] != "") {echo '/'." ".$fetch_property['rental_day_month'] ;} else {echo '';}  ;?></span></b></div>
            <h3 class="name"><?= $fetch_property['property_name']; ?></h3>
            <p class="location"><i class="fas fa-map-marker-alt"></i><span><?= $fetch_property['address']; ?></span></p>
            <div class="flex">
               <p><i class="fas fa-house"></i><span><?= $fetch_property['type']; ?></span></p>
               <p><i class="fas fa-tag"></i><span><?= $fetch_property['offer']; ?></span></p>
               <p><i class="fas fa-bed"></i><span><?= $fetch_property['bedroom']; ?>Bedroom, <?= $fetch_property['bathroom']; ?>Bathroom</span></p>
               <p><i class="fas fa-trowel"></i><span><?= $fetch_property['status']; ?></span></p>
               <p><i class="fas fa-couch"></i><span><?= $fetch_property['furnished']; ?></span></p>
               <p><i class="fas fa-maximize"></i><span><?= $fetch_property['carpet']; ?>sqft</span></p>
            </div>
            <div class="flex-btn">
               <a href="view_property.php?get_id=<?= $fetch_property['id']; ?>" class="btn <?php if($fetch_property['user_id'] == $user_id) {echo 'disable';};?>">view property</a>
               <input type="submit" value="send enquiry" name="send" class="btn">
               <a href="https://api.whatsapp.com/send?phone=6<?=$fetch_user['number'];?>&text=Berminat...%20<?=$fetch_property['property_name'];?>%20%21%20%20RM%20<?=$fetch_property['price'];?>" class="btn-whatsapp">send whatsapp</a>
            </div>
         </div>
      </form>
      <?php
         }
      }else{
         echo '<p class="empty">no properties added yet! <a href="post_property.php" style="margin-top:1.5rem;" class="btn">add new</a></p>';
      }
      ?>
      
   </div>

   <div style="margin-top: 2rem; text-align:center;">
      <a href="listings.php" class="inline-btn">view all</a>
   </div>

</section>

<!-- listings section ends -->








<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script src="timeago/jquery-3.7.1.min.js"></script>
<script src="timeago/jquery.timeago.js"></script>

<script>
      jQuery(document).ready(function() {
      jQuery("time.timeago").timeago();
});

</script>

<?php include 'components/message.php'; ?>

<!-- <script>

   let range = document.querySelector("#range");
   range.oninput = () =>{
      document.querySelector('#output').innerHTML = range.value;
   }

</script> -->

</body>
</html>