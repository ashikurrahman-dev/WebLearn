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

function filterByReleaseYear($movies, $releaseYear)
{
    $filterMovies = [];
    foreach ($movies as $movie) {
        if ($movie['releaseYear'] === $releaseYear) {
            $filterMovies[] = $movie;
        }
    }
    return $filterMovies;
}
$releaseYear = 2025;
?>

