<?php
include "../config.php";

if(isset($_POST['input'])){
   $keyword = $_POST['input'];
   $sql = "SELECT * FROM courses WHERE name LIKE '%".$keyword."%'  ";
   $run = mysqli_query($conn , $sql);
if(mysqli_num_rows($run)>0){
$data = mysqli_fetch_assoc($run);
   echo "course". $data['id'];
}
else{
    $sql = "SELECT * FROM teachers WHERE name LIKE '%".$keyword."%'  ";
   $run = mysqli_query($conn , $sql);
   if(mysqli_num_rows($run)>0){
    $data = mysqli_fetch_assoc($run);
   echo "teacher". $data['id'];
    }
    else echo "";
   
}
}
?>

