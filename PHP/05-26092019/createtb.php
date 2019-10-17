<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dulieudangnhap";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE dangnhap (
name VARCHAR(30) NOT NULL,
email VARCHAR(50),
password VARCHAR(30) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>