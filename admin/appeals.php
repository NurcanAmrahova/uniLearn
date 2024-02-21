<?php
include "../config.php";

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

    <section style="margin:10px" class="main_content dashboard_part large_header_bg">
        <h2>Appeals</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">phone</th>
                    <th scope="col">Comment</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM appeals";
                $run = mysqli_query($conn, $sql);
                while ($appeals = mysqli_fetch_assoc($run)) {
                ?>
                    <tr>
                        <td> <a href="message-detail.php?id=<?=$appeals['id']?>"><?= $appeals['name'] ?></a></td>
                        <td><a href="tel:<?= $appeals['phone'] ?>"><?= $appeals['phone'] ?></a></td>
                        <td><a > <?= $appeals['comment'] ?></a></td>
                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
    </section>

    <?php include_once "includes/library.php" ?>
</body>

</html>