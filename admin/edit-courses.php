<?php
include_once "../config.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM courses WHERE id=" . $id;
    $run = mysqli_query($conn, $sql);
    $course = mysqli_fetch_assoc($run);
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
    <a style="margin:10px" href="courses.php" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i> Back</a>
        
        <form method="POST" action="save.php" style="margin: 20px;" enctype="multipart/form-data">
            <input type="hidden" value="<?= $course['id'] ?>" name="id">
            <input type="hidden" value="edit-courses" name="act">
            <img style="width:400px" src="../img/course/<?= $course['image'] ?>" alt="" >
            <br><br>
            <h6>Change Photo</h6><input type="file" name="image">
            <br><br>
            <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input style="width:400px" class="form-control" name="name" value="<?= $course['name'] ?>">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Color</label>
                <select name="teacher" style="width:400px;" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <?php

                        $sql = "SELECT * FROM teachers";
                        $run = mysqli_query($conn, $sql);
                        while($teacher = mysqli_fetch_assoc($run)){
                            ?>
                                <option <?php if($teacher['name']==$course['teacher']) echo"selected"?> value="<?=$teacher['name']?>"><?=$teacher['name']?></option>
                            <?php
                        }
                    ?>   
                </select>
            </div>
            <label for="" class="form-label">About</label>
            <div class="form-floating" style="margin-bottom: 10px;">
                <textarea class="form-control" style="height: 120px; width:400px" name="about"><?= $course['about'] ?></textarea>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Price</label>
                <input style="width:400px" class="form-control" name="price" value="<?= $course['price'] ?>">
            </div>
            

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </section>

    <?php include_once "includes/library.php" ?>
</body>

</html>