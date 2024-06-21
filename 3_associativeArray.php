<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asoosciative array</title>
</head>
<body>
    <?php 
         $books = [
            [
                'Name' =>  'Immortals of Melhua',
                'releasedYear' => '1994',
                'Author' => 'Amish',
                'purachseUrl' => 'http://example.com'
            ]
            ];
    ?>

    <ul>
       <?php foreach ($books as $book) :?>
        <li>
            <a href = "?= $book['purachseUrl'] ">
                <?= $book['Name']; ?>
                <?= $book['releasedYear']; ?>
            </a>

        </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>