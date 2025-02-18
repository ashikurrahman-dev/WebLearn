<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1 style="color:red;">
        <?php
            echo "Hello world";             
        ?>
    </h1>
    <h1 style="color: blue;">
        <?php
            echo "Hello Ashik";           
        ?>
    </h1>

    <h2>
        <?php 
            $greeting = "Hello";
            $noun = "Universe";
            echo $greeting . " " . $noun;
        ?>
    </h2>
</body>
</html>