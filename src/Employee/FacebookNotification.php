<?php


namespace Wipro\Employee;

class FacebookNotification implements sendNotification
{

    public function login()
    {
        // TODO: Implement login() method.
        echo "Loggin to facebook";
    }

    public function notify($message)
    {
        // TODO: Implement notify() method.
        echo "Sending notification facebook ".$message;
    }

    public function logout()
    {
        // TODO: Implement logout() method.
        echo "Logout facebook";
    }
    public function print(){

    }


}