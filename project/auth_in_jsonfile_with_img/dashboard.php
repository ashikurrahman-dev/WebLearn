<?php 
session_start();
    if(!isset($_SESSION['user'])){
        header('Location: login.php');
        exit;
    }
    $user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-96 text-center">
        <h1 class="text-2xl font-bold mb-6">Welcome, <?= htmlspecialchars($user['name']); ?></h1>
        <img src="<?= htmlspecialchars($user['img']); ?>" alt="Profile Image" class="w-24 h-24 rounded-full mx-auto mb-4 ">
        <p class="text-gray-700"><span class="font-semibold">Email:</span> <?= htmlspecialchars($user['email']); ?></p>
        <p class="text-gray-700"><span class="font-semibold">Phone:</span> <?= htmlspecialchars($user['phone']); ?></p>
        <p class="text-gray-700"><span class="font-semibold">Address:</span> <?= htmlspecialchars($user['address']); ?></p>
        <a href="logout.php" class="mt-6 inline-block bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">Logout</a>
    </div>
</body>
</html>