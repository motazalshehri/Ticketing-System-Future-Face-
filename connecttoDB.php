<?php

$severname = 'localhost';
$username = 'root';
$password = '';
$db ='TicketingSystem';
$conn = mysqli_connect($severname, $username, $password, $db);

if( !$conn){
    die('unable to connect');
} 


?>