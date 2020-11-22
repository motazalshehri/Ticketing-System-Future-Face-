<?php
session_start();

include('connecttoDB.php');
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "select * from User where email = '$email' and password = '$password' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);


if ($count == 1) {
    $type = $row['type'];

    if ($type == "User") {

        $_SESSION['name'] = $row['name'];

        header('location:user homepage.php');
    }
    if ($type == "Admin") {

        $_SESSION['name'] = $row['name'];

        header('location:admin home page.php');
    }
} else {
    header('location:login.php?error=Wrong Email or Password');
}
