<?php

$i = 0;
$menu = "1 : keyboard\n";
$menu .= "2 : Mouse\n";
$menu .= "3 : CPU\n";
$menu .= "4 : Monitor\n";
$menu .= "5 : Memory Card \n";

$parts = [1=> 'Keyboard', 2=>'Mouse',3=>'CPU', 4 =>'Monitor',5=>'Memory Card'];
$cart =[];

do{
  echo $menu;
  ///
    $choice = (int) readline("Enter the part name\n");
    if($choice >=1 && $choice <= 5 )
        $cart[] = $parts[$choice];
    if($choice == 0)
        break;
}while($choice >=1 && $choice <=5);

//echo "<pre>", print_r($cart);

echo "\n". "Your cart is.\n";
foreach($cart as $key => $value){
    echo "\n".($key+1)." = ".$value;
}