<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>cs admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="../assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<?php
      session_start();
      include '../../php/connect.php';
      //Retrieve the student details

      $uname = $_SESSION['login_user'];
      if(!$_SESSION['login_user']){
        header("Location: ../../index.php");
      }
      $stdetails_qry = "SELECT * FROM student WHERE st_regno=$uname";
      $stdetails_result = mysqli_query($conn, $stdetails_qry);
      $stdetails_row = mysqli_fetch_assoc($stdetails_result);
      
      if (isset($_POST['st_submit'])) {
        
       
        
        $st_libid = $_POST['st_libid'];
        $st_phone = $_POST['st_phone'];
        $st_yrjoin = $_POST['st_yrjoin'];
        $st_email = $_POST['st_email'];
        $st_address = $_POST['st_address'];
        $st_adhar = $_POST['st_adhar'];
        $st_gender = $_POST['st_gender'];
        $st_category = $_POST['st_category'];
        $newstudent_sql = "UPDATE student SET st_libid = '$st_libid', st_phone = '$st_phone', st_yrjoin = '$st_yrjoin', st_mail = '$st_email', st_address = '$st_address', st_aadhar = '$st_adhar', st_gender = '$st_gender', st_category = '$st_category' WHERE st_regno=$uname";

        if (mysqli_query($conn, $newstudent_sql)) {
            echo "<script type='text/javascript'>alert('Successfully Added!')</script>";
        } else {
            echo "Error: " . $newstudent_sql . "<br>" . mysqli_error($conn);
        }
      }

      
      
    ?>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <nav class="" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">menu
                    <span class="sr-only" style="color: #fff;">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"><a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation" style="margin-bottom: 0;">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="../assets/img/logo.png" class="logo-image img-responsive"/>
                    </li>
                
                    
                   
                    <li>
                        <a  class="active-menu" href="newfaculty.php"><i class="fa fa-edit fa-3x"></i> Profile</a>
                    </li>
                    <li>
                        <a href="newstudent.php"><i class="fa fa-edit fa-3x"></i>Message from HOD</a>
                    </li>       
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
              <h2>YOUR PROFILE</h2>  
              <hr/>
              <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <form class="new_news" action="index.php" method="POST" name="st_profileForm">
                        <label>Name</label>
                        <input type="text" name="st_name" disabled value="<?php echo $stdetails_row['st_name']; ?>">
                        <label>Registration no</label>
                        <input type="text" name="st_regno" value="<?php echo $stdetails_row['st_regno']; ?>" disabled>
                        <label>Course</label>
                        <input type="text" name="st_course" value="<?php echo $stdetails_row['st_course']; ?>" disabled>
                        <label>DOB </label>
                        <input type ="text" name="st_dob" value="<?php echo $stdetails_row['st_dob']; ?>" disabled>
                        <label>Library ID</label>
                        <input required type="text" name="st_libid" value="<?php echo $stdetails_row['st_libid']; ?>">
                        <label>Year of join</label>
                        <input required type="text" name="st_yrjoin" value="<?php echo $stdetails_row['st_yrjoin']; ?>">
                        <label>Phone no</label>
                        <input required type="text" name="st_phone" value="<?php echo $stdetails_row['st_phone']; ?>">
                        <label>Email ID</label>
                        <input required type ="text" name="st_email" value="<?php echo $stdetails_row['st_mail']; ?>">
                        <label>Adress</label>
                        <input required type="text" name="st_address" value="<?php echo $stdetails_row['st_address']; ?>">
                        <label>Adhar No</label>
                        <input required type="text" name="st_adhar" value="<?php echo $stdetails_row['st_aadhar']; ?>">
                        <label>Category</label>
                        <select name="st_category">
                          <option selected><?php echo $stdetails_row['st_category']; ?></option>
                          <option>OBC</option>
                          <option>SC</option>
                          <option>ST</option>
                          <option>GEN</option>   
                        </select>
                        <label>Gender</label><br>
                        <input required type="radio" name="st_gender" value="male"> Male<br>
  						<input required type="radio" name="st_gender" value="female"> Female<br>
  						<input required type="radio" name="st_gender" value="other"> Other
                        <input type="submit" name="st_submit" value="Update Details">
                    </form>
                </div>
                  <!-- /. ROW  -->
            </div>
             <!-- /. PAGE INNER  -->
        </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <!-- Validate the new student form -->
   
    
    

</head>
<body>
   
</body>
</html>
