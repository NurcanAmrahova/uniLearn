<?php
include "../config.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM messages WHERE id=".$id;
    $run = mysqli_query($conn , $sql);
    $message = mysqli_fetch_assoc($run);
    if($message['status'] == 1){
        $sql = "UPDATE messages SET status='0' WHERE id =".$id;
        $run = mysqli_query($conn , $sql);
    }
}
?>

<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Admin</title>
    <?php include_once "includes/head.php"?>
</head>

<body class="crm_body_bg">


    <?php include_once "includes/navbar.php" ?>

    <section class="main_content dashboard_part large_header_bg">
    <a style="margin:10px" href="mailbox.php" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i> Back</a>
    <div  style="margin:10px; width:400px" >
        <h5>Sender: <?=$message['name']?></h5>
        <h5>Subject: <?=$message['subject']?></h5>
        <h5>Message: <?=$message['message']?></h5>
        
        </div>
    </section>

    <?php include_once "includes/library.php"?>
</body>

</html>