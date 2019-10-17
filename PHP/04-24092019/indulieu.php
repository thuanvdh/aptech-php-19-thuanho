<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./bootstrap.css">
</head>
<body>
<?php   $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname,email FROM mytable";
var_dump($sql);
$result = $conn->query($sql);

?>
<div id="container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID </th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
         ?>
            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["firstname"]; ?></td>
                <td><?php echo $row["lastname"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
            </tr> 
            <?php } 
            }
            $conn->close(); ?>
        </tbody>
    </table> 
</body>
</html>
