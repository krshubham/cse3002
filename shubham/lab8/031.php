<?php
$k=4; 
$n=6;
$votes=array(array(1,0,1,2,3,4),array(2,0,2,1,4,3),array(3,0,3,3,2,1),array(4,0,4,4,1,2)); 
$sum=0;
$temp=0;
$j=0;
while ($j<$n){
for ($i=0;$i<$k;$i++){
       $sum=$sum+$votes[$i][$j];
	}
	$j++;
	if ($sum>$temp){
		$temp=$sum;
		$winner=$j;
	}
	$sum=0;
}

echo "The winner is: ".$winner;	
?>