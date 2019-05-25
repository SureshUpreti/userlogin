<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT id FROM users WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      
      $count = mysqli_num_rows($result);
      
		
      if($count == 1) {
         $_SESSION['username'] = $myusername;
         $_SESSION['password'] = $mypassword;
         
         header("location: welcome.php");
      }else {
         header("location:invalid.php");
      }
   }
?>