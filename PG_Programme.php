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
    <link rel="stylesheet" type="text/css" href="css/additionalcss/PG_Programme.css">
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
               <center><lb>PG COURSES</lb></center>
               
  </div>
</div>

<!-- end of the title -->

<!-- ============================ start of the body content========================== -->

<div class="container" id="pg_courses">

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">M.Tech</a></li>
    <li><a data-toggle="tab" href="#menu1">MCA</a></li>
    <li><a data-toggle="tab" href="#menu2">M.Sc</a></li>
    <li><a data-toggle="tab" href="#menu3">Ph.d</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">

      <div class="container">
          <div class="row">

            <div class="col-xs-12 col-sm-6 mtech1">
                  <img id="mtechpic" src="img/course2.jpg" >
                   <div class="download">
                          <h3>Syllabus</h3>
                          <a class="fee_btn" href="img/mtech cse.pdf">CSE Syllabus</a>
                          <a class="fee_btn" href="img/mtech nie.pdf">NIE Syllabus</a><hr>

                          <h3>Department Broucher</h3>
                          <a class="fee_btn" href="img/mca.pdf">View Broucher</a><hr>

                          <h3>Fee Structure</h3>
                          <a class="fee_btn"href="img/Annexure-III (Fees Details ).pdf">Get Fee Structure</a>
                </div>     
            </div>

            <div class="col-xs-12 col-sm-6 mtech2">
                  <h3>M.Tech</h3>
                  <p>
                      M.Tech. (Computer Science & Engineering , Network & Internet Engineering): <br>Admission to M.Tech. is based on entrance examination. The written examination consists of 100 objective type questions.<br> Questions will be from the following subjects:<br>Data Structures and Algorithms, Computer Architecture, Operating Systems, System Software, Microprocessors, DBMS, Networks, Compilers, Automata, AI, Graphics, Software Engineering, Programming Languages (C, C++ and Java) and Recent Trends in Computer Science. <br>
                      <h3>Course Duration</h3>
                  <p>M.Tech programme is 2 Year regular course</p>
                  <h3>Total Number of Seats</h3>
                  <p><span>Main Campus-24 seats</span>
                  </p>
                  <p>Entrance exams are mostly conducted in between <span id="textcolor">April and May</span> every year</p>
                  </p>
              </div>
            </div>
          </div>
    </div>

    <div id="menu1" class="tab-pane fade">
      <h3>Master of Computer Application</h3>
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-6 mca1">
              <p>
                  Department of Computer Science Pondicherry University provide PG programmes with a better infrastucture and Lab facilities for aspiring students. 

                  This course is Post Graduate proggrame for those condidate who completed graduation on <span id="textcolor">B.Sc (Computer Science,Information Technology,Physics,Statistics) and Bachelor in Computer Application(B.C.A)</span><br>

                  Condidate should have Maths and Physics in 12th.<br>

                  Admission to M.C.A. is based on entrance examination. The entrance examination is of objective type. The question paper will consist of 100 questions covering the following topics:<br>
                  Comprehension and verbal ability<br>
                  Analytical ability<br>
                  Logical reasoning<br>
                  Mathematical aptitude (+2) and<br>
                  General awareness in Computer Science<br>
                  <h3>Course Duration</h3>
                  <p>MCA programme is 3 Year regular course</p>
                  <h3>Total Number of Seats</h3>
                  <p><span>Main Campus-60 seats</span><br><span>Karaikal Campus-40 seats</span>
                  </p>
                  <p>Entrance exams are mostly conducted in between <span id="textcolor">April and May</span> every year</p>
                </p>
            </div>
            <div class="col-xs-12 col-sm-6 mca2">
              <img id="mcapic" src="img/course1.jpg" >
                <div class="download">
                    <h3>Syllabus</h3>
                    <a class="fee_btn" href="img/mca.pdf">Get Syllabus</a><hr>

                    <h3>Department Broucher</h3>
                    <a class="fee_btn" href="img/mca.pdf">View Broucher</a><hr>

                    <h3>Fee Structure</h3>
                    <a class="fee_btn"href="img/Annexure-III (Fees Details ).pdf">Get Fee Structure</a>
                </div>
            </div>       
         </div>
      </div>
      
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>M.Sc in Computer Science</h3>
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-6 mca1">
                  <p>
                   The entrance examination is of objective type. <br>The question paper will consist of 25 questions in General arithmetic and
                    75 questions from:-
                   <ul id="msclist"><li>Data Structures and Algorithms</li>
                        <li> Digital Logic and Computer Organization</li> 
                        <li>Operating Systems</li>
                        <li> System Software</li>
                        <li> Microprocessors</li>
                        <li>SAD</li>
                        <li> DBMS</li>
                        <li> Automata</li>
                        <li> Programming Languages (C & C++) and Recent Trends in Computer Science </li>
                    </ul>
                 </p>
              </div>

              <div class="col-xs-12 col-sm-6 mca2">
                  <h3>Course Duration</h3>
                  <p>M.Sc programme is 2 Year regular course</p>
                  <p>M.Sc Integrated programme is 5 Year regular course</p>
                  <h3>Total Number of Seats</h3>
                  <p><span>Main Campus-60 seats</span><br>

                <div class="download">

                    <h3>Syllabus</h3>
                    <a class="fee_btn" href="img/msc.pdf">Get Syllabus</a><hr>

                    <h3>Department Broucher</h3>
                    <a class="fee_btn" href="img/mca.pdf">View Broucher</a><hr>

                    <h3>Fee Structure</h3>
                    <a class="fee_btn"href="img/Annexure-III (Fees Details ).pdf">Get Fee Structure</a>
                </div>
            </div>       
           </div>
        </div>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Eligibility for Ph.d</h3>
      <p>
         Admission to Ph.D. is based on the performance in entrance examination. <br>The entrance examination is of objective type. The question paper will consist of 100 questions covering all the relevant topics from Computer Science and Engineering at P. G. level. <br>The NET/JRF qualified candidates with fellowships will be given direct admission to Ph.D programmes. <br>All others (including non-fellowship NET and GATE qualified candidates) will have to appear for the entrance examination.
      </p>
      <h3>Course Duration</h3>
      <p>4 years(Full Time and Part Time )</p>


    </div>
  </div>
</div>




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