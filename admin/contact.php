<?php
include_once "../config.php";

    $sql = "SELECT * FROM contact";
    $run = mysqli_query($conn, $sql);
    $contact = mysqli_fetch_assoc($run);

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
            <input type="hidden" value="edit-contact" name="act">
            <div class="mb-3">
                <label for="" class="form-label" >Street</label>
                <input style="width:400px" class="form-control" name="street" value="<?=$contact['street']?>">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">City</label>
                <input style="width:400px"  class="form-control" name="city" value="<?=$contact['city']?>">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Country</label>
                <input style="width:400px"  class="form-control" name="country" value="<?=$contact['country']?>">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input style="width:400px"  class="form-control" name="email" value="<?=$contact['email']?>">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Phone</label>
                <input style="width:400px"  class="form-control" name="phone" value="<?=$contact['phone']?>">
            </div><div class="mb-3">
                <label for="" class="form-label">Instagram</label>
                <input style="width:400px"  class="form-control" name="instagram" value="<?=$contact['instagram']?>">
            </div><div class="mb-3">
                <label for="" class="form-label">Twitter</label>
                <input style="width:400px"  class="form-control" name="twitter" value="<?=$contact['twitter']?>">
            </div><div class="mb-3">
                <label for="" class="form-label">Facebook</label>
                <input style="width:400px"  class="form-control" name="facebook" value="<?=$contact['facebook']?>">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </section>

    <?php include_once "includes/library.php" ?>
</body>

</html>