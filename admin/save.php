<?php
include_once "../config.php";

if(isset($_POST['act'])){
    $act = $_POST['act'];

    switch ($act){
        case "edit-counter":{
                $id = $_POST['id'];
                $name = $_POST['name'];
                $count = $_POST['count'];
                $sql = "UPDATE counter SET name='$name' , count = '$count' WHERE id=".$id;
                $run = mysqli_query($conn , $sql);
                header("Location: counter.php");
        }break;

        case "edit-teachers":{
                $id = $_POST['id'];
                $name = $_POST['name'];
                $job = $_POST['job'];
                $about = $_POST['about'];
                $instagram = $_POST['instagram'];
                $facebook = $_POST['facebook'];
                $twitter = $_POST['twitter'];
                $color = $_POST['color'];
                $image = $_FILES['image'];
                print_r($_FILES['image']);
                if($image['size'] > 0){
                    $filename = rand(1000,10000) ."-". $image['name'];
                    $tempname = $image['tmp_name'];
                    $path = "img/".$filename;
                    move_uploaded_file($tempname , "../img/teachers/$filename");
                    $sql = "UPDATE teachers SET image = '$filename'  WHERE id='$id'";
                    $run = mysqli_query($conn , $sql);
                }
            
                $sql = "UPDATE teachers SET name='$name' , job='$job' , about='$about' , instagram='$instagram' , facebook='$facebook' , twitter='$twitter' , color='$color'  WHERE id=".$id;
                $run = mysqli_query($conn , $sql); 
                header("Location: teachers.php");
        }break;

        case "add-teachers":{
                $name = $_POST['name'];
                $job = $_POST['job'];
                $about = $_POST['about'];
                $instagram = $_POST['instagram'];
                $facebook = $_POST['facebook'];
                $twitter = $_POST['twitter'];
                $color = $_POST['color'];
                $image = $_FILES['image'];
                print_r($_FILES['image']);
                if($image['size'] > 0){
                    $filename = rand(1000,10000) ."-". $image['name'];
                    $tempname = $image['tmp_name'];
                    $path = "img/".$filename;
                    move_uploaded_file($tempname , "../img/teachers/$filename");
                    $sql = "INSERT INTO teachers (name , job , about , instagram , facebook , twitter , color , image) VALUES ('$name' , '$job' , '$about' , '$instagram' , '$facebook' , '$twitter' , '$color' , '$filename')";
                }
                else {
                    $sql = "INSERT INTO teachers (name , job , about , instagram , facebook , twitter , color , image) VALUES ('$name' , '$job' , '$about' , '$instagram' , '$facebook' , '$twitter' , '$color' , 'default.jpg')";
                }
            
                $run = mysqli_query($conn , $sql); 
                header("Location: teachers.php");
        }break;
            case "edit-courses":{
                $id = $_POST['id'];
                $name = $_POST['name'];
                $teacher = $_POST['teacher'];
                $about = $_POST['about'];
                $price = $_POST['price'];
                $image = $_FILES['image'];
                if($image['size'] > 0){
                    $filename = rand(1000,10000) ."-". $image['name'];
                    $tempname = $image['tmp_name'];
                    $path = "img/".$filename;
                    move_uploaded_file($tempname , "../img/course/$filename");
                    $sql = "UPDATE courses SET image = '$filename'  WHERE id='$id'";
                    $run = mysqli_query($conn , $sql);
                }
                $sql = "UPDATE courses SET name='$name' , teacher='$teacher' , about='$about' , price='$price' WHERE id=".$id;
                $run = mysqli_query($conn , $sql); 
                header("Location: courses.php");
            }break;
            case "add-course":{
                $name = $_POST['name'];
                $teacher = $_POST['teacher'];
                $about = $_POST['about'];
                $price = $_POST['price'];
                $image = $_FILES['image'];
                if($image['size'] > 0){
                    $filename = rand(1000,10000) ."-". $image['name'];
                    $tempname = $image['tmp_name'];
                    $path = "img/".$filename;
                    move_uploaded_file($tempname , "../img/course/$filename");
                    $sql = "INSERT INTO courses(name , teacher , about , price , image) VALUES ('$name' , '$teacher' , '$about' , '$price', '$filename')";
                }
                else {
                    $sql = "INSERT INTO courses(name , teacher , about , price , image) VALUES ('$name' , '$teacher' , '$about' , '$price', 'default.jpg')";
                }
            
                $run = mysqli_query($conn , $sql); 
                header("Location: courses.php");
        }break;
            case "edit-contact":{
                $street = $_POST['street'];
                $city = $_POST['city'];
                $country = $_POST['country'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $instagram = $_POST['instagram'];
                $twitter = $_POST['twitter'];
                $facebook = $_POST['facebook'];
                $sql = "UPDATE contact SET street = '$street', city = '$city', country = '$country', email = '$email', phone = '$phone', instagram = '$instagram', facebook = '$facebook', twitter = '$twitter'";
                $run = mysqli_query($conn , $sql);
                header("Location: contact.php");
        }break;
    }
                
}
