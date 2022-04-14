<?php


namespace Wipro\Employee;


interface sendNotification
{
    public function login();
    public function notify($message);
    public function logout();

}