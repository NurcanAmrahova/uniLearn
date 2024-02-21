<?php
include_once "../config.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM counter WHERE id=" . $id;
    $run = mysqli_query($conn, $sql);
    $counter = mysqli_fetch_assoc($run);
}




?>


<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Admin</title>
    <?php include_once "includes/head.php" ?>
</head>

<body class="crm_body_bg">


    <?php include_once "includes/navbar.php" ?>


    <section class="main_content dashboard_part large_header_bg">
        <form method="POST" action="save.php" style="margin: 20px;">
            <input type="hidden" value="<?=$counter['id']?>" name="id">
            <input type="hidden" value="edit-counter" name="act">
            <div class="mb-3">
                <label for="" class="form-label" >Name</label>
                <input style="width:400px" class="form-control" name="name" value="<?=$counter['name']?>">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Count</label>
                <input style="width:400px"  class="form-control" name="count" value="<?=$counter['count']?>">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </section>

    <?php include_once "includes/library.php" ?>
</body>

</html>