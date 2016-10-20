<?php
$file = fopen("line.txt","r");
$wfile = fopen("out.txt","w+");
while(!feof($file)){
	$string = fgets($file);
	$revstr = strrev($string);
	echo $revstr;
	echo "<br>";
	fwrite($wfile,$revstr);
}
fclose($file);
fclose($wfile);
?>