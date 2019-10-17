<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dulieudangnhap";

$pass = $_POST['pass'];
$ten = $_POST['name'];
$email = $_POST['email'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO dangnhap (name,email,password)
VALUES ('$ten','$email','$pass')";

if (mysqli_query($conn, $sql)) {
    echo "Ban da gui thong tin vao database";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>