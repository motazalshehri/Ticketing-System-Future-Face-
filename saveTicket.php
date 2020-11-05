<?php

include('connecttoDB.php');  

$title = $_POST["title"];
$department = $_POST["department"];
$complaint = $_POST["complaint"];
$email = $_POST["email"];

$query = "INSERT INTO tickets(title,email,department,complaint)
          VALUES ('".$title."','".$email."','".$department."','".$complaint."')";

 mysqli_query($conn,$query);
 header('location:user homepage.php');

?>