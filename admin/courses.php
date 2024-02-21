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
    <a style="margin:10px" href="add-course.php" class="btn btn-primary">Add Course</a>
        <table class="table">
            <thead>
                <tr>
                    
                    <th scope="col">Name</th>
                    <th scope="col">Teacher</th>
                    <th scope="col">Price</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM courses";
                $run = mysqli_query($conn, $sql);
                while ($course = mysqli_fetch_assoc($run)) {
                ?>
                    <tr>
                        
                        <td><?= $course['name'] ?></td>
                        <td><?= $course['teacher'] ?></td>
                        <td><?= $course['price'] ?>$</td>
                        <td>
                            <a href="edit-courses.php?id=<?= $course['id'] ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                        </td>
                        <td>
                            <a href="delete-courses.php?id=<?= $course['id'] ?>"><i class="fa-solid fa-trash"></i></a>
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