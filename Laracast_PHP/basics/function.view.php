<?php require('function.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Movie Lis of <?= $releaseYear ?></h1>
    <ul>
        <?php foreach (filterByReleaseYear($movies, $releaseYear) as $movie): ?>

            <li>
                <a href="<?= $movie['url'] ?>" target="_blank">
                    <?= $movie['name'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>