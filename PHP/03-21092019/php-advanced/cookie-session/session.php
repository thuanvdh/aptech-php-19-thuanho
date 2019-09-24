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
    session_start();
    $_SESSION["myName"] = "Ho Van Thuan";
    $_SESSION["myProject"] = "Hello PHP 19";
    echo "session is <br>";
    print_r($_SESSION);
    session_unset();
    session_destroy();
    ?>
</body>
</html>