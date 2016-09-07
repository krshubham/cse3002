<?php
    $DB_SERVER="localhost";
    $DB_USER="root";
    $DB_PASS="root";
    $DB_NAME="iwp_lab";

//Create a database connection
    $connection = mysqli_connect($DB_SERVER,$DB_USER,$DB_PASS,$DB_NAME);
    if (!$connection) 
    {
        die("Database connection failed: ");
    }

//Select a database to use 
    $db_select = mysqli_select_db($connection,$DB_NAME);
    if (!$db_select) 
    {
        die("Database selection failed.....: ");
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Js test</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="01.css"/>
</head>
<body>
	<div class="jumbotron">
		<h1>Voting system</h1>	
	</div>
	<form method = "POST" action = "vote.php">
		<div class="container">
			<div class="col-md-12 col-sm-12">
				Enter the number of candidates:
				<input type="text" class="form-control" id="cand" name = "candidates"/>
				<br />
				Enter the number of voters:
				<input type="text" class="form-control" id="voters" name = "voter"/>
				<br />
				<div align="center">					
					<input type = "submit" class="btn btn-danger" id="intbtn" onclick="create()" name="submit">	
				</div>
				<br />			
				<div class="jumbotron" id="space">
					<h4 id="voter-info">
						<?php
							$candidate=0;
							$voters=0;
							if(isset($_POST['submit']))
							{
								$candidate = $_POST['candidates'];
								$str = "candidate";
								$voters = $_POST['voter'];
								$output="";
								$output .= '<div class="table-responsive">  
							                    <table class="table table bordered">';
								for($i=1;$i<=$voters;$i++)
								{
									$str.=$i;
									/*$add = "ALTER TABLE votes ADD ".$str." INT ";
									$result = mysqli_query($connection,$add);*/
									$output.='<td>
												<tr>Candidate <input type="text" name = "'.$str.'"></tr>
											  </td>
											  </table>
											  </div>';
									$str="candidate";
								}
								echo "$output";
							}
						?>
					</h4>
				</div>	
				<div align="center">
					<button class="btn btn-success" name = "done">Done</button>
				</div>			
			</div>		
		</div>
	</form>
	<body>
</html>