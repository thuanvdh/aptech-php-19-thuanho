<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO mytable (id,firstname, lastname, email)
VALUES (1,'pooon', 'Doe', 'johndow@example.com'),
        (2,'John', 'Doe', 'johasdn@example.com'),
        (3,'Tihn', 'Hi', 'johfasfn@example.com'),
        (4,'HJhn', 'li', 'joggdshn@example.com')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
