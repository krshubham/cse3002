<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="home.php">FFCS</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="home.php">Home</a></li>
            <li><a href="profile.php">My profile</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-cog"></span>&nbsp;Settings</a>
                <ul class="dropdown-menu">
                  <li><a href="profile_settings.php">Profile Settings</a></li>
                  <li><a href="account_settings.php">Account Settings</a></li>
                </ul>
              </li>
              <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">  
        <br />  
        <h2 align="center">FFCS</h2><br />
        
        <br />
        <div class="form-group">
            <br/>           
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
		$query = "SELECT credits FROM user_details WHERE user_id=$current_user_id";
		$result = mysqli_query($connection,$query);
		$row = mysqli_fetch_assoc($result);
		$credits = $row['credits'];
		echo '<h4 align="navbar-left">Credits Registered</h4>
        <h4 id="tc">'.$credits.'</h4>';
		$query = "SELECT * FROM reg_courses WHERE user_id=$current_user_id";
		$result = mysqli_query($connection,$query);
		while ($row = mysqli_fetch_assoc($result)) {
			
			echo '<div class="input-group">  
              <span class="input-group-addon">'.$row['name'].'</span>   
            </div><br/>';
		}
		
 ?> 
		</div>  
        <br/>           
    </div>   
  </body>  
</html> 