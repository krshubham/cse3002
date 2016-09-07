<?php include("includes/database_connection.php"); ?>
<?php 
	$row = array();
	if(isset($_POST['submit']))
	{
		$num = $_POST['number'];
		$type = intval($num);
		$query = "SELECT * FROM lulu WHERE id = 1";
		$result = mysqli_query($connection,$query);
		if($result){
			$row = mysqli_fetch_assoc($result);
			
			//print_r($row);
			if($type==$num){
				
				$isum=$row['isum']+$num;
				$inte = $row['inte']+1;
				echo "$isum";
				$query = "UPDATE lulu SET isum=$isum WHERE id=1";
				$res = mysqli_query($connection,$query);
			}
			else
			{
				$fsum=$row['fsum']+$num;
				$flot = $row['flot']+1;
				//echo "$fsum";
				$query = "UPDATE lulu SET fsum=$fsum,flot=$flot WHERE id=1";
				$res = mysqli_query($connection,$query);
			}	
		}?>
		<script type="text/javascript">
		window.open ('lulu.php','_self',false);
	</script><?php
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Js test</title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
		
	</head>
	<body>
		<div class="jumbotron">
			<h1>Lulu Supermarket billing system</h1>	
		</div>
		<form action="lulu.php" method = "POST">
			<div class="container">
				<div class="col-md-12 col-sm-12">
					Enter the integer amounts here:
					<input type="text" class="form-control" name= "number" id="int"/>
					<br />
					<div align="center">					
						<button class="btn btn-danger" id="intbtn" name = "submit">Submit</button>			
					</div>				
					<br />
					<div class="col-md-6">
						<h2>Your total integer price is:</h2>		
						<h2 id="totalint"><?php 
						$query = "SELECT * FROM lulu WHERE id = 1";
						$result = mysqli_query($connection,$query);
						$row = mysqli_fetch_assoc($result);
						echo $row['isum'];
						//header("Location: lulu.php");
						?></h2>
					</div>
					<div class="col-md-6">
						<h2>Your total float price is:</h2>		
						<h2 id="totalfloat">
							<?php
								$query = "SELECT * FROM lulu WHERE id = 1";
								$result = mysqli_query($connection,$query); 
								$row = mysqli_fetch_assoc($result);
								echo $row['fsum'];
								//header("Location: lulu.php");
							?>
						</h2>
					</div>
				</div>		
			</div>
		</form>
	<body>
</html>