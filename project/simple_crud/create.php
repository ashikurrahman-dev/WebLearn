<?php 
require("config.php");
require("function.php");
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    try{
        $name = validateInput($_POST['name']);
        $age = validateInput($_POST['age']);
        $email = validateInput($_POST['email']);
        $phone = validateInput($_POST['phone']);

        if($name === ''|| $age === ''|| $email === '' || $phone === '')
        {
            throw new Exception('Input field empty');
        }
        validateEmail($email);

        if( !isEmailUnique($email, $pdo)){
            throw new Exception('Email already exist');
        }
        if ($age <= 0) {
            throw new Exception('Age must be a positive number');
        }
        
            $SQL = "INSERT INTO users(name, age, email, phone) VALUES (:name, :age, :email, :phone)";
            $stmt = $pdo->prepare($SQL);
            $stmt->execute([
                "name"=> $name,
                'age' => $age,
                'email'=> $email,
                'phone'=> $phone
            ]);
            header('Location:' . BASE_URL . 'index.php');
            exit();
       
    } catch(Exception $e){
        $error = $e->getMessage();
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>User Form</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-10">
  <div class="max-w-xl mx-auto bg-white p-8 rounded-2xl shadow-lg">
    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Add New User</h2>
    
    <form action="" method="POST" class="space-y-5">
      
      <!-- Name -->
      <div>
        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
        <input type="text" id="name" name="name" placeholder="Enter name"
               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" />
      </div>
      
      <!-- Age -->
      <div>
        <label for="age" class="block text-sm font-medium text-gray-700 mb-1">Age</label>
        <input type="number" id="age" name="age" placeholder="Enter age"
               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" />
      </div>
      
      <!-- Email -->
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter email"
               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" />
      </div>
      
      <!-- Phone -->
      <div>
        <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone</label>
        <input type="text" id="phone" name="phone" placeholder="Enter phone number"
               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" />
      </div>
      <?php if (!empty($error)) : ?>
        <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded-lg">
            <p class="text-sm font-medium">
            <?= htmlspecialchars($error) ?>
            </p>
        </div>
        <?php endif; ?>

      <!-- Buttons -->
      <div class="flex justify-end space-x-3 pt-4">
        <a href="<?= BASE_URL ?>index.php" 
           class="bg-gray-300 hover:bg-red-400 text-gray-800 font-semibold py-2 px-4 rounded-lg transition duration-200">
          Cancel
        </a>
        <button type="submit"
                class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition duration-200">
          Submit
        </button> 
       </div>

    </form>
  </div>
</body>
</html>
