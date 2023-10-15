<?php

// Define a Database class to handle database operations.
class Database {
    // Private property to store the database connection.
    private $connection;

    // Constructor: automatically connects to the database when an object is created.
    function __construct() {
        $this->connect_db(); // Call the connect_db method when a Database object is created.
    }

    // Method to establish a database connection.
    public function connect_db() {
        $this->connection = mysqli_connect('localhost', 'root', '', 'dbms1');

        // this is to Check if the connection was successful, otherwise, display an error message and end the script.
        if (mysqli_connect_error()) {
            die("Database Connection Failed: " . mysqli_connect_error());
        }
    }

    // this Method to create a new employee record.
    public function create($fname, $lname, $email, $hours_worked, $salary) {
        $sql = "INSERT INTO employee (fname, lname, email, hours_worked, salary) VALUES ('$fname', '$lname', '$email', '$hours_worked', '$salary')";
        $res = mysqli_query($this->connection, $sql);

        // Check if the query was successful and return true or false accordingly.
        if ($res) {
            return true;
        } else {
            return false;
        }
    }

    // Method to read and retrieve all employee records.
    public function read() {
        $sql = "SELECT * FROM employee";
        $res = mysqli_query($this->connection, $sql);

        // Return the result of the SELECT query.
        return $res;
    }
}

// Create an instance of the Database class for database operations.
$database = new Database();

?>




 