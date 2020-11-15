<?php
    include('connecttoDB.php');  
 
  if (isset($_POST['query'])) {
     
    $query = "SELECT * FROM tickets WHERE num LIKE '{$_POST['query']}%' LIMIT 100";
    $result = mysqli_query($conn, $query);
 
  if (mysqli_num_rows($result) > 0) {
     while ($user = mysqli_fetch_array($result)) {
      echo $user['num']."<br/>";
    }
  } else {
    echo "<p style='color:red'>User not found...</p>";
  }
 
}
?>