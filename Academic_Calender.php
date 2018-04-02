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
   <!--  <link rel="stylesheet" type="text/css" href="css/additionalcss/front_page.css"> -->
    <link rel="stylesheet" type="text/css" href="css/additionalcss/header_footer.css">
    <link rel="stylesheet" type="text/css" href="css/additionalcss/Academic_Calender.css">
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

<!-- ======================= content of the academic calender page==================== -->

<!-- for the title of the page -->
<div class="container">
  <div class="title-heading">
               <center><lb>ACADEMIC CALENDER</lb></center>
               
  </div>
</div>

<!-- end of the title -->
<div class="container">
            <div class="academic_cal">
               
                <h3> Academic Calender  (2017-2018) <a href="image/Academic%20Calendar-CS%20Dept%202017-18.pdf">Download</a></h3> 
                
                <hr>
                <div class="panel panel-primary">
                  <div class="panel-heading"><center>Department of Computer Science Academic Calender (2017-2018) </center>
                    
                    
                  </div>
                  <div class="panel-body">
<!--                    table for showing the data  -->
                      

                                    
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>S.NO</th>
                              <th>PARTICULARS</th>
                              <th>COURSES</th>
                              <th>ODD SEMESTER </th>
                              <th>EVEN SEMESTER</th>        
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Internal Exams (I,II) </td>
                              <td>(All II years ) <br>(All III years) and <br> (All I years ) M.C.A</td>
                              <td>August I and II week  <br> October II and III week <br>September I week , October  III week </td>
                              <td>February II and III week<br>March III and IV week  </td>    
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Submission of internal exam marks (I,II)</td>
                              <td>All Courses</td>
                              <td>September Second Monday<br>October last Friday </td>
                              <td>February last Monday<br>April first Monday  </td>    
                            </tr>
                            <tr>
                              <th scope="row">3</th>
                              <td>Submission of internal marks </td>
                              <td>All Courses </td>
                              <td>15.11.2017  </td>
                              <td> 20.04.2018 </td>    
                            </tr>
                            <tr>
                              <th scope="row">4</th>
                              <td>Admission  </td>
                              <td>All Courses </td>
                              <td colspan="3"> <center>As per University schedule</center>     </td>
                                 
                            </tr>
                              <tr>
                              <th scope="row">5</th>
                              <td>Councelling & Registration  </td>
                              <td>All II years and III MCA <br>All I years  </td>
                              <td>22.06.2017 - 27.06.2017 -Faculty Advisors should take care) Submission on 10.07.2017        <br>IMMEDIATELY AFTER ADMISSIONS    </td>
                              <td> 05.12.2017 - 08.12.2017 -Faculty Advisors should take care) Submission on 15.12.2017   </td>    
                            </tr>
                              <tr>
                              <th scope="row">6</th>
                              <td>Dropping of  Courses </td>
                              <td>All Courses </td>
                              <td>05.07.2017    </td>
                              <td>12.12.2017  </td>    
                            </tr>
                              <tr>
                              <th scope="row">7</th>
                              <td>Orientation  </td>
                              <td>All I years </td>
                              <td>July Last Week </td>
                              <td>  </td>    
                            </tr>
                              <tr>
                              <th scope="row">8</th>
                              <td>Workshops/Symposia/Conf/Recursion  </td>
                              <td></td>
                              <td>July/August </td>
                              <td> January/February  </td>    
                            </tr>
                              <tr>
                              <th scope="row">9</th>
                              <td>Program Committee(I,II,III)  </td>
                              <td></td>
                              <td>August last week | October last week | November</td>
                              <td> January last week | March last week | May </td>    
                            </tr>
                              <tr>
                              <th scope="row">10</th>
                              <td>Freshers/Alumini/Farewell   </td>
                              <td> </td>
                              <td>Freshers- August third week  </td>
                              <td> Alumini/Farewell- April second week    </td>    
                            </tr>
                              <tr>
                              <th scope="row">11</th>
                              <td>Payment of Fees  </td>
                              <td>Tuition Fees <br> Examination Fees</td>
                              <td>On or before 10.07.2017   </td>
                              <td> On or before 15.12.2017+A2   </td>    
                            </tr>
                              
                              <tr>
                              <th scope="row">12</th>
                              <td>End Semester Exams </td>
                              <td> </td>
                              <td>13.11.2017 to 01.12.2017 </td>
                              <td>17.04.2018 to 04.05.2018  </td>    
                            </tr>
                              <tr>
                              <th scope="row">13</th>
                              <td>NET coaching/Training  </td>
                              <td></td>      
                              <td>Monday, Wednesday, Friday -4 PM to 5 PM (40 hrs/semester) </td>
                              <td>Monday, Wednesday, Friday -4 PM to 5 PM (40 hrs/semester) </td>      
                              </tr>
                              <tr>
                              
                          </tbody>
                        </table>
<!--                      for project reveiw details one new table created      -->
                      <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>S.NO</th>
                              <th>Project Review</th>
                              <th>M.Tech Phase -1</th>
                              <th>M.C.A Mini Project</th>
                              <th>M.Tech Phase-II</th> 
                              <th>M.C.A Major Project</th> 
                              <th>MSc Project</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <td>14</td>
                                <td>0th Review</td>
                                <td>June last week</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>I Review</td>
                                <td>July last Thursday & Friday</td>
                                <td>September last Monday & Tuesday</td>
                                <td>January last Thursday & Friday</td>
                                <td>January last Monday</td>
                                <td>February first Monday</td>
                            <tr>  
                            <tr>
                                <td></td>
                                <td>II Review</td>
                                <td>September last Thursday & Friday</td>
                                <td>September last Monday & Tuesday</td>
                                <td>March last Thursday & Friday</td>
                                <td>March last Monday</td>
                                <td>April first Monday</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Final Review</td>
                                <td colspan="2" align="center">November</td>
                                <td colspan="3" align="center">April / May </td>
                            </tr>  
                          </tbody>
                        </table>
                                    
                      
                </div>
                </div>


            </div>
        </div>  






<!-- ========================= end of the body content================================= -->


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