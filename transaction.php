<?php

$conn = mysqli_connect('localhost','root','','wedding planner');

if(isset($_POST['send'])){

   $pay = $_POST['pay'];
   $id = $_POST['id'];

   $insert = "INSERT INTO `transactionid`(`pay`, `id`) VALUES ('$pay','$id')";

   mysqli_query($conn, $insert);

   header('location:payment.php');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>payment</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

<?php @include 'header.php'; ?>

<section class="transaction">

   <h1 class="heading">Complete your payment</h1>

   <form action="" method="post">

      <div class="flex">

      <div class="inputBox">
            <span>choose payment system</span>
            <select name="pay">
               <option value="bkash">bkash</option>
               <option value="nagad">nagad</option>
               <option value="rocket">rocket</option>
            </select>
         </div>

         <div class="inputBox">
            <span>transaction id</span>
            <input type="text" placeholder="enter transaction id" name="id" required>
         </div>


         

      </div>

      <input type="submit" value="submit" name="send" class="btn">

   </form>

</section>

<?php @include 'footer.php'; ?>

</div>



<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>