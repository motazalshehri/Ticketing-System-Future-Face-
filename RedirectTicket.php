<?php

include('connecttoDB.php');
$id = $_POST["id"];
$RedirectedBy = $_POST["RedirectedBy"];
$comment = $_POST["comment"];

$query = "UPDATE tickets SET status = 'Redirected', sentTo = '', redirected = 'true' , RedirectedBy = '$RedirectedBy', comment = '$comment'  WHERE num = '$id' ";

mysqli_query($conn, $query);
header('location:user homepage.php');
