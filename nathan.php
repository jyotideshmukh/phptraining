<?php

// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($T, $R) {
    // write your code in PHP7.0
    //$groupCnt = 0;
    $group = [];
   // echo "<pre>",print_r($T);
    //print_r($R);
    $grouparr =[];
    $subgroup = [];
    foreach($R as $key => $r){
        $passed = false;
        if($r == "OK"){
            $passed = true;


        }
        $groupname = $T[$key];
        $endchar = substr($groupname,strlen($groupname)-1,1);


        if(is_numeric($endchar)){
            $grouparr[$groupname]= $groupname;
            if($passed)
                $group[$groupname] = $groupname;
            //$cnt++;

        }
        else{
            $groupname = substr($groupname,0,strlen($groupname)-1);
            $grouparr[$groupname]= $groupname;
            
            if($passed)
                $group[$groupname] = $groupname;

        }

    }


    echo "<pre>", print_r($group); echo "<br>",count($group);
    echo "<pre>", print_r($grouparr),"<br>",count($grouparr);
    echo "<br>T=".sizeof($T);
    $grpcnt = sizeof($group);
    $totGrpCnt = sizeof($T);
    return (int)floor(($grpcnt*100)/$totGrpCnt);
}

$T[0] = "test1a";  $R[0] = "Wrong answer";
$T[1] = "test2"  ; $R[1] = "OK";
$T[2] = "test1b"  ;$R[2] = "Runtime error";
$T[3] = "test1c" ; $R[3] = "OK";
$T[4] = "test3"  ; $R[4] = "Time limit exceeded";

echo "</br>", solution($T, $R);