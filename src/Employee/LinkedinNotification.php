<?php


namespace Wipro\Employee;


class LinkedinNotification implements sendNotification
{

    public function login()
    {
        // TODO: Implement login() method.
        echo "Loggin to Linkedin";
    }

    public function notify($message)
    {
        // TODO: Implement notify() method.
        echo "Sending notification on Linkedin".$message;
    }

    public function logout()
    {
        // TODO: Implement logout() method.
        echo "Logout linkedin";
    }
}