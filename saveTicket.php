<?php

include('connecttoDB.php');  

$title = $_POST["title"];
$department = $_POST["department"];
$complaint = $_POST["complaint"];
$sentBy = $_POST["sentBy"];
$sentTo = "";

$query = "INSERT INTO tickets(title,sentBy,department,complaint,sentTo)
          VALUES ('".$title."','".$sentBy."','".$department."','".$complaint."','".$sentTo."')";

 mysqli_query($conn,$query);
 header('location:user homepage.php');

?>