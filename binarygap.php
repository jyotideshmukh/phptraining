<?php

function binarygap($num){

    $binarynum = decbin($num);
    //echo "<br>",$binarynum;
    $possibility = false;
    $startgap = 0 ;
    //$arrGap = [];
    $max = 0;
    for($i = 0 ; $i< strlen($binarynum); $i++){
        if($startgap == 0  && $binarynum[$i] == 1){
            $possibility = true;
        }
        if($possibility == true && $binarynum[$i] == 0){
            $startgap++;
        }

        if($startgap!=0 && $possibility == true && $binarynum[$i] == 1 ){
            //$arrGap[] = $startgap;
            if($max < $startgap)
                $max = $startgap;
            $startgap = 0 ;

        }
    }
        return $max;

   // echo "Num". $num, "Gap=", sizeof($arrGap),"<pre>",print_r($arrGap);

}

echo binarygap(1);
echo "<br>", binarygap(2);
echo "<br>", binarygap(147);
echo "<br>", binarygap(483);
echo "<br>", binarygap(647);
echo "<br>", binarygap(32);

