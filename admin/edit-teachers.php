<?php
include_once "../config.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM teachers WHERE id=" . $id;
    $run = mysqli_query($conn, $sql);
    $teacher = mysqli_fetch_assoc($run);
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
    <a style="margin:10px" href="teachers.php" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i> Back</a>
        
        <form method="POST" action="save.php" style="margin: 20px;" enctype="multipart/form-data">
            <input type="hidden" value="<?= $teacher['id'] ?>" name="id">
            <input type="hidden" value="edit-teachers" name="act">
            <img style="width:400px" src="../img/teachers/<?= $teacher['image'] ?>" alt="" >
            <br><br>
            <h6>Change Photo</h6><input type="file" name="image">
            <br><br>
            <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input style="width:400px" class="form-control" name="name" value="<?= $teacher['name'] ?>">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Job</label>
                <input style="width:400px" class="form-control" name="job" value="<?= $teacher['job'] ?>">
            </div>
            <label for="" class="form-label">About</label>
            <div class="form-floating" style="margin-bottom: 10px;">
                <textarea class="form-control" style="height: 120px; width:400px" name="about"><?= $teacher['about'] ?></textarea>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Instagram</label>
                <input style="width:400px" class="form-control" name="instagram" value="<?= $teacher['instagram'] ?>">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Facebook</label>
                <input style="width:400px" class="form-control" name="facebook" value="<?= $teacher['facebook'] ?>">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Twitter</label>
                <input style="width:400px" class="form-control" name="twitter" value="<?= $teacher['twitter'] ?>">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Color</label>
                <select name="color" style="width:400px;" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option <?php if($teacher['color']=="F27C66") echo"selected"?> value="F27C66">Red</option>
                    <option <?php if($teacher['color']=="eeb973") echo"selected"?> value="eeb973">Yellow</option>
                    <option <?php if($teacher['color']=="18bb7c") echo"selected"?> value="18bb7c">Green</option>
                    <option <?php if($teacher['color']=="2d3339e7") echo"selected"?> value="2d3339e7">Black</option>
                    <option <?php if($teacher['color']=="b0b0b0") echo"selected"?> value="b0b0b0">Gray</option>
                    <option <?php if($teacher['color']=="4bb4bc") echo"selected"?> value="4bb4bc">Cyan</option>
                   
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </section>

    <?php include_once "includes/library.php" ?>
</body>

</html>