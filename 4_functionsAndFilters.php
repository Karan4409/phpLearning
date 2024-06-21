<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions and Filters</title>
</head>
<body>
    <?php
        $books = [
            [
                'title' => 'War of Lanka',
                'year' => '2002',
                'author' => 'Amish',
                'publisherUrl' => 'http://example.com'
            ],
            [
                'title' => 'Ravan',
                'year' => '2002',
                'author' => 'Amish',
                'publisherUrl' => 'http://example.com'
            ],
            [
                'title' => 'The Immortals of Meluha',
                'year' => '2002',
                'author' => 'Rahul',
                'publisherUrl' => 'http://example.com'
            ],
        ];

        function filterAuthor($books){
            $filteredBooks = [];
            foreach ($books as $book){
                if($book['author'] === 'Amish') {
                    $filteredBooks[] = $book;
                }
            }
            return $filteredBooks;
        }
    ?>

    <ul>
        <?php foreach(filterAuthor($books) as $book) : ?>
            <li>
                <a href="<?= $book['publisherUrl'] ?>">
                    <?= $book['title']; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
