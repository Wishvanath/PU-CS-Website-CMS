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
    <link rel="stylesheet" type="text/css" href="css/additionalcss/Examination.css">
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
               <center><lb>EXAMINATION</lb></center>
               
  </div>
  
</div>

<!-- end of the title -->
<!-- =========================== start of the body content========================== -->
<div class="container">
  <h3>Midterm Examinations</h3>
  <div class="row">
  <hr>
  <div class="col-sm-7" id="exam_descp">
   <p>
    Classes that give midterm examinations outside of regular class hours must Announce 
    the date and time during the first week of the academic quarter, and
   
    Provide reasonable alternative times to those students who have another class or 
    other University commitment at that time. According to Honor Code interpretations and 
    applications, a different examination may be given at these alternative times. 
   </p>
     
  </div>
  <div class="col-sm-5" id="exam_image">
    <img src="img/exam_image_1.jpg">
  </div>
  </div>
</div>


<div class="container">
  <h3>End Quarter Examinations Policy</h3>
  <hr>
  <div class="col-sm-5">
    <img src="img/exam_image_3.jpg">
  </div>
  <div class="col-sm-7">
    <p>
        End-Quarter is a period of reduced social and extracurricular activity preceding final examinations. Its purpose 
        is to permit students to concentrate on academic work and to prepare for final examinations. 
    </p>
    <p>
      In Autumn, Winter, and Spring quarters, End-Quarter period starts seven full days 
      (to begin at 12:01 a.m.) prior to the first day of exams. In Spring Quarter, final examinations 
      begin on Friday; no classes are held on Thursday, the day before. In Summer Quarter, End-Quarter 
      period consists of the weekend and the four class days 
      preceding the final examinations, which take place on Friday and Saturday of the eighth week.

    </p>


  </div>
</div>
<div class="container" id="text_description">
  <p>
    During End-Quarter period, classes are regularly scheduled and assignments made; 
    this regular class time is used by instructors in whatever way seems best suited to 
    the completion and summation of course material. Instructors should neither make 
    extraordinary assignments nor announce additional course meetings in order to “catch up” 
    in course presentations that have fallen behind. They are free, however, and even encouraged, 
    to conduct optional review sessions and to suggest other activities that might seem appropriate 
    for students preparing for final examinations.No graded homework assignments, mandatory quizzes,
     or examinations should be given during End-Quarter period except the following:
</p>
  <p>
    In classes for which graded homework assignments or quizzes are routine parts of the 
    instructional process.In classes with laboratories for which the final examination will not 
    test the laboratory component.In such a case, the End-Quarter period laboratory session(s) 
    may be used to examine students on that aspect of the course. Major papers or projects about which
    the student has had reasonable notice may be called due in End-Quarter period.Take-home final 
    examinations given in place of the officially scheduled inclass examination may be distributed
    in End-Quarter period. Although the instructor may ask students to return take-home examinations 
    early in the final examination period, the instructor may not call them due until the end of the 
    regularly scheduled examination time for that course. Such a policy respects 
    the principle that students’ final examinations are to be scheduled over a period of several days.
  </p>

</div>

<div class="container">
  <h3>About Examinations</h3>
  <div class="row">

  <hr>
  <div class="col-sm-7">
  <p>
    Examinations are part of the process of education at the same time that they are a means to
    measure the student’s performance in course work. Their structure, content, frequency, and 
    length are to be determined in accordance with the nature of the course and the material 
    presented in it, subject only to the limitations contained here
  </p>
  <p>
    Great flexibility is available regarding the types of examination that an instructor 
    may choose to employ. Examinations, including final examinations, may be, for example, 
    in-class essay examinations, take-home essay examinations, objective examinations, oral
    examinations, or appropriate substitutes such as papers or projects. Instructors may use
     any type of examination, paper, or project, or any combination thereof, guided only by 
     the appropriateness of the types of examination, 
    papers, or projects for the material upon which the student is being examined.
  </p>

  </div>
  <div class="col-sm-5">
    <img src="img/exam_image_2.jpg">
  </div>
</div>
</div>
<div class="container">

  <div class="row">
  <div class="col-sm-5">
    <img src="img/exam_image_4.jpg">
  </div>
  <div class="col-sm-7">
    <p>
    In submitting official study lists, students commit to all course requirements including the 
    examination procedures chosen and announced by the course instructor. In selecting courses, 
    students should take cognizance of the official schedule of final examinations announced in 
    the quarterly Time Schedule. Students anticipating conflicts in final examination schedules
     should seek to resolve these with the instructors involved before submitting study lists. 
     If accommodation cannot be made at that time, the student should revise his or her study list
      by the study list deadline in order to be able to meet the required final examination.
    If unforeseen circumstances prevent the student from sitting for the regularly scheduled examination, instructors should make alternative arrangements on an individual basis. Such unforeseen circumstances include illness, personal emergency, or the student's required participation in special events (for example, athletic championships) approved as exceptions by the Committee on Undergraduate Standards and Policy (C-USP).
    Note: Instructors may wish to be responsive to requests from students whose religious commitments conflict with scheduled examinations. Inquiries regarding provisions of the End-Quarter Period policy or the End-Quarter Examination policy should be directed to the University Registrar.
    Students who believe that there are faculty who are violating End-Quarter period policy should contact the Registrar’s Office.

Quick Links
    </p>

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