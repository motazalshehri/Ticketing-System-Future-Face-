<?php      
    include('connecttoDB.php');  
    $Email = $_POST['email'];  
    $Password = $_POST['password'];  
      
        $sql = "select *from User where email = '$Email' and password = '$Password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header('location:user homepage.html');  
        }  
        else{  
           echo '<script>alert("Wrong Email or Password")</script>';

        }     
    
?>  