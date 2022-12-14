<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $movies = [
        [
            'title' => 'Space Jam',
            'releaseDate' => '1990'
        ],
        [
            'title' => 'inception',
            'releaseDate' => '2001'
        ]
    ];


    $filterMovies = array_filter($movies, function($movie) {
        return $movie['releaseDate'] >= '2000';
    });
    ?>
    <ul>
        <?php foreach ($filterMovies as $movie) : ?>
            <li>
                <?= $movie['title'] . ' : ' . 'Publised ' . $movie['releaseDate']; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>