<?php 
	if(isset($_POST['submit']))
	{
		$num = $_POST['number'];
		$type = intval($num);
		if($type==$num)
		{
			$_SESSION['f']+=1;
			$_SESSION['fsum']+=$num;
		}
		else
		{
			$_SESSION['i']+=1;
			$_SESSION['isum']+=$num;
		}
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
						<h2 id="totalint"><?php echo $_SESSION['isum'];?></h2>
					</div>
					<div class="col-md-6">
						<h2>Your total float price is:</h2>		
						<h2 id="totalfloat"><?php echo $_SESSION['fsum'];?></h2>
					</div>
				</div>		
			</div>
		</form>
	<body>
</html>