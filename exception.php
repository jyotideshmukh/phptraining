<?php


/*function checkNum($number) {
    if($number>1) {
        throw new Exception("Value must be 1 or below");
    }
    return true;
}

//trigger exception
checkNum(2);
*/

/*function checkNum($number) {
  if($number>1) {
      throw new Exception("Value must be 1 or below");
  }
  return true;
}

//trigger exception in a "try" block
try {
    checkNum(2);
    //If the exception is thrown, this text will not be shown
    echo 'If you see this, the number is 1 or below';
}

//catch exception
catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
}

echo "my name is jyoti";*/

require_once __DIR__."/src/Employee/Exceptions/CustomException.php";
use Wipro\Employee\Exception\CustomException;

$email = "someone@example...com";

try {
    //check if
    if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
        //throw exception if email is not valid
        throw new CustomException($email);
    }
}

catch (customException $e) {
    //display custom message
    echo $e->errorMessage();
}
?>