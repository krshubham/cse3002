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
	$row = mysqli_fetch_assoc($result);
	$credits = $row['credits'];
	if($register && $credits<27)
	{
		$query = "SELECT * FROM reg_courses WHERE user_id=$current_user_id AND name='$subject'";
		$result = mysqli_query($connection,$query);
		if(mysqli_num_rows($result)==0)
		{
			$query = "INSERT INTO reg_courses(user_id,name) VALUES($current_user_id,'$subject')";
			$result_q =  mysqli_query($connection,$query);
			$query = "UPDATE user_details SET credits=$credits+5 WHERE user_id=$current_user_id";
			$result_qq = mysqli_query($connection,$query);
			if($result_q)
				echo "Registered";
		}
		else
			echo "Already Registered";
		
	}

	if($register && $credits>=27)
		echo "Credits already 27";

	if($register == 0)
	{
		$query = "DELETE FROM reg_courses WHERE user_id=$current_user_id AND name='$subject'";
		$result_q =  mysqli_query($connection,$query);
		if($result_q)
			echo "Unregistered";
	}
 ?>  