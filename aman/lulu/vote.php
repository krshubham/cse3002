
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
				<h4 id="voter-info"></h4>
			</div>	
			<div align="center">
				<button class="btn btn-success" name = "done">Done</button>
			</div>			
		</div>		
	</div>
	<body>
		<script>
			var c = 0,v = 0;
			var i = 0;
			function create(){
				c = Number(document.getElementById('cand').value);
				v = Number(document.getElementById('voters').value);
				var info = document.getElementById('voter-info');
				info.innerHTML = 'Enter the rankings below for the candidates from ' + '1 to '+ c;
				for(var i=0;i<c;i++){
					var a = document.createElement('input');
					a.setAttribute('type','text');
					a.className = "vote";
					a.setAttribute('placeholder','Candidate ' + String(Number(i)+1));
					document.getElementById('space').appendChild(a);
					document.getElementById('space').appendChild(document.createElement('br'));
					document.getElementById('space').appendChild(document.createElement('br'));
				}
			}
		</script>
		</html>

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
<?php
	if(isset($_POST['submit']))
	{
		echo "sdds";
		$candidates = $_POST['candidates'];
		$voters = $_POST['voter'];
		for($i=1;$i<$voters;$i++)
		{
			$candidates.=$i;
			$add = "ALTER TABLE inventory ADD '" .$candidates."' TINYINT NULL ";
			$result = mysqli_query($connection,$add);
			if($result)
			{
				echo "good";
			}
			else
				echo "bad";
		}
	}
?>