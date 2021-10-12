<?php
$sum = 0;
$count = 1;
for($i=2;$i<=100;$i+=2){

    echo $i."<br>";
    //if($i<=5*2)
    if($count <= 5) {
        $sum += $i;
        $count++;
    }
}
echo "Sum".$sum;


?>