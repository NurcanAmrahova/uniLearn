<?php
include "../config.php"
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
    <a style="margin:10px" href="add-teacher.php" class="btn btn-primary">Add Teacher</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Job</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM teachers";
                $run = mysqli_query($conn, $sql);
                while ($teachers = mysqli_fetch_assoc($run)) {
                ?>
                    <tr>
                        <th scope="row"><img width="40px" src="../img/teachers/<?=$teachers['image'] ?>" alt=""></th>
                        <td><?= $teachers['name'] ?></td>
                        <td><?= $teachers['job'] ?></td>
                        <td>
                            <a href="edit-teachers.php?id=<?= $teachers['id'] ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                        </td>
                        <td>
                            <a href="delete-teachers.php?id=<?= $teachers['id'] ?>"><i class="fa-solid fa-trash"></i></a>
                        </td>
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