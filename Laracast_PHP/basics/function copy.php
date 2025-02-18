<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $movies = [
        [
            'name' => 'Marco',
            'releaseYear' => 2024,
            'url' => 'https://sunplex.net/movies/marco/'
        ],
        [
            'name' => 'Game Changer',
            'releaseYear' => 2025,
            'url' => 'https://sunplex.net/movies/game-changer/'
        ],
        [
            'name' => 'The Love Scam',
            'releaseYear' => 2025,
            'url' => 'https://sunplex.net/movies/the-love-scam/'
        ],
        [
            'name' => 'Love of The Irish',
            'releaseYear' => 2025,
            'url' => 'https://sunplex.net/movies/love-of-the-irish/'
        ],
        [
            'name' => 'Zero se Restart',
            'releaseYear' => 2024,
            'url' => 'https://sunplex.net/movies/love-of-the-irish/'
        ],
    ];
    $releaseYear = 2025;

    $filterMovies = array_filter($movies, function($movie) use ($releaseYear){
        return $movie['releaseYear'] === $releaseYear;
    });

    ?>
    <h1>Movie Lis of <?= $releaseYear ?></h1>
    <ul>
        <?php foreach ($filterMovies as $movie): ?>

            <li>
                <a href="<?= $movie['url'] ?>" target="_blank">
                    <?= $movie['name'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>