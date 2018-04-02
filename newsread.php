<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->

     <!-- GOOGLE FONTS-->
 
</head>
	<title></title>
</head>
<?php
if (isset($_GET['id'])) {
	# code...

	include 'php/connect.php';
	$sqll = "SELECT * FROM news WHERE `id` = {$_GET['id']}";

    if($resultt = mysqli_query($conn, $sqll)){
    $roww = mysqli_fetch_assoc($resultt);}
    else { 
    	header('news.php');}
}

?>
<body>
	<div id="myModal" class="modal">
  <div class="row">  
      <!-- Modal content -->
      <div class="modal-content">
        <div class="modal-header">
          <span class="close">&times;</span>
          <h3>
            <?php
                if (isset($_GET['id'])) {
                            echo $roww['news'];
                        }
              ?>
          </h3>
        </div>
        <div class="modal-body">
          <p>
              <?php
                
                            echo $roww['description'];
              ?>
          </p>
          	<?php
          		if ($roww['link1_name'] != '') {
          			# code...
          			echo '
          				<a class="link" href="'.$roww['link1'].'">
	                  		'.$roww['link1_name'].'
	              		</a>
          			';
          		}
          		if ($roww['link2_name'] != '') {
          			# code...
          			echo '
          				<a class="link" href="'.$roww['link2'].'">
	                  		'.$roww['link2_name'].'
	              		</a>
          			';
          		}
          	?>
              
        </div>
      </div>
    </div>  
</div>

</body>
	<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
function mfn() {
    window.stop();
    modal.style.display = "block";

}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    location.href = "index.php";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        location.href = "index.php";
    }
}
</script>
</html>
<style type="text/css">
  /*======
POPUP WINDOW
=======*/
/* The Modal (background) */
.modal {
    display: block; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.7); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fff;
    margin: auto;
    padding: 0;
    border: 0;
    border-radius: 0;
    width: 90%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 20px;
    font-weight: bold;
    padding: 5px;

}

.close:hover,
.close:focus {
    color: red;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 10px;
    background-color: #133762;
    border-bottom: 5px solid #f48b0b;
    color: white;
}
.model-header h3{
    color: #fff;
}
.modal-body {padding: 2px 1px 20px 10px;}
.modal-body a{
    border:2px solid #f48b0b;
   
    color: #133762;
    border-radius: 3px;
    margin-right: 20px;
    padding: 5px;
    text-decoration: none;
}
.modal-body a:hover{
    text-decoration: none;
    border:2px solid #133762;
}    
.modal-body a:visited{
    text-decoration: non;
}
</style>