<?php      

    include('connecttoDB.php');
    $id = $_POST["id"];  

    $query = "UPDATE tickets SET status = 'Completed' WHERE num = '$id' ";
    mysqli_query($conn,$query);
    header('location:user homepage.php?completed=The ticket has been marked as Completed');  

    ?>