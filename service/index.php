<?php
include "../config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./service.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
      <a href="../about/">About</a>
      <a href="#">Service</a>
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
      <a href="../about/">About</a>
      <a href="../service/">Service</a>
      <a href="../contact/">Contact</a>
    </div>
    <a href="tel:+9940509709585" class="sign-in-button">Call Us </a>


  </section>

  <div class="service-intro">
    <h1 data-aos="flip-" data-aos-duration="1500"> Services</h1>
    <p data-aos="fade-up" data-aos-duration="2000">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Quaerat atque at, dolor accusantium eveniet facere.</p>
  </div>

  <section class="we-offer row" data-aos="zoom-in" data-aos-duration="2000">
    <div class="col-12 col-md-6 left-side" data-aos="fade-right" data-aos-duration="2300">
      <img src="http://html.cwsthemes.com/unilearn/pic/H340-img-1@2x.jpg" alt="" class="w-100">
    </div>

    <div class="col-12 col-md-6 right-side" data-aos="fade-left" data-aos-duration="2300">
      <h2> We Offer</h2>
      <p>Donec sollicitudin lacus in felis luctus blandit. Ut hendrerit mattis justo at suscipit. Vivamus orci urna, ornare vitae tellus in, condimentum imperdiet eros. Maecenas accumsan, massa nec vulputate congue.</p>
      <p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.</p>

      <a href="#"> EDUCATION</a>
      <a href="#">KNOWLEDGE</a>
      <a href="#">EMPLOYMENT</a>
    </div>
  </section>


  <section class="course-program" data-aos="zoom-in" data-aos-duration="1700">
    <h1 data-aos="flip-left" data-aos-duration="2000"> Courses Programs</h1>

    <?php
    $sql = "SELECT * FROM courses";
    $run = mysqli_query($conn, $sql);
    while ($course = mysqli_fetch_assoc($run)) {
    ?>
      <div  class="course-program-info" data-aos="fade-down" data-aos-duration="2000">
        <div id="course<?=$course['id']?>" class="course-info row">
          <div class="col-12 col-md-5">
            <img src="../img/course/<?=$course['image']?>" alt="" class="w-100">
          </div>
          <div class="col-12 col-md-6 right">
            <h2> <?=$course['name']?></h2>
            <h4> Teacher : <?=$course['teacher']?></h4>
            <p> Course Program:</p>
            <p><?=$course['about']?></p>
            <p>Price: <?=$course['price']?>$</p>
          </div>
        </div>
        <hr>
      <?php
    }
      ?>
  </section>
  <?php include "../template/footer.php" ?>
  <section class="footer">
    <div class="copyright">
      uniLearn 2015 &copy All Rights Reserved
    </div>
    <div class="nav-links">
      <a href="../home/">Home</a>
      <a href="../about/">About</a>
      <a href="#">Service</a>
      <a href="../contact/">Contact</a>
    </div>
  </section>
  <script src="../home/script.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>