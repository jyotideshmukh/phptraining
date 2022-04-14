<?php

require_once "src/Employee/Employee.php";
require_once "src/Employee/Address.php";
use Wipro\Employee\Address;
use Wipro\Employee\Employee;
define("NEW_LINE", "<br>");

$address = new Address('101','pune',401234);
$emp  = new Employee('Jyoti',1,$address);

echo $emp->getName(),NEW_LINE;


$emp1  = new Employee('Ashish',1,new Address('102','pune',401234));

echo $emp1->getName(),NEW_LINE;