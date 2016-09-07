<?php
$price =0;
if(isset($_POST['submit']))
{
	$val = $_POST['data'];
	if($val>=0 && $val<=240){
		$price = 35;
	}
	else if($val>=241 && $val<=1000){
		if($val>300){
			$price = 140 + 0.30*($val - 300);				
		}
		else{
			$price = 140;				
		}			
	}
	else if($val>=1001 && $val<=2000){
		if($val>1600){
			$price = 240 + 0.50*($val - 1600);				
		}
		else{
			$price = 240;			
		}
	}
	else if($val>=2001){
		if($val>2900){
			$price = 790 + 0.30*($val-2900);				
		}
		else{
			$price = 790;
		}
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
			<h1>BSNL</h1>	
		</div>
		<form action = "bill.php" method = "POST">
		<div class="container">
			<div class="col-md-12 col-sm-12">
				Enter the data usage amount here:
				<input type="text" name = "data" class="form-control" id="int"/>
				<br />
				<div align="center">					
					<input  type = "submit" class="btn btn-danger" name = "submit">			
				</div>				
				<br />
				<div class="col-md-6">
					<h2>Your total bill price is:</h2>		
					<h2 id="totalint"><?php
						echo $price;
					?></h2>
				</div>
			</div>		
		</div>
	<body>
	</form>
</html>
