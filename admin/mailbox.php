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

    <section class="main_content dashboard_part large_header_bg">
    <h2 style="margin:10px">Message Box</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Email</th>
                    <th scope="col">Status</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM messages";
                $run = mysqli_query($conn, $sql);
                while ($messages = mysqli_fetch_assoc($run)) {
                ?>
                    <tr>
                        <td> <a href="message-detail.php?id=<?=$messages['id']?>"><?= $messages['name'] ?></a></td>
                        <td><?= $messages['subject'] ?></td>
                        <td><a href="mailto:<?= $messages['email']?>"> <?= $messages['email'] ?></a></td>
                        <td><?php if($messages['status']==0) echo '<i class="fa-solid fa-check"></i>'; else echo '<i class="fa-solid fa-x" style="color: #d10000;"></i>';?></td>
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