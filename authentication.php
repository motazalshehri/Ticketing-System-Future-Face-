<?php      
    session_start();

    include('connecttoDB.php');  
    $email = $_POST['email'];  
    $password = $_POST['password'];  
    $type = $_POST['radio'];

        $sql = "select * from User where email = '$email' and password = '$password' and type = '$type' ";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  

        $_SESSION['email']= $email; 

        if($count == 1){  
        if($type == User){
             
            header('location:user homepage.php');  
        } if($type == Admin){
            header('location:admin home page.html');  
        }

        }  
        else{  
           echo '<script>alert("Wrong Email or Password")</script>';

        }     
    
?>   