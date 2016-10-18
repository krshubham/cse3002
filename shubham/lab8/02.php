<?php
$amount =0;
//global variable to define amount as 0;
if(isset($_POST['submit']))
{
	$value = $_POST['data'];
	if($value>=0 && $value<=240){
		$amount = 35;
	}
	else if($value>=241 && $value<=1000){
		if($value>300){
			$amount = 140 + 0.30*($value - 300);				
		}
		else{
			$amount = 140;				
		}			
	}
	else if($value>=1001 && $value<=2000){
		if($value>1600){
			$amount = 240 + 0.50*($value - 1600);				
		}
		else{
			$amount = 240;			
		}
	}
	else if($value>=2001){
		if($value>2900){
			$amount = 790 + 0.30*($value-2900);				
		}
		else{
			$amount = 790;
		}
	}
	
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Js test</title>
</head>
<body>
	<div class="jumbotron">
		<h1>BSNL</h1>	
	</div>
	<form action = "bill.php" method = "POST">
		<div class="col-md-12 col-sm-12">
			Enter the data usage amount here:
			<input type="text" name = "data" class="form-control" id="int" />
			<br />
			<div align="center">					
				<input  type = "submit" class="btn btn-danger" name = "submit">			
			</div>				
			<br />
			<div class="col-md-6">
				<h2>Your total bill price is:</h2>		
				<h2 id="totalint"><?php
					echo $amount;
					?>

				</h2>
			</div>
		</div>		
	</form>
	<body>
</html>
