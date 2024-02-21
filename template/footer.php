<?php
include "../config.php";
$sql = "SELECT * FROM contact";
$run = mysqli_query($conn , $sql);
$contact = mysqli_fetch_assoc($run);
?>
<div class="first-footer row">
    <div class="col-12 col-md-6 col-lg-3 footer-left-side">
      <h4 style="background-color:#f27c66"> About Us </h4>
      <p> Sed aliquet dui auctor blandit ipsum tincidunt
        Quis rhoncus lorem dolor eu sem. Aenean enim risus, convallis id ultrices eget.</p>
      <p> <i class="fa-sharp fa-solid fa-location-dot"></i> <?=$contact['street']?> , <?=$contact['city']?>, <?=$contact['country']?></p>
      <p> <i class="fa-solid fa-envelope"></i> <?=$contact['email']?></p>
      <p> <i class="fa-solid fa-phone"></i> <?=$contact['phone']?></p>

    </div>
    <div class="col-12 col-md-6 col-lg-3  footer-center-side">
      <h4 style="background-color:#f9cb8f"> Latest Courses</h4>
      <?php
      $sql = "SELECT * FROM courses ORDER BY id DESC LIMIT 2";
      $run = mysqli_query($conn, $sql);
      while ($course = mysqli_fetch_assoc($run)) {
      ?>
        <div class="last-course ">
        <div class="text ">
          <b> <?=$course['name']?></b>
          <p class="time"><?=$course['teacher']?></p>
          <p><?=$course['about']?></p>
        </div>
      </div>
      <hr>
      <?php
      }
      ?>
      
    </div>
    <div class="col-12 col-md-6 col-lg-3 footer-right-side">
      <h4 style="background-color:#18bb7c">Apply For Instructor</h4>
      <form onsubmit="return false">
        <input type="text" placeholder="Name" id="name">
        <input type="text" placeholder="Phone" id="phone">
        <input type="text" placeholder="Comment" id="comment">
        <button onclick="sendApply()" type="submit"> Submit</button>
      </form>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
function sendApply() {
  var name = $("#name").val();
  var phone = $("#phone").val();
  var comment = $("#comment").val();
    $.ajax({
      url: "../send-apply.php",
      method: "POST",
      data: {
        name:name,
        phone:phone,
        comment:comment,
      },
      success: function(data) {
        console.log(data);
          $("#mname").val("");
          $("#phone").val("");
          $("#comment").val("");


        alert("You apply send!");


      }
    });
}
</script>
