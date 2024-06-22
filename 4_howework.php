<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework</title>
</head>
<body>
    <?php
        $movies = [
            [
                'Name' => 'Taare Zameemn Par',
                'ReleaseYear' => '2005',
                'Song'=> 'Tu dhoop hai'
            ],
            [
                'Name' => 'Om shanti Om',
                'ReleaseYear' => '1998',
                'Song'=> 'Mein hu na'
            ],
            [
                'Name' => 'Titanic',
                'ReleaseYear' => '2005',
                'Song'=> 'See you again'
            ],

        ];

        function after2k($movies){
            $mt = [];
            foreach ($movies as $movie){
                if($movie['ReleaseYear'] >= 2000)
                    $mt[] = $movie;
            }
            return $mt;
        }
    ?>

    <ul>
        <?php foreach(after2k($movies) as $movie){ ?>
            <li>
                <?= $movie['Name'] ?>
            </li>
        <?php } ?>
    </ul>
</body>
</html>