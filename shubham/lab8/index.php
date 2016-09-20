
<?php
    //declaring all the variables
$intprice;
$floatprice;
$sumi;
$sumf;
    //using an array for the data
$amount= array(124,99,45,56.54,48.456,254.15,451,152.56);
$arraylen= count($amount);

for ($i = 0; $i < $arraylen; $i++) {
    if(is_int($amount[$i])){
        $intprice++;
        $sumi+=$amount[$i];
    }   
    else {
        $floatprice++;
        $sumf+=$amount[$i];
    }
}

echo "the integer sum is  $sumi <br>";
echo "the float sum is $sumf <br>" ;        
echo "the integer values are $intprice <br>";
echo "the integer values are $floatprice <br>";
?>
