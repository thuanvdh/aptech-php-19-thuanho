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
        $myfile = fopen("thuantest.txt", "w") or die("Can't open the file.");
        
        fwrite($myfile, "My name is Ho Van Thuan 1234 <br>");
        fwrite($myfile, "My project is Hello PHP 19");
        fclose($myfile);
        echo readfile("thuantest.txt");
    ?>
</body>
</html>