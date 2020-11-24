<?php

include('connecttoDB.php');  

$title = $_POST["title"];
$department = $_POST["department"];
$complaint = $_POST["complaint"];
$sentBy = $_POST["sentBy"];
$sentTo = "";
$redirected = "false";
$redirectedBy = "";
$comment = "";
$dt=date("Y-m-d H:i:s");

$query = "INSERT INTO tickets(title,sentBy,department,complaint,sentTo,redirected,redirectedBy,comment,dt)
          VALUES ('".$title."','".$sentBy."','".$department."','".$complaint."','".$sentTo."','".$redirected."','".$redirectedBy."','".$comment."','". $dt ."')";

 mysqli_query($conn,$query);
 header('location:user homepage.php?sent=The ticket has been sent');

?>