<?php

define("HOSTNAME", "localhost:3307");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "crud_operation");

// Establishing a connection to the database
$connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

// Checking if the connection was successful
if (!$connection) {
    die("Couldn't connect to database: " . mysqli_connect_error());
} 

?>
