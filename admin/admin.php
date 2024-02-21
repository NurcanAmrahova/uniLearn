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

<?php
$message = "";
if (isset($_POST['pass'])) {
    $pass = mysqli_escape_string($conn ,$_POST['pass'] ) ;
    $repass = mysqli_escape_string($conn ,$_POST['repass']);
    if (!empty($pass) && !empty($repass)) {
        if ($pass == $repass) {
            $pass = md5($pass);
            $sql = "UPDATE admins SET  password='$pass'";
            $run = mysqli_query($conn, $sql);
        } else {
            $message="Passwords are not the same!";
        }
    } }
?>


    <?php include_once "includes/navbar.php" ?>

    <section class="main_content dashboard_part large_header_bg">
        <?php if($message!="") echo "<script>alert('".$message."')</script>"?>
        <?php
            $sql = "SELECT username FROM admins";
            $run = mysqli_query($conn , $sql);
            $data = mysqli_fetch_assoc($run);
        ?>
        <div style="padding:5px; margin:20px">
            <a style="padding:5px; " href="logout.php" class="btn-danger">LOGOUT</a>
            <form method="POST" action="#" style="margin: 20px 0;">
                <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input type="password" style="width:400px" class="form-control" name="pass" value="">
                </div>
                <div type="password" class="mb-3">
                    <label for="" class="form-label">Re-Pasword</label>
                    <input  type="password" style="width:400px" class="form-control" name="repass" value="">
                </div>
                <p><?=$message?></p>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>

        </div>

    </section>

    <?php include_once "includes/library.php" ?>
</body>

</html>