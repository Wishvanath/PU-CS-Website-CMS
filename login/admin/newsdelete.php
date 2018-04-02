<?php
	if (isset($_POST['deletenews_submit'])) {
	  include '../../php/connect.php';	
	  $delete_sql = "DELETE FROM news WHERE id = {$_GET['id']}";
	  if(mysqli_query($conn,$delete_sql)){
	    echo "<script type='text/javascript'>alert('Successfully Deleted!')</script>";
	  }
	  else{
	    echo "<script type='text/javascript'>alert('Could not Delete! <br> Something went wrong')</script>";
	  }
}
?>