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
    <link rel="stylesheet" type="text/css" href="css/additionalcss/Aluminies.css">
    <!--  end of addtional css -->


    <!-- java script and css file included for the lightbox -->
    
    <link rel="stylesheet" type="text/css" href="css/lightbox.css">
    <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
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
               <center><lb>OUR ALUMINIES</lb></center>
               
  </div>
</div>

<!-- end of the title -->



<!-- ============================= start of the Body content of the alumini page========= -->
<div class="container" id="alumini_head">
  <!-- <div class="row" id="signup_button">
    <div class="col-sm-8" id="alumini_welcome">
      <h3>Computer Science Welcome you all kindly go through this link</h3>
    </div>
    <div class="col-sm-4">
      <button class="btn btn-primary" id="register">Register</button>
      <button class="btn btn-success" id="login">Login</button>
    </div>
    
  </div>
  <hr> -->
  <div class="row" id="alumini_body">
    <div class="col-sm-5">
      <h3>Alumni</h3>
      <hr>
      <p>
        Our CS alumni are pushing boundaries in large and small companies, across government agencies, and in non-profit organizations. They work as CTO's, data scientists, and software engineers, among other roles. In academia, they teach and research in top universities, both as as entering professors and tenured faculty members with prestigious awards and fellowships. Our alumni also fill a surprising number of department chairs!
      </p>
    </div>
    <div class="col-sm-7">
      <img src="img/alumini_image/alumini_image_1.jpg" alt="alumini_image">
    </div>
  </div>

  <div class="row" id="meetup_group">
    <div class="col-sm-7">
      <img src="img/alumini_image/alumini_image_3.jpg" alt="alumini_image">
    </div>
    <div class="col-sm-5">
      <h3>Meetups and Groups</h3>
      <hr>
      <p>
        One of the ways we are connecting with our alumni is by arranging meetups with faculty in various locations. The department chair is launching this initiatve in Fall 2017. 
      
        To be included in the invitation when we reach your city, send your email address and preferred location to the CS Publicist. In the mean time, here are several social media groups you might enjoy:
      </p>
      <ul>
        <a href="#">
        <li>CS Student Facebook group</li>
        </a>
        <a href="#">
        <li>CS Alumni Facebook group</li>
        </a>
        <a href="">
        <li>CS Alumini Linkedin group</li>
        </a>
      </ul>
    </div>
  </div>


  <div class="row" id="support">
    <div class="col-sm-6">
      <h4>Support</h4>
      <hr>
      <p>
        Supporting Rice, particularly the Department of Computer Science, is a way to complete the cycle of opportunity that began with your education at Rice. Discretionary funds donated  to the Computer Science Department by alumni and corporations allow the Computer Science Department to respond to unexpected research and educational opportunities that arise. You can donate to the Computer Science Endowment (established by Moshe Y. Vardi and his wife, Pam Geyer, in 2000), which specifically supports the Computer Science Department, by completing a donation form, selecting the designation "Other (please specify in special instructions)" on the form, and entering "Computer Science Endowment" in the "Special Instructions" text box.
      </p>
    </div>
    <div class="col-sm-6">
      <h4>CS Alumni Profiles</h4>
      <hr>
      <p>
        We love to tell the stories of our alumni in CS Profiles! In addition to researchers, entrepreneurs, chief architects, and software and game developers, our alumni have looked beyond typical tech industry career paths to become lawyers, high school teachers, and financial planners. We also have a radiologist, a realtor, a dermapathologist, a veterinarian, and a missionary. Several of you made it big and retired early. We would love to tell more alumni stories! Contact the CS Publicist if you know or hear interesting CS alumni stories, including your own.
      </p>
      <button class="btn btn-primary" id="alumni_login">Login</button>
      <button class="btn btn-success" id="alumni_register">Register</button>
    </div>
  </div>



</div>

<!-- aluminin meet gallary -->
<div class="container" id="alumini_gal">
  <div class="row">
  <div class="alumini_gal_descp">
    <h3>Recent CS Alumni Meet Event Gallary :</h3>
  </div>
  </div>
  <div class="row" id="first_row_image">
    <div class="col-sm-2">
      <a href="img/alumini_image/alumini_image_11.jpg" data-lightbox="gallary">
      <img src="img/alumini_image/alumini_image_11.jpg" alt="alumini_image">
      </a>
    </div>
    <div class="col-sm-2">
      <a href="img/alumini_image/alumini_image_15.jpg" data-lightbox="gallary">
      <img src="img/alumini_image/alumini_image_15.jpg" alt="alumini_image">
      </a>
    </div>
    <div class="col-sm-2">
      <a href="img/alumini_image/alumini_image_16.jpg" data-lightbox="gallary">
      <img src="img/alumini_image/alumini_image_16.jpg" alt="alumini_image">
      </a>
    </div>
    <div class="col-sm-2">
      <a href="img/alumini_image/alumini_image_7.jpg" data-lightbox="gallary">
      <img src="img/alumini_image/alumini_image_7.jpg" alt="alumini_image">
      </a>
    </div>
    <div class="col-sm-2">
      <a href="img/alumini_image/alumini_image_8.jpg" data-lightbox="gallary">
      <img src="img/alumini_image/alumini_image_8.jpg" alt="alumini_image">
      </a>
    </div>
    <div class="col-sm-2">
      <a href="img/alumini_image/alumini_image_9.jpg" data-lightbox="gallary">
      <img src="img/alumini_image/alumini_image_9.jpg" alt="alumini_image">
      </a>
    </div>
  </div>
   
   <div class="row" id="second_row_image">
     <div class="col-sm-2">
      <a href="img/alumini_image/alumini_image_5.jpg" data-lightbox="gallary">
       <img src="img/alumini_image/alumini_image_5.jpg" alt="alumini_image">
      </a>
     </div>
     <div class="col-sm-2">
      <a href="img/alumini_image/alumini_image_4.jpg" data-lightbox="gallary">
       <img src="img/alumini_image/alumini_image_4.jpg" alt="alumini_image">
      </a> 
     </div>
     <div class="col-sm-2">
      <a href="img/alumini_image/alumini_image_13.jpg" data-lightbox="gallary">
       <img src="img/alumini_image/alumini_image_13.jpg" alt="alumini_image">
       </a>
     </div>
     <div class="col-sm-2">
      <a href="img/alumini_image/alumini_image_6.jpg" data-lightbox="gallary">
       <img src="img/alumini_image/alumini_image_6.jpg" alt="alumini_image">
       </a>
     </div>
     <div class="col-sm-2">
      <a href="img/alumini_image/alumini_image_14.jpg" data-lightbox="gallary">
       <img src="img/alumini_image/alumini_image_14.jpg" alt="alumini_image">
       </a>
     </div>
     <div class="col-sm-2">
      <a href="img/alumini_image/alumini_image_10.jpg" data-lightbox="gallary">
       <img src="img/alumini_image/alumini_image_10.jpg" alt="alumini_image">
       </a>
     </div>

   </div> 

</div>

<!--  end of alumini meet gallary -->

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
    <script type="text/javascript" src="js/lightbox.min.js"></script>
  </body>
</html>