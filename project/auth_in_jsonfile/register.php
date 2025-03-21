<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']) ?? '';
    $password = trim($_POST['password']) ?? '';
    $fileName = 'db.json';

    if (empty($username) || empty($password)) {
        $error = "Please fill in all fields";
    } else {
        // load existing users
        $file = file_get_contents($fileName);
        $users = json_decode($file, true);

        // Check if username already exist
        $userExist = false;
        foreach ($users as $user) {
            if ($user['username'] === $username) {
                $userExist = true;
                break;
            }
        }

        if (!$userExist) {
            $users[] = [
                'username' => $username,
                'password' => password_hash($password, PASSWORD_BCRYPT)
            ];

            // Save to db.json
            file_put_contents($fileName, json_encode($users, JSON_PRETTY_PRINT));
            $_SESSION['username'] = $username;
            header('Location: dashboard.php');
            exit;
        } else {
            $error = "Username already exist";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-96">
        <h1 class="text-2xl font-bold mb-d text-center">Register</h1>
        <?php if (isset($error)): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <?= $error ?>
            </div>
        <?php endif; ?>
        <form action="" method="post">
            <div class="mb-4">
                <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                <input type="text" id="username" name="username"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            </div>
            <button type="submit"
                class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Register</button>
        </form>
        <p class="mt-4 text-center text-sm text-gray-600">
            Already have an account? <a href="login.php" class="underline text-blue-500 hover:text-blue-700">Login</a>
        </p>
    </div>

</body>

</html>