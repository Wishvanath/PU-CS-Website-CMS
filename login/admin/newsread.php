../<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="../assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
	<title></title>
</head>
<?php
include '../../php/connect.php';
if (isset($_GET['id'])) {
	# code...

	$getnews_sql = "SELECT * FROM news WHERE id = {$_GET['id']}";

    if($getnews_result = mysqli_query($conn, $getnews_sql)){
    $getnews_row = mysqli_fetch_assoc($getnews_result);}
    else { 
    	header('news.php');}
}
if (isset($_POST['deletenews_submit'])) {
  $thisnews_id = $_POST['id'];  
  $delete_sql = "DELETE FROM news WHERE id = $thisnews_id";
  if(mysqli_query($conn,$delete_sql)){
    echo "<script type='text/javascript'>
          if(!alert('Successfully Deleted!')) document.location = 'news.php';
          </script>";
  }
  else{
    echo "<script type='text/javascript'>alert('Could not Delete! ... Something went wrong')</script>";
  }
}
if (isset($_POST['updatenews_submit'])) {
  $thisnews_id = $_POST['id'];
  $news = $_POST['news'];
  $description = $_POST['description'];
  $link1 = $_POST['link1'];
  $link1_name = $_POST['link1_name'];
  $link2 = $_POST['link2'];
  $link2_name = $_POST['link2_name']; 
  $update_sql = "UPDATE news SET news ='$news', description='$description', link1='$link1', 
          link1='$link1_name', link2='$link2', link2_name='$link2_name' WHERE id=$thisnews_id";
  if(mysqli_query($conn,$update_sql)){
    echo "<script type='text/javascript'>
          if(!alert('Successfully Updated!')) document.location = 'news.php';
          </script>";
  }
  else{
    echo "<script type='text/javascript'>alert('Could not Update! ... Something went wrong')</script>";
  }
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
            Edit or delete news
          </h3>
        </div>
        <div class="modal-body">
          <form class="new_news" action="newsread.php" method="POST">

                        <input type="hidden"  name="id" value="<?php echo $getnews_row['id']; ?>">
                        <label>News Id</label>
                        <input type="text" disabled="disabled" value="<?php echo $getnews_row['id']; ?>">
                        <label>Upload date</label>
                        <input type="text" disabled="disabled" value="<?php echo $getnews_row['upld_date']; ?>">
                        <label>News<span class="mandatory">* </span> <span class="instruction">(Appears on main page)</label>
                        <input type="text" name="news" value="<?php echo $getnews_row['news']?>">
                        <label>Description</label>
                        <textarea name="description" value="">
                            <?php echo $getnews_row['description']?>
                        </textarea>
                        <label>Link1 </label>
                        <input type="text" name="link1" value="<?php echo $getnews_row['link1']?>">
                        <label>Link1 name to be appeared</label>
                        <input type="text" name="link1_name" value="<?php echo $getnews_row['link1_name']?>">
                        <label>Link2</label>
                        <input type="text" name="link2" value="<?php echo $getnews_row['link2']?>">
                        <label>Link2 name to be appeared</label>
                        <input type="text" name="link2_name" value="<?php echo $getnews_row['link2_name']?>">
                        <input type="submit" name="updatenews_submit" value="UPDATE NEWS">
                        <input type="submit" name="deletenews_submit" value="DELETE NEWS" style="float: left;">

                    </form>
              
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
    location.href = "news.php";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        location.href = "news.php";
    }
}
</script>
</html>