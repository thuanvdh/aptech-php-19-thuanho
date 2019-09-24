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
        $myName = "Thuan";
        setcookie($myName, 'Ho Van Thuan',time() + 30000);
        if(!isset($_COOKIE[$myName])) {
            echo "Cookie not set";
        }
        else {
            echo "Value of cookie myName is : " . $_COOKIE[$myName];
        }
    ?>
</body>
</html>