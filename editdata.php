<?php

include('connecttoDB.php');



$title = $_POST["title"];

$department = $_POST["department"];
$complaint = $_POST["complaint"];
   $query = "UPDATE tickets SET  title = '$title', department = '$department', complaint='$complaint',  WHERE num='$_GET[id]' ";
   mysqli_query($conn, $query);


?>