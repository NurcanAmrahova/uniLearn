<?php
include_once "../config.php";
if(isset($_POST['mail'])){
    $mail = $_POST['mail'];
    $sql = "INSERT INTO subscribers (mail) VALUES ('$mail')";
    $run =  mysqli_query($conn , $sql);
}
?>