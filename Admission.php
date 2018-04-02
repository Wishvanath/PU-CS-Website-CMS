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
    <link rel="stylesheet" type="text/css" href="css/additionalcss/Admission.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- link of additonal css  -->
    <!-- <link rel="stylesheet" type="text/css" href="css/additionalcss/front_page.css"> -->
    <link rel="stylesheet" type="text/css" href="css/additionalcss/header_footer.css">
    <link rel="stylesheet" type="text/css" href="css/additionalcss/Admission.css">
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

<!-- =======================Addmission content section===================== -->
<div class="container">
  <div class="title-heading">
               <center><lb>ADMISSION</lb></center>
               
  </div>
</div>

<!-- =================description of admission================== -->
<div class="container">
  <div class="add_image">
      <img src="img/add_image_1.jpg" class="img-rounded">

    </div>
  <div class="addmission-descp">

    <div class="panel panel-primary">
      <!-- <div class="panel-heading"><h4>Addmission Procedure: (2017-2018)</h4>


      </div> -->
      <div class="panel-body">
           <p>
         School of Engineering and Technology has two campus with the main campus it located at Pondicherry and another is located at Kairakal Campus. In addition to regular courses the department also runs the addon course in the evening session .All the details are given below.        
             
         </p>
         <i class="fa fa-long-arrow-right">
         <span>
          Registration process for PG/PhD courses generally commences from the first week of April every year.
         </span>
         
         </i><br>
         <i class="fa fa-long-arrow-right">
         <span>
            Applications are accepted within the stipulated time i.e. first week of May.
         </span>
         
         </i>
         <i class="fa fa-long-arrow-right">
         <span>
            Examination application forms can be submitted online through the university website by following the instructions given therein
         </span>
         
         </i>
         <i class="fa fa-long-arrow-right">
         <span>
            Online entrance examination for admission to PG programmes are conducted in the last week of May, in multiple cities across India
         </span>
         
         </i>
         <br><br>
         <p>
            Entrance exam results are released on the official website within 15 days from the date of examination. Selected/ waitlist candidates can check their status and report to the concerned university department as per the admission schedule. Separate course-wise lists are issued by the university for PG and Ph.D program. Shortlisted studetns must be present at the time of counselling with the necessary documents ads well as required fee to ensure the completion of admission process.
         </p>
        <h3>List of Course Offered by the Department</h3>
        <hr>
         <table class="table table-responsive">
            <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Course Level</th>
                      <th>Course Name</th>
                      <th>Selection Criteria</th>
                      <th>Registration Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">Post Graduate (PG)</th>
                      <td>M.Tech, M.C.A, MSc, MSc Integrated,PG Diploma</td>
                      <td>University Entrance Examination</td>
                      <td>April 6 – May 3, 2018</td>
                    </tr>
                    <tr>
                      <th scope="row">Research</th>
                      <td>Ph.D Full Time  | Ph.D Part Time</td>
                      <td>Entrance Exam + PI + Academic Record</td>
                      <td>April 6 – May 3, 2018</td>
                    </tr>
                    
                  </tbody>
                </table>
         </table>
         <h3>Online Entrance Exam</h3>
         <hr>
         <p>
         For admission to Integrated/PG/PG Diploma, an Online Entrance Examination will be conducted and candidates will be evaluated on the basis of marks secured. The paper will consist of 100 Multiple Choice questions to be answered within a time duration of 120 minutes. 4 marks will be allotted for every correct answer while 1 mark will be deducted for each wrong answer
        Application forms can be submitted online through the university website by following the instructions given therein. Candidates can apply for more than one course with separate application fee. Application fee of INR 250 (Rs. 125/- for SC/ST candidates) can be submitted through online/ offline mode of payment. For information and latest updates on PG course admissions.

         </p>
        
            <i class="fa fa-long-arrow-right">
                 <span style="color: red;">
                   Kindly go through this Link : <a href="http://www.pondiuni.edu.in/news/entrance-exam-results-admissions-2017-18">Admission 2017-2018</a>
                 </span>

            </i>
         <h3>Entrance Exam Result</h3>
         <hr>
         <p>
            The university has declared entrance exam results 2017 for various PG courses as well as Ph.D program which was conducted in the month of May by the university. The entrance exam results declared are provisional and the selected/ waitlist candidates must report to the concerned Head of the Department/Centre for admission along with original certificates and required fee amount.
            Candidates awaiting their final exam result are also eligible to report for admission with all the available certificates & mark statements. Such candidates will also be considered for admission on provisional basis and will be required to produce final mark list & provisional certificate on or before September 1, 2017. 

         </p>
         
         <h3>Original and Xerox Certificates/ documents required at the time of admission</h3>
         <hr>
         <p>
            1.  X Std or equivalent certificate/mark statement along with age proof<br>
            2.  H.Sc. or its equivalent certificate/mark Statement<br>
            3.  Degree/Provisional certificate of the qualifying Degree Examination along with mark statements.<br>
            4.  OBC with Non- Creamy Layer certificate recently issued (i.e. issued after April 2017) by competent Authority, in case of OBC candidate<br>
            5.  Recently issued SC/ST/PH/Pondicherry Residence certificate/Karaikal Residence Certificate from competent authority as applicable<br>
            6.  Migration/Transfer certificate and conduct certificate from the institution last studied<br>
            7.  Recently taken two stamp size colour photograph (For Group Medical Insurance Policy)<br>
            8.  Soft copy of colour passport size photograph in a CD (for Library and ID Card)<br>

         </p>
               
         <marquee behavior="alternate" style="color: red;"><h4>For more admission related information, candidates can check the <a href="https://static-collegedunia.com/public/college_data/images/pdfcol/1503296301prospectus-17-18-as-on-08052017.pdf">Pondicherry University Prospectus 2017-18</a> </h4> </marquee>
       </div>
    </div>
  </div>
</div>
<!-- =================end the admission description============= -->


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