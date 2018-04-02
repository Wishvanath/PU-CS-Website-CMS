<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>admin addnews</title>
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
     if (isset($_POST['addnews_submit'])) {
         # code...
        $news = $_POST['news'];
        $description = $_POST['description'];        
        $link1 = $_POST['link1'];
        $link1_name = $_POST['link1_name'];
        $link2 = $_POST['link2'];
        $link2_name = $_POST['link2_name'];
        $upld_date = date("Y-m-d");
        $upld_time = time();        
        include '../../php/connect.php';

        $addnew_sql = "INSERT INTO news (news, description, link1, link1_name, link2, link2_name, upld_date, upld_time)
        VALUES ('$news', '$description', '$link1', '$link1_name', '$link2', '$link2_name', '$upld_date', '$upld_time')";

        if (mysqli_query($conn, $addnew_sql)) {
            echo "<script type='text/javascript'>alert('Successfully Uploaded!')</script>";
        } else {
            echo "Error: " . $addnew_sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
    # Fetch from hod_msg table
    include '../../php/connect.php';
    $takenews_qry = "SELECT news, id FROM news order by upld_date DESC, upld_time DESC";
    $takenews_result = mysqli_query($conn, $takenews_qry);
    if (!$takenews_result) {
    echo 'Could not run query: ' . mysql_error(); //A bit of error checking
    exit;
    }

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
                        <a  href="msgandqote.php"><i class="fa fa-bullhorn fa-3x"></i> Message and Quote</a>
                    </li>
                    <li>
                        <a  class="active-menu" href="news.php"><i class="fa fa-edit fa-3x"></i> News </a>
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
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>NEWS</h2>   
                        <h5>Add and edit the news</h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                <hr />
                <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="add_news text-center"><h4>ADD NEWS</h4></div>
                    <form class="new_news" action="news.php" method="POST">
                        <label>News<span class="mandatory">* </span> <span class="instruction">(Appears on main page)</label>
                        <input type="text" name="news">
                        <label>Description</label>
                        <textarea name="description" value="">
                            
                        </textarea>
                        <label>Link1 </label>
                        <input type="text" name="link1">
                        <label>Link1 name to be appeared</label>
                        <input type="text" name="link1_name">
                        <label>Link2</label>
                        <input type="text" name="link2">
                        <label>Link2 name</label>
                        <input type="text" name="link2_name">
                        <input type="submit" name="addnews_submit" value="Upload News">
                    </form>
                </div>
                <!--Old news section-->
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="add_news text-center"><h4>OLD NEWS</h4></div>
                    <div>
                        <?php 
                        if (mysqli_num_rows($takenews_result) > 0) {
                        // output data of each row
                            while($takenews_row = mysqli_fetch_assoc($takenews_result)) {
                                echo '<div class="news_devide">';    
                                    echo '<a onclick="mfn()" href="newsread.php?id='.$takenews_row['id'].'">'.$takenews_row['news'].'</a>';
                                echo "</div>";
                            }
                        } else {
                            echo "No news to display";
                        }
                        
                        ?>
                    </div>
                </div>    
            </div>
            </div>
             <!-- /. PAGE INNER  -->
        </div>
         <!-- /. PAGE WRAPPER  -->
        </div>

        <!-------------------------------------------------->


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
