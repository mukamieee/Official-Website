<?php
$servername = "localhost"; 
$username = "root";
$password = "";
$dbname = "database_1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// A new mysqli object is created, and a connection to the database is attempted 
// using the provided server name, username, password, and database name.
// $conn is the variable that will hold the connection object.

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error); 
  // If there is an error, the script stops executing (die) and outputs an 
  // error message that includes the connection error.
}
echo "Connected successfully";
?>