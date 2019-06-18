
<?php
 session_start();
$conn = mysqli_connect("localhost","root","root","foodresta");

  
   

      
      $emailid = mysqli_real_escape_string($conn,$_POST['userid']);
      $password = mysqli_real_escape_string($conn,$_POST['pass']); 
      
      $sql = "SELECT * FROM dbusers WHERE name='$emailid' and password='$password'";
      $result = mysqli_query($conn,$sql);
      $rows = mysqli_num_rows($result);
      if($rows<1){
         
         header("Location:menumc.php");
         
         
         exit();
      }    
      
      if($rows == 1) {
                  $_SESSION['login_user']=$emailid;
					
                    header("Location:menumc.php");
					
                    echo"hii";
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   
?>