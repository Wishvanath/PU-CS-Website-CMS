<?php
   
   session_start();
    if (isset($_POST['login_submit'])) {
        echo 'loading..';
         # code...
        $uname = $_POST['uname'];
        $psw = $_POST['psw'];  
        include("php/connect.php");
        //Check for admin login
        if($uname == 'admin' && $psw == 'admin'){
          $_SESSION['login_user'] = $uname;
          header("location: login/admin/index.php");
        }
        else if(true){
          $std_sql="SELECT st_name FROM student WHERE st_regno='$uname' and st_password='$psw'";
          $std_result=mysqli_query($conn, $std_sql);
          $std_count=mysqli_num_rows($std_result);
          echo $std_count;


          // If result matched $myusername and $mypassword, table row must be 1 row
          if($std_count==1)
          {
         //ssion_register("uname");
          $_SESSION['login_user'] = $uname;

          header("location: login/student/index.php");
          }
          else
          {
            echo "<script type='text/javascript'>alert('Wrong user details!')</script>";
          }
         }         
        else{
          echo "<script type='text/javascript'>alert('Wrong user details!')</script>";
        }

        echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";    
        
        

   
    }
?>    