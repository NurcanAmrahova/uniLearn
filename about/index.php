<?php
include "../config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./about.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <link rel="shortcut icon" href="http://html.cwsthemes.com/unilearn/img/logo@2x.png" type="image/x-icon">
  <title>UniLearn</title>
</head>

<body>
  <div class="overlay-menu">
    <i class="fa-solid fa-circle-xmark"></i>
    <div class="overlay-navigation-links">
      <a href="../home/">Home</a>
      <a href="#">About</a>
      <a href="../service/">Service</a>
      <a href="../contact/">Contact</a>
    </div>
  </div>

  <section class="navigation-bar">

    <div class="logo">
      <img src="http://html.cwsthemes.com/unilearn/img/logo@2x.png" alt="unilearn">
      <h1>uniLearn</h1>
    </div>
    <div class="bar-icon"><i class="fa-solid fa-bars"></i></div>
    <div class="navigation-links">
      <a href="../home/">Home</a>
      <a href="#">About</a>
      <a href="../service/">Service</a>
      <a href="../contact/">Contact</a>
    </div>
    <a href="tel:+9940509709585" class="sign-in-button">Call  Us   </a>

  </section>


  <div class="about" data-aos="zoom-in" data-aos-duration="1000">
    <div class="overlay-about"></div>
    <div class="about-text-container">

      <h1 data-aos="fade-down-right" data-aos-duration="2000">About Us</h1>
      <p data-aos="fade-down-right" data-aos-duration="2300">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br> Ut nec tincidunt arcu, sit amet fermentum sem.
      </p>
    </div>
  </div>


  <section class="staff" data-aos="zoom-in" data-aos-duration="1000">
    <h1 data-aos="zoom-in" data-aos-duration="1500"> Meet Our Teachers</h1>

    <div class="teachers row" data-aos="fade-down" data-aos-duration="2500">

    <?php
    $sql = "SELECT * FROM teachers";
    $run = mysqli_query($conn , $sql);
    while($teacher = mysqli_fetch_assoc($run)){
      ?>
      
      <div id="teacher<?=$teacher['id']?>"  class="col-12 col-md-5 card " style="background-color:#<?=$teacher['color']?>">
        <div class="card-text-container row">
          <div class="card-left col-12 col-md-6">
            <img src="../img/teachers/<?=$teacher['image']?>" alt="" class="w-100">
          </div>
          <div class="card-right col-12 col-md-6">
            <h3><?=$teacher['name']?></h3>
            <h5> <?=$teacher['job']?></h5>
            <p><?=$teacher['about']?></p>
            <div class="social-media">
              <a href="https://www.instagram.com/<?=$teacher['facebook']?>"><i class="fa-brands fa-instagram"></i></a>
              <a href="https://www.facebook.com/<?=$teacher['instagram']?>"><i class="fa-brands fa-facebook-f"></i></a>
              <a href="https://twitter.com/<?=$teacher['twitter']?>"><i class="fa-brands fa-twitter"></i></a>
            </div>
          </div>
        </div>
      </div>
      <?php
    }

    ?>
    </div>
  </section>


  <section class="countup"  data-aos="zoom-in" data-aos-duration="1500">
    <img src="http://html.cwsthemes.com/unilearn/img/parallax.png" alt="parallax image" class="parallax-image">
    <div class="info row">
    <?php
      $sql = "SELECT * FROM counter";
      $run = mysqli_query($conn, $sql);
      while ($counter = mysqli_fetch_assoc($run)) {
      ?>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="info-ikon"><i class="fa-solid fa-<?= $counter['icon'] ?>"></i></div>
          <h1 id="counter"><?= $counter['count'] ?></h1>
          <p> <?= $counter['name'] ?> </p>
        </div>
      <?php
      }
      ?>
    </div>




  </section>


  <section class="learn-more row">
    <div class="col-12 col-md-6 video " data-aos="fade-down-right" data-aos-duration="2000">
      <video controls auto class="w-100" poster="http://html.cwsthemes.com/unilearn/pic/slider-3.jpg">
       <source src="../home/video.mp4">
      </video>
 
    </div>
    <div class="col-12 col-md-6 learn-right-side" data-aos="fade-down-left" data-aos-duration="2000">
     <h2>Learn More About Us From Video</h2>
     <p>Donec sollicitudin lacus in felis luctus blandit. Ut hendrerit mattis justo at susp. Vivamus orci urna, ornare vitae tellus in, condimentum imperdiet eros. Maecea accumsan, massa nec vulputate congue.
 
       Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
       
    </div>
 
   </section>

   
    <?php include "../template/footer.php" ?>

   <section class="footer" >
    <div class="copyright">
      uniLearn 2015 &copy All Rights Reserved
    </div>
    <div class="nav-links">
      <a href="../home/">Home</a>
      <a href="#">About</a>
      <a href="../service/">Service</a>
      <a href="../contact/">Contact</a>
    </div>
  </section>

  <script src="../home/script.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>