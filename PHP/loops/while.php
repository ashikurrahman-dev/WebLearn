<?php 

$i = 1;
while($i <=10){
    echo $i;
    $i++;
}


$balance = 1000;
$installment = 200;
$month = 1;

while($balance > 0){
    echo "Month {$month}: Paid: {$installment}. Remaining balance: " .  ($balance - $installment) . "\n";
    $balance -= $installment;
    $month++;
}

echo "Debt fully paid!";

$correctPassword = "secret123";
$attempts = 0;
$maxAttempts = 3;

while ($attempts < $maxAttempts) {
    $userInput = readline("Enter password: "); // For CLI applications
    if ($userInput === $correctPassword) {
        echo "Access Granted!";
        break;
    }
    $attempts++;
    echo "Incorrect password. Attempts left: " . ($maxAttempts - $attempts) . "\n";
}

if ($attempts === $maxAttempts) {
    echo "Account Locked!";
}

$second = 10;
while($second > 0){
    echo "Sales end in: $second seconds... \n";
    sleep(1);
    $second--;
}
echo "Sale ended";