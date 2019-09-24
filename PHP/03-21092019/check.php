<h1>Helloo</h1>
<?php
    $pass = $_GET['password'];
    $ten = $_GET['ten'];
    echo "xin chao " . $_GET['ten'] . " khau cua ban la " . $pass;
    if ($pass == 123 && $ten == 'thuan') {
        // echo "dang nhap thanh cong";
        header('Location: trang-chu.php');

    }
    else {
        // echo "dang nhap that bai"
        header('Location: 404.php');
    }
?>