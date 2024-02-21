<?php
include "../config.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM courses WHERE id=" . $id;
    $run = mysqli_query($conn, $sql);
    header("Location: courses.php");
}

?>