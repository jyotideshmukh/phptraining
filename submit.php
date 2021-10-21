<?php
    define("NEW_LINE", "<br>");
    //require_once  "src/DBConnection.php";

    $servername = 'localhost';
    $username = 'username';
    $password = 'password';
    $dbname = 'dbname';

    //$conn = new mysqli($servername, $username, $password);
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

   /* $sql = "CREATE DATABASE $dbname";
    if ($conn->query($sql) === TRUE) {
        echo "Database phptraining created successfully",NEW_LINE;
    } else {
        echo "Error creating phptraining: " . $conn->error, NEW_LINE;
    }

    $conn->select_db($dbname);*/

    // sql to create table
   /* $sql = "CREATE TABLE contacts (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    gender ENUM('F','M','O'),
    comment TEXT,
    start_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    if ($conn->query($sql) === TRUE) {
        echo "Table contacts created successfully",NEW_LINE;
    } else {
        echo "Error creating contacts: " . $conn->error,NEW_LINE;
    }*/
    $firstname = 'Ashish';
    $lastname = 'Vishwakarma';
    $email = 'ashish@exapmle.com';
    $gender = 'M';
    $comment = 'This is his comment';
    $sql = "INSERT INTO contacts (firstname, lastname, email, gender,comment)
            VALUES ('".$firstname."', '".$lastname."', '".$email."', '" .$gender."', '".$comment."')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully",NEW_LINE;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error,NEW_LINE;
    }

    /*if(isset($_POST) && !empty($_POST)) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $comment = $_POST['comment'];


        $sql = "INSERT INTO contacts (firstname, lastname, email, gender,comment,start_date)
        VALUES ($firstname, $lastname, $email, $gender, $comment, time())";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }*/

    $conn->close();

    /*$conObj = new DBConnection('localhost',
        'root','jyoti@123');

    $conn = $conObj->getConnection();
    if($conn){
        echo "connected successfully";
    }
    $conObj->createDB("phptraing");*/

