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
    <!-- <link rel="stylesheet" type="text/css" href="css/additionalcss/front_page.css"> -->
    <link rel="stylesheet" type="text/css" href="css/additionalcss/header_footer.css">
    <link rel="stylesheet" type="text/css" href="css/additionalcss/Students.css">
    <!--  end of addtional css -->
  </head>
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
                            <li><a href="Research_Programme">Research Programme</a></li>
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
                      <li  class="dropdown">
                        <a class="menu dropdown-toggle border-rght"  data-toggle="dropdown" href="#"><i class="fa fa-lock" aria-hidden="true"></i>&nbsp;Login
                        <span class="caret"></span> </a>
                        <ul class="dropdown-menu">
                            <li><a href="Admin.php">Hod</a></li>
                            <li><a href="Faculty.php">Faculty</a></li>
                            <li><a href="Student.php">Student</a></li>
                        </ul>
                  </li>
                  </ul>
                </div><!-- /navbar-collapse -->
            </div>
          </div><!-- / .container -->
        </nav>
      </div>
  </header><!-- end of header area -->

<!-- ======================= Body content of the examination page ==================== -->

<!-- for the title of the page -->
<div class="container">
  <div class="title-heading">
               <center><lb>STUDENTS</lb></center>
               
  </div>
</div>

<!-- end of the title -->

<!-- ============================ start of the Body section ======================= -->
<div class="container" id="student_body">
  <div class="row">
    <div class="col-sm-6" id="student_about">
      <p>
        The Department aims at imparting quality education in Computer Science & Engineering and Information Technology through various post-graduate programmes. It also offers an atmosphere conducive for research scholars for pursuing research in various advanced areas of Computer Science, Engineering and Information Technology
      </p>
      <div class="student_image">
        <img src="img/student_image_1.jpg" alt="img">
      </div>
    </div>
    <div class="col-sm-6" id="student_portal">
     <h3 style="padding: 10px;">Student Registration Portal</h3>

     <!-- button for the login of student -->

     <button name="login" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="float: right; margin-top:-40px;">
        Login

     </button>
      <!-- end of the login button -->

      <!--  login form in the model view -->

      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
             <div class="modal-body">
              
                <div class="container">
                  <div class="card card-container">
                    <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
                    <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
                    <p id="profile-name" class="profile-name-card"></p>
                    <form class="form-signin">
                      <span id="reauth-email" class="reauth-email"></span>
                      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                      <div id="remember" class="checkbox">
                        <label>
                          <input type="checkbox" value="remember-me"> Remember me
                        </label>
                      </div>
                      <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
                      </form><!-- /form -->
                      <a href="#" class="forgot-password">
                        Forgot the password?
                      </a>
                        <!-- close button  -->
                      <button type="button" class="btn btn-success" data-dismiss="modal" style="float: right;">Close</button>
            
                   </div><!-- /card-container -->
                </div><!-- /container -->


            </div>
            
          </div>
        </div>
      </div>
      <!-- end of the login form model view -->


      
      <hr>
      <form>
        <div class="form-group">
          <input type="text" name="student_name" class="form-control" placeholder="Enter Your name">
        </div>
        <div class="form-group">
          <select class="form-control" name="course">
            <option>Select Course</option>
            <option>MCA</option>
            <option>M.Tech</option>
            <option>M.Sc</option>
            <option>M.Sc Integrated</option>
          </select>
        </div>
        <div class="form-group">
          <input type="text" name="registration_no" class="form-control" placeholder="Registration No">
        </div>
        <div class="form-group">
          <input type="text" name="library_card" class="form-control" placeholder="Library Card No">
        </div>
        <div class="form-group">
          <input type="text" name="contact_no" class="form-control" placeholder="Contact No">
        </div>
        <div class="form-group">
          <input type="email" name="email" class="form-control" placeholder="Email">
        </div>
        <div class="form-group">
          <input type="text" name="date_of_birth" class="form-control" placeholder="dd/mm/yyyy">
        </div>
        <div class="form-group">
          <input type="text" name="academic_year" class="form-control" placeholder="Academic Year">
        </div>
        <div class="form-group">
          <textarea name="address" class="form-control" placeholder="Address"></textarea>
        </div>
        <div class="form-group">
          <button name="submit" class="btn btn-primary" style="float: right;">Submit</button>
        </div>
      </form>
     </div>
     </div>
  </div>    
<!-- =============academic resources================= -->
<div class="container">
  <div class="row">
    <div class="academic-heading">
      
      <h3>Academic Resources</h3>
    
    </div>
    <div class="col-sm-6">
      
    <div class="academic-content">
      <u><h4>General Resources</h4></u>
      <p>
        " These academic programs and services are relevant to all Computer Science Student. "
      </p>
      <p>
        <a href="E-Services.php">CS online Book Reference</a>
      </p>
      <p>
        <a href="http://lib.pondiuni.edu.in/">Libraries</a>
      </p>
      <p>
        <a href="Research_Publication.php">Online Publication</a>
      </p>
    </div>
    </div>
    <div class="col-sm-6" id="gen-res-img">
      <img src="img/student_image_2.jpg" alt="student-image">
    </div>
  </div>
</div>
<!-- ============= end of academiv resources ======== -->

<!-- ============= outside the class room =========== -->
<div class="container" id="outside-the-class">
  <div class="row">
    <div class="outside-class-heading">
      <h3>Outside the Classroom</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-3">
      <img src="img/student_life_image.jpg">
      <p>Student Life</p>
    </div>
    <div class="col-sm-3">
      <img src="img/canteen_image.jpg">
      <p>Canteen</p>
    </div>
    <div class="col-sm-3">
      <img src="img/indian_atm_image.jpg">
      <p>Indian ATM</p>
    </div>
    <div class="col-sm-3">
      <img src="img/health_center_image.jpg">
      <p>Health Center</p>
    </div>
  </div>
</div>
<br>
<br>
<!-- ============= end of the outside the class room=========== -->

<!-- ============================= end of the Body content============================= -->


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
  </body>
</html>