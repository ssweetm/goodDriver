<?php
/**
 * Created by PhpStorm.
 * User: Sadie Sweetman
 * Date: 8/31/2018
 * Time: 7:45 AM
 * This file establishes and destroys the connection with the database
 */

class DatabaseConnection {
    private $host = "cpsc4910.cotds3lejpsm.us-east-2.rds.amazonaws.com"; //hostname of database server
    private $user = "cpsc4910"; //username to access the database
    private $password = "cpsc4910"; //password to access the database
    private $dbname = "GoodDriverDB"; //name of database

    public $connection;  //holds the mysqli connection for this object

    function __construct() {
        //initialize the mysqli connection
        $this->connection = new mysqli($this->host, $this->user, $this->password, $this->dbname);
        //stop execution if connection to database failed
        if ($this->connection->connect_error)
            die("Connection to Database Failed: " . $this->connection->connect_error);
    }

    function __destruct() {
        //close the connection on destruction
        $this->connection->close();
    }

    //temporary function for sending raw sql commands to the database
    function custom_sql($query) {
        return $this->connection->query($query);
    }
}
?>