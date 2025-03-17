<?php 

for($i = 1; $i <= 10; $i++){
    echo $i;
}

// fake gmail create
for($i = 0; $i < 10; $i++){
    echo "Creating user: user$i@gmail.com \n";
}

$cart = [
    ["name" => "Laptop", "price" => 70000, "qty" => 3],
    ["name" => "Mouse", "price" => 750, "qty" => 10],
    ["name" => "Keyboard", "price" => 950, "qty" => 10]
];
$total = 0;

$count = count($cart);
for($i = 0; $i < $count; $i++){
    $itemTotalPrice = $cart[$i]['price'] * $cart[$i]['qty'];
    echo "Name: {$cart[$i]['name']} -  {$cart[$i]['price']} * {$cart[$i]['qty']} = $itemTotalPrice.\n";
    $total += $itemTotalPrice;
}

echo "Total Price: $$total";

/* Output 
Name: Laptop -  70000 * 3 = 210000.
Name: Mouse -  750 * 10 = 7500.
Name: Keyboard -  950 * 10 = 9500.
Total Price: $227000
*/

for($i = 1; $i <= 10; $i++){
    echo "Order #ORD" . str_pad($i, 4, 0, STR_PAD_LEFT) . "\n";
}
/* 
Order #ORD0001
Order #ORD0002
Order #ORD0003
Order #ORD0004
Order #ORD0005
Order #ORD0006
Order #ORD0007
Order #ORD0008
Order #ORD0009
Order #ORD0010
*/


// Displaying Star Ratings
$rating = 1;
for($i = 1; $i <= 5; $i++){
    echo ($i <= $rating) ? "★" : "☆"; // ★★★★☆
}

echo "\n";
// Creating a Simple Password Generator
$characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
$password = "";

for($i = 0; $i < 10; $i++){
    $password .= $characters[rand(0, strlen($characters) - 1)];
}
echo $password;

for ($i = 1; $i <= 5; $i++) {
    echo "Dice: " . rand(1, 6) . "\n";
}