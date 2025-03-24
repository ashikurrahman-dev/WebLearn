<?php 

require 'function.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    try{
        $name = validateInput($_POST['name']);
        $email = validateInput($_POST['email']);
        $phone = validateInput($_POST['phone']);
        $address = validateInput($_POST['address']);
        $password = validateInput($_POST['password']);
        $img = uploadsImage($_FILES['img']);

        if($name === '' || $email === '' || $phone === '' || $address === '' || $password === ''){
            throw new Exception('All fields are required');
        }
        
        validateEmail($email);
        validateNumber($phone);

        if(!isEmailUnique($email)){
            throw new Exception('Email already exist');
        }

        if($img){
            $user = [
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'address' => $address,
                'password' => password_hash($password, PASSWORD_BCRYPT),
                'img' => $img
            ];
            $users = readData();
            $users[] = $user;
            writeData($users);
            
            header('Location: login.php');
            exit;
        } else{
            throw new exception('img uploads failed');
        }


    } catch(Exception $e){
        $errorMessage = $e->getMessage();
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
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-96">
        <h1 class="text-2xl font-bold mb-6 text-center">Register</h1>
        <form action="" method="post" enctype="multipart/form-data" class="space-y-4">
            <input type="text" name="name" placeholder="Name"  class="w-full p-2 border border-gray-300 rounded-lg">
            <input type="text" name="email" placeholder="Email"  class="w-full p-2 border border-gray-300 rounded-lg">
            <input type="text" name="phone" placeholder="Phone"  class="w-full p-2 border border-gray-300 rounded-lg">
            <input type="text" name="address" placeholder="Address"  class="w-full p-2 border border-gray-300 rounded-lg">
            <input type="password" name="password" placeholder="Password"  class="w-full p-2 border border-gray-300 rounded-lg">
            <input type="file" name="img"  class="w-full p-2 border border-gray-300 rounded-lg">

            <?php if (isset($errorMessage)): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <?= $errorMessage ?>
            </div>
        <?php endif; ?>

            <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded-lg hover:bg-blue-600">Register</button>
        </form>
        <p class="mt-4 text-center">Already have an account? <a href="login.php" class="text-blue-500 hover:underline">Login</a></p>
    </div>
</body>
</html>