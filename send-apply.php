<?php
include "config.php";

if(isset($_POST['name'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $comment = $_POST['comment'];

    $sql = "INSERT INTO appeals (name, phone , comment) VALUES ('$name' , '$phone' , '$comment')";
    $run = mysqli_query($conn , $sql);
}

?>