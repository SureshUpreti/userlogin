<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $myusername = mysql_real_escape_string($conn,$_POST['username']);
      $mypassword = mysql_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT id FROM users WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysql_query($db,$sql);
      
      $count = mysql_num_rows($result);
      
		
      if($count == 1) {
         $_SESSION['username'] = $myusername;
         $_SESSION['password'] = $mypassword;
         
         header("location: welcome.php");
      }else {
         header("location: invalid.php");
      }
   }
?>