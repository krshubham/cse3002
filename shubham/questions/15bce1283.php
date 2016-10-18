<!DOCTYPE html>
<html>
<head>
	<title>PHP forms</title>
</head>
<?php
if(isset($_POST["fs"])){
	$from = $_POST["from"];
	$to = $_POST["to"];
	$js = $_POST["jd"];
	//Trains matching the given constarints
	$trains = array("12345"=>"West Coast exp,MAS,11:30,MAQ,03:55,902,16:25", "12685"=>"Mangalore exp,MAS,17:00,MAQ,09:05,889,16:05", "12601"=>"Mangalore mail,MAS,20:20,MAQ,12:25,889,16:05","16859"=>"MS Mangalore exp,MS,22:15,MAQ,21:45,983,23:30"); 
}
?>
<body>
	<form action="index.php" method="POST" action="index.php">
		<div>
			<label>From:</label>
			<input type="text" name="from">
			<?php //echo $from;?>
		</div>
		<div>
			<label>To:</label>
			<input type="text" name="to">
		</div>
		<div>
			<label>Journey Date:</label>
			<input type="date" name="jd">
		</div>
		<button type="submit" name="fs">Submit</button>
		<button type="reset">Reset</button>
	</form>
	<?php
	if(isset($_POST["fs"])){
		echo "<table>
		<th>Train No:</th>
		<th>Train Name</th>
		<th>From</th>
		<th>Departure</th>
		<th>To</th>
		<th>Arrival</th>
		<th>Distance</th>
		<th>Travel time</th>
		<th>Class</th>";
		foreach($trains as $x=>$y){
			$details = explode(",",$y);
			echo "<tr>";
			echo "<td>".$x."</td>";
			foreach($details as $a=>$b){
				echo "<td>".$b."</td>";
			}
			echo "<td><input type=\"radio\" value=\"1A\">1A";
			echo "<input type=\"radio\" value=\"2A\">2A";
			echo "<input type=\"radio\" value=\"3A\">3A";
			echo "</td>";
		}
		echo "</table>";
	}
	?>
</body>
</html>