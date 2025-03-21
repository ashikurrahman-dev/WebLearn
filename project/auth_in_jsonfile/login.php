<?php 
session_start();

if(isset($_SESSION['username'])){
    header('Location: dashboard.php');
    exit;
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if(empty($username) || empty($password)){
        $error = 'Please field in all fields';
    } else{
        $users = json_decode(file_get_contents('db.json'), true);
        // var_dump($users);
        // die();
        // find user
        $userFound = false;
        foreach($users as $user){
            // var_dump($user);
            // die();
            if($user['username'] === $username && password_verify($password, $user['password'])){
                $userFound = true;
                break;
            }
        }

        if($userFound){
            $_SESSION['username'] = $username;
            header('Location: dashboard.php');
            exit;
        } else{
            $error = 'Invalid username or password!';
        }
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
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-96">
        <h1 class="text-2xl font-bold mb-d text-center">Login</h1>
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
                class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Login</button>
        </form>
        <p class="mt-4 text-center text-sm text-gray-600">
            Don't have an account? <a href="register.php" class="underline text-blue-500 hover:text-blue-700">register</a>
        </p>
    </div>

</body>
</html>
