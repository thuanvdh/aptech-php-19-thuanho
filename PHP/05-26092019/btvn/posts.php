<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href = "./boostrap.css">
</head>
<body>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "posts";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "SELECT * FROM poststable
JOIN categoriestable
ON poststable.cat_id = categoriestable.id";

$result = $conn->query($sql);
?>
<div class="container">
    <div class="row">
<?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            ?>
            <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-text"><?php echo "Title : " . $row['title']; ?></h5>
                            <p class="card-text"><?php echo "Description : " . $row['des']; ?></p>
                            <p class="card-text"><?php echo "Categories ID : " . $row['id']; ?></p>
                            <p class="card-text"><?php echo "Categories Name : " . $row['name']; ?></p>
                        </div>
                    </div>
            </div>
                   
        <?php } 
        }
    $conn->close(); ?>
    </div>
</div>
</body>
</html>