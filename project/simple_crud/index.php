<?php 
    require("config.php");
    try{
        $sql = "SELECT * FROM users";
        $stmt = $pdo->query($sql);
        $data = $stmt->fetchAll();

    } catch(PDOException $e){
        echo $e->getMessage();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Tailwind Table</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-10">
  <div class="max-w-6xl mx-auto bg-white rounded-2xl shadow-lg overflow-hidden">
    <div class="flex items-center justify-between px-6 py-4 border-b border-gray-200">
      <h2 class="text-2xl font-semibold text-gray-800">User Information</h2>
      <a href="<?= BASE_URL; ?>create.php" 
          class="inline-block bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium px-4 py-2 rounded-lg transition duration-200">
  + Add
      </a>
    </div>
    <div class="overflow-x-auto">
      <table class="min-w-full table-auto divide-y divide-gray-200">
        <thead class="bg-gray-50">
          <tr>
            <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 uppercase tracking-wider">Name</th>
            <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 uppercase tracking-wider">Age</th>
            <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 uppercase tracking-wider">Email</th>
            <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 uppercase tracking-wider">Phone</th>
            <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 uppercase tracking-wider">Action</th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            <?php foreach($data as $row) : ?>
          <tr class="hover:bg-gray-50 transition duration-200">
            <td class="px-6 py-4 text-sm text-gray-800"><?= $row['name'] ?></td>
            <td class="px-6 py-4 text-sm text-gray-800"><?= $row['age'] ?></td>
            <td class="px-6 py-4 text-sm text-gray-800"><?= $row['email'] ?></td>
            <td class="px-6 py-4 text-sm text-gray-800"><?= $row['phone'] ?></td>
            <td class="px-6 py-4 text-sm text-gray-800 space-x-2">
              <a href="<?= BASE_URL ?>edit.php?id=<?= $row['id'] ?>" class="bg-green-500 hover:bg-green-600 text-white px-3 py-1 rounded-md text-xs">Edit</a>
              <a href="<?= BASE_URL ?>delete.php?id=<?= $row['id'] ?>" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-md text-xs">Delete</a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
