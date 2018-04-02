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
                        <a  href="index.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                      <li>
                        <a  href="msgandqote.php"><i class="fa fa-bullhorn fa-3x"></i> Message and Quote</a>
                    </li>
                    <li>
                        <a  href="news.php"><i class="fa fa-edit fa-3x"></i> News </a>
                    </li>
                    <li>
                        <a  href="newfaculty.php"><i class="fa fa-edit fa-3x"></i> New faculty </a>
                    </li>
                    <li>
                        <a  class="active-menu" href="newstudent.php"><i class="fa fa-edit fa-3x"></i> New student </a>
                    </li>       
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
              <h2>ADD STUDENT</h2>  
              <hr/>
              <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <form class="new_news" action="newstudent.php" method="POST" name="newstudentForm" onsubmit="return validateNewstudentForm()">
                        <label>Name<span class="mandatory">* </span><span id="er_stname" class="errormsg"></span></label>
                        <input type="text" name="st_name" autofocus>
                        <label>Registration no<span class="mandatory">* </span><span id="er_stregno" class="errormsg"></span></label>
                        <input type="text" name="st_regno">
                        <label>Course<span class="mandatory">* </span><span id="er_stcourse" class="errormsg"></span></label>
                        <select name="st_course">
                          <option selected>Select course</option>
                          <option>M.C.A.</option>
                          <option>M.Sc. Computer Science</option>
                          <option>M.Sc. Five Year Integrated Computer Science</option>
                          <option>M.Tech. Network & Internet Engineering.</option>
                          <option>Ph.D. Computer Science & Engineering </option>   
                        </select>

                        <label>DOB<span class="mandatory">* </span><span id="er_stdob" class="errormsg"></span></label>
                        <input type="text" name="st_dob" placeholder="DD/MM/YYYY">
                        <input type="submit" name="newstudent_submit" value="Add  Student">
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
   
     <script type="text/javascript">
      var letterNumber = /^[0-9a-zA-Z ]+$/;
      function validateNewstudentForm() {
        /* Student name */
        var st_name = document.forms["newstudentForm"]["st_name"].value;
        if (st_name == "") {
            document.getElementById("er_stname").innerHTML = "Name must be filled out!";
            return false;
            }
        else if (st_name.length > 50) {
            document.getElementById("er_stname").innerHTML = "Maximum 50 charecters are allowed";
            return false;
            }
        else if (!st_name.match(letterNumber))
          {
            document.getElementById("er_stname").innerHTML = "Invalid charecters";
            return false;
          }  
        else{
            document.getElementById("er_stname").innerHTML = "";
        }    
        /*Student reg no */    
        var st_regno = document.forms["newstudentForm"]["st_regno"].value;
        if (st_regno == "") {
            document.getElementById("er_stregno").innerHTML = "Reg.no must be filled out!";
            return false;
            }
        else if (st_regno.length > 10 || !st_regno.match(letterNumber)) {
            document.getElementById("er_stregno").innerHTML = "Invalid Reg.no";
            return false;
            }
        else{
          document.getElementById("er_stregno").innerHTML = "";
        } 
       /*COURSE*/    
       var st_course = document.forms["newstudentForm"]["st_course"].value;
        if (st_course == "Select course") {
            document.getElementById("er_stcourse").innerHTML = "Select course!";
            return false;
            }
        else {
          document.getElementById("er_stcourse").innerHTML = "";
        }  
        /* DOB */
        var dob_regx =/^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$/;  
        var st_dob = document.forms["newstudentForm"]["st_dob"].value;
        if (!st_dob.match(dob_regx)) {
            document.getElementById("er_stdob").innerHTML = "Invalid DOB";
            return false;
            }
        else {
          document.getElementById("er_stcourse").innerHTML = "";
        }
    }
    </script>
    
    <?php
      if (isset($_POST['newstudent_submit'])) {
        include '../../php/connect.php';
        
        $st_regno = $_POST['st_regno'];
        $st_name = $_POST['st_name'];
        $st_course = $_POST['st_course'];
        $st_dob = $_POST['st_dob'];

        $newstudent_sql = "INSERT INTO student (st_regno, st_name, st_course, st_dob, st_password)
        VALUES ('$st_regno', '$st_name', '$st_course', '$st_dob', '$st_dob')";
        if (mysqli_query($conn, $newstudent_sql)) {
            echo "<script type='text/javascript'>alert('Successfully Added!')</script>";
        } else {
            echo "Error: " . $newstudent_sql . "<br>" . mysqli_error($conn);
        }
      }
    ?>

</head>
<body>
   
</body>
</html>
