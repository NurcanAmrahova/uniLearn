<?php
include "../config.php";
$sql = "SELECT * FROM contact";
$run = mysqli_query($conn , $sql);
$contact = mysqli_fetch_assoc($run);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./contact.css">
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
            <a href="../about/">About</a>
            <a href="../service/">Service</a>
            <a href="#">Contact</a>
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
            <a href="#">Contact</a>
            
        </div>
        <a href="tel:+9940509709585" class="sign-in-button">Call  Us   </a>


    </section>

    <section class="contact-intro">
        <div class="contact-overlay"></div>
        <div class="contact-text-container" data-aos="fade-down-right" data-aos-duration="1700">
            <h1> Contact</h1>
            <p>Get In Touch With Us</p>
        </div>

    </section>

    <div class="contact-forum row" data-aos="zoom-in" data-aos-duration="1700">

        <div class="col-12 col-md-7 form" data-aos="fade-right" data-aos-duration="2000">
            <h1> Get Intouch</h1>
            <p>Have a question or just want to say hi? We'd love to hear from you.</p>
            <form onsubmit="return false" class="row">

                <input type="text" placeholder="Your Name" id="mname" class="col-12 " required>
                <input type="email" placeholder="Your Email" id="memail" class="col-12 " required>
                <input type="text" placeholder="Your Subject" id="msubject" required>
                <input type="text" placeholder="Your Message" id="mmessage" required>

                <button type="submit" onclick="sendMessage()" class="col-3 submit-button" > Send Message</button>
            </form>
        </div>

        <div class="col-12 col-md-4 connection" data-aos="fade-left" data-aos-duration="2000">
            <div class="address">

                <i class="fa-sharp fa-solid fa-location-dot"></i>
                <span>Office</span>
                <p><?=$contact['street']?><br> <?=$contact['city']?> <br> <?=$contact['country']?></p>
            </div>
            <div class="email">
                <i class="fa-solid fa-envelope"></i>
                <span>Email Us Directly</span>
                <p><?=$contact['email']?></p>
            </div>
            <div class="phone">
                <i class="fa-solid fa-phone"></i>
                <span>Phone</span>
                <p>
                <?=$contact['phone']?>
                </p>
            </div>

            <div class="socail-media">
                <span> Follow Us </span>
                <br>
                <a href="https://www.instagram.com/<?=$contact['instagram']?>"><i class="fa-brands fa-instagram" class="instagram"></i></a>
                <a href="https://www.facebook.com/<?=$contact['facebook']?>"><i class="fa-brands fa-facebook-f" class="facebook"></i></a>
                <a href="https://twitter.com/<?=$contact['twitter']?>"><i class="fa-brands fa-twitter" class="twitter"></i></a>
            </div>
        </div>
    </div>

    <?php include "../template/footer.php" ?>
    


    <section class="footer">
        <div class="copyright">
          uniLearn 2015 &copy All Rights Reserved
        </div>
        <div class="nav-links">
          <a href="../home/">Home</a>
          <a href="../about/">About</a>
          <a href="../service/">Service</a>
          <a href="#">Contact</a>
        </div>
      </section>









    <script src="../home/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
    function sendMessage() {
      var name = $("#mname").val();
      var email = $("#memail").val();
      var subject = $("#msubject").val();
      var message = $("#mmessage").val();
        $.ajax({
          url: "send-message.php",
          method: "POST",
          data: {
            name:name,
            email:email,
            subject:subject,
            message:message
          },
          success: function(data) {
              $("#mname").val("");
              $("#memail").val("");
              $("#msubject").val("");
              $("#mmessage").val("");

            alert("You message send!");


          }
        });
    }
      AOS.init();
    </script>
</body>

</html>