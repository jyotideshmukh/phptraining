<?php
namespace  App\Database;

define("NEW_LINE","<br>");

//https://symfonycasts.com/screencast/php-namespaces/namespaces
class DBConn
{
    public  $connection;
    private $servername = "localhost";
    private $username = "Username";
    private $password = "Password";
    private $dbname = "Dbname";

    /**
     * DBConnection constructor.
     * @param $servername
     * @param $username
     * @param $password
     */
    public function __construct($servername,$username,$password)
    {
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * @return mysqli
     */
    public function getConnection(){
        try {
            $this->connection = new \mysqli($this->servername,
                $this->username,
                $this->password);


        }catch(\Exception $e){
            if ($this->connection->connect_error) {
                echo "SERVER NAME=",$this->servername,NEW_LINE;
                echo "USERNAME=",$this->username ,NEW_LINE;
                echo "PASSWORD=",$this->password,NEW_LINE;
                die("Connection failed: " . $this->connection->connect_error);

            }

        }
        return $this->connection;
    }

    /**
     * @param $dbname
     */
    public function createDB($dbname){
        try {

            $sql = "CREATE DATABASE $dbname";
            if ($this->connection->query($sql) === TRUE) {
                $this->dbname = $dbname;
                echo "Database created successfully";
            }
        }catch(\Exception $e) {

            echo "Error creating database: " . $this->connection->error;

        }

    }




}