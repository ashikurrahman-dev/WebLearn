<?php

$cars = [
    ['Volvo', 300000, 'Black'],
    ['Toyota', 240000, 'Blue'],
    ['BMW', 350000, 'Gray']
];

var_dump($cars);
echo 'Name: ' . $cars[0][0] . ' Price: '. $cars[0][1] . ' and Color: ' . $cars[0][2];

foreach($cars as $car){
    echo "Brand: {$car[0]}, Price: {$car[1]}, Color: {$car[2]}";
}

// Three-Dimensional Array Example

$store = [
    'Electronics' => [
        ['Laptop', 'Dell', 80000],
        ['Phone', 'Samsung', 60000]
    ],
    'Clothing' => [
        ['Shirt', 'Nike', 3000],
        ['Jeans', 'Levis', 5000]
    ]
];

echo $store['Electronics'][0][0]; // Laptop

foreach($store as $categories => $products){
    echo 'Categories: ' . $categories . "\n";
    foreach($products as $product){
        echo "Product: {$product[0]}, Brand: {$product[1]}, Price: {$product[2]} \n";
    }
}
// outputs
/* 
Categories: Electronics
Product: Laptop, Brand: Dell, Price: 80000 
Product: Phone, Brand: Samsung, Price: 60000 
Categories: Clothing
Product: Shirt, Brand: Nike, Price: 3000 
Product: Jeans, Brand: Levis, Price: 5000 
*/


$stores = [
    'Electronics' => [
        'Laptops' => [
            ['brand' => 'Dell', 'model' => 'XPS 13', 'price' => 80000],
            ['brand' => 'Apple', 'model' => 'MacBook Air', 'price' => 100000]
        ],
        'Phones' => [
            ['brand' => 'Samsung', 'model' => 'Galaxy S23', 'price' => 60000],
            ['brand' => 'Apple', 'model' => 'iPhone 15', 'price' => 120000]
        ]
    ],
    'Clothing' => [
        'Men' => [
            ['brand' => 'Nike', 'type' => 'T-Shirt', 'price' => 3000],
            ['brand' => 'Adidas', 'type' => 'Jacket', 'price' => 7000]
        ],
        'Women' => [
            ['brand' => 'Zara', 'type' => 'Dress', 'price' => 5000],
            ['brand' => 'H&M', 'type' => 'Skirt', 'price' => 4000]
        ]
    ]
];

echo $stores['Electronics']['Phones'][0]['brand']; // Samsung
echo $stores['Clothing']['Men'][1]['brand']; // Adidas


foreach($stores as $category => $subCategories){
    echo "Categories: {$category} \n";
    foreach($subCategories as $subCategory => $products){
        echo "Subcategory: {$subCategory} \n";
        foreach($products as $product){
            echo "Brand: {$product['brand']}, \n Type: " . ($product['model'] ?? $product['type']) . ",\n Price: {$product['price']} \n";

        }
    }
}