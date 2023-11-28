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
   <title>About Us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<!-- about section starts  -->

<section class="about">

   <div class="row">
      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>
      <div class="content">
         <h3>Kenapa memilih platform kami?</h3>
         <p>Mudah, tidak memening kan kepada pengguna baru serta sangat efficien.</p>
         <a href="contact.php" class="inline-btn">contact us</a>
      </div>
   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="heading">3 langkah mudah</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>carian hartanah</h3>
         <p>Anda hanya perlu scroll dan "search" sahaja untuk mendapatkan rumah impian anda.</p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>hubungi agent @ pemilik</h3>
         <p>mudah untuk hubungi mereka secara langsung dengan cepat.</p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>nikmati hartanah anda</h3>
         <p>siap !</p>
      </div>

   </div>

</section>

<!-- steps section ends -->

<!-- review section starts  -->

<section class="reviews">

   <h1 class="heading">feedback pengguna terdahulu</h1>

   <div class="box-container">

      <div class="box">
         <div class="user">
            <img src="images/pic-1.png" alt="">
            <div>
               <h3>Muhamad Izzuddin</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Sebagai seorg ejen property yang banyak bantu owner rumah dalam percepat kan proses sewaan rumah. Alhamdulillah platform ni membantu.</p>
      </div>

     

   </div>

</section>

<!-- review section ends -->










<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>