<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Computer Science Department</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- link of additonal css  -->
    <link rel="stylesheet" type="text/css" href="css/additionalcss/front_page.css">
    <link rel="stylesheet" type="text/css" href="css/additionalcss/header_footer.css">
    <!--  end of addtional css -->
  </head>
  <?php
  include 'php/connect.php';

  # Fetch from hod_msg table
    $hodmsg_qry = "SELECT * FROM hod_msg WHERE id=0";
    if($hodmsg_result = mysqli_query($conn, $hodmsg_qry)){
      $hodmsg_row = mysqli_fetch_assoc($hodmsg_result);
  }
  else {
  }
    #.........
    # Fetch from Quote table
    $quote_qry = "SELECT * FROM quote WHERE id=0";
    if($quote_result = mysqli_query($conn, $quote_qry)){
      $quote_row = mysqli_fetch_assoc($quote_result); 
  }
  #.........
  # Fetch from news table
    $takenews_qry = "SELECT news, id FROM news order by upld_date DESC, upld_time DESC";
    $takenews_result = mysqli_query($conn, $takenews_qry);
    if (!$takenews_result) {

    }
    mysqli_close($conn);
?>
  <body>
<header class="top-header container-fluid">
      <div class="row">
         <div class="container">
            <div class="row">
            <div class="col-xs-8 header-logo">
              <br>
              <a href="index.php"><img src="img/logo2.png" alt="" class="img-responsive logo"></a>
            </div>

            <div class="col-xs-4 top-search">
                <form class="">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                      <button class="btn btn-default" type="submit">
                        search
                      </button>
                  </div>
                </form>
            </div>
            </div>
         </div>
      </div>   
      <div class="row">                          
        <nav class="navbar navbar-default container-fluid">
          <div class="container">
            <div class="nav-bar">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  
                  <ul class="nav navbar-nav navbar-left">

                      <li><a class="menu active" href="index.php"><i class="fa fa-home fa-lg"></i>&nbsp;Home</a></li>
                      <li  class="dropdown">
                        <a class="menu dropdown-toggle"  data-toggle="dropdown" href="#"><i class="fa fa-graduation-cap"></i>&nbsp;Academic
                        <span class="caret"></span> </a>
                        <ul class="dropdown-menu">
                            <li><a href="Admission.php" >Admission</a></li>
                            <li><a href="Academic_Calender.php">Academic Calender</a></li>
                            <li><a href="Examination.php">Examination</a></li>
                            <li><a href="Faculties.php">Faculties</a></li>
                            <li><a href="Result.php">Result</a></li>
                            <li><a href="PG_Programme.php">PG Programme</a></li>
                            <li><a href="Research_Programme.php">Research Programme</a></li>
                            <li><a href="Students.php">Students</a></li>            
                        </ul>
                      </li>

                      <li  class="dropdown">
                        <a class="menu dropdown-toggle"  data-toggle="dropdown" href="#"><i class="fa fa-flask"> </i>&nbsp;Research
                        <span class="caret"></span> </a>
                        <ul class="dropdown-menu">
                            <li><a href="Area_of_Research.php">Area of Research</a></li>
                            <li><a href="Research_lab.php">Research lab</a></li>
                            <li><a href="Research_Publication.php">Research Publication</a></li>
                            <li><a href="Sponser_Project.php">Sponser Project</a></li>
                        </ul>
                      </li>

                      <li  class="dropdown">
                        <a class="menu dropdown-toggle"  data-toggle="dropdown" href="#"><i class="fa fa-laptop" aria-hidden="true"></i>&nbsp;Resources
                        <span class="caret"></span> </a>
                        <ul class="dropdown-menu">
                            <li><a href="E-Services.php">E-Services</a></li>
                            <li><a href="Library.php">Library</a></li>
                            <li><a href="Computer_Lab.php">Computer Lab</a></li>
                        </ul>
                      </li>

                      <li  class="dropdown">
                        <a class="menu dropdown-toggle"  data-toggle="dropdown" href="#"><i class="fa fa-newspaper-o" aria-hidden="true"></i>&nbsp;News & Events
                        <span class="caret"></span> </a>
                        <ul class="dropdown-menu">
                            <li><a href="Department_News.php">Department News</a></li>
                            <li><a href="Department_Seminar.php">Department Seminar</a></li>
                            <li><a href="Workshop.php">Workshop</a></li>
                            <li><a href="Image_Gallery.php">Image Gallery</a></li>
                                       
                        </ul>
                      </li>

                      <li  class="dropdown">
                        <a class="menu dropdown-toggle"  data-toggle="dropdown" href="#"><i class="fa fa-building-o" aria-hidden="true"></i>&nbsp;About Us
                        <span class="caret"></span> </a>
                        <ul class="dropdown-menu">
                            <li><a href="Awards.php">Awards</a></li>
                            <li><a href="Aluminies.php">Aluminies</a></li>
                            <li><a href="Infrastructure.php">Infrastructure</a></li>
                                                                       
                        </ul>
                    </li>
                      <li><a class="menu" href="Contact_Us.php"><i class="fa fa-address-book" aria-hidden="true"></i>Contact Us</a></li>
                      <li>                        
                        <a class="menu dropdown-toggle border-rght"  data-toggle="dropdown" href="#" onclick="document.getElementById('id01').style.display='block'"><i class="fa fa-lock" aria-hidden="true"></i>&nbsp;Login
                        <span class="caret"></span> </a>
                  </ul>
                </div><!-- /navbar-collapse -->
            </div>
          </div><!-- / .container -->
        </nav>
      </div>
  </header><!-- end of header area -->
  <section class="slider" id="home">
    <div class="container-fluid">
      <div class="row">
          <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <img src="img/slide-one.jpg" alt="">
                  </div>
                  <div class="item">
                    <img src="img/slide-two.jpg" alt="">
                  </div>
                  <div class="item">
                    <img src="img/slide-three.jpg" alt="">
                  </div>
                  <div class="item">
                    <img src="img/slide-four.jpg" alt="">
                  </div>
              </div>
              <!-- Controls -->
              <div class="jst">
                <div class="col-xs-12">
                  <a class="carousel-controll col-xs-6" href="#carouselHacked" role="button" data-slide="prev">
                      <span class="prev" aria-hidden="true">
                        <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                      </span>
                  </a>
                  <a class="carousel-controll col-xs-6" href="#carouselHacked" role="button" data-slide="next">
                      <span class="next" aria-hidden="true">
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                      </span>
                  </a>
              </div> 
          </div>       
              <div class="ellipse-time">
                <h5> Aug 19 2017 </h5>
                <h6> 03:27 pm </h6>
              </div>
          </div>
      </div>
    </div>
  </section><!-- end of slider section -->
  <!--HOD message, Quote and News Section-->
  <section class="hqn">
    <div class="container">
      <div class="row row-div">
        <div class="col-sm-4">
          <div class="hodmsg">
            <span class="hqn-head">
              HOD's Message
            </span>
            <span class="morinfo">HOD PROFILE
              <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            </span>
            <img class="hod_img" src="img/hod.jpg">
            <div class="hodmsg_content">
            <h5>Dr. T. Chithralekha </h5>
              <?php 
                                    
                                    if($hodmsg_row){
                                      echo substr($hodmsg_row['message'], 0,349).'...';} 
                                    else{
                                      echo '';
                                    }  
                                ?>
                            <a class="readmore" onclick="mfn2();">Continue<i class="fa fa-long-arrow-right" aria-hidden="true" style="color: #f48b0b;margin-left: 3px;"></i></a>    
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="quote">
            <span class="hqn-head">
              Quote of the day
            </span>
            <div class="msg-section">
              <p class="quote_txt">
                <?php                                 
                                  if($quote_row){
                                      echo $quote_row['quote'];
                                  }
                                  else{
                                    echo "";
                                  } ?>
                          </p>
                          <p class="author_txt">        
                                  <?php     
                                if($quote_row){
                                      echo '<br><span class="-span">-</span> '.$quote_row['author'];
                                  }
                                  else{
                                    echo "";
                                  }
                              ?>
                          </p>    
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="news">
            <span class="hqn-head">
              News
            </span>
            <span class="morinfo">
              EVENTS
              <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            </span>
            <div class="msg-section">
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
    </div>  
  </section>
<!-- course section of the computer science department   -->
  <div id="course_section" class="course_section">
    <div class="container">
        <div class="row">
            <h2>Course Offered</h2>
            <hr>
            <p>There are four post graduate and Ph.d. programmes.The department has four well-equipped computer laboratories 
      namely- General Computing Lab,Multimedia Lab, Grid Computing Lab and Research Lab, housing about 120 state-of-art 
      computer systems </p>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" data-wow-delay="0.8s">
                <div class="packages">
                  <i class="fa fa-desktop" aria-hidden="true"></i>
                    <h4>MCA</h4>
                    <p>some description about the course sadfsddsff specification</p>
                    <button class="btn btn-get-det">Get Details</button>
                
                </div>
                
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow flipInY" data-wow-delay="0.8s">
                <div class="packages">
                  <i class="fa fa-cogs" aria-hidden="true"></i>
                    <h4>MTech</h4>
                    <p>some description about the course sadfsddsff specification</p>
                    <button class="btn btn-get-det">Get Details</button>
                
                </div>
                
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow flipInY" data-wow-delay="0.8s">
                <div class="packages">
                  <i class="fa fa-laptop" aria-hidden="true"></i>
                    <h4>M.Sc</h4>
                    <p>some description about the course sadfsddsff specification</p>
                    <button class="btn btn-get-det">Get Details</button>
                
                </div>
                
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow flipInY" data-wow-delay="0.8s">
                <div class="packages">
                  <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                    <h4>Research</h4>
                    <p>some description about the course sadfsddsff specification</p>
                    <button class="btn btn-get-det">Get Details</button>
                
                </div>
                
            </div>
        </div>
    </div> 
</div>
      
      
<!-- End of course Section -->
<!--======================department at a Glance====================-->
      
<div class="container explorecs">
    <h2>Explore The CS Department</h2>
    <hr>
    <div class="container">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 cs-gallary">
            <center><img src="img/gallary.JPG" alt="" class="img img-responsive"></center>
            <a href="Image_Gallery.php"><p>Gallary</p></a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 cs-seminar">
            <center><img src="img/event.jpg" alt="" class="img img-responsive"></center>
            <a href="Department_Seminar.php"><p>Seminar</p></a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 cs-computerlab">
            <center><img src="img/lab%20image.JPG" alt="" class="img img-responsive"></center>
            <a href="Computer_Lab.php"><p>Computer Lab</p></a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 cs-library">
            <center><img src="img/library_book.jpg" alt="" class="img img-responsive"></center>
            <a href="Library.php"><p>Library</p></a>
        </div>
    </div>
</div>      
      
<!--======================end of department at a glance=========================-->   
<!--=====================Footer section==============================-->
<div class="container-fluid footer-section">
    <div class="container footer-area" id="footer-area">
    <p>Quick Links</p>
    <div class="row">
        <div class="col-md-3 col-sm-6 col-lg-3 first-footer">
            
            <hr>
            <i class="fa fa-link" aria-hidden="true"></i> <a href="Admission.php">Admission</a><br>
            <i class="fa fa-link" aria-hidden="true"></i> <a href="Aluminies.php">Aluminies</a><br>
            <i class="fa fa-link" aria-hidden="true"></i> <a href="PG_Programme.php">Courses</a><br>
            <i class="fa fa-link" aria-hidden="true"></i> <a href="Awards.php">Award</a><br>
            <i class="fa fa-link" aria-hidden="true"></i> <a href="Department_News.php">News & Events</a><br>
            <i class="fa fa-link" aria-hidden="true"></i> <a href="Department_Seminar.php">Seminar</a><br>
            <i class="fa fa-link" aria-hidden="true"></i> <a href="Students.php">Student</a>
           
        </div>
        <div class="col-md-3 col-sm-6 col-lg-3 Second-footer">
            <hr>
            <i class="fa fa-link" aria-hidden="true"></i> <a href="Area_of_Research.php">Area of Research</a><br>
            <i class="fa fa-link" aria-hidden="true"></i> <a href="Research_Publication.php">Research Publication</a><br>
            <i class="fa fa-link" aria-hidden="true"></i> <a href="http://lib.pondiuni.edu.in/">Library</a><br>
            <i class="fa fa-link" aria-hidden="true"></i> <a href="E-Services.php">E-Services</a><br>
            <i class="fa fa-link" aria-hidden="true"></i> <a href="Computer_Lab.php">Computer Lab</a><br>
            <i class="fa fa-link" aria-hidden="true"></i> <a href="http://www.pondiuni.edu.in/">Pondicherry University</a><br>
            <i class="fa fa-link" aria-hidden="true"></i> <a href="http://sms.bicpu.edu.in/">SAMS</a>
         </div>  
         <div class="col-md-3 col-sm-6 col-lg-3 third-footer">
            <hr>
            <i class="fa fa-link" aria-hidden="true"></i> <a href="Academic_Calender.php">Academic Calender</a><br>
            <i class="fa fa-link" aria-hidden="true"></i> <a href="Examination.php">Examination</a><br>
            <i class="fa fa-link" aria-hidden="true"></i> <a href="Result.php">Result</a><br>
            <i class="fa fa-link" aria-hidden="true"></i> <a href="Department_News.php">Recent News</a><br>
            <i class="fa fa-link" aria-hidden="true"></i> <a href="Image_Gallery.php">Gallary</a><br>
            <i class="fa fa-link" aria-hidden="true"></i> <a href="Workshop.php">Workshop</a><br>
            <i class="fa fa-link" aria-hidden="true"></i> <a href="Developer.php">Developer</a>
         </div>  
    </div>

      

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  <!-----------------Model Window for hod's message-------------------------- -->


<div id="myModal" class="modal">
  <div class="row">  
      <!-- Modal content -->
      <div class="modal-content">
        <div class="modal-header">
          <span class="close">&times;</span>
          <h3>
            HOD'S MESSAGE
          </h3>
        </div>
        <div class="modal-body">
          <p style="color:#000; font-size: 18px;">
              <?php
      if($hodmsg_row){
                                      echo $hodmsg_row['message'];} 
                                    else{
                                      echo '';
                                    }
          ?>
          </p>
            
              
        </div>
      </div>
    </div>  
</div>
    <!--End of model window -->
     <!--Start of Login model window -->
  <div id="id01" class="loginmodal">
  
  <form class="loginmodal-content loginanimate" action="login.php" method="post">
    <div class="loginimgcontainer">
      <center><img src="img/logo-login.png" class="loginavatar img-responsive"/></center>
    </div>

    <div class="logincontainer">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
      </div> 
      <div class="logincontainer">
        <button type="submit" name="login_submit">Login</button>
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      </div>
  </form>
</div>

    <!--End of login model window -->

</body>
<script>

// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
function mfn2() {
    window.stop();
    modal.style.display = "block";

}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// Get the modal for login
var modal2 = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}
</script>
</html>

<style>
/* Full-width input fields */
.loginmodal input[type=text], .loginmodal input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    font-size: 12px;
    box-sizing: border-box;
}
.loginmodal input[type=text]:hover, .loginmodal input[type=password]:hover {
  background: #ffc278;
  
}
/* Set a style for all buttons */
.loginmodal button {
    background-color: #344f6e;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 49%;
}

.loginmodal button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.logincancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #344f6e;
}


/* Center the image and position the close button */
.loginimgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.loginavatar {
    width: 100px;
    border-radius: 50%;
    height: 100px;
}

.logincontainer {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.loginmodal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.8); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.loginmodal-content {
    background-color: #fff;
    font-size: 15px;
    color: #464646;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 40%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.loginclose {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.loginclose:hover,
.loginclose:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .logincancelbtn {
       width: 100%;
    }
}
</style>