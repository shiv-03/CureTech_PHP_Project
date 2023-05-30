<?php

// connecting to a database
$servername = "localhost";
$username  = "root";
$password = "";
$database = "Concern";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("your connection doesnt established " . mysqli_connect_error());
}
