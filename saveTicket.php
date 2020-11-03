<?php

include('connecttoDB.php');  

$title = $_POST["title"];
$department = $_POST["department"];
$complaint = $_POST["complaint"];
$username = "ahmad";

$query = "INSERT INTO tickets(title,username,department,complaint)
          VALUES ('".$title."','".$username."','".$department."','".$complaint."')";

 mysqli_query($conn,$query);

?>