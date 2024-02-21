<?php
include "../config.php";

if(isset($_POST['name'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO messages (name, email , subject , message) VALUES ('$name' , '$email' , '$subject' , '$message')";
    $run = mysqli_query($conn , $sql);
}

?>