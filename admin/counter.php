<?php
include_once "../config.php";

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
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Count</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "SELECT * FROM counter";
    $run = mysqli_query($conn , $sql);
    while($counter = mysqli_fetch_assoc($run)){
     ?>
        <tr>
            <th scope="row"><?=$counter['id']?></th>
            <td><?=$counter['name']?></td>
            <td><?=$counter['count']?></td>
            <td>
                <a href="edit-counter.php?id=<?=$counter['id']?>"><i class="fa-solid fa-pen-to-square"></i></a>
            </td>
        </tr>
     <?php
    }
    ?>
    
  </tbody>
</table>
        </section>


    <?php include_once "includes/library.php"?>
</body>

</html>