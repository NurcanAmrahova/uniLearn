<?php
include_once "../config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./home.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/countup.js@2.0.7/dist/countUp.min.js"></script>

  <link rel="shortcut icon" href="http://html.cwsthemes.com/unilearn/img/logo@2x.png" type="image/x-icon">
  <title>UniLearn</title>
</head>

<body>
  <div class="overlay-menu">
    <i class="fa-solid fa-circle-xmark"></i>
    <div class="overlay-navigation-links">
      <a href="#">Home</a>
      <a href="../about/">About</a>
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
      <a href="#">Home</a>
      <a href="../about/">About</a>
      <a href="../service/">Service</a>
      <a href="../contact/">Contact</a>
    </div>
    <a href="tel:+994509709585" class="sign-in-button">Call Us</a>
  </section>

  <section class="introduction ">
    <div class="intro-text-container" data-aos="fade-down-right" data-aos-duration="1500">
      <h1>Get Everything Right</h1>
      <p>Aenean viverra lobortis purus, sed eleifend nisl egestas in</p>
      <form onsubmit="return false" class='search-bar' data-aos="fade-up" data-aos-duration="2000">
        <input id="searchInput" type="text" placeholder='Search Anything    . . .'>
        <button onclick="filterSearch()" type='submit'><i class="fa-solid fa-magnifying-glass search-icon"></i></button>
      </form>
    </div>
  </section>

  <section class="courses" data-aos="zoom-in" data-aos-duration="1500">
    <h1> Latest Courses</h1>

    <div class="course-container row">
      <?php
      $sql = "SELECT * FROM courses ORDER BY id DESC LIMIT 3";
      $run = mysqli_query($conn, $sql);
      while ($couse = mysqli_fetch_assoc($run)) {
      ?>
        <div class="col-12 col-md-6 col-lg-4 course" data-aos="flip-left" data-aos-duration="2000">
          <img src="../img/course/<?=$couse['image']?>" alt="" class="w-100">
          <div class="image-text-container">
            <h2><?=$couse['name']?></h2>
            <a href="../service/">Learn More</a>
          </div>
        </div>
      <?php
      }

      ?>
    </div>
  </section>

  <section class="countup" data-aos="zoom-in" data-aos-duration="1500">
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

  <section class="services row">
    <div class="services-left-side col-12 col-md-6" data-aos="zoom-out-right" data-aos-duration="2000">
      <div class="services-images row">
        <div class="col-6 col-md-6 col-lg-3 service-icon"><i class="fa-solid fa-laptop-code"></i></div>
        <div class="col-6 col-md-6 col-lg-3 service-icon"><i class="fa-solid fa-paintbrush"></i></div>
        <div class="col-6 col-md-6 col-lg-3 service-icon"><i class="fa-solid fa-utensils"></i></div>
        <div class="col-6 col-md-6 col-lg-3 service-icon"><i class="fa-solid fa-city"></i></div>
        <div class="col-6 col-md-6 col-lg-3 service-icon"><i class="fa-solid fa-suitcase-medical"></i></div>
        <div class="col-6 col-md-6 col-lg-3 service-icon"><i class="fa-solid fa-comments"></i></div>
        <div class="col-6 col-md-6 col-lg-3 service-icon"><i class="fa-solid fa-chart-pie"></i></div>
        <div class="col-6 col-md-6 col-lg-3 service-icon"><i class="fa-solid fa-database"></i></div>
      </div>
    </div>
    <div class="services-right-side col-12 col-md-5" data-aos="zoom-out-left" data-aos-duration="2000">
      <h1>Our Services</h1>
      <p>Donec sollicitudin lacus in felis luctus blandit. Ut hendrerit mattis justo at susp. Vivamus orci urna, ornare
        vitae tellus in, condimentum imperdiet eros. Maecea accumsan, massa nec vulputate congue. </p>
      <a href="../service/service.htm" class="service-button">Learn More</a>
    </div>
  </section>

  <hr>

  <section class="how-we-work " data-aos="zoom-in" data-aos-duration="1000">
    <h1> How We Work</h1>
    <div class="first-step row">
      <div class="step-text-container  col-12 col-md-6 left" style="background-color:#F27c66" data-aos="fade-right" data-aos-duration="2000">
        <h2>Search Your Course</h2>
        <p>Lorem ipsum dolor sit amet, consectetuer adipisc ing elit. Aenean commodo ligula.</p>
      </div>
      <div class="steps step1  col-12 col-md-6">
        <h3 data-aos="fade-left" data-aos-duration="2000">STEP 1</h3>
      </div>
    </div>
    <div class="second-step row">

      <div class="steps step2 col-12 col-md-6 ">
        <h3 data-aos="fade-right" data-aos-duration="2300">STEP 2</h3>
      </div>

      <div class="step-text-container col-12 col-md-6 right" style="background-color:#F9CB8F" data-aos="fade-left" data-aos-duration="2300">
        <h2>Take A Sample Lesson</h2>
        <p>Lorem ipsum dolor sit amet, consectetuer adipisc ing elit. Aenean commodo ligula.</p>
      </div>
    </div>
    <div class="third-step row">
      <div class="step-text-container col-12 col-md-6 left" style="background-color:#18BB7C" data-aos="fade-right" data-aos-duration="2600">
        <h2>Purchase The Course</h2>
        <p>Lorem ipsum dolor sit amet, consectetuer adipisc ing elit. Aenean commodo ligula.</p>
      </div>
      <div class="steps step3 col-12 col-md-6 " data-aos="fade-left" data-aos-duration="2600">
        <h3>STEP 3</h3>
      </div>
    </div>

  </section>

  <section class="subscription" data-aos="zoom-in" data-aos-duration="1500">
    <h1> Get In Touch With Us</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur illo at facere, reprehenderit perspiciatis tenetur incidunt eum quidem consequuntur obcaecati!</p>
    <form onsubmit="return false" ; data-aos="flip-left" data-aos-duration="2300">
      <input type="text" placeholder="Enter Your Email" id="subscriberMail">
      <button onclick="addSubscriber()">Subscribe</button>
    </form>
  </section>


  <section class="learn-more row">
    <div class="col-12 col-md-6 video " data-aos="fade-right" data-aos-duration="2000">
      <video controls auto class="w-100" poster="http://html.cwsthemes.com/unilearn/pic/slider-3.jpg">
        <source src="./video.mp4">
      </video>

    </div>
    <div class="col-12 col-md-6 learn-right-side" data-aos="fade-left" data-aos-duration="2000">
      <h2>Learn More About Us From Video</h2>
      <p>Donec sollicitudin lacus in felis luctus blandit. Ut hendrerit mattis justo at susp. Vivamus orci urna, ornare vitae tellus in, condimentum imperdiet eros. Maecea accumsan, massa nec vulputate congue.

        Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
      <a href="../about/" class="service-button">Learn More</a>
    </div>

  </section>


  <?php include "../template/footer.php" ?>


  <section class="footer">
    <div class="copyright">
      uniLearn 2015 &copy All Rights Reserved
    </div>
    <div class="nav-links">
      <a href="#">Home</a>
      <a href="../about/">About</a>
      <a href="../service/">Service</a>
      <a href="../contact/">Contact</a>
    </div>
  </section>

  <script src="./script.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    function addSubscriber() {
      var mail = $("#subscriberMail").val();
      if (mail != "") {
        $.ajax({
          url: "add-subscriber.php",
          method: "POST",
          data: {
            mail: mail
          },
          success: function(data) {
            $("#subscriberMail").val("");
            alert("You have successfully subscribed!");
          }
        });
      }
    }

    function filterSearch(){
      var input = $("#searchInput").val();
      if (input != "") {
        $.ajax({
          url: "filter.php",
          method: "POST",
          data: {
            input: input
          },
          success: function(data) {
            if(data.length>0)
            {
              if(data[0] == "c"){
               window.location.replace("../service/#"+data);
            }
            else window.location.replace("../about/#"+data);
            }
            
           
            
          }
        });
      }
    }
    AOS.init();

    var options = {
      startVal: 0,
      endVal: 1000,
      duration: 3,
    };

    var countUp = new CountUp('counter', options);
    countUp.start();
  </script>
</body>

</html>