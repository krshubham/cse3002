<?php 
	include("../../includes/database_connection.php");
	include("../../includes/functions.php");
	include("../../includes/session.php");
  ?>
 <?php
    if(logged_in())
    {
      $current_username= $_SESSION['current_username'];
      $current_name=$_SESSION['current_name'];
      $current_user_id=$_SESSION['current_user_id'];
    }
  else
    redirect_to("index.php");
?>
<?php
	$subject = $_POST['subject'];
	$register = $_POST['register'];
	$query = "SELECT credits FROM user_details WHERE user_id=$current_user_id";
	$result = mysqli_query($connection,$query);
	if($result)
	{
		
	}
 ?>  