
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

$email = $_POST['email'];
$ten = $_POST['name'];

$sql = "SELECT * FROM mytable WHERE firstname = '" . $ten . "' AND email = '" . $email . "'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // // output data of each row
    // while($row = mysqli_fetch_assoc($result)) {
    //     echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    echo "Ban da dang nhap thanh cong ";
    }
 else {
    echo "Xin loi, dang nhap that bai";
}

mysqli_close($conn);
?>