<?php
include "../config.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM teachers WHERE id=" . $id;
    $run = mysqli_query($conn, $sql);
    header("Location: teachers.php");
}

?>