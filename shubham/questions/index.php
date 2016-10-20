<?php
$m=1; $n=7; $z=7;

if($n%2!=0){
	for($i=1; $i<=$n; $i++){
		for($j=$i; $j<=$n-1; $j++){
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		}
		for($k=1; $k<=$m; $k++){
			if($k%2==0){
				echo "&nbsp;&nbsp;&nbsp;";
			}
			else{
				echo $k ."&nbsp;";
			}
		}
		echo "<br>";
		$m++;
	}
	for($i=1; $i<=$n; $i++){
		for($j=1; $j<=$i; $j++){
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		}
		for($k=1; $k<$z; $k++){
			if($k%2==0){
				echo "&nbsp;&nbsp;&nbsp;";
			}
			else{
				echo $k ."&nbsp";
			}
		}
		echo "<br>";
		$z--;
	}

}
else 
{
	echo "Not Possible";
}
?>
