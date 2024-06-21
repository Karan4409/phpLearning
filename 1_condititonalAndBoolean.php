<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin:0;
            height:2rem;
            display: flex;
            font-family: sans-serif;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
    <?php
        $message = "you have read the book";
        $name = "Now you are rich";
        $read = true;
        if($read)
            $message = "You have read the book";
        else
            $message = "go and read";
        ?>
    <h1> <?= $message ?></h1>
</body>
</html>