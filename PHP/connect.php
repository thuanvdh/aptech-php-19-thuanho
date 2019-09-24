<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$hostName = 'localhost';
$userName = 'root';
$passWord = '';
$databaseName = 'thuan_php_19';
// khởi tạo kết nối
$connect = new mysqli($hostName, $userName, $passWord, $databaseName);
//Kiểm tra kết nối
if ($connect->connect_error) {
    exit('Kết nối không thành công. chi tiết lỗi:' . $connect->connect_error);
}
// thành công
echo 'Kết nối thành công!';
?>
</body>
</html>