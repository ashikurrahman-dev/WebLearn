<?php 
 $dsn = "mysql:host=localhost;dbname=test";
 $username = "root";
 $password = "root";

 try{
    $pdo = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
    $sql = "SELECT * FROM user";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

   //  if($stmt->rowCount() > 0){
   //    while($row = $stmt->fetch()){
   //       echo "Name: " . $row['name']. "<br>";
   //       echo "Roll: " . $row['roll']. "<br>";
   //       echo "Phone: " . $row['phone']. "<br>"."<br>";
   //    }
   //  } else{
   //       echo "No records found";
   //  }

   $data = $stmt->fetchAll();
   // if($data > 0){
   //    foreach($data as $row){
   //       echo "Name: " . $row['name']. "<br>";
   //       echo "Roll: " . $row['roll']. "<br>";
   //       echo "Phone: " . $row['phone']. "<br>"."<br>";
   //    }
   // } else{
   //    echo "No data found";
   // }

 } catch(PDOException $e){
    echo $e->getMessage();
 }

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Table</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
  <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-md overflow-hidden">
    <h2 class="text-2xl font-semibold text-gray-800 p-4 bg-gray-50">Student Records</h2>
    
    <!-- Table -->
    <div class="overflow-x-auto">
      <table class="min-w-full divide-y divide-gray-200">
        <!-- Table Header -->
        <thead class="bg-gray-50">
          <tr>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Roll</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Phone</th>
          </tr>
        </thead>
        
        <!-- Table Body -->
        <tbody class="bg-white divide-y divide-gray-200">
         <?php foreach($data as $row) : ?>
          <tr class="hover:bg-gray-50">
            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"><?= $row['name'] ?></td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= $row['roll'] ?></td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= $row['phone'] ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>