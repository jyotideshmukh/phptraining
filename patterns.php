<?php

for($i=0; $i<=10; $i++){
    echo $i."<br>";
}
echo "###################################","<br>";
// %[argnum$][flags][width][.precision]
$number = 2;
for($i=1; $i<=10; $i++){
    //echo "$number x $i = $i"."<br>";
    echo sprintf("%d x %d = %d",$number,$i,$number *$i),"<br>";
}
echo "###################################","<br>";
$number= 5;
for($i =1; $i<=$number; $i++){
    for($j=1; $j<=$i; $j++){
        echo "*";
    }
    echo "<br>";
}

echo "###################################","<br>";

$number= 5;
for($i = $number; $i>=1; $i--){
    for($j=1; $j<=$i; $j++){
        echo "*";
    }
    echo "<br>";
}

$number = 5;
$k = 1;
for($i = 1; $i <= $number; $i++){
    for($j = 1; $j <= $i; $j++){
        echo $k;
    }
    echo "<br>";
}

$number = 4;
$k = 1;
for($i = 1; $i <= $number; $i++){
    for($j = 1; $j <= $i; $j++){
        echo $k++;
    }
    echo "<br>";
}
