<?php      

    include('connecttoDB.php');
    $id = $_POST["id"];  
    $department = $_POST["department"];  
    $member = $_POST["member"];  

    $query = "UPDATE tickets SET department = '$department', sentTo = '$member', status = 'sent' WHERE num = '$id' ";
    mysqli_query($conn,$query);
    header('location:admin home page.php?sent=The ticket has been sent');  

    ?>