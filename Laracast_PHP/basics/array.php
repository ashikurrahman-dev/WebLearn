<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Champions Trophy 2025 Team List</h1>

    <?php 
        $teams = [
            'Bangladesh',
            'Australia',
            'India',
            'Pakistan',
            'Afghanistan',
            'England',
            'South Africa',
            'New Zealand'
        ];
    ?>

    <ul>
        <?php foreach($teams as $team) : ?>
            <li> <?= $team ?> </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>