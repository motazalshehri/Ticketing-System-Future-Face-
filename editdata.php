<?php

include('connecttoDB.php');


$id = $_POST['id'];
$title = $_POST["title"];
$department = $_POST["department"];
$complaint = $_POST["complaint"];

   $query = "UPDATE tickets SET title = '$title', department = '$department', complaint ='$complaint', WHERE num= '$id' ";
   mysqli_query($conn, $query);


   header('location:user homepage.php?edited=The ticket has been edited');


?>