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
<!-- PHP starts-->
    <?php
    include '../../php/connect.php';

    #Update hod message
    
    if (isset($_POST['msg_submit'])) {
        # code...
        $hod_msg = $_POST['hod_msg'];
        $msgupdate_sql = "UPDATE hod_msg SET message='$hod_msg' WHERE id=0";

        if (mysqli_query($conn, $msgupdate_sql)) {
                echo "<script type='text/javascript'>alert('Successfully Updated!')</script>";
        } else {
                echo "<script type='text/javascript'>alert('Something went wrong.. Check your connection')</script>";
        }
    }
    #Update Quote
    
    if (isset($_POST['quote_submit'])) {
        # code...
        $quote = $_POST['quote'];
        $author = $_POST['author'];

        $quoteupdate_sql = "UPDATE quote SET quote='$quote', author='$author' WHERE id=0";

        if (mysqli_query($conn, $quoteupdate_sql)) {
                echo "<script type='text/javascript'>alert('Successfully Updated!')</script>";
        } else {
                echo "<script type='text/javascript'>alert('Something went wrong.. Check your connection')</script>";
        }
    }
    # Fetch from hod_msg table
    $qry = "SELECT * FROM hod_msg WHERE id=0";
    $result = mysqli_query($conn, $qry);
    $row = mysqli_fetch_assoc($result);
    #.........
    # Fetch from Quote table
    $qry2 = "SELECT * FROM quote WHERE id=0";
    $result2 = mysqli_query($conn, $qry2);

    $row2 = mysqli_fetch_assoc($result2);
    #.........
    mysqli_close($conn);
    ?>
<body>

    <div id="wrapper">
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
                        <a  class="active-menu" href="msgandqote.php"><i class="fa fa-bullhorn fa-3x"></i> Message and Quote</a>
                    </li>
                    <li>
                        <a  href="news.php"><i class="fa fa-edit fa-3x"></i> News </a>
	                </li>
                    <li>
                        <a  href="newfaculty.php"><i class="fa fa-edit fa-3x"></i> New faculty </a>
                    </li>    
                      <li>
                        <a  href="newstudent.php"><i class="fa fa-edit fa-3x"></i> New student </a>
                    </li>    
                    	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-6">
                     <h2>HOD'S MESSAGE</h2>   
                        <h5>The message to display on the main page. </h5>
                        <form class="msg-quote" action="msgandqote.php" method="POST">
                            <textarea name="hod_msg" id="styled">

                                <?php 
                                    if (!$result) {
                                        echo 'Something went wrong ' . mysql_error();
                                        }
                                    if($row){
                                      echo $row['message'];} 
                                ?>
                            </textarea>
                            <input type="submit" name="msg_submit">
                        </form>
                       
                    </div>
                    <div class="col-md-6">
                     <h2>QUOTE OF THE DAY </h2>   
                        <h5>The quote to display on the main page. </h5>
                        <form class="msg-quote" action="msgandqote.php" method="POST">
                            <textarea style="height: 250px" name="quote" id="styled">
                                <?php 
                                    if (!$result2) {
                                        echo 'Something went wrong ' . mysql_error();
                                        }
                                    if($row2){
                                      echo $row2['quote'];
                                      }
                                ?>
                            </textarea>
                            <input type="text" name="author" value="<?php 
                                if($row2){
                                echo $row2['author'];}
                             ?>">
                            <input type="submit" name="quote_submit">
                        </form>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />

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
    
   
</body>
</html>
