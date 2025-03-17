<?php 

$names = ['Ashik', 'Jahid', 'Hasan'];
foreach($names as $name){
    echo $name . " \n";
}

$peoples = [
    ['Ashik', 21, 'Pabna'],
    ['Rabbi', 21, 'Pabna'],
    ['Hasan', 21, 'Dhaka']
];

foreach($peoples as $people){
    echo "Name: $people[0], Age: $people[1], City: $people[2]\n";
}

