<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
</head>
<body>
    <?php 

        $books = [
            "Immortals of Melhua",
            "War of Lanka",
            "Now that ypu are rich"
        ];
        ?>
    <ul>
        <?php 
            foreach($books as $book)
                echo "<li> {$book} </li>"
        ?>  
    </ul>

</body>
</html> 


<?php   foreach ($books as $book) :?>
    <li> <?="$book" ?></li>
<?php endforeach; ?>
