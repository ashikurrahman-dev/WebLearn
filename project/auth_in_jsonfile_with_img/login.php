<?php
require('function.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $email = validateInput($_POST['email']);
        $password = validateInput($_POST['password']);

        if ($email === '' || $password === '') {
            throw new Exception('Input field are required');
        }

        validateEmail($email);

        $users = readData();
        foreach ($users as $user) {
            if ($user['email'] === $email && password_verify($password, $user['password'])) {
                $_SESSION['user'] = $user;
                header('Location: dashboard.php');
                exit;
            }
        }
        throw new Exception('Invalid email or password');
    } catch (Exception $e) {
        $errorMessage = $e->getMessage();
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-96">
        <h1 class="text-2xl font-bold mb-6 text-center">Login</h1>
        <form action="" method="post" class="space-y-4">
            <input type="email" name="email" placeholder="Email" 
                class="w-full p-2 border border-gray-300 rounded-lg">
            <input type="password" name="password" placeholder="Password" 
                class="w-full p-2 border border-gray-300 rounded-lg">
            <?php if (isset($errorMessage)): ?>
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                    <?= $errorMessage ?>
                </div>
            <?php endif; ?>
            <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded-lg hover:bg-blue-600">Login</button>
        </form>
        <p class="mt-4 text-center">Don't have an account? <a href="register.php"
                class="text-blue-500 hover:underline">Register</a></p>
    </div>
</body>

</html>