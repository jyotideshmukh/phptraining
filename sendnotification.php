<?php
define("NEW_LINE","<br>");
require_once "src/Employee/sendNotification.php";
require_once "src/Employee/FacebookNotification.php";
require_once "src/Employee/LinkedinNotification.php";

$notifyObj = new \Wipro\Employee\FacebookNotification();

$notifyObj->login();
echo NEW_LINE;
$notifyObj->notify("Testing Facebook notification");
echo NEW_LINE;
$notifyObj->logout();
echo NEW_LINE;

echo "****************",NEW_LINE;

$notifyObj = new \Wipro\Employee\LinkedinNotification();
$notifyObj->login();
echo NEW_LINE;
$notifyObj->notify("Testing Linkedin notification");
echo NEW_LINE;
$notifyObj->logout();
