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
      include '../../php/connect.php';
      //Retrieve the student details
      $stdetails_qry = "SELECT * FROM student";
      if(isset($_POST['search'])){
    
      	$st_name = $_POST['st_name'];
      	$stdetails_qry = "SELECT * FROM student where st_name='$st_name'";
      }
      $stdetails_result = mysqli_query($conn, $stdetails_qry);
          
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
                        <a href="index.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                      <li>
                        <a  href="msgandqote.php"><i class="fa fa-bullhorn fa-3x"></i> Message and Quote</a>
                    </li>
                    <li>
                        <a  href="news.php"><i class="fa fa-edit fa-3x"></i> News </a>
                      
                      <li>
                        <a  href="newstudent.php"><i class="fa fa-edit fa-3x"></i> New student </a>
                    </li>
                    <li>
                        <a class="active-menu" href="searchstudent.php"><i class="fa fa-edit fa-3x"></i> Search Student </a>
                    </li>       
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
              <h2>SEARCH STUDENT</h2>  
              <hr/>
              <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-12">
                <form class="new_news" style="padding:0;" method="post" action="#">
                	<input type="text" name="st_name"/>
                	<input type="submit" name="search"/>
                </form>
                </div>
              </div>  
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    
 <table id="customers">
  <tr>
    <th>Reg no</th>
    <th>Name</th>
    <th>Course</th>
    <th>DOB</th>
    <th>Library ID</th>
    <th>Phone</th>
    <th>Email ID</th>
    <th>State</th>
    <th>Gender</th>
    <th>Category</th>
  </tr>
  <?php
                    	if (mysqli_num_rows($stdetails_result) > 0) {
    // output data of each row
    while($std = mysqli_fetch_assoc($stdetails_result)) {
    	echo '<tr>';
        echo '<td>'.$std['st_regno'].'</td>'
        	.'<td>'.$std['st_name'].'</td>'
        	.'<td>'.$std['st_course'].'</td>'
        	.'<td>'.$std['st_dob'].'</td>'
        	.'<td>'.$std['st_libid'].'</td>'
        	.'<td>'.$std['st_phone'].'</td>'
        	.'<td>'.$std['st_mail'].'</td>'
        	.'<td>'.$std['st_address'].'</td>'
        	.'<td>'.$std['st_gender'].'</td>'
        	.'<td>'.$std['st_category'].'</td>';
        echo '</tr>';
    }
}
                    ?>
</table>                   

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
   
</body>
<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {

    padding-top: 2px;
    padding-bottom: 2px;
    text-align: center;
    background-color: #0176bb;
    color: white;
}
</style>
</html>
